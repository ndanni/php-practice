<?php
function addFunction($num1,$num2) {
    $sum=$num1 + $num2;
    echo "The Sum of a and b is : $sum <br>";
}
function multiplyFunction($num1,$num2){
    $product=$num1 * $num2;
    echo "The Product of a and b is : $product";
}
addFunction(25,15);
multiplyFunction(25,15);
?>