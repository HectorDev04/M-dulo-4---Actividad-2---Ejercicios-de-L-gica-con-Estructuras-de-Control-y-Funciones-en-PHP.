<?php

function generarFibonacci($n){
$fibonacci = [];

if ($n >= 1);
if ($n >= 2);

for ($i = 2; $i < $n; $i++){
    $fibonacci[]=$fibonacci[$i - 1] + $fibonacci[$i - 2];
}

return $fibonacci;
}

print_r(generarFibonacci(10)); 

?>