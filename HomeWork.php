<?php
//1/////////////////////////////////////
$str = "Hello,,,, world!!!!!!?????";
$marksInit = ",.:;-!?";
$marks = str_split($marksInit);
$dot = ".";

$result = $str;
$chars = str_split(($result));
foreach ($chars as $key => $char) {
    foreach ($marks as $mark) {
        if ($char == $mark) {
            $result[$key] = $dot;
            break;
        }
    }
}
unset($char);
unset($mark);
echo $result;
//2/////////////////////////////////////
$arr = [10.01, 20, "5.01 aaa", "60", 1];
$min = null;
$work = 0;
for ($i = 0; $i < count($arr); $i++) {
    if (is_numeric($arr[$i])) {
        $work = $arr[$i];
    }
    else {
        $work = (float)$arr[$i];
    }
    if ($i == 0) {
        $min = $work;
    }
    else {
        if ($arr[$i] < $min) {
            $min = $work;
        }
    }
}
print_r($arr);
echo "Наименьшее число  = " . $min;
//3////////////////////////////////////////////
$max = null;
$work = 0;
for ($i = 0; $i < count($arr); $i++) {
    if (is_numeric($arr[$i])) {
        $work = $arr[$i];
    }
    else {
        $work = (float)$arr[$i];
    }
    if ($i == 0) {
        $max = $work;
    }
    else {
        if ($arr[$i] > $max) {
            $max = $work;
        }
    }
}
print_r($arr);
echo "Наибольшее число  = " . $max;

//4//////////////////////////////////////////////
$arr = [10,5,3,2,4];
$average = 0;
$n = 0;
for ($i = 0; $i < count($arr); $i++)
{
    $n = $arr[$i];
    $average += $n;
}


print_r($arr);
echo "Среднее значение = " . $average/count($arr);
