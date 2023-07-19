<?php

$con=new mysqli('localhost','root','','practice');

	if(!$con){
		die(mysqli_error($con));
	}
?>