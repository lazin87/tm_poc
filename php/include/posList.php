<?php
	include('vars/var_bd.php');

	mysql_connect('localhost',$user,$password);
	@mysql_select_db($database) or die("Nie udalo sie wybrac bd");
	
	$query = "SELECT * FROM logs";
	$result = mysql_query($query);
	$row_num = mysql_numrows($result);
	mysql_close();
	
	echo "<h1>logs</h1>";
	echo "<table><tr>";
	echo "<td>ID</td>";
	echo "<td>Timestamp</td>";
	echo "<td>key</td>";
	echo "<td>value</td>";
	echo "</tr>";
	
	$i = 0;
	while($i < $row_num)
	{
		//echo "w petli $i";
		$id = mysql_result($result, $i, "id");
		$timestamp = mysql_result($result, $i, "timestamp");
		$longitude = mysql_result($result, $i, "key");
		$latitude = mysql_result($result, $i, "value");
		
		echo "<tr><td>$id</td><td>$timestamp</td><td>$longitude</td><td>$latitude</td></tr>";
	
		$i++;
	}
	echo "</table>";
	//echo "za petla";
?>