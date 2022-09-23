<!-- Constant -->

<?php
define("PI",3.14) ;//Constant variable declared , They are in capital latters

echo PI;
?>


<!-- Array -->


<?php
$numbers =array(10,"name",30,50);

echo "Array value : ".$numbers[1];

//Push a value to an array 
array_push($numbers,3050);

echo $numbers[4];  //to show push array value

print_r($numbers);  // to show array structure
var_dump($numbers); // to show full array details

unset($numbers[4]); // delete value from 4 th

var_dump($numbers); // to show full array details

$ar = ["name"=>"Tintu","age"=>28,"mark"=>40];

echo $ar["name"];



?>


<?php
$a=1;

switch($a){
    case 1 : echo "sunday";
    break; //used to exit from a block
    case 2 : echo "Monday";
    break;
    case 3 : echo "Tuday";
    break;
    case 4: echo "none of the above";
}
?>

<?php
//Normal Function call no return value
function sum($a,$b){

echo $a+$b;
}

sum(10,20);

//end

//Normal Function, if $b Has no Value, call no return value
function sum_no_b($a,$b=54){

    echo $a+$b;
    }
    
   // sum_no_b(10); //$b no value assign
   sum_no_b(10,100);
    //end

?>

<?php
function sum_return($a,$b=54){

    return $a+$b;
    }

    //echo sum_return(600);
     sum_return(600);
/*
require and include : use for add other php filles to our project

require : (program will stop) if other php filles are not in this fille it show error message and code not working ,, only show error message

include : (program will run only show error message)if other php filles not in this fille it show error ... but project will run


*/
?>

