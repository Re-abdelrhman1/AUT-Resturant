<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title> Login_page_aqaba-university-of-technology-resturant</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
<?php include('inc.php');?>
</head>
<style>
body {
  background-image: url('imag/login.jpg');
}
</style>
<?PHP

?>
<body>
<form action=" " method="POST" class="text-center" >
<?php 
if(isset($_session['login']))
{
	echo $_session['login'];
	unset($_session['login']);
}
if(isset($_session[' notlogin']))
{
	echo $_session['notlogin'];
	unset($_session['notlogin']);
}
?>
<br>
<lable><h2> Username </lable></h2>
<input type ="text" name= "username" placeholder="Enter Username">
<lable><h2> ID numer </lable></h2>
<input type ="text" name= "id_number" placeholder="Enter Username">
<b><h2>Password</b><h2>
<input type = "password" name= "password"placeholder="Enter Password">
<input type ="submit" name ="submit"  value="Login">
<?php
if(isset($_POST['submit']))
{

	      $username=$_POST['username'];
		  $id_number=$_POST['id_number'];
          $password=md5($_POST['password']);
		  $sql="SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password' AND id_number = '$id_number'";
		  $res=mysqli_query($conn,$sql);
          $count=mysqli_num_rows($res);
          if($count==1)  
          {
        $_SESSION['user_name']= $username;
		$_SESSION['id_number']= $id_number;
	
	$_session['login']="<div>login </div>";
    //echo $id;
     header("location:index1.php");
        }
else {
	echo "Password or Username not match";
	echo"<br><br>";
	$_session['notlogin']="<div>Password or Username not match </div>";
//echo "<a href= 'index1.php></a>'";
}
}
?>
</form>
</body>
</html>