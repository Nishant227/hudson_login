<?php
$severname="localhost";
$username="root";
$password="";
$database="test";
$id=$_GET['id'];


$conn=mysqli_connect("localhost","root","","test");

$sql="DELETE FROM hudson WHERE id='$id'";
$data=mysqli_query($conn,$sql);
if($data)
{
	echo "<script> alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://localhost/php/task3/display.php">
	<?php
}
else
{
	echo "<script> alert('Delete failed')</script>";
}



?>