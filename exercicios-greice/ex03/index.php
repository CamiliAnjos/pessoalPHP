<?php 
    function ContaPrimos($inicio, $fim) {
        $contagem = 0;
    
        for ($numero = $inicio; $numero <= $fim; $numero++) {
            if (isPrimo($numero)) {
                $contagem++;
            }
        }
    
        return $contagem;
    }
    
    function isPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
    
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
    
        return true;
    }
    
    // Exemplo de uso da função
    $inicio = 3;
    $fim = 50;
    
    $quantidadePrimos = ContaPrimos($inicio, $fim);
    echo "O número de números primos entre $inicio e $fim é: " . $quantidadePrimos;
    
?>