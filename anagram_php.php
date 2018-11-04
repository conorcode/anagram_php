<?php

function runLoop($str1, $str2) {
    if (strlen($str1) != strlen($str2)) {
        return false;
    }
    
    $arr = [];
    
    foreach (str_split($str1) as $value) {
        $arr[$value] = isset($arr[$value]) ? $arr[$value]++ : 1; 
    }
    
    print_r($arr);
    return true;
    
}

$str1 = 'test';
$str2 = 'eset';

var_dump(runLoop($str1, $str2));
