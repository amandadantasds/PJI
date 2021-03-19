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

$resp1 = "a";
$resp2 = "b";
$resp3 = "c";
$resp4 = "d";
$resp5 = "e";
?>

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Biológicas</title>
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
        <img src="https://media.discordapp.net/attachments/816888490955636747/816889040505667604/png-transparent-coloring-book-drawing-black-and-white-ausmalbild-plant-plant-angle-text-heart-remove.png?width=473&height=473" style="width: 6%; position: absolute; margin-left: 48.5%;">
        <h2 class="title title-second" style="margin-top: 5%;">BIOLÓGICAS</h2>
        <form class="form" method="POST" action="respostabio.php" style="font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    margin-left: 10%;
    margin-right: 10%;">

        <article>

        <h2 class="title title-second" style=" margin-left: 46.5%; margin-bottom: 2%; margin-top: 2%;">BIOLOGIA</h2>
        <P>
        <label> 1) (ENEM-2018)
Corredores ecológicos visam mitigar os efeitos da fragmentação dos ecossistemas promovendo a ligação entre diferentes áreas, com o objetivo de proporcionar o deslocamento de animais, a dispersão de sementes e o aumento da cobertura vegetal. São instituídos com base em informações como estudos sobre o deslocamento de espécies, sua área de vida (área necessária para o suprimento de suas necessidades vitais e reprodutivas) e a distribuição de suas populações.
<br> Nessa estratégia, a recuperação da biodiversidade é efetiva porque:
</label><br> 
<br>
<?php 
        if ($questao1 == $resp1):
            print "Resposta correta! (Propicia o fluxo gênico.)"; 

        else:  print "Resposta errada.<br> <br> ";
        print "Explicação: O fluxo gênico corresponde ao aumento da diversidade sob o ponto de vista genético. Dessa forma, os corredores ecológicos permitem o deslocamento dos animais e a dispersão de sementes.
        <br> Isso resulta no aumento da cobertura vegetal que, por sua vez, faz com que os seres vivos possam se intercruzar.";

        endif;
            ?>
            <br>
        <br>
        </p>
        <hr>
        <br>

        <p>
        <label> 2) (ENEM - 2018) Insetos podem apresentar três tipos de desenvolvimento. Um deles, a holometabolia (desenvolvimento completo), é constituído pelas fases de ovo, larva, pupa e adulto sexualmente maduro, que ocupam diversos hábitats. Os insetos com holometabolia pertencem às ordens mais numerosas em termos de espécies conhecidas. <br> Esse tipo de desenvolvimento está relacionado a um maior número de espécies em razão da:
</label><br>

<?php 
        if ($questao2 == $resp3):
            print "<br> Resposta correta! (Exploração de diferentes nichos, evitando a competição entre as fases da vida.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print " Explicação: Cada fase de desenvolvimento apresenta um habitat e um nicho diferentes, o que impede a competição entre as espécies, ou seja, a competição intraespecífica. Dessa forma, é aumentada a efetividade do animal dentro de seu ambiente, bem como sua adaptação ao meio. <br>";
       
    endif;
    ?>
        
        </p>
        <br/>
        <hr>
        <br>
        

        <P>

        <label> 3) (ENEM-2018)
A polinização, que viabiliza o transporte do grão de pólen de uma planta até o estigma de outra, pode ser realizada biótica ou abioticamente. Nos processos abióticos, as plantas dependem de fatores como o vento e a água. ,<br> A estratégia evolutiva que resulta em polinização mais eficiente quando esta depende do vento é o(a):
</label><br>
<?php 
        if ($questao3 == $resp5):
            print "<br>Resposta correta! (Aumento do número de estames.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        print "Explicação: A polinização pelo vento ocorre somente diante da presença de uma grande quantidade de pólen, caso contrário, considera-se que o vento não faz polinização direcional. O número de estames é que determina a quantidade de pólen.";
    endif;
    ?> <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 4) (ENEM-2018)
        O deserto é um bioma que se localiza em regiões de pouca umidade. A fauna é, predominantemente, composta por animais roedores, aves, répteis e artrópodes.
        <br> Uma adaptação, associada a esse bioma, presente nos seres vivos dos grupos citados é o(a):
        </label><br>
        <?php 
        if ($questao4 == $resp2):
            print "<br>Resposta correta! (Eliminação de excretas nitrogenadas de forma concentrada.)"; 

        else:  print " <br> Resposta errada.<br> <br> ";
        print " Explicação: O suor e a transpiração são uma característica dos mamíferos e no enunciado são citados roedores, aves, répteis e artrópodes. Os roedores, particularmente, não nascem de ovos, eliminando mais uma alternativa. <br> <br>
        Os pulmões foliáceos possuem estruturas simples e não são encontrados nos animais citados no enunciado. Assim, destacamos que a eliminação de excretas nitrogenadas de forma concentrada é uma estratégia dos indivíduos citados.";
    endif;
    ?>  
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) (ENEM-2018)
        A utilização de extratos de origem natural tem recebido a atenção de pesquisadores em todo o mundo, principalmente nos países em desenvolvimento que são altamente acometidos por doenças infecciosas e parasitárias. Um bom exemplo dessa utilização são os produtos de origem botânica que combatem insetos.
        <br> O uso desses produtos pode auxiliar no controle da:

        </label><br>

        <?php 
        if ($questao5 == $resp3):
            print "<br> Resposta correta! (Leishmaniose.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        print "Explicação: A leishmaniose é uma doença causada por protozoário, sendo transmitida através da picada de um inseto vetor. Existe medicação para prevenir a doença somente em seres humanos.";
    endif;
    ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 6) (ENEM-2018)
        Para serem absorvidos pelas células do intestino humano, os lipídios ingeridos precisam ser primeiramente emulsificados. Nessa etapa da digestão, torna-se necessária a ação dos ácidos biliares, visto que os lipídios apresentam uma natureza apolar e são insolúveis em água.
        <br>Esses ácidos atuam no processo de modo a:

        </label><br>

        <?php 
        if ($questao6 == $resp2):
            print "<br> Resposta correta! (Agir como detergentes.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        print "Explicação: Os ácidos biliares tem como função separar e facilitar a digestão. Eles atuam como detergentes nas gorduras (lipídios).";
        
    endif;
    ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 7) (ENEM-2017)
        A terapia celular tem sido amplamente divulgada como revolucionária, por emitir a regeneração de tecidos a partir de células novas. Entretanto, a técnica de se introduzirem novas células em um tecido, para o tratamento de enfermidades em indivíduos, já era aplicada rotineiramente em hospitais.
<br>A que técnica refere-se o texto?

        </label><br>

        <?php 
        if ($questao7 == $resp5):
            print "<br> Resposta correta! (Transfusão de sangue.)";

        else:  print "<br> Resposta errada.<br> <br> ";
        print " Explicação: Na transfusão de sangue ocorre a transferência de células sanguíneas, onde o indivíduo receptor recebe células como hemácias e leucócitos.";
       
    endif;
    ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 8) (ENEM-2018)
        No ciclo celular atuam moléculas reguladoras. Dentre elas, a proteína p53 é ativada em resposta a mutações no DNA, evitando a progressão do ciclo até que os danos sejam reparados, ou induzindo a célula à auto destruição. <br> ALBERTS, B. et. al. Fundamentos da biologia celular. Porto Alegre: Artmed, 2011 (adaptado) <br> A ausência dessa proteína poderá favorecer a:

        </label><br>

        <?php 
        if ($questao8 == $resp5):
            print "<br> Resposta correta! (Proliferação celular exagerada, resultando na formação de um tumor.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        print " Explicação: A proteína citada no enunciado, p53, quando ausente, causa o descontrole do ciclo celular, proporcionando assim o acúmulo de células. Dessa forma, forma-se o tumor maligno.";

    endif;
    ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <p>

        <label> 9) (ENEM-2018)
        Um estudante relatou que o mapeamento do DNA da cevada foi quase todo concluído e seu código genético desvendado. Chamou a atenção para o número de genes que compõem esse código genético e que a semente da cevada, apesar de pequena, possui um genoma mais complexo que o humano, sendo boa parte desse código constituída de sequências repetidas. <br> Nesse contexto, o conceito de código genético está abordado de forma equivocada.
        Cientificamente esse conceito é definido como:

        </label><br>

        <?php 
        if ($questao9 == $resp1):
            print "<br> Resposta correta! (Trincas de nucleotídeos que codificam os aminoácidos.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        print "Explicação: O código genético é constituído por trincas de nucleotídeos que são os códons que, por sua vez, codificam os aminoácidos naturais. <br>";
    endif;
    ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 10) (ENEM-2017) A distrofia muscular Duchenne (DMD) é uma doença causada por uma mutação em um gene localizado no cromossomo X. <br> Pesquisadores estudaram uma família na qual gêmeas monozigóticas eram portadoras de um alelo mutante recessivo para esse gene (heterozigóticas). O interessante é que uma das gêmeas apresentava o fenótipo relacionado ao alelo mutante, isto é, DMD, enquanto a sua irmã apresentava fenótipo normal. <br> RICHARDS, C. S. et al. The American Journal of Human Genetics, n. 4, 1990 (adaptado) <br>
A diferença na manifestação da DMD entre as gêmeas pode ser explicada pela:
        </label><br>

        <?php 
        if ($questao10 == $resp4):
            print "<br>Resposta correta! (Inativação aleatória de um dos cromossomos X em fase posterior à divisão que resulta nos dois embriões.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        print " Explicação: Nesses casos, considera-se que as duas gêmeas inativaram o cromossomo Xd , porém uma delas não é portadora, enquanto a outra apresenta a doença. <br>";
    endif;
    ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 11) As proteínas são compostos:

        </label><br>

        <?php 
        if ($questao11 == $resp2):
            print "<br>Resposta correta! (Formados por aminoácidos unidos por ligações peptídicas.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        print "Explicação: As proteínas são formadas por aminoácidos unidos por ligações peptídicas; são de tamanho grande (macromoléculas) e ocorrem em alta concentração dentro da célula. <br>";
    endif;
    ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <p>

        <label> 12) (ENEM-2018)
        Leia o texto a seguir, escrito por Jöns Jacob Berzelius em 1828.<br> “Existem razões para supor que, nos animais e nas plantas, ocorrem milhares de processos catalíticos nos líquidos do corpo e nos tecidos. Tudo indica que, no futuro, descobriremos que a capacidade de os organismos vivos produzirem os mais variados tipos de compostos químicos reside no poder catalítico de seus tecidos.” <br> A previsão de Berzelius estava correta, e hoje sabemos que o “poder catalítico” mencionado no texto deve-se :
        </label><br>

        <?php 
        if ($questao12 == $resp4):
            print "<br>Resposta correta! (Às proteínas.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print " Explicação: As proteínas são enzimas (exceto a ribozima) ou seja elas tem o poder de catalizar as reações químicas. <br>";
        
    endif;
    ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 13) Considere as seguintes afirmativas:<br>
        I. As proteínas são substâncias de grande importância para os seres vivos: muitas participam da construção da matéria viva.<br>
        II. As proteínas chamada enzimas facilitam reações químicas celulares.<br>
        III. Os anticorpos, que também são proteínas, funcionam como substâncias de defesa. <br>
        Assinale:
        </label><br>

        <?php 
        if ($questao13 == $resp5):
            print "<br>Resposta correta! (Se todas estiverem corretas.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print " Explicação: As proteínas têm função estrutural (ex.: colágeno, formando o tecido cartilaginoso), catalizadores (ex.: enzimas, que facilitam reações) e de defesa (ex.: anticorpos, que participam do sistema imune).<br>";
        
    endif;
    ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>
        <label> 14) Para que uma célula possa produzir suas proteínas, ela precisa de aminoácidos, que podem ser obtidos de duas formas: ingeridos em alimentos ricos em proteínas, ou produzidos pelas células a partir de outras moléculas orgânicas. Nas alternativas abaixo marque respectivamente como são chamados os aminoácidos que um organismo não consegue produzir, e como são chamados os aminoácidos produzidos a partir de outras substâncias.

        </label><br>

        <?php 
        if ($questao14 == $resp5):
            print "<br>Resposta correta! (Aminoácidos essenciais e aminoácidos naturais.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        print "Explicação: ";
        print "Os aminoácidos que um organismo não consegue produzir são chamados de essenciais, enquanto que os aminoácidos produzidos a partir de outras substâncias são chamados de não essenciais ou naturais.";
    endif;
    ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label>15) O gráfico a seguir mostra como a concentração do substrato afeta a taxa de reação química:
        O modo de ação das enzimas e a análise do gráfico permitem concluir que:
        </label><br>
        <img src="https://static.stoodi.com.br/images/exercises/164e5b2c5e3849329359539878b4a57b/762f858e58da0757fb575a7ca4e3c3abf7cf9c12d30ca68b72b2e6bc02771618.png?versionId=A.cYYbqwy7dVjWBKUAejHsh0T5WGMHVF" > <br>

        </p>

        <br>
        <?php 
        if ($questao15 == $resp1):
            print "Resposta correta! (Todas as moléculas de enzimas estão unidas às moléculas de substrato quando a reação catalisada atinge a taxa máxima.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: ";
        print "Quando a taxa de reação atinge a velocidade máxima, significa que todas as enzimas estão catalisando a reação de um substrato. <br><br>";
    endif;
    ?>
    <hr>

<h2 class="title" style="font-family: 'Open Sans', sans-serif;
  font-weight: bold;
  margin-top: 5%;
  margin-bottom: 5%;
  font-size: 18px";>LINKS SUGERIDOS 

<br> BIOQUIMÍCA<br>
https://youtu.be/ZVKB4F7XpHo<BR>

https://youtu.be/wKfNb679BF4<br>
    </article>
</form>

        
    

    

       