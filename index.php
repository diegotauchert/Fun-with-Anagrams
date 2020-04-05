<?php
$arr = ["4","code","aaagmnrs","anagrams","doce"];

$newarr = array();
foreach($arr as $r){
    $va_arr = str_split($r);
    sort($va_arr);
    array_push($newarr,implode($va_arr));
}
$key = array_search("1",$newarr);
unset($arr[$key]);

function removeAnagramsDuplicate($array){
    return array_filter($array, function($v,$k) use($array){
        $v_arr = str_split($v);
        sort($v_arr);
        
        foreach ($array as $key => $value) {
            $va_arr = str_split($value);
            sort($va_arr);
            
            if($key !== $k){
                if($va_arr == $v_arr){
                    return false;
                }
            }else{
                return true;
            }
        }
    },ARRAY_FILTER_USE_BOTH);
}
$arr = removeAnagramsDuplicate($arr);
sort($arr);
print_r($arr);
?>