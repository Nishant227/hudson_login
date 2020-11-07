<html>
<body background="html.jpg">
	<center>
		<style>
.button {
  background-color: #707070; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: underline;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
  cursor: -webkit-grab; cursor: grab;
}

</style>
	<button  class ="button" onclick="document.location='http://localhost/php/task3/display.php'">Display Table</button><br>
</body>
</html>
<?php
$name=$_POST["name"];
$price=$_POST["price"];
$hours=$_POST["hours"];

$servername="localhost";
$username="root";
$password="";
$database="test";

$conn = mysqli_connect("localhost","root","","test");
//echo "sql connected";

$sql="INSERT INTO hudson(name,price,hours)VALUES('$name','$price','$hours')";
mysqli_query($conn,$sql);

mysqli_close($conn); 
?>
</center>