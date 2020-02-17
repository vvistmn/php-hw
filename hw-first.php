<?php 

// Задание 1. С помощью условий и циклов выведите на экран таблицу умножения в удобочитаемом формате

$a = 1;
$b = 1;
for ($b = 1; $b <= 10; $b++) {
	echo $a . ' * ' . $b . ' = ' . $a * $b;
	echo "  |  ";
	if ($b == 10) {
		$a++;
		$b = 1;
		echo "<br>";
		echo "<br>";
		if ($a == 10) {

			break;
		}
	}
}

// Задание 3. Задайте бесконечный цикл, который будет выводить на экран квадраты чисел с новой строчки. 

for ($i=1; $i > 0; $i++) { 
	echo $i . ' * ' . $i . ' = ' . $i * $i . "<br>";
	if ($i * $i == 100) {
		echo "Цикл завершен";
		break;
	}
}
echo "<br>";

// Задание 4. Напишите функцию, которая будет принимать три аргумента - a, b и c - и возвращать их произведение.
// Значение “c” по умолчанию - 5. 

echo "<br>";
function numberFunction($a, $b) {
	$c = 5;
	echo $a . " * " . $b . " * " . $c . " = " . $a * $b * $c;
}
numberFunction(12, 2);
echo "<br>";
echo "<br>";

// ДОПОЛНИТЕЛЬНОЕ задание: 

// Задание 1, 2. Используя циклы и условия, вывести на экран все простые числа, находящиеся в диапазоне от 1 до 100. Записать все эти числа в массив

for ($j=1; $j <= 100; $j++) {
	echo $j . '<br>';
	$arr[] = $j;
}
echo "<br>";
var_dump($arr) . '<br>';

// Задание 3. С помощью конструкции foreach вывести на экран каждый элемент массива и фразу " - это простое число №...".

echo "<br>";
echo "<br>";
foreach ($arr as $key => $value) {
	echo $value . '  - это просто число №' . $key . '<br>';
}

// Задание 4. Написать функцию, которая будет принимать один аргумент year и возвращать TRUE, если год високосный, и FALSE, если не високосный. Не использовать циклы и условия

echo "<br>";
echo "<br>";
function happyYear($year) {
	$ff = ($year % 4 == 0 && $year % 100 != 0) == true || ($year % 400 == 0) == true ? TRUE : FALSE;
	return $ff;
}
$fdf = happyYear(2020);
var_dump((bool)$fdf);