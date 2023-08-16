<?php
// @include 'home.php';
$valid="";
$conn = mysqli_connect("localhost", "root", "", "user_db");

if (isset($_POST['loginbtn'])) {
    // $Name = mysqli_real_escape_string($conn, $_POST['Name']);
    $Email = $_POST['Email'];
    $Password = md5($_POST['Password']);
    // $CPassword = md5($_POST['CPassword']);
    if(empty($_POST['Email'])||empty($_POST['Password'])){
        $valid="<br>username or password cannot be empty";
    }
    else{
        $select = "SELECT * FROM userdata WHERE Email='$Email' && Password = '$Password'";
        
        $result = mysqli_query($conn, $select);
        echo($result->num_rows);
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_array($result);
            header("Location:home.php");


        } else {
            $valid = '<br>incorrect email or password';
        }
    }

}
;
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login/signup</title>
  <link rel="stylesheet" href="index.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header class="header">
    <nav class="nav">
      <ul>
        <li>
          <a href="" class="heading">unihospice</a>
        </li>
        <li><a href="home.php" class="btn-home">Home</a></li>
        <li><a href="#" class="about">About</a></li>
        <li><a href="#" class="sevice">Services</a></li>
        <li><a href="#" class="contact">Contact</a></li>
        <button class="btnlogin">sign in</button>
      </ul>
    </nav>
  </header>
  <div class="container" id="container">
    <span class="icon"><ion-icon name="close-outline"></ion-icon></span>
    <div class="form-container sign-up-container">
      <!-- signup -->
      <form action="register_form.php" method="post" class="form">
        <h1>Create Account</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or use your email for registration</span>
        <!-- <?php
        if (isset($error)) {
          foreach ($error as $error) {
            echo '<span class = "error">' . $error . '</span>';
          }
          ;
        }
        ;
        ?> -->
        <input type="text" placeholder="Name" name="Name" />
        <input type="email" placeholder="Email" name="Email" />
        <input type="password" placeholder="Password" name="Password" />
        <input type="password" placeholder="confirm Password" name="CPassword" />
        <button class="login_btn" name="login_btn">Sign Up</button>
      </form>
    </div>
    <!-- sign in  -->
    <div class="form-container sign-in-container">
      <form class="form" method="post">
        <h1>Sign in</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or use your account</span>
        <span><?php echo $valid;?></span>
        <input type="email" placeholder="Email" name="Email" />
        <input type="password" placeholder="Password" name="Password" />
        <a href="#" class="fpass">Forgot your password?</a>
        <a href="#" class="doctor">Are you a doctor?</a>
        <button class="loginbtn" name="loginbtn">Sign In</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>
            To keep connected with us please login with your personal info
          </p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, !</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <p></p>
  </footer>
  <script src="index.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>