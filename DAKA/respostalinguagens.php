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
        <title>Linguagens</title>
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
      
        <form class="form" method="POST"  style="font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    margin-left: 10%;
    margin-right: 10%;">

        <article>
        <P>
        <h2 class="title title-second" style=" margin-left:45%; margin-bottom: 2%; margin-top: 8px">HIST??RIA</h2>

        <label> <label> 1) Observe a imagem a seguir:
        <br>
        <img src="https://media.discordapp.net/attachments/817976102773194754/818360364840255508/POR1.png">
        <br>
        Considerando a linguagem verbal e a n??o verbal, analise as seguintes afirmativas:
        <br>
        I.O uso dos verbos ???pensar??? e ???amar??? vinculados aos adv??rbios ???menos??? e ???mais??? privilegiam o sentimentalismo em prol da raz??o.
        <br>
        II.O uso da ant??tese indica que o ato de pensar e amar podem ser contradit??rios.
        <br>
        III.O uso da hashtag (#) aproxima o texto do p??blico consumidor jovem, uma vez que esta ?? muito utilizada em postagens nas redes sociais.
        <br>
        Est??o corretas as afirmativas:
</label><br>
<?php 
        if ($questao1 == $resp5):
            print "<br>Resposta correta! (I, II e III apenas)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Todas as alternativas est??o corretas. O jogo de palavras opositivo de ???pense menos??? e ???ame mais??? privilegiam o sentimento (amar mais) a favor da raz??o (pense menos). Al??m disso, a propaganda busca, por meio da ant??tese criada entre os verbos ???pensar??? e ???amar???, convencer o consumidor a deixar se levar pelos sentimentos e adquirir o produto. A hashtag torna a linguagem popular entre os jovens, que est??o acostumados ao seu uso nas redes sociais.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>
        <label> 2) Em busca de uma linguagem coloquial, os redatores do telejornalismo 
        usam figuras de linguagem. Assinale a chamada que usa eufemismo 
        (adaptado de O texto na TV, de Vera Iris Paternostro).
</label><br>

<?php 
        if ($questao2 == $resp2):
            print "<br>Resposta correta! (Nos depoimentos, os deputados faltaram com a verdade v??rias vezes.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Faltar com a verdade ?? um eufemismo de dizer mentiras.";

        endif;
            ?>
        <br>
        </p>
        <br/>
        <hr>
        <br>
        

        <P>

        <label> 3)  (???) ???Confeitaria do Cust??dio???. Muita gente certamente lhe n??o 
        conhecia a casa por outra designa????o. Um nome, o pr??prio nome do dono, n??o 
        tinha significa????o pol??tica ou figura????o hist??rica, ??dio nem amor, nada 
        que chamasse a aten????o dos dois regimes, e conseguintemente que pusesse em 
        perigo os seus past??is de Santa Clara, menos ainda a vida do propriet??rio 
        e dos empregados. Por que ?? que n??o adotava esse alvitre? Gastava alguma 
        coisa com a troca de uma palavra por outra, Cust??dio em vez de Imp??rio, 
        mas as revolu????es trazem sempre despesas.
        <br>
        (Machado de Assis. Esa?? e Jac??. Obra completa, 1904.)
        <br>
        O fragmento, extra??do do romance Esa?? e Jac??, de Machado de Assis, narra 
        a desventura de Cust??dio, dono de uma confeitaria no Rio de Janeiro, que, 
        ??s v??speras da proclama????o da Rep??blica, mandou fazer uma placa com o nome 
        ???Confeitaria do Imp??rio??? e agora temia desagradar ao novo regime. A ironia 
        com que as d??vidas de Cust??dio s??o narradas representa o :
</label><br>
<?php 
        if ($questao3 == $resp3):
            print "<br>Resposta correta! (Alheamento de parte da sociedade brasileira diante do conte??do ideol??gico da mudan??a pol??tica.)"; 

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

        <label> 4) ???eu gostava muito de passe????? sa?? com as minhas colegas??? brinc?? na 
        porta di casa di v??lei??? and?? de patins??? bicicleta??? quando eu levava um tombo 
        ou outro??? eu era a??? a palha??a da turma??? ((risos))??? eu acho que foi uma das 
        fases mais??? assim??? gostosas da minha vida foi??? essa fase de quinze??? dos meus 
        treze aos dezessete anos??????
        <br>
        A.P.S., sexo feminino, 38 anos, n??vel de ensino fundamental. Projeto Fala 
        Goiana, UFG. 2010 (in??dito).
        <br>
        Um aspecto da composi????o estrutural que caracteriza o relato pessoal de A.P.S. 
        como modalidade falada da l??ngua ??:
        </label><br>
        </label><br>

        <?php 
        if ($questao4 == $resp1):
            print "<br>Resposta correta! (Predom??nio de linguagem informal entrecortada por pausas.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: os verbos s??o representados na forma escrita tal qual s??o falados cotidianamente, e, por isso, representam uma modalidade coloquial da l??ngua portuguesa.";

        endif;
            ?>     
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label>  5) Jo??o e Maria
        Agora eu era her??i <br>
        E o meu cavalo s?? falava ingl??s <br>
        A noiva do cowboy <br>
        Era voc?? al??m de outras tr??s <br>
        Eu enfrentava batalh??es <br>
        Os alem??es e os seus canh??es <br>
        Guardava o meu bodoque <br>
        Ensaiava o rock <br>
        Para as matin??s (???) <br>
        <br>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
        Quanto ao tempo verbal, ?? CORRETO afirmar que, no texto anterior,

        </label><br>
        <?php 
        if ($questao5 == $resp3):
            print "<br>Resposta correta! (O pret??rito imperfeito ?? usado para instaurar um mundo imagin??rio, pr??prio do universo infantil.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Explica????o: os verbos s??o representados na forma escrita tal qual s??o falados cotidianamente, e, por isso, representam uma modalidade coloquial da l??ngua portuguesa.";
        endif;
            ?>  
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 6) Em: ?????? Perdi a mala! ??? um diz de cara acabrunhada???, 
        ???um??? tem a fun????o sint??tica de:
        </label><br>
        <?php 
        if ($questao6 == $resp2):
            print "<br>Resposta correta! (Sujeito simples.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Pois ele ?? ??nico,e pr??tica a a????o est?? ligado s?? verbo.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 7) Em: ???Eu era enfim, senhores, uma gra??a de alienado???, 
        os termos em destaque s??o, respectivamente:

        </label><br>
        <?php 
        if ($questao7 == $resp3):
            print "<br>Resposta correta! (Adjunto adverbial, vocativo, predicativo do sujeito.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: ???enfim??? indica tempo, por isso ?? adjunto adverbial; ???senhores??? chama o interlocutor, por isso ?? vocativo; a continua????o da frase apresenta uma caracter??stica do sujeito e, por isso, ?? predicativo do sujeito.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 8)Aponte a alternativa que expressa a fun????o sint??tica 
        do termo destacado: ???Parece enfermo, seu irm??o???.
        </label><br>

        </label><br>
        <?php 
        if ($questao8 == $resp2):
            print "<br>Resposta correta! (Predicativo do sujeito.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: O verbo ???parecer???, na quest??o, est?? flexionado com o sentido de ???ser/estar???. Desse modo, o termo ???efermo??? exerce fun????o de predicativo do sujeito por estar ligado, diretamente, ao sujeito.";
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <p>
        <label> 9) Em ???Ningu??m parecia disposto ao trabalho naquela manh?? de 
        segunda-feira???, o termo "ao trabalho" classifica-se como:
        </label><br>
        <?php 
        if ($questao9 == $resp2):
            print "<br>Resposta correta! ( Complemento nominal.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Na frase: ???Ningu??m parecia disposto ao trabalho naquela manh?? de segunda-feira???, a ??nica fun????o que o termo ???ao trabalho??? poderia assumir ?? a de complemento nominal, pois est?? complementando o sentido do termo ???disposto??? que ?? um adjetivo (nome).";
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 10) 
        ???Daqui estou vendo o amor
        <br>
        Irritado, desapontado??? 
        <br>
        Carlos Drummond de Andrade
        <br>
        Identifique a alternativa que traz, respectivamente, a classe 
        gramatical e a fun????o sint??tica das palavras "Irritado" e "desapontado":
        </label><br>
        <?php 
        if ($questao10 == $resp2):
            print "<br>Resposta correta! (adjetivo ??? predicativo.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: irritado??? modifica o sujeito oculto ???eu??? e, por isso, ?? seu predicativo (mas a frase ?? propositalmenteb
        amb??gua, tamb??m pode modificar amor, sendo predicativo do objeto). A classifica????o morfol??gica de
        irritado ?? adjetivo.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 11) 14 coisas que voc?? n??o deve jogar na privada
        Nem no ralo. Elas poluem rios, lagos e mares, o que contamina o ambiente 
        e os animais. Tamb??m deixa mais dif??cil obter a ??gua que n??s mesmos usaremos. 
        Alguns produtos podem causar entupimentos: <br>
        ??? cotonete <br>
        ??? medicamento e preservativo; <br>
        ??? ??leo de cozinha; <br>
        ??? ponta de cigarro; <br>
        ??? poeira de varri????o de casa; <br>
        ??? fio de cabelo e pelo de animais; <br>
        ??? tinta que n??o seja ?? base de ??gua; <br>
        ??? querosene, gasolina, solvente, t??ner. <br>
        Jogue esses produtos no lixo comum. Alguns deles, como ??leo de cozinha, 
        medicamento e tinta, podem ser levados a pontos de coleta especiais, que 
        dar??o a destina????o final adequada.???<br>?????????????????????
        ????????????????????????MORGADO, M.; EMASA. Manual de etiqueta. Planeta Sustent??vel, 
        jul.-ago. 2013 (adaptado).<br>
        O texto tem objetivo educativo. Nesse sentido, al??m do foco no interlocutor, 
        que caracteriza a fun????o conativa da linguagem, predomina tamb??m nele 
        a fun????o referencial, que busca:
        </label><br>

        <?php 
        if ($questao11 == $resp2):
            print "<br>Resposta correta! (Informar o leitor sobre as consequ??ncias da destina????o inadequada do lixo, orientando-o sobre como fazer o correto descarte de alguns dejetos.)";

        else:  print "<br>Resposta errada.<br> <br> ";
        print " Explica????o: Lembrar que a fun????o referencial est?? focada no aspecto informacional ??? ent??o, o aspecto de orienta????o
        ?? apropriado a este tipo de comunica????o.";
        
        endif;
            ?>
        <br> 
        <br>
        </p>
        <hr>
        <br>
        <p>

        <label> 12) O exerc??cio da cr??nica <br>

Escrever prosa ?? uma arte ingrata. Eu digo prosa fiada, como faz um cronista; 
n??o a prosa de um ficcionista, na qual este ?? levado meio a tapas pelas 
personagens e situa????es que, azar dele, criou porque quis. Com um prosador do 
cotidiano, a coisa fia mais fino. Senta-se ele diante de sua m??quina, olha 
atrav??s da janela e busca fundo em sua imagina????o um fato qualquer, de 
prefer??ncia colhido no notici??rio matutino, ou da v??spera, em que, com as 
suas artimanhas peculiares, possa injetar um sangue novo. Se nada houver, 
resta-lhe o recurso de olhar em torno e esperar que, atrav??s de um processo 
associativo, surja-lhe de repente a cr??nica, provinda dos fatos e feitos de 
sua vida emocionalmente despertados pela concentra????o. Ou ent??o, em ??ltima 
inst??ncia, recorrer ao assunto da falta de assunto, j?? bastante gasto, mas 
do qual, no ato de escrever, pode surgir o inesperado. <br>

MORAES, V. Para viver um grande amor: cr??nicas e poemas. S??o Paulo: Cia. das Letras, 1991. <br>

Predomina nesse texto a fun????o da linguagem que se constitui
        </label><br>
        <?php 
        if ($questao12 == $resp5):
            print "<br>Resposta correta! (Nas dificuldades de se escrever uma cr??nica por meio de uma cr??nica.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o:Uma vez que a mensagem do texto ?? centrada em seu pr??prio c??digo, a fun????o da linguagem que Essa ?? uma quest??o sobre a fun????o f??tica, na qual o emissor fica testando o canal de modo a angariar a sua aten????o por mais tempo. Acho maneiro que o ???n????? tanto serve de fun????o f??tica para os brasileiros como para os japoneses, pois eles usam esse termo com a mesma fun????o: manuten????o da linguagem oral. predomina ?? a metalingu??stica. No texto, o cronista apresenta, por meio de uma cr??nica, alguns entraves encontrados por quem escreve esse g??nero textual. ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 13) A biosfera, que re??ne todos os ambientes onde se 
        desenvolvem os seres vivos, se divide em unidades menores 
        chamadas ecossistemas, que podem ser uma floresta, um deserto 
        e at?? um lago. Um ecossistema tem m??ltiplos mecanismos que 
        regulam o n??mero de organismos dentro dele, controlando sua 
        reprodu????o, crescimento e migra????es.
        <br>
        (DUARTE, M. O guia dos curiosos. S??o Paulo: Companhia das Letras, 1995.)
        <br>
        Predomina no texto a fun????o da linguagem:
        </label><br>

        <?php 
        if ($questao13 == $resp5):
            print "<br>Resposta correta! (Referencial, porque o texto trata de no????es e informa????es conceituais.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Esse texto ?? puramente informativo, o que nos leva a pensar que predomina a fun????o referencial, que ?? quando o que est?? sendo dito n??o passa de informa????o.";
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 14) Novas tecnologias
        <br>
        Atualmente, prevalece na m??dia um discurso de exalta????o das novas tecnologias, 
        principalmente aquelas ligadas ??s atividades de telecomunica????es. Express??es 
        frequentes como ???o futuro j?? chegou???, ???maravilhas tecnol??gicas??? e ???conex??o 
        total com o mundo??? ???fetichizam??? novos produtos, transformando-os em objetos 
        do desejo, de consumo obrigat??rio. Por esse motivo carregamos hoje nos bolsos, 
        bolsas e mochilas o ???futuro??? t??o festejado. Todavia, n??o podemos reduzir-nos a 
        meras v??timas de um aparelho midi??tico perverso, ou de um aparelho capitalista 
        controlador. H?? pervers??o, certamente, e controle, sem sombra de d??vida. 
        Entretanto, desenvolvemos uma rela????o simbi??tica de depend??ncia m??tua com os 
        ve??culos de comunica????o, que se estreita a cada imagem compartilhada e a cada 
        dossi?? pessoal transformado em objeto p??blico de entretenimento. N??o mais como 
        aqueles acorrentados na caverna de Plat??o, somos livres para nos aprisionar, por 
        espont??nea vontade, a esta rela????o sadomasoquista com as estruturas midi??ticas, 
        na qual tanto controlamos quanto somos controlados.
        <br>
        SAMPAIO A. S. A microf??sica do espet??culo. Dispon??vel em: http://observatoriodaimprensa.com.br. Acesso em: 1 mar 2013 (adaptado).
        <br>
        Ao escrever um artigo de opini??o, o produtor precisa criar uma base de orienta????o 
        lingu??stica que permita alcan??ar os leitores e convenc??-los com rela????o ao ponto de 
        vista defendido. Diante disso, nesse texto, a escolha das formas verbais 
        em destaque objetiva:

        </label><br>

        <?php 
        if ($questao14 == $resp4):
            print "<br>Resposta correta! (Tornar o leitor coparticipe do ponto de vista de que ele manipula as novas tecnologias e por elas ?? manipulado.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: O uso de verbos na primeira pessoa do plural ???n??s??? ?? estrat??gia argumentativa de envolvimento e refer??ncia direta ao leitor.";
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 
        <label> 15) O cartaz aborda a quest??o do aquecimento global. 
        A rela????o entre os recursos verbais e n??o verbais nessa propaganda 
        revela que:
        <br>
        
        <img src="https://media.discordapp.net/attachments/817976102773194754/818360364840255508/POR1.png" style="width: 20%;">
    
        <br>
        Dispon??vel em: http://orion-oblog.blogspot.com.br. Acesso em: 6 jun. 2012 (adaptado).
        </label><br>

        <?php 
        if ($questao15 == $resp5):
            print "<br> A agress??o ao planeta ?? dependente da posi????o assumida pelo homem frente aos problemas ambientais."; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Os recursos verbais presentes na propaganda, como a pergunta, os verbos e o uso do pronome ???voc????? demonstram a responsabilidade do homem no processo das mudan??as clim??ticas.";

        endif;
            ?>

        <br>

        <img src="https://media.discordapp.net/attachments/816888490955636747/816897358402551818/kisspng-vector-graphics-book-stock-illustration-logo-research-vector-book-transparent-amp-png-clipar.png" style="width: 3%; position: absolute; margin-top: 2.5%; margin-left: 41.5%;">
        <h2 class="title title-second" style=" margin-left: 38%; margin-top: 3%;">LITERATURA</h2>

        <label> 1)  O que s??o g??neros liter??rios?

        </label><br>

        <?php 
        if ($questao16 == $resp2):
            print "<br>Resposta correta! (Conjunto de caracter??sticas que classificam um texto.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Cada texto divide-se em tipologias. Desta forma, cada texto pode se apresentar numa regra ou padr??o de escrita e recursos lingu??sticos. Ex: L??rico; Dram??tico; ??pico etc";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 2) O g??nero ??pico busca:
        </label><br>
        <?php 
        if ($questao17 == $resp1):
            print "<br>Resposta correta! (Narrar acontecimentos grandiosos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "<br> A Il??ada e Odisseia s??o exemplos de g??neros ??picos produzidos na Gr??cia Antigo e s??o da autoria de Homero. Em resumo, este g??nero tem como caracter??stica principal a narra????o de a????es nobres praticadas por her??is.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label>  3) O cl??max pode ser definido como:
        <br>
        <br>
        Subst??ncia composta gasosa e subst??ncia simples s??lida est??o, 
        respectivamente, representadas nos sistemas:
        </label><br>

        <?php 
        if ($questao18 == $resp3):
            print "<br>Resposta correta! (Ponto alto de uma narrativa, contendo o maior momento de tens??o da problem??tica.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "<br> Explica????o: Cl??max ?? o ponto em que a a????o atinge seu momento cr??tico.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 4) O que ?? o enredo?
        </label><br>
        <?php 
        if ($questao19 == $resp2):
            print "<br>Resposta correta! (O tema principal da hist??ria.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Enredo desenvolve todos os acontecimentos de uma narrativa.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) O narrador-personagem se caracteriza por:
        </label><br>
        <?php 
        if ($questao20 == $resp3):
            print "<br>Resposta correta! (Fazer parte da hist??ria a ser contada.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "O narrador-personagem ?? caracterizado por ser participante ativo da hist??ria. Ou seja, ele n??o s?? conta a hist??ria, como tamb??m participa dela como uma personagem (Por isso o nome: narrador-personagem).";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 6) O narrador-observador estrutura sua linguagem na:
        </label><br>

        <?php 
        if ($questao21 == $resp3):
            print "<br>Resposta correta! (3?? pessoa.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Narrador observador conhece todos os fatos mas n??o participa como personagem, por esse motivo a narra????o ?? feita na terceira pessoa.";
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 7) ?? um exemplo de texto narrativo:
        </label><br>

        <?php 
        if ($questao22 == $resp1):
            print "<br>Resposta correta! (Uma cr??nica.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: ?? um texto que conta algo, narra um acontecimento.";
        endif;
            ?>
        <br>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 8) O narrador-onisciente se caracteriza por:
        </label><br>

        <?php 
        if ($questao36 == $resp3):
            print "<br>Resposta correta! (Conhecer cada detalhe da personalidade dos personagens, incluindo seus sentimentos e pensamentos.)"; 

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

        <label> 9) S??o elementos narrativos do g??nero ??pico:

        <br>
        <br>
        Assinale e marque a alternativa CORRETA.
        </label><br>

        <?php 
        if ($questao24 == $resp2):
            print "<br>Resposta correta! (Narrador, enredo, tempo, espa??o e personagem.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: S?? seguir a regra do pente P(personagem) E(enredo) N(narrador) T(tempo) E(espa??o)";
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 10) Na narra????o, o tempo:
        </label><br>
        <?php 
        if ($questao25 == $resp1):
            print "<br>Resposta correta! (Pode seguir ordem cronol??gica ou digressiva.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: a narra????o n??o necessariamente ter uma ordem cronol??gica.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 11) O que s??o flashbacks?
        </label><br>
        <?php 
        if ($questao26 == $resp3):
            print "<br>Resposta correta! (Volta ao tempo para explorar acontecimentos do passado.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Back??? pode significar ???de volta???, ???para tr??s???, ???atr??s???, varia dependendo do contexto, mas pode remeter uma ideia de passado. Assim, pode ser mais f??cil relacionar ???flashbacks???.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 12) Protagonistas s??o:
        </label><br>
        <?php 
        if ($questao27 == $resp2):
            print "<br>Resposta correta! (Personagens principais de uma narra????o.)"; 

        else:  print "<br>Resposta errada.<br> ";
        print "Explica????o: aqueles que tem maior ??nfase na hist??ria e que aparecem mais.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>
        <label> 13) Anti-her??is s??o:
        </label><br>

        <?php 
        if ($questao28 == $resp2):
            print "<br>Resposta correta! (Protagonistas, por??m desenvolvidos com suas qualidades e defeitos.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        print "Explica????o: ?? s?? se lembrar de dedpool, ele j?? fez coisas ruins mas tamb??m coisas boas, ou seja, defeitos e qualidades";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 14) O elemento espa??o pode desenvolver-se:
        </label><br>

        <?php 
        if ($questao29 == $resp3):
            print "<br>Resposta correta! (Em lugares reais, fict??cios e psicologicamente.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: O espa??o varia com o contexto n??o precisa ser especificamente um local real ou at?? mesmo fict??cio pode ser em pensamento um sonho, etc.";
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 15) Nos prim??rdios da narrativa ??pica, sua constru????o era, predominantemente:
        </label><br>

        <?php 
        if ($questao30 == $resp1):
            print "Resposta correta! (Em versos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: os poemas ??picos antigos eram feitos com versos.";

        endif;
            ?>
        <br>
        </p>
        
        <br>
        <img src="https://media.discordapp.net/attachments/816888490955636747/816897358402551818/kisspng-vector-graphics-book-stock-illustration-logo-research-vector-book-transparent-amp-png-clipar.png" style="width: 3%; position: absolute; margin-top: 2.5%; margin-left: 42.5%;">
        <h2 class="title title-second" style=" margin-left: 45%; margin-top: 3%;">INGL??S</h2>

        <P>

        <label> 1) 
        "A QUICK DIP IN A DIRTY POOL"
        <br>
        That's all it takes to expose you to all kinds of nasty microbes. What you _______ 
        know before you jump in!
        As temperatures soar, the cool blue waters of a swimming pool can seem pretty inviting. 
        _______ perhaps you should look twice before you take that dip. Thousands of Americans 
        _______ get sick this season from the unsanitary condition of their pool water, according 
        to the Centers for Disease Control. The last thing you want to think about when you're 
        swimming is what tiny creatures might be swimming beside you. But the fact is that any 
        pool _______ be contaminated with parasites and bacteria. _______ you're not careful, 
        you could find yourself in the emergency room with a badly upset stomach!"
        <br>
        (From "A Quick Dip in a Dirty Pool", Personal Time, Your Health, TIME, July 23, 2001, page 62)
        <br>
        Choose the correct item to fill in the gaps.
        <br>
        
        </label><br>
        <?php 
        if ($questao31 == $resp1):
            print "<br>Resposta correta! (should - but - may - can - if)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A frase onde est?? a primeira lacuna ?? ???O que voc?? deve/deveria saber antes de pular dentro.???, ou seja, as respostas poss??veis seriam ???Should???, ???Must??? e ???Shell???. J?? a segunda coluna pede uma palavra de contraste, e, entre as op????es, s?? o ???But??? se encaixaria ali, assim, a alternativa A (should - but - may - can - if) ?? a ??nica que se encaixa perfeitamente nas duas lacunas.";
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>
        
        <label> 2) Genetically modified (GM) foods are foods derived from 
        organisms whose genetic material (DNA) has been modified in a way that 
        does not occur naturally, e.g. through the introduction of a gene from 
        a different organism. Currently available GM foods stem mostly from plants, 
        but in the future foods derived from GM microorganisms or GM animals are 
        likely to be introduced on the market. Most existing genetically modified 
        crops have been developed to improve yield, through the introduction of 
        resistance to plant diseases or of increased tolerance of herbicides.
        <br>
        In the future, genetic modification could be aimed at altering the nutrient 
        content of food, reducing its allergenic potential, or improving the efficiency 
        of food production systems. All GM foods should be assessed before being allowed 
        on the market. FAO/WHO Codex guidelines exist for risk analysis of GM food. <br>
        (www.who.int) <br>
        No trecho final do primeiro par??grafo ???throughthe introduction 
        of resistance to plant diseases???, o termo em destaque equivale, em portugu??s, a:
        </label><br>
        <?php 
        if ($questao32 == $resp2):
            print "<br>Resposta correta! (Por meio de.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: No portugu??s, ???Through the??? significa ???Atrav??s???, ent??o, ???Atrav??s da introdu????o...???. Sabendo disso, agora ?? s?? escolher a alternativa que cont??m um sin??nimo de atrav??s, que ser?? ???Por meio de???. Na pr??xima voc?? j?? sabe, hein!";

        endif;
            ?>

        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 3) Which of the following sentence is INCORRECT?

        </label><br>

        <?php 
        if ($questao33 == $resp2):
            print "<br>Resposta correta! (Every things you do must be very well explained.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A letra B est?? incorreta pois quando ?? usada a palavra ???Every???, o termo ap??s ?? usado no singular. Assim, nem ???TODA QUEST??ES??? est?? errada, mas ???TODA QUEST??O??? tem uma solu????o!";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 4) Looking at today's dictionaries <br>
        
        Change is not something that people tend to associate with 
        dictionaries. Changing these highly labor-intensive products 
        is not to be undertaken lightly. The heavy cost of dictionary 
        production, and the penalty to be paid for errors of judgement, 
        have made it almost impossible for any radically new dictionary 
        to 1come into being. Of 2course our dictionaries of the present 
        do look a little different from their predecessors, and do behave 
        a little better (it is becoming rarer now to find dictionaries with 
        3hermetically sealed nuggets of information coded up to defy interpretation 
        by all but the dogged few); they may even come to you on a CD-ROM rather 
        than in book form, but underneath these superficial modernizations lurks 
        the same old dictionary. Some of the more innovative may introduce a 
        few new types of information, but when it comes to setting out the 
        meanings of words, giving them definitions or equivalents in another 
        language, including examples, idioms, pronunciations, usage notes, cross 
        reference and the 4score or so of other kinds of information, 5tradition 
        rules supreme.
        <br>
        ATKINS, B.T.S.,Bilingual Dictionaries Past, Present and Future. 2002.
        <br>
        "come into being" (ref. 1) means to:
        </label><br>

        <?php 
        if ($questao34 == $resp3):
            print "<br>Resposta correta! (Start to exist."; 

        else:  print "";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) Water is life <br>
        Nearly seventy percent of the worlds fresh water is locked 
        in ice. Most of the rest is in aquifers that we are draining 
        much more quickly than the natural recharge rate. Two-thirds 
        of our water is used to grow food. With eighty-three million 
        more people on Earth each year, water demand will keep going 
        up unless we change how we use it. <br>
        Americans use about 100 gallons* of water at home each day. Millions of the worlds poorest subsist on less than five gallons. 46 percent of people on Earth do not have water piped to their homes. Women in developing countries walk an average of 3.7 miles to get water. In fifteen years, 1.8 billion people will live in regions of severe water scarcity. *1 gallon = 3,785 liters (USA)
        Adaptado de: Barbara Kingsolver, National Geographic Magazine, April 2010.
        <br>
        O segmentothe world???s poorest, presente na segunda senten??a do segundo par??grafo quer dizer:
        </label><br>
        </label><br>

        <?php 
        if ($questao35 == $resp1):
            print "<br>Resposta correta! (Os mais pobres do mundo.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 6) Frejat
        In 1985, Frejat, then guitarist for Bar??o Vermelho, hit 
        the stage wearing green and yellow clothes. It was January 
        15th, the day in which Tancredo Neves was named president 
        of Brazil. Cazuza sang "Pro Dia Nascer Feliz" with lots of 
        enthusiasm.
        <br>
        Frejat returns to the festival this year for a solo performance 
        on October 1st.
        <br>
        Fonte: Dispon??vel em: TAM. TAM nas nuvens. S??o Paulo: New Content 
        Editora, set/2011.
        <br>
        Que elemento lingu??stico do texto em ingl??s indica que Frejat j?? saiu da banda Bar??o Vermelho?
        </label><br>

        <?php 
        if ($questao36 == $resp4):
            print "<br>Resposta correta! (Solo performance.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: o ??ltimo par??grafo do texto entrega essa quest??o, nele diz, ???Frejat retorna ao festival este ano para uma apresenta????o solo no dia 1?? de outubro.??? Bem, se ?? solo, ?? sozinho, e se ?? sozinho, ?? sem banda!";
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 7) Twilight
        Twilight is a 2008 American romantic vampire film based ______ 
        Stephenie Meyer???s popular novel of the same name. It is the 
        first film in The Twilight Saga film series. This film focuses 
        on the development of the relationship between Bella Swan and 
        Edward Cullen (a vampire), and the subsequent efforts of Cullen 
        and his family to keep Swan safe ______ a coven of evil vampires.
        The project was in development for approximately 3 years ______ 
        Paramount Pictures, during which time a screen adaptation that 
        differed significantly from the novel was written. Principal 
        photography took 44 days and the film was primarily shot in Oregon.
        Twilight was theatrically released ______ November 21 2010, grossing 
        over US$392 million worldwide and became the most purchased DVD of 
        the year. The soundtrack was released in the same year. Following 
        the success of the film, New Moon and Eclipse, the next two novels 
        in the series, were produced as films the following year.
        <br>
        Adapted from Wikipedia
        <br>
        Choose the correct prepositions to fill in the gaps above.
        </label><br>
        <?php 
        if ($questao37 == $resp4):
            print "<br>Resposta correta! (on ??? from ??? at ??? on)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print print "Explica????o: aqui, o texto diz que o filme ?? baseado em Stephenie Meyer???s, e quando algo ?? baseado em uma coisa, usamos ???on???, assim, s?? a resposta D ?? correta.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 8) It was the summer that men first walked on 
        the moon. I was very young back then, but I did not believe 
        there would ever be future. I wanted to live dangerously, 
        to push myself as far as I could go, and then see what 
        happened to me when I got there. As it turned out, I 1nearly 
        did not make it. Little by little, I saw my money dwindle 
        to zero; I lost my apartment; I wound up living in the 
        streets. If not for a girl named Kitty Wu, I probably 
        2would have starved to death. 3I had met her by chance 
        only a short time before, but 4eventually I came to see 
        that chance as a form of readiness a way of saving myself 
        through the minds of others. That was the first part. From 
        then on, strange things happened to me. I took the job with 
        the old man in the wheelchair. I found out who my father was. 
        I walked across the desert from Utah to California. That 
        was a long time ago, of course, but I remeber them as the 
        beginning of my life.
        <br>
        AUSTER, Paul. Moon Palace. Chatham, Kent: Faber & Faber, 1989. p. 1.
        <br>
        Complete the sentence below with the best alternative.
        <br>
        Man walked .................... the moon  .................... the first time  .................... 1969. 
        </label><br>

        <?php 
        if ($questao38 == $resp1):
            print "<br>Resposta correta! (on - for - in.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: man walked ON the moon FOR the first time IN 1969
        <br>O homem caminhou SOBRE a lua POR/PELA primeira vez EM 1969!
        
        ";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 9) Answer question(s) according to text.
        Bag your Bags, Bring 'em Back

        The best way to recycle your plastic bags and film is to bring them back 
        to a store that collects them for recycling. Just stuff them clean and dry 
        into a single plastic bag, tie it up, and drop it into a plastic bag 
        collection container found at the retail partners. Note: The stores listed 
        below have partnered with King County to promote the Bag Your Bag campaign. 
        There may be other stores not listed that accept plastic bags for recycling.
        1Plastic bags and film collected at grocery stores stay cleaner and are easier 
        for recycling facilities to process than bags placed in your home recycling 
        collection bin. The bags are turned into new products like decking, benches, 
        playground structures, and new plastic bags. And remember to bring along your 
        reusable bags when you shop. <br>
        The Bag your Bags, Bring 'em Back campaign is a partnership between the King 
        County Solid Waste Division and local grocery stores to show the best way to 
        recycle plastic bags. <br>
        (Retrieved and adapted from http://your.kingcounty.gov/solidwaste/garbage-recycling/bag-your-bags.asp. Access on September 28th, 2014)
        <br>
        In the title of the campaign, ???Bag your Bags, Bring ???em Back???, the words in bold are respectively classified as:
        </label><br>
        </label><br>

        <?php 
        if ($questao39 == $resp1):
            print "<br>Resposta correta! (Verb and noun.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A tradu????o ?? ???Ensacole??? suas sacolas e as traga de volta. O primeiro Bag ?? um verbo no imperativo(???empacote, ???ensacole??????), j?? o segundo bag, ?? um substantivo, ???sacolas???, assim, os classificamos, respectivamente, como verbo e substantivo.
        ";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 10) Obama Criticizes Congress on Housing Market <br>
        U.S. President Barack Obama has called out the Congress, especially Republicans, for not 
        acting on proposals aimed at saving homeowners thousands of dollars.
        <br>
        During Saturday???s weekly address, Obama said Congress has delayed taking action on a plan 
        he sent them in February that he says would save homeowners $3,000 a year by refinancing their 
        mortgages at a lower interest rate. [...]
        <br>
        President Obama and Republican presidential candidate Mitt Romney face off Wednesday in the 
        first of three debates ahead of elections on November 6.
        <br>
        Voa News, September 29, 2012. (adapted) http://www.voanews.com.
        <br>
        Em ???U.S. President Barack Obama has called out the Congress??? (1?? par??grafo), o tempo verbal ??
        </label><br>
        <?php 
        if ($questao40 == $resp1):
            print "<br>Resposta correta! (Present perfect continuous.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: O auxiliar do Present Perct ?? o has/have seguido do partic??pio passado do verbo principal. ???Obama has called??? segue essa estrutura, logo, Presente Perfec!
        ";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 11) Sleeping on stilts in the Amazon
        As 75-year-old villager Ant??nio Gomes told us stories of growing up in Boca do Mamirau??, 
        a tiny settlement in the northern Amazon rainforest, I tried to ignore the tiny blue flies 
        biting through my trousers. Despite my interest in hearing how locals survive in this remote 
        part of the Brazilian rainforest, now a part of the Mamirau?? Sustainable Development Reserve, 
        I was grateful to escape when he finished, finding refuge in one of the tall wooden houses.
        The houses hover some 3m above the ground. They are not unusual: almost everything in the Mamirau?? 
        reserve is on stilts, even the chicken coop. It has to be. Although much of Brazil is currently 
        suffering one of the worst droughts in decades, this part of the Amazon is almost completely 
        flooded for the six-month wet season. By April, the end of the rainy season, the river rises 
        up to 10m high and overflows its banks. As a result, all living things in the forest, including 
        locals, must adopt an amphibious lifestyle. Even the jaguars have learned to adapt by living in 
        tree branches when the floods arrive.
        <br>
        Only 1,000 tourists per year are allowed to visit Mamirau??, which, at 57,000sqkm, is 
        the largest wildlife reserve in the country. Created in 1984 to save the once-endangered uakari monkey, the reserve is the most carefully managed and protected part of the Amazon ??? and is also home to what many consider Brazil???s most successful sustainable tourist resort, the Uakari Floating Lodge. ???If [the reserve] had not been created,??? guide Francisco Nogeuira said, ???the rivers and lakes would be empty of fish, and who knows how many trees would remain today?"
        <br>
        In the last paragraph, it is possible to find sentences in:
        </label><br>
        </label><br>

        <?php 
        if ($questao41 == $resp1):
            print "<br>Resposta correta! (Comparative of equality.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Considerando que a maior intensidade luminosa ?? alcan??ada por um ??ngulo de 90??, cujo seno vale 1, quando o ??ngulo for de 30?? o seno ser?? de 1/2, logo quando multiplicar por k, haver?? uma redu????o em 50%.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>
      
        <label> 12) A Tribute to Martin Luther King, Jr. <br>
        Mary Mich?? <br>
        Chorus: <br>
        <br>
        Martin Luther King, you make my spirit sing. <br>
        You mean so much to me, 'cause you taught us how to be free. <br>
        <br>
        You loved everybody black or white,<br>
        And you taught us it's no good to fight,<br>
        But just to stand up for what's right,<br>
        And let your love shine like a light.<br>
        <br>
        You bravely walked the streets of this land.<br>
        You marched with others, hand in hand.<br>
        You taught us that we all should stand,<br>
        Together, for equality in this land.<br>
        <br>
        You spoke of justice loud and long,<br>
        With patience and love you fought against wrong,<br>
        As brothers and sisters we'll be strong,<br>
        And so to you we give this song.<br>
        Dispon??vel em:Acesso em:18 maio 2005.<br>

        Com base no texto, verifica-se que
        </label><br>
        

        <?php 
        if ($questao42 == $resp4):
            print "<br>Resposta correta! (Os valores pregados por Martin Luther King Jr. devem ser perseguidos por todos."; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

     
        <label> 13) Saudi Arabia ends gender segregation in restaurants <br>

Saudi Arabia will no longer require restaurants to have separate entrances segregated 
by sex, the government says. Previously, it was mandatory to have one entrance for families 
and women, and another for men on their own. <br>

The restrictions had already been quietly eased in practice, with many restaurants, cafes 
and other meeting places no longer enforcing segregation. A series of sweeping social reforms 
in Saudi Arabia has been accompanied by an intensified crackdown on dissent. <br>

Earlier this year, a royal decree allowed Saudi women to travel abroad without a male guardian's 
permission, and in 2018 the Gulf kingdom ended a decades-long ban on female drivers. <br>

But activists complain that many laws discriminatory against women remain in place. And several 
prominent women's rights advocates have been arrested even as the government has made reforms. <br>

On Sunday, the Saudi ministry of municipalities said that restaurants would no longer need to maintain 
sex-segregated entrances. Instead it would be left up to businesses to decide. Until now, inside restaurants, 
families and women were usually cut off and separated from men on their own by screens. <br>

Fonte: https://www.bbc.com/news/world-middle-east-50708384_editado <br>

???The restrictions???, ???Saudi women??? and ???families and women were??? grifados no texto podem ser substitu??dos pelos seguintes pronomes:
</label><br>
    
        <?php 
        if ($questao43 == $resp1):
            print "<br>Resposta correta! (They; them; they.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>


        <label> 14) Assinale a alternativa que preenche corretamente as lacunas:
        <br>
        I _______ you as soon as my work _______.

        </label><br>

        <?php 
        if ($questao44 == $resp1):
            print "<br>Resposta correta! (Will call..... is finished.)"; 

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

        
        <label> 15) Everyday conversational narratives of personal 
        experience might be regarded as the country 3cousins of more well-wrought 
        narratives. The work of archaeologist Nicholas Toth revolutionized the 
        understanding of Stone Age tools. Prior to Toth???s studies, the received 
        perspective was that early hominids chipped a cobble in such a way that it 
        could be used 1as a pick or a hand ax. Researchers considered the splintered 
        flakes as waste products and examined them for information about techniques 
        used to shape the stone core tool. While others were analyzing the 
        morphological shapes and cognitive correlates of the 4chipped cores, 
        Toth, in a radical turnabout, discovered that the flakes were the primary 
        tools and that the large stone was an incidental by-product, possibly a 
        secondary tool. The flakes 5turned out to be ???extremely effective cutting tools??? 
        for animals, wood, 6hides, and other work. We posit that, like stone flakes, 
        mundane conversational narratives of personal experience constitute the 
        prototype of narrative activity rather than the 2flawed by-product of more 
        artful and planned narrative discourse. <br>
        OCHS, E. & CAPPS, L. (2001)Living Narrative ??? creating lives in everyday 
        storytelling.Harvard University Press, England, p.3. <br> <br>

        Glossary:
        Chip ??? small piece of something, like wood or glass, mainly when it has broken off something.
        Cobble ??? small round-shaped stone; cobblestones.
        Well-wrought ??? skillfully shaped or decorated. <br> <br>

        O termo ???as??? ?? empregado com o mesmo sentido em ???could be used as a pick??? (ref. 1) e em:
        </label><br>

        <?php 
        if ($questao45 == $resp2):
            print "<br>Resposta correta! (She works in a school as a pedagogical coordinator.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: ???Pode ser usado como...???, esse ???as???, tem sentido de ???fun????o de???, ???papel de???, e a ??nica frase que encontramos com o as nesse sentido ?? ???She works in a school as a pedagogical coordinator???, ???ela trabalha em uma escola como coordenadora pedag??gica???!
        ";

        endif;
            ?>
            <hr>
            <br><br>
            LINKS SUGERIDOS <br><br>
LINGUA PORTUGUESA<BR>
Morfologia <br>
https://youtu.be/ANdT9_YQjr8<br>
Sintaxe<br>
https://youtu.be/gWckGrCc33c<br>
Interpreta????o de textos<br>
https://youtu.be/RY5T63ZMgNE<br>


<br><br>LITERATURA <br>
G??nero textual<br> 
https://youtu.be/51Vj6uzsdaA<br>
G??nero l??rico <br>
https://youtu.be/UTFoCBWCdWM<br>



        </article>
        </form>