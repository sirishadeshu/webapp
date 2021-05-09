<?php
	$servername='remotemysql.com';
	$username='xdOilHrBvs';
	$password='vsfulbvBIt';
	$dbname = "xdOilHrBvs";
	$conn=mysqli_connect($servername,$username,$password,"$dbname");
	  if(!$conn){
		  die('Could not Connect MySql Server:' .mysql_error());
		}
?>