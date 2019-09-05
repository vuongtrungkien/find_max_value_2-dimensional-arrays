<?php
$arr = [
    [1, 3, 5, 7],
    [2, 4, 8, 10],
    [22, 8, 6, 7]
];


function findMaxInArr($arr)
{
    $max = $arr[0][0];
    foreach ($arr as $key => $item) {
        foreach ($arr[$key] as $key2 => $value) {
            if ($max < $value) {
                $max = $value;
                $index = $key ." ". $key2;
            }
        }
    }
    echo $max . " location " . $index;

}
findMaxInArr($arr);

