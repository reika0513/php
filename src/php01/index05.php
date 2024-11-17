<?php
function test($score1, $score2)
{
  return $score1 * $score2;
}
function taxt($score1, $score2)
{
  return $score1 * $score2 / 2;
}
function tt($number1, $number2, $number3)
{
  return ($number1 + $number2) * $number3 / 2;
}

echo test(5.1) . "\n";
echo taxt(7,8) . "\n";
echo tt(4, 5, 4);
