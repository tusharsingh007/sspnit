<?php
$con=mysqli_connect('localhost','root',''); // mandatory to write 3 things  root is default username of mysql and '' is password

if(!$con)
{
	echo "server not connected";
}
if(!mysqli_select_db($con,'cetpa'))  //used to search the database if there or not
{
	echo "not database";
}

$name=$_POST['name'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$message=$_POST['message'];



$sql="INSERT INTO feedback(name,email,phone,message)
    VALUES('$name','$email','$phone','$message')";

  if(!mysqli_query($con,$sql))
  {
  	echo"not inserted";
  }    
  else{
  	echo"inserted";
  }

   header("refresh:5; url=feedback.html");

?>


