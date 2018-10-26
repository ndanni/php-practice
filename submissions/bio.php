<?php
echo nl2br("Ndane  Ndazhaga
I am a girl 
I'm a graduate of the university of jos
I studied chemistry education
i'm proud of myself ");
$Name= ("Ndane");
$surname= ("Ndazhaga");
$Age= ("23");
$school= ("university of jos");

echo "My name is ".$Name." ".$surname."<br>";
echo "I attended ". $school;
?>
<?php
$x = 5;
$y = 10;
function myTest() {
global$x, $y;
$y = $x + $y;
}
myTest();
echo$y; // outputs 15
?>
<?php
function multiplyFunction($num1,$num2) {
$sum =$num1 * $num2;
echo "Sum of the two numbers is : $sum";
}
multiplyFunction(10, 20);
?>