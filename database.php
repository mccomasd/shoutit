<?php
//Connect to MySQL
$con = mysqli_connect("localhost","cl13-shouts","JUSsoli11!","cl13-shouts");

//Test Connection
if(mysqli_connect_errno()){
	echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
