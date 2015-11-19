<?php

namespace PHPUnitEventDemo;

class Query
{
    public $uid;
    public $password;
	public $status;

    public function __construct($uid, $password)
    {


		$db_host = "localhost";
		$db_database = "db_civil";
		$db_username = "nctucv";
		$db_password = "pastexam";

		//$con=mysqli_connect("140.113.140.109", $db_username, $db_password,$db_database);
		$con=mysqli_connect($db_host, $db_username, $db_password,$db_database);
		if (mysqli_connect_errno($con)) die("資料連結失敗！");

		mysqli_query($con,"SET NAMES 'utf8'");	

	    $query_RecLogin = "SELECT * FROM `users` WHERE `uid`='".$uid."'";
		$RecLogin = mysqli_query($con,$query_RecLogin);
	    if (mysqli_num_rows($RecLogin) < 1){
			$this->uid = '';
			$this->password = '';
			$this->status = 'User Not Found';			
		}else {
			$row_RecLogin=mysqli_fetch_assoc($RecLogin);			
			$queryId = $row_RecLogin["uid"];
			$queryPassword = $row_RecLogin["password"];
		    if(md5($password)==$queryPassword){
				$this->uid = $queryId;
				$this->password = $queryPassword;			
				$this->status = 'Success';				
			}else{
				$this->uid = $queryId;
				$this->password = '';
				$this->status = 'Wrong Password';				
			}
		}

    }

}
?>
