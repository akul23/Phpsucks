<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "stylesheet" type = "text/css" href = "Loggedin.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 

    


    <div class="navbar">
        <a href="Loggedin.php">Home</a>
        <a href="page/About.php">About me</a>
            <div class="dropdown">
                <button class="dropbtn">Projects
                <i class="fa fa-caret-down"></i>
                </button>
                    <div class="dropdown-content">
                        <a href="#">CNC #1</a>
                        <a href="#">CNC #2</a>
                        <a href="#">3D printer</a>
                    </div>
            </div>
           
           
        <a method="POST" class = "logout" href="index.php" name="logout">Logout</a>
        <?php

        ?>
    </div> 