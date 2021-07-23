<?php
//namespace is encapsulating items. Creates authors.
namespace Codecademy;

// Write your code below:
function calculateDistance($num1, $num2){
  $distance = $num2 - $num1;
  return abs($distance . "\n");
};

function calculateTip($totalCost){
  $newCost = $totalCost + ($totalCost * .18);
  return round($newCost . "\n");
};

//NOTES 

//abs()
//returns the absolute value of its number argument 
echo abs(-10.99); // Prints: 10.99
echo "\n";
echo abs(127); // Prints: 127
echo "\n";

//round()
//returns the nearest integer to its number argument 
echo round(1.2); // Prints 1
 echo "\n";
echo round(1.5); //Prints 2
 echo "\n";
echo round(1298736.821763876); // Prints: 1298737
