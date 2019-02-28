<?php
function palindrome($str)
{
    $a = strrev($str);
    if($a == $str){
        return TRUE;
    }else{
        return FALSE;
    }
}



