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
        <h2 class="title title-second" style=" margin-bottom: 2%; margin-left: 45.5%">F??SICA</h2>

        <label> 1) Podemos defirnir vetor como sendo um:
</label><br>
<?php 
        if ($questao1 == $resp3):
            print "<br>Resposta correta! (Segmento de reta com tr??s caracter??sticas b??sicas.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Por defini????o simples, um vetor ?? um segmento de reta com tr??s caracter??sticas b??sicas: m??dulo(tamanho ou norma), dire????o e sentido.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>
        <label> 2) (ENEM - 2018) Um vetor possui caracter??sticas b??sicas, que s??o:
</label><br>

<?php 
        if ($questao2 == $resp1):
            print "<br>Resposta correta! (M??dulo, dire????o e sentido.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: As tr??s principais caracter??sticas de um vetor s??o: m??dulo (tamanho ou norma), dire????o e sentido.";

        endif;
            ?>
        <br>
        </p>
        <br/>
        <hr>
        <br>
        

        <P>

        <label> 3) A dire????o de um vetor pode ser:
</label><br>
<?php 
        if ($questao3 == $resp2):
            print "<br>Resposta correta! (Em dois sentidos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A dire????o pode ter dois sentidos opostos. Por exemplo, na dire????o vertical podemos conceber dois sentidos: de baixo para cima ou de cima para baixo. Na dire????o horizontal, o sentido pode ser da direita para a esquerda ou vice-versa.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 4) Duas retas paralelas entre si certamente t??m:
        </label><br>

        <?php 
        if ($questao4 == $resp2):
            print "<br>Resposta correta! (A mesma dire????o.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Duas retas paralelas entre si, na Geometria Euclidiana, nunca se encontram, ou seja, n??o h?? nenhum um ponto em comum entre elas e n??o h?? raz??o para falar em sentido sobre uma reta sem ela estar orientada. Portanto, duas retas paralelas entre si t??o somente possuem em comum suas dire????es.";

        endif;
            ?>     
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) Quais s??o as duas regras principais para somar vetores?

        </label><br>
        <?php 
        if ($questao5 == $resp3):
            print "<br>Resposta correta! (Paralelogramo e Pol??gono.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A regra do pol??gono diz que em toda figura fechada a soma do vetor R=0. Na verdade, somar vetores ?? ???andar??? vetores, em que no caso de uma figura fechada sai e volta-se ao mesmo ponto e logo o deslocamento foi nulo.";

        endif;
            ?>  
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 6) Quanta energia deve ser dada a uma panela de ferro de 300 g para que sua temperatura seja elevada em 100 ??C? 
        Considere o calor espec??fico da panela como c = 450 J/ kg ??C.
       
        </label><br>
        <?php 
        if ($questao6 == $resp3):
            print "<br>Resposta correta! (13500 J.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o:
        <br> m= 300 g
        <br> T=100??C
        <br> c= 450 J/kg ??C
        <br> Q= ?
        <br><br>Como o calor sens??vel est?? em J/kg ??C, a massa deve estar em kg. Ent??o, basta converter: 300 g = 0,3 kg.
        <br>Como o enunciado fala varia????o de temperatura, ent??o ele quer o calor sens??vel. A f??rmula ??: Q= m. c. ??T
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

        <label> 7) Quanto calor precisa ser dado a uma placa de vidro de 0,3 kg para aumentar sua temperatura em 80 ??C? 
        (Considere o calor espec??fico do vidro como 70 J/kg ??C)

        </label><br>
        <?php 
        if ($questao7 == $resp1):
            print "<br>Resposta correta! (1680 J.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Voc??  pode resolver desta forma<br><br>
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

        <label> 8) Depois de assar um bolo em um forno a g??s, Zulmira observa que ela queima a m??o ao tocar no tabuleiro, mas n??o a queima ao tocar no bolo. 
        Considerando-se essa situa????o, ?? CORRETO afirmar que isso ocorre porque:

        </label><br>
        <?php 
        if ($questao8 == $resp2):
            print "<br>Resposta correta! (A transfer??ncia de calor entre o tabuleiro e a m??o ?? mais r??pida que entre o bolo e a m??o.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Porque essa transfer??ncia de calor ?? nada mais que uma propaga????o de energia que ocorre de um corpo mais quente para um mais frio. Se ela queima a m??o ao tocar no tabuleiro ?? porque ali h?? um maior acumulo de energia do que o bolo.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <p>
        <label> 9) Uma quantidade de ??gua l??quida de massa m = 200 g, a uma temperatura de 30 ??C, 
        ?? colocada em uma calor??metro junto a 150 g de gelo a 0 ??C. Ap??s atingir o equil??brio, dado que o calor espec??fico da ??gua ?? = 1,0 cal/(g .??C) e o calor latente de fus??o do gelo ?? L = 80 cal/g. Qual a temperatura final da mistura gelo + ??gua?

        </label><br>
        <?php 
        if ($questao9 == $resp2):
            print "<br>Resposta correta! (0 ??C)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: ?? necess??rio descobrir o ???Q??? do gelo e da ??gua para saber quem vai dar/receber energia e se haver?? diferen??as ou n??o. Fazendo a resolu????o abaixo (wilson junior), v??-se que, o ???Q??? do gelo ?? maior do que o da ??gua, logo, a quantidade de ??gua presente na mistura n??o ser?? capaz de derret??-lo por completo. Como ???sobrar????? gelo, a ??gua ceder?? o calor dela para entrar em equil??brio chegando a 0 c??";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 10) Qual a quantidade de calor sens??vel necess??ria para aquecer uma barra de ferro de 2kg de 20??C para 200??C?
        <br>
        Dado: calor espec??fico do ferro = 0,119cal/g??C.
        </label><br>
        <?php 
        if ($questao10 == $resp1):
            print "<br>Resposta correta! (42,84kcal)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: <br> Primeiro converter a massa 2kg=2000g
        <br> Qsens??vel=m.c.???t
        <br> ???t=???t final - ???t inicial
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

        <label> 11) Alguns gr??ficos cinem??ticos avaliam a rela????o de algumas grandezas f??sicas como posi????o (s), velocidade (v) e acelera????o (a) ao longo do tempo. Sabendo disso, 
        qual gr??fico cuja ??rea ?? numericamente igual ao deslocamento ??:
        <?php 
        if ($questao11 == $resp2):
            print "<br>Resposta correta! (v x t.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print " Explica????o:
        <br>Como a ??rea do Gr??fico na verdade ?? a multiplica????o de seus eixos. O gr??fico de Vxt na verdade =??S
        <br>V = ??S / ??t --> ??S = V . ??t = V . ( tf - t0 ) = V. (tf - 0) = V.t";

        endif;
            ?>
        <br> 
        <br>
        </p>
        <hr>
        <br>
        <p>

        <label> 12) Se um m??vel se desloca seguindo a equa????o s = (-35)+(7t), 
        ele ir?? passar pela origem no instante:
        </label><br>
        <?php 
        if ($questao12 == $resp2):
            print "<br>Resposta correta! (5 segundos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: <br> S = So + v.t
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

        <label> 13) Em um gr??fico S x t, 
        quando a curva cruza o eixo horizontal, diz-se que o corpo est?? passando:
        </label><br>

        <?php 
        if ($questao13 == $resp1):
            print "<br>Resposta correta! (Pela origem.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Pra visualizar melhor que a resposta ?? pela Origem. Quando a reta passar pelo eixo X do tempo, se pergunte qual a altura do eixo Y (S). Nesse caso ?? zero, ou seja, origem. ??bvio por??m did??tico.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 14) Um m??vel percorre metade de uma circunfer??ncia de raio R=5m. Determine o m??dulo de seu 
        deslocamento vetorial e o valor de seu deslocamento escalar.
        </label><br>

        <?php 
        if ($questao14 == $resp1):
            print "<br>Resposta correta! (5??m e 10m.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: 2 pi * Raio ?? o comprimento do circulo, a partir dessa formula se substitui o raio por 5 e chega em 10 m, como o corpo so se deslocou metade logo ele percorreu 5 pi metros como ele chegou at?? metade do circulo ele foi de um lado a outro, o que seria o di??metro = 10 metros.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 15) O gr??fico de uma fun????o hor??ria da velocidade de um m??vel 
        no movimento uniformemente variado descreve seu comportamento em que:
        </label><br>
        <?php 
        if ($questao15 == $resp2):
            print "<br>Resposta correta! (?? representada por uma reta crescente ou descrente.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Como a equa????o hor??ria da velocidade ?? uma equa????o do 1o grau, o gr??fico V x t ser?? SEMPRE uma reta (crescente indicando acelera????o positiva e decrescente indicando acelera????o negativa).
        ";

        endif;
            ?>

        <br>

        <img src="https://media.discordapp.net/attachments/816888490955636747/816889059069657149/png-transparent-mathematics-computer-icons-square-root-formula-mathematical-notation-formula-angle-t.png" style="width: 3%; position: absolute; margin-left: 44%; margin-top: 1.5%">
        <h2 class="title title-second" style=" margin-bottom: 2%;">QU??MICA</h2>

        <label> 1) As propriedades de um material utilizadas para distinguir-se um material do outro s??o divididas em Organol??pticas, F??sicas e Qu??micas. Associe a primeira coluna com a segunda coluna e assinale a alternativa que apresenta a ordem correta das respostas.
        <br>
        <br>PRIMEIRA COLUNA <br>
        ( A ) Propriedade Organol??ptica <br>
        ( B ) Propriedade F??sica <br>
        ( C ) Propriedade Qu??mica <br><br>
        SEGUNDA COLUNA <br>
        ( ) Sabor <br>
        ( ) Ponto de Fus??o <br>
        ( ) Combustibilidade <br>
        ( ) Reatividade <br>
        ( ) Densidade <br>
        ( ) Odor <br>
        ( ) Estados da Mat??ria <br>

        </label><br>

        <?php 
        if ($questao16 == $resp1):
            print "<br>Resposta correta! (A, B, C, C, B, A, B.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: <br> Propriedades f??sicas:
        <br><br>??? Ponto de fus??o: temperatura de equil??brio entre a fase s??lida e l??quida de uma subst??ncia a uma
        determinada press??o; ??? Ponto de ebuli????o: temperatura de equil??brio entre a fase l??quida e gasosa de
        uma subst??ncia a uma determinada press??o;
        <br>??? Densidade (ou massa espec??fica): massa de uma unidade de volume de uma subst??ncia;
        <br>??? Solubilidade: quantidade m??xima de uma subst??ncia que se consegue dissolver sem formar corpo de
        fundo. ?? dependente do solvente utilizado;
        <br>??? Dureza: resist??ncia de um s??lido a ter sua superf??cie riscada;
        <br>??? Tenacidade: resist??ncia ?? fratura (sentido usualmente atribu??do ?? dureza no cotidiano);
        <br>??? Condutividade el??trica: capacidade de conduzir corrente, dada uma diferen??a de potencial.
        <br><br>Propriedades qu??micas (relacionadas a fen??menos em que a mat??ria se transforma):
            <br><br>??? Combustibilidade: capacidade de sofrer combust??o (r??pida rea????o com g??s oxig??nio produzindo calor e
        luz);
        <br>??? Explosividade: capacidade de reagir r??pida e violentamente;
        <br>??? Corrosividade: capacidade de deteriorar outros materiais;
        <br>??? Efervesc??ncia: libera????o de g??s ap??s dissolu????o em um l??quido;
        <br>??? Potencial de redu????o: tend??ncia a receber el??trons em um processo eletroqu??mico.
        <br><br>Propriedades organol??pticas (propriedades que afetam experi??ncias sensoriais):
        <br><br>??? Cor;
        <br>??? Brilho;
        <br>??? Odor;
        <br>??? Sabor;
        <br>??? Textura.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 2) Qual ?? a alternativa em que s?? aparecem misturas?
        </label><br>
        <?php 
        if ($questao17 == $resp5):
            print "<br>Resposta correta! (Ar, granito, vinagre, ??gua sanit??ria.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "<br> Ar - Nitrog??nio, Oxig??nio, Di??xido de carbono, gases nobres etc
        <br> Granito - Quartzo, um mineral incolor; o Feldspato (ort??clase, sanidina e microclina), respons??vel pela
        variedade de cores, dentre elas: avermelhada, rosada e creme-acinzentada; e a Mica (biotite e
        moscovite).
        <br
        >Vinagre - solu????o aquosa de ??cido ac??tico
        ??gua sanit??ria - solu????o aquosa de hipoclorito de s??dio (NaClO)
         ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 3) Observe os sistemas abaixo, onde as esferas representam ??tomos.
        <br>
        <img src="https://i.imgur.com/IL4JsF4.png">
        <br>
        Subst??ncia composta gasosa e subst??ncia simples s??lida est??o, 
        respectivamente, representadas nos sistemas:
        </label><br>

        <?php 
        if ($questao18 == $resp5):
            print "<br>Resposta correta! (V e III.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "<br> Explica????o: Se ?? gasosa e composta, as mol??culas tem que ficar afastadas e de diferentes substancias compostas.
        <br> Subst??ncia simples e solida, ou seja, se ?? simples vai ter s?? o mesmo ??tomo compondo ele e se ?? solido as mol??culas tendem a ficar bem proximas.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 4) I e II s??o dois l??quidos incolores e transparentes. Os dois foram aquecidos, 
        separadamente, e mantidos em ebuli????o. Os valores das temperaturas (T) dos l??quidos em fun????o do tempo (t) de aquecimento s??o mostrados na figura a seguir
        <br>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARIAAAC4CAMAAAAYGZMtAAAAhFBMVEX///8AAADh4eFoaGjKysqIiIipqanY2NhTU1OwsLDn5+fR0dHe3t78/Pz5+fmzs7Pt7e0xMTEiIiK7u7udnZ3y8vLMzMxCQkLDw8OTk5NlZWV9fX3r6+uLi4ukpKR3d3c+Pj5dXV0NDQ1VVVUuLi5JSUmXl5dmZmYmJiYXFxcTExNvb2/4rwojAAAFeklEQVR4nO3d61qqQBSA4bUQRA6CCBqI58Rtcf/3twfQ0sY8xNQAs94/aA/bZn+PkjkDARBCCCGEEEIIIYQQQgghhBDSTm6aLhIj7Zd3hkuYrkYAEyNNjeEwOu6jhfLGJ8Fkam5w6rjlnWxgRmbqwcvANNfrIS6rfZyFxAFKscLTLQQ/grV3yIaslQ3TvPzq6G2r1tOkSDKsbmwDgCW6gJvqvo37YqMhWrLGJslHkreg2p6SaFgeTZCZyhiYPB9JxleTxNjL1oknZWiy3EmSWGZiGiMpQ5OFS9LHGMBPTy8c0A1JI5MmPyXBYxKwcDbDkCVJyrvqJWE/bo83xqcv2QzAfFO1Ui/Jp9NBpOJhWt1QOYm3uriXH2+onOQblIRDSTiUhENJOJSEQ0k4lIRDSTiUhENJOJSEQ0k4lIRDSTiUhENJOJSEQ0k4lIRDSTiUhENJOLKT+DFoVrMmpWUnwQz66MgdwxfSkwzAoiQXKAmHkkxGzAQgK1aEFavl1E1iO4xWrHdhUoCkl+ezYi2lekm0kIkBFkWKDUC4SJLF+bJSZZKM9lEUFa+LZZEiAHD6ltWPr+zZ+R/CkzxN09wDsyhRrEK2Y13Xb/2PY4ftMxE5htqEJZlmmQ2jMsUEPI1xBT3yXxOVpHhesMOnVxDziNKIScKeHUsRj9MIYpJsZtH9ndpC9rvXBqqfxN0vmvUTo67aSewgjdt+QL1UN0kWrGoFydJ63/8X1EyC+K/e92dv6JtG9uG1W0lGZk1z6FqSPtZ0/LykaX6cxItmeb+WpQndSjLDnoi3Ix1Kku1sIW/QOpNkNcb7Oz0EXwQ9kDg/SpJvt8IH0hw/SOKl4/kvjKQxnk8SG4H2GyNpjKeTJLhu6yeID3o2SYJ6x4s8mWS5Qfv+Xi33VBILFSjyVJKmzUH9kseTuD5em67rnoeT6KhIkYeTxHh1SreLHkuiG6jOVaQeSuK8K1TkoSQuRt2alrjtfhLPxQ7Nbj7gbpIRKlbkbhIX0/3fjKQx7iQxx+pNo99MYhuBcle1vJ1kssbF8O+G0hS3kuDGU7DIjSSHy8uOqeO7JJOXbPa3I2mMb5KMXgcqvmZKV5N4/dmmW4utnnE1SQ9nzTq37E9dSzI4uAoXuZIkDVDZw0iJS7JCUTPgbfUlydDYdnq+9xGXSfTFoetzefddJIlwbUobSWOcJ4kwpiLnSfo5dnuRxKM+kvhIRSqnJL5qf8fhe1USO1RldvMBZRIHVZq6uqdIEmNERT7piZMo9ydybpsGAfqyB9EsDkYqfxBwja7gRM0dss/aaiBKwqEkHErCoSQcSsKhJBxKwqEkHErCoSQcSsKhJBxKwqEknNYnEX9uXeuTYCg6itP2T9UsfNmLWO2Q/usdDYK812rFRXUzAYsNbe3I9lcft9vJZkkiTeRSsmnbXziIoq/M1vrDq/hLwrQ+iXiUhNPsJP3z23dOqNN0Qd+0mUmOR8zZ+uxrO249rnmx3iEWdZGIRiaZHaotnr/dmHydu56/X1yceZgImu5vYpINYnku0HoMOuor3E2K83Jf38DB0MAhmNiHGQ6xuDDEC6JRLul+BV/Q08Rp4imvh6Dc7Mbs1YDzDHsuWpBhsVrK3WCZhG1stnlFmGO0QA3GRtjl5XbjKklQJIlh/Q5T9KskIQw+kri4ZE8W0HAZvqFpC3uWNNJ5khDW288k1rUkEYQJjt2wy0nwdhIH/enu7PUT6Xv2FMk7ncSpLnPwViU5IDvKWhAgK9Nnx1PwjJ2/ZpvF2NRwtRnM7d1m9WZ3e+muW16Ya7QFz52wX9u/bNjWm7tQ3XWLM8zmLvsXfqLAqVX4zHm5UzWWIT6VRLFrihBCCCGEEEIIIYQQQogs/wG9+UHZmECKIwAAAABJRU5ErkJggg=="> <br>
        <br>
        Com base nessas informa????es, pode-se afirmar que:
        </label><br>
        <?php 
        if ($questao19 == $resp1):
            print "<br>Resposta correta! (I ?? um l??quido puro e II ?? uma solu????o.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Analisando o gr??fico, apenas o l??quido I apresenta patamar na ebuli????o, portanto, ele pode ser uma subst??ncia pura ou um aze??tropo.
        <br>No l??quido II, n??o apresenta temperatura de ebuli????o constante, portanto, ele ?? uma mistura.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) Durante o ciclo hidrol??gico ocorrem diversas mudan??as de estado f??sico da ??gua. 
        Um exemplo de mudan??a de estado denominada sublima????o ocorre quando:
        </label><br>
        <?php 
        if ($questao20 == $resp1):
            print "<br>Resposta correta! (Vapor de ??gua em elevadas altitudes transforma-se em neve.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Principais processos de transfer??ncia da ??gua na Terra: evapora????o, precipita????o e escoamento.
        <br>No processo de precipita????o, em elevadas altitudes, o vapor de ??gua transforma-se em neve que
        precipita na superf??cie do planeta.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 6) Analise as afirma????es abaixo.
        <br>
        Ponto de fus??o ?? a temperatura na qual ocorre a passagem do 
        estado s??lido para o l??quido, a determinada press??o. PORQUE
        O ponto de fus??o n??o depende da quantidade de material e, sim, do tipo, 
        sendo uma grandeza extensiva.
        <br>
        A esse respeito, conclui-se que:
        </label><br>

        <?php 
        if ($questao21 == $resp3):
            print "<br>Resposta correta! (A primeira afirma????o ?? verdadeira e a segunda ?? falsa.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Segunda ?? falsa pois ?? uma grandeza intensiva, que n??o depende da quantidade de mat??ria. Ex. Ebuli????o da ??gua a 1-atm independentemente da quantidade ?? 100 C??";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 7) Alguns fen??menos observados no cotidiano est??o relacionados 
        com as mudan??as ocorridas no estado f??sico da mat??ria. Por exemplo, 
        no sistema constitu??do por ??gua em um recipiente de barro, a ??gua 
        mant??m-se fresca mesmo em dias quentes.
        <br>
        A explica????o para o fen??meno descrito ?? que, nas proximidades da 
        superf??cie do recipiente, a:
        </label><br>

        <?php 
        if ($questao22 == $resp3):
            print "<br>Resposta correta! (Evapora????o do l??quido retira energia do sistema.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Pensando num recipiente de barro com ??gua. N??s teremos a ??gua no estado l??quido. Dessa forma, ao ser aquecida pelo dia quente. O que ir?? ocorrer ?? uma evapora????o na superf??cie. Essa evapora????o absorve calor, removendo calor do sistema. Fazendo com que a ??gua no estado l??quido permane??a numa temperatura mais baixa.";

        endif;
            ?>
        <br>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 8) O caf?? sol??vel ?? obtido a partir do caf?? comum dissolvido em 
        ??gua. A solu????o ?? congelada e, a seguir, diminui-se bruscamente a press??o. 
        Com isso, a ??gua passa direta e rapidamente para o estado gasoso, sendo 
        eliminada do sistema por suc????o. Com a remo????o da ??gua do sistema, por 
        esse meio, resta o caf?? em p?? e seco. Identifique as mudan??as de estado 
        F??sico ocorridas neste processo:
        </label><br>

        <?php 
        if ($questao36 == $resp4):
            print "<br>Resposta correta! (Solidifica????o e sublima????o.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "<br> Quando a solu????o ?? congelada, passa do estado l??quido para o s??lido ??? solidifica????o.
        <br>Quando a ??gua congelada passa direta e rapidamente para o gasoso ??? sublima????o.<br>";
        endif;
            ?>
        <br>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 9) Podemos determinar o estado f??sico de uma subst??ncia, observando sua 
        temperatura de fus??o e de ebuli????o. Observe o quadro abaixo:
        <br>
        <br>
        <img src="https://mundoeducacao.uol.com.br/upload/conteudo/pontos-de-fusao-e-ebulicao.jpg">
        <br>
        <br>
        Assinale e marque a alternativa CORRETA.
        </label><br>

        <?php 
        if ($questao24 == $resp5):
            print "<br>Resposta correta! ( A 25??C o oxig??nio ?? gasoso..)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A - 183??C o oxig??nio passa do estado l??quido para o gasoso e acima desse valor se mant??m nesse estado f??sico.<br>";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 10) Os processos envolvidos nas mudan??as de estado f??sico da mat??ria, 
        conforme figura a seguir, envolvem transfer??ncia de calor.
        <br>
        <br>
        <img src="https://paperx-dex-assets.s3.sa-east-1.amazonaws.com/images/1548797160864-0i8Ob.png">
        <br>
        <br>
        Dentre esses processos, os que envolvem, respectivamente, absor????o e libera????o de calor s??o:
        </label><br>
        <?php 
        if ($questao25 == $resp2):
            print "<br>Resposta correta! (Sublima????o e solidifica????o.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Como a quest??o pediu respectivamente, temos que ter primeiro um processo que absorve calor e depois um processo que libera calor.
        <br>Absor????o de calor: sublima????o.
        <br>S??lido + calor-> Gasoso
        <br>Libera????o de calor: solidifica????o.
        <br>L??quido + S??lido-> calor <br>
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 11) Analise a tabela peri??dica e as afirma????es a seguir.
        <br>
        <br>
        <img src="https://anglo.plurall.net/sites/default/files/imagens/compartilhadas/questoes/fuvest/2018/18187_620090_2248157_.png">
        <br>
        <br>
        I. Tem massa at??mica maior do que a do sel??nio (Se).
        <br>
        II. Pode formar com o hidrog??nio um composto molecular de f??rmula H_22S.
        <br>
        III. A energia necess??ria para remover um el??tron da camada mais externa do enxofre ?? maior do que para o s??dio (Na).
        <br>
        IV. Pode formar com o s??dio (Na) um composto i??nico de f??rmula Na_33S
        <br>
        S??o corretas apenas as afirma????es:
        </label><br>
        <?php 
        if ($questao26 == $resp3):
            print "<br>Resposta correta! (II e III.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: <br>II-O S necessita de mais 2 (6+2=8) el??trons para se estabilizar,enquanto que cada ??tomo de H hidrog??nio necessita de de mais 1 el??tron para se estabilizar. (Compartilham os el??trons em uma liga????o covalente) (CORRETA)
        <br>III-O enxofre ?? mais eletronegativo que o s??dio. (CORRETA)
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 12) Recentemente, cientistas conseguiram produzir hidrog??nio met??lico, comprimindo hidrog??nio molecular sob elevada press??o. As propriedades met??licas desse elemento s??o as mesmas dos demais elementos do grupo 1 da tabela de classifica????o peri??dica.
        <br>
        Essa semelhan??a est?? relacionada com o subn??vel mais energ??tico desses elementos, que corresponde a:
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
        <label> 13) Desde a descoberta de um tipo de radia????o por R??entgen 
        em 1895, a aplica????o da radia????o ?? extremamente importante na sociedade 
        moderna, principalmente como fonte de gera????o de energia el??trica, pelas 
        usinas nucleares, e como m??todo de diagn??stico e tratamento na medicina. 
        Entretanto, as desvantagens da sua utiliza????o s??o os acidentes nucleares, 
        os riscos de contamina????o e o lixo radioativo.
        <br>
        De fato, no ano de 1986, em Chernobyl, ocorreu a explos??o de uma 
        usina, liberando cerca de 400 vezes mais contamina????o que a bomba 
        at??mica de Hiroshima e matando mais de 4 mil pessoas. Chernobyl 
        trabalhava com o ??tomo de C??sio. Um ano depois, em Goi??nia, houve 
        um acidente com contamina????o com C??sio 137, o maior acidente nuclear 
        do Brasil e o primeiro no mundo fora de uma usina nuclear.
        ?? correto afirmar que o elemento radioativo C??sio, na tabela peri??dica, 
        ?? classificado como:
        </label><br>

        <?php 
        if ($questao28 == $resp1):
            print "<br>Resposta correta! (Metal alcalino.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        print "Explica????o: O n??mero 137 em frente ao C??sio pode confundir. Mas lembre-se que os n??meros da tabela peri??dica s?? ir??o at?? 118.
        Para saber em que parte da tabela o C??sio estar, ou qualquer outro elemento estar, teremos que fazer v??rios exerc??cios com a tabela em m??o at?? estar fixado na mente.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 14) A tabela peri??dica ?? uma ferramenta muito ??til para os 
        qu??micos, embora ela tenha sido pensada a mais de um s??culo atr??s. 
        Sobre a organiza????o sistem??tica dos elementos, ?? verdadeiro afirmar-se 
        que:
        </label><br>

        <?php 
        if ($questao29 == $resp4):
            print "<br>Resposta correta! (A tabela peri??dica atual ordena os elementos em ordem crescente de n??mero at??mico.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A chave para acertar essa quest??o ?? o enunciado, que pergunta a organiza????o sistem??tica da tabela atual. A tabela peri??dica atual ?? organizada em ordem crescente dos n??meros at??micos, colocando em per??odos, elementos com a mesma camada eletr??nica; e nos mesmos grupos, elementos com caracter??sticas semelhantes. Observe que ?? exatamente por isso que os metais de transi????o interna est??o ???fora da tabela???, pois ia desorganizar a ideia de grupos com ???caracter??sticas semelhantes.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 15) Atualmente, a Tabela Peri??dica apresenta 118 elementos distribu??dos ordenadamente em 18 grupos ou fam??lias (linhas verticais) e em 7 per??odos (linhas horizontais). 
        Os elementos pertencentes ao grupo 15 apresentam
        </label><br>

        <?php 
        if ($questao30 == $resp3):
            print "Resposta correta! (Cinco el??trons de val??ncias.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o:
        <br>Grupo dos representativos-> Grupo A.
        <br>Grupo 1- > 1s??
        <br>Grupo 2-> 2s??
        <br>Grupo 3(13)-> 2s?? 2p??
        <br>Grupo 4(14)-> 2s?? 2p??
        <br>Grupo 5 (15)-> 2s?? 2p?? <- Soma de el??trons igual a 5.
        ";

        endif;
            ?>
        <br>
        </p>
        
        <br>
        <img src="https://media.discordapp.net/attachments/816888490955636747/816889059069657149/png-transparent-mathematics-computer-icons-square-root-formula-mathematical-notation-formula-angle-t.png" style="width: 3%; position: absolute; margin-left: 45%; margin-top: 1.5%">
        <h2 class="title title-second" style=" margin-left: 42%; margin-bottom: 2%;">MATEM??TICA</h2>

        <P>

        <label> 1) Em um certo teatro, as poltronas s??o divididas em 
        setores. A figura apresenta a vista do setor 3 desse 
        teatro, no qual as cadeiras escuras est??o reservadas e as claras 
        n??o foram vendidas.
        <br>
        <br>
        <img src="https://pt-static.z-dn.net/files/dbc/f88b89ae13e20cef231ab709caa91110.png">
        <br>
        <br>
        A raz??o que representa a quantidade de cadeiras reservadas do 
        setor 3 em rela????o ao total de cadeiras desse mesmo setor ??:
        </label><br>
        <?php 
        if ($questao31 == $resp1):
            print "<br>Resposta correta! ( 17/70.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A raz??o ?? dada pela parte de um todo. A parte s??o as 17 poltronas e o todo s??o as 70 poltronas. Logo a raz??o ser?? 17/70.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>
        
        <label> 2) Para se construir um contrapiso, ?? comum, na constitui????o do 
        concreto, se utilizar cimento, areia e brita, na seguinte propor????o: 
        1 parte de cimento, 4 partes de areia e 2 partes de brita. Para construir o
        contrapiso de uma garagem, uma construtora encomendou um caminh??o 
        betoneira com 14m?? de concreto.
        <br>
        Qual ?? o volume de cimento, em m 3 , na carga de concreto trazido 
        pela betoneira?
        </label><br>
        <?php 
        if ($questao32 == $resp2):
            print "<br>Resposta correta! (2,00.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Temos que dividir os 14 m?? de concreto em 7 partes, j?? que temos 1 parte de cimento, 4 partes de areia e
        <br>2 partes de brita. Assim, 14/7 = 2. Ou seja, cada parte ter?? 2 m??. Como s?? temos 1 parte de cimento, o
        volume ser?? de 2 m??.
        ";

        endif;
            ?>

        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 3) Em uma empresa de m??veis, um cliente encomenda um 
        guarda-roupa nas dimens??es 220 cm de altura, 120 cm de largura e 
        50 cm de profundidade. Alguns dias depois, o projetista, com o 
        desenho elaborado na escala 1 : 8, entra em contato com o cliente 
        para fazer sua apresenta????o. No momento da impress??o, o profissional 
        percebe que o desenho n??o caberia na folha de papel que costumava usar. 
        Para resolver o problema, configurou a impressora para que a figura 
        fosse reduzida em 20%. A altura, a largura e a profundidade do 
        desenho impresso para a apresenta????o ser??o, respectivamente,

        </label><br>

        <?php 
        if ($questao33 == $resp1):
            print "<br>Resposta correta! (22,00 cm, 12,00 cm e 5,00 cm.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Cada dimens??o est?? 8 vezes menor que a original, j?? que o desenho est?? em escala 1 : 8.
        <br>Al??m disso, cada dimens??o tamb??m ter?? uma redu????o de 20%.
        <br>Ent??o as novas dimens??es s??o:
        <br>??? 220.1/8.0,8 = 22 cm
        <br>??? 120.1/8.0,8 = 12 cm
        <br>??? 50.1/8.0,8 = 5 cm
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 4) Para uma atividade realizada no laborat??rio de Matem??tica, 
        um aluno precisa construir uma maquete da quadra de esportes da escola 
        que tem 28 m de comprimento por 12 m de largura. A maquete dever?? ser 
        constru??da na escala de 1:250. Que medidas de comprimento e largura, 
        em cm, o aluno utilizar?? na constru????o da maquete?

        </label><br>

        <?php 
        if ($questao34 == $resp3):
            print "<br>Resposta correta! (11,2 e 4,8.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: <br>Comprimento:
        <br>1 cm da maquete ????????? 250 cm da quadra
        <br>x cm da maquete ????????? 2800 cm da quadra
        <br>x = 2800/250 = 11,2 cm
        <br>Largura:
        <br>1 cm da maquete ????????? 250 cm da quadra
        <br>y cm da maquete ????????? 1200 cm da quadra
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

        <label> 5) Sabe-se que a dist??ncia real, em linha reta, de uma cidade A, 
        localizada no estado de S??o Paulo, a uma cidade B, localizada no estado de 
        Alagoas, ?? igual a 2 000 km. Um estudante, ao analisar um mapa, verificou 
        com sua r??gua que a dist??ncia entre essas duas cidades, A e B, era 8 cm. 
        Os dados nos indicam que o mapa observado pelo estudante est?? na escala 
        de:
        </label><br>

        <?php 
        if ($questao35 == $resp5):
            print "<br>Resposta correta! (1 : 25000000.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: O mapa observado pelo estudante est?? na escala de:
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

        <label> 6) H?? um novo impulso para produzir combust??vel a partir de gordura 
        animal. Em abril, a High Plains Bioenergy inaugurou uma biorrefinaria pr??xima a 
        uma f??brica de processamento de carne su??na em Guymon, Oklahoma. A 
        refinaria converte a gordura do porco, juntamente com o o ??leo vegetal, em
        biodiesel. A expectativa da f??brica ?? transformar 14 milh??es de quilogramas de banha em 112 milh??es
        de litros de biodiesel. Revista Scientific American. Brasil, ago. 
        2009 (adaptado).
        <br>
        Considere que haja uma propor????o direta entre a massa 
        de banha transformada e o volume de biodiesel produzido. Para produzir 
        48 milh??es de litros de biodiesel, a massa de banha necess??ria, em
        quilogramas, ser?? de, aproximadamente:
        </label><br>

        <?php 
        if ($questao36 == $resp1):
            print "<br>Resposta correta! (6 milh??es.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Como a quest??o diz s??o grandezas diretamente proporcionais, basta perceber que se a quantidade de litros de Biodiesel vai diminuir, ent??o a quantidade de banha tamb??m, a ??nica op????o onde a banha ?? menor que 14 milh??es ?? a A.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 7) Segundo uma pesquisa realizada em uma determinada cidade, 
        numa popula????o de 6.000 habitantes foi estimado que 1.920 pessoas s??o 
        aposentadas.
        <br>
        Qual ?? a porcentagem de aposentados nessa cidade?
        </label><br>
        <?php 
        if ($questao37 == $resp2):
            print "<br>Resposta correta! (32%.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Basta dividirmos o n??mero de aposentados pelo n??mero total da popula????o:
        1920/6000 = 0,32 = 32%";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 8) No exame de sele????o para o ano de 2017, uma faculdade ofereceu 504 vagas para seus cursos Integrados e, no exame de sele????o para o ano de 2018, est?? oferecendo 630 vagas. Qual ?? o percentual de aumento do n??mero de vagas para o ano de 2018?
        </label><br>

        <?php 
        if ($questao38 == $resp3):
            print "<br>Resposta correta! (25,0%.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Para calcular o percentual de aumento basta dividir o valor do ano de 2018 pelo ano de 2017:
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
        print "Explica????o: <br>Ao notar que atletas s??o do sexo masculino implica que do total de participantes ?? do sexo masculino, visto que dos atletas eram do sexo feminino. Desta maneira, considere a seguinte propor????o que representar?? o total de pessoas do sexo feminino:
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

        <label> 10) Analise as informa????es abaixo:
        <br>
        I. O conjunto dos N??meros Naturais ?? subconjunto dos N??meros Inteiros.
        <br>
        II. O conjunto dos N??meros Naturais ?? subconjunto dos N??meros Racionais.
        <br>
        III. O conjunto dos N??meros Naturais ?? subconjunto dos N??meros Irracionais.
        </label><br>

        <?php 
        if ($questao40 == $resp1):
            print "<br>Resposta correta! (Apenas a afirma????o I ?? verdadeira.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: <br> Verdadeira, pois os n??meros inteiros s??o tanto os positivos quanto os negativos, o que inclui os naturais.
        <br>II- Verdadeira, pois assim como os naturais est??o contidos nos inteiros os inteiros est??o contidos nos racionais, logo os naturais tamb??m s??o subconjuntos dos racionais.
        ";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 11) Raios de luz solar est??o atingindo a superf??cie de um lago formando um ??ngulo X com a sua superf??cie, conforme indica a figura.
        <br>
        Em determinadas condi????es, pode-se supor que a intensidade luminosa desses raios, na superf??cie do lago, seja dada aproximadamente por I(x) = k . sen(x) sendo k uma constante, e supondo-se que X est?? entre 0?? e 90??.
        <br>
        <br>
        <img src="https://d2q576s0wzfxtl.cloudfront.net/2017/11/08151533/quest%C3%A3o-138-enem-2017.png">
        <br>
        <br>
        Quando x = 30??, a intensidade luminosa se reduz a qual percentual de seu valor m??ximo?
        </label><br>

        <?php 
        if ($questao41 == $resp2):
            print "<br>Resposta correta! (50%.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Considerando que a maior intensidade luminosa ?? alcan??ada por um ??ngulo de 90??, cujo seno vale 1, quando o ??ngulo for de 30?? o seno ser?? de 1/2, logo quando multiplicar por k, haver?? uma redu????o em 50%.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>
      
        <label> 12) Um cientista, em seus estudos para modelar a press??o arterial de uma pessoa, utiliza uma fun????o do tipo P(t) = A + Bcos(kt) em que A, B e K s??o constantes reais positivas e t representa a vari??vel tempo, medida em segundo. Considere que um batimento card??aco representa o intervalo de tempo entre duas sucessivas press??es m??ximas.
        <br>
        Ao analisar um caso espec??fico, o cientista obteve os dados:
        <br>
        <br>
        <img src="https://anglo.plurall.net/sites/default/files/imagens/compartilhadas/questoes/enem/2017/26c_325469_2216925_.png">
        <br>
        <br>
        A fun????o P(t) obtida, por este cientista, ao analisar o caso espec??fico foi:
        </label><br>

        <?php 
        if ($questao42 == $resp1):
            print "<br>Resposta correta! (P(t)= 99 + 21 cos(3??t).)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

     
        <label> 13) Um sat??lite de telecomunica????es, t minutos ap??s ter atingido sua ??rbita, est?? a r quil??metros de dist??ncia do centro da Terra. Quando r assume seus valores m??ximo e m??nimo, diz-se que o sat??lite atingiu o apo??geu e o perigeu, respectivamente. 
        Suponha que, para esse sat??lite, o valor de r em fun????o de t seja dado por:
        <br>
        <br>
        <img src="https://d2q576s0wzfxtl.cloudfront.net/2017/08/08150554/Q152-ENEM2010.png">
        <br>
        <br>
        Uma cientista monitora o movimento desse sat??lite para controlar o seu afastamento do centro da Terra. Para isso, ele precisa calcular a soma dos valores de r, no apogeu e no perigeu, representada por S. O cientista deveria concluir que, periodicamente, S atinge o valor de:
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


        <label> 14) Em muitas cidades, os poluentes emitidos em excesso pelos ve??culos causam graves problemas a toda a popula????o. Durante o inverno, a polui????o demora mais para se dissipar na atmosfera, favorecendo o surgimento de doen??as respirat??rias. Suponha que a fun????o
        <br>
        <br>
        <img src="https://paperx-dex-assets.s3.sa-east-1.amazonaws.com/images/1557266742514-GBnBZ.png">
        <br>
        <br>
        represente o n??mero de pessoas com doen??as respirat??rias registrado num Centro de Sa??de, com x = 1 correspondendo ao m??s de janeiro, x = 2, o m??s de fevereiro e assim por diante. A soma do n??mero de pessoas com doen??as respirat??rias registrado nos meses de janeiro, mar??o, maio e julho ?? igual a:
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

        
        <label> 15) O esbo??o do gr??fico da fun????o f(x) = a + b cos (x) ?? mostrado na figura se??guinte.
        <br>
        <br>
        <img src="https://static.stoodi.com.br/images/exercises/b1975b16cffd4fd18e9e7b11001abd03/7a07e7cbb7aa93bb30754a042eee2a96f15ba5b0465cb7e99b86c373e158571b.png?versionId=b7JivHAWvJAL5n8ZopMZBE__UUDAX7.B">
        <br>
        <br>
        Nessa situa????o, o valor de a ?? b ??:
        </label><br>

        <?php 
        if ($questao45 == $resp5):
            print "<br>Resposta correta! (6.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: encontra o meio da onda, bem onde o ????/2 t?? (caso seja fun????o cosseno, se for na fun????o seno vai ser onde est?? o ????).
        <br>Esse meio ?? o valor do ???a??? que normalmente seria zero, mas ai est?? como 3.
        <br>Agora, pra encontrar o ???b??? voc?? s?? precisa andar do meio da onda at?? o valor m??ximo e o valor m??nimo.
        <br>O ???b??? vai ser a altura do meio da onda pra cima ou pra baixo, que ai no caso ?? 2.
        <br>16 A f??rmula para calcular a soma dos ??ngulos internos de um pol??gono ??:
        <br>S = (n ??? 2)??180
        <br>S = (5 ??? 2)??180
        <br>S = 3??180
        <br>S = 540
        <br>Dividindo a soma dos ??ngulos internos por 5, pois um pent??gono possui cinco ??ngulos internos, encontraremos 108?? como medida de cada ??ngulo interno.
        
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 16) Pent??gonos regulares congruentes podem ser conectados, lado a lado, formando uma estrela de cinco pontas, conforme destacado na figura.
        <br>
        <br>
        <img src="https://pt-static.z-dn.net/files/dc2/bd3c95bd041a327c283ee256af79c95b.png">
        <br>
        <br>
        Nestas condi????es, o ??ngulo ?? mede:
        </label><br>

        <?php 
        if ($questao46 == $resp4):
            print "<br> Resposta correta! (36??.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: O trajeto do rob?? ser?? um pol??gono regular de lado 5m e ??ngulo externo 60??. Como 360?? : 6 = 60??, conclu??mos que o pol??gono pedido possui 6 lados.";

        endif;
            ?>

        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 17) Um rob??, caminhando em linha reta, parte de um ponto A em dire????o a um ponto B, que distam entre si cinco metros. Ao chegar ao ponto B, gira novamente 60?? ?? esquerda e caminha mais cinco metros, repetindo o movimento e o giro at?? retornar ao ponto de origem. O percurso do rob?? formar?? um pol??gono regular de:
        </label><br>

        <?php 
        if ($questao47 == $resp5):
            print "<br> Resposta correta! (6 lados.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: <br> A soma dos ??ngulos internos de um pol??gono convexo pode ser calculada atrav??s da f??rmula a seguir, onde n ?? o n??mero de lados do pol??gono. Ou seja:
 
        <br>Assim, sabendo que a soma dos ??ngulos internos ?? 540?? , pode-se escrever:
        <br> 540 = 2x + 30 + 4x ??? 40 + 2x + 50 + 2x + 5x/2
        <br> 540 = 10x + 5x/2 + 40
        <br> 500=25x/2 
        <br> x = 40x = 40??
        ";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 18) O valor de x no pent??gono abaixo ?? igual a:
        <br>
        <br>
        <img src="https://paperx-dex-assets.s3.sa-east-1.amazonaws.com/images/1549464507196-A1nup.png">
        <br>
        </label><br>

        <?php 
        if ($questao48 == $resp2):
            print "<br>Resposta correta! ( 40??.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o:
        <br> A soma dos ??ngulos internos de um pol??gono convexo pode ser calculada atrav??s da f??rmula a seguir, onde n ?? o n??mero de lados do pol??gono. Ou seja:
 
        <br> Assim, sabendo que a soma dos ??ngulos internos ?? 540?? , pode-se escrever:
        <br> 540 = 2x + 30 + 4x ??? 40 + 2x + 50 + 2x + 5x/2
        <br>540 = 10x + 5x/2 + 40
        <br> 500=25x/2 
        <br>x = 40x = 40??
";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 19) Uma pessoa pegou um mapa rasgado em que constava um terreno delimitado por quatro ruas. Na parte vis??vel do mapa, v??-se que o angulo formado pela rua Saturno e pela rua J??piter e 90??; o ??ngulo formado pela rua J??piter e pela rua Netuno e 110?? e o ??ngulo formado pela rua Netuno e pela rua Marte e 100??. Nessas condi????es, a medida de um ??ngulo formado pelas ruas Marte e Saturno, na parte rasgada do mapa, ?? de:
        <br>
        <br>
        <img src="data:image/png;base64,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">
        <br>
        </label><br>

        <?php 
        if ($questao49 == $resp2):
            print "<br>Resposta correta! ( 60??.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: <br>Sabemos que a soma dos ??ngulos internos de um quadril??tero qualquer ?? 360 graus. Assim:
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

        
        <label> 20) Na constru????o civil, ?? muito comum a utiliza????o de ladrilhos ou azulejos com a forma de pol??gonos para o revestimento de pisos ou paredes. Entretanto, n??o s??o todas as combina????es de pol??gonos que se prestam a pavimentar uma superf??cie plana, sem que haja falhas ou superposi????es de ladrilhos, como ilustram as figuras:
        <br>
        <br>
        <img src="http://3.bp.blogspot.com/-iN3X7x8uPo8/UZ1svB7gIII/AAAAAAAAAOw/ZBnfNJwDIgA/s1600/Imagem5.png" style="width: 45%;">
        <br>
        <br>
        A tabela traz uma rela????o de alguns pol??gonos regulares, com as respectivas medidas de seus ??ngulos internos.
        <br>
        <br>
        <img src="http://s3-sa-east-1.amazonaws.com/descomplica-blog/wp-content/uploads/2015/03/999999.png">
        <br>
        <br>
        Se um arquiteto deseja utilizar uma combina????o de dois tipos diferentes de ladrilhos entre os pol??gonos da tabela, sendo um deles octogonal, o outro tipo escolhido dever?? ter a forma de um:
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