<?php
session_start();
?>
<html>
<title>Sign In</title>






<head>
<style>
.button {
    background-color: #FF0000;
    color: black; 
    border: 2px;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 50%;
    
    
}
.button:hover {
background-color: #008CBA;
color: white;
}
</style>
</head>

<body >
<center><img src=img3.png width=600 height=300></img>

<?php

$tbl_name="userinfo";

$connect=mysqli_connect('localhost','root','','readon');
if(isset($_POST['submit']))
{
	$usermail=$_POST['amail'];
	$userpassword=$_POST['apassword'];
	$sql="select * from $tbl_name where email='$usermail' and password='$userpassword'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		echo "<script type='text/javascript'>alert('Succesfully Logged In');</script>";
		header('refresh:0 URL=page1.php');
	}
	else
	{
		echo "<script type='text/javascript'>alert('Incorrect Email and Password Combination');	</script>";
		header('refresh:0 URL=signin.php');
	}
}
?>
<form action="" method="post">
<font size=6 color=#FF0000>&emsp;Email:&emsp;&nbsp;<input type=text placeholder="@gmail.com" name="amail"></input><br><br>
Password:&emsp;<input type="password" name="apassword"></input><br><br>
<input type="reset" class=button></input>&emsp;&emsp;<input type="submit" name="submit" value="Submit" class=button></input>
</font>
</form>

</body>
</html>

