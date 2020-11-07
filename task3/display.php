<html>
<head> 
<tittle> <center> 
</style>
</tittle>
<body  background="html.jpg">
	<h2 style="color:white;">Corporate Coureses List</h2> 
	<style>

	div{
		background-color: #E8E8E8;
	}table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


<button onclick="document.location='http://localhost/php/task3/data.php'">+Create Course</button>

</body>
<div>
<?php
$severname="localhost";
$username="root";
$password="";
$database="test";

$conn=mysqli_connect("localhost","root","","test");
//echo "connected";

$sql="SELECT * FROM hudson";
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);
// $result=mysqli_fetch_assoc($data);
//echo $total;

if($total!=0)
{
	?>
	<div>
	<table border="1px" cellpadding="5px">
	<tr>
	<th> ID </th>
	<th> COURSE NAME</th>
	<th> COURSE PRICE</th>
	<th> COURSE HOURS</th>
	<th colspan= "1"> EDIT  </th>
	<th colspan= "1"> DELETE  </th>
	</tr>


<?php
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
		<td>".$result['id']."</td>
		<td>".$result['name']."</td>
		<td>".$result['price']."</td>
		<td>".$result['hours']."</td>
		
		<td><a href='update.php ? id=$result[id]& name=$result[name]& price=$result[price]& hours=$result[hours]'>Edit </a></td>
		<td><a href='delete.php?id=$result[id]'>Delete </a></td>
		</tr>";
	}
}
else
{
	echo "record not foumd";
}
?>
</table>
</div>