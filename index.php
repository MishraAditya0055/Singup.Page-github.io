<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";
mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
   ?>     
    
    
    
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login page.</title>
</head>

<body>
    <section class="wrapper">
        <div class="container">
            <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 test-center">
                <div class="logo">
                    <img src="image/logo.png" class="img-fluid" alt="logo">
                </div>
                <form action="" class="rounded bg-white shadow p-5">
                    <h3 class="text-dark fw-bolder fs-5 mb-2 text-center">Sign In to HILLTOP</h3>
                    <div class="fw-normal text-muted mb-4 text-center ">
                        New Here? <a href="Signup.html" class="text-primary fw-bold text-decoration-none">Create an Account</a>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="mt-2 text-end">
                        <a href="Forget password.html" class="text-primary fw-bold text-decoration-none">Forget Password?</a>

                    </div>
                    <button type="submit" class="btn btn-primary submit_btn w-100 my-4">
                        Continue
                    </button>
                    <div class="text-center text-muted text-uppercase mb-3">or</div>

                    <a href="#" class="btn btn-light login_with w-100 mb-3">
                        <img src="image/google-icon.svg" class="img-fluid me-3 " alt="">
                        Continue With Google
                    </a>

                    <a href="#" class="btn btn-light login_with w-100 mb-3">
                        <img src="image/facebook-icon.svg" class="img-fluid me-3 " alt="">
                        Continue With Facebook
                    </a>

                    <a href="#" class="btn btn-light login_with w-100 mb-3">
                        <img src="image/linkedin-icon.svg" class="img-fluid me-3 " alt="">
                        Continue With Linkedin
                    </a>

                </form>
            </div>
        </div>
    </section>
</body>

</html>