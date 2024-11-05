<?php
function esPalindromo($texto) {
    $texto = strtolower(str_replace(' ', '', $texto));
    
    return $texto === strrev($texto);
}

echo esPalindromo("anita lava la tina") ? 'Es palíndromo' : 'No es palíndromo'; 
?>
