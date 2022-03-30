<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$Project_Name = $_GET['Project Name'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM projects WHERE `Project Name`=$Project_Name");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

