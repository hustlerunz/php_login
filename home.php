<?php
error_reporting(0);
include_once("connect.php");
$chekcookie = "select * from account where value = '$_COOKIE[account]'";
$var3 = $conn->query($chekcookie);
if(mysqli_num_rows($var3)==1)
{
	$chk = 1;
}

if(isset($_COOKIE['account']) and $chk==1)
{
	echo $_COOKIE['account'];
	echo "<br>";
	echo '<a href="logout.php">logout</a> ';
}
else
{
	echo "<script> window.location.href='index.html'</script>";
}
?>