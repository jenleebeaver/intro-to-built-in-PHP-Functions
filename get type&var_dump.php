<?php
namespace Codecademy;

$first = "Welcome to the magical world of built-in functions.";
  
$second = 82137012983; 

//Write your code below:

echo gettype($first);
echo "\n";
echo gettype($second);
echo "\n";

echo var_dump($first);
echo "\n";
echo var_dump($second);
echo "\n";




//NOTES: 

//GETTYPE():
//gettype() function returns the string value of the data type 
$name = "Aisle Nevertell";
$age = 1000000;
 
echo gettype($name); // Prints: string
echo "\n";
echo gettype($age); // Prints: integer
echo "\n";

//VAR_DUMP()
//prints details about the argument it recieves. Type, length, value held 
var_dump($name); // Prints: string(15) "Aisle Nevertell"
 echo "\n";
var_dump($age); // Prints: int(1000000)
