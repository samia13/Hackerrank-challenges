<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$n = intval(fgets($_fp));
$phone_book = [];
for($i=0;$i<$n;$i++){
    $str = trim(fgets($_fp));
    $result = explode(" ", $str);
    $phone_book[$result[0]] = $result[1];
}
while(!feof($_fp)){
    $str = trim(fgets($_fp));
    if(isset($phone_book[$str])){
        echo $str . "=" . $phone_book[$str]."\n";
    }else{
        echo "Not found\n";
    }
}
?>
