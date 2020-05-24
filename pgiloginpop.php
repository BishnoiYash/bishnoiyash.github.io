<!DOCTYPE html>

<html>
<head>

<?php
session_start();
if(isset($_SESSION['user']))

{
	echo $_SESSION['user'];
	
	?>

	<title>LOGIN</title>
	<style>
		a {
			text-decoration: none;
			border:1px solid #000;
			color:#000;
		}
	</style>
</head>
<body>
<form action="#" method="post">
	<input type="email" name="email" placeholder="Email">
	<input type="text" name="passcode" placeholder="passcode">
	<input type="submit" name="sub" value="LOGIN">
</form>
</body>
</html>
<?php

if(isset($_POST['sub']))
{
	
	include "connection2.php";
	$sql="select * from pgilogin";
    $query=mysqli_query($cont,$sql);
	$email=$_POST['email'];
	$passcode=$_POST['passcode'];
	$x=0;
	while($row=mysqli_fetch_array($query))
	{ 
		if($email==$row['email'] && $passcode==$row['passcode'])
		{
			$email=$row['email'];
			$x=1;
			header("location:updatepgi.php?email=$email");
			$_SESSION['email']=$email;
		}
		
	}
	if($x==0)
	{
		echo "incoorect password";
	}

}
}
?>

