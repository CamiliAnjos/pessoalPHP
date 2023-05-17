<!-- forma mais profissional e limpa de executar o exercicio  -->
<?php 
    $mes = [
	"janeiro",
	"fevereiro",
	"março", 
	"abril", 
	"maio", 
	"junho",
	"julho",
	"agosto",
	"setembro",
	"outubro",
	"novembro",
	"dezembro",
    ];

    $numMes = 5;

    if($numMes >=1 && $numMes <= 12) {
    echo $mes[$numMes -1];
    } else {
	echo "mes invalido";
	}
?>