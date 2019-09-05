<?php
$myArr = [
    [32,455,12],
    [876,343.9898],
    [1,45343,878692]
];
function findMax($arr){
    $max  = $arr[0][0];
    $index1 = 0;
    $index2 = 0;
    foreach ($arr as $item => $value){
        foreach ($arr[$item] as $items => $values){
            if ($values >= $max){
                $max = $values;
                $index1 = $item;
                $index2 =$items;
            }
        }
    }
    echo 'value max of array is: '.$max;
    echo '<br>';
    echo 'index of value is: ['.$index1.']['.$index2. ']';
}
findMax($myArr);