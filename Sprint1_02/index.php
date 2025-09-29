<?php

$int = 250;
$double = 2.5;
$string = "This is a text chain";
$boolean = true;
echo $string . " " . $int . " " . $double . " " . $boolean . "\n";

echo $string . "\n";
echo $int + $double . "\n";
echo $boolean ? "true" : "false" . "\n";

define("NAME", "Alex Beltran");
echo "\n---" . NAME . "---\n";

//ex 2
$message = "Hello World!";
echo $message . "\n";
echo strtoupper($message) . "\n";
echo strlen($message) . "\n";
echo strrev($message) . "\n";

$extra = "This is the PHP course";
echo $message . " " . $extra . "\n";

//ex 3
// a)
$x = 31;
$y = 24;
$n = 5.5;
$m = 12.9;

echo "x + y = " . ($x + $y) . "\n";
echo "x - y = " . ($x - $y) . "\n";
echo "x * y = " . ($x * $y) . "\n";
echo "x % y = " . ($x % $y) . "\n";

echo "n + m = " . ($n + $m) . "\n";
echo "n - m = " . ($n - $m) . "\n";
echo "n * m = " . ($n * $m) . "\n";
echo "n % m = " . ($n % $m) . "\n";

echo "El doble de $x es " . ($x * 2) . "\n";
echo "El doble de $y es " . ($y * 2) . "\n";
echo "El doble de $n es " . ($n * 2) . "\n";
echo "El doble de $m es " . ($m * 2) . "\n";

echo "La suma de todas las variabes es " . ($x + $y + $n + $m) . "\n";
echo "El producto de todas las variables es " . ($x * $y * $n * $m) . "\n";

// b)
function calculate($num1, $num2, $operation) {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        return "Error: Both parameters must be numbers.";
    }

    switch ($operation) {
        case "sum":
            return $num1 + $num2;
        case "substract":
            return $num1 - $num2;
        case "multiply":
            return $num1 * $num2;
        case "divide":
            return $num1 / $num2;

        default:
    return "Error: invalid operation.";
    }
}

echo calculate(12, 8, "sum") . "\n"; // 20
echo calculate(20, 6, "substract") . "\n"; // 14
echo calculate(31, 12, "multiply") . "\n"; // 372
echo calculate(12, 2, "divide") . "\n"; // 6
echo calculate(12, "ocho", "sum") . "\n"; // Error!
echo calculate(10, 5, "sumar") . "\n"; // Error!

// ex 4
function countUpTo($max = 10, $steps = 1) {
    if (!is_numeric($max) || !is_numeric($steps)) {
        echo "Error: Both parameters must be numbers.";
        return;
    }
    for ($i = 0; $i <= $max; $i += $steps) {
        echo $i . "\n";
    }
}

countUpTo();
countUpTo(20);
countUpTo(30, 2);
countUpTo("diez", 4); // Error!
echo "\n";

// ex 5
function checkGrade($grade) {
    if ($grade >= 60 && $grade <=100) {
        return "First Division!";
    } elseif ($grade >= 45 && $grade <= 59) {
        return "Second Division";
    } elseif ($grade >= 33 && $grade <= 44) {
        return "Third Division";
    } elseif ($grade <= 32) {
        return "Failed";
    } else {
        return "Error";
    }
}

echo checkGrade(35) . "\n";
echo checkGrade(80) . "\n";
echo checkGrade(120) . "\n";
echo checkGrade(0) . "\n"; // Error

// ex 6
function isBitten() {
    return (rand(0, 1) === 1);
}

if (isBitten()) {
    echo "Charlie bit you!";
} else {
    echo "Charlie didn't bite you!";
}