<?php
//..........database connection ,
		
		// $conn=mysql_connect("localhost","root1","root1");
		$conn = mysql_connect('localhost', 'root', 'root');

		// echo $conn;
		// exit;
		$result = mysql_select_db("db_client",$conn);
		if($result)
		{
		
		}else{
			echo "Sorry some issue in database connection ";
			exit;
		}
?>