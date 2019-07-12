<?php



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

function odd($n){
    if ($n % 2 != 0)
        return true;
    else 
        return false;
}
if(odd($N))
    print('Weird');
else{
    if($N >= 2 && $N <= 5)
        print('Not Weird');
    if($N >= 6 && $N <= 20)
        print('Weird');
    if($N > 20)
        print('Not Weird');
}
fclose($stdin);
?>
