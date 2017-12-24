<?php

require_once 'db_user.php';


date_default_timezone_set("Asia/Kolkata");


if(isset($_POST["register_submit"])){
	$action = "register";
}else if(isset($_POST["login_submit"])){
	$action = "login";
}else{
	echo "Action is required!!";
	exit;
}

if($action == "register"){

	//get table
	$db_user_obj = new db_user();

	//get user details
	$username = $_POST["username"];
	$password = $_POST["password"];
	$age = '45';
	$role = "teacher";
	$insert_time = date('Y-m-d H:i:s', time());
	$update_time = date('Y-m-d H:i:s', time());

	//insert user add user
	$status = $db_user_obj->addUser($username,$password,$age,$role,$insert_time,$update_time);

	//return success
	return $status;
}else if($action == "login"){

	//get table
	$db_user_obj = new db_user();

	//get user details
	$username = $_POST["username"];
	$password = $_POST["password"];

	//insert user add user
	try{
		$user_detail = $db_user_obj->getUser($username);
	}catch(Exception $e){
		echo "some error occured : ".$e->getMessage();
		exit;
	}

	//check
	if($password == $user_detail["password"]){
		header('Location: dashboard.php');
	}else{
		echo "login failed";
	}

	//return success
	exit;
}		