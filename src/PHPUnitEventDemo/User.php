<?php

namespace PHPUnitEventDemo;

class User
{
    public $uid;
    public $password;
    public $name;

    public function __construct($uid, $password,$name)
    {
        $this->uid = $uid;
	$this->password = $password;
        $this->name = $name;
        
    }
}

?>
