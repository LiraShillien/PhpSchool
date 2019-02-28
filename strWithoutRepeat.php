<?php
function repeat($str)
{
    $a = '';
    $b = [];
    $arr = str_split($str);
    foreach ($arr as $key => $value) {
        if ((!strstr($a, $value))) {
            $a .= $value;
        }
    }
    for($j = strlen($a)-1; $j>=0; $j--){
        if(!strstr($str, $a)){
            $a = str_replace($a[$j], '', $a);
        }
    }
    
    $b[] = $a;
     

    return $b;
}
var_dump(repeat('abcbcab'));
