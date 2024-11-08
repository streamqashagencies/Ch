<?php
 If ($_SERVER['REQUEST_METHOD']=='POST'){
     include 'connect.php';
     $username = $_POST ['username'];
     $email = $_POST ['email'];
     $number = $_POST ['number'];
     $password = $_POST ['password'];
 }
 $checkUsername= "SELECT * FROM users WHERE username='$username'";
 $result=$conn->query ($checkUsername);
 if($result->num_rows>0){
     echo "Username Already Exists!";
 }
 else{
     $insertQuery="INSERT INTO users (username,email,number,password) VALUES ('$username','$email','$number','$password')"
     if($conn->query($insertQuery)==TRUE){
         hearder("Location:index.php");
     }
     else{
         echo "Error:" $conn->error;
     }
 }
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Join RemoQash Workers and unlock your gateway to monetizing social media, leveraging affiliate programs, and exploring various online opportunities—all from the comfort of your home. Whether you're looking for full-time or part-time income, MobiQash makes it easy to earn daily without disrupting your routine. Join us to turn your internet activities into a reliable income stream!.">
        <meta name="author" content="Wisecracker Technologies Company">
        <meta name="keywords" content="RemoQash Agencies, RemoQash Workers register, online marketing registration, SEO services signup, social media management register, digital marketing tools signup, business growth registration, earn per click, watch and earn, Remote Online Jobs for Extra Income, Turn Social Media into Income, Make Money Online Easily, Monetize Social Media from Home, Affiliate Programs for Beginners, Earn Money Online Daily, Make Money with Social Media, Online Income Opportunities, Flexible Online Jobs, StreamQash Agencies, Smartwinn Agencies, earn from tiktok, earn from youtubem">
    <title>RemoQash Agencies- Unlock Your Online Earning Potential</title>
    <link rel="stylesheet" href="remostyles.css">
</head>
<body>
    
    <div class="sign-box">
        <h1>REMOQASH AGENCIES</h1>
        <h2>Create Account Now</h2>
        <form action ="signup.php" method ="post">
            <div class="input-box">
                <input type="text" name="username" data-required="true" required>
                <label>Username</label>
             </div>
              <div class="input-box">
                <input type="email" name="email" data-required="true" required>
                <label>Email</label>
             </div>
              <div class="input-box">
                <input type="number" name="number" data-required="true" required>
                <label>Mobile number</label>
             </div>
              <div class="input-box">
                <input type="password" name="password" data-required="true" required>
                <label>Password</label>
             </div>
             <p><span><input type="checkbox"></span>  I agree with terms of service</p>
             <button type="submit" class="btn">REGISTER</button>
             <p>Already have an account <a href="index.php" class="login-link">Login</a></p>
        </form>
        
    </div>
    
</body>
</html>
