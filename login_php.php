<?php 

	$flag="OK";
	$msg="";

	if(!$_POST['mno'] || !$_POST['passw'])
	{
		$msg="Please enter your mobile number and password";
		$flag="NOTOK";
	}

	if($flag=="NOTOK")
	{
		echo "<script>alert('$msg')</script>";
		echo "<input type='button' value='Back' onClick='history.go(-1)'>";	
	}

	else
	{
		header('location:homes.html');
	}

 ?>