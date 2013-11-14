<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test page</title>
</head>

<body>
<?php 

//..........database connection ,
		
		$conn=mysql_connect("localhost","root","");
      	mysql_select_db("dbname",$conn);
		
//...........select table
		
	  	$query="select* from tbluser";
	 	$rs= mysql_query($query);
	
?>

<table width="200" border="1">

  <tr>
    <td>Name</td>
    <td>Father name</td>
    <td>Address</td>
  </tr>
  <?php //... show data
   while( $show	=	mysql_fetch_assoc($rs)){?>
  <tr>
    <td><?php echo $show['name'];?></td>
    <td><?php echo $show['fname'];?></td>
    <td><?php echo $show['address	'];?></td>
    <?php }?>
  </tr>
 
</table>



</body>
</html>