<?php

$calc = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $num1 = filter_input(INPUT_GET, 'num1');
    $num2 = filter_input(INPUT_GET, 'num2');
    $operator = filter_input(INPUT_GET, 'operator');

    switch ($operator) {
        case "addition":
            $calc = $num1 + $num2;
            echo "{$num1} + {$num2} = {$calc}";
            break;
        case "subtraction":
            $calc = $num1 - $num2;
            echo "{$num1} - {$num2} = {$calc}";
            break;
        case "multiplication":
            $calc = $num1 * $num2;
            echo "{$num1} * {$num2} = {$calc}";
            break;
        case "division":
            $calc = $num1 / $num2;
            echo "{$num1} / {$num2} = {$calc}";
            break;
        default:
            echo "正しい演算子を指定して下さい";
    }
}
