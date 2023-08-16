<?php
// @include 'home.php';
$conn = mysqli_connect("localhost", "root", "", "user_db");

if (isset($_POST['login_btn'])) {
    $Name = mysqli_real_escape_string($conn, $_POST['Name']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Password = md5($_POST['Password']);
    $CPassword = md5($_POST['CPassword']);


    $select = "SELECT * FROM userdata WHERE Email='$Email' && Password = '$Password'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exist!';

    } else {
        if ($Password != $CPassword) {
            $error[] = 'password not matched';
        } else {
            $insert = "INSERT INTO userdata(Name,Email,Password) VALUES('$Name','$Email','$Password')";
            mysqli_query($conn, $insert);
            header('location:index.php');

        }
    }

}
;
?>