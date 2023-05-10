<?php
  $server = "localhost";
  $username = "root";
  $pwd = "";
  $database = "garagego";
  
  $con = mysqli_connect($server , $username , $pwd , $database);
  
  if(!$con)
  {
      die("error deleting record :".mysqli_error($con));
  }
//   else 
//   {
//       echo "connected";
//   }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Handlee&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@1,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

/* font-family: 'Handlee', cursive; */
/* font-family: 'Rubik Distressed', cursive;
font-family: 'Comic Neue', cursive; */
/* font-family: 'Roboto', sans-serif; */

    .signup{
        background-color:#F3F63A;
    width: 500px;
    height: 600px;
    position: relative;
    top: 25px;
    left: 35px;
    border-radius: 7%;
    opacity: 0.6;  
    
    }
    .signup .form {
        
        display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    }
    .signup .form input{
        margin-top: 20px;
        width: 300px;
        border: 1px solid yellow;
        height: 45px;
    }
    .signup .form .btn {
        margin-top: 20px;
        width: 200px;
        height: 35px;
    }
    .signup h1{
        font-family: 'Roboto', sans-serif;
        font-weight: 100;
        font-size: 30px;
        transform: translate(120px , 0);
        margin-top: 10px;
    }
    .signup img{
        width: 100px;
        transform: translate(200px , 10px);
    }
    .login-btn{
        transform: translate(600px , 100px);
    }
    .signup-btn{
        transform: translate(700px , 100px);
    }
    .e-login-btn{
        transform: translate(800px , 100px);
    }
    .e-login{
        background-color:#F3F63A;
    width: 500px;
    height: 600px;
    position: relative;
    top: 25px;
    left: 35px;
    border-radius: 7%;
    opacity: 0.6;  
    }
    .e-login .form{
        display: flex;
        justify-content: space-around;
        flex-direction: column;
        align-items: center;
    }
    .e-login .form input{
        margin-top: 20px;
        height: 40px;
        width: 300px;
        
    }
    .e-login h1{
        font-family: 'Roboto', sans-serif;
        font-weight: 100;
        font-size: 30px;
        transform: translate(120px , 0);
        margin-bottom: 10px;

    }
    .e-login img{
        width: 100px;
        transform: translate(200px , 10px);
        margin-top: 80px;
        margin-bottom: 20px;
    }
    .e-login .form .btn{
        width: 250px;
        margin-top: 20px;
    }
    
</style>


    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body class="login-page">
    <img src="image/wheel.png" alt="" class="wheel">
    
    <button class="login-btn btn btn-outline-success">login</button>
    <button class="signup-btn btn btn-outline-success">Sign Up</button>
    <button class="e-login-btn btn btn-outline-success"> Company </button>
    <div class="center-box">
            <div class="login-section">
                <img class="mb-4 " src="image/logo.png" alt="Logo" >
                <h1 class="h3 mb-3 fw-normal">WELCOME ✌</h1>
            <div class="input-section">
                <div class="form-floating">
                    <input placeholder="your name" type="text " class="form-control" >
                    <label for="floatingInput"> Name</label> 
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" placeholder="Email">
                    <label for="floatingInput">abc@gmail.com</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control " placeholder="🤫 passcode ">
                    <label for="floatingPassword"> 🤫 Passcode </label>
                </div>
            </div>
                <div class="checkbox mb-3">
                    <label for="">
                        <input type="checkbox" value="remember-me">
                        "Remember me"
                    </label>
                </div>
                <div>
                     <a href="user.php"> <button class=" btn btn-lg btn-primary  " type="submit">
                        Sign me 
                    </button> </a>
                </div>
                    
            </div>
        
            <div class="signup">
                <img src="image/logo.png" alt="">
                <h1>Create an account 💡</h1>
                <form action="login.php" method = "post">
                <div class="form">
                    <input type="text " placeholder="First name" name="name">
                    <input type="text " placeholder="Second name">
                    <input type="text " placeholder="Email">
                    <input type="password" placeholder=" 🤫 password" name="password">
                    <input type="password" placeholder=" 🤫 confirm password">
                    <button name="submit" class="btn btn-primary "> Create </button>
                </div>
                </form>
            </div>

            <?php
                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    $password = $_POST['password'];
                    

                    $sql = "insert into login(name , password ) values ('$name' , '$password')";

                    if (mysqli_query($con , $sql))
                    {
                        echo "<script> alert ('Account created successfully')</script>";
                    }
                    else
                    {
                        echo "error : ".mysqli_error($con);
                    }
                    mysqli_close($con);
                    }

                
            ?>
        




            <div class="e-login">
                <img src="image/logo.png" alt="">
                <h1>Welcome back 🖐</h1>
                <div class="form">
                    <input type="text " placeholder="Emplayee ID">
                    <input type="password" placeholder=" 🤫 Passcode">
                    <a href="form.html"> <button class="btn btn-primary e-login-redirect">Login</button> </a>
                </div>
            </div>
    </div>
    
    <p class="login-copyright">©️ CopyRights Shashank_Arthanur</p>

    <!-- JS link......................... -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js" integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>

<script>
    let loginSection = document.querySelector(".login-section")
    // loginSection.style.display = "none"
    let signUpSection = document.querySelector(".signup")
    signUpSection.style.display = "none"
    let eLogin = document.querySelector(".e-login")
    eLogin.style.display = "none"
    let loginBtn = document.querySelector(".login-btn")
    let signUpBtn = document.querySelector(".signup-btn")
    let eLoginBtn = document.querySelector(".e-login-btn")

    loginBtn.addEventListener("click" , function(){
        eLogin.style.display = "none"
        signUpSection.style.display = "none"
        loginSection.style.display = "block"
    })
    signUpBtn.addEventListener("click" , function() {
        eLogin.style.display = "none"
        loginSection.style.display = "none"
        signUpSection.style.display = "block"
    })
    eLoginBtn.addEventListener("click" , function(){
        signUpSection.style.display = "none"
        loginSection.style.display = "none"
        eLogin.style.display = "block"
    })

    let eLoginRedirect = document.querySelector(".e-login-redirect")
    eLoginRedirect.addEventListener("click" , function(){
        window.location.href = 'form.html';
    })

    // let fakeBtn = document.querySelector(".fake-btn")
    // fakeBtn.addEventListener("click" , function(){
    //     console.log("Account Created Successfully")
    // })

    





</script>

</body>
</html>



