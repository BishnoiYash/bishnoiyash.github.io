<!DOCTYPE html>
<html>
<head>
	<title>REGISTER/LOGIN</title>
	<style>
		body {
    font-size: 12px;
    font-family: Verdana, Arial;
             }
		table{
			width: 100%;
		}
		.trmain{
			background-color: #5260b2;
			color: #fff; 
			padding: 1px;
			text-align: left;
			font-weight: bold;
		}
		.tdfont {
    text-align: left;
    background-color: #FEF3E9;
    padding: 1px;
    width: 25%;
                }
                .tdfonthead {
    text-align: right;
    background-color: #c2dfe7;
    width: 25%;
                            }	
    input {
    width: 50%;
    padding: 2px;
    border: 1px; 
                       }
	</style>
</head>
<body>
<form action="#" method="post">
	<table>
	<tr>
		<td class="trmain" colspan="4">Patient details</td>
    </tr>
	<tr>
		<td class="tdfonthead">FIRST NAME</td>
		<td class="tdfont"><input type="text" name="username" maxlength="30"></td>
		<td class="tdfonthead">Last Name</td>
		<td class="tdfont"><input type="text" name="lastname"></td>
	</tr><!--first row end-->
	<tr>
		<td class="tdfonthead">Gender</td>
		<td class="tdfont">
			<select name="Gender">
				<option value="Not seleced" selected="selected">Select value</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Ambigous">Ambigous</option>
				<option value="Transgender">TransGender</option>
			</select>
		</td>
		<td class="tdfonthead">Nationality</td>
		<td class="tdfont">
			<select name="Nationality">
				<option value="NOT CHOOSEN" selected="selected">Select value</option>
				<option value="INDIA">Indian</option>
				<option value="CANADA">Canada</option>
				<option value="AUSTRALIA">Australia</option>
				<option value="USA">USA</option>
			</select>
		</td>
	</tr><!--second row end-->	
	<tr>
		<td class="trmain" colspan="4">Address</td>
	</tr>
	<tr>
		<td class="tdfonthead">Email</td>
		<td class="tdfont"><input type="email" name="email" maxlength="30"></td>
		<td class="tdfonthead">Mobile no</td>
		<td class="tdfont"><input type="number" name="mob" maxlength="30"></td>
	</tr>
	<tr>
		<td class="tdfonthead">City/Village</td>
		<td class="tdfont"><input type="text" name="city" maxlength="30"></td>
		<td class="tdfonthead">Passcode</td>
		<td class="tdfont"><input type="text" name="pass" maxlength="30"></td>
	</tr>
	</table>
	<input type="submit" name="sub" value="Register">
	<input type="submit" name="login" value="Login">
</form>
</body>
</html>
<?php
if(isset($_POST['sub']))
{

include "connection2.php";
$name=$_POST['username'];
$last=$_POST['lastname'];
$gender=$_POST['Gender'];
$nationality=$_POST['Nationality'];
$email=$_POST['email'];
$mobile=$_POST['mob'];
$city=$_POST['city'];
$pass=$_POST['pass'];
$sql="insert into pgilogin values('$name','$last','$gender','$nationality','$email','$mobile','$city','$pass')";
$query=mysqli_query($cont,$sql);
if(isset($query))
{
	echo "executed"."<br>";
}
else
{
	echo "sorry";
}
}
if(isset($_POST['login']))
{
	session_start();
	$_SESSION['user']="data";
	
	if(isset($_SESSION['user']))
	{
		echo $_SESSION['user']."set ";
		header("location:pgiloginpop.php");
	}
	
}
?>
