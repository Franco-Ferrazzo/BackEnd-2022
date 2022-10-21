<?php

$A = 1.0;
$B = 3.0;
$C = 4.0;
echo "Punto 1". PHP_EOL;
$F = ((($A * $B) / ($C**(1/2))) / ($C - (1/$B))) - ((2*$C)/$A);
echo $F. "\n";

$G = (((2*$A) - ($B/($C**(1/2))))/($C + (1/$B))) * ($B/4);
echo $G . PHP_EOL;
echo "Punto 2". PHP_EOL;
$A = 10;
$B = 20;
$C = !(!($A != 10) || (20 > $B) && ($A == 10) && false) && true;
var_dump($C);

echo "Punto 3". PHP_EOL;
$a = 33;
$c = !(($a > 10) && ($a < 20));
var_dump($c);
$b = !(($a > 10) || !($a < 20));
var_dump($b);

echo "Punto 4". PHP_EOL;
$a = 20;
$b = $a;
$c = 15;
$d = 10;
$e = (($a == $b) || ($b > $c)) || ($c < $d);
var_dump($e);

echo "Punto 5". PHP_EOL;
$a = 10;
$b = 12;
$c = 13;
$d = 10;
$A = (($a > $b) || ($a < $c)) && (($a == $c) || ($a >= $b));
var_dump($A);
$B =(($a >= $b) || ($a < $d)) && (($a >= $d) && ($c > $d));
var_dump($B);
$C = !($a == $c) && ($c > $b);
var_dump($C);

echo "Punto 6". PHP_EOL;
$M = 8;
$N = 9; 
$R = 5;
$S = 5;
$T = 4;
$V = 77;
var_dump(!(($M > $N && $R > $S) || (!($T < $V && $S > $M))));

echo "Punto 7". PHP_EOL;
var_dump((3 * 2 - 4/ 2 * 1 ) > (3 * 2 + 2 * 1) && (5 > 11 % 4));
var_dump(((3 >= 3) ||(5 != 5)) && !(15/ 5  + 2 != 5));
var_dump(!(!((3 * (-3))* 2 > (3 - (-3) * 2)) || 1 ** 3 * 2 > 6));
var_dump((3 >= 4 && 5 > 3 && 3 > 3 ) || !(4 <= 4 || 5 > 4 || 6 >= 7));

echo "Punto 8". PHP_EOL;
$a = $A > 0 && $B < 0;
$b = $A != $B && $A != $C && $B != $C;
$c = $E != 0 && $F <= $G;
$d = $F < 0 xor !$E < 0; 
