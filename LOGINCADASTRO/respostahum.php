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
        <h2 class="title title-second" style=" margin-bottom: 2%; margin-left: 45.5%">HISTÓRIA</h2>

        <label> 1)  Na segunda metade do século XIX, a capoeira era uma marca da tradição rebelde da população trabalhadora urbana na maior cidade do Império do Brasil, que reunia escravos e livres, brasileiros e imigrantes, jovens e adultos, negros e brancos. O que mais os unia era pertencer aos porões da sociedade, e na última escala do piso social estavam os escravos africanos.
</label><br>
<?php 
        if ($questao1 == $resp5):
            print "<br>Resposta correta! (As diferenças entre negros e brancos, que estruturam a sociedade brasileira, são alimentadas pelas desigualdades de classes e pelos preconceitos raciais.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Como o próprio texto ressalta, diversos grupos confraternizavam-se na prática da capoeira ligados por um simples fator: a marginalização social, ou seja, todos se sentiam excluídos socialmente.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>
        <label> 2) A Constituição Brasileira de 1988 considerou a Mata Atlântica como Patrimônio Nacional. Entretanto, grande parte de sua cobertura vegetal já havia sido destruída ao longo da história do Brasil devido :
</label><br>

<?php 
        if ($questao2 == $resp1):
            print "<br>Resposta correta! (À expansão das atividades econômicas, à instalação de rede de ferrovias e à alta densidade populacional nas regiões antes cobertas pela mata. )"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Na época, o pensamento era apenas de fazer a colonização dar certo e a fazer crescer. Não é à toa que somente a partir da conferência de Estocolmo que o mundo passou a olhar para as questões ambientais com maior racionalidade.";

        endif;
            ?>
        <br>
        </p>
        <br/>
        <hr>
        <br>
        

        <P>

        <label> 3) Quatro olhos, quatro mãos e duas cabeças formam a dupla de grafiteiros "Osgemeos". Eles cresceram pintando muros do bairro Cambuci, em São Paulo, e agora têm suas obras expostas na conceituada em Nova Iorque, prova de que o grafite feito no Brasil é apreciado por outras culturas. Muitos lugares abandonados e sem manutenção pelas prefeituras das cidades tornam-se mais agradáveis e humanos com os grafites pintados nos muros. Atualmente, instituições públicas educativas recorrem ao grafite como forma de expressão artística, o que propicia a inclusão social de adolescentes carentes, demonstrando que o grafite é considerado uma categoria de arte aceita e reconhecida pelo campo da cultura e pela sociedade local e internacional.:
</label><br>
<?php 
        if ($questao3 == $resp4):
            print "<br>Resposta correta! (Os grafiteiros podem conseguir projeção internacional, demonstrando que a arte do grafite não tem fronteiras culturais.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: O grafite também é uma arte incrível que pode ultrapassar fronteiras e ser utilizado em diversas culturas.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 4) A preocupação com a preservação do patrimônio cultural tem início no século XIX, quando o patrimônio passou a constituir interesse de vários países, surgindo a necessidade de se discutirem critérios para sua definição e gestão, através das cartas patrimoniais. Sobre as cartas patrimoniais, é correto afirmar:

        </label><br>

        <?php 
        if ($questao4 == $resp2):
            print "<br>Resposta correta! (Servem de referência mundial para que os diversos países adotem métodos e ações convergentes para a preservação do patrimônio.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: As cartas patrimoniais são documentos que contém desde conceitos a medidas para ações administrativas com diretrizes de documentação, promoção da preservação de bens.";

        endif;
            ?>     
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) A recuperação da herança cultural africana deve levar em conta o que é próprio do processo cultural: seu movimento, pluralidade e complexidade. Não se trata, portanto, do resgate ingênuo do passado nem do seu cultivo nostálgico, mas de procurar perceber o próprio rosto cultural brasileiro. O que se quer é captar seu movimento para melhor compreendê-lo historicamente.
        <br>
        Minas Gerais. Cadernos do Arquivo 1: Escravidão em Minas Gerais. Belo Horizonte: Arquivo Público Mineiro, 1988.
        <br>
        Com base no texto, a análise de manifestações culturais de origem africana, como a capoeira ou o candomblé, deve considerar que elas:

        </label><br>
        <?php 
        if ($questao5 == $resp3):
            print "<br>Resposta correta! (Derivam da interação entre valores africanos e a experiência histórica brasileira.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: De acordo com o texto, a recuperação da herança cultural africana está relacionada ao que é 'próprio do processo cultural' e como ele constrói o 'próprio rosto cultural brasileiro'. Dessa maneira, o autor do texto defende que a cultura brasileira, assim como sua experiência histórica, é formada não apenas pela cultura europeia dominante, mas também por aquelas culturas que foram secularmente negligenciadas, como a africana.";

        endif;
            ?>  
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 6) Em 29 de maio de 1829, oficiais ingleses abordaram o navio Veloz. “Os diários de bordo e mais papéis do capitão foram examinados … estavam em ordem. O número de pessoas transportadas obedecia ao que estipulava a lei…” GÓES José Roberto Pinto de Cordeiros de Deus: tráfico, demografia e política no destino dos escravos, em:Marco. A. Pamplona (org.) Escravidão, exclusão e cidadania, Rio de Janeiro, Access, 2001, p. 23
        <br>
        Com base no texto acima e em seus conhecimentos, assinale a alternativa correta sobre o tráfico de escravos, durante o Império.

        </label><br>
        <?php 
        if ($questao6 == $resp3):
            print "<br>Resposta correta! (Portugal tinha se comprometido a limitar a prática do tráfico ao sul do equador e, desde então, a Inglaterra tinha o direito de vigiar pelo cumprimento dos acordos firmados.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Trata-se da Convenção de 1817 assinada entre Portugal e Inglaterra que previa diversos mecanismos de fiscalização onde os capitães dos navios deveriam portar documentos de autorização e passaportes especiais.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 7) A escravidão marcou profundamente as relações inter-raciais no tecido social do Brasil e dos Estados Unidos. Sobre as relações inter-raciais na atualidade, é correto afirmar:

        </label><br>
        <?php 
        if ($questao7 == $resp5):
            print "<br>Resposta correta! (As diferenças entre negros e brancos, que estruturam a sociedade brasileira, são alimentadas pelas desigualdades de classes e pelos preconceitos raciais.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: As diferenças sociais entre brancos e negros que ainda hoje existem na sociedade se estruturam tanto em preconceitos raciais, quanto nas desigualdades de classe, oriundas de uma longa história de escravidão e exclusão social da população negra no Brasil. ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 8) “Congregando segmentos variados da população pobre ou dirigindo-se às áreas de mineração, onde se concentravam enormes contingentes de escravos, as vendeiras e negras de tabuleiro seriam constantemente acusadas de responsabilidade direta no desvio de jornais, contrabando de ouro e diamantes, prática de prostituição e ligação com os quilombos.”
        FIGUEIREDO, Luciano. O avesso da memória: cotidiano e trabalho da mulher em Minas Gerais no século XVIII. Rio de Janeiro: José Olympio, 1993.
        A partir da leitura e análise desse trecho, é CORRETO afirmar que a escravidão nas Minas Gerais se caracterizava por:


        </label><br>
        <?php 
        if ($questao8 == $resp3):
            print "<br>Resposta correta! (Uma grande diversidade de formas de exploração do trabalho escravo, situação característica de um contexto mais urbano.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: As mulheres deveriam se submeter aos homens em casa e deveriam ficar retidas, se guardando.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <p>
        <label> 9) Escrevendo em jornais, entrando para a política, fugindo para quilombos, montando pecúlios para comprar alforrias... Os negros brasileiros não esperaram passivamente pela libertação. Em vez disso, lutaram em diversas frentes contra a escravidão, a ponto de conseguir que, à época em que a Lei Áurea foi assinada, apenas uma pequena minoria continuasse formalmente a ser propriedade. Antes da Lei Áurea. Liberdade Conquistada.
        Revista Nossa História. Ano 2, nº 19. São Paulo: Vera Cruz, 2005.
        No que diz respeito à Abolição, o texto apresenta uma análise historiográfica realizada nas últimas décadas por historiadores, brasileiros e brasilianistas, que se diferencia das análises mais tradicionais. Essa análise recente apresenta a extinção do regime escravista, em grande parte, como resultado:

        </label><br>
        <?php 
        if ($questao9 == $resp4):
            print "<br>Resposta correta! (Da luta dos próprios negros, escravos ou libertos, que empreenderam um conjunto de ações que tornaram o regime escravista incapaz de se sustentar.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A análise recente afirma que a lei áurea foi um resultado de movimentos anteriores, de luta e resistência dos próprios negros. através da resistência dos escravos como as fugas para os quilombos, a quantidade e escravos trabalhando era menor fazendo o trabalho escravo pouco lucrativo para seus senhores.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 10) Jean Baptiste Debret- Um funcionário a passeio com sua família.
        <br>
        A pintura de Debret, datada de 1839, representa a sociedade brasileira do século XIX ao retratar:

        </label><br>
        <?php 
        if ($questao10 == $resp3):
            print "<br>Resposta correta! (Uma sociedade patriarcal e escravocrata rigidamente hierarquizada.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Trata-se de uma imagem clássica onde fica clara a hierarquia entre senhores e escravos bem como entre homens e mulheres representada por suas vestimentas e posição social na ordem do cortejo.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <p>

        <label> 11) No ano 313 d.C., o imperador Constantino reconheceu o cristianismo como a religião oficial do Império Romano, por meio do Édito de Milão. Sobre o cristianismo na Antiguidade, é INCORRETO afirmar:        <?php 
        if ($questao11 == $resp5):
            print "<br>Resposta correta! (A partir do Édito de Milão, ficou estabelecido que somente autoridades religiosas poderiam determinar os rumos da Igreja.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print " Explicação: O próprio Constantino, não era autoridade religiosa e sugeria alguns caminhos que a Igreja deveria tomar.";

        endif;
            ?>
        <br> 
        <br>
        </p>
        <hr>
        <br>
        <p>

        <label> 12) A divisão do Império Romano em dois, em Império Romano do Oriente e Império Romano do Ocidente, repercutiu nas questões religiosas do cristianismo, das quais podemos citar o Cisma do Oriente, em 1054, que resultou:
        </label><br>
        <?php 
        if ($questao12 == $resp2):
            print "<br>Resposta correta! (Na criação da Igreja Ortodoxa.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Cisma é divisão ou ruptura e o “Cisma do Oriente” foi o rompimento que ocorreu em 1054 d.C., entre as Igrejas Católicas do Oriente e a do Ocidente. Esta ruptura ou dissensão ficou chamada como o Cisma do Oriente, ou o Grande Cisma, que originou a Igreja Ortodoxa ou Igreja Católica do Oriente, separando-se da igreja Católica do Ocidente, a romana.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 13) No processo que causou o fim do Império Romano do Ocidente, os povos germânicos cumpriram um papel fundamental para o enfraquecimento do poder de Roma. Selecione a alternativa que consta o nome de um povo que NÃO teve envolvimento com as invasões germânicas:        </label><br>

        <?php 
        if ($questao13 == $resp1):
            print "<br>Resposta correta! (Etruscos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Tendo sido os Etruscos um dos 'povos fundadores' da sociedade romana e os responsáveis pelo governo e a administração do Estado Romano nos primeiros séculos de sua história, o período da Monarquia Romana.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>
        <P>

        <label> 14) ( )E a situação sempre mais ou menos / Sempre uns com mais e outros com menos / A cidade não para, a cidade só cresce / O de cima sobe e o de baixo desce / (…)” Este trecho da música do pernambucano Chico Science (1966–1997) e grupo Nação Zumbi nos remete à vida em cidades, processo que passou a ser significativo na história, a partir do 4º milênio a.C., na Mesopotâmia.
        <br>
        Sobre esse processo, é correto afirmar:
        </label><br>

        <?php 
        if ($questao14 == $resp4):
            print "<br>Resposta correta! (A sedentarização do homem, o desenvolvimento de cidades, a especialização do trabalho e uma sociedade socialmente desigual levaram à constituição de polos de poder como o Templo e o Palácio.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Com o advento da urbanização nas civilizações da antiga mesopotâmia, a agricultura permitiu que as cidades crescessem, pois ainda que existisse a necessidade da mão de obra; a quantidade de alimentos produzidos era maior, tornando possível a vida nas cidades.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 15) A construção da sociedade grega foi marcada pela montagem do escravismo enquanto modo de produção. Neste sentido, é correto afirmar:
        </label><br>
        <?php 
        if ($questao15 == $resp5):
            print "<br>Resposta correta! (Um escravo liberto mesmo liberto não podia adquirir acesso à cidadania nos Estados democráticos gregos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Na Grécia, os únicos que obtinham direitos eram os chamados cidadãos gregos, excluindo os escravos -mesmo que libertos - e estrangeiros. Havia diferença entre os escravos de Esparta (escravo público) e de Atenas.";

        endif;
            ?>

        <br>

        <img src="https://media.discordapp.net/attachments/816888490955636747/816888796536373248/download-removebg-preview.png" style="width: 2%; position: absolute; margin-left: 43%; margin-top: 15px">
        <h2 class="title title-second" style=" margin-left:40%; margin-bottom: 2%;">GEOGRAFIA</h2>

        <label>1) Os bolcheviques, ou comunistas, tentavam colocar ordem nos setores mais revolucionários, e lutavam pela formação de um governo baseados em conselhos operários ou sovietes, como eram chamados, que eram constituídos por operários, mas também por soldados e camponeses.
        Esse movimento era contrário a uma união com a burguesia. Mesmo com a mobilização, o governo foi formado em fevereiro por socialistas mais conciliador e a burguesia mais liberal.

        

        </label><br>

        <?php 
        if ($questao16 == $resp1):
            print "<br>Resposta correta! (A busca de oportunidades de trabalho e o aumento de barreiras contra a imigração.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: As migrações intensificaram-se recentemente em função de guerras e crises econômicas, em que grande parte da população deixa seu país em busca de melhores condições de vida. O aumento do número de pessoas ocupando países não nativos eleva a xenofobia, no país receptor desses imigrantes, levando muitos governantes a criarem barreiras para dificultar sua entrada. 
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 2) “O número de imigrantes que vivem nos países da Organização para a Cooperação e Desenvolvimento Econômico (OCDE) aumentou em um terço na última década, apesar da recente queda dos fluxos migratórios provocada pela crise econômica iniciada em 2008, afirma um relatório publicado pela entidade nesta segunda-feira. Segundo a OCDE, que reúne 34 países, a maioria deles ricos, cerca de 110 milhões de imigrantes viviam nos países-membros da organização em 2009/2010, o equivalente a 9% da população total”.
        BBC Brasil, 03 dez. 2012. <br>
        Em busca de melhores condições de vida, muitos imigrantes saem de países pobres em direção aos territórios de economias desenvolvidas. Essa procura intensifica-se porque nos países desenvolvidos:

        </label><br>
        <?php 
        if ($questao17 == $resp5):
            print "<br>Resposta correta! (Há uma elevada necessidade de mão de obra barata e de baixo custo.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Nos países desenvolvidos, há uma grande presença de imigrantes, que buscam melhores condições de vida e emprego. Esses imigrantes (sobretudo os ilegais) atendem à grande necessidade de mão de obra barata que esses países possuem, o que faz com que os fluxos migratórios se intensifiquem.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 3) (Ufg 2010)
        Um dos principais traços da dinâmica demográfica mundial é a migração internacional, que recria conflitos espaciais de diferentes ordens. Esse tipo de migração é explicado:
        </label><br>

        <?php 
        if ($questao18 == $resp5):
            print "<br>Resposta correta! (pelo aumento global do desemprego, que gera miséria nas nações de baixo índice de desenvolvimento humano.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "<br> Explicação: Os principais fatores de incremento à migração internacional são os socioeconômicos. Muitas pessoas de países subdesenvolvidos deslocam-se em direção aos países centrais em busca de melhores salários, mesmo que exercendo empregos de menor status ou com condições trabalhistas menos vantajosas.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 4) “Atualmente, os imigrantes marroquinos são um pouco menos de 700.000 na França. A França não é mais o país de predileção dos marroquinos, que se dirigem principalmente para a Espanha e a Itália. Uma imigração qualificada se desenvolve igualmente em direção aos Estados Unidos e ao Canadá.”

        (Le monde - Hors-série. L’Atlas de la France et des Français.Paris: Le Monde, 2014. p. 144) <br>
        Alguns traços da imigração contemporânea revelam-se nesse texto. A esse respeito pode ser dito que
        </label><br>
        <?php 
        if ($questao19 == $resp2):
            print "<br>Resposta correta! (I é um líquido puro e II é uma solução.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A questão aborda a influência da globalização nas tendências migratórias mundiais. Se antes tínhamos migrações motivadas pela colonização ou pelos antecedentes étnicos, atualmente a versatilidade de parâmetros para a escolha da migração passa a ser mais ampla e abrangente.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 5) “O desenvolvimento e o maior acesso ao transporte intercontinental, somados à facilidade de obtenção de informações sobre outros países por meio dos veículos de comunicação, impulsionaram o movimento de pessoas que buscam melhores condições de vida – nem sempre alcançadas fora do país de origem. Ao contrário do que se verifica com os fluxos econômicos, as fronteiras nacionais são reforçadas por governos de muitos países, principalmente dos desenvolvidos, para a entrada de imigrantes”.
        JOIA, A. L., GOETTEMS, A A. Geografia: leituras e interação. Vol. 02. 1º ed. São Paulo: Leya, 2013. p.275. <br>
        Um exemplo mundialmente reconhecido de restrição à entrada de imigrantes conforme mencionado no trecho acima é:
        </label><br>
        <?php 
        if ($questao20 == $resp2):
            print "<br>Resposta correta! (a construção e ampliação do Muro do México.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Uma das mais conhecidas políticas de restrição a imigrantes é a estadunidense, com a construção de um muro na fronteira dos EUA com o México.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 6) A produção agrícola é diversificada mundialmente devido às distintas condições físicas, econômicas, tecnológicas e culturais das regiões geográficas.
        A seguir, no primeiro bloco, são citados quatro sistemas agrícolas. No segundo bloco, são apresentadas as caracterizações de três deles. <br>
        Associe adequadamente as caracterizações aos respectivos sistemas.
        1.	Agricultura de jardinagem <br>
        2.	Agricultura de “plantation” <br>
        3.	Agricultura moderna <br>
        4.	Agricultura ecológica <br>
        ( ) Predomínio de pequenas ou médias propriedades especializadas na rizicultura, que adotam técnicas milenares de cultivo e utilizam mão de obra familiar. <br>
        ( ) Produção obtida em médias e grandes propriedades altamente capitalizadas, que apresentam alta produtividade em decorrência, entre outros fatores, da seleção de sementes e da mecanização intensiva. <br>
        ( ) Produção obtida em pequenas e médias propriedades com mão de obra familiar, com uso de técnicas de controle biológico e informacional, fertilizantes orgânicos e rotação de culturas. <br>
        A sequência correta de preenchimento dos parênteses, de cima para baixo, é:

        </label><br>

        <?php 
        if ($questao21 == $resp3):
            print "<br>Resposta correta! (1 - 3 - 4)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Rizicultura produção de arroz predominante no modelo jardinagem. Agricultura moderna utiliza-se de várias práticas e mecanismo de modernização com isso obtém alta produção. Agricultura ecológica ou agricultura familiar utiliza da mão de obra familiar, proposito e rotação de culturas.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 7) Na agricultura moderna, os cultivos transgênicos foram adotados para:
        </label><br>

        <?php 
        if ($questao22 == $resp2):
            print "<br>Resposta correta! (aumentar a produtividade e proporcionar maior rentabilidade ao produtor.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A modificação genética nas sementes acontece para que ela seja resistente a climas e solos não adequados originalmente a sua adaptação natural. Isso ocorre visando aumentar a produtividade e o lucro das exportações.";

        endif;
            ?>
        <br>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 8) A partir da segunda metade do século XX, vários países do mundo, inclusive o Brasil, implantaram um pacote de medidas que recebeu o nome de Revolução Verde.
        <br>
        Assinale a alternativa que indica duas características desse momento:

        </label><br>

        <?php 
        if ($questao36 == $resp1):
            print "<br>Resposta correta! (Uso intensivo de agrotóxico; aplicação de adubos e fertilizantes.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "<br> Explicação: A revolução verde foi um conjunto de inovações tecnológicas com o objetivo de ter uma maior produtividade. Dentre as características desta revolução, temos a utilização intensiva de agrotóxicos e maneiras para promover uma maior fertilização do solo, como a adubação.";
        endif;
            ?>
        <br>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 9) A “Revolução Verde”, implementada em países latino-americanos e asiáticos nos anos 60 e 70, tinha como objetivo suprimir a fome e reduzir a pobreza de amplas parcelas da população. Entretanto, as promessas de modernização tecnológica da agricultura não foram cumpridas inteiramente, o que contribuiu, decisivamente, para a geração de novos problemas e aprofundou velhas desigualdades.
        <br>
        A opção que faz referência aos efeitos da “Revolução Verde” é:

        </label><br>

        <?php 
        if ($questao24 == $resp4):
            print "<br>Resposta correta! (Reconcentração de terras, crescimento do uso de insumos industriais e agravamento da erosão dos solos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Entre os desdobramentos do processo de modernização agrícola decorrente da Revolução Verde, destacam-se o aumento da concentração de terras, o crescimento do uso de insumos agrícolas e o agravamento da erosão dos solos.";

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
        A imagem está relacionada a um sistema agrícola de subsistência típico de regiões densamente povoadas do globo terrestre.
        O sistema agrícola, a técnica utilizada e a região de ocorrência no globo são, respectivamente:
        </label><br>
        <?php 
        if ($questao25 == $resp1):
            print "<br>Resposta correta! (Jardinagem, terraceamento e Sudeste da Ásia.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: O texto e a imagem descrevem a agricultura de jardinagem, prática típica do Sudeste Asiático, que se caracteriza pela elevada mão de obra, grande produtividade e uso de técnicas tradicionais e que, quando realizada em áreas declivosas, é feita em terraços.
        ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> Na Amazônia, segundo o Instituto Nacional de Pesquisas Espaciais (INPE), nos últimos quinze anos foram desmatados 243.393 km2, o que representa 5% da área total da Amazônia Legal. Observe os três quadros, que representam três etapas do processo de ocupação da Amazônia.
        (Instituto de Pesquisa Ambiental da Amazônia – Ipam, adaptado.) <br>
        (COLOCA OTA AQUI TBM PLEASE)
        Assinale a alternativa que contém a sucessão correta destas etapas.
        </label><br>
        <?php 
        if ($questao26 == $resp1):
            print "<br>Resposta correta! (Exploração de madeira, pastagem e lavoura.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: O governo instituiu restrições para a plantação de soja devido ao potencial prejudicial que ela confere ao solo florestal. A prática pecuária não possui restrições tão severas; assim, graças ao jeitinho brasileiro, os agricultores desmatam, avançam o gado e quando não há mais nada que caracterize o solo como área florestal, plantam a Soja. (Exploração de madeira -> Pastagem -> Lavoura).
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
        if ($questao27 == $resp5):
            print "<br>Resposta correta! (Amazônico.)"; 

        else:  print "<br>Resposta errada.<br> ";
        print "Explicação: naquele que guarda as maiores extensões de floresta nativa no Brasil";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 13) Enquanto a controvérsia perdura, a ilegalidade na extração de madeira, associada a décadas de desmatamento que já destruiu 18% da Floresta Amazônica, induz o Brasil a consumir quase duas vezes mais madeira de matas nativas do que madeira plantada.
        (REALI et al. 2012, p. 34) <br>
        Sobre as características da Floresta Amazônica e as possíveis soluções para solucionar a questão de sua destruição, é correto afirmar:

        </label><br>

        <?php 
        if ($questao28 == $resp4):
            print "<br>Resposta correta! (A redução do desmatamento da floresta tem como causa principal o aumento da fiscalização nas áreas em que há indício de derrubada de árvores.)"; 

        else:  print "<br> Resposta errada.<br> <br> ";
        
        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 14) Na medida em que o Governo Provisório consolidar os progressos da Revolução, será preciso apoiá-lo; na medida em que aquele governo se tornar contrarrevolucionário, será inadmissível que se o sustente.
        Relatório de Josef Stálin à Conferência Bolchevique, em 29 de março de 1917
        No trecho do relatório citado, o autor faz referência:

        </label><br>

        <?php 
        if ($questao29 == $resp2):
            print "<br>Resposta correta! (ao governo que emergiu da Revolução de Fevereiro (março pelo calendário ocidental), que derrubou o regime czarista.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: É o governo que derrubou o regime czarista e intentou implementar uma República liberal na Rússia.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 15) AOs operários das fábricas e das usinas, assim como as tropas rebeldes, devem escolher sem demora seus representantes ao governo revolucionário provisório, que deve ser constituído sob a guarda do povo revolucionário amotinado e do exército.
        Manifesto de 27 de fevereiro de 1917, in Marc Ferro. A Revolução Russa de 1917, 1974.
        O manifesto, lançado em meio às tensões de 1917 na Rússia, revela a posição do:

        </label><br>

        <?php 
        if ($questao30 == $resp2):
            print "Resposta correta! (bolcheviques, que chamavam os operários a se mobilizarem nos sovietes.)"; 

        else:  print "Explicação: Os bolcheviques, ou comunistas, tentavam colocar ordem nos setores mais revolucionários, e lutavam pela formação de um governo baseados em conselhos operários ou sovietes, como eram chamados, que eram constituídos por operários, mas também por soldados e camponeses.
        Esse movimento era contrário a uma união com a burguesia. Mesmo com a mobilização, o governo foi formado em fevereiro por socialistas mais conciliador e a burguesia mais liberal.        
        ";

        endif;
            ?>
        <br>
        </p>
        
        <br>
        <img src="https://media.discordapp.net/attachments/816888490955636747/816888796536373248/download-removebg-preview.png" style="width: 2%; position: absolute; margin-left: 43.5%; margin-top: 15px">
        <h2 class="title title-second" style=" margin-left:42%; margin-bottom: 2%;">SOCIOLOGIA</h2>


        <P>

    
        <label> 1) O trabalho teórico de Karl Marx está fundamentado no que ele chamava de concepção materialista da história. O período em que viveu foi marcado pelas grandes mudanças causadas pelo crescente processo de industrialização dos países europeus. Marx testemunhou o crescimento das indústrias e fábricas, o inchamento dos meios urbanos e o consequente aumento vertiginoso das desigualdades sociais.
        De acordo com a concepção materialista, fundamentada por Marx e Friedrich Engels, as mudanças sociais que se passavam no decorrer da história humana estavam baseadas:

        </label><br>
        <?php 
        if ($questao32 == $resp2):
            print "<br>Resposta correta! (Na condição material dos indivíduos de uma época.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A condição material do indivíduo determinava essa questão.";

        endif;
            ?>

        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 2) Leia com atenção o texto a seguir. “Os homens fazem sua própria história, mas não a fazem como querem; não a fazem sob circunstâncias de sua escolha, e sim sob aquelas com que se defrontam diretamente, legadas e transmitidas pelo passado”.
        MARX, Karl. O Dezoito Brumário de Louis Bonaparte. São Paulo: Centauro, 2006.
        Baseado no texto, assinale a afirmação verdadeira:

        </label><br>
        <?php 
        if ($questao33 == $resp3):
            print "<br>Resposta correta! (A história é feita pelos homens dentro de condicionamentos herdados do passado.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A realidade material e a condição em que cada indivíduo se desenvolve são os pilares que suportam cada uma de suas decisões. Portanto, cada indivíduo reconhece em sua realidade, que é herdada daqueles que vieram antes dele.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 3) A análise da vida social deve ser realizada através de uma perspectiva dialética que, além de procurar estabelecer as leis de mudança que regem os fenômenos, esteja fundada no estudo dos fatos concretos, a fim de expor o movimento do real em seu conjunto.
        São autores dessa proposição:

        </label><br>
        <?php 
        if ($questao34 == $resp2):
            print "<br>Resposta correta! (Karl Marx e Friedrich Engels.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Karl Marx e Friedrich Engels elaboram leis para mudança do panorama atual, assim como está escrito no texto em “leis de mudança” onde a vida social tem como principio ser realizada através de uma perspectiva dialética ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 4) (ENEM - 2013) Na produção social que os homens realizam, eles entram em determinadas relações indispensáveis e correspondem a um estágio definido de desenvolvimento das suas forças materiais de produção. A totalidade dessas relações constitui a estrutura econômica da sociedade – fundamento real, sobre o qual se erguem as superestruturas política e jurídica, e ao qual correspondem determinadas formas de consciência social.
        MARX, K. Prefacio à crítica da economia política. In: MARX, K; ENGELS, F. Textos 3. São Paulo: Edições Socias, 1977 (adaptado).
        Para o autor, a relação entre economia e política estabelecida no sistema capitalista faz com que:

        </label><br>
        <?php 
        if ($questao35 == $resp2):
            print "<br>Resposta correta! (Karl Marx e Friedrich Engels.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Segundo Karl Marx e Friedrich Engels, o trabalho seria a expressão da vida humana, ou seja, por meio do trabalho o homem transforma a natureza e a si mesmo. Essa condição foi alterada na sociedade capitalista, em que o homem passa a explorar a força de trabalho do outro homem.";
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
            print "<br>Resposta correta! (A herança da dialética hegeliana assumida por Karl Marx.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: No pensamento de Hegel a “ideia muda a sociedade” Marx no início irá seguir com esse pensamento, mas com o passar dos seus estudos ele irá acrescentar a isso a ideia materialista que é a transformadora da sociedade, ou seja, sua ação-mas para ele a herança de Helgel está fortemente ligada a todo esse processo";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 6) América Central é uma subdivisão do continente americano, sendo composta por 20 países. Marque a alternativa que não é composta apenas por países da América Central.
        </label><br>
        <?php 
        if ($questao37 == $resp3):
            print "<br>Resposta correta! (México, Cuba, Costa Rica.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: México é do sub-continente da América do Norte.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 7) Sobre o modelo de industrialização implementado em países do Sudeste Asiático, como Coréia do Sul e Taiwan e o adotado em países da América Latina, como a Argentina, o Brasil e o México, pode-se afirmar que:
        </label><br>
        <?php 
        if ($questao38 == $resp5):
            print "<br>Resposta correta! (Nos países do Sudeste Asiático, a produção industrial visou à exportação, ao passo que, nos países latino americanos, a produção objetivou o mercado interno.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A participação do capital estrangeiro não impediu o desenvolvimento da tecnologia, enquanto na américa latina a tecnologia era importada. Os EUA tiveram papel decisivo na infraestrutura necessária para a industrialização.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 8) Para responder à questão, identifique as características comuns aos processos de industrialização do México, do Brasil e da Argentina.
        </label><br>
        <?php 
        if ($questao39 == $resp1):
            print "<br>Resposta correta! (Associação do capital estatal com o de multinacionais.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Um processo em comum desses países representa as novas etapas industriais onde a globalização e relação entre países se acentua no controle da produção mundial, por meio de grandes grupos que realizam pesquisas e inovações tecnológicas para se manter na competição oligárquica na economia mundo.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 9) (Enem 2017) México, Colômbia, Peru e Chile decidiram seguir um caminho mais curto para a integração regional. Os quatro países, em meados de 2012, criaram a Aliança do Pacífico e eliminaram, em 2013, as tarifas aduaneiras de 90% do total de produtos comercializados entre suas fronteiras.
        OLIVEIRA, E. Aliança do Pacífico se fortalece e Mercosul fica à sua sombra. O Globo, 24 fev. 2013 (adaptado).
        O acordo descrito no texto teve como objetivo econômico para os países-membros:

        </label><br>
        <?php 
        if ($questao40 == $resp2):
            print "<br>Resposta correta! (Fomentar a competitividade no mercado externo)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A Aliança do Pacífico tem como objetivo gerar uma maior integração econômica entre países reduzindo os entraves fiscais que encarecem ou dificultam a circulação de mercadorias. Assim, sem esses obstáculos, é alcançada também uma maior competitividade no mercado externo, já que o país que conseguir oferecer a produção mais barata terá vantagem significativa.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        <label> 10) O crescimento do Partido dos Trabalhadores vem-se constituindo num marco da vida nacional nas duas últimas décadas. Antes, um partido que limitava suas ações às greves operárias urbanas, o Partido dos Trabalhadores:

        </label><br>
        <?php 
        if ($questao40 == $resp5):
            print "<br>Resposta correta! (Aumentou sua atuação em várias esferas do poder, não sendo mais um partido restrito nem às suas bases sindicais nem ao sudeste do país.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Como mostra o enunciado, o partido se limitava, e hoje em dia conta com muito poder.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>
      
       <label> 11) Acerca dos quase oito anos de mandato do presidente Luís Inácio Lula da Silva no Brasil, assinale a única alternativa incorreta:
        </label><br>
        <?php 
        if ($questao41 == $resp4):
            print "<br>Resposta correta! (O governo Lula tem se mostrado abertamente favorável às pretensões do presidente venezuelano Hugo Chaves de promover a Integração Bolivariana da América Latina. Fato que comprova isso foi a ratificação da entrada do Brasil no grupo da ALAB – Aliança Latino-americana Bolivariana.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: ";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

     
        <label> 12) Foi sancionado sem vetos pelo presidente Luiz Inácio Lula da Silva, o projeto de lei que cria o Estatuto da Igualdade Racial, que tem por objetivo promover políticas públicas de igualdade de oportunidades e combate à discriminação. Entre outras medidas, o estatuto prevê, EXCETO:
        </label><br>
        <?php 
        if ($questao42 == $resp5):
            print "<br>Resposta correta! (A garantia às comunidades quilombolas do direito de preservar costumes sob a proteção do Estado, prevendo linhas especiais de financiamento público para essas comunidades.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Os quilombolas ainda seguem sem o direito legal de continuar com seus costumes através da proteção do Estado.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>


        <label> 13) “O Brasil tem compromissos políticos de ajudar o continente africano a se desenvolver. O Brasil tem dívida histórica com os africanos, e nós achamos que essa dívida não pode ser paga com dinheiro. Ela é paga com solidariedade, com gestos políticos e com ajuda.”
        (Luiz Inácio Lula da Silva – Presidente do Brasil, G1)
        Quando o presidente Lula afirma que o Brasil tem “uma dívida histórica com os africanos”, ele está se referindo a que fato registrado na história de nosso país?

        </label><br>
        <?php 
        if ($questao43 == $resp2):
            print "<br>Resposta correta! (O tráfico de africanos para o trabalho escravo no Brasil durante vários séculos até a Abolição, em 1888.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A divida histórica que o Brasil tem com o povo negro foi o processo de escravidão.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 14) No contexto da crise política que envolveu o Governo Luis Ignácio Lula da Silva em 2005, qual a solução consensual levantada pelo Congresso Nacional para reconquistar a credibilidade da sociedade civil na classe política?
        </label><br>
        <?php 
        if ($questao44 == $resp4):
            print "<br>Resposta correta! (Reforma política e maior controle do financiamento das campanhas políticas.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Reformar as composições do quadro parlamentar e controlar gatos com as campanhas para as eleições.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 15) As relações internacionais do Brasil, nessa primeira década do século XXI, apresentam, como uma de suas diretrizes,
        </label><br>
        <?php 
        if ($questao45 == $resp1):
            print "<br>Resposta correta! (o desenvolvimento de relações comerciais, culturais e políticas com países africanos, em especial Angola e Moçambique.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Foram desenvolvidas mais relações comerciais e culturais com países africanos, com ênfase em Angola e Moçambique.";

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

        
        <label> 1) Para Aristóteles o homem é um animal político, um agente moral, pois necessita da comunidade para viver feliz. Essa “felicidade pública” é privilégio de cidadãos livres, que vivem sob leis do Estado, e exclui os escravos, a quem os gregos tomavam por animais. De acordo com Aristóteles, sobre o que há de natural e instituído no modo de viver humano, é correto afirmar que:
        </label><br>
        <?php 
        if ($questao46 == $resp2):
            print "<br>Resposta correta! (a vida política, entendida como vida moral, altera a relação do homem com a natureza animal.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: segundo Aristóteles, o homem é um animal social, pois precisa da sociedade para ser feliz, precisa do outro, e isso altera sua relação com a sua própria natureza e com a natureza de forma geral. Por isso a educação e a amizade são tão importantes para Aristóteles.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 2) Aristóteles, ao definir o homem como um “animal político”, objetivou destacar que o homem é essencialmente um:
        </label><br>
        <?php 
        if ($questao47 == $resp1):
            print "<br>Resposta correta! (membro de instituição social.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A respectiva alternativa (A) está correta, pois Aristóteles diz que o homem é um ser social, e, portanto, é por natureza que ele sinta a necessidade de se socializar.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 3) Na democracia do tipo aristotélica, o povo é soberano. Todavia, existe uma restrição no conceito de liberdade, pois viver como bem entender contraria esse conceito para Aristóteles. As leis são a liberdade, a salvação, pois a partir do momento em que o povo faz o que quer, como se nada fosse impossível, a democracia se torna uma tirania. Viver como bem entender torna a democracia um individualismo, contrário ao que é o bem comum.
        Com base no texto e no referido filósofo, pode-se inferir que a democracia:

        </label><br>
        <?php 
        if ($questao48 == $resp2):
            print "<br>Resposta correta! (é soberana, mas subordinada aos órgãos de deliberação e ao dever de agir de acordo com as leis.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: No próprio texto temos 'Na democracia do tipo aristotélica, o povo é soberano […] As leis são a liberdade, a salvação' seria a aristocracia.";

        endif;
            ?>

        <br>
        </p>
        <hr>
        <br>

        <P>

        
        <label> 4) No início do século XX, a forma de organização dos sistemas produtivos que introduziu a produção em série de mercadorias e a ampliação do consumo, o controle intenso das atividades dos trabalhadores com recompensas e punições, o parcelamento das tarefas e a introdução da linha de montagem ficou conhecida como:
        </label><br>
        <?php 
        if ($questao49 == $resp5):
            print "<br>Resposta correta! (Fordismo.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Linha de montagem Fordinidmo";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>

        <label> 5) No estudo do crescimento demográfico mundial, a teoria que considera a sociedade de consumo e os impactos do consumismo denomina-se:
        </label><br>
        <?php 
        if ($questao50 == $resp3):
            print "<br>Resposta correta! (teoria ecomalthusiana, avaliando a pressão do crescimento populacional sobre os recursos naturais.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>


        <label> 6) A Igreja foi a maior e mais poderosa instituição do Ocidente medieval. No entanto, durante a Idade Média, o poder e os ensinamentos da referida instituição foram questionados. Muitos dos que questionavam a Igreja foram percebidos e tidos como hereges. Sobre os hereges e as heresias medievais, podemos afirmar:  
        </label><br>
        <?php 
        if ($questao51 == $resp1):
            print "<br>Resposta correta! (O herege medieval não era necessariamente alguém que abandonava a fé, mas sim, que passava a ter outra forma de perceber o mundo e de viver os ensinamentos de Cristo.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: era quem tinha outra percepção do mundo, sem ter a obrigação de abandonar a fé.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>


        <label> 7) Em reação aos movimentos religiosos que contestavam os dogmas oficiais do catolicismo, a Igreja Romana tomou uma série de medidas que seriam conhecidas como Contra-Reforma.
        <br>
        Com relação a esse contexto, assinale com V (verdadeiro) ou F (falso) as afirmações abaixo.
        <br>
        ( ) Uma das medidas mais drásticas adotadas em relação à reforma protestante foi a criação de uma nova instituição, a Santa Inquisição, responsável por punir e prevenir os desvios dogmáticos.
        <br>
        ( ) O Index Librorum Prohibitorum era uma lista de livros cujo conteúdo ameaçava ou contradizia as idéias oficiais da Igreja.
        <br>
        ( ) O Concílio de Trento reafirmou antigos dogmas católicos, entre os quais o de que o Papa é infalível, por representar a vontade de Deus na Terra.
        <br>
        ( ) O movimento da Contra Reforma evitou que o protestantismo se tornasse uma ameaça real em estados tradicionalmente católicos, como Espanha e Portugal.
        <br>
        A sequência correta de preenchimento dos parênteses, de cima para baixo, é:
        </label><br>
        <?php 
        if ($questao52 == $resp1):
            print "<br>Resposta correta! (F-V-V-V.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação:  A Inquisição iniciou antes da Contra reforma, combatendo a heresia dos cátaros. Foi retomada na Contra-Reforma para combater os protestantes.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>

        <label> 8) Enquanto o pensamento de Santo Agostinho representa o desenvolvimento de uma filosofia cristã inspirada em Platão, o pensamento de São Tomás reabilita a filosofia de Aristóteles - até então vista sob suspeita pela Igreja -, mostrando ser possível desenvolver uma leitura de Aristóteles compatível com a doutrina cristã. O aristotelismo de São Tomás abriu caminho para o estudo da obra aristotélica e para a legitimação do interesse pelas ciências naturais, um dos principais motivos do interesse por Aristóteles nesse período.”
        MARCONDES, D. Textos básicos de filosofia. Rio de Janeiro: Zahar, 2005
        A Igreja Católica por muito tempo impediu a divulgação da obra de Aristóteles pelo fato de a obra aristotélica:

        </label><br>
        <?php 
        if ($questao53 == $resp1):
            print "<br>Resposta correta! (valorizar a investigação científica, contrariando certos dogmas religiosos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: O pensamento aristotélico era mais difícil de ser conjugado com o pensamento cristão uma vez que valorizava a investigação científica e não pressupunha a existência de um plano superior.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
        <label> 9) A Igreja foi responsável direta por mais uma transformação, formidável e silenciosa, nos últimos séculos do
        Império: a vulgarização da cultura clássica. Essa façanha fundamental da Igreja nascente indica seu verdadeiro lugar e função na passagem para o Feudalismo. A condição de existência da civilização da Antiguidade em meio aos séculos caóticos da Idade Média foi o caráter de resistência da Igreja. Ela foi a ponte entre duas épocas.
        (Perry Anderson. Passagens da Antiguidade
        ao Feudalismo, 2016. Adaptado.)

        O excerto permite afirmar corretamente que a Igreja cristã:

        </label><br>
        <?php 
        if ($questao54 == $resp1):
            print "<br>Resposta correta! (tornou-se uma instituição do Império Romano e sobreviveu à sua derrocada quando da invasão dos
            bárbaros germânicos.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Era uma instituição financiada pelo Imperador, propagou o divino em suas artes, vulgarizando assim a cultura greco-romana e aumentando a sua influência sobre a Europa.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
        <label> 10) No século XVI, nas palavras de um estudioso, “reformar a Igreja significava reformar o mundo, porque a Igreja era o mundo”. Tendo em vista essa afirmação, é correto afirmar que:
        </label><br>
        <?php 
        if ($questao55 == $resp5):
            print "<br>Resposta correta! (o aparecimento dos anabatistas e outros grupos radicais são a prova de que a reforma extrapolou o campo da religião.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A reforma protestante também tinha cunho político, visto a intrínseca relação entre as instituições à época. A cisão com a igreja católica promoveu uma perspectiva reflexiva, uma segunda corrente para se seguir.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
        <label> 11) A charge abaixo retrata a oposição epistemológica de duas escolas filosóficas cujos iniciadores podem ser considerados, respectivamente, Francis Bacon e René Descartes. Assinale a alternativa correta.
        (AMANDA COLOCA MAIS UMA IMAGEM AQUI POR FAVOR)
        </label><br>
        <?php 
        if ($questao56 == $resp3):
            print "<br>Resposta correta! (Empirismo X Racionalismo)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: Francis Bacon é um dos principais expoentes do empirismo, enquanto que Descartes é o principal representante do racionalismo. Ambos desenvolveram métodos científicos, mas que partem de concepções epistemológicas bastante distintas. Enquanto Bacon enxerga na experiência a origem do conhecimento, Descartes considera que somente a partir da Razão pode-se conhecer alguma coisa verdadeiramente.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
        <label> 12) Sobre o Renascimento científico é correto dizer:
        </label><br>
        <?php 
        if ($questao57 == $resp4):
            print "<br>Resposta correta! (o espírito crítico do homem renascentista partiu para a Ciência experimental, a observação, a fim de obter explicações racionais para os fenômenos da natureza. )"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: nesse período, grandes progressos na Trigonometria e na Álgebra, além de se desenvolverem pesquisas sobre a refração da luz e se criarem fundamentos da óptica, mesmo assim as ciências não avançaram muito devido a influencia do cristianismo";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
        <label> 13) “Ainda que a física moderna não se possa definir como ‘galileana’ (mesmo tendo renegado Galileu), o significado epistemológico (e simbólico) de Galileu para a ciência em geral permaneceu intacto”.
        <br>
        FONTE: GINZBURG, Carlo. Mitos, emblemas, sinais: morfologia e história. São Paulo: Companhia das Letras, 1989, p. 156.
        <br>
        Partindo do comentário apresentado, é correto afirmar:
        </label><br>
        <?php 
        if ($questao58 == $resp4):
            print "<br>Resposta correta! (a ideia defendida por Galileu, segundo a qual o sol se encontrava no centro do universo, serviu como marco de afirmação do conhecimento científico.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: ";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>
        <label> 14) “Não houve preocupação com as conseqüências da revolução copernicana senão depois de Giordano Bruno ter extraído dela certas conseqüências filosóficas. Bem depressa Giordano Bruno estava a afirmar a infinidade do mundo. Rejeitava, pois, por completo, a noção de “centro do universo”. O Sol, perdido o lugar privilegiado que Copérnico lhe atribuía, era um sol entre outros sóis, uma estrela entre estrelas.”
        DELUMEAU, Jean. “A civilização do Renascimento”. Lisboa: Editorial Estampa, 1994. p. 147. [Adaptado].
        <br>
        O texto refere-se à importância dos pronunciamentos de Giordano Bruno para a constituição da noção moderna de Universo, que se relaciona com:

        </label><br>
        <?php 
        if ($questao59 == $resp3):
            print "<br>Resposta correta! (a ruptura da concepção geocêntrica do Universo.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A mais famosa tese de Giordano Bruno, segundo a qual o universo é infinito e, portanto, não tem centro, está diretamente conectada à crítica do geocentrismo feita por Nicolau Copérnico, bem como sua defesa do heliocentrismo.";

        endif;
            ?>
        <br>
        <br>
        </p>
        <br>

        <P>

        <label> 15) Que nome mais técnico podemos dar à disputa entre a “valorização do Homem e da Natureza, em oposição ao divino e ao sobrenatural da Idade Média”, respectivamente?
        </label><br>
        <?php 
        if ($questao60 == $resp4):
            print "<br>Resposta correta! (Antropocentrismo X Teocentrismo.)"; 

        else:  print "<br>Resposta errada.<br> <br> ";
        print "Explicação: A oposição é entre duas concepções de Mundo em disputa na época: o Antropocentrismo era defendido pelo Humanismo, que triunfava, contra o Teocentrismo, que se retirava.";

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
<br>HISTÓRIA<BR>
Conceitos de história<br>
https://youtu.be/G8-B3ZufQxo <br>
Mundo antigo <br>
https://youtu.be/PkIw_xCfAp0 <br>
Mundo moderno<br>
https://youtu.be/3KzSM8aCtAU<br><br>

GEOGRAFIA <br>
Geografia física<br>
https://youtu.be/yFFSphpiBuE<br>
Geografia geral<br>
https://youtu.be/Z_Pb2hWneog<br>
Geografia do Brasil<br>
https://youtu.be/SAyjjgT4iFA<br><br>

SOCIOLOGIA<br>
Principais sociólogos<br>
https://youtu.be/T_tUOFvGEWg<br>

Cultura<br>
https://youtu.be/GgmlGTFrD3g<br>
Política<br>
https://youtu.be/4i8Fkh9d4CE<br>

<br>
FILOSOFIA<br>

Filosofia antiga <br>
https://youtu.be/iI1qppWkEsw<br>
Filosofia medieval<br>
https://youtu.be/tHsTS6gLrKk <br>

Filosofia moderna/contemporânea<br>
https://youtu.be/bv9obMrnFyY<br>




    
        </article>
        </form>