<?php
include('functions.php');
$first_number = $_POST['first_number'];
$second_number = $_POST['second_number'];
$operator = $_POST['operations'];

switch ($operator){
	case 'addition':
		addition($first_number, $second_number);
		break;

	case 'subtraction':
		subtraction($first_number, $second_number);
		break;

	case 'multiplication':
		multiplication($first_number, $second_number);
		break;

	case 'division':
		division($first_number, $second_number);
		break;
}