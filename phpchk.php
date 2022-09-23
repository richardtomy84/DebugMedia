<!-- video link : https://www.youtube.com/watch?v=SnO-J9h4X9I&list=RDLVSnO-J9h4X9I&start_radio=1&rv=SnO-J9h4X9I&t=74 -->

<?php
$_number = 123;
unset($_number);//variable undeclare using unset
echo $_number;

?>

<!-- php block new -->
<?php
$$_number4 = 123; //error decleration , $4jk; this also error with number


echo $$_number4;

?>

<!-- new php block for variable-->
<?php
$nochk= 0x123; // x for heaxa decimal number
echo("\n Hexa Decimal no :".$nochk);

?>

<?php
$nochkb= 0b1010; // x for binary number
echo("\n Binary no :".$nochkb);

?>

<?php 
$a =10;
$n=10;
$b=20;

$a= $a+10; //Same result
$n+=10;  // Same Result
echo"\n a = ".$a;
echo"\n b = ".$b;
?>

<?php

$ny=10;
$nyh=10;

$nh=20;
echo " ny++= " .$ny++; //use than change
echo " ++nyh =".++$nyh; // Change than use
?>

<!-- single and double quotes -->

<?php
$name ='"Richard"'; //Double quotes display
$nam = '\'Richard\''; //single quote display
echo $name;
echo "========";
echo $nam;

$age =20;
$str = "your age is $age"; //variable value shown in double quotes
$strL = 'your age is $age'; //in single quotees variable declare as string

echo $str;
echo $strL;

?>