<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$fname = $_POST["First_Name"];
	$lname = $_POST["Last_Name"];
	$uname = $_POST["Username"];
	$mnum = $_POST["mobile_num"];
	$pass = $_POST["loginpass"];
	$conn = mysql_connect($servername, $username, $password);
	if(!$conn){
		die("failed!".mysql_error());
	}
	echo "SUCCESSFUL CONNECTION";
	$sql = mysql_select_db('Members',$conn);
	if(!$sql){
		die("failed".mysql_error());
	}
	echo "Successfully selected database";
	
	$sql = "INSERT INTO Member_Details VALUES('$fname','$lname','$uname','$mnum','$pass')";
	$c = mysql_query($sql,$conn);
	if(!$c){
		die("Failed".mysql_error());
	}
	echo "Successfully inserted into a table";<br><br>
	mysql_close($conn);
?>

<h1>Hi!</h1>