
<!DOCTYPE html>
<html>
<head>
	<title>Display record from data base</title>
</head>
<body>


<table border="3">
	<tr>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>AGE</th>
		<th>ADDRESS</th>
		<th>MOBILE NO</th>
		<th>GENDER</th>
		<th>BLOOD GROUP</th>
		<th>BLOOD UNIT</th>
		<th>DATE</th>


	</tr>
</table>
</body>
</html>

<?php

include("connection.php");
//error_reporting(0);
$query="select * from donner";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);




if($total!=0)
{
	//$result=mysqli_fetch_assoc($data);

	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<table border=3>
		<tr>
		<td>".$result['name']."</td>
		<td>".$result['email']."</td>
		<td>".$result['age']."</td>
		<td>".$result['address']."</td>
		<td>".$result['mobileno']."</td>
		<td>".$result['gender']."</td>
		<td>".$result['bloodgroup']."</td>
		<td>".$result['bloodunit']."</td>
		<td>".$result['date']."</td>
		</tr><br></table>
		";
	}
}

else
{
	echo "not found";
}

?>



