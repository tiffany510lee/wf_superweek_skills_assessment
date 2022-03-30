<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM projects ORDER BY Project_Name DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Project Name</td>
		<td>Project Charge code</td>
		<td>Area</td>
		<td>Region</td>
		<td>Current State Technology</td>
		<td>Current State Technology Other</td>
		<td>Target Deadline</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['Project Name']."</td>";
		echo "<td>".$res['Project Charge code']."</td>";
		echo "<td>".$res['Area']."</td>";	
		echo "<td>".$res['Region']."</td>";	
		echo "<td>".$res['Current State Technology']."</td>";	
		echo "<td>".$res['Current State Technology Other']."</td>";	
		echo "<td>".$res['Target Deadline']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>