<html>
<head> 
<tittle> <center>
</tittle>
<body  background="html.jpg">
	<style>
		div {
  background-color:  #E8E8E8;
  width: 190px;
  padding: 30px;
</style>
<br><br>

<?php
$servername="localhost";
$username="root";
$password="";
$database="test";

$conn = mysqli_connect("localhost","root","","test");

?>

<html>
<body>
	<div>
	<form action="update.php" method="get">

		<input hidden="true" type="" name="id" value="<?php echo $_GET['id']; ?>">

		Course Name: <input type="text" name="name" value="<?php echo $_GET['name'];?>"><br>

		Course Price: <input type="text" name="price" value="<?php echo $_GET['price'];?>"><br>

		Course Hours: <input type ="text" name="hours" value="<?php echo $_GET['hours'];?>"><br><br>


		<input type="submit" name="save">
	</form>
</div>
</body>
</html>	


<?php
if(isset($_GET['save']))
{
	$id=$_GET['id'];
	$name=$_GET["name"];
	$price=$_GET["price"];
	$hours=$_GET["hours"];


$sql="UPDATE hudson SET name='$name',price='$price', hours='$hours' WHERE id=$id";
$data =mysqli_query($conn,$sql);
//echo "connected";
if($data)
{
	echo "updated";
}
else
{
	echo "not updated";
}
}
else{
	//echo "click update";
}
?>
<br>
<br>
<button  class ="button" onclick="document.location='http://localhost/php/task3/display.php'">Display Table</button><br><br>