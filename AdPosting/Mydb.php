<?php
$host = 'localhost';	
	$userName = 'root';
	$password = '';
	$db = 'adposting';
	
	$conn = mysql_connect($host,$userName,$password) or die ("Connection Failed...");
	mysql_select_db($db);

?>