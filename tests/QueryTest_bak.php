<?php

class QueryTest extends PHPUnit_Framework_TestCase
{
    public function testQuery()
    {

        $userId = '9916057';
        $userPassword = '12345';		
        $userName = '黃良美';

        $user = new \..\src\PHPUnitEventDemo\User($userId, $userPassword, $userName);

		header("Content-Type: text/html; charset=utf-8");

		$db_host = "localhost";
		$db_database = "db_civil";
		$db_username = "nctucv";
		$db_password = "pastexam";

		//$con=mysqli_connect("140.113.140.109", $db_username, $db_password,$db_database);
		$con=mysqli_connect($db_host, $db_username, $db_password,$db_database);
		if (mysqli_connect_errno($con)) die("資料連結失敗！");

		mysqli_query($con,"SET NAMES 'utf8'");	

	    $query_RecLogin = "SELECT * FROM `users` WHERE `uid`='".$userId."'";
	    $RecLogin = mysqli_query($con,$query_RecLogin);		
	    $row_RecLogin=mysqli_fetch_assoc($RecLogin);
	    
		
		$queryId = $row_RecLogin["uid"];
	    $queryPassword = $row_RecLogin["password"];
	    $queryName = $row_RecLogin["name"];		// check!!
		$query = new \PHPUnitEventDemo\Query($queryId, $queryPassword, $queryName);
		


        $this->assertEquals($query->uid, $user->uid);
        $this->assertEquals($query->password, $user->password);
        $this->assertEquals($query->name, $user->name);		
    }
}
