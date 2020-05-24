<?php
session_start();
include "connection2.php";
if(isset($_SESSION['email']))
{
$email1=$_GET['email'];
$sql1="select * from pgilogin where email='$email1'";
$query1=mysqli_query($cont,$sql1);
$row1=mysqli_fetch_assoc($query1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
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
		<td class="tdfont"><input type="text" name="username" maxlength="30" value="<?php echo $row1['name'];?>"></td>
		<td class="tdfonthead">Last Name</td>
		<td class="tdfont"><input type="text" name="lastname" value="<?php echo $row1['lastname'];?>"></td>
	</tr><!--first row end-->
	<tr>
		<td class="tdfonthead">Gender</td>
		<td class="tdfont">
			<select name="Gender">
				<option value="Not seleced" selected="selected"><?php echo $row1['gender'];?></option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Ambigous">Ambigous</option>
				<option value="Transgender">TransGender</option>
			</select>
		</td>
		<td class="tdfonthead">Nationality</td>
		<td class="tdfont">
			<select name="Nationality">
				<option value="NOT CHOOSEN" selected="selected"><?php echo $row1['nationality'];?></option>
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
		<td class="tdfont"><input type="email" name="email" maxlength="30" value="<?php echo $row1['email'];?>"></td>
		<td class="tdfonthead">Mobile no</td>
		<td class="tdfont"><input type="text" name="mob" maxlength="30" value="<?php echo $row1['mobile'];?>"></td>
	</tr>
	<tr>
		<td class="tdfonthead">City/Village</td>
		<td class="tdfont"><input type="text" name="city" maxlength="30" value="<?php echo $row1['city1'];?>"></td>
		<td class="tdfonthead">Passcode</td>
		<td class="tdfont"><input type="text" name="pass" maxlength="30" value="<?php echo $row1['passcode'];?>"></td>
	</tr>
	</table>
	<input type="submit" name="update" value="Update">
</form>
</body>
</html>
<?php
include "connection2.php";
if(isset($_POST['update']))
{
	$name=$_POST['username'];
$last=$_POST['lastname'];
$gender=$_POST['Gender'];
$nationality=$_POST['Nationality'];
$email=$_POST['email'];
$mobile=$_POST['mob'];
$city=$_POST['city'];
$pass=$_POST['pass'];
    $sql2="update  pgilogin set passcode='$pass',name='$name',city1='$city',gender='$gender',lastname='$last',nationality='$nationality',mobile='$mobile'  where email='$email'";
    $query2=mysqli_query($cont,$sql2);
    if(isset($query2))
{
	echo "executed"."<br>";
}
else
{
	echo "soory";
}
	$sql3="select * from pgilogin where email='$email'";
$query3=mysqli_query($cont,$sql3);
echo "<table border='1'>";
	echo "<tr>";
	echo "<th>"."name";
	echo "</th>";
	echo "<th>"."lastname";
	echo "</th>";
	echo "<th>"."gender";
	echo "</th>";
	echo "<th>"."nationality";
	echo "</th>";
	echo "<th>"."email";
	echo "</th>";
	echo "<th>"."mobile";
	echo "</th>";
	echo "<th>"."city1";
	echo "</th>";
	echo "<th>"."passcode";
	echo "</th>";
while($row2=mysqli_fetch_assoc($query3))
{
	
	echo "</tr>";
	echo "<tr>";
	echo "<td>".$row2['name'];
	echo "</td>";
	echo "<td>".$row2['lastname'];
	echo "</td>";
	echo "<td>".$row2['gender'];
	echo "</td>";
	echo "<td>".$row2['nationality'];
	echo "</td>";
	echo "<td>".$row2['email'];
	echo "</td>";
	echo "<td>".$row2['mobile'];
	echo "</td>";
	echo "<td>".$row2['city1'];
	echo "</td>";
	echo "<td>".$row2['passcode'];
	echo "</td>";
	echo "</tr>";
	

}
}
echo "</table>";
}
?>