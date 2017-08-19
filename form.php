<?php
error_reporting(0);
include 'connection.php';
if(isset($_POST['submit']))
{
	$ordid = $_POST['orderinfo'];
	$sql = "select * from order_details where Order_id = '$ordid'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		$rows = mysqli_fetch_assoc($result);
		$order = $rows['Order_id'];
		header("Location:table.php?id=$order");
												
	}
	else
	{
	    echo "Value not found".mysqli_error($conn);
	}
	}
?>