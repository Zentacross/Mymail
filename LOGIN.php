<?PHP
SESSION_START();
mysql_connect("localhost","root","");
 mysql_select_db("bishal");
 if(@$_POST['sub']){
	 $sel="select * from data where id='".$_POST['id']."' and pass='".$_POST['pass']."'";
	 $res=mysql_query($sel);
	 if(mysql_num_rows($res)>0){
		 $row=mysql_fetch_object($res);
		 $_SESSION['id']=$row->id;
		 $_SESSION['fname']=$row->fname;
		 $_SESSION['lname']=$row->lname;
		 header("location:home.php");
	 } else {
		 $msg="<div style='color:red; border:1px solid #FF9900; background:#CFCFCF; width:500px; padding:10px;'> Invalid ID/Password</div>";
	 }
 }
 if(@$_GET['msg']){
	 $msg="<div style='color:red; border:1px solid #FF9900; background:#CFCFCF; width:500px; padding:10px;'> Login to get access!</div>";
 }
?>
<html> <head>  <title>My Mail Login Page</title>
<link rel="stylesheet" href="accountstyle.css">
<style>
a:link{
		margin-top:22%;
		margin-left:-5%;
  }
</style>
</head>
 <body>
  <center><br><br>
  <h1> Welcome To My Login System!</h1><hr><br><br>
  <?=@$msg?>
  <br>
  <FORM METHOD = POST ACTION="">
  <table cellspacing=10 cellpadding=15 width=500 style="" border=1 id="login">
  <tr>
  <td>Enter your Id:</td>
  <td><Input type = "text" name="id" required></td>
  </tr>
  <tr>
  <td> Enter Your Password : </td>
  <td><input type="password" name="pass" required></td>
  </tr>
  <tr>
  <td> Forgot Password ? </td>
  <td> <Input type="checkbox" name=""> Keep me Login</td>
  </tr>
  <tr>
  <td colspan=2 align=center><input type="submit" value="Login" name="sub" style="padding:10px; width:150px; font-weight:bold;"></td>
  </tr>
  </table><br>
  <a href="Account.php">Create Your Account</a>
  </form></center>
 </body>
</html>
