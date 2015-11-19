<?php

namespace PHPUnitEventDemo;

class Course
{
    public $cid;
    public $cname;
    public $cgrade;
    public $semester;
    public $status;

    public function __construct($cid)
    {
		$db_host = "localhost";
		$db_database = "db_civil";
		$db_username = "nctucv";
		$db_password = "pastexam";

		$con=mysqli_connect($db_host, $db_username, $db_password,$db_database);
		if (mysqli_connect_errno($con)) die("資料連結失敗！");

		mysqli_query($con,"SET NAMES 'utf8'");	

	        $query_Course = "SELECT * FROM `courses` WHERE `cid`='".$cid."'";
	        $RecCourse = mysqli_query($con,$query_Course);
	        if (mysqli_num_rows($RecCourse) < 1){
			$this->cid = '';
			$this->cname = '';
			$this->cgrade = '';
			$this->semester = '';
			$this->status = 'Course Not Found';			
		}else {
			$row_RecCourse=mysqli_fetch_assoc($RecCourse);			
			$queryCid = $row_RecCourse["cid"];
			$queryCname = $row_RecCourse["cname"];
			$queryCgrade = $row_RecCourse["cgrade"];
			$querySemester = $row_RecCourse["semester"];
			$this->status = 'Success';
		}

    }

}
?>
