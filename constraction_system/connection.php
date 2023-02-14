<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="constractor_system";

$con = mysqli_connect($servername,$username, $password, $dbname );

if($con)
{
	echo"connected";
}
else
{
	echo"not connected";
}
?>