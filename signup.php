<html>
<title>Sign Up</title>
<?php

session_start();

?>
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
<body>
<center><img src="img2.png" width="850" height="300"></img>

<p>
<?php
$host="localhost";
$username="root";
$password="";
$db_name="readon";
$tbl_name="userinfo";

$connect=mysqli_connect('localhost','root','','readon');
if(isset($_POST['submit'])){

$n1 = $_POST['finame'];
$n2 = $_POST['laname'];
$n3 = $_POST['gender'];
$n4 = $_POST['loadd'];
$n5 = $_POST['ltadd'];
$n6 = $_POST['nationality'];
$n7 = $_POST['phone'];
$n8 = $_POST['mail'];
$n9 = $_POST['password'];

$sql="INSERT INTO $tbl_name VALUES('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9')";

$res = mysqli_query($connect, $sql);
echo "<script type='text/javascript'>alert('KUDOS!  Successfully Registered');		</script>";
header('refresh:0 URL=page1.php');

}


?>

<form method="post">

<br>

<strong><font size=5 color="red">First Name:&emsp;<input type=text name="finame" required></input>

<br><br>

Last Name:&emsp;<input type=text name="laname" required></input>

<br><br>

&emsp;&emsp;&emsp;Gender:&emsp;Male:<input type=radio name="gender" id="Male" value="Male"></input>&emsp;Female:<input type=radio value="Female" id="Female"name="gender"></input>

<br></center></font>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;<font size=5 
color="blue">Address:<br></font>

<center><font size=5 color="red">

&emsp;&emsp;Line 1:&emsp;<input type=text name="loadd" required></input>

<br><br>

&emsp;&emsp;Line 2:&emsp;<input type=text name="ltadd" required></input>

<br><br>

Nationality:&emsp;<input type=text name="nationality" required></input>

<br><br>

Phone No.:&emsp;<input type=text name="phone" required></input>

<br><br>

&emsp;&emsp;Email:&emsp;<input type=text placeholder="@gmail.com" name="mail" required></input>

<br><br>

&nbsp;Password:&emsp;<input type=password name="password" required></input>

<br><br>

<input type="Reset" class=button></input>&emsp;&emsp;<input type="submit" class=button name="submit"></input>

<br>
</form>
</body>

</html>
