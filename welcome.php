<?php
session_start();
include("connection.inc");

$user = $_POST['textfield'];
$password = $_POST['textfield2'];

$sql = "SELECT * FROM `person` WHERE `Username` = '$user' AND `Password` = '$password' AND `Status` = 'Verified';";
$result = mysql_query($sql);
if (mysql_num_rows($result) > 0) {
$_SESSION['category'] = "Seeker"; $_SESSION['user'] = $user; include("welcome2.php");
}
else if (mysql_num_rows($result) == 0) {
$sql2 = "SELECT * FROM `company` WHERE `Username` = '$user' AND `Password` = '$password' AND `Status` = 'Verified';";
$result2 = mysql_query($sql2);

if (mysql_num_rows($result2) > 0) {
$_SESSION['category'] = "Company"; $_SESSION['user'] = $user; include("welcome2.php");	
}
else if (mysql_num_rows($result2) == 0) {
$sql3 = "SELECT * FROM `company` WHERE `Username` = '$user' AND `Password` = '$password'";
$result3 = mysql_query($sql3);
if (mysql_num_rows($result3) > 0) {
$_SESSION['category'] = "Admin"; $_SESSION['user'] = $user; include("welcome2.php");
}
else if (mysql_num_rows($result3) == 0) {
	include("index.php");
	//echo "Invalid Username/Password";
}
}
}

?>
