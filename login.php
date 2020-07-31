<?php
$con=mysqli_connect("localhost","root","","cetpa")or die(mysqli_error());
?>



<?php
error_reporting(0);
session_start();
if(isset($_POST['signIn']))
{
	if($_POST['id']==""|| $_POST['pwd']=="")
{
	$err="fill your id and password first";
}
else
{
	$d=mysqli_query($con,"SELECT * FROM person where username='{$_POST['id']}'");
	$row=mysqli_fetch_object($d);
	

	$fid=$row ->username;
	$fpass=$row ->password;
	
	if($fid==$_POST['id']&& $fpass==$_POST['pwd'])
     {
     	$_SESSION['sid']=$_POST['id'];
     	header('location:index1.html');
     }
     else
     {
     	$err="invalid id or password";
     }
 }
}

?>




<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6\dist\css\bootstrap.min.css">

</style>
</head>
<body>
    
      <div class="container">
      	<h1>Solar System........</h1>

        <div class="panel panel-danger">  <!--primary,danger etc is written takki blue color,color aa jayega ka ayei-->
        	<div class="panel-heading">
        		<h3 class="panel-title"><strong>Welcome Guest</strong></h3>
        	</div>

        	<div class="panel-body">
        		

        		<form method="post">
	<table align="center" width="323" border="2">
		<tr>

			<font color="#FF0000" size="+2"><?php echo $err;?></font>
			<th width="171" scope="row"> enter your Username</th>
			<td width="136">
			<input type="text" placeholder="username" name="id">
		    </td>
	   </tr>
       <tr>
	    <th scope="row">enter your password</th>
	    <td>
	    	<input type="password" placeholder="password" name="pwd">
	    </td>
	   </tr>

	   <tr>
	   	<th colspan="2" scope="row">
	   		<input type="submit"  value="SignIn" class="btn btn-success" name="signIn">
	   		<a href="loginy.html">SignUp</a>                        
	   	</th>
	   </tr>
	</table>
</form>
        	</div>

  
        <div class="panel-footer">
        
        <marquee><div class="alert alert-success">
 	 	<strong> enter your correct credentials.........</strong> <!--STRONG or B tag is used to bold the word-->
 	 	</div> </marquee>
        </div>
    </div>

</body>
</html>
