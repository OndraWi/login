
<?php
include("db.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password']);

$sql="Insert into users(username,password) values('$username','$password');";
$result=mysqli_query($db,$sql);
echo "Registration Successfully";
}
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>

<form action="" method="post">
<table border="0" cellpadding="10" cellspacing="1" width="300" align="center">
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" name="username"/><br /></td>
</tr>

<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password" value=""/><br /></td> </tr>

<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" value=" Registration "/><br /></td>
</tr>

</table>
</form>
</body></html>