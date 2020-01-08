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