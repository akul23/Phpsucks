<?php


session_start();
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "ZXIH3C3w39";
$dbName = "MyLogin";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

    $usn = $_POST['username'];
    $pwd = $_POST['Password'];
$s = ("Select * FROM users WHERE un='$usn'");
$login = ("INSERT INTO users (un , ps) VALUES ('$usn', '$pwd')");
$num = mysqli_num_rows($conn->query($s));


if($num == 0){
    
    if(isset($_POST["username"]) || isset($_POST["Password"])) {
                    
                    if ($conn->query($login) === TRUE) {
                        $in ="in";
                    echo "New record created successfully";
                    header("Location: Loggedin.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        header("Location: LoginReg.php");
                    } 
        }
    
        
    
}
else{
    header("Location: LoginReg.php?No input");
}
