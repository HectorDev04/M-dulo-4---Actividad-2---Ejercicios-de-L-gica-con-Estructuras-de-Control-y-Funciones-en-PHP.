<?php
function esPrimo($numero) {
    if ($numero < 2) return false;

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

echo esPrimo(17) ? 'Es primo' : 'No es primo'; 
?>