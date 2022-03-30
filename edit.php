<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
    $Project_Name = mysqli_real_escape_string($mysqli, $_POST[`Project Name`]),
    $Project_Charge_code = mysqli_real_escape_string($mysqli, $_POST[`Project Charge code`]),
    $Area = mysqli_real_escape_string($mysqli, $_POST[`Area`]),
    $Region = mysqli_real_escape_string($mysqli, $_POST[`Region`]),
    $Current_State_Technology = mysqli_real_escape_string($mysqli, $_POST[`Current State Technology`]),
    $Current_State_Technology_Other = mysqli_real_escape_string($mysqli, $_POST[`Current State Technology Other`]),
    $Target_Deadline = mysqli_real_escape_string($mysqli, $_POST[`Target Deadline`]),
		
	// checking empty fields
    if(empty($Project_Name) || empty($Project_Charge_code) || empty($Area) || empty($Region) || empty($Current_State_Technology) || empty($Current_State_Technology_Other) || empty($Target_Deadline) {
	   echo "<font color='red'>Some fields are empty.</font><br/>";
				
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE projects SET 
           `Project Name`=`$Project_Name`,`Project Charge code`=`$Project_Charge_code`,`Area`=`$Area`,`Region`=`$Region`,`Current State Technology`=`$Current_State_Technology`,`Current State Technology Other`=`$Current_State_Technology_Other`,
           `Target Deadline`=`$Target_Deadline`;
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting Project_Name from url
$Project_Name = $_GET['Project Name'];

//selecting data associated with this particular Project_Name
$result = mysqli_query($mysqli, "SELECT * FROM Projects WHERE `Project Name`=$Project_Name");

while($res = mysqli_fetch_array($result))
{
	$Project_Name = $res['Project Name'];
	$Project_Charge_code = $res['Project Charge code'];
	$Area = $res['Area'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Project Name</td>
				<td><input type="text" name="name" value="<?php echo $Project_Name;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="" value="<?php echo ;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="" value="<?php echo ;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="" value="<?php echo ;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="" value="<?php echo ;?>"></td>
			</tr>

			<tr>
				<td><input type="hidden" name="Project Name" value=<?php echo $_GET['Project Name'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
