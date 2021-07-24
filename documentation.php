<?php
namespace Codecademy;

$a = 29;
$b = "You did it!";
$c = STR_PAD_BOTH;
$d = "*~*";

// Write your code below:
echo str_pad($b, $a, $d, $c);

// Let’s look at this description in more detail:

// str_pad ( string $input , int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]] ) : string

// The : string tells us that the str_pad() returns a string.

// Now let’s take a closer look at the parameters:

// string $input , int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]]

// str_pad() has four paramteters: two required and two optional. The first is a string they call $input. This is our original string. The function will add “padding” to this string. This corresponds to our "You did it!" string.

// The second parameter is an integer they call $pad_length. This is the length we’d like the final string to be once it has been padded. This correponds to the integer variable we provided (29).

// The third parameter is a string they call $pad_string. This parameter has a default value of " ". The str_pad() function will add the $pad_string to the $input string until it’s the correct length ($pad_length). If no argument is passed in, the function will pad with space characters. We’d like our string to be padded with "*~*".

// The final parameter is an integer they call $pad_type. This parameter dictates the way the string is padded: only on the left, only on the right, or on both sides. This is a bit of a strange one. The parameter’s type is an integer, but the default value for $pad_type is a predefined constant—STR_PAD_RIGHT. The parameter must be the values 0, 1, or 2. 0 means only pad to the left, 1 means only pad to the right, and 2 means pad on both sides. To save us from having to remember which was which and prevent people from using invalid numbers, PHP comes with predefined constants STR_PAD_LEFT, STR_PAD_RIGHT, and STR_PAD_BOTH equal to 0, 1, and 2, respectively. These constants are available from anywhere. We want padding on both sides, so $str_pad() should be passed STR_PAD_BOTH as its fourth parameter.

//NOTES:

//abs() 
//abs() notation:
//abs ( mixed $number ) : number
//(parameterType name)
//mixed: multiple data types
// : number ; data type the function will return

// : void ; prints, but doesn't return a value 

//substr_count()
//substr_count ( string $haystack , string $needle [, int $offset = 0 [, int $length ]] ) : int
//[] is our default value 
