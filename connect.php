<?php
$servername = "localhost";
$username = "interest";
$password = "024685300";
$sdb = "Dev";
$conn = new mysqli($servername,$username,$password,$sdb);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

?>

