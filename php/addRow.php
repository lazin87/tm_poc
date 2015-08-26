<?php
	require "vars/var_bd.php";
	
	// LOGS
	mysql_connect('localhost',$user,$password);
	@mysql_select_db($database) or die("Nie udalo sie wybrac bd");
	
	foreach($_POST as $key => $value)
	{
		$query = "INSERT INTO logs VALUES ('', '', '$key', '$value')";
		mysql_query($query);
	}
	
	//mysql_close();
	
	
	$str = $_POST['STR'];
	$int = $_POST['INT'];
	
	//mysql_connect('localhost',$user,$password);
	//@mysql_select_db($database) or die("Nie udalo sie wybrac bd");
	
	$query = "INSERT INTO IncomeData VALUES ('', '$str', '$int')";
	mysql_query($query);
	
	mysql_close();
?>