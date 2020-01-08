<?php
function printArr($arr) {
    foreach ($arr as $value) {
        echo $value;
        echo "<br>";
    }
}

function largest($arr) {
    $largest = $arr[0];
    foreach ($arr as $value) {
        if ($value > $largest) {
            $largest = $value;
        }
    }
    return $largest;
}

function removeDups($arr) {
    $arr = array_unique($arr);
    return $arr;
}

function distribution($arr) {
    $keys = array_unique($arr, SORT_NUMERIC);
    $assocArray = array_fill_keys($keys, 0);

    foreach ($arr as $value) {
        foreach ($keys as $key) {
            if ($key == $value){
                $assocArray[$key]++;
            }
        }
    }

    return $assocArray;
}