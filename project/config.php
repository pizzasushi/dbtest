<?php
//..........database connection ,
		
		$conn=mysql_connect("localhost","root","");
		
		$result = mysql_select_db("db_client",$conn);
		if($result)
		{
		
		}else{
			echo "Sorry some issue in database connection ";
			exit;
		}
?>