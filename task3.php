<?php

$true = true;
$false = false;

$and = $true && $false;
$or = $true || $false;
$nor = !($true || $false);
$not = !$true;

if ($or) {
    echo "and is true" . PHP_EOL;
}
// 1 - < lub > dla a i b
// 2 - == / 3 - === dla b i b2

$a = 1;
$b = 2;
$b2 = '2';
$word1 = 'word1';
$word2 = 'word2';
$word22 = 'word2';


if ($b > $a) {
    echo 'warunek b > a' . PHP_EOL;
}

if ($b == $b2) {
    echo 'warunek b == b2' . PHP_EOL;
}

if ($b === $b2) {
    echo 'warunek b === b2' . PHP_EOL;
}