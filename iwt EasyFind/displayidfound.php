<html>
<head>
<title>display details</title>
<style>
body{
	background-color:lightblue;
}
</style>
</head>
<body>
<center>
<h3>LIST OF FOUND ITEMS</h3>
<form action="" method="POST" enctype="multipart/form-data">
<table width="50%" border="1" cellpadding="5" cellspacing="5">

<thread>
<tr>
<th>name of the owner</th>
<th>type of id card</th>
<th>mobile number</th>
<th>description</th>
<th>location</th>
<th>image</th>
<tr>
</thread>
<?php
$con=mysqli_connect("localhost","root","","iwtproject");
$db=mysqli_select_db($con,'iwtproject');
$query="SELECT * FROM `idcardfound` ";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run))
{
?>
<tr>
<td> <?php echo $row['owner']; ?></td>
<td> <?php echo $row['typeid']; ?></td>
<td> <?php echo $row['phone']; ?></td>
<td> <?php echo $row['des']; ?></td>
<td> <?php echo $row['location'];
 ?></td>
<td> <?php echo '<img src="data:image;base64,'.base64_encode($row['tb6image']).'"alt="image" style="width:100px;height"100px;" >';?></td>
</tr>
<?php	
	
}

?>

</table>
</form>
</center>
</body>
</html>