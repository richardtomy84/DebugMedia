<?php

class Student{
    public $name;
    private $roll_number;

    public function setName($n)
    {
        $this->name = $n;

    }

    public function setRollNumber($r){
        $this->name = $r;

    }

    public function getName(){
        return $this->name;

    }

    public function getRollNumber(){
        return $this->roll_number;

    }

}

$ob = new Student();
$ob->name = "abc";

?>


