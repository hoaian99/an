<?php
// Connect to database
$server = "localhost";
$user = "An";
$password = "Anmysql99@";
$dbname = "parking_an_khiem_hung";

$conn = mysqli_connect($server,$user,$password,$dbname);

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
