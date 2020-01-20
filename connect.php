<?php
$servername = "";
$username = "";
$password = "";
$sdb = "";
$conn = new mysqli($servername,$username,$password,$sdb);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

?>

