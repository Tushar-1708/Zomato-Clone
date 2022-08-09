<?php 

	$flag = "OK";
	$msg = "";

	if(!$_POST["name"] || !$_POST["mno"] || !$_POST["email"] || !$_POST["passw"])
	{
		$msg = ("Please Fill All the details")."<br>";
		$flag = "NOTOK";
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