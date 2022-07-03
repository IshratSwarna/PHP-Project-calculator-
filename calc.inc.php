<?php
include 'classes/Calculator.class.php';

$json = file_get_contents("php://input");
$obj = json_decode($json);

$num1 = $obj->field1;
$num2 = $obj->field2;
$op = $obj->field3;

#output result will be stored in response array
$response = array();

$calculator = new Calculator;
$calculator->setCalculator($num1, $num2, $op);

$response["number1"] = $num1;
$response["number2"] = $num2;
$response["operaion"] = $op;
$response["Result of this operation"] = $calculator->calculate();

$json_response = json_encode($response);
echo $json_response;
header("Content-type: application/json");

?>