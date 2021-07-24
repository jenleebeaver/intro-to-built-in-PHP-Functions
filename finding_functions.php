<?php
namespace Codecademy;

// Write your code below:
//EX1
function convertToShout($word = "hey"){
  return strtoupper($word) . "!";
};

echo convertToShout();

//EX2
function tipGenerously($costOfMeal = 20){
  //using ceil() vs round(). 
  //ceil() rounds up to the next highest whole number
  //round() rounds to a decimal place. This can be specified with float. 
  return ceil($costOfMeal + ($costOfMeal * .2));
};

echo "\n";
echo tipGenerously();

//EX3
function calculateCircleArea($diameter = 25){
  //don't forget exponent is ** !
  return pi() * ($diameter/2)**2;
};

echo "\n";
echo calculateCircleArea();
