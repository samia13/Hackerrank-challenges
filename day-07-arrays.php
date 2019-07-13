<?php



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
$arr = array_reverse($arr);
for($i=0; $i<count($arr); $i++ ){
    echo $arr[$i]." ";
}

fclose($stdin);
?>
