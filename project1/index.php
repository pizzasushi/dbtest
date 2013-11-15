<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index</title>
	<style>
		.headding{
			text-align: center;
		}
	</style>
</head>

<body>
	<h2 class="headding">Database operations</h2>
<table align="center">

<?php 
	include("config.php");
	$query =  mysql_query("SELECT * FROM tbluser ") or die("my sql error ");
	
	
	if (false === $query) {
	?>
		<tr>
		<?php 
		echo "No result found";
		?>
		</tr>
		<?php 
	}else{
?>


  <tr>
	<td><strong>ID</strong></td>
    <td><strong>Name</strong></td>
    <td><strong>Father name</strong></td>
    <td><strong>Address</strong></td>
  </tr>
  <tr>&nbsp;</tr>
  <?php //... show data
	$i = 0;
   while( $show	=	mysql_fetch_array($query)){
	$i = $i +1;
	?>
  <tr>
	<td><?php echo $i; ?></td>
    <td><?php echo $show['fname'];?></td>
    <td><?php echo $show['lastname'];?></td>
	<td><?php echo $show['address']; ?></td>
    <?php 
		$i = $i +1;
	}?>
  </tr>
 <?php } ?>
 
</table>



</body>
</html>