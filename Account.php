 <?php
 mysql_connect("localhost","root","");
 mysql_select_db("bishal");
 $msg="";$fnameErr="";$fnameErr1=""; $lnameErr="";$lnameErr1="";$idErr1=""; $passErr1=""; $dobErr="";$dobErr1="";$mfErr="";
 $mfErr1="";$mobErr="";$mobErr1="";$otherErr1="";$nationErr="";$nationErr1="";$pass1Err="";
 @$sub=$_POST['subm1'];
 if($sub){
 $fname=$_POST['fname'];
 if(!preg_match("/^[a-z. A-Z]*$/", $fname))
	 {
	 $fnameErr="<font color=red>Please insert Correct First Name</font>";}
if(empty($fname)){
	$fnameErr1="<font color=red>First Name is required</font>";
}
$lname=$_POST['lname'];
if(!preg_match("/^[a-z. A-Z]*$/", $lname))
	 {
	 $lnameErr="<font color=red>Please insert Correct Last Name</font>";}
if(empty($lname)){
	$lnameErr1="<font color=red>Last Name is required</font>";
}
$id=$_POST['id'];
$com=substr($id,-4,4);
$coin=substr($id,-6,6);
if(empty($id)){
	$idErr1="<font color=red>Email-Id is required</font>";
}
else if((strcasecmp($com,".COM")!=0)&&(strcasecmp($coin,".CO.IN")!=0)){
	$idErr1="<font color=red>Please enter a Valid Email-Id !</font>";
}
$pass=$_POST['pass'];
if(empty($pass)){
	$passErr1="<font color=red>Password is required</font>";
}
else if(strlen($pass)<5){
	$passErr1="<font color=red>Password is too small, please try entering a STRONG password.</font>";
	}
$pass1=$_POST['pass1'];
if(empty($pass)){
	$passErr1="<font color=red>Password is required</font>";
}
else if(strcmp($pass,$pass1)){
	$pass1Err="<font color=red>Password Deosn't Match</font>";}
$dobirth=strtotime($_POST["dob"]);
$dob = date("d-m-Y", $dobirth);
if(empty($dob)){
	$dobErr1="<font color=red>Date of Birth is required</font>";
}
$mf=$_POST['mf'];
$mob=$_POST['mob'];
if(empty($mob)){
	$mobErr1="<font color=red>Mobile Number is required</font>";
}
else if(!preg_match("/^[0-9]*$/", $mob))
	 {
	 $mobErr="<font color=red>Please insert correct Mobile Number</font>";
	 }
else if(strlen($mob)!=10){
	$mobErr="<font color=red>Mobile Number must contain only 10 digits.</font>";
	}
$other=$_POST['other'];
$com1=substr($other,-4,4);
$coin1=substr($other,-6,6);
if(empty($other)){
	$otherErr1="<font color=red>Other Email ID is required</font>";
}
else if((strcasecmp($com1,".COM")!=0)&&(strcasecmp($coin1,".CO.IN")!=0)){
	$otherErr1="<font color=red>Please enter a Valid Email-Id!</font>";
}
$nation=$_POST['nation'];
if(!preg_match("/^[0-9.a-z A-Z]*$/", $nation))
	 {
	 $nationErr="<font color=red>Please insert correct Nationality</font>";}
if(empty($nation)){
	$nationErr1="<font color=red>Nationality is required</font>";
}
if(($fnameErr=="")&&($fnameErr1=="")&&($lnameErr=="")&&($lnameErr1=="")&&($idErr1=="")&&($passErr1=="")&&($dobErr=="")&&($dobErr1=="")&&($mfErr=="")&&($mfErr1=="")&&($mobErr=="")&&($mobErr1=="")&&($otherErr1=="")&&($nationErr=="")&&($nationErr1=="")&&($pass1Err=="")){
$ins="INSERT INTO `data`(`fname`,`lname`,`id`,`pass`,`dob`,`mf`,`mob`,`otherid`,`nation`) VALUES('$fname','$lname','$id','$pass','$dob','$mf','$mob','$other','$nation');";
$res=mysql_query($ins);
	if($res){
		$msg="<font color=green>Record is Successfully Added!</font>";
	}
		else{
			$msg="<font color=red>Error In Record Insertion!</font>";
		}}
else{ $msg="<font color=red>Error In Record Insertion!</font>";}
}
?>
<html lang="en">
 <head>
  <title>CREATE ACCOUNT</title>
  <link rel="stylesheet" href="accountstyle.css">
  <script type="text/javascript" src="accountscript.js"></script>
 </head>
 <body><form action="ACCOUNT.PHP" method="post">
	<div class="mymail"><img src="mymail.jpg" width="150" height="50" border="0" alt=""></div>
	<div id="top"><a href="LOGIN.PHP">Sign In</a></div>
	<font size=15px ><div class="acc"><center>Create Your Account</center></div></font>
	
	<div id="comp"><center><img src="welcome2mymail.png" width="400" height="200" border="0" alt=""><br>
	<img src="comp.png" width="300" height="172" border="0" alt="">
	</center>
	</div>
	<div class="abc">
	<table border=0 cellpadding=8px>
	<tr><td colspan=2 ><b>Name</b></td></tr>
	<tr><td><input type="text" name="fname" placeholder="Enter First Name Here" ></td>
	<td><input type="text" name="lname" placeholder="Enter Last Name Here" ></td></tr>
	<tr><td><?php echo "$fnameErr"; echo "$fnameErr1"; ?></td>
	<td><?php echo "$lnameErr"; echo "$lnameErr1"; ?></td></tr>
	<table>
	<table border=0 cellpadding=8px>
		<tr>
			<td><b>Choose Your UserName</b></td>
		</tr>
		<tr><td><input type="text" name="id" placeholder="Enter UserName Here" ></td><td><?php echo "$idErr1"; ?></td></tr>
		<tr><td><b>Create a Password</b></td></tr>
		<tr><td><input type="password" name="pass" id="passww" placeholder="***************" oninput="strength()" ></td>
		<td><div id="password1"> </div><?php echo "$passErr1" ?></td></tr>
		<tr><td><b>Confirm Your Password</b></td><tr>
		<tr><td><input type="password" name="pass1" id="passww1" placeholder="***************" oninput="strength1()" ></td>
		<td><?php echo "$pass1Err" ?><div id="password11"> </div></td></tr>
		<tr><td><b>Birthday</b><td></tr>
		<tr><td><input type="text" name="dob" placeholder="yyyy/mm/dd" ></td><td><?php echo "$dobErr"; echo "$dobErr1"; ?></td></tr>
		<tr><td><b>Gender</b></td></tr>
		<tr><td><select name="mf">
			<option value="Male">Male
			<option value="Female">Female
			<option value="Transgender">Transgender
		</select></td><td><?php echo "$mfErr"; echo "$mfErr1"; ?></td></tr>
		<tr><td><b>Mobile Phone</b></td></tr>
		<tr><td><b>+91</b>&nbsp;&nbsp;&nbsp;<input type="text" name="mob" placeholder="Enter Mobile Number Here" ></td>
		<td><?php echo "$mobErr"; echo "$mobErr1"; ?></td></tr>
		<tr><td><b>Any Other Email Address</b></td></tr>
		<tr><td><input type="text" name="other" placeholder="Enter ID Here" ></td><td><?php echo "$otherErr1" ?></td></tr>
		<tr><td><b>Location</b></td></tr>
		<tr><td><input type="text" name="nation" placeholder="Enter Nation Here" ></td>
		<td><?php echo "$nationErr"; echo "$nationErr1"; ?></td></tr>
	</table></div>
<div id="subm"><input type="Submit" class="subm1" value=" " name="subm1">
<?php 
echo "$msg";
?></div>
 </form></body>
</html>
