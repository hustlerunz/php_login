<?php
error_reporting(0);
include_once("connect.php");
//echo $a;
$user = $_POST['Username'];
$pass = $_POST['Password'];

//$userquery = "select count(*) from account where user = '$username' and pass '".md5($pass)."'";
$userquery = "select * from account where user = '$user' and pass = '".md5($pass)."'";
//$userquery = "select * from account ";
$var1 = $conn->query($userquery);
if(mysqli_num_rows($var1)==1)
{
	$var2 = time();
	$cookieset = md5($pass+$var2);
	setcookie("account", $cookieset , time()+86400);
	$var2 = $conn->query("UPDATE account SET value = '$cookieset' where user = '$user' ");
	echo "<script> window.location.href='home.php'</script>";
}
else
{
	//echo "username or pass incorrect";
	echo "<script> window.location.href='index.html'</script>";
	
}

?>