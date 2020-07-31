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
     	header('location:HomePage.php');
     }
     else
     {
     	$err="invalid id or password";
     }
 }
}

?>







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
	   		<input type="submit"  value="SignIn" name="signIn">
	   		<a href="insert.html">SignUp</a>                        
	   	</th>
	   </tr>
	</table>
</form>

