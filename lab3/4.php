<?php
$number1 = 12;
$number2 = 7;
$number3 = 15;

if ($number1 > $number2 && $number1 > $number3) 
{ echo "The largest number is: $number1\n"; }
elseif ($number2 > $number1 && $number2 > $number3) 
{echo"The largest number is: $number2\n";}
else 
{echo"The largest number among three is: $number3\n";}
?>