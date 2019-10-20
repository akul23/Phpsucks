<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "stylesheet" type = "text/css" href = "LoginReg.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <div class="log">
            <div class="Login">
                <p class="first"><b>Do you already have an account? </p><p class = "last" >Sign in here:</b></p>
                <form  action="Login.inc.php" method ="POST">
            
                <input Type="text" name="username" placeholder="Username">
            
                <input Type="password" name="Password" placeholder="Password">
            
                <button type ="submit" name="log">Login</button>
    
            </form>
            <div>

            <div class="Reg">
            <p class="first"><b>Dont yet have an account?</p><p class = "last" >Dont worry you can register here:</b></p>
                <form  action="Reg.inc.php" method ="POST">
            
                <input Type="text" name="username" placeholder="Username">
        
                <input Type="password" name="Password" placeholder="Password">
        
                <button type ="submit" name="log">Register</button>

            </form>
            </div>
        </div>
            
            <div class="loader"></div> 
  <?php
require ("footer.php");
  ?>