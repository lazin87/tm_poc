<?php
echo "start";
	require "vars/var_bd.php";
	
	echo "try log";
	// LOGS
	mysql_connect('localhost',$user,$password);
	@mysql_select_db($database) or die("Nie udalo sie wybrac bd");
	
	$data = json_decode(file_get_contents('php://input'), true);
	$filecontent = file_get_contents('php://input');
	
	$query = "INSERT INTO logs VALUES ('', '', 'FileContent', '$filecontent')";
	mysql_query($query);
	
	$form = $data["items"][0]["form"];
	foreach($form as $key => $value)
	{
		$query = "INSERT INTO logs VALUES ('', '', '$key', '$value')";
		mysql_query($query);
	}
	
	//mysql_close();
	
	echo "try get data";
	
	$str = $form['str'];
	$int = $form['int'];
	
	//mysql_connect('localhost',$user,$password);
	//@mysql_select_db($database) or die("Nie udalo sie wybrac bd");
	
	$query = "INSERT INTO IncomeData VALUES ('', '$str', '$int')";
	mysql_query($query);
	
	echo "try close db";
	
	mysql_close();
	
	echo "end";
?>