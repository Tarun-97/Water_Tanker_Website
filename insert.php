<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web121";
date_default_timezone_set("Asia/Kolkata");
$currentTime = date("h:i:sa");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
    die("Connection failed: " . mysqli_connect_error());

// Collect form data
$name = $_REQUEST['name'];
$ph = $_REQUEST['ph'];
$eml = $_REQUEST['eml'];
$dob = $_REQUEST['dob'];
$g = $_REQUEST['g'];
$s = $_REQUEST['s'];
$addd = $_REQUEST['addd'];
$dt = $_REQUEST['dt'];
$pc = $_REQUEST['pc'];
$rvs = $_REQUEST['rvs'];

// Insert query
$crt1 = "INSERT INTO `StudentInfo121`(`name`, `ph`, `eml`, `dob`, `g`, `s`, `addd`, `dt`, `pc`, `rvs`, `currentTime`) 
         VALUES ('$name','$ph','$eml','$dob','$g','$s','$addd','$dt','$pc','$rvs','$currentTime')";

if (mysqli_query($conn, $crt1)) 
{
    header("Location: index.html");
    exit();
}
else
{
    echo "Error: " . $crt1 . "<br>" . mysqli_error($conn);
}

$conn->close();
?>
