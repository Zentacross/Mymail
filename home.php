<?php 
SESSION_START();

mysql_connect("localhost","root","");
mysql_select_db("bishal");
if(!isset($_SESSION['id'])){
}
?>
<html lang="en">
 <head>
  <title>My Account</title>
  <link rel="stylesheet" href="accountstyle.css">
 </head>
 <body>
 <a href="logout.php">Logout</a>
 <font color="red" size="6">Hello<b> &nbsp<?php echo strtoupper(@$_SESSION['fname']); ?></font>

  <center> <h1><font color="blue"><u>Welcome to Database Management System</u></font></h1>
  <Table Cellspacing=10 Cellpadding=5 border=3 id="details"><tr>
 <th>Name</th><th>User Id</th><th>Date of Birth</th><th>Gender</th><th>Contact Details</th><th>Any Other User Id</th><th>Nation</th></tr>
  <?php
	mysql_connect("localhost","root","");
	mysql_select_db("bishal");
	$res=mysql_query("select * from data where id='".@$_SESSION['id']."'");
	while($row=mysql_fetch_array($res))
{
	echo "<tr><td>$row[fname] &nbsp; $row[lname]</td>
			<td>$row[id]</td>
			<td>$row[dob]</td>
			<td>$row[mf]</td>
			<td>$row[mob]</td>
			<td>$row[otherid]</td>
			<td>$row[nation]</td></tr>";
			}
?> </table>
 </body>
</html>
