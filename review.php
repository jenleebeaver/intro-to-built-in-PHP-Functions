<?php
$string_var = "Check it out";
echo strtoupper($string_var) . "!\n";

echo ceil(8.873);
echo "\n";
  
echo pi();
echo "\n";

echo str_pad("PHP", 30, "*^*-", STR_PAD_BOTH);
echo "\n";

echo getrandmax();
echo "\n";

echo rand();
echo "\n";

echo rand(1, 52);
echo "\n";

echo abs(-1287);
echo "\n";

echo round(8723.999);
echo "\n";

echo substr_count($string_var, " ");
echo "\n";

echo strrev("\n.pu ti peeK .taerg gniod er'uoY");

echo strtolower("SOON, tHiS WILL Look NoRmAL.\n");

echo str_repeat("There's no place like home.\n", 3);

echo gettype($string_var);
echo "\n";
echo var_dump($string_var);

//OUTPUT 
// CHECK IT OUT!
// 9
// 3.1415926535898
// *^*-*^*-*^*-*PHP*^*-*^*-*^*-*^
// 2147483647
// 1553014579
// 31
// 1287
// 8724
// 2
// You're doing great. Keep it up.
// soon, this will look normal.
// There's no place like home.
// There's no place like home.
// There's no place like home.
// string
// string(12) "Check it out"
