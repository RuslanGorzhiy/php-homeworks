<?php

//1. Дано натуральное число n. Выведите все числа от 1 до n.
function output($i,$n){

    if($i<$n) {

        echo $i;
        output($i+1,$n);

    }

}

output(1,rand(1,10));

echo "<hr>";

/*2) Даны два целых числа A и В (каждое в отдельной строке).
Выведите все числа от A до B включительно, в порядке возрастания,
если A < B, или в порядке убывания в противном случае.*/

$a = rand(1,10);
$b = rand(1,10);

function outputsort($a,$b,$s){

    if($s) {
        if ($a >= $b) {
            echo $a . "<br>";
            outputsort($a - 1, $b, $s);
        }
    }else {
        if ($a <= $b) {
            echo $a . "<br>";
            outputsort($a + 1, $b, $s);
        }
    }
}

outputsort($a,$b,$a>$b);

echo "<hr>";

/*3) Дано натуральное число N. Выведите слово YES, если число N
является точной степенью двойки, или слово NO в противном случае.
Операцией возведения в степень пользоваться нельзя!*/

function outputword($n){

    if(($n > 0) & (($n & ($n - 1)) == 0)) {
        echo "YES";
    }else{
        echo "NO";
    }

}

$n = rand(1,10);
echo $n."<br>";
outputword($n);

/*4) Дано натуральное число N. Выведите все его цифры по одной, в
обратном порядке, разделяя их пробелами или новыми строками.
При решении этой задачи нельзя использовать строки, списки,
массивы (ну и циклы, разумеется). Разрешена только рекурсия и
целочисленная арифметика.*/

echo "<hr>";

function sort_down($i)
{
    if ($i < 10) {
        return $i;
    } else {

        echo ($i % 10) . "<br>";
        return sort_down($i / 10);
    }
}

sort_down(rand(1,500));

