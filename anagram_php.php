<?php

function runLoop($str1, $str2) {
    if (strlen($str1) != strlen($str2)) {
        return false;
    }
    
    $arr = [];
    
    foreach (str_split($str1) as $value) {
        $arr[$value] = ($arr[$value] ?? 0) + 1;
    }
    foreach (str_split($str2) as $value) {
        if (!array_key_exists($value, $arr) || !$arr[$value]) return false;
        $arr[$value]--;
    }    

    return true;
    
}

var_dump(runLoop('test', 'eset'));
var_dump(runLoop('test', 'eser'));
var_dump(runLoop('testr', 'eser'));
var_dump(runLoop('test', 'fert'));
var_dump(runLoop('tefr', 'fert'));
var_dump(runLoop('tefr', ''));
