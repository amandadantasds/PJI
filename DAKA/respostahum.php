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
        <title>Humanas</title>
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
        <img src="https://media.discordapp.net/attachments/816888490955636747/816888796536373248/download-removebg-preview.png" style="width: 3%; position: absolute; margin-left: 49%; margin-top: 20px">
        <h2 class="title title-second" style=" margin-bottom: 2%; margin-top: 5%;">HUMANAS</h2>
        <form class="form" method="POST"  style="font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    margin-left: 10%;
    margin-right: 10%;">

        <article>
        <P>
        <h2 class="title title-second" style=" margin-bottom: 2%; margin-left: 45.5%">HIST??RIA</h2>

        <label> 1)  Na segunda metade do s??culo XIX, a capoeira era uma marca da tradi????o rebelde da popula????o trabalhadora urbana na maior cidade do Imp??rio do Brasil, que reunia escravos e livres, brasileiros e imigrantes, jovens e adultos, negros e brancos. O que mais os unia era pertencer aos por??es da sociedade, e na ??ltima escala do piso social estavam os escravos africanos.
</label><br>
<?php 
        if ($questao1 == $resp5):
            print "<br>Resposta correta! (As diferen??as entre negros e brancos, que estruturam a sociedade brasileira, s??o alimentadas pelas desigualdades de classes e pelos preconceitos raciais.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Como o pr??prio texto ressalta, diversos grupos confraternizavam-se na pr??tica da capoeira ligados por um simples fator: a marginaliza????o social, ou seja, todos se sentiam exclu??dos socialmente.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>
        <label> 2) A Constitui????o Brasileira de 1988 considerou a Mata Atl??ntica como Patrim??nio Nacional. Entretanto, grande parte de sua cobertura vegetal j?? havia sido destru??da ao longo da hist??ria do Brasil devido :
</label><br>

<?php 
        if ($questao2 == $resp1):
            print "<br>Resposta correta! (?? expans??o das atividades econ??micas, ?? instala????o de rede de ferrovias e ?? alta densidade populacional nas regi??es antes cobertas pela mata. )"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Na ??poca, o pensamento era apenas de fazer a coloniza????o dar certo e a fazer crescer. N??o ?? ?? toa que somente a partir da confer??ncia de Estocolmo que o mundo passou a olhar para as quest??es ambientais com maior racionalidade.";

        endif;
            ?>
        <br>
        </p>
        <br/>
        <hr>
        <br>
        

        <P>

        <label> 3) Quatro olhos, quatro m??os e duas cabe??as formam a dupla de grafiteiros "Osgemeos". Eles cresceram pintando muros do bairro Cambuci, em S??o Paulo, e agora t??m suas obras expostas na conceituada em Nova Iorque, prova de que o grafite feito no Brasil ?? apreciado por outras culturas. Muitos lugares abandonados e sem manuten????o pelas prefeituras das cidades tornam-se mais agrad??veis e humanos com os grafites pintados nos muros. Atualmente, institui????es p??blicas educativas recorrem ao grafite como forma de express??o art??stica, o que propicia a inclus??o social de adolescentes carentes, demonstrando que o grafite ?? considerado uma categoria de arte aceita e reconhecida pelo campo da cultura e pela sociedade local e internacional.:
</label><br>
<?php 
        if ($questao3 == $resp4):
            print "<br>Resposta correta! (Os grafiteiros podem conseguir proje????o internacional, demonstrando que a arte do grafite n??o tem fronteiras culturais.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: O grafite tamb??m ?? uma arte incr??vel que pode ultrapassar fronteiras e ser utilizado em diversas culturas.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 4) A preocupa????o com a preserva????o do patrim??nio cultural tem in??cio no s??culo XIX, quando o patrim??nio passou a constituir interesse de v??rios pa??ses, surgindo a necessidade de se discutirem crit??rios para sua defini????o e gest??o, atrav??s das cartas patrimoniais. Sobre as cartas patrimoniais, ?? correto afirmar:

        </label><br>

        <?php 
        if ($questao4 == $resp2):
            print "<br>Resposta correta! (Servem de refer??ncia mundial para que os diversos pa??ses adotem m??todos e a????es convergentes para a preserva????o do patrim??nio.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: As cartas patrimoniais s??o documentos que cont??m desde conceitos a medidas para a????es administrativas com diretrizes de documenta????o, promo????o da preserva????o de bens.";

        endif;
            ?>     
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) A recupera????o da heran??a cultural africana deve levar em conta o que ?? pr??prio do processo cultural: seu movimento, pluralidade e complexidade. N??o se trata, portanto, do resgate ing??nuo do passado nem do seu cultivo nost??lgico, mas de procurar perceber o pr??prio rosto cultural brasileiro. O que se quer ?? captar seu movimento para melhor compreend??-lo historicamente.
        <br>
        Minas Gerais. Cadernos do Arquivo 1: Escravid??o em Minas Gerais. Belo Horizonte: Arquivo P??blico Mineiro, 1988.
        <br>
        Com base no texto, a an??lise de manifesta????es culturais de origem africana, como a capoeira ou o candombl??, deve considerar que elas:

        </label><br>
        <?php 
        if ($questao5 == $resp3):
            print "<br>Resposta correta! (Derivam da intera????o entre valores africanos e a experi??ncia hist??rica brasileira.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: De acordo com o texto, a recupera????o da heran??a cultural africana est?? relacionada ao que ?? 'pr??prio do processo cultural' e como ele constr??i o 'pr??prio rosto cultural brasileiro'. Dessa maneira, o autor do texto defende que a cultura brasileira, assim como sua experi??ncia hist??rica, ?? formada n??o apenas pela cultura europeia dominante, mas tamb??m por aquelas culturas que foram secularmente negligenciadas, como a africana.";

        endif;
            ?>  
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 6) Em 29 de maio de 1829, oficiais ingleses abordaram o navio Veloz. ???Os di??rios de bordo e mais pap??is do capit??o foram examinados ??? estavam em ordem. O n??mero de pessoas transportadas obedecia ao que estipulava a lei?????? G??ES Jos?? Roberto Pinto de Cordeiros de Deus: tr??fico, demografia e pol??tica no destino dos escravos, em:Marco. A. Pamplona (org.) Escravid??o, exclus??o e cidadania, Rio de Janeiro, Access, 2001, p. 23
        <br>
        Com base no texto acima e em seus conhecimentos, assinale a alternativa correta sobre o tr??fico de escravos, durante o Imp??rio.

        </label><br>
        <?php 
        if ($questao6 == $resp3):
            print "<br>Resposta correta! (Portugal tinha se comprometido a limitar a pr??tica do tr??fico ao sul do equador e, desde ent??o, a Inglaterra tinha o direito de vigiar pelo cumprimento dos acordos firmados.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Trata-se da Conven????o de 1817 assinada entre Portugal e Inglaterra que previa diversos mecanismos de fiscaliza????o onde os capit??es dos navios deveriam portar documentos de autoriza????o e passaportes especiais.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 7) A escravid??o marcou profundamente as rela????es inter-raciais no tecido social do Brasil e dos Estados Unidos. Sobre as rela????es inter-raciais na atualidade, ?? correto afirmar:

        </label><br>
        <?php 
        if ($questao7 == $resp5):
            print "<br>Resposta correta! (As diferen??as entre negros e brancos, que estruturam a sociedade brasileira, s??o alimentadas pelas desigualdades de classes e pelos preconceitos raciais.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: As diferen??as sociais entre brancos e negros que ainda hoje existem na sociedade se estruturam tanto em preconceitos raciais, quanto nas desigualdades de classe, oriundas de uma longa hist??ria de escravid??o e exclus??o social da popula????o negra no Brasil. ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 8) ???Congregando segmentos variados da popula????o pobre ou dirigindo-se ??s ??reas de minera????o, onde se concentravam enormes contingentes de escravos, as vendeiras e negras de tabuleiro seriam constantemente acusadas de responsabilidade direta no desvio de jornais, contrabando de ouro e diamantes, pr??tica de prostitui????o e liga????o com os quilombos.???
        FIGUEIREDO, Luciano. O avesso da mem??ria: cotidiano e trabalho da mulher em Minas Gerais no s??culo XVIII. Rio de Janeiro: Jos?? Olympio, 1993.
        A partir da leitura e an??lise desse trecho, ?? CORRETO afirmar que a escravid??o nas Minas Gerais se caracterizava por:


        </label><br>
        <?php 
        if ($questao8 == $resp3):
            print "<br>Resposta correta! (Uma grande diversidade de formas de explora????o do trabalho escravo, situa????o caracter??stica de um contexto mais urbano.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: As mulheres deveriam se submeter aos homens em casa e deveriam ficar retidas, se guardando.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <p>
        <label> 9) Escrevendo em jornais, entrando para a pol??tica, fugindo para quilombos, montando pec??lios para comprar alforrias... Os negros brasileiros n??o esperaram passivamente pela liberta????o. Em vez disso, lutaram em diversas frentes contra a escravid??o, a ponto de conseguir que, ?? ??poca em que a Lei ??urea foi assinada, apenas uma pequena minoria continuasse formalmente a ser propriedade. Antes da Lei ??urea. Liberdade Conquistada.
        Revista Nossa Hist??ria. Ano 2, n?? 19. S??o Paulo: Vera Cruz, 2005.
        No que diz respeito ?? Aboli????o, o texto apresenta uma an??lise historiogr??fica realizada nas ??ltimas d??cadas por historiadores, brasileiros e brasilianistas, que se diferencia das an??lises mais tradicionais. Essa an??lise recente apresenta a extin????o do regime escravista, em grande parte, como resultado:

        </label><br>
        <?php 
        if ($questao9 == $resp4):
            print "<br>Resposta correta! (Da luta dos pr??prios negros, escravos ou libertos, que empreenderam um conjunto de a????es que tornaram o regime escravista incapaz de se sustentar.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A an??lise recente afirma que a lei ??urea foi um resultado de movimentos anteriores, de luta e resist??ncia dos pr??prios negros. atrav??s da resist??ncia dos escravos como as fugas para os quilombos, a quantidade e escravos trabalhando era menor fazendo o trabalho escravo pouco lucrativo para seus senhores.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 10) Jean Baptiste Debret- Um funcion??rio a passeio com sua fam??lia.
        <br>
        A pintura de Debret, datada de 1839, representa a sociedade brasileira do s??culo XIX ao retratar:

        </label><br>
        <?php 
        if ($questao10 == $resp3):
            print "<br>Resposta correta! (Uma sociedade patriarcal e escravocrata rigidamente hierarquizada.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Trata-se de uma imagem cl??ssica onde fica clara a hierarquia entre senhores e escravos bem como entre homens e mulheres representada por suas vestimentas e posi????o social na ordem do cortejo.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 11) No ano 313 d.C., o imperador Constantino reconheceu o cristianismo como a religi??o oficial do Imp??rio Romano, por meio do ??dito de Mil??o. Sobre o cristianismo na Antiguidade, ?? INCORRETO afirmar:        <?php 
        if ($questao11 == $resp5):
            print "<br>Resposta correta! (A partir do ??dito de Mil??o, ficou estabelecido que somente autoridades religiosas poderiam determinar os rumos da Igreja.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print " Explica????o: O pr??prio Constantino, n??o era autoridade religiosa e sugeria alguns caminhos que a Igreja deveria tomar.";

        endif;
            ?>
        <br> 
        <br>
        </p>
        <hr>
        <br>
        <p>

        <label> 12) A divis??o do Imp??rio Romano em dois, em Imp??rio Romano do Oriente e Imp??rio Romano do Ocidente, repercutiu nas quest??es religiosas do cristianismo, das quais podemos citar o Cisma do Oriente, em 1054, que resultou:
        </label><br>
        <?php 
        if ($questao12 == $resp2):
            print "<br>Resposta correta! (Na cria????o da Igreja Ortodoxa.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Cisma ?? divis??o ou ruptura e o ???Cisma do Oriente??? foi o rompimento que ocorreu em 1054 d.C., entre as Igrejas Cat??licas do Oriente e a do Ocidente. Esta ruptura ou dissens??o ficou chamada como o Cisma do Oriente, ou o Grande Cisma, que originou a Igreja Ortodoxa ou Igreja Cat??lica do Oriente, separando-se da igreja Cat??lica do Ocidente, a romana.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 13) No processo que causou o fim do Imp??rio Romano do Ocidente, os povos germ??nicos cumpriram um papel fundamental para o enfraquecimento do poder de Roma. Selecione a alternativa que consta o nome de um povo que N??O teve envolvimento com as invas??es germ??nicas:        </label><br>

        <?php 
        if ($questao13 == $resp1):
            print "<br>Resposta correta! (Etruscos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Tendo sido os Etruscos um dos 'povos fundadores' da sociedade romana e os respons??veis pelo governo e a administra????o do Estado Romano nos primeiros s??culos de sua hist??ria, o per??odo da Monarquia Romana.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 14) ( )E a situa????o sempre mais ou menos / Sempre uns com mais e outros com menos / A cidade n??o para, a cidade s?? cresce / O de cima sobe e o de baixo desce / (???)??? Este trecho da m??sica do pernambucano Chico Science (1966???1997) e grupo Na????o Zumbi nos remete ?? vida em cidades, processo que passou a ser significativo na hist??ria, a partir do 4?? mil??nio a.C., na Mesopot??mia.
        <br>
        Sobre esse processo, ?? correto afirmar:
        </label><br>

        <?php 
        if ($questao14 == $resp4):
            print "<br>Resposta correta! (A sedentariza????o do homem, o desenvolvimento de cidades, a especializa????o do trabalho e uma sociedade socialmente desigual levaram ?? constitui????o de polos de poder como o Templo e o Pal??cio.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Com o advento da urbaniza????o nas civiliza????es da antiga mesopot??mia, a agricultura permitiu que as cidades crescessem, pois ainda que existisse a necessidade da m??o de obra; a quantidade de alimentos produzidos era maior, tornando poss??vel a vida nas cidades.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 15) A constru????o da sociedade grega foi marcada pela montagem do escravismo enquanto modo de produ????o. Neste sentido, ?? correto afirmar:
        </label><br>
        <?php 
        if ($questao15 == $resp5):
            print "<br>Resposta correta! (Um escravo liberto mesmo liberto n??o podia adquirir acesso ?? cidadania nos Estados democr??ticos gregos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Na Gr??cia, os ??nicos que obtinham direitos eram os chamados cidad??os gregos, excluindo os escravos -mesmo que libertos - e estrangeiros. Havia diferen??a entre os escravos de Esparta (escravo p??blico) e de Atenas.";

        endif;
            ?>

        <br>

        <img src="https://media.discordapp.net/attachments/816888490955636747/816888796536373248/download-removebg-preview.png" style="width: 2%; position: absolute; margin-left: 43%; margin-top: 15px">
        <h2 class="title title-second" style=" margin-left:40%; margin-bottom: 2%;">GEOGRAFIA</h2>

        <label>1) Os bolcheviques, ou comunistas, tentavam colocar ordem nos setores mais revolucion??rios, e lutavam pela forma????o de um governo baseados em conselhos oper??rios ou sovietes, como eram chamados, que eram constitu??dos por oper??rios, mas tamb??m por soldados e camponeses.
        Esse movimento era contr??rio a uma uni??o com a burguesia. Mesmo com a mobiliza????o, o governo foi formado em fevereiro por socialistas mais conciliador e a burguesia mais liberal.

        

        </label><br>

        <?php 
        if ($questao16 == $resp1):
            print "<br>Resposta correta! (A busca de oportunidades de trabalho e o aumento de barreiras contra a imigra????o.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: As migra????es intensificaram-se recentemente em fun????o de guerras e crises econ??micas, em que grande parte da popula????o deixa seu pa??s em busca de melhores condi????es de vida. O aumento do n??mero de pessoas ocupando pa??ses n??o nativos eleva a xenofobia, no pa??s receptor desses imigrantes, levando muitos governantes a criarem barreiras para dificultar sua entrada. 
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 2) ???O n??mero de imigrantes que vivem nos pa??ses da Organiza????o para a Coopera????o e Desenvolvimento Econ??mico (OCDE) aumentou em um ter??o na ??ltima d??cada, apesar da recente queda dos fluxos migrat??rios provocada pela crise econ??mica iniciada em 2008, afirma um relat??rio publicado pela entidade nesta segunda-feira. Segundo a OCDE, que re??ne 34 pa??ses, a maioria deles ricos, cerca de 110 milh??es de imigrantes viviam nos pa??ses-membros da organiza????o em 2009/2010, o equivalente a 9% da popula????o total???.
        BBC Brasil, 03 dez. 2012. <br>
        Em busca de melhores condi????es de vida, muitos imigrantes saem de pa??ses pobres em dire????o aos territ??rios de economias desenvolvidas. Essa procura intensifica-se porque nos pa??ses desenvolvidos:

        </label><br>
        <?php 
        if ($questao17 == $resp5):
            print "<br>Resposta correta! (H?? uma elevada necessidade de m??o de obra barata e de baixo custo.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Nos pa??ses desenvolvidos, h?? uma grande presen??a de imigrantes, que buscam melhores condi????es de vida e emprego. Esses imigrantes (sobretudo os ilegais) atendem ?? grande necessidade de m??o de obra barata que esses pa??ses possuem, o que faz com que os fluxos migrat??rios se intensifiquem.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 3) (Ufg 2010)
        Um dos principais tra??os da din??mica demogr??fica mundial ?? a migra????o internacional, que recria conflitos espaciais de diferentes ordens. Esse tipo de migra????o ?? explicado:
        </label><br>

        <?php 
        if ($questao18 == $resp5):
            print "<br>Resposta correta! (pelo aumento global do desemprego, que gera mis??ria nas na????es de baixo ??ndice de desenvolvimento humano.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "<br> Explica????o: Os principais fatores de incremento ?? migra????o internacional s??o os socioecon??micos. Muitas pessoas de pa??ses subdesenvolvidos deslocam-se em dire????o aos pa??ses centrais em busca de melhores sal??rios, mesmo que exercendo empregos de menor status ou com condi????es trabalhistas menos vantajosas.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 4) ???Atualmente, os imigrantes marroquinos s??o um pouco menos de 700.000 na Fran??a. A Fran??a n??o ?? mais o pa??s de predile????o dos marroquinos, que se dirigem principalmente para a Espanha e a It??lia. Uma imigra????o qualificada se desenvolve igualmente em dire????o aos Estados Unidos e ao Canad??.???

        (Le monde - Hors-s??rie. L???Atlas de la France et des Fran??ais.Paris: Le Monde, 2014. p. 144) <br>
        Alguns tra??os da imigra????o contempor??nea revelam-se nesse texto. A esse respeito pode ser dito que
        </label><br>
        <?php 
        if ($questao19 == $resp2):
            print "<br>Resposta correta! (I ?? um l??quido puro e II ?? uma solu????o.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A quest??o aborda a influ??ncia da globaliza????o nas tend??ncias migrat??rias mundiais. Se antes t??nhamos migra????es motivadas pela coloniza????o ou pelos antecedentes ??tnicos, atualmente a versatilidade de par??metros para a escolha da migra????o passa a ser mais ampla e abrangente.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) ???O desenvolvimento e o maior acesso ao transporte intercontinental, somados ?? facilidade de obten????o de informa????es sobre outros pa??ses por meio dos ve??culos de comunica????o, impulsionaram o movimento de pessoas que buscam melhores condi????es de vida ??? nem sempre alcan??adas fora do pa??s de origem. Ao contr??rio do que se verifica com os fluxos econ??micos, as fronteiras nacionais s??o refor??adas por governos de muitos pa??ses, principalmente dos desenvolvidos, para a entrada de imigrantes???.
        JOIA, A. L., GOETTEMS, A A. Geografia: leituras e intera????o. Vol. 02. 1?? ed. S??o Paulo: Leya, 2013. p.275. <br>
        Um exemplo mundialmente reconhecido de restri????o ?? entrada de imigrantes conforme mencionado no trecho acima ??:
        </label><br>
        <?php 
        if ($questao20 == $resp2):
            print "<br>Resposta correta! (a constru????o e amplia????o do Muro do M??xico.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Uma das mais conhecidas pol??ticas de restri????o a imigrantes ?? a estadunidense, com a constru????o de um muro na fronteira dos EUA com o M??xico.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 6) A produ????o agr??cola ?? diversificada mundialmente devido ??s distintas condi????es f??sicas, econ??micas, tecnol??gicas e culturais das regi??es geogr??ficas.
        A seguir, no primeiro bloco, s??o citados quatro sistemas agr??colas. No segundo bloco, s??o apresentadas as caracteriza????es de tr??s deles. <br>
        Associe adequadamente as caracteriza????es aos respectivos sistemas.
        1.	Agricultura de jardinagem <br>
        2.	Agricultura de ???plantation??? <br>
        3.	Agricultura moderna <br>
        4.	Agricultura ecol??gica <br>
        ( ) Predom??nio de pequenas ou m??dias propriedades especializadas na rizicultura, que adotam t??cnicas milenares de cultivo e utilizam m??o de obra familiar. <br>
        ( ) Produ????o obtida em m??dias e grandes propriedades altamente capitalizadas, que apresentam alta produtividade em decorr??ncia, entre outros fatores, da sele????o de sementes e da mecaniza????o intensiva. <br>
        ( ) Produ????o obtida em pequenas e m??dias propriedades com m??o de obra familiar, com uso de t??cnicas de controle biol??gico e informacional, fertilizantes org??nicos e rota????o de culturas. <br>
        A sequ??ncia correta de preenchimento dos par??nteses, de cima para baixo, ??:

        </label><br>

        <?php 
        if ($questao21 == $resp3):
            print "<br>Resposta correta! (1 - 3 - 4)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Rizicultura produ????o de arroz predominante no modelo jardinagem. Agricultura moderna utiliza-se de v??rias pr??ticas e mecanismo de moderniza????o com isso obt??m alta produ????o. Agricultura ecol??gica ou agricultura familiar utiliza da m??o de obra familiar, proposito e rota????o de culturas.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 7) Na agricultura moderna, os cultivos transg??nicos foram adotados para:
        </label><br>

        <?php 
        if ($questao22 == $resp2):
            print "<br>Resposta correta! (aumentar a produtividade e proporcionar maior rentabilidade ao produtor.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A modifica????o gen??tica nas sementes acontece para que ela seja resistente a climas e solos n??o adequados originalmente a sua adapta????o natural. Isso ocorre visando aumentar a produtividade e o lucro das exporta????es.";

        endif;
            ?>
        <br>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 8) A partir da segunda metade do s??culo XX, v??rios pa??ses do mundo, inclusive o Brasil, implantaram um pacote de medidas que recebeu o nome de Revolu????o Verde.
        <br>
        Assinale a alternativa que indica duas caracter??sticas desse momento:

        </label><br>

        <?php 
        if ($questao36 == $resp1):
            print "<br>Resposta correta! (Uso intensivo de agrot??xico; aplica????o de adubos e fertilizantes.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "<br> Explica????o: A revolu????o verde foi um conjunto de inova????es tecnol??gicas com o objetivo de ter uma maior produtividade. Dentre as caracter??sticas desta revolu????o, temos a utiliza????o intensiva de agrot??xicos e maneiras para promover uma maior fertiliza????o do solo, como a aduba????o.";
        endif;
            ?>
        <br>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 9) A ???Revolu????o Verde???, implementada em pa??ses latino-americanos e asi??ticos nos anos 60 e 70, tinha como objetivo suprimir a fome e reduzir a pobreza de amplas parcelas da popula????o. Entretanto, as promessas de moderniza????o tecnol??gica da agricultura n??o foram cumpridas inteiramente, o que contribuiu, decisivamente, para a gera????o de novos problemas e aprofundou velhas desigualdades.
        <br>
        A op????o que faz refer??ncia aos efeitos da ???Revolu????o Verde??? ??:

        </label><br>

        <?php 
        if ($questao24 == $resp4):
            print "<br>Resposta correta! (Reconcentra????o de terras, crescimento do uso de insumos industriais e agravamento da eros??o dos solos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Entre os desdobramentos do processo de moderniza????o agr??cola decorrente da Revolu????o Verde, destacam-se o aumento da concentra????o de terras, o crescimento do uso de insumos agr??colas e o agravamento da eros??o dos solos.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 10) Observe a imagem. <br>
        (AMANDA COLOCA A IMAGEM AQUI PLEASE) <br>
        A imagem est?? relacionada a um sistema agr??cola de subsist??ncia t??pico de regi??es densamente povoadas do globo terrestre.
        O sistema agr??cola, a t??cnica utilizada e a regi??o de ocorr??ncia no globo s??o, respectivamente:
        </label><br>
        <?php 
        if ($questao25 == $resp1):
            print "<br>Resposta correta! (Jardinagem, terraceamento e Sudeste da ??sia.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: O texto e a imagem descrevem a agricultura de jardinagem, pr??tica t??pica do Sudeste Asi??tico, que se caracteriza pela elevada m??o de obra, grande produtividade e uso de t??cnicas tradicionais e que, quando realizada em ??reas declivosas, ?? feita em terra??os.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> Na Amaz??nia, segundo o Instituto Nacional de Pesquisas Espaciais (INPE), nos ??ltimos quinze anos foram desmatados 243.393 km2, o que representa 5% da ??rea total da Amaz??nia Legal. Observe os tr??s quadros, que representam tr??s etapas do processo de ocupa????o da Amaz??nia.
        (Instituto de Pesquisa Ambiental da Amaz??nia ??? Ipam, adaptado.) <br>
        (COLOCA OTA AQUI TBM PLEASE)
        Assinale a alternativa que cont??m a sucess??o correta destas etapas.
        </label><br>
        <?php 
        if ($questao26 == $resp1):
            print "<br>Resposta correta! (Explora????o de madeira, pastagem e lavoura.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: O governo instituiu restri????es para a planta????o de soja devido ao potencial prejudicial que ela confere ao solo florestal. A pr??tica pecu??ria n??o possui restri????es t??o severas; assim, gra??as ao jeitinho brasileiro, os agricultores desmatam, avan??am o gado e quando n??o h?? mais nada que caracterize o solo como ??rea florestal, plantam a Soja. (Explora????o de madeira -> Pastagem -> Lavoura).
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
        if ($questao27 == $resp5):
            print "<br>Resposta correta! (Amaz??nico.)"; 

        else:  print "<br>Resposta errada.<br> ";
        print "Explica????o: naquele que guarda as maiores extens??es de floresta nativa no Brasil";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 13) Enquanto a controv??rsia perdura, a ilegalidade na extra????o de madeira, associada a d??cadas de desmatamento que j?? destruiu 18% da Floresta Amaz??nica, induz o Brasil a consumir quase duas vezes mais madeira de matas nativas do que madeira plantada.
        (REALI et al. 2012, p. 34) <br>
        Sobre as caracter??sticas da Floresta Amaz??nica e as poss??veis solu????es para solucionar a quest??o de sua destrui????o, ?? correto afirmar:

        </label><br>

        <?php 
        if ($questao28 == $resp4):
            print "<br>Resposta correta! (A redu????o do desmatamento da floresta tem como causa principal o aumento da fiscaliza????o nas ??reas em que h?? ind??cio de derrubada de ??rvores.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 14) Na medida em que o Governo Provis??rio consolidar os progressos da Revolu????o, ser?? preciso apoi??-lo; na medida em que aquele governo se tornar contrarrevolucion??rio, ser?? inadmiss??vel que se o sustente.
        Relat??rio de Josef St??lin ?? Confer??ncia Bolchevique, em 29 de mar??o de 1917
        No trecho do relat??rio citado, o autor faz refer??ncia:

        </label><br>

        <?php 
        if ($questao29 == $resp2):
            print "<br>Resposta correta! (ao governo que emergiu da Revolu????o de Fevereiro (mar??o pelo calend??rio ocidental), que derrubou o regime czarista.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: ?? o governo que derrubou o regime czarista e intentou implementar uma Rep??blica liberal na R??ssia.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 15) AOs oper??rios das f??bricas e das usinas, assim como as tropas rebeldes, devem escolher sem demora seus representantes ao governo revolucion??rio provis??rio, que deve ser constitu??do sob a guarda do povo revolucion??rio amotinado e do ex??rcito.
        Manifesto de 27 de fevereiro de 1917, in Marc Ferro. A Revolu????o Russa de 1917, 1974.
        O manifesto, lan??ado em meio ??s tens??es de 1917 na R??ssia, revela a posi????o do:

        </label><br>

        <?php 
        if ($questao30 == $resp2):
            print "Resposta correta! (bolcheviques, que chamavam os oper??rios a se mobilizarem nos sovietes.)"; 

        else:  print "Explica????o: Os bolcheviques, ou comunistas, tentavam colocar ordem nos setores mais revolucion??rios, e lutavam pela forma????o de um governo baseados em conselhos oper??rios ou sovietes, como eram chamados, que eram constitu??dos por oper??rios, mas tamb??m por soldados e camponeses.
        Esse movimento era contr??rio a uma uni??o com a burguesia. Mesmo com a mobiliza????o, o governo foi formado em fevereiro por socialistas mais conciliador e a burguesia mais liberal.        
        ";

        endif;
            ?>
        <br>
        </p>
        
        <br>
        <img src="https://media.discordapp.net/attachments/816888490955636747/816888796536373248/download-removebg-preview.png" style="width: 2%; position: absolute; margin-left: 43.5%; margin-top: 15px">
        <h2 class="title title-second" style=" margin-left:42%; margin-bottom: 2%;">SOCIOLOGIA</h2>


        <P>

    
        <label> 1) O trabalho te??rico de Karl Marx est?? fundamentado no que ele chamava de concep????o materialista da hist??ria. O per??odo em que viveu foi marcado pelas grandes mudan??as causadas pelo crescente processo de industrializa????o dos pa??ses europeus. Marx testemunhou o crescimento das ind??strias e f??bricas, o inchamento dos meios urbanos e o consequente aumento vertiginoso das desigualdades sociais.
        De acordo com a concep????o materialista, fundamentada por Marx e Friedrich Engels, as mudan??as sociais que se passavam no decorrer da hist??ria humana estavam baseadas:

        </label><br>
        <?php 
        if ($questao32 == $resp2):
            print "<br>Resposta correta! (Na condi????o material dos indiv??duos de uma ??poca.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A condi????o material do indiv??duo determinava essa quest??o.";

        endif;
            ?>

        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 2) Leia com aten????o o texto a seguir. ???Os homens fazem sua pr??pria hist??ria, mas n??o a fazem como querem; n??o a fazem sob circunst??ncias de sua escolha, e sim sob aquelas com que se defrontam diretamente, legadas e transmitidas pelo passado???.
        MARX, Karl. O Dezoito Brum??rio de Louis Bonaparte. S??o Paulo: Centauro, 2006.
        Baseado no texto, assinale a afirma????o verdadeira:

        </label><br>
        <?php 
        if ($questao33 == $resp3):
            print "<br>Resposta correta! (A hist??ria ?? feita pelos homens dentro de condicionamentos herdados do passado.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A realidade material e a condi????o em que cada indiv??duo se desenvolve s??o os pilares que suportam cada uma de suas decis??es. Portanto, cada indiv??duo reconhece em sua realidade, que ?? herdada daqueles que vieram antes dele.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 3) A an??lise da vida social deve ser realizada atrav??s de uma perspectiva dial??tica que, al??m de procurar estabelecer as leis de mudan??a que regem os fen??menos, esteja fundada no estudo dos fatos concretos, a fim de expor o movimento do real em seu conjunto.
        S??o autores dessa proposi????o:

        </label><br>
        <?php 
        if ($questao34 == $resp2):
            print "<br>Resposta correta! (Karl Marx e Friedrich Engels.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Karl Marx e Friedrich Engels elaboram leis para mudan??a do panorama atual, assim como est?? escrito no texto em ???leis de mudan??a??? onde a vida social tem como principio ser realizada atrav??s de uma perspectiva dial??tica ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 4) (ENEM - 2013) Na produ????o social que os homens realizam, eles entram em determinadas rela????es indispens??veis e correspondem a um est??gio definido de desenvolvimento das suas for??as materiais de produ????o. A totalidade dessas rela????es constitui a estrutura econ??mica da sociedade ??? fundamento real, sobre o qual se erguem as superestruturas pol??tica e jur??dica, e ao qual correspondem determinadas formas de consci??ncia social.
        MARX, K. Prefacio ?? cr??tica da economia pol??tica. In: MARX, K; ENGELS, F. Textos 3. S??o Paulo: Edi????es Socias, 1977 (adaptado).
        Para o autor, a rela????o entre economia e pol??tica estabelecida no sistema capitalista faz com que:

        </label><br>
        <?php 
        if ($questao35 == $resp2):
            print "<br>Resposta correta! (Karl Marx e Friedrich Engels.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Segundo Karl Marx e Friedrich Engels, o trabalho seria a express??o da vida humana, ou seja, por meio do trabalho o homem transforma a natureza e a si mesmo. Essa condi????o foi alterada na sociedade capitalista, em que o homem passa a explorar a for??a de trabalho do outro homem.";
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) 
        </label><br>
        <?php 
        if ($questao36 == $resp1):
            print "<br>Resposta correta! (A heran??a da dial??tica hegeliana assumida por Karl Marx.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: No pensamento de Hegel a ???ideia muda a sociedade??? Marx no in??cio ir?? seguir com esse pensamento, mas com o passar dos seus estudos ele ir?? acrescentar a isso a ideia materialista que ?? a transformadora da sociedade, ou seja, sua a????o-mas para ele a heran??a de Helgel est?? fortemente ligada a todo esse processo";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 6) Am??rica Central ?? uma subdivis??o do continente americano, sendo composta por 20 pa??ses. Marque a alternativa que n??o ?? composta apenas por pa??ses da Am??rica Central.
        </label><br>
        <?php 
        if ($questao37 == $resp3):
            print "<br>Resposta correta! (M??xico, Cuba, Costa Rica.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: M??xico ?? do sub-continente da Am??rica do Norte.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 7) Sobre o modelo de industrializa????o implementado em pa??ses do Sudeste Asi??tico, como Cor??ia do Sul e Taiwan e o adotado em pa??ses da Am??rica Latina, como a Argentina, o Brasil e o M??xico, pode-se afirmar que:
        </label><br>
        <?php 
        if ($questao38 == $resp5):
            print "<br>Resposta correta! (Nos pa??ses do Sudeste Asi??tico, a produ????o industrial visou ?? exporta????o, ao passo que, nos pa??ses latino americanos, a produ????o objetivou o mercado interno.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A participa????o do capital estrangeiro n??o impediu o desenvolvimento da tecnologia, enquanto na am??rica latina a tecnologia era importada. Os EUA tiveram papel decisivo na infraestrutura necess??ria para a industrializa????o.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 8) Para responder ?? quest??o, identifique as caracter??sticas comuns aos processos de industrializa????o do M??xico, do Brasil e da Argentina.
        </label><br>
        <?php 
        if ($questao39 == $resp1):
            print "<br>Resposta correta! (Associa????o do capital estatal com o de multinacionais.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Um processo em comum desses pa??ses representa as novas etapas industriais onde a globaliza????o e rela????o entre pa??ses se acentua no controle da produ????o mundial, por meio de grandes grupos que realizam pesquisas e inova????es tecnol??gicas para se manter na competi????o olig??rquica na economia mundo.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 9) (Enem 2017) M??xico, Col??mbia, Peru e Chile decidiram seguir um caminho mais curto para a integra????o regional. Os quatro pa??ses, em meados de 2012, criaram a Alian??a do Pac??fico e eliminaram, em 2013, as tarifas aduaneiras de 90% do total de produtos comercializados entre suas fronteiras.
        OLIVEIRA, E. Alian??a do Pac??fico se fortalece e Mercosul fica ?? sua sombra. O Globo, 24 fev. 2013 (adaptado).
        O acordo descrito no texto teve como objetivo econ??mico para os pa??ses-membros:

        </label><br>
        <?php 
        if ($questao40 == $resp2):
            print "<br>Resposta correta! (Fomentar a competitividade no mercado externo)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A Alian??a do Pac??fico tem como objetivo gerar uma maior integra????o econ??mica entre pa??ses reduzindo os entraves fiscais que encarecem ou dificultam a circula????o de mercadorias. Assim, sem esses obst??culos, ?? alcan??ada tamb??m uma maior competitividade no mercado externo, j?? que o pa??s que conseguir oferecer a produ????o mais barata ter?? vantagem significativa.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 10) O crescimento do Partido dos Trabalhadores vem-se constituindo num marco da vida nacional nas duas ??ltimas d??cadas. Antes, um partido que limitava suas a????es ??s greves oper??rias urbanas, o Partido dos Trabalhadores:

        </label><br>
        <?php 
        if ($questao40 == $resp5):
            print "<br>Resposta correta! (Aumentou sua atua????o em v??rias esferas do poder, n??o sendo mais um partido restrito nem ??s suas bases sindicais nem ao sudeste do pa??s.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Como mostra o enunciado, o partido se limitava, e hoje em dia conta com muito poder.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>
      
       <label> 11) Acerca dos quase oito anos de mandato do presidente Lu??s In??cio Lula da Silva no Brasil, assinale a ??nica alternativa incorreta:
        </label><br>
        <?php 
        if ($questao41 == $resp4):
            print "<br>Resposta correta! (O governo Lula tem se mostrado abertamente favor??vel ??s pretens??es do presidente venezuelano Hugo Chaves de promover a Integra????o Bolivariana da Am??rica Latina. Fato que comprova isso foi a ratifica????o da entrada do Brasil no grupo da ALAB ??? Alian??a Latino-americana Bolivariana.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: ";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

     
        <label> 12) Foi sancionado sem vetos pelo presidente Luiz In??cio Lula da Silva, o projeto de lei que cria o Estatuto da Igualdade Racial, que tem por objetivo promover pol??ticas p??blicas de igualdade de oportunidades e combate ?? discrimina????o. Entre outras medidas, o estatuto prev??, EXCETO:
        </label><br>
        <?php 
        if ($questao42 == $resp5):
            print "<br>Resposta correta! (A garantia ??s comunidades quilombolas do direito de preservar costumes sob a prote????o do Estado, prevendo linhas especiais de financiamento p??blico para essas comunidades.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Os quilombolas ainda seguem sem o direito legal de continuar com seus costumes atrav??s da prote????o do Estado.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>


        <label> 13) ???O Brasil tem compromissos pol??ticos de ajudar o continente africano a se desenvolver. O Brasil tem d??vida hist??rica com os africanos, e n??s achamos que essa d??vida n??o pode ser paga com dinheiro. Ela ?? paga com solidariedade, com gestos pol??ticos e com ajuda.???
        (Luiz In??cio Lula da Silva ??? Presidente do Brasil, G1)
        Quando o presidente Lula afirma que o Brasil tem ???uma d??vida hist??rica com os africanos???, ele est?? se referindo a que fato registrado na hist??ria de nosso pa??s?

        </label><br>
        <?php 
        if ($questao43 == $resp2):
            print "<br>Resposta correta! (O tr??fico de africanos para o trabalho escravo no Brasil durante v??rios s??culos at?? a Aboli????o, em 1888.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A divida hist??rica que o Brasil tem com o povo negro foi o processo de escravid??o.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 14) No contexto da crise pol??tica que envolveu o Governo Luis Ign??cio Lula da Silva em 2005, qual a solu????o consensual levantada pelo Congresso Nacional para reconquistar a credibilidade da sociedade civil na classe pol??tica?
        </label><br>
        <?php 
        if ($questao44 == $resp4):
            print "<br>Resposta correta! (Reforma pol??tica e maior controle do financiamento das campanhas pol??ticas.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Reformar as composi????es do quadro parlamentar e controlar gatos com as campanhas para as elei????es.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 15) As rela????es internacionais do Brasil, nessa primeira d??cada do s??culo XXI, apresentam, como uma de suas diretrizes,
        </label><br>
        <?php 
        if ($questao45 == $resp1):
            print "<br>Resposta correta! (o desenvolvimento de rela????es comerciais, culturais e pol??ticas com pa??ses africanos, em especial Angola e Mo??ambique.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Foram desenvolvidas mais rela????es comerciais e culturais com pa??ses africanos, com ??nfase em Angola e Mo??ambique.";

        endif;
            ?>

        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>
        </p>
        
        <br>
        <img src="https://media.discordapp.net/attachments/816888490955636747/816888796536373248/download-removebg-preview.png" style="width: 2%; position: absolute; margin-left: 43.5%; margin-top: 15px">
        <h2 class="title title-second" style=" margin-left:42%; margin-bottom: 2%;">FILOSOFIA</h2>

        <P>

        
        <label> 1) Para Arist??teles o homem ?? um animal pol??tico, um agente moral, pois necessita da comunidade para viver feliz. Essa ???felicidade p??blica??? ?? privil??gio de cidad??os livres, que vivem sob leis do Estado, e exclui os escravos, a quem os gregos tomavam por animais. De acordo com Arist??teles, sobre o que h?? de natural e institu??do no modo de viver humano, ?? correto afirmar que:
        </label><br>
        <?php 
        if ($questao46 == $resp2):
            print "<br>Resposta correta! (a vida pol??tica, entendida como vida moral, altera a rela????o do homem com a natureza animal.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: segundo Arist??teles, o homem ?? um animal social, pois precisa da sociedade para ser feliz, precisa do outro, e isso altera sua rela????o com a sua pr??pria natureza e com a natureza de forma geral. Por isso a educa????o e a amizade s??o t??o importantes para Arist??teles.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 2) Arist??teles, ao definir o homem como um ???animal pol??tico???, objetivou destacar que o homem ?? essencialmente um:
        </label><br>
        <?php 
        if ($questao47 == $resp1):
            print "<br>Resposta correta! (membro de institui????o social.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A respectiva alternativa (A) est?? correta, pois Arist??teles diz que o homem ?? um ser social, e, portanto, ?? por natureza que ele sinta a necessidade de se socializar.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 3) Na democracia do tipo aristot??lica, o povo ?? soberano. Todavia, existe uma restri????o no conceito de liberdade, pois viver como bem entender contraria esse conceito para Arist??teles. As leis s??o a liberdade, a salva????o, pois a partir do momento em que o povo faz o que quer, como se nada fosse imposs??vel, a democracia se torna uma tirania. Viver como bem entender torna a democracia um individualismo, contr??rio ao que ?? o bem comum.
        Com base no texto e no referido fil??sofo, pode-se inferir que a democracia:

        </label><br>
        <?php 
        if ($questao48 == $resp2):
            print "<br>Resposta correta! (?? soberana, mas subordinada aos ??rg??os de delibera????o e ao dever de agir de acordo com as leis.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: No pr??prio texto temos 'Na democracia do tipo aristot??lica, o povo ?? soberano [???] As leis s??o a liberdade, a salva????o' seria a aristocracia.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 4) No in??cio do s??culo XX, a forma de organiza????o dos sistemas produtivos que introduziu a produ????o em s??rie de mercadorias e a amplia????o do consumo, o controle intenso das atividades dos trabalhadores com recompensas e puni????es, o parcelamento das tarefas e a introdu????o da linha de montagem ficou conhecida como:
        </label><br>
        <?php 
        if ($questao49 == $resp5):
            print "<br>Resposta correta! (Fordismo.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Linha de montagem Fordinidmo";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>

        <label> 5) No estudo do crescimento demogr??fico mundial, a teoria que considera a sociedade de consumo e os impactos do consumismo denomina-se:
        </label><br>
        <?php 
        if ($questao50 == $resp3):
            print "<br>Resposta correta! (teoria ecomalthusiana, avaliando a press??o do crescimento populacional sobre os recursos naturais.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>


        <label> 6) A Igreja foi a maior e mais poderosa institui????o do Ocidente medieval. No entanto, durante a Idade M??dia, o poder e os ensinamentos da referida institui????o foram questionados. Muitos dos que questionavam a Igreja foram percebidos e tidos como hereges. Sobre os hereges e as heresias medievais, podemos afirmar:  
        </label><br>
        <?php 
        if ($questao51 == $resp1):
            print "<br>Resposta correta! (O herege medieval n??o era necessariamente algu??m que abandonava a f??, mas sim, que passava a ter outra forma de perceber o mundo e de viver os ensinamentos de Cristo.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: era quem tinha outra percep????o do mundo, sem ter a obriga????o de abandonar a f??.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>


        <label> 7) Em rea????o aos movimentos religiosos que contestavam os dogmas oficiais do catolicismo, a Igreja Romana tomou uma s??rie de medidas que seriam conhecidas como Contra-Reforma.
        <br>
        Com rela????o a esse contexto, assinale com V (verdadeiro) ou F (falso) as afirma????es abaixo.
        <br>
        ( ) Uma das medidas mais dr??sticas adotadas em rela????o ?? reforma protestante foi a cria????o de uma nova institui????o, a Santa Inquisi????o, respons??vel por punir e prevenir os desvios dogm??ticos.
        <br>
        ( ) O Index Librorum Prohibitorum era uma lista de livros cujo conte??do amea??ava ou contradizia as id??ias oficiais da Igreja.
        <br>
        ( ) O Conc??lio de Trento reafirmou antigos dogmas cat??licos, entre os quais o de que o Papa ?? infal??vel, por representar a vontade de Deus na Terra.
        <br>
        ( ) O movimento da Contra Reforma evitou que o protestantismo se tornasse uma amea??a real em estados tradicionalmente cat??licos, como Espanha e Portugal.
        <br>
        A sequ??ncia correta de preenchimento dos par??nteses, de cima para baixo, ??:
        </label><br>
        <?php 
        if ($questao52 == $resp1):
            print "<br>Resposta correta! (F-V-V-V.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o:  A Inquisi????o iniciou antes da Contra reforma, combatendo a heresia dos c??taros. Foi retomada na Contra-Reforma para combater os protestantes.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>

        <label> 8) Enquanto o pensamento de Santo Agostinho representa o desenvolvimento de uma filosofia crist?? inspirada em Plat??o, o pensamento de S??o Tom??s reabilita a filosofia de Arist??teles - at?? ent??o vista sob suspeita pela Igreja -, mostrando ser poss??vel desenvolver uma leitura de Arist??teles compat??vel com a doutrina crist??. O aristotelismo de S??o Tom??s abriu caminho para o estudo da obra aristot??lica e para a legitima????o do interesse pelas ci??ncias naturais, um dos principais motivos do interesse por Arist??teles nesse per??odo.???
        MARCONDES, D. Textos b??sicos de filosofia. Rio de Janeiro: Zahar, 2005
        A Igreja Cat??lica por muito tempo impediu a divulga????o da obra de Arist??teles pelo fato de a obra aristot??lica:

        </label><br>
        <?php 
        if ($questao53 == $resp1):
            print "<br>Resposta correta! (valorizar a investiga????o cient??fica, contrariando certos dogmas religiosos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: O pensamento aristot??lico era mais dif??cil de ser conjugado com o pensamento crist??o uma vez que valorizava a investiga????o cient??fica e n??o pressupunha a exist??ncia de um plano superior.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
        <label> 9) A Igreja foi respons??vel direta por mais uma transforma????o, formid??vel e silenciosa, nos ??ltimos s??culos do
        Imp??rio: a vulgariza????o da cultura cl??ssica. Essa fa??anha fundamental da Igreja nascente indica seu verdadeiro lugar e fun????o na passagem para o Feudalismo. A condi????o de exist??ncia da civiliza????o da Antiguidade em meio aos s??culos ca??ticos da Idade M??dia foi o car??ter de resist??ncia da Igreja. Ela foi a ponte entre duas ??pocas.
        (Perry Anderson. Passagens da Antiguidade
        ao Feudalismo, 2016. Adaptado.)

        O excerto permite afirmar corretamente que a Igreja crist??:

        </label><br>
        <?php 
        if ($questao54 == $resp1):
            print "<br>Resposta correta! (tornou-se uma institui????o do Imp??rio Romano e sobreviveu ?? sua derrocada quando da invas??o dos
            b??rbaros germ??nicos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Era uma institui????o financiada pelo Imperador, propagou o divino em suas artes, vulgarizando assim a cultura greco-romana e aumentando a sua influ??ncia sobre a Europa.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
        <label> 10) No s??culo XVI, nas palavras de um estudioso, ???reformar a Igreja significava reformar o mundo, porque a Igreja era o mundo???. Tendo em vista essa afirma????o, ?? correto afirmar que:
        </label><br>
        <?php 
        if ($questao55 == $resp5):
            print "<br>Resposta correta! (o aparecimento dos anabatistas e outros grupos radicais s??o a prova de que a reforma extrapolou o campo da religi??o.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A reforma protestante tamb??m tinha cunho pol??tico, visto a intr??nseca rela????o entre as institui????es ?? ??poca. A cis??o com a igreja cat??lica promoveu uma perspectiva reflexiva, uma segunda corrente para se seguir.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
        <label> 11) A charge abaixo retrata a oposi????o epistemol??gica de duas escolas filos??ficas cujos iniciadores podem ser considerados, respectivamente, Francis Bacon e Ren?? Descartes. Assinale a alternativa correta.
        (AMANDA COLOCA MAIS UMA IMAGEM AQUI POR FAVOR)
        </label><br>
        <?php 
        if ($questao56 == $resp3):
            print "<br>Resposta correta! (Empirismo X Racionalismo)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: Francis Bacon ?? um dos principais expoentes do empirismo, enquanto que Descartes ?? o principal representante do racionalismo. Ambos desenvolveram m??todos cient??ficos, mas que partem de concep????es epistemol??gicas bastante distintas. Enquanto Bacon enxerga na experi??ncia a origem do conhecimento, Descartes considera que somente a partir da Raz??o pode-se conhecer alguma coisa verdadeiramente.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
        <label> 12) Sobre o Renascimento cient??fico ?? correto dizer:
        </label><br>
        <?php 
        if ($questao57 == $resp4):
            print "<br>Resposta correta! (o esp??rito cr??tico do homem renascentista partiu para a Ci??ncia experimental, a observa????o, a fim de obter explica????es racionais para os fen??menos da natureza. )"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: nesse per??odo, grandes progressos na Trigonometria e na ??lgebra, al??m de se desenvolverem pesquisas sobre a refra????o da luz e se criarem fundamentos da ??ptica, mesmo assim as ci??ncias n??o avan??aram muito devido a influencia do cristianismo";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
        <label> 13) ???Ainda que a f??sica moderna n??o se possa definir como ???galileana??? (mesmo tendo renegado Galileu), o significado epistemol??gico (e simb??lico) de Galileu para a ci??ncia em geral permaneceu intacto???.
        <br>
        FONTE: GINZBURG, Carlo. Mitos, emblemas, sinais: morfologia e hist??ria. S??o Paulo: Companhia das Letras, 1989, p. 156.
        <br>
        Partindo do coment??rio apresentado, ?? correto afirmar:
        </label><br>
        <?php 
        if ($questao58 == $resp4):
            print "<br>Resposta correta! (a ideia defendida por Galileu, segundo a qual o sol se encontrava no centro do universo, serviu como marco de afirma????o do conhecimento cient??fico.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
        <label> 14) ???N??o houve preocupa????o com as conseq????ncias da revolu????o copernicana sen??o depois de Giordano Bruno ter extra??do dela certas conseq????ncias filos??ficas. Bem depressa Giordano Bruno estava a afirmar a infinidade do mundo. Rejeitava, pois, por completo, a no????o de ???centro do universo???. O Sol, perdido o lugar privilegiado que Cop??rnico lhe atribu??a, era um sol entre outros s??is, uma estrela entre estrelas.???
        DELUMEAU, Jean. ???A civiliza????o do Renascimento???. Lisboa: Editorial Estampa, 1994. p. 147. [Adaptado].
        <br>
        O texto refere-se ?? import??ncia dos pronunciamentos de Giordano Bruno para a constitui????o da no????o moderna de Universo, que se relaciona com:

        </label><br>
        <?php 
        if ($questao59 == $resp3):
            print "<br>Resposta correta! (a ruptura da concep????o geoc??ntrica do Universo.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A mais famosa tese de Giordano Bruno, segundo a qual o universo ?? infinito e, portanto, n??o tem centro, est?? diretamente conectada ?? cr??tica do geocentrismo feita por Nicolau Cop??rnico, bem como sua defesa do heliocentrismo.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>

        <label> 15) Que nome mais t??cnico podemos dar ?? disputa entre a ???valoriza????o do Homem e da Natureza, em oposi????o ao divino e ao sobrenatural da Idade M??dia???, respectivamente?
        </label><br>
        <?php 
        if ($questao60 == $resp4):
            print "<br>Resposta correta! (Antropocentrismo X Teocentrismo.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explica????o: A oposi????o ?? entre duas concep????es de Mundo em disputa na ??poca: o Antropocentrismo era defendido pelo Humanismo, que triunfava, contra o Teocentrismo, que se retirava.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
<hr>
        <h2 class="title" style="font-family: 'Open Sans', sans-serif;
  font-weight: bold;
  margin-top: 5%;
  margin-bottom: 5%;
  font-size: 18px";>LINKS SUGERIDOS <br>
<br>HIST??RIA<BR>
Conceitos de hist??ria<br>
https://youtu.be/G8-B3ZufQxo <br>
Mundo antigo <br>
https://youtu.be/PkIw_xCfAp0 <br>
Mundo moderno<br>
https://youtu.be/3KzSM8aCtAU<br><br>

GEOGRAFIA <br>
Geografia f??sica<br>
https://youtu.be/yFFSphpiBuE<br>
Geografia geral<br>
https://youtu.be/Z_Pb2hWneog<br>
Geografia do Brasil<br>
https://youtu.be/SAyjjgT4iFA<br><br>

SOCIOLOGIA<br>
Principais soci??logos<br>
https://youtu.be/T_tUOFvGEWg<br>

Cultura<br>
https://youtu.be/GgmlGTFrD3g<br>
Pol??tica<br>
https://youtu.be/4i8Fkh9d4CE<br>

<br>
FILOSOFIA<br>

Filosofia antiga <br>
https://youtu.be/iI1qppWkEsw<br>
Filosofia medieval<br>
https://youtu.be/tHsTS6gLrKk <br>

Filosofia moderna/contempor??nea<br>
https://youtu.be/bv9obMrnFyY<br>




    
        </article>
        </form>