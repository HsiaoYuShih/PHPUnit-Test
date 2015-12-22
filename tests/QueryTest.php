<?php

class QueryTest extends PHPUnit_Framework_TestCase
{
    public function testQuery_c0()
    {
        //Success
        $userId1 = '9916057';
        $userPassword1 = '12345';		
        //Success
        $userId2 = '0356005';
        $userPassword2 = '0356005';		
        //wrong Password
        $userId3 = '0456043';
        $userPassword3 = '0456002';		
        //User Not Found
        $userId4 = '1234567';
        $userPassword4 = '1234567';		
     
	$query1 = new \PHPUnitEventDemo\Query($userId1, $userPassword1);
	$query2 = new \PHPUnitEventDemo\Query($userId2, $userPassword2);
	$query3 = new \PHPUnitEventDemo\Query($userId3, $userPassword3);
	$query4 = new \PHPUnitEventDemo\Query($userId4, $userPassword4);

        $this->assertEquals('Success', $query1->status);
        $this->assertEquals('Success', $query2->status);
        $this->assertEquals('Wrong Password', $query3->status);
        $this->assertEquals('User Not Found', $query4->status);
    }
    
    public function testCourse_c0()
    {
	
        //Course ID range: 1~39	
	//min-
	$cid1 = 0;
	//min
	$cid2 = 1;
	//min+
	$cid3 = 2;
	//normal
	$cid4 = 20;
	//max-
	$cid5 = 38;
	//max
	$cid6 = 39;
	//max+
	$cid7 = 40; 

	$query1 = new \PHPUnitEventDemo\Course($cid1);
	$query2 = new \PHPUnitEventDemo\Course($cid2);
	$query3 = new \PHPUnitEventDemo\Course($cid3);
	$query4 = new \PHPUnitEventDemo\Course($cid4);
	$query5 = new \PHPUnitEventDemo\Course($cid5);
	$query6 = new \PHPUnitEventDemo\Course($cid6);
	$query7 = new \PHPUnitEventDemo\Course($cid7);

	$this->assertEquals('Course Not Found', $query1->status);
	$this->assertEquals('Success', $query2->status);
	$this->assertEquals('Success', $query3->status);
	$this->assertEquals('Success', $query4->status);
	$this->assertEquals('Success', $query5->status);
	$this->assertEquals('Success', $query6->status);
	$this->assertEquals('Course Not Found', $query7->status);
    }

    public function testQuery_c1()
    {
        //Success
        $userId1 = '9916057';
        $userPassword1 = '12345';		
        //Success
        $userId2 = '0356005';
        $userPassword2 = '0356005';		
        //wrong Password
        $userId3 = '0456043';
        $userPassword3 = '0456002';		
        //User Not Found
        $userId4 = '1234567';
        $userPassword4 = '1234567';		
     
	$query1 = new \PHPUnitEventDemo\Query($userId1, $userPassword1);
	$query2 = new \PHPUnitEventDemo\Query($userId2, $userPassword2);
	$query3 = new \PHPUnitEventDemo\Query($userId3, $userPassword3);
	$query4 = new \PHPUnitEventDemo\Query($userId4, $userPassword4);

        $this->assertEquals('Success', $query1->status);
        $this->assertEquals('Success', $query2->status);
        $this->assertEquals('Wrong Password', $query3->status);
        $this->assertEquals('User Not Found', $query4->status);
    }
    
    public function testCourse_c1()
    {
	
        //Course ID range: 1~39	
	//min-
	$cid1 = 0;
	//min
	$cid2 = 1;
	//min+
	$cid3 = 2;
	//normal
	$cid4 = 20;
	//max-
	$cid5 = 38;
	//max
	$cid6 = 39;
	//max+
	$cid7 = 40; 

	$query1 = new \PHPUnitEventDemo\Course($cid1);
	$query2 = new \PHPUnitEventDemo\Course($cid2);
	$query3 = new \PHPUnitEventDemo\Course($cid3);
	$query4 = new \PHPUnitEventDemo\Course($cid4);
	$query5 = new \PHPUnitEventDemo\Course($cid5);
	$query6 = new \PHPUnitEventDemo\Course($cid6);
	$query7 = new \PHPUnitEventDemo\Course($cid7);

	$this->assertEquals('Course Not Found', $query1->status);
	$this->assertEquals('Success', $query2->status);
	$this->assertEquals('Success', $query3->status);
	$this->assertEquals('Success', $query4->status);
	$this->assertEquals('Success', $query5->status);
    }
    
    public function testQuery_c2()
    {
        //Success
        $userId1 = '9916057';
        $userPassword1 = '12345';		
        //Success
        $userId2 = '0356005';
        $userPassword2 = '0356005';		
        //wrong Password
        //$userId3 = '0456043';
        //$userPassword3 = '0456002';		
        //User Not Found
        $userId4 = '1234567';
        $userPassword4 = '1234567';		
     
	$query1 = new \PHPUnitEventDemo\Query($userId1, $userPassword1);
	$query2 = new \PHPUnitEventDemo\Query($userId2, $userPassword2);
      //$query3 = new \PHPUnitEventDemo\Query($userId3, $userPassword3);
	$query4 = new \PHPUnitEventDemo\Query($userId4, $userPassword4);

        $this->assertEquals('Success', $query1->status);
        $this->assertEquals('Success', $query2->status);
      //$this->assertEquals('Wrong Password', $query3->status);
        $this->assertEquals('User Not Found', $query4->status);
    }
    
    public function testCourse_c2()
    {
	
        //Course ID range: 1~39	
	//min-
	$cid1 = 0;
	//min
	$cid2 = 1;
	//min+
	$cid3 = 2;
	//normal
	$cid4 = 20;
	//max-
	$cid5 = 38;
	//max
	$cid6 = 39;
	//max+
	$cid7 = 40; 

	$query1 = new \PHPUnitEventDemo\Course($cid1);
	$query2 = new \PHPUnitEventDemo\Course($cid2);
	$query3 = new \PHPUnitEventDemo\Course($cid3);
	$query4 = new \PHPUnitEventDemo\Course($cid4);
	$query5 = new \PHPUnitEventDemo\Course($cid5);
	$query6 = new \PHPUnitEventDemo\Course($cid6);
	$query7 = new \PHPUnitEventDemo\Course($cid7);

	$this->assertEquals('Course Not Found', $query1->status);
	$this->assertEquals('Success', $query2->status);
	$this->assertEquals('Success', $query3->status);
	$this->assertEquals('Success', $query4->status);
	$this->assertEquals('Success', $query5->status);
    }

    public function testQuery_MCDC()
    {
        //Success
        $userId1 = '9916057';
        $userPassword1 = '12345';		
        //Success
        $userId2 = '0356005';
        $userPassword2 = '0356005';		
        //wrong Password
        //$userId3 = '0456043';
        //$userPassword3 = '0456002';		
        //User Not Found
        $userId4 = '1234567';
        $userPassword4 = '1234567';		
     
	$query1 = new \PHPUnitEventDemo\Query($userId1, $userPassword1);
	$query2 = new \PHPUnitEventDemo\Query($userId2, $userPassword2);
      //$query3 = new \PHPUnitEventDemo\Query($userId3, $userPassword3);
	$query4 = new \PHPUnitEventDemo\Query($userId4, $userPassword4);

        $this->assertEquals('Success', $query1->status);
        $this->assertEquals('Success', $query2->status);
      //$this->assertEquals('Wrong Password', $query3->status);
        $this->assertEquals('User Not Found', $query4->status);
    }
    
    public function testCourse_MCDC()
    {
	
        //Course ID range: 1~39	
	//min-
	$cid1 = 0;
	//min
	$cid2 = 1;
	//min+
	$cid3 = 2;
	//normal
	$cid4 = 20;
	//max-
	$cid5 = 38;
	//max
	$cid6 = 39;
	//max+
	$cid7 = 40; 

	$query1 = new \PHPUnitEventDemo\Course($cid1);
	$query2 = new \PHPUnitEventDemo\Course($cid2);
	$query3 = new \PHPUnitEventDemo\Course($cid3);
	$query4 = new \PHPUnitEventDemo\Course($cid4);
	$query5 = new \PHPUnitEventDemo\Course($cid5);
	$query6 = new \PHPUnitEventDemo\Course($cid6);
	$query7 = new \PHPUnitEventDemo\Course($cid7);

	$this->assertEquals('Course Not Found', $query1->status);
	$this->assertEquals('Success', $query2->status);
	$this->assertEquals('Success', $query3->status);
	$this->assertEquals('Success', $query4->status);
	$this->assertEquals('Success', $query5->status);
    }


}
?>


