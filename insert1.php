<?php
$con=mysqli_connect('localhost','root',''); // mandatory to write 3 things

if(!$con)
{
	echo "server not connected";
}
if(!mysqli_select_db($con,'cetpa'))  //used to search the database if there or not
{
	echo "not database";
}

$name=$_POST['username'];

$email=$_POST['email'];

$password=$_POST['password'];

$address=$_POST['address'];

$mobile_no=$_POST['mobile_no'];

$sql="INSERT INTO person(username,email,password,address,mobile_no)
    VALUES('$name','$email','$password','$address','$mobile_no')";

  if(!mysqli_query($con,$sql))
  {
  	echo"not inserted";
  }    
  else{
  	echo"inserted";
  }

   header("refresh:5; url=insert.html");

?>


