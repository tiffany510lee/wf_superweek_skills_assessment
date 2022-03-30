<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
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
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO projects(
           `Project Name`,`Project Charge code`,`Area`,`Region`,`Current State Technology`,`Current State Technology Other`,
           `Target Deadline`
        ) VALUES(`$Project_Name`,`$Project_Charge_code`,`$Area`,`$Region`,`$Current_State_Technology`,
    `$Current_State_Technology_Other`,
    `$Target_Deadline`)");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
