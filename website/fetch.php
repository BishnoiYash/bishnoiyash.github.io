<?php
include "connection2.php";
$email1=$_GET['email'];
$sql="select * from pgilogin where email='$email1'";
$query=mysqli_query($cont,$sql);
echo "<table border='1'>";
	echo "<tr>";
	echo "<th>"."name";
	echo "</th>";
	echo "<th>"."email";
	echo "</th>";
	echo "<th>"."passcode";
	echo "</th>";
	echo "<th>"."Action";
	echo "</th>";
while($row=mysqli_fetch_assoc($query))
{
	
	echo "</tr>";
	echo "<tr>";
	echo "<td>".$row['name'];
	echo "</td>";
	echo "<td>".$row['email'];
	echo "</td>";
	echo "<td>".$row['passcode'];
	echo "</td>";
	
	echo "<td><a href='updatedatabase.php?email=".$row['email']."'>EDIT</a></td>";
	echo "</tr>";
	

}
echo "</table>";
?>
