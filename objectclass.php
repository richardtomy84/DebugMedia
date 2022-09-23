<?php

class Student{
   // public $name;
   
   private $name;

    private $roll_number;

    public function setName($n)
    {
        $this->name = $n;

    }

    public function setRollNumber($r)
    {
        $this->roll_number = $r;

    }

    public function getName()
    {
        return $this->name;

    }

    public function getRollNumber()
    {
        return $this->roll_number;

    }

}

$ob = new Student();
//$ob->name = "abc";
$ob->setName("appu");
$ob->setRollNumber(10);

echo $ob->getName();
echo $ob->getRollNumber();

?>


