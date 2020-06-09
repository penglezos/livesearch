<?php
	$host="localhost";
	$user="";
	$pass="";
	$database="";
	
	$connection = @mysqli_connect($host,$user,$pass,$database);

	if(!$connection){
		echo "Website is temporarily unavailable.";		
		die();
	}
?>