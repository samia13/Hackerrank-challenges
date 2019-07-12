<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

function odd($s){
    if($s % 2 != 0 )
        return true ; 
    else 
        return false ;
}
function get_even_odd_substr($str){
    $str_odd = ""; 
    $str_even = "";

    for($i=0; $i<strlen($str); $i++){
        if(odd($i))
            $str_odd .= $str[$i];
        else 
            $str_even .= $str[$i];
    }
    return $str_even." ".$str_odd;
}

$T = intval(fgets($_fp));
for($i = 0; $i < $T; $i++){
    $str = trim(fgets($_fp));
    echo get_even_odd_substr($str)."\n";
}
?>
