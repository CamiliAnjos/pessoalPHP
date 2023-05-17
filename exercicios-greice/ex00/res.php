<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res.css">
    <title>Exercício 01</title>
</head>

<body>

    <button onclick="javascript:window.location.href='index.html'">&#8592; Voltar</button>
</body>
<?php 
    $calcMes = $_GET["mes"];
    $mesInt = intval($calcMes);

    switch ($mesInt) {
        case 1:
            echo "<p>Janeiro branco – saúde mental
            A primeira das cores é a branca. O “Janeiro Branco” tem como importância chamar a atenção para a saúde mental. A intenção é conscientizar as pessoas de que depressão, ansiedade, cansaço mental, burnout e entre outras enfermidades são assuntos sérios e que precisam de atenção e acompanhamento de especialista.</p>";
            break;
        case 2:
            echo "Fevereiro Roxo – alzheimer
            O “Fevereiro Roxo” chama a atenção para os casos de Alzheimer. Uma doença que mexe com a fala, mas principalmente com a memória. É estimado que, no Brasil, mais de um milhão de pessoas têm Alzheimer.";
            break;
        case 3:
            echo "Março Lilás – câncer do colo do útero
            Lilás é mais uma das cores que aparece durante o ano e, dessa vez, ela vem para falar da conscientização sobre a prevenção do câncer do colo do útero, que é hoje, no Brasil, a quarta maior causa de morte de mulheres por câncer.";
            break;
        case 4:
            echo "Abril Azul – autismo
            Azul aparece duas vezes durante o ano e a primeira delas é em abril, no mês da conscientização do autismo -escolhido pela Organização das Nações Unidas (ONU) como uma forma de chamar atenção das pessoas sobre esse assunto e também sobre o Transtorno do Espectro Autista (TEA).";
            break;
        case 5: 
            echo "Maio Amarelo – acidentes de trânsito
            Uma das cores mais chamativas da paleta é o amarelo, e ele aparece em maio para chamar atenção das pessoas sobre um assunto muito importante: o alto índice de mortes e feridos no trânsito em todo o mundo. A intenção do mês é fazer com que as pessoas tenham mais consciência ao dirigir para fazer do trânsito um local mais seguro para todos.";
            break;
        case 6:
            echo "Junho Vermelho – incentivo à doação de sangue
            Doar sangue é muito importante, pois salva vidas. Por conta disso, o mês de junho é vermelho para lembrar as pessoas de que a doação ajuda a todos e pode fazer a diferenças na vida de quem recebe – ainda mais no inverno, uma época em que os bancos de sangue tem uma redução no estoque.";
            break;
        case 7:
            echo "Julho Amarelo – hepatites virais
            O amarelo aparece de novo entre as cores, mas dessa vez para tratar de um assunto relacionado a saúde: as hepatites virais. Elas têm um impacto muito grande na vida da população brasileira e conscientizar o público é de extrema importância. Só no Brasil, a hepatite B e C já se encontram em quase dois milhões de pessoas.";
            break;
        case 8:
            echo "Agosto Lilás – mês de proteção à mulher
            O objetivo do agosto lilás é promover e chamar atenção para um problema sério: a violência contra a mulher. Por conta disso, aprovado pelo Senado, esse mês é conhecido por todo o Brasil como o período de conscientização pelo fim da violência contra a mulher.";
            break;
        case 9:
            echo "Setembro Amarelo – combate ao suicídio
            Uma das cores mais importantes do ano e que tem mais destaque é o “Setembro Amarelo“. Esses mês apresenta consigo muita história, reconhecimento e cuidado para os temas de saúde mental.";
            break;
        case 10:
            echo "Outubro Rosa – câncer de mama
            O “Outubro Rosa” é uma campanha conhecida mundialmente, de prevenção e diagnóstico precoce do câncer de mama. Desde os anos 90, as ações preventivas sobre este tema tem levado mais informações sobre a importância dos cuidados com o corpo da mulher.";
            break;
        case 11:
            echo "Novembro Azul – câncer de próstata
            Se um mês tem a cor focada nas mulheres, outro tem nos homens – é o caso do “Novembro Azul”. Esse período tem como objetivo levar os homens a se preocuparem mais consigo mesmo e ir até um médico para checar se está tudo bem com seu corpo, principalmente a próstata. É uma das cores mais importantes do ano.";
             break;   
        case 12:
            echo "Dezembro Laranja – câncer de pele
            O laranja do sol pode danificar sua pele e causar câncer, por conta disso, dezembro, que é um mês em que as pessoas costumam ir à praia, tomar banho de sol, é chamado de “Dezembro Laranja”. O mês tem como foco conscientizar as pessoas sobre o câncer de pele.";
            break;
        default:
            echo "<p>Não existe mes com este número...tente novamente</p>";
            break;
    }

    ?>
<!-- 1) Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número. -->

</html>