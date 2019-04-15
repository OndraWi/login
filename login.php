<?php
include("db.php");

session_start();
$message="";
echo  $_POST["user_name"] . "<br>";
echo  $_POST["password"];

if(count($_POST)>0) {
//$conn = mysql_connect("localhost","root","");
//mysql_select_db("test",$conn);
$query="SELECT * FROM users WHERE user='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'";
echo $query;
$result = mysqli_query($db, $query);
$row  = mysqli_fetch_array($result, MYSQLI_ASSOC);
if(is_array($row)) {  
$_SESSION["user_id"] = $row["id"];

$_SESSION["username"] = $row["user"];
} else {
$message = "Invalid Username or Password!";
echo $message;
}
}
if(isset($_SESSION["user_id"])) {
header("Location:user_dashboard.php");
}
?>