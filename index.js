const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");      
const container = document.getElementById("container");
const btnHome = document.querySelector(".btn-home");
const btnlogin = document.querySelector('.btnlogin');
const docport = document.querySelector('.doctor');
const form  = document.querySelector('.form');
const body = document.querySelector('body');
      signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
      });

      signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
      });

      btnlogin.addEventListener('click', () =>{
        container.classList.add('active-pop');
      }); 

btnHome.addEventListener("click", ()=> {
  container.classList.remove('active-pop')  
})
docport.addEventListener("click",() =>{
   container.classList.toggle('active-doc')
   form.classList.add('active-doc')
   body.classList.add('active-doc')
   
});
