<?php
session_start();


$servername = "127.0.0.1";
$username = "root";
$password = "";
$databaseName = "apitest";


// Create connection
$conn = mysqli_connect($servername, $username, $cpassword,$databaseName);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}         

$email = $_POST['userEmail'];
$password = $_POST['userPassword']; 


$sql = "select * from admin where username = '$email' && password = '$password'";

$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num == 1) {
    $_SESSION['username'] = $email;

    echo $_SESSION['username'];  
    header('location:../FrontEnds/dashboard.html');
} else {
    header('location:../FrontEnds/adminLogin.html');
}


?>  