<?php
$questao1 = $_POST['quest1'];
$questao2 = $_POST['quest2'];
$questao3 = $_POST['quest3'];
$questao4 = $_POST['quest4'];
$questao5 = $_POST['quest5'];
$questao6 = $_POST['quest6'];
$questao7 = $_POST['quest7'];
$questao8 = $_POST['quest8'];
$questao9 = $_POST['quest9'];
$questao10 = $_POST['quest10'];
$questao11 = $_POST['quest11'];
$questao12 = $_POST['quest12'];
$questao13 = $_POST['quest13'];
$questao14 = $_POST['quest14'];
$questao15 = $_POST['quest15'];
$questao16 = $_POST['quest16'];
$questao17 = $_POST['quest17'];
$questao18 = $_POST['quest18'];
$questao19 = $_POST['quest19'];
$questao20 = $_POST['quest20'];
$questao21 = $_POST['quest21'];
$questao22 = $_POST['quest22'];
$questao23 = $_POST['quest23'];
$questao24 = $_POST['quest24'];
$questao25 = $_POST['quest25'];
$questao26 = $_POST['quest26'];
$questao27 = $_POST['quest27'];
$questao28 = $_POST['quest28'];
$questao29 = $_POST['quest29'];
$questao30 = $_POST['quest30'];
$questao31 = $_POST['quest31'];
$questao32 = $_POST['quest32'];
$questao33 = $_POST['quest33'];
$questao34 = $_POST['quest34'];
$questao35 = $_POST['quest35'];
$questao36 = $_POST['quest36'];
$questao37 = $_POST['quest37'];
$questao38 = $_POST['quest38'];
$questao39 = $_POST['quest39'];
$questao40 = $_POST['quest40'];
$questao41 = $_POST['quest41'];
$questao42 = $_POST['quest42'];
$questao43 = $_POST['quest43'];
$questao44 = $_POST['quest44'];
$questao45 = $_POST['quest45'];
$questao46 = $_POST['quest46'];
$questao47 = $_POST['quest47'];
$questao48 = $_POST['quest48'];
$questao49 = $_POST['quest49'];
$questao50 = $_POST['quest50'];

$resp1 = "a";
$resp2 = "b";
$resp3 = "c";
$resp4 = "d";
$resp5 = "e";
?>

<html lang="pt-br"></html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exatas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/biosemlogin.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    </head>
    <body>
        <header style="height: 100px;">
            <a class="logo" ><img src="https://cdn.discordapp.com/attachments/802254748782690314/811000616654471238/logo_nova.png" style="width: 250px;margin-right: 80px;"></a>
            <a class="cta" href="escolha.php">Voltar</a>
            <a class="abc" href="login.php">Login</a>
            <nav>
            </nav>
        </header>
        <br>
        <img src="https://media.discordapp.net/attachments/816888490955636747/816889059069657149/png-transparent-mathematics-computer-icons-square-root-formula-mathematical-notation-formula-angle-t.png" style="width: 3%; position: absolute; margin-left: 48%;">
        <h2 class="title title-second" style=" margin-bottom: 2%;">EXATAS</h2>
        <form class="form" method="POST"  style="font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    margin-left: 10%;
    margin-right: 10%;">

        <article>
        <P>
        <h2 class="title title-second" style=" margin-bottom: 2%; margin-left: 45.5%">FÍSICA</h2>

        <label> 1) Podemos defirnir vetor como sendo um:
</label><br>
<?php 
        if ($questao1 == $resp3):
            print "<br>Resposta correta! (Segmento de reta com três características básicas.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Por definição simples, um vetor é um segmento de reta com três características básicas: módulo(tamanho ou norma), direção e sentido.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>
        <label> 2) (ENEM - 2018) Um vetor possui características básicas, que são:
</label><br>

<?php 
        if ($questao2 == $resp1):
            print "<br>Resposta correta! (Módulo, direção e sentido.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: As três principais características de um vetor são: módulo (tamanho ou norma), direção e sentido.";

        endif;
            ?>
        <br>
        </p>
        <br/>
        <hr>
        <br>
        

        <P>

        <label> 3) A direção de um vetor pode ser:
</label><br>
<?php 
        if ($questao3 == $resp2):
            print "<br>Resposta correta! (Em dois sentidos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A direção pode ter dois sentidos opostos. Por exemplo, na direção vertical podemos conceber dois sentidos: de baixo para cima ou de cima para baixo. Na direção horizontal, o sentido pode ser da direita para a esquerda ou vice-versa.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 4) Duas retas paralelas entre si certamente têm:
        </label><br>

        <?php 
        if ($questao4 == $resp2):
            print "<br>Resposta correta! (A mesma direção.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Duas retas paralelas entre si, na Geometria Euclidiana, nunca se encontram, ou seja, não há nenhum um ponto em comum entre elas e não há razão para falar em sentido sobre uma reta sem ela estar orientada. Portanto, duas retas paralelas entre si tão somente possuem em comum suas direções.";

        endif;
            ?>     
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) Quais são as duas regras principais para somar vetores?

        </label><br>
        <?php 
        if ($questao5 == $resp3):
            print "<br>Resposta correta! (Paralelogramo e Polígono.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A regra do polígono diz que em toda figura fechada a soma do vetor R=0. Na verdade, somar vetores é “andar” vetores, em que no caso de uma figura fechada sai e volta-se ao mesmo ponto e logo o deslocamento foi nulo.";

        endif;
            ?>  
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 6) Quanta energia deve ser dada a uma panela de ferro de 300 g para que sua temperatura seja elevada em 100 ºC? 
        Considere o calor específico da panela como c = 450 J/ kg ºC.
       
        </label><br>
        <?php 
        if ($questao6 == $resp3):
            print "<br>Resposta correta! (13500 J.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação:
        <br> m= 300 g
        <br> T=100°C
        <br> c= 450 J/kg °C
        <br> Q= ?
        <br><br>Como o calor sensível está em J/kg °C, a massa deve estar em kg. Então, basta converter: 300 g = 0,3 kg.
        <br>Como o enunciado fala variação de temperatura, então ele quer o calor sensível. A fórmula é: Q= m. c. ΔT
        <br><br>Q= 0,3 x 450 x 100
        <br>Q= 13500 J";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 7) Quanto calor precisa ser dado a uma placa de vidro de 0,3 kg para aumentar sua temperatura em 80 °C? 
        (Considere o calor específico do vidro como 70 J/kg °C)

        </label><br>
        <?php 
        if ($questao7 == $resp1):
            print "<br>Resposta correta! (1680 J.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Você  pode resolver desta forma<br><br>
        <br>Q= m* c* t
        <br>Q= 0,3* 80* 70= 1680 J";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 8) Depois de assar um bolo em um forno a gás, Zulmira observa que ela queima a mão ao tocar no tabuleiro, mas não a queima ao tocar no bolo. 
        Considerando-se essa situação, é CORRETO afirmar que isso ocorre porque:

        </label><br>
        <?php 
        if ($questao8 == $resp2):
            print "<br>Resposta correta! (A transferência de calor entre o tabuleiro e a mão é mais rápida que entre o bolo e a mão.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Porque essa transferência de calor é nada mais que uma propagação de energia que ocorre de um corpo mais quente para um mais frio. Se ela queima a mão ao tocar no tabuleiro é porque ali há um maior acumulo de energia do que o bolo.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <p>
        <label> 9) Uma quantidade de água líquida de massa m = 200 g, a uma temperatura de 30 °C, 
        é colocada em uma calorímetro junto a 150 g de gelo a 0 °C. Após atingir o equilíbrio, dado que o calor específico da água é = 1,0 cal/(g .°C) e o calor latente de fusão do gelo é L = 80 cal/g. Qual a temperatura final da mistura gelo + água?

        </label><br>
        <?php 
        if ($questao9 == $resp2):
            print "<br>Resposta correta! (0 °C)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: É necessário descobrir o “Q” do gelo e da água para saber quem vai dar/receber energia e se haverá diferenças ou não. Fazendo a resolução abaixo (wilson junior), vê-se que, o “Q” do gelo é maior do que o da água, logo, a quantidade de água presente na mistura não será capaz de derretê-lo por completo. Como “sobrará” gelo, a água cederá o calor dela para entrar em equilíbrio chegando a 0 c°";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 10) Qual a quantidade de calor sensível necessária para aquecer uma barra de ferro de 2kg de 20°C para 200°C?
        <br>
        Dado: calor específico do ferro = 0,119cal/g°C.
        </label><br>
        <?php 
        if ($questao10 == $resp1):
            print "<br>Resposta correta! (42,84kcal)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: <br> Primeiro converter a massa 2kg=2000g
        <br> Qsensível=m.c.∆t
        <br> ∆t=∆t final - ∆t inicial
        <br>Qs= 2000. 0,119. (200-20)
        <br> Qs= 2000. 0,119. 180
        <br> Qs= 42840 cal = 42,84 Kcal
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 11) Alguns gráficos cinemáticos avaliam a relação de algumas grandezas físicas como posição (s), velocidade (v) e aceleração (a) ao longo do tempo. Sabendo disso, 
        qual gráfico cuja área é numericamente igual ao deslocamento é:
        <?php 
        if ($questao11 == $resp2):
            print "<br>Resposta correta! (v x t.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print " Explicação:
        <br>Como a área do Gráfico na verdade é a multiplicação de seus eixos. O gráfico de Vxt na verdade =ΔS
        <br>V = ΔS / Δt --> ΔS = V . Δt = V . ( tf - t0 ) = V. (tf - 0) = V.t";

        endif;
            ?>
        <br> 
        <br>
        </p>
        <hr>
        <br>
        <p>

        <label> 12) Se um móvel se desloca seguindo a equação s = (-35)+(7t), 
        ele irá passar pela origem no instante:
        </label><br>
        <?php 
        if ($questao12 == $resp2):
            print "<br>Resposta correta! (5 segundos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: <br> S = So + v.t
        <br>0 = -35 +7t
        <br>35 = 7t
        <br>t = 35/7
        <br>t = 5 ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 13) Em um gráfico S x t, 
        quando a curva cruza o eixo horizontal, diz-se que o corpo está passando:
        </label><br>

        <?php 
        if ($questao13 == $resp1):
            print "<br>Resposta correta! (Pela origem.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Pra visualizar melhor que a resposta é pela Origem. Quando a reta passar pelo eixo X do tempo, se pergunte qual a altura do eixo Y (S). Nesse caso é zero, ou seja, origem. óbvio porém didático.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 14) Um móvel percorre metade de uma circunferência de raio R=5m. Determine o módulo de seu 
        deslocamento vetorial e o valor de seu deslocamento escalar.
        </label><br>

        <?php 
        if ($questao14 == $resp1):
            print "<br>Resposta correta! (5πm e 10m.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: 2 pi * Raio é o comprimento do circulo, a partir dessa formula se substitui o raio por 5 e chega em 10 m, como o corpo so se deslocou metade logo ele percorreu 5 pi metros como ele chegou até metade do circulo ele foi de um lado a outro, o que seria o diâmetro = 10 metros.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 15) O gráfico de uma função horária da velocidade de um móvel 
        no movimento uniformemente variado descreve seu comportamento em que:
        </label><br>
        <?php 
        if ($questao15 == $resp2):
            print "<br>Resposta correta! (É representada por uma reta crescente ou descrente.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Como a equação horária da velocidade é uma equação do 1o grau, o gráfico V x t será SEMPRE uma reta (crescente indicando aceleração positiva e decrescente indicando aceleração negativa).
        ";

        endif;
            ?>

        <br>

        <img src="https://media.discordapp.net/attachments/816888490955636747/816889059069657149/png-transparent-mathematics-computer-icons-square-root-formula-mathematical-notation-formula-angle-t.png" style="width: 3%; position: absolute; margin-left: 44%; margin-top: 1.5%">
        <h2 class="title title-second" style=" margin-bottom: 2%;">QUÍMICA</h2>

        <label> 1) As propriedades de um material utilizadas para distinguir-se um material do outro são divididas em Organolépticas, Físicas e Químicas. Associe a primeira coluna com a segunda coluna e assinale a alternativa que apresenta a ordem correta das respostas.
        <br>
        <br>PRIMEIRA COLUNA <br>
        ( A ) Propriedade Organoléptica <br>
        ( B ) Propriedade Física <br>
        ( C ) Propriedade Química <br><br>
        SEGUNDA COLUNA <br>
        ( ) Sabor <br>
        ( ) Ponto de Fusão <br>
        ( ) Combustibilidade <br>
        ( ) Reatividade <br>
        ( ) Densidade <br>
        ( ) Odor <br>
        ( ) Estados da Matéria <br>

        </label><br>

        <?php 
        if ($questao16 == $resp1):
            print "<br>Resposta correta! (A, B, C, C, B, A, B.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: <br> Propriedades físicas:
        <br><br>• Ponto de fusão: temperatura de equilíbrio entre a fase sólida e líquida de uma substância a uma
        determinada pressão; • Ponto de ebulição: temperatura de equilíbrio entre a fase líquida e gasosa de
        uma substância a uma determinada pressão;
        <br>• Densidade (ou massa específica): massa de uma unidade de volume de uma substância;
        <br>• Solubilidade: quantidade máxima de uma substância que se consegue dissolver sem formar corpo de
        fundo. É dependente do solvente utilizado;
        <br>• Dureza: resistência de um sólido a ter sua superfície riscada;
        <br>• Tenacidade: resistência à fratura (sentido usualmente atribuído à dureza no cotidiano);
        <br>• Condutividade elétrica: capacidade de conduzir corrente, dada uma diferença de potencial.
        <br><br>Propriedades químicas (relacionadas a fenômenos em que a matéria se transforma):
            <br><br>• Combustibilidade: capacidade de sofrer combustão (rápida reação com gás oxigênio produzindo calor e
        luz);
        <br>• Explosividade: capacidade de reagir rápida e violentamente;
        <br>• Corrosividade: capacidade de deteriorar outros materiais;
        <br>• Efervescência: liberação de gás após dissolução em um líquido;
        <br>• Potencial de redução: tendência a receber elétrons em um processo eletroquímico.
        <br><br>Propriedades organolépticas (propriedades que afetam experiências sensoriais):
        <br><br>• Cor;
        <br>• Brilho;
        <br>• Odor;
        <br>• Sabor;
        <br>• Textura.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 2) Qual é a alternativa em que só aparecem misturas?
        </label><br>
        <?php 
        if ($questao17 == $resp5):
            print "<br>Resposta correta! (Ar, granito, vinagre, água sanitária.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "<br> Ar - Nitrogênio, Oxigênio, Dióxido de carbono, gases nobres etc
        <br> Granito - Quartzo, um mineral incolor; o Feldspato (ortóclase, sanidina e microclina), responsável pela
        variedade de cores, dentre elas: avermelhada, rosada e creme-acinzentada; e a Mica (biotite e
        moscovite).
        <br
        >Vinagre - solução aquosa de ácido acético
        água sanitária - solução aquosa de hipoclorito de sódio (NaClO)
         ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 3) Observe os sistemas abaixo, onde as esferas representam átomos.
        <br>
        <img src="https://i.imgur.com/IL4JsF4.png">
        <br>
        Substância composta gasosa e substância simples sólida estão, 
        respectivamente, representadas nos sistemas:
        </label><br>

        <?php 
        if ($questao18 == $resp5):
            print "<br>Resposta correta! (V e III.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "<br> Explicação: Se é gasosa e composta, as moléculas tem que ficar afastadas e de diferentes substancias compostas.
        <br> Substância simples e solida, ou seja, se é simples vai ter só o mesmo átomo compondo ele e se é solido as moléculas tendem a ficar bem proximas.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 4) I e II são dois líquidos incolores e transparentes. Os dois foram aquecidos, 
        separadamente, e mantidos em ebulição. Os valores das temperaturas (T) dos líquidos em função do tempo (t) de aquecimento são mostrados na figura a seguir
        <br>
        <img src="data:image/png;base64,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"> <br>
        <br>
        Com base nessas informações, pode-se afirmar que:
        </label><br>
        <?php 
        if ($questao19 == $resp1):
            print "<br>Resposta correta! (I é um líquido puro e II é uma solução.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Analisando o gráfico, apenas o líquido I apresenta patamar na ebulição, portanto, ele pode ser uma substância pura ou um azeótropo.
        <br>No líquido II, não apresenta temperatura de ebulição constante, portanto, ele é uma mistura.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) Durante o ciclo hidrológico ocorrem diversas mudanças de estado físico da água. 
        Um exemplo de mudança de estado denominada sublimação ocorre quando:
        </label><br>
        <?php 
        if ($questao20 == $resp1):
            print "<br>Resposta correta! (Vapor de água em elevadas altitudes transforma-se em neve.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Principais processos de transferência da água na Terra: evaporação, precipitação e escoamento.
        <br>No processo de precipitação, em elevadas altitudes, o vapor de água transforma-se em neve que
        precipita na superfície do planeta.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 6) Analise as afirmações abaixo.
        <br>
        Ponto de fusão é a temperatura na qual ocorre a passagem do 
        estado sólido para o líquido, a determinada pressão. PORQUE
        O ponto de fusão não depende da quantidade de material e, sim, do tipo, 
        sendo uma grandeza extensiva.
        <br>
        A esse respeito, conclui-se que:
        </label><br>

        <?php 
        if ($questao21 == $resp3):
            print "<br>Resposta correta! (A primeira afirmação é verdadeira e a segunda é falsa.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Segunda é falsa pois é uma grandeza intensiva, que não depende da quantidade de matéria. Ex. Ebulição da água a 1-atm independentemente da quantidade é 100 C°";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 7) Alguns fenômenos observados no cotidiano estão relacionados 
        com as mudanças ocorridas no estado físico da matéria. Por exemplo, 
        no sistema constituído por água em um recipiente de barro, a água 
        mantém-se fresca mesmo em dias quentes.
        <br>
        A explicação para o fenômeno descrito é que, nas proximidades da 
        superfície do recipiente, a:
        </label><br>

        <?php 
        if ($questao22 == $resp3):
            print "<br>Resposta correta! (Evaporação do líquido retira energia do sistema.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Pensando num recipiente de barro com água. Nós teremos a água no estado líquido. Dessa forma, ao ser aquecida pelo dia quente. O que irá ocorrer é uma evaporação na superfície. Essa evaporação absorve calor, removendo calor do sistema. Fazendo com que a água no estado líquido permaneça numa temperatura mais baixa.";

        endif;
            ?>
        <br>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 8) O café solúvel é obtido a partir do café comum dissolvido em 
        água. A solução é congelada e, a seguir, diminui-se bruscamente a pressão. 
        Com isso, a água passa direta e rapidamente para o estado gasoso, sendo 
        eliminada do sistema por sucção. Com a remoção da água do sistema, por 
        esse meio, resta o café em pó e seco. Identifique as mudanças de estado 
        Físico ocorridas neste processo:
        </label><br>

        <?php 
        if ($questao36 == $resp4):
            print "<br>Resposta correta! (Solidificação e sublimação.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "<br> Quando a solução é congelada, passa do estado líquido para o sólido – solidificação.
        <br>Quando a água congelada passa direta e rapidamente para o gasoso – sublimação.<br>";
        endif;
            ?>
        <br>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 9) Podemos determinar o estado físico de uma substância, observando sua 
        temperatura de fusão e de ebulição. Observe o quadro abaixo:
        <br>
        <br>
        <img src="https://mundoeducacao.uol.com.br/upload/conteudo/pontos-de-fusao-e-ebulicao.jpg">
        <br>
        <br>
        Assinale e marque a alternativa CORRETA.
        </label><br>

        <?php 
        if ($questao24 == $resp5):
            print "<br>Resposta correta! ( A 25ºC o oxigênio é gasoso..)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A - 183ºC o oxigênio passa do estado líquido para o gasoso e acima desse valor se mantém nesse estado físico.<br>";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 10) Os processos envolvidos nas mudanças de estado físico da matéria, 
        conforme figura a seguir, envolvem transferência de calor.
        <br>
        <br>
        <img src="https://paperx-dex-assets.s3.sa-east-1.amazonaws.com/images/1548797160864-0i8Ob.png">
        <br>
        <br>
        Dentre esses processos, os que envolvem, respectivamente, absorção e liberação de calor são:
        </label><br>
        <?php 
        if ($questao25 == $resp2):
            print "<br>Resposta correta! (Sublimação e solidificação.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Como a questão pediu respectivamente, temos que ter primeiro um processo que absorve calor e depois um processo que libera calor.
        <br>Absorção de calor: sublimação.
        <br>Sólido + calor-> Gasoso
        <br>Liberação de calor: solidificação.
        <br>Líquido + Sólido-> calor <br>
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 11) Analise a tabela periódica e as afirmações a seguir.
        <br>
        <br>
        <img src="https://anglo.plurall.net/sites/default/files/imagens/compartilhadas/questoes/fuvest/2018/18187_620090_2248157_.png">
        <br>
        <br>
        I. Tem massa atômica maior do que a do selênio (Se).
        <br>
        II. Pode formar com o hidrogênio um composto molecular de fórmula H_22S.
        <br>
        III. A energia necessária para remover um elétron da camada mais externa do enxofre é maior do que para o sódio (Na).
        <br>
        IV. Pode formar com o sódio (Na) um composto iônico de fórmula Na_33S
        <br>
        São corretas apenas as afirmações:
        </label><br>
        <?php 
        if ($questao26 == $resp3):
            print "<br>Resposta correta! (II e III.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: <br>II-O S necessita de mais 2 (6+2=8) elétrons para se estabilizar,enquanto que cada átomo de H hidrogênio necessita de de mais 1 elétron para se estabilizar. (Compartilham os elétrons em uma ligação covalente) (CORRETA)
        <br>III-O enxofre é mais eletronegativo que o sódio. (CORRETA)
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 12) Recentemente, cientistas conseguiram produzir hidrogênio metálico, comprimindo hidrogênio molecular sob elevada pressão. As propriedades metálicas desse elemento são as mesmas dos demais elementos do grupo 1 da tabela de classificação periódica.
        <br>
        Essa semelhança está relacionada com o subnível mais energético desses elementos, que corresponde a:
        </label><br>
        <?php 
        if ($questao27 == $resp1):
            print "<br>Resposta correta! (ns^1ns1.)"; 

        else:  print "<br>Resposta errada.<br> ";
        print "";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>
8/
        <label> 13) Desde a descoberta de um tipo de radiação por Röentgen 
        em 1895, a aplicação da radiação é extremamente importante na sociedade 
        moderna, principalmente como fonte de geração de energia elétrica, pelas 
        usinas nucleares, e como método de diagnóstico e tratamento na medicina. 
        Entretanto, as desvantagens da sua utilização são os acidentes nucleares, 
        os riscos de contaminação e o lixo radioativo.
        <br>
        De fato, no ano de 1986, em Chernobyl, ocorreu a explosão de uma 
        usina, liberando cerca de 400 vezes mais contaminação que a bomba 
        atômica de Hiroshima e matando mais de 4 mil pessoas. Chernobyl 
        trabalhava com o átomo de Césio. Um ano depois, em Goiânia, houve 
        um acidente com contaminação com Césio 137, o maior acidente nuclear 
        do Brasil e o primeiro no mundo fora de uma usina nuclear.
        É correto afirmar que o elemento radioativo Césio, na tabela periódica, 
        é classificado como:
        </label><br>

        <?php 
        if ($questao28 == $resp1):
            print "<br>Resposta correta! (Metal alcalino.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        print "Explicação: O número 137 em frente ao Césio pode confundir. Mas lembre-se que os números da tabela periódica só irão até 118.
        Para saber em que parte da tabela o Césio estar, ou qualquer outro elemento estar, teremos que fazer vários exercícios com a tabela em mão até estar fixado na mente.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 14) A tabela periódica é uma ferramenta muito útil para os 
        químicos, embora ela tenha sido pensada a mais de um século atrás. 
        Sobre a organização sistemática dos elementos, é verdadeiro afirmar-se 
        que:
        </label><br>

        <?php 
        if ($questao29 == $resp4):
            print "<br>Resposta correta! (A tabela periódica atual ordena os elementos em ordem crescente de número atômico.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A chave para acertar essa questão é o enunciado, que pergunta a organização sistemática da tabela atual. A tabela periódica atual é organizada em ordem crescente dos números atômicos, colocando em períodos, elementos com a mesma camada eletrônica; e nos mesmos grupos, elementos com características semelhantes. Observe que é exatamente por isso que os metais de transição interna estão “fora da tabela”, pois ia desorganizar a ideia de grupos com “características semelhantes.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 15) Atualmente, a Tabela Periódica apresenta 118 elementos distribuídos ordenadamente em 18 grupos ou famílias (linhas verticais) e em 7 períodos (linhas horizontais). 
        Os elementos pertencentes ao grupo 15 apresentam
        </label><br>

        <?php 
        if ($questao30 == $resp3):
            print "Resposta correta! (Cinco elétrons de valências.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação:
        <br>Grupo dos representativos-> Grupo A.
        <br>Grupo 1- > 1s¹
        <br>Grupo 2-> 2s²
        <br>Grupo 3(13)-> 2s² 2p¹
        <br>Grupo 4(14)-> 2s² 2p²
        <br>Grupo 5 (15)-> 2s² 2p³ <- Soma de elétrons igual a 5.
        ";

        endif;
            ?>
        <br>
        </p>
        
        <br>
        <img src="https://media.discordapp.net/attachments/816888490955636747/816889059069657149/png-transparent-mathematics-computer-icons-square-root-formula-mathematical-notation-formula-angle-t.png" style="width: 3%; position: absolute; margin-left: 45%; margin-top: 1.5%">
        <h2 class="title title-second" style=" margin-left: 42%; margin-bottom: 2%;">MATEMÁTICA</h2>

        <P>

        <label> 1) Em um certo teatro, as poltronas são divididas em 
        setores. A figura apresenta a vista do setor 3 desse 
        teatro, no qual as cadeiras escuras estão reservadas e as claras 
        não foram vendidas.
        <br>
        <br>
        <img src="https://pt-static.z-dn.net/files/dbc/f88b89ae13e20cef231ab709caa91110.png">
        <br>
        <br>
        A razão que representa a quantidade de cadeiras reservadas do 
        setor 3 em relação ao total de cadeiras desse mesmo setor é:
        </label><br>
        <?php 
        if ($questao31 == $resp1):
            print "<br>Resposta correta! ( 17/70.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A razão é dada pela parte de um todo. A parte são as 17 poltronas e o todo são as 70 poltronas. Logo a razão será 17/70.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>
        
        <label> 2) Para se construir um contrapiso, é comum, na constituição do 
        concreto, se utilizar cimento, areia e brita, na seguinte proporção: 
        1 parte de cimento, 4 partes de areia e 2 partes de brita. Para construir o
        contrapiso de uma garagem, uma construtora encomendou um caminhão 
        betoneira com 14m³ de concreto.
        <br>
        Qual é o volume de cimento, em m 3 , na carga de concreto trazido 
        pela betoneira?
        </label><br>
        <?php 
        if ($questao32 == $resp2):
            print "<br>Resposta correta! (2,00.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Temos que dividir os 14 m³ de concreto em 7 partes, já que temos 1 parte de cimento, 4 partes de areia e
        <br>2 partes de brita. Assim, 14/7 = 2. Ou seja, cada parte terá 2 m³. Como só temos 1 parte de cimento, o
        volume será de 2 m³.
        ";

        endif;
            ?>

        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 3) Em uma empresa de móveis, um cliente encomenda um 
        guarda-roupa nas dimensões 220 cm de altura, 120 cm de largura e 
        50 cm de profundidade. Alguns dias depois, o projetista, com o 
        desenho elaborado na escala 1 : 8, entra em contato com o cliente 
        para fazer sua apresentação. No momento da impressão, o profissional 
        percebe que o desenho não caberia na folha de papel que costumava usar. 
        Para resolver o problema, configurou a impressora para que a figura 
        fosse reduzida em 20%. A altura, a largura e a profundidade do 
        desenho impresso para a apresentação serão, respectivamente,

        </label><br>

        <?php 
        if ($questao33 == $resp1):
            print "<br>Resposta correta! (22,00 cm, 12,00 cm e 5,00 cm.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Cada dimensão está 8 vezes menor que a original, já que o desenho está em escala 1 : 8.
        <br>Além disso, cada dimensão também terá uma redução de 20%.
        <br>Então as novas dimensões são:
        <br>– 220.1/8.0,8 = 22 cm
        <br>– 120.1/8.0,8 = 12 cm
        <br>– 50.1/8.0,8 = 5 cm
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 4) Para uma atividade realizada no laboratório de Matemática, 
        um aluno precisa construir uma maquete da quadra de esportes da escola 
        que tem 28 m de comprimento por 12 m de largura. A maquete deverá ser 
        construída na escala de 1:250. Que medidas de comprimento e largura, 
        em cm, o aluno utilizará na construção da maquete?

        </label><br>

        <?php 
        if ($questao34 == $resp3):
            print "<br>Resposta correta! (11,2 e 4,8.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: <br>Comprimento:
        <br>1 cm da maquete ——– 250 cm da quadra
        <br>x cm da maquete ——– 2800 cm da quadra
        <br>x = 2800/250 = 11,2 cm
        <br>Largura:
        <br>1 cm da maquete ——– 250 cm da quadra
        <br>y cm da maquete ——– 1200 cm da quadra
        <br>x = 1200/250 = 4,8 cm
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) Sabe-se que a distância real, em linha reta, de uma cidade A, 
        localizada no estado de São Paulo, a uma cidade B, localizada no estado de 
        Alagoas, é igual a 2 000 km. Um estudante, ao analisar um mapa, verificou 
        com sua régua que a distância entre essas duas cidades, A e B, era 8 cm. 
        Os dados nos indicam que o mapa observado pelo estudante está na escala 
        de:
        </label><br>

        <?php 
        if ($questao35 == $resp5):
            print "<br>Resposta correta! (1 : 25000000.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: O mapa observado pelo estudante está na escala de:
        <br> 8 cm/2 000 km = 8 cm/ 200 000 000 cm = 1/ 25 000 000 = 1 : 25 000
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 6) Há um novo impulso para produzir combustível a partir de gordura 
        animal. Em abril, a High Plains Bioenergy inaugurou uma biorrefinaria próxima a 
        uma fábrica de processamento de carne suína em Guymon, Oklahoma. A 
        refinaria converte a gordura do porco, juntamente com o o óleo vegetal, em
        biodiesel. A expectativa da fábrica é transformar 14 milhões de quilogramas de banha em 112 milhões
        de litros de biodiesel. Revista Scientific American. Brasil, ago. 
        2009 (adaptado).
        <br>
        Considere que haja uma proporção direta entre a massa 
        de banha transformada e o volume de biodiesel produzido. Para produzir 
        48 milhões de litros de biodiesel, a massa de banha necessária, em
        quilogramas, será de, aproximadamente:
        </label><br>

        <?php 
        if ($questao36 == $resp1):
            print "<br>Resposta correta! (6 milhões.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Como a questão diz são grandezas diretamente proporcionais, basta perceber que se a quantidade de litros de Biodiesel vai diminuir, então a quantidade de banha também, a única opção onde a banha é menor que 14 milhões é a A.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 7) Segundo uma pesquisa realizada em uma determinada cidade, 
        numa população de 6.000 habitantes foi estimado que 1.920 pessoas são 
        aposentadas.
        <br>
        Qual é a porcentagem de aposentados nessa cidade?
        </label><br>
        <?php 
        if ($questao37 == $resp2):
            print "<br>Resposta correta! (32%.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Basta dividirmos o número de aposentados pelo número total da população:
        1920/6000 = 0,32 = 32%";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 8) No exame de seleção para o ano de 2017, uma faculdade ofereceu 504 vagas para seus cursos Integrados e, no exame de seleção para o ano de 2018, está oferecendo 630 vagas. Qual é o percentual de aumento do número de vagas para o ano de 2018?
        </label><br>

        <?php 
        if ($questao38 == $resp3):
            print "<br>Resposta correta! (25,0%.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Para calcular o percentual de aumento basta dividir o valor do ano de 2018 pelo ano de 2017:
        630/504 = 1,25 = 1 + 0,25 = 1 + 25%
        <br>Logo, teve um aumento de 25%
        ";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 9) Nos Jogos Internos de uma faculdade de 2017, 30% dos atletas eram do sexo feminino. Quantos atletas ao todo participaram dos Jogos Internos do referido ano sabendo que havia 147 atletas do sexo masculino?
        </label><br>

        <?php 
        if ($questao39 == $resp5):
            print "<br>Resposta correta! (166.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: <br>Ao notar que atletas são do sexo masculino implica que do total de participantes é do sexo masculino, visto que dos atletas eram do sexo feminino. Desta maneira, considere a seguinte proporção que representará o total de pessoas do sexo feminino:
        <br>147/70% = X/30%= 147/0,7 = X/0,3 = X = 44,1/0,7 = 63
        <br>Somando temos:
        <br>147 + 63 = 210
        ";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 10) Analise as informações abaixo:
        <br>
        I. O conjunto dos Números Naturais é subconjunto dos Números Inteiros.
        <br>
        II. O conjunto dos Números Naturais é subconjunto dos Números Racionais.
        <br>
        III. O conjunto dos Números Naturais é subconjunto dos Números Irracionais.
        </label><br>

        <?php 
        if ($questao40 == $resp1):
            print "<br>Resposta correta! (Apenas a afirmação I é verdadeira.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: <br> Verdadeira, pois os números inteiros são tanto os positivos quanto os negativos, o que inclui os naturais.
        <br>II- Verdadeira, pois assim como os naturais estão contidos nos inteiros os inteiros estão contidos nos racionais, logo os naturais também são subconjuntos dos racionais.
        ";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 11) Raios de luz solar estão atingindo a superfície de um lago formando um ângulo X com a sua superfície, conforme indica a figura.
        <br>
        Em determinadas condições, pode-se supor que a intensidade luminosa desses raios, na superfície do lago, seja dada aproximadamente por I(x) = k . sen(x) sendo k uma constante, e supondo-se que X está entre 0° e 90º.
        <br>
        <br>
        <img src="https://d2q576s0wzfxtl.cloudfront.net/2017/11/08151533/quest%C3%A3o-138-enem-2017.png">
        <br>
        <br>
        Quando x = 30º, a intensidade luminosa se reduz a qual percentual de seu valor máximo?
        </label><br>

        <?php 
        if ($questao41 == $resp2):
            print "<br>Resposta correta! (50%.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Considerando que a maior intensidade luminosa é alcançada por um ângulo de 90°, cujo seno vale 1, quando o ângulo for de 30° o seno será de 1/2, logo quando multiplicar por k, haverá uma redução em 50%.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>
      
        <label> 12) Um cientista, em seus estudos para modelar a pressão arterial de uma pessoa, utiliza uma função do tipo P(t) = A + Bcos(kt) em que A, B e K são constantes reais positivas e t representa a variável tempo, medida em segundo. Considere que um batimento cardíaco representa o intervalo de tempo entre duas sucessivas pressões máximas.
        <br>
        Ao analisar um caso específico, o cientista obteve os dados:
        <br>
        <br>
        <img src="https://anglo.plurall.net/sites/default/files/imagens/compartilhadas/questoes/enem/2017/26c_325469_2216925_.png">
        <br>
        <br>
        A função P(t) obtida, por este cientista, ao analisar o caso específico foi:
        </label><br>

        <?php 
        if ($questao42 == $resp1):
            print "<br>Resposta correta! (P(t)= 99 + 21 cos(3πt).)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

     
        <label> 13) Um satélite de telecomunicações, t minutos após ter atingido sua órbita, está a r quilômetros de distância do centro da Terra. Quando r assume seus valores máximo e mínimo, diz-se que o satélite atingiu o apo¬geu e o perigeu, respectivamente. 
        Suponha que, para esse satélite, o valor de r em função de t seja dado por:
        <br>
        <br>
        <img src="https://d2q576s0wzfxtl.cloudfront.net/2017/08/08150554/Q152-ENEM2010.png">
        <br>
        <br>
        Uma cientista monitora o movimento desse satélite para controlar o seu afastamento do centro da Terra. Para isso, ele precisa calcular a soma dos valores de r, no apogeu e no perigeu, representada por S. O cientista deveria concluir que, periodicamente, S atinge o valor de:
        </label><br>
    
        <?php 
        if ($questao43 == $resp2):
            print "<br>Resposta correta! ( 12000km..)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>


        <label> 14) Em muitas cidades, os poluentes emitidos em excesso pelos veículos causam graves problemas a toda a população. Durante o inverno, a poluição demora mais para se dissipar na atmosfera, favorecendo o surgimento de doenças respiratórias. Suponha que a função
        <br>
        <br>
        <img src="https://paperx-dex-assets.s3.sa-east-1.amazonaws.com/images/1557266742514-GBnBZ.png">
        <br>
        <br>
        represente o número de pessoas com doenças respiratórias registrado num Centro de Saúde, com x = 1 correspondendo ao mês de janeiro, x = 2, o mês de fevereiro e assim por diante. A soma do número de pessoas com doenças respiratórias registrado nos meses de janeiro, março, maio e julho é igual a:
        </label><br>

        <?php 
        if ($questao44 == $resp2):
            print "<br>Resposta correta! (720.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 15) O esboço do gráfico da função f(x) = a + b cos (x) é mostrado na figura se¬guinte.
        <br>
        <br>
        <img src="https://static.stoodi.com.br/images/exercises/b1975b16cffd4fd18e9e7b11001abd03/7a07e7cbb7aa93bb30754a042eee2a96f15ba5b0465cb7e99b86c373e158571b.png?versionId=b7JivHAWvJAL5n8ZopMZBE__UUDAX7.B">
        <br>
        <br>
        Nessa situação, o valor de a · b é:
        </label><br>

        <?php 
        if ($questao45 == $resp5):
            print "<br>Resposta correta! (6.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: encontra o meio da onda, bem onde o 𝝅/2 tá (caso seja função cosseno, se for na função seno vai ser onde está o 𝝅).
        <br>Esse meio é o valor do “a” que normalmente seria zero, mas ai está como 3.
        <br>Agora, pra encontrar o “b” você só precisa andar do meio da onda até o valor máximo e o valor mínimo.
        <br>O “b” vai ser a altura do meio da onda pra cima ou pra baixo, que ai no caso é 2.
        <br>16 A fórmula para calcular a soma dos ângulos internos de um polígono é:
        <br>S = (n – 2)·180
        <br>S = (5 – 2)·180
        <br>S = 3·180
        <br>S = 540
        <br>Dividindo a soma dos ângulos internos por 5, pois um pentágono possui cinco ângulos internos, encontraremos 108° como medida de cada ângulo interno.
        
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 16) Pentágonos regulares congruentes podem ser conectados, lado a lado, formando uma estrela de cinco pontas, conforme destacado na figura.
        <br>
        <br>
        <img src="https://pt-static.z-dn.net/files/dc2/bd3c95bd041a327c283ee256af79c95b.png">
        <br>
        <br>
        Nestas condições, o ângulo θ mede:
        </label><br>

        <?php 
        if ($questao46 == $resp4):
            print "<br> Resposta correta! (36°.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: O trajeto do robô será um polígono regular de lado 5m e ângulo externo 60°. Como 360° : 6 = 60°, concluímos que o polígono pedido possui 6 lados.";

        endif;
            ?>

        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 17) Um robô, caminhando em linha reta, parte de um ponto A em direção a um ponto B, que distam entre si cinco metros. Ao chegar ao ponto B, gira novamente 60° à esquerda e caminha mais cinco metros, repetindo o movimento e o giro até retornar ao ponto de origem. O percurso do robô formará um polígono regular de:
        </label><br>

        <?php 
        if ($questao47 == $resp5):
            print "<br> Resposta correta! (6 lados.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: <br> A soma dos ângulos internos de um polígono convexo pode ser calculada através da fórmula a seguir, onde n é o número de lados do polígono. Ou seja:
 
        <br>Assim, sabendo que a soma dos ângulos internos é 540° , pode-se escrever:
        <br> 540 = 2x + 30 + 4x – 40 + 2x + 50 + 2x + 5x/2
        <br> 540 = 10x + 5x/2 + 40
        <br> 500=25x/2 
        <br> x = 40x = 40°
        ";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 18) O valor de x no pentágono abaixo é igual a:
        <br>
        <br>
        <img src="https://paperx-dex-assets.s3.sa-east-1.amazonaws.com/images/1549464507196-A1nup.png">
        <br>
        </label><br>

        <?php 
        if ($questao48 == $resp2):
            print "<br>Resposta correta! ( 40°.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação:
        <br> A soma dos ângulos internos de um polígono convexo pode ser calculada através da fórmula a seguir, onde n é o número de lados do polígono. Ou seja:
 
        <br> Assim, sabendo que a soma dos ângulos internos é 540° , pode-se escrever:
        <br> 540 = 2x + 30 + 4x – 40 + 2x + 50 + 2x + 5x/2
        <br>540 = 10x + 5x/2 + 40
        <br> 500=25x/2 
        <br>x = 40x = 40°
";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 19) Uma pessoa pegou um mapa rasgado em que constava um terreno delimitado por quatro ruas. Na parte visível do mapa, vê-se que o angulo formado pela rua Saturno e pela rua Júpiter e 90°; o ângulo formado pela rua Júpiter e pela rua Netuno e 110° e o ângulo formado pela rua Netuno e pela rua Marte e 100°. Nessas condições, a medida de um ângulo formado pelas ruas Marte e Saturno, na parte rasgada do mapa, é de:
        <br>
        <br>
        <img src="data:image/png;base64,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">
        <br>
        </label><br>

        <?php 
        if ($questao49 == $resp2):
            print "<br>Resposta correta! ( 60°.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: <br>Sabemos que a soma dos ângulos internos de um quadrilátero qualquer é 360 graus. Assim:
        <br> 90 + 110 + 100 + x = 360.
        <br> x = 60 graus.
        ";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 20) Na construção civil, é muito comum a utilização de ladrilhos ou azulejos com a forma de polígonos para o revestimento de pisos ou paredes. Entretanto, não são todas as combinações de polígonos que se prestam a pavimentar uma superfície plana, sem que haja falhas ou superposições de ladrilhos, como ilustram as figuras:
        <br>
        <br>
        <img src="http://3.bp.blogspot.com/-iN3X7x8uPo8/UZ1svB7gIII/AAAAAAAAAOw/ZBnfNJwDIgA/s1600/Imagem5.png" style="width: 45%;">
        <br>
        <br>
        A tabela traz uma relação de alguns polígonos regulares, com as respectivas medidas de seus ângulos internos.
        <br>
        <br>
        <img src="http://s3-sa-east-1.amazonaws.com/descomplica-blog/wp-content/uploads/2015/03/999999.png">
        <br>
        <br>
        Se um arquiteto deseja utilizar uma combinação de dois tipos diferentes de ladrilhos entre os polígonos da tabela, sendo um deles octogonal, o outro tipo escolhido deverá ter a forma de um:
        </label><br>

        <?php 
        if ($questao50 == $resp2):
            print "<br>Resposta correta! (Quadrado.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>

    
        </article>
        </form>