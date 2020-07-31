<?php
session_start();

if(!$_SESSION['sid'])
{
	header("Location:login.php"); //redirect to login page to secure the welcome page without login access
}
?>







<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center;color: blue" >Welcome</h1>
	<h1 ><a href="logout.php">LogOut here</a></h1>

</body>
</html>












