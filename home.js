const btnlogin = document.querySelector('.btnlogin');

btnlogin.addEventListener('click', () =>{
    container1.classList.add('active-pop');
  }); 

  function loadlogin(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 &&
            this.status == 200){
                document.getElementById("webproject").innerHTML=this.responseText;
            }

    };
    xhttp.open("GET", "index.php",true)
    xhttp.send();
  }
