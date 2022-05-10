<?php

$array = [1, 2, 3, 4, 5];
$assocArray = ['a' => 1, 'b' => 2, 'c' => 3];

// var_dump($assocArray);
// echo $assocArray['a'];

for ($index = 0; $index < count($array); $index++) {
    echo $array[$index] . PHP_EOL;
}

foreach ($array as $value) {
    echo $value . PHP_EOL;
}

$index = 0;
do {
    echo $array[$index] . PHP_EOL;
    $index++;
} while ($index < count($array));

$index = 0;
while ($index < count($array)) {
    echo $array[$index] . PHP_EOL;
    $index++;
};
