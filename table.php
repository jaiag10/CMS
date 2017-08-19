<!DOCTYPE html>
<html>
<head>
	<title>table data</title>
</head>
<body>
<table>
	<tr>
		<td>Order id</td>
		<td>Source</td>
		<td>Destination</td>
		<td>EDD</td>
		<td>Delivery agent</td>
	</tr>
<?php
session_start();
include 'connection.php';	
error_reporting(0);	
$order = $_GET['id'];
$sql = "select Order_id,Destination,EDD,Pro_Location,Staff_name from order_details,product_details,staff where Order_id = '$order' and order_details.Product_info = product_details.Pro_id and order_details.Delivery_Staff = staff.Staff_id";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$rows = mysqli_fetch_assoc($result);

?>
	<tr>
		<td><?php echo $rows['Order_id'] ?></td>
		<td><?php echo $rows['Pro_Location'] ?></td>
		<td><?php echo $rows['Destination'] ?></td>
		<td><?php echo $rows['EDD'] ?></td>
		<td><?php echo $rows['Staff_name'] ?></td>
	</tr>
	<?php
}
else
{
	echo "Value not found".mysqli_error($conn);
}

mysqli_close();
?>
</table>
</body>
</html>