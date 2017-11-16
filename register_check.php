<!DOCTYPE html>
<html>
<head>
	<title>register check</title>
</head>
<body>
	<?php 
	$FnameErr="";
	$Fname="";
	$UnameErr="";
	$Uname="";
	$MnumErr="";
	$Mnum="";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(empty($_POST["First_Name"])){
			$FnameErr="Name is Required";
		}
		else{
			$Fname=$_POST["First_Name"];
			if(!preg_match("/^[a-zA-Z]*$/",$First_Name))
				$FnameErr="only letters are allowed";

		}
		if(empty($_POST["Username"])){
			$UnameErr="Username is Required";
		}
		else{
			$Uname=$_POST["Username"];
			if(!preg_match("/^[a-zA-Z0-9]*$/",$Username))
				$FnameErr="only letters and numbers are allowed";

		}
		if(empty($_POST["mobile_num"])){
			$MnumErr="Mobile number is Required";
		}
		else{
			$Mnum=$_POST["mobile_num"];
			if(!preg_match("/^[0-9]{10}$/",$mobile_num))
				$MnumErr="only 10 digit valid mobile number allowed";

		}
	}
?>
</body>
</html>