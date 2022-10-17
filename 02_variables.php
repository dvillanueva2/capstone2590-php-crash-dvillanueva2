<?php
/* ---------- PHP Data Types ---------- */
/*
- String    Series of characters surrounded by quotes
- Integer   Whole numbers
- Float     Decimal numbers
- Boolean   True of False
- Array     Special variable, which can hold more than one value
- Object    A class
- NULL      Empty variable
- Resource  Special variable that holds a resource
*/

/* ---------- Variable Rules ---------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case sensitive ($name and $NAME are two different variables)
*/

$name = 'Brad'; // String
$age = 40; // Int
$has_kids = true;
$cash_on_hand = 20.75;

// echo $age;
// echo $name;
// echo $has_kids;

// var_dump($cash_on_hand);

// echo $name . ' is ' . $age . ' years old';

// echo "${name} is ${age} years old";

// echo 5 + 5; //result is 10
// echo '5' + '5'; //result is still 10 even thought we entered string  values here

/* Arithmetic */
// $x = '5' + '5';
// var_dump($x);
// echo 5 * 6;
// echo 10 - 5;
// echo 10 / 2;
// echo 10 % 3;

/* Constants - use constant types if you think the values are not gonna change. Like for things such as database credentials */
// define('HOST', 'localhost');
// define('DB_NAME', 'dev_db');
// echo HOST;


?>