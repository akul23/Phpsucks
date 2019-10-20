<?php



$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "ZXIH3C3w39";
$dbName = "MyLogin";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

    $usn = $_POST['username'];
    $pwd = $_POST['Password'];
$s = ("Select * FROM users WHERE un='$usn' && ps ='$pwd'");
//$login = ("INSERT INTO users (un , ps) VALUES ('$usn', '$pwd')");
$num = mysqli_num_rows($conn->query($s));


if($num == 1){
   
        header("Location: Loggedin.php");
    }
else{
    
    header("Location: LoginReg.php?Wrong password/username");
}
