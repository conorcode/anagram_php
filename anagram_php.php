<?php

function runLoop($str1, $str2) {
    if (strlen($str1) != strlen($str2)) {
        return false;
    }
    
    $arr = [];
    
    foreach (str_split($str1) as $value) {
        $arr[$value] = ($arr[$value] ?? 0) + 1;
    }
    
    print_r($arr);
    return true;
    
}

$str1 = 'testst';
$str2 = 'esettt';

var_dump(runLoop($str1, $str2));
