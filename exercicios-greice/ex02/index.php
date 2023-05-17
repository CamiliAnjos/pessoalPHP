<?php 

    function isPrimo($numero) {
        if($numero <= 1) {
            return false;
        }
    
    for($i = 2; $i <= sqrt($numero); $i++) {
        if($numero % $i == 0) {
            return false; 
        }
    }

    return true;
}

$numero = 17;

if(isPrimo($numero)) {
    echo "$numero é um número primo.";
} else {
    echo "$numero não é um número primo.";
}
?>

<!-- crie para mim uma função em php que verifique se o numero é primo -->