<?php
$host="localhost";
$user="root";
$pass="";
$db="pgimer";


$cont=mysqli_connect($host,$user,$pass,$db);
if(isset($cont))
{
}
else
{
	echo "not connected";
}
?>
