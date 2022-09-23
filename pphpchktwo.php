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

?>