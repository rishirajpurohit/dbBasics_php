<?php

error_reporting('~E_ALL');



class db_user{

	public $conn;

	public function __construct(){
		$this->conn = mysqli_connect('localhost','root','','sunshine') or die('could not connect');
	}

	function addUser($username,$password,$age,$role,$insert_time,$update_time){

		$query = "INSERT INTO `user`(`username`, `password`, `age`, `role`, `insertdatetime`, `updatedatetime`) VALUES ('".$username."','".$password."','".$age."','".$role."','".$insert_time."','".$update_time."');";

		$res = mysqli_query($this->conn,$query);
		return $res;
	}

	function getUser($username){
		$query = "select * from user where username='".$username."'";
		$res = mysqli_query($this->conn,$query);
		
		if($res){
			//get actual row data
			return mysqli_fetch_assoc($res);
		}else{
			throw new Exception("Error in getting user details");
		}
	}

}


