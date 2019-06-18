<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Victor Hugo Siqueira Gomes">
        <meta name="generator" content="V1.0">
        
        <!-- Loads -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">
        
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/rss.min.js"></script>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd5bdg9Xro8pVpPGZbFFrFddGylCkXhRU"></script>
                
        <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Libre+Baskerville" rel="stylesheet">

        <script type="text/javascript">
            
            $('#myCarousel').carousel({
                interval:   4000
            });

            function manifesto_click() {

                $('html, body').animate({
                    scrollTop: $('#t1').offset().top
                },10000)

            }

            function abrir_social(link) {
                window.open(link, '_blank'); 
            }
            

        </script>

        <script>
            // Initialize and add the map
            function initMap() {
                // The location of Uluru
                var uluru = {lat: -25.430757, lng: -49.267961};
                // The map, centered at Uluru
                var map = new google.maps.Map(
                
                document.getElementById('map'), {
                                                    zoom: 17,
                                                    center: uluru,
                                                    styles: [
                                                        {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                                                        {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                                                        {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                                                        {
                                                          featureType: 'administrative.locality',
                                                          elementType: 'labels.text.fill',
                                                          stylers: [{color: '#d59563'}]
                                                        },
                                                        {
                                                          featureType: 'poi',
                                                          elementType: 'labels.text.fill',
                                                          stylers: [{color: '#d59563'}]
                                                        },
                                                        {
                                                          featureType: 'poi.park',
                                                          elementType: 'geometry',
                                                          stylers: [{color: '#263c3f'}]
                                                        },
                                                        {
                                                          featureType: 'poi.park',
                                                          elementType: 'labels.text.fill',
                                                          stylers: [{color: '#6b9a76'}]
                                                        },
                                                        {
                                                          featureType: 'road',
                                                          elementType: 'geometry',
                                                          stylers: [{color: '#38414e'}]
                                                        },
                                                        {
                                                          featureType: 'road',
                                                          elementType: 'geometry.stroke',
                                                          stylers: [{color: '#212a37'}]
                                                        },
                                                        {
                                                          featureType: 'road',
                                                          elementType: 'labels.text.fill',
                                                          stylers: [{color: '#9ca5b3'}]
                                                        },
                                                        {
                                                          featureType: 'road.highway',
                                                          elementType: 'geometry',
                                                          stylers: [{color: '#746855'}]
                                                        },
                                                        {
                                                          featureType: 'road.highway',
                                                          elementType: 'geometry.stroke',
                                                          stylers: [{color: '#1f2835'}]
                                                        },
                                                        {
                                                          featureType: 'road.highway',
                                                          elementType: 'labels.text.fill',
                                                          stylers: [{color: '#f3d19c'}]
                                                        },
                                                        {
                                                          featureType: 'transit',
                                                          elementType: 'geometry',
                                                          stylers: [{color: '#2f3948'}]
                                                        },
                                                        {
                                                          featureType: 'transit.station',
                                                          elementType: 'labels.text.fill',
                                                          stylers: [{color: '#d59563'}]
                                                        },
                                                        {
                                                          featureType: 'water',
                                                          elementType: 'geometry',
                                                          stylers: [{color: '#17263c'}]
                                                        },
                                                        {
                                                          featureType: 'water',
                                                          elementType: 'labels.text.fill',
                                                          stylers: [{color: '#515c6d'}]
                                                        },
                                                        {
                                                          featureType: 'water',
                                                          elementType: 'labels.text.stroke',
                                                          stylers: [{color: '#17263c'}]
                                                        }
                                                      ]
                                                });

                // The marker, positioned at Uluru
                var marker = new google.maps.Marker({position: uluru, map: map});
            }
            
            $( document ).ready(function() {
                initMap();

                // Ajsutar Tamanhos
                valor = $( "#t2-a" ).height();

                $( "#t1-a" ).height(valor);
                $( "#t3-a" ).height(valor);

            });
            
        </script>           
        
        
        <title> BRG Advogados - Cível, Administrativo e Eleitoral. </title>
        
    </head>

    <body>
        
        <!-- Topo -->


        <div class="menu-topo-brg-mobile d-md-none">
            
            <div class="row" style="width: 100%;padding-left: 10px; margin-bottom: 10px">                
                
                <div class="navbar-brg-col col-6"> 
                    <a href="/"> 
                        <img class="logo-header-mobile" src="img/Logo_big_color.svg" alt="Logo BRG"> 
                    </a> 
                </div>

                <div class="navbar-brg-col col-6" style="padding-right: 0px;">
                    <div class="btn-collaps" onclick="abre_fecha_menu();">
                        <i id="icon-menu-mobile" class="fas icon-menu-mobile fa-angle-down"></i>                    
                    </div>
                </div>

            </div>

        </div>

        <div id="menu-mobile" class="navbar-platta-mobile-menu d-md-none" style="display: none;">

            <div class="paginas-mobile" style="padding-top: 10px;">               

                <div class="text-center" style="padding-top: 10px;">                        
                    <a class="header-font" href="#">
                        HOME
                    </a>
                </div>

                <div class="text-center" style="padding-top: 10px;">                        
                    <a class="header-font" href="#">
                        SOBRE NÓS
                    </a>
                </div>

                <div class="text-center" style="padding-top: 10px;">                        
                    <a class="header-font" href="#">
                        PROFISSIONAIS
                    </a>
                </div>

                <div class="text-center" style="padding-top: 10px;">                        
                    <a class="header-font" href="#">
                        ATUAÇÃO
                    </a>
                </div>

                <div class="text-center" style="padding-top: 10px;">                        
                    <a class="header-font" href="#">
                        NOTÍCIAS
                    </a>
                </div>

                <div class="text-center" style="padding-top: 10px;">                        
                    <a class="header-font" href="#">
                        CONTATO
                    </a>
                </div>                

            </div>

            <div class="login-divider-mobile">
            </div>

            <div class="login-mobile">

                <div class="row text-center" style="padding-top: 10px;">
                    <div class="navbar-platta-menu-user col-12"> 
                        <a href="{{ url('login') }}">
                           <button type="button" class="btn btn-primary login-btn">Entrar</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <div class="d-none d-md-block">
            <div class="navbar d-flex flex-column flex-md-row align-items-center menu-topo-brg">

                <div class="container d-flex justify-content-between" style="width: 100%; margin-bottom: 15px;">
                    <div class="row alinhamento-central">
                        <div class="col-md-9">
                           <a class="p-2 menu-text-ativo" href="#">HOME</a>
                           <a class="p-2 menu-text-branco" href="#">SOBRE NÓS</a>
                           <a class="p-2 menu-text-branco" href="#">PROFISSIONAIS</a>
                           <a class="p-2 menu-text-branco" href="#">ATUAÇÃO</a>
                           <a class="p-2 menu-text-branco" href="#">NOTÍCIAS</a>
                           <a class="p-2 menu-text-branco" href="#">CONTATO</a>
                        </div>
                        <div class="menu-right col-md-3" style="text-align: right">
                           <img alt="Logo BRG" src="img/Logo_big_color.svg" width="250px;">
                        </div>
                    </div>
                </div>          
            </div>
        </div>

        <!-- Fim Topo -->

        <!-- Bunner 1 -->




    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="bunner-principal">
                            <div style="margin-top: auto; margin-bottom: auto;">        
                                <img class="brg-mobile" alt="Logo BRG" src="img/Logo_big.svg" width="600px;" style="padding-top: 40px;">
                                <h2 class="titulo-branco">Soluções jurídicas eficientes.</h2>
                                <div class="separador-tipo-1"></div>
                                <div class="brg-mobile" style="width: 600px; margin: auto;">
                                    <span class="info-branco">
                                        O BRG Advogados é um escritório especializado em Cível, Administrativo e Eleitoral, <br>
                                        que atua de maneira consultiva e contenciosa.
                                    </span>
                                </div>
                            </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="bunner-principal2">
                            <div style="margin-top: auto; margin-bottom: auto;">        
                                <img class="brg-mobile" alt="Logo BRG" src="img/Logo_big.svg" width="600px;" style="padding-top: 40px;">
                                <h2 class="titulo-branco">Soluções jurídicas eficientes.</h2>
                                <div class="separador-tipo-1"></div>
                                <div class="brg-mobile" style="width: 600px; margin: auto;">
                                    <span class="info-branco">
                                        O BRG Advogados entende que cada problema demanda uma solução específica. <br> 
                                        Venha conhecer propostas inovadoras.
                                    </span>
                                </div>
                            </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="bunner-principal3">
                            <div style="margin-top: auto; margin-bottom: auto;">        
                                <img class="brg-mobile" alt="Logo BRG" src="img/Logo_big.svg" width="600px;" style="padding-top: 40px;">
                                <h2 class="titulo-branco">Soluções jurídicas eficientes.</h2>
                                <div class="separador-tipo-1"></div>
                                <div class="brg-mobile" style="width: 600px; margin: auto;">
                                    <span class="info-branco">
                                        O BRG Advogados busca ir além da resolução de conflitos, <br>
                                        nosso propósito é antecipar soluções.
                                    </span>
                                </div>
                            </div>
                        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>








                        









        <!-- Fim Bunner 1 -->
        
        <!-- Historia -->
        
        <div class="container">

            <div class="text-center title-session-color">
                <h1>APRESENTAÇÃO</h1>
            </div>
            <div class="separador-tipo-3"></div>
            <div class="paragrafo-informative">             
                <span>
                        O BORA RECKA GOMES ADVOGADOS (BRG ADVOGADOS) nasceu da união de profissionais com experiência nos ramos público e privado. O escritório é sediado no centro da capital paranaense e atua de forma consultiva e contenciosa nas áreas do direito civil, incluindo empresarial, família e sucessões, administrativo e eleitoral. 
                </span>
            </div>

            <div class="paragrafo-quote">   
                "Quando falamos de história, temos o costume de nos refugiar no passado. É nele que se pensa encontrar o seu começo e o seu fim. Na realidade, é o inverso: a história começa hoje e continua amanhã" <span class="paragrafo-quote-autor">- D.N. Marinotis</span>
            </div>

            <div class="paragrafo-informative">             
                <span>
                        Nossos profissionais têm o objetivo de traduzir e descomplicar o ambiente legal brasileiro em benefício de seus clientes.
                        Acreditamos na valorização do contato direto e pessoal entre cliente e advogado, tornando o trabalho dinâmico e entregando satisfação
                        pelos serviços prestados. Nossa atuação especializada, inovadora e responsável proporciona excelência em soluções jurídicas.
                </span>
            </div>
            
            <div class="paragrafo-informative">             
                <span>
                    Além dos serviços de assistência jurídica, nossos profissionais têm o objetivo de fornecer aos clientes uma experiência de advocacia 
                    eficiente e responsável, de forma personalizada, acessível e transparente.          
                </span>
            </div>
            
        </div>
        
        <!-- Fim Historia -->
        
        <!-- Bunner 2 -->
        
        <div class="separator"></div>
        
        <!-- Fim Bunner 2 -->
        
        <!-- Profissionais -->
        
        <div class="campo-proficionais">
            
            <div class="container">
                <div class="text-center title-session-white">               
                    <h1>EQUIPE</h1>
                </div>
                
                <div class="separador-tipo-2"></div>

                <div class="paragrafo-informative-white">               
                    <span>
                        O maior ativo do BRG ADVOGADOS é sua equipe. Na busca de entregar soluções jurídicas objetivas, 
                        inovadoras e eficientes, o escritório possui uma equipe com formação técnica sólida e dinâmica. 
                        Ciente de que o direito está em constante transformação, o BRG ADVOGADOS preza pelo aprimoramento contínuo de seus profissionais, 
                        visando uma posição de relevância no mercado e destaque na defesa dos interesses de seus clientes.                  
                    </span>
                </div>
                
                <div class="row avatar-area">
                    
                    <div class="col-md-4 avatar-card">                      
                        <img class="avatar-card-photo" src="img/IMG_7963-3.jpg">
                        <div class="text-center avatar-card-text" id="t1-a">
                            <div class="avatar-card-name" onclick="abrir_social('http://linkedin.com/in/gabriel-bora-836560184');"> GABRIEL RICARDO BORA <i class="fab fa-linkedin link-social"></i> </div>
                            <div class="avatar-card-info"> • Advogado inscrito na Ordem dos Advogados do Brasil – Seção do Paraná - sob o nº. 65.969. </div> 
                            <div class="avatar-card-info"> • Especialista em Direito Processual Civil (2014) pelo Instituto Romeu Felipe Bacellar. </div> 
                            <div class="avatar-card-info"> • Graduado em Direito (2013) pela Faculdade de Direito de Curitiba - FDC. </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 avatar-card">                      
                        <img class="avatar-card-photo" src="img/IMG_7980-3.jpg">
                        <div class="text-center avatar-card-text" id="t2-a">
                            <div class="avatar-card-name"  onclick="abrir_social('http://linkedin.com/in/recka');"> GUILHERME RECKA DE ALMEIDA  <i class="fab fa-linkedin link-social"></i> </div>
                            <div class="avatar-card-info"> • Advogado inscrito na Ordem dos Advogados do Brasil – Seção do Paraná - sob o nº. 65.970. </div> 
                            <div class="avatar-card-info"> • Especialista em Direito Constitucional (2014) pela Fundação Escola do Ministério Público do Estado do Paraná - FEMPAR. </div> 
                            <div class="avatar-card-info"> • Graduado em Direito (2013) pela Faculdade de Direito de Curitiba - FDC.</div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 avatar-card">                      
                        <img class="avatar-card-photo" src="img/IMG_7968-3.jpg">
                        <div class="text-center avatar-card-text" id="t3-a">
                            <div class="avatar-card-name" onclick="abrir_social('http://linkedin.com/in/marcus-vinícius-siqueira-gomes-8a0643bb')"> MARCUS VINÍCIUS SIQUEIRA GOMES <i class="fab fa-linkedin link-social"></i> </div>
                            <div class="avatar-card-info"> • Advogado inscrito na Ordem dos Advogados do Brasil – Seção do Paraná - sob o nº. 86.009. </div> 
                            <div class="avatar-card-info"> • Especialista em Direito Administrativo (2018) pelo Instituto Romeu Felipe Bacellar. </div> 
                            <div class="avatar-card-info"> • Graduado em Direito (2017) pela Faculdade de Direito de Curitiba - FDC. </div>
                        </div>
                    </div>
                
                </div>
                
            </div>
        </div>
        
        <!-- Fim Profissionais -->
        
        <!-- Segmentos de Atuacao -->
        
        <div class="campo-atuacao">
            <div class="container">
                
                <div class="text-center title-session-brow">                
                    <h1>SEGMENTOS DE ATUAÇÃO</h1>
                </div>
                
                <div class="separador-tipo-3"></div>

                <div class="paragrafo-informative-brow"><span>O BRG ADVOGADOS possui atuação predominante nas áreas de direito civil, administrativo e eleitoral. Além disto, oferece serviços de apoio jurídico, tais como: correspondência, sustentações orais, audiências, diligências extrajudiciais, emissão de pareceres jurídicos etc.</span></div>
                
                <div class="row">
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 card-segmento">
                        
                        <div class="row" style="padding: 5px;">
                            
                            <div class="col-md-12 paragrafo-segmento-brow">

                                <div class="col-md-12 text-center" style="margin-top: auto; margin-bottom: auto; padding-bottom: 20px; padding-top: 10px;">
                                    <img src="img/icone_martelo.png" width="115px;">
                                </div>

                                <h4 class="simple-bold text-center">Direito Civil</h4>
                                <span>              
                                    <li> Direito bancário, operações financeiras e títulos de crédito; <br> </li>
                                    <li> Direito do consumidor; <br> </li>
                                    <li> Direito contratual e negócios jurídicos; <br> </li>
                                    <li> Direito imobiliário e direitos reais; <br> </li>
                                    <li> Propriedade industrial; <br> </li>
                                    <li> Registros públicos; <br> </li>
                                    <li> Responsabilidade civil; <br> </li>
                                    <li> Direito securitário; <br> </li>
                                    <li> Usucapião e ações possessórias; <br> </li>
                                    <li> Direito de família, sucessório e planejamento familiar. <br> </li>
                                </span>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 card-segmento">
                        <div class="row" style="padding: 5px;">
                                                
                            <div class="col-md-12 paragrafo-segmento-brow">

                                <div class="col-md-12 text-center" style="margin-top: auto; margin-bottom: auto; padding-bottom: 20px; padding-top: 10px;">
                                    <img src="img/icone_balanca.png" width="115px;">
                                </div>

                                <h4 class="simple-bold text-center">Direito Administrativo</h4>
                                <span>
                                    <li> Processos licitatórios e contratos administrativos; <br> </li>
                                    <li> Atuação perante os Tribunais de Contas; <br> </li>
                                    <li> Defesa individual e coletiva de direitos dos servidores públicos; <br> </li>
                                    <li> Processo administrativo disciplinar (PAD); <br> </li>
                                    <li> Proteção de interesse de particulares em desapropriação, tombamento, servidão etc.; <br> </li>
                                    <li> Improbidade administrativa; <br> </li>
                                    <li> Defesa dos interesses de candidatos a concursos públicos; <br> </li>
                                    <li> Responsabilidade civil do Estado; <br> </li>
                                    <li> Direito ambiental. <br> </li>
                                </span>
                            </div>                          
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 card-segmento">
                        <div class="row" style="padding: 5px;">
                                                    
                            <div class="col-md-12 paragrafo-segmento-brow">

                                <div class="col-md-12 text-center" style="margin-top: auto; margin-bottom: auto; padding-bottom: 20px; padding-top: 10px;">
                                    <img src="img/icone_urna.png" width="115px;">
                                </div>

                                <h4 class="simple-bold text-center">Direito Eleitoral</h4>
                                <span>
                                    <li> Atuação preventiva e consultiva geral; <br> </li>
                                    <li> Análise de condições de elegibilidade; <br> </li>
                                    <li> Pré-campanha e convenções; <br> </li>
                                    <li> Registro e impugnação de candidatura; <br> </li>
                                    <li> Representações eleitorais (propaganda, condutas vedadas etc.); <br> </li>
                                    <li> Investigação judicial eleitoral (abuso de poder, caixa dois etc.) e impugnações de mandato eletivo; <br> </li>
                                    <li> Prestação de contas eleitorais; <br> </li>
                                    <li> Auxílio em procedimentos internos partidários. <br> </li>
                                </span>
                            </div>                          
                        </div>
                    </div>                  
                </div>              
            </div>
        </div>
                
        <!-- Fim Segmentos de Atuacao -->
        
        <!-- Noticias -->
        <div class="campo-noticias">
            <div class="container">
                
                <div class="text-center title-session-brow">                
                    <h1>NOTICÍAS</h1>
                </div>
                
                <div class="separador-tipo-2"></div>
                
                <div class="paragrafo-informative-brow" style="text-align: center;">                
                    <span>Conheça e acompanhe os principais Tribunais e alguns dos maiores portais geradores de conteúdo jurídico do Brasil:</span>
                </div>
                
                <?php
                    // Migalhas
                    $opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
                    $context = stream_context_create($opts);
                    $header = file_get_contents('http://www.migalhas.com.br/rss/rss.xml',false,$context);


                    $xml = simplexml_load_string($header);
                    $json = json_encode($xml);
                    $array = json_decode($json,TRUE);

                    $image       = $array['channel']['image']['url'];
                    $title       = $array['channel']['item'][0]['title'];
                    $description = $array['channel']['item'][0]['description'];
                    $pubDate     = $array['channel']['item'][0]['pubDate'];
                    $link        = $array['channel']['item'][0]['link'];

                    $pubDate = strftime("%d/%m/%Y", strtotime($pubDate));

                    $msg = "  
                            <a href=\"$link\" target=\"_black\"> 
                                <div class=\"card-noticia-1 text-center\" style=\"cursor: pointer\"> 
                                                                            
                                    <br>
                                    <div class=\"row vcenter\">
                                        <div class=\"col-md-4 img-news\">
                                             <img src=\"$image\" width=\"50%\">
                                        </div>
                                        <div class=\"col-md-8 text-left text-news\" style=\"color: #212529;\">
                                            <span class=\"simple-bold\" style=\"color: #212529;\">$title</span> <br>
                                            $description
                                        </div>
                                    </div>

                                    <div class=\"text-right autor-news\" style=\"color: #212529;\">
                                        Migalhas - $pubDate
                                    </div>

                                </div>
                            </a>
                                ";

                    echo $msg;

                ?>
                
                <?php
                    // TSE
                    $opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
                    $context = stream_context_create($opts);
                    $header = file_get_contents('http://www.tse.jus.br/rss',false,$context);


                    $xml = simplexml_load_string($header);
                    $json = json_encode($xml);
                    $array = json_decode($json,TRUE);

                    $title       = $array['item'][0]['title'];
                    $description = $array['item'][0]['description'];
                    $link        = $array['item'][0]['link'];

                    $description_img = str_replace("<img src=\"", "", $description);
                    $description_img = explode("\"", $description_img);
                    $description_img = str_replace("\n", "",$description_img);
                    $description_img = str_replace(" ", "",$description_img);
                    $description_img = chop($description_img[0]);

                    $description_text = str_replace("<img src=\"", "", $description);
                    $description_text = explode("/>", $description_text);
                    $description_text = $description_text[1];
                    $description_text = strip_tags($description_text);
                    $description_text  = trim($description_text);
                    $description_text = str_replace("\n", "",$description_text);

                    if (strlen($description_text) > 300) {
                        $description_text = substr($description_text, 0, 300);
                        $description_text = $description_text . " ...";
                    }

                    $msg = "  
                            <a href=\"$link\" target=\"_black\"> 
                                <div class=\"card-noticia-2 text-center\" style=\"cursor: pointer\"> 
                                                                            
                                    <br>
                                    <div class=\"row vcenter\">
                                        <div class=\"col-md-4 img-news\">
                                             <img src=\"https://logodownload.org/wp-content/uploads/2018/07/tse-logo-4.png\" width=\"50%\">
                                        </div>
                                        <div class=\"col-md-8 text-left text-news\" style=\"color: #212529;\">
                                            <span class=\"simple-bold\" style=\"color: #212529;\">$title</span> <br>
                                            $description_text
                                        </div>
                                    </div>

                                    <div class=\"text-right autor-news\" style=\"color: #212529;\">
                                        TSE
                                    </div>

                                </div>
                            </a>
                                ";

                    echo $msg;

                ?>
                                                       

                <?php

                    $opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
                    $context = stream_context_create($opts);
                    $header = file_get_contents('https://www.conjur.com.br/rss.xml',false,$context);


                    $xml = simplexml_load_string($header);
                    $json = json_encode($xml);
                    $array = json_decode($json,TRUE);

                    $image       = "https://www.conjur.com.br/img/2014/logo.png";
                    $title       = $array['channel']['item'][0]['title'];
                    $description = $array['channel']['item'][0]['description'];
                    $pubDate     = $array['channel']['item'][0]['pubDate'];
                    $link        = $array['channel']['item'][0]['link'];

                    $pubDate = strftime("%d/%m/%Y", strtotime($pubDate));

                    $msg = "  
                            <a href=\"$link\" target=\"_black\"> 
                                <div class=\"card-noticia-1 text-center\" style=\"cursor: pointer\"> 
                                                                            
                                    <br>
                                    <div class=\"row vcenter\">
                                        <div class=\"col-md-4 img-news\">
                                             <img src=\"$image\" width=\"70%\">
                                        </div>
                                        <div class=\"col-md-8 text-left text-news\" style=\"color: #212529;\">
                                            <span class=\"simple-bold\" style=\"color: #212529;\">$title</span> <br>
                                            $description
                                        </div>
                                    </div>

                                    <div class=\"text-right autor-news\" style=\"color: #212529;\">
                                        Conjur - $pubDate
                                    </div>

                                </div>
                            </a>
                                ";

                    echo $msg;

                ?>
                
                <?php

                    $opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
                    $context = stream_context_create($opts);
                    $header = file_get_contents('http://www.stf.jus.br/portal/RSS/noticiaRss.asp',false,$context);


                    $xml = simplexml_load_string($header);
                    $json = json_encode($xml);
                    $array = json_decode($json,TRUE);
                    
                    $image       = $array['channel']['image']['url'];
                    $title       = $array['channel']['item'][0]['title'];
                    $description = $array['channel']['item'][0]['description'];
                    $pubDate     = $array['channel']['item'][0]['pubDate'];
                    $link        = $array['channel']['item'][0]['link'];


                    if (strlen($description) > 300) {
                        $description = substr($description, 0, 300);
                        $description = $description . " ...";
                    }


                    $pubDate = strftime("%d/%m/%Y", strtotime($pubDate));



                    $msg = "  
                            <a href=\"$link\" target=\"_black\"> 
                                <div class=\"card-noticia-2 text-center\" style=\"cursor: pointer\"> 
                                                                            
                                    <br>
                                    <div class=\"row vcenter\">
                                        <div class=\"col-md-4 img-news\">
                                             <img src=\"data:image/png;base64,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\" srcset=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAVgAAABACAYAAABfnm8CAAAAAXNSR0IArs4c6QAAQABJREFUeAHtnQlgXNV57787q0aj1Vq82/KOsY3BBjs2EMxmcFizCNqsNElJ0pY0pAlkaRvx+tq0SZqE0GbrS0KajUIIIQmYHQMGY8DYgG2875Zly9q3We99v+/cGWlGGtkyyJLS6IA8M/ee/Z77P9/5Vuuerc3/9lJt+8VN0aQkbBHHEbH1Pz4d859IMqnX+OQml/kikjBf0te1nCNJMtmObfJofr2m9XFJi5iUNPWamyafXtd8hX6P/OvFE2X5xLD4LJHGrqT8ZHOjbDveJXEyufls+kB+8x/XuOj2i2vcSPdJu6bf3T6lx6J9c/uvY7MpqPn0n4R+8sVcJ0+SgUwoCsod54+XJRPzhe7Ib3a2yDP726QjSkEPZfjQsfY7T9o+edLjNX2jbneOdYbdvps50uYZi+kH5cxYuWT6n/q0ufiZJRVy49wSKQp4ZdPmLfLNH/2PPLth89Gmts42t5T2dDT90c+AI15fInLI0xX9wfE9L+1iPLpcRtMf4Qz41h9pm/WH3a3nHWlPuICT9S8jMijkjizjq7nQ/bv7S1b27Dz6KyOf/sj8WRr0SmcsaUBFLEu6Ekl5el+brD3UngJON3d3me4vvapNN3Oy+736k9UbUFOBMwLQKsjp9021HfK7Hc3SGLG1e929726m+8vJ+9Oraf3pzkVGHe61jAsgdX173Gw2eq8jEpct7UE5VDArYRekdg69MZr++GfA8oo/2rQt2Fh3P4NRgD21tOqLFdJlTRRfbKo4Vp74PYclYlPPy8dlzRqzj0t1tVfqqyoknMiHCmBRJxtl9V1s1FmvpUj1N0PStL9C/AG/+MNdsnV9g+xaHZXqmoDUd4wx5SVIsahSE1pPQg6UNcuWmo6suqprCqSjvkycfJ94UqRQ3MsCtxOSX9Qmv91C2/cpbeGmFTU+Vnm5W3/6YsannbDE9nbK8c7jsuGHcXPnppo8qW11+xqnjVhnvaz5bnY/NKP2JdI0RhKMSSJR+nuM/sYyas/+ev1nSqTNUyl+mSziK5ZkvB0i67B4ig/K6pq+c5ZR2mc7HumMO9IOuA1bYppZBuL1WFCLPVRYF6DSEbMB2AygGYpOKtlJ8nsc8YCmSrnrktC+dCg5PRwJlI/RhzQp42i/XArZJ7yQGdM2HL0bbXMQZ8Dy8Dwd8Sf8vP+nkhSU/B2XsEreJyFrmVjBSvHyXyLRJkFrndiLfiTLznlB1n2rS2ResQQ7Py924GyxnDhHurtk8c1PA1adWU121M0Tf/AzUBWTpav9dZm2+DsA7C5p75gMrn5KbD/lkz5xwEM9Rjn+NpncuUMmf/ZRiUTWA3DtIjUeaWm7ULwFH6OtCrF97gtmKZh7uiTSvlcunfa4FH3xOXngq43U40iooVTsvM+R9xzWtrcX7JPFD1AkN0px4bf4sZ8/kfrIPPH4buU4O0k8HlvyCr7NmJ7IGtOqW4LS3HaN+PNuZExjJJl3UMpa/pXSm/lz+6V1aVr59bB4jp4nnZ7rxO+cR1+rxONlN7F48+xDkmx7Rlbe/lsJhl6R39dkz5tbg/g47Y6IdzMAYHj54//ulPG1+9qQfKHhPFgW+RzFwXxzZHcZH0PSeu5GFFwBfqWoNfWdm+y1kbuS0at/HDPwFp7lzT/wy4Ed14gV+CIv0VxWSwigaReIJ35PEp//3ZK08iUvcog52C5HWkok7D9PLM9S8gEO1i+lrKjvsoJbRtnFQM9MXtB2ceIBM4fJWLl4gueyuS+hLOhKOwZMADZLLpWE992A/NdlxWfuJT/lrCni9S8CyCcBshQhs+ano/wlxWNfw5HxXllx27dlzdcOMY58ri+CYlzGp9cs+Exw0AuONy6epOaDKoUib7OXArAX8JJMMG2Is1kKg69ytwf8ksEJvNQ30P6l9CkoXmeahAK/lJm37JBdd0GGp9KVt80ROfpx6rsWym8CjSmwsuPpOHWafGXMx2z4ie+SZNfdcunf/kSevPNounj602w76R/D+ekH6oMwX/s+4eHpVUj74/GMmP7oLChhPdTE/PDM/mirpzwD+3YCXN6/BIrOYidOAlt3w/B/AKBpByDeL07sDMDgfum0j5i6wxICKABLSE8ORyz0uGJHdoLylPYiFh3gIgqinWJFlMUAfZ0f4AilJLYfYQMUsfMA4LlTHIDLYy0Rn3e6JHw3AqobJdDwuiTJb9vanh+e28tixR+hvA8S72LKnAVlOIn710nQfgKwq5fOLr8ECjidUcaB/+DY68l3jO/uIY53UxKx18SbbHb7PA8Qbp/LZlFigFCBxLYWSSDIb9FNhcR4nJazuTaXl6nAvNw2dLhlF8n0Zh/MGBdgL7l1IpvS3wHy17MJlNGvCPkVqF+hTBNzOhFwXsI42XQ8M7n/t+LLt2XVLT+BzVJvmkr9M2IANsh8cTBibjK7N0zf2SkLAFivu8O6nVBwG6bupDuQpl6HtRujjY/QGXAms2An8QIBSM4L8JN+DLX6ihxDKjshtEdaAMlke52s/zFHdk2+IAvaY6gxx4rw3kWlTUWwGal6iyXtVYXUB9Dpi2kBdB6XRxaP+6EC3euO3SEe53lxOn4nkeBL8Gu/KVZiHgUWwD6YIq2hbZLvKOXLG6UvUvJN8cZ/JY0lh6W49Q+I9L4GYC3l/njqmSxjQwEJwHaw6LMDuejYDRT6jkRD6ySJND6dCmJRWV2nPFb2gYY8iEwFRsokmkATNgV7KlTmBNgE2w2fdmV7iP1gBcA+lvF20WaAT9gPTr60lBj4MTznlrr309UrabOcvE1In/8f28jPpbX1kIwpTEhdR0AK8uZxzP0im8UKqNxKyJ8P0uRLtPV8N0+Ybo0QgHXMcdxneLBmuob3H9ZSAYjvN0cBtyvDC64jpw/D+2BGW+9/BvSYDlmnRxxLisQPVdbVZsmGu+OyoQYKrkaXcM8yTgBeQQU8EjAqSW9Egsd67uv1PaUeKXeKgCCXGew4UenyugDnUyBX5j+lxYpJ3G4RyW+DhbAfYAT0lA8AlawUqB4HvUkFM/rHVY/VKh3JNllf0ypX1GwDmBu5A7hTJk2hJjz5sFmVctb6W4GqQ7KmRo/g2X3kgknJ4BSo5gmAsebfzjyM5ToACZuhsFCpz+P8TQNwYYmwWyTtPbAHYCXwkttWARxvF2AbDsxlg7gecNZ7EQD0B+KN/VAeLjkg8m89G9Dim9fBU76LzQFwlYUA+0zYMYslEH6d38pHNmlkACxTVpnvBWQzScZ0F4f+U3th1kQmwJrHmvvZDk0PWZ2Gihia1kZb+SObgaT/kPiSABB8QbHmcDS/Q4KVZ8pltz4gT2zZz2h6wEGH5gdeHQdQYVF5YCNY0iG1Hdl5pk+wpDVSCKaBE+CWqgoEUlJeW6k/GwD06o0YUuB6sQu433o2VOcYqoXyTB6UgFUvUQhKpxQKE4m6vkIJaZMozOHzb4M6RuDk9c+kfqVY90oM4PMXdEmwo5A6YD+Q3wLkE8n3ypW3wTM2wE0d7CR+70ZpirxuhHYe61zyAqqeGIoJT9NdhGPeChqeJwGHMUgDv+Gneqs40gOW8hIVw55QatYqlfywbiIW4Hoxv6dBlULZJqDKnV/LowquNdlzo5oLy259Woqdp2AfVFHvGOZioRR4yqiHAbsbgWLJ8CcmcXw4IPkIlsxjHOYe6dooAOzN0kn1xfA+hxNf6YfiPV0bTaMz0HcGAu37AZafAgi7WSWAlecc+Jq3iS/wI7li+kdl5eeU0upZPUkAMiX6BxjapSsalYp52SAS3gcLwS6mTsCHorYNrzboqnlZAgULi8B2FEhDUJsXSKDzdvH4P2uO+aYp74sS9e2R/BIVfMHzNBQvzTnXSWHRD7lyL1TnPwJF8DHh74r9B9raAaWaAITDZHSpSscaR75P0P//Q5/dP6/1D5JMXISghHykpExjzGHKKy95K3+wIaDKVeDn4ah/ySehSGU5/Gm0E+R1KO6t1AXLg3mwpUJingBzlE95tCKEMUOo2/aL/FbqP3teTIP8o9oYFuOzLCh2wMFLP712CQK3blwdGRQsfa1APS4vi+mZHsXQfyqQ5RsebM96HGZsNevbA+L39Gjo52W0xRE8A6uRgK+ouV8CbR0cWz8JMCzhheeIbJ0PBXim2AiSrrj1Tnn0WwAwaGB5XB6sLiiHI70V75KngZrM1FHK8dnJox4XMDwAVlSVA0kJQNXrA3g5kluecSzQz5KP7xZ8TpgKtr0ZkPqNJOprJVqFpL+jCBJB8YbyUNlezwx6Qb2Y/Nj2dhb2L/m8R8oO1ZFHFzoULMCuL57+skS1BTJfw6gkPPy1J2XFTarkCYDSttfTCFV6nLp2wK5gXGgv2F50gotmU8csWkdv1YLCtZoB1xg9QDjmlIkngrDLSx/9ylpQwRpUuX1MpK1Hs4AbfVISgSJbjHJnqBdRIVNSX9/9mo4QgHWkyPA8+3R/WC4owJbm+SSQwSLQVZX5dIejYwH6pdT1aBqdgZwzsKamnWPrQxJ2tsAuuBpwfS8rZiF/lYDATWgZtciKv/oPdFPrOP4WoOaklKnynhBS+btSfNqeqsPFjrR1qJaBAiH4CJVZiGGAJp8XNTAVXOmiVE3GJJSjByrUgpKGQkw4v5K28HOy/usRpOuFaBEUaCnqIo9sBATRWeVY7Vh1aDd8FR7tI/JYMRoB99FQjUd8sAg0vy53x9lD/ock7lUeLL9tPV5CTceflbp9nTJu7lTJE7QoAEbbaeB+PVoTR8UJH4GNsYC8swFcPfajEUBd0cRGtBcYv0DhouyekFIofb9E+a5cX02mXSiahvyTvHAOc+sB4EmIv8QHP+TJNcyHm4YfYEGtgN8LBYtWxkigYOmPn35MLvIbPqw7TSn905NMdXpSB/2TPikvPqBU9XD1YdAHNVrhaZkBPbZWV++Q+nnfE1/LI4DqB1g0f8FfJcTmteIrfIT79dKGTqxSasrSVOpBLZ96p0O16IkWlLL4oCQBVttpRHDmWk0loDD9PvBDyyc3A77/AVxtFzveKMlYgxTsapX1WHxpag35JYzQzVbWhd3J8fxeju+XcedyVnY5VOcyiUafBVhd4ZBqLzRNRfAE71cpQ0d2gu7/LYlWPlNJIWxNgvpXx2Xa/JlkGg9QK57tpo0W6fAdlsLkLsrPB1zfyz5SQj+Van+S8daiP1sJ1auaBC77QlXO6gsbZVLHLsB1Kf0qgn+8UMoxRhBBgKcD7ZVUV9a2l7FBwVKAfWKzsTmxbv6r5la6dngTzM2x8JfHhhFVZlCMw9mpMPq44wuQAqhThBGS8kDWQoxX1NptxCRlTJs/3lB17pD+MwzrEdPLP6GO3AxFisL9fZicKjVbemgrIHUPDwlgslDmR6fTEyuVjeMU6BQogSnFDbtKQsFxqBgpQPUkX+ECKNvJlNWjejMWYfXSEXZNSj1JeJ8pnqojx6BLXxZ7/Uuy5t93yHPogq5OgavWFkYYpkd8C6GaaglY1h6k+L9h7dRxXdu8VoLBhei/pujHarAPFga0temMYyOEg8pWq7DMP0mZyHp94+lLMXl0E6iDQo0Y/qjX2kYdnQAg6mJWFcKoVokB5G0tDbA3UFeDB+thh9G2PGg5bKmBCnc2AIsKkty2LsXI4mxOBS6Fai6m/lErL8t5PwI6hGnKx3UOM5KNUndMTWe7U/aEdl8ewi+8jFMLA1IByKqa1khIxfhFKOEvsz+qgzpsuEHDBQGfFOUxR8M5RWYCAFKIHYhpCXKqCgRRWeTTpxpCrNUYJtdRzLu7umBh6curFIjhT+V4sipIMISTvuSDnHQtKcsvc76MdyAl1wYh6WlL8SWz/kGo9i1XcfltaqF0k0jRFol+5hlZ8+1mKb3MI407KjgaFgIAqsLVIDFActddcZl5O8dtp4tNkclXNoK8VypKjsmHPndIjsKGtGqreKA3M76ZPD+1F0etyX9EYk2wCABxMcIlFz88VhzhToyjscs+6D2IZBTeaJ4eyXXClGcZl674Whbz87AJKqh/In25Qap8b6Lsv8ctrjqwAKyyxBQ4vV0Fcs3N5d1Vd/qB/HirTG+ypTk6SwJ5jFHZFNZRtg2XcrYBS8OThXrn9E96kX7uMnqqy26NSrFPNwu9EaB/bE41lkSOPCvh4i30aRz9xPhBbpcCf1gur3lSxrW3yMECS8ItlRKvv5Fd4IPM+VjmFUrYeRAHKltly33uBqStkYYfYFnvlWGfFKvUnjU7EpICbD5si8x35zRAwMCHSuNj8rzMkbLLMns18CreVk5tEuc7SG2lJByW+XPR3Z41SRbPmSxTK0qkIBQUH4iLqw+JxONy+HiLvLztoKzdulde23FI2iKsObRezMuS7gjgOqV8jMyYUCZ5wcFehpYca2qVNw9CWKleOv1XDcBZk8fLRPqrm8PbeZ5eNowDx1pk12HqHy7fFOl51E8V8ng8nwSsbgKSWpnn38sVn39T9u4eD7heD28U1S2S5axj8LV8Q7AU38oGxHFahU2OWnV9lCP8O6Te4oh8jIXmnw9YTed+GHDGx0DyUYwXdhhwUnt+QepupdSuVHLv06ffT/L5AFd0Wg1YOjEA0JbCbYfFXvggbWMRJRy1YRlY8pwsvr1B6rd2cDynfu4Yab5zmcQCWGkFXODUZlSXtjT+FTkU3gFQImSDe2oZU97dPHSk+po47jsFDeRV93VRNpOHpRNjC00lCY70PvUupfOCYM5XKItrvTL2MowyXvo+41Z/BvPJiTaGfB1d3R1y3DoooU4s2PzTYblUcb+ERY8fB+c38Fj+nzx7SOc2Kw32ys6qfEA/WOzK7yxBqDQM0JGzi1OKVWUsuzdv54XM2cgpXiwN+TCr9g39JqTTEIszHz45d/5suX75mXLV0jOlsrQQQxYsHdkVVfCWxn2l9M+ZPkEuPWemHGlYLPc/94b84vFXZNeRRsgWXcypeQX4Ll84Q255zwUyoaz4FGfj5NkffulNuePuR2RvFyc2qJcQ8pybVp4r71k+Xwrz05KMk9eTMwdD+PmTG+Vb9z0tnQ2cNIebMV5VJeiwQoGppB1pus83hUEz3ZiielD2j8ObtJIvACa/kiO1LsA8drBWVlb9F2pYUGpeQMRSvdPFlIOaZYCWCrD06OFEqOcpQPpBPHSosr5IV5lf8jrzOWZjHgDRaqvzkxOkhKdY8nUX5fknUeh3kthR4Y+0OPaSRP27xO+vYg6VYrxRKmWDHKvdLBVj6A+8X+OzADUrB/ZG97ZIt5KxdgAzX0LKI44DhlhuJdHFFc8B2TAhYnpTVAiv2XkT3dazJB7fwdy8KRPaVMiGckACRTBUzCweXtJB2GaX43XBL/fd0CnLqp+Q8OQKKPZPsMCVuodKtWhf0MM1/yGs4/hiO0e49qDYXf8pxUe2ZXkD44am4QVYTidFAMe88hBHYCicEZEcObMsD62G7P7oRjdsIEvjSuErb3jIKVjAddbYMvnLa5fLdYCTgmE+m2G//QBA9SSigsuCvKD87bsvkCVnTJb/+7PH5UWo2pihGPQFFikO50lFcQF/rirjYD1+fU5+KGajkm7+4dUCK8aEQ5yCw1IIxf12kzk1K6wwjmFPd9dE5eov/wcqVLuhJK9CQ2ABHVPhDCBkYVmUeAK+5O9lT/NW2Zc+wsKnjd30hDgVTRybrwZAzwOAZ7LI4WViDutwWLcS24zSvgSekj2b9uJFy2UBFNba0lX0iniiypsNQh2uFW9CBUG5k8dTDyA+Qp82GT6uE62VNStsqd5SK5Gqn3A6OkDbJfBBWxFUhaQFlaJyexNHfnRnUxL6rJpxVejYqFnZB438yQm9RL1oDSTQNohx7esu4Ndf2SHBh35L/dDMifU4Zdlu+NNa16GuLpld8CT9ot/cj9t1Epngllt3X5dcU3MPGhSvsulcDpAiyJJ5IEA5v9GdVUEaG4Etj0vU3iBrjgDsGa4WM/o6vADLy1aOgHFyCRvicFMBqUnxsGOOK0InV8+RIyWBGCUQAGFAf0jZ1Bz3508ZK5+9cYVcvWSelBXn9w+sOeZKBXLKPrjorBnScWNc/vmnj8um/UeNEY5SJnkAtfc08IWUrRiNxiFMeF8UbRXP6UuATbzfjSFH/090qa0TFUzl6Y6M5Mgf/rlWqm/9hbR4n5RYsEwCkXyAAT3PYDPU6zF56jBA0gsE1twdkcU/eEmm7NsmrdEyKL1ijtf5qKvYEMBt8G4apa2rEcGVUn0u+Oh4f//DiFz1qV9LV97DEgTs8sva5bd7OCr0k0oS26Ux9G/o6MKsz0vInl1NInfZch/5r6lZLW3Hnsc43Yf3LYhkH7yXb8Zk/mcekI7Eo/Bp+3kRMdltjByXSsA45rtTAgk/TpKj4i2j7lRac3EC44E10tb5Km4Z2+X5/0yxDri/7+6ozGG+Ev77Ua2CPxlEvYqNKp3U/WD1vW9I7SO7pbj0XjwXAK4YP1jweb2hJtgc9VK3qw2eqwoL+6W9hhdg6dkEhFvj+POPBIBlmioLvDKZ/owUwDfPmyU2odBPJIMhtHQDPEryQ/KXVy2Tq5fOk3KozP6ItRj8WQdQ0xOjCrt6pwDU5LSxY6S0iFMltxMq2IIaD+eFcubvXf7Uf6PgCG/U1na003x4PF4JwtJQynMwUjvvciKlcz8Y9Q1CHY7cp35ea/ZDGR4wfgQKdzg42FZg7AHH3g1t+AS+CjAjlZomyllSj/8B7wSUmbYwa6qTmhM8bHnoe+isolngJvKeIJl+ocTlpuy8rh9V+t2d3Pu/RUjnqkd13+j1JbMeDAJMyrzmXnnsGwqqukH0vudgdNEDxn3vM/wbdAfVjaMD1bZDqL6xeNYIwrwTzykF0mn4AJbhennxzqgIGgHO4Cz79LDe4icgMR92xSTCxWRpEFBd/yv0LbY10GLMUwjKawpUvpoSD1VSoeuKRTPlsvNmS3lRbnBVYdZL2w/K9gPHCKUTh93jl7NmTpSlZ0xFGNaj2bKr9jj8ymfklR0HOKlSMQ/bB+BVlIYN6A32mJQdoNRrpvcxP+AahprWe4ORIrBOjAB+MCob1DpqXMqQc++pVXvK5XiQp5ROlL+/e/1d793wyfL1d7+/673rZ06V3Na/U0vDCLAOgi2vLB6fL8WDLkU+tUnoyQ3AloWMVsMgETo9Vb/Vb4B+CRokkwoCEjwNx+mc3QKcykoKpPqdC9ESQIaQY/d7dMMO+cFvnwdg98OqQg5CRXr8LsrPk6vPnyd/ff2FcsbkSln35n75NuD65Ks7pCUGC08nlsxKUb6yk6gb/A6ir5650jV2WgAgPG/OJKmC8lVBWmZSynErrIatAHsMSru3dZuWf37zAWmPK8tQ20PIxRwW4QUvF4Xd0NohL9LPYy2d9COzJ5mtpr9bhjWwac8RE1Io5+Sks45+/snPwPABLOt+SlFAzqkMSaHq0Ax34iUsgMc5szyI2luO/kDCnuzVOz1DQBDI/JRBHQ6ZIQZuQSejznTGlEqO8QiTe6WXdx6UO3+9Rp7dtEc61LigG4EdaW1ql5898jJUd0AWocb100dflhc274WdRr5uNpALUvc9vUn+sPaNXrUzz6iDhQNB+aebr5LxY4oA2Ow+RBEA//6FrfKrx9bjTAkVsBxsuvZoAoCFiFNAp+0QurohhG65WAT7ocS//5u1snFvLfrvdIci/SUdKksF1csE1LiOvb+co9dHZ2AYtQjUf8R5UK9qMTUiqEXelVmlIZkzJpBTwDU84MoS5Y2eUhKQscgAhkzuBgU7uaJICgGkXGkt3u/e2FMHuDIreuTOABnVXmkHdH/85Ab55bOvS3N7B5Qe+brBVcfkslyauiLS3JVjZqE8S/MRcvfD40xS39HmNqltbJNmjuqGsduro3gzMXPnXiZqMRRsf6bYXTjpr0d7p6610z1XZ4ynV7UZP7PHnXFj9OvoDHTPwPBQsLxTJfh/XTmtED+wqr43AhJkyRlQr5MKgyND4KZTwjyp/4FZpUFDxQ7JLCm40G55YUG//FGVoMegIg2w9gYj/Q3oNneoQDYllM1xIHDHom6IelfAHTZfL6cIdbbT+/iv5RIAeBve9Yz4FlaD2xG9k5Eyq2U8+Vic5WIPaIk4Y9HAloYSRzVyQGmA2QZU12BkMlFe9+VLECFVfykRQ+ezQnmzmJwiVri2MyzRBl5AnEilUzKQlNI97d3qTOnr+qltHDkalgoecAQ9WxNNQDUTajyyEh04C98F2oYv4EhybFL8hyOEUFHLJiY3K1loD4TkeEsefl/V8UeX/AwfsL3dAlbfy279XFhiLX4pnI591vqubhNcjXZ7ZCflSwie19CFZoMKynq3o41axg1hcVNQGvMsrL+6MJbInVfrPLQlhB4iC29yQpr2dGZGJ+gZAYvkmjvc/ucz3jGBTgSMKsTr0/4wAawjKyYXyIKKMNTiCFipUGJ5sAfOGZvn8l97ZrL7GyIT/hvqvrpsi/PGh43pbndnTucXs0QsA6AGdHK0tWjmBAwNiggjjuqh8dncK9NAp6m/fICdD0pYBVO5AFY9xLV1qikuSevor550t6hPdW5VNzZX6oDNEFVNCL3ZPzzlKjpyrjW1LZHQ2A+jAD8ux3vu9jMQZKY6DqFe8R9yIY5bYv5P42tlbtao/bjpa5/WAChtwdLpD/LE7v3d6l3tbZdKuLBaIpi3JpMvyiWVP5en5IBUC2Gtj34QY6oLiEQD0ALe3gZemfx2ueK2w/h/fRmTtyeN+a725KaaoNRG/gzhy2WUKZKjyYdkRdt9gL5ryOD2lq6+NkmSwb+RwITZ0hXB49fc78jiyRsM6HUcfh8+Za8ka5HES2rl6tu/K+3rt3SHJU/XoT5eLfkLaau8UOP0yhjnZ3gUe9yNdpvOxOc1NfnSduQTUly+nEWXJ3ZTJ2ov/4ULyLWypiatAeEWuPZ2wn47H+SlvEiSBGdsS9xNnY/1qZPcQw+wrGKN2HpJVQHqWUPffMaU9nylT5WoZp0JPzici/+azmnewPSPofi0ZCIslLkYPoSHkk8NyNQ1t0tEhVI50jvnTZOPXHmufPvXz8nhBtQrFbi6+bA5CryFSyrYUoozV7XKOuiIYnGpLIqToqubQ40eegvL0t1q74riYB/PCQOrLl1sZH16vbNQy7mYTk3p6VjmggVb1TdDIrYdntxPpajdlnhgBcc1nJWkJ5E86lDCgkdkEZHWSS6RVVP+RVYT1kWpS9uZjpXYCtrBdwBUcEdKVaQdqy7Lu5Trl1NWnVZz24Tm5ouD8+xEHbvlT4i8+iMTeXUfuBNKngWleykPuARI3ypBdaTaK8UShKvxvpPjzNmYEzYT1uaXEmmikyT1b+vzXMag8JLFXhsjLph/yTdQo6rNqqXY66On59Dvy+D/AJz244S96buNRjrOgY31PhbJOawYtZPHE4J3MxT+a9SXDbBxbx5GGPjb9V+Om0UobM8TKG3kBLO+DWX17jT84Hi3fGKBnDshf2hB4wRDUWu5RWNDMrOEE0cmrzCjjFkzGb+H4quCy7njwmYjclfVULRKGwDb3mPN0tBKqCYDYtntFvJeffSKJfJ/brpSls2ZiikP75FK7FXgNRiJydYowwE2u1wUbAQBk/o3GKgektZRSFDT/gC2BZZHnPp8jMEPu+Bkfz6EcNZwLIj+51Ytm7oAsgOSiG/HtHk335mgpB/eh49PLKkwFY1GdmOqugPmdqt04mFJlfgd8iSwp08m1RrqDwQVfI2Hrl6lKvAXex0P4DqoS7UKI+FgO4nLv6RGh6W9YFKBB3aAiS6Lz9dEHioW/Ia6jcfw3xrbRp14TfISC8vzIfHnnd3tMcvGFDdBXQm8WDkJQsh4leOTnSwbyxCgzgZ81Wurw5jcqAt6FAnRbh5t0RdA3SsfIOfVctnNxdmVhDBp1XlQV4U8NA96rZUsoMxUUwNPynon6346+ciruoTUayeXsXDGsblk46TFcVeNDuy49gHlapj4XbkFBjlRN7PtQf3OyxpEp/OK6QUyAzDrB8sGtcmTVsZUFuJE5eIpyg/ufzrINuRJw9ZcCp+6YqgpfQD2SF2jPL5hl8yeWCGVqGxlJgX70sJ8+bOLF8q5cybJL57cJI++uFV21NYTeUQduzCPOYiEzDpO9l09deX5VQDad2uJAYQxNAROBeMC9CmXBoH2Y+H0cfJX734nxkzwjHO0l9lX7c+RxlZZvX6bHOJT4+eNgORIh+ch8TesxWIJejQ0TvKsb0CBLQd4Y0zUnRCUvzWM66J4TI4nGqS85Bw6T0gYsMPCUXTS/j7gvIZyYS78NQ/xg5QdI0nPcsxg72eMx/FbgNRTH6xupEkU+FPOtwOY5Nl4zHJgiDtOE+aj34T9vg4IJISK9Y9Qm6uocxLkcxUxBagDuwbb6Gbiy4Cn6KjrQECqd7IIGaPgqKE8FGBR3JA1GEDccotPthNny6veubQ8IxALr1zyMUmG3+RYv45jvVtfSzt8Jkh3pdJt/CrY0XZ5M5i9N7/QPhXq/gKaJ5yMs5P6cF5DOG7Lns+8TMFIdrtsgc5OJ08L/fKxMeDsxsI7WDwYkRDRe3Ok/hElR+a3fYm5OHtsvlw4uXDoeIoD6PRsdF+XT4bPiV5uf8kF2CGEWTajhZX5xi+CBmAc0gRodAJi9z/7mpw/b6qswCmLWmNlJoUVFRzNw5T2S++/WN574Xx55OVt8hhOVjbursXikvVt/Eu8NQAyAMs7mBNgIRZUF9bVWR1A/YwnCNGhEU1ypXNmTJQzGcdAAFureH3fUdm4/ZDxGqZRpfX1Hvb0/NfU4sg1V73sb4GTPACBdePYUUj9OoCjVtbe2WMquvJ2tQThoWr/8bfq4C8gmDguD5cdkStb1nHcv5rJH0M5jv+ph297sZWGItaJShLHy9JjC6krEsL7lTqLUYCNcdxvkKfvPI71U4O0Td1DA1C6UKyWHxBiE4sTJcCX1PYBKFgIyo6It2aDntZrxzCtTbm1s3AJ6LepB+uyPZ+iT/lsBCrhtFs5OeHXFYcyHtwuev0fEw8sCcGXAo0S/huKlCO90q7qR8DOa5ddeT1tqSCt8YXFtIMfBlwkirzC4MjrIwSNZwLU/dlS0bae6z384SSeoGw2Ch+rQS1arES8T8hzCmgaOoDl5DAGPuefzS2R2fAURwT1ygToC/Pu2cUyrVj9+54gDSG2shjYQC151/RCoyt8wn6doMtv55YD8bD9wFH56q8eN/NywYLp6JL2XS7qS6AY44JFWHDNnTxWbrhooTz68nb5yaMvyda9RySu74CC0CmmPNSqQsHceqsx1nPS7nlHTla1PmNDDSu1liPp5tF7A8mRrfuSDidO+wNVOOguOFRfVNAkxLPSgeO3CsDplFaAIDMliUHlYddR6s8hPpWF1/6CuoSsIhShHZpFVg0gqIPcylG41RyTLcK4eDgKqPM/L6AYw92fJi9HZSekbcJysHB6TcjtFTePkfaiZVy6gH4UAG87DP83VtZJiMEirFM4FilYQy0m6F8kVZepMPWPx++6LNSf6orQhLWhRFceIb3VgTeAriGyPc4a+rqcdTYTnu318Gs34ST7v3G6jSAPJWr8JAHkOlbsm+OA9L/2zEX7xjH4YLia8U8AqOsRyD0Im6CUehF24X/AS/998mt+9wCsBnv0wBZR0NaQ5UnCexfGeuokczrlXnHpu4P46QVRL5laKCunF0spz3VEJED/HRPDcunUohNSr+m+DhnGwstUSn8ZmhaF+LIYlsS7mQA8X0Dn9Us/eljuWbNJGlOe3nL1R/mbyuecBUvhY6uWyHduebfcsOIcBMXILnKzp3JV416j7RDlFPT42idF47zhquSvKVcG907Wv0HYh7mo4axMA/yhbBDtw0Ao3gFWObjZbOJNKcXozg4sAm8U/6fZAOADvFSYo7jr4LLQE79BWqb+g9hh9YX6MShDnFs7+xjko3IAyvamfRyJcdytRJlSnXrcTvhTAIvHK6NOoi06YwHCf0F96gGyfhMImgWoPYPLxH+B9/u6ObrXHkfYBJBr+ywzjttxCYT7vl4OPFY1+dOEXBN+cao9H5S0shrM0/cCcE/S1yegJlu4UkzejyDgOY9YYLpDq99ahFJ6nMdvrdfU0dNW3F7EeBdTFxuK9SpOs7dJHA9kSUd9Iej2swgh1pliAityRVOEOTAUuW6xsGACsajU9wp57ubUjEOQALI5qEB9bGEZvFc2lAG+FKe1Z6yrgjyPVM8tlVll2KiPhD7pgOmXD+rxyhmFGD3kGV3Q0zoPJ6ocCijGGtrEkf/LP35YXtt1WD50+WKZXzUeHdncm2Tag9Y78EcwrbJMJmPq+tNH1ksd4Oz0Q0FmdUFRizbzTyD1T3AytfU90ddkIM+NBReEnz1Y4XY61VOX6gGP1ORJcFw35m/qshrhEDqrB+p6QEX7bWlMrnTUVmsa4PmX5FUNAgVmdSK9EYruu9KGH9ldRKyd86lSgBhQhF/lQL57PEgFI26dMYReAQCMCqiY6AWC1N+rD5K8hL12ZD204yYE/vBaSUGNPOuogwt4sERD8MNWyOu1AWg+L5SvhiDXZDkIwvzupCfj8F8x9dPm1Betx8Zpi/ND/qbxdylULAEVE5+QZMF+dL3YEJSi19HRjtervFS33zfhqLzWuZJ+TOKKuit+AvA8gufZEKyBAwAvIb/RUvDbiyVR/ALloH5JoQ7mCAV+pWA9Vqckgh1SUZ+9gZmM7oykvp6mD3iJxQjyPnF2hSyZgHOPkYJk7NyXTy2WS6ESNYLBiZK+88qLH5JEO3MA/BVTinDleOJ+DUl/ALAEwFjX0iE/emidfPJbv5a7Of7vP9Zk+KD99UGpz4lYg30af7AfuuI8xgLLbaCULGukQP0GqDwlR1L1MRu91QEl5tNDPSFMfj39ALwKl/X5nuxP8+lfR5cCbKr9gQD8gDo6iJlsv1KwSuHxgRBGVTzySrMXMDEFuKdHcEaQ3M+/REJQh92Ari2PQbX9lbQm7+GY7Xqc6hgLFYKak4KK1pkEuH2dbp1KDVtpQQFgZ9trIOweBogJ3S04k/D8Dc6tvyyhhtkiNZTX/sFGUPzxKFUZjMKeyO4fkArkAYwpClb5y178Z2oKwu/tptA5oqvGROQ42hFEFXC8u2gXUPUCnIn3SCJAuBhiiuk4LcDcwddtOh0dM5dr59OGBi3cykp/Teq3dUiI0OGOjXqWRkgQFWYtAwHK0sWkw48PXKhiCvPZhQAxIurfNkc6vRQsi1H1Nz+5qEKun1VCKOwRABg6CbzoE/GY9efzS2XmCOIH87Cw/ffIDVDV8ytRjB8RpD7zxSvoQFW20z+lZr/0o9Vyz9OvyircGF63fJ5MH48r0RxgqEfycaUFcst1F8jO2gZ5BAGY0WZR3mC/iTeY+wUAcn+WVy2dEQwhcq7nHLVitMD7X4TrxVx9bCd22C+e2iAboc6Vi3bCrqVq33W4QY7SBxA7R3sj4JITJ5SJHtt5cka9CaqtEBeEmckiaqqGudYxJKDc0M8CJN8H1Qg1l5wClKICVayA5pYLHA/Bm8WBL6U8JsJsTLpK3IfgMfxeFSIpRbkF6u8rMKm3wyedxLHhHylxBcB3NZTec7Kq4RDhxMNomqSwB2rYQvcWeMtKt9wSkJ3Eu0LdgMWn3WhlYbgAa/swZuDoryuTKFocTzrliY64rKh6XOy26bAoPsstYpR5P4zOXRFtw681uyPskhTAVlcHpMVTzXimU7fOE0Iyz1/K9AU3wo2mT4IGAc6/OU2SZiFUm09MsH1YjHVKAQCfVNDWdUzoGifZo2GguTPS6QNY5kSlttVnlMqHF5QCaLqJjIDEPOcj3a5G2LYUijp/AJZk5vHSdfOcT+cQANQLJxHbbVYxFN/pezRvaQjm4eGkhT424kPg+Tf2y+bddbJ63Va5adVSufodc6UMf6+9k+qgTigvknctOUNeB8T2oF/Lcu4/MdkqnFWBWi61Kn0GbYBbwlCQ+mROVBm32RTyeEkKcZaTy7l3ZywmT726Sx5ft8X1mXCiTS3VVIJOIPo+adP9D/I03/F7VUDlUqdKtUXhp6h6U2ZSwQ9TbQbhYNWVTDzEjrYAARU8VN9ZgOTFkmzYRp56UywOgx0rcoaN5JxjueWPib/FfQCqsqTHfQUcFZb50bt9/JuqRdAkrVV7AF2NAoBbNgIJtlNLGFNasptkwwbAF49Ex2U/yH0BqNTk2dxDr1VvAbBWSi1Mo7haCMi0PRv1qYSG70a7YM197XLJrfegn7uImBbo8DpTafcKKFmEVsqy8MCnUg9ApPbJ8+gP1CsCNx2FxzeZ+sYzI5pPdXlVeIBAT/cQpxId3HdIpGQtP3BYAfXt1Q1Cd2S7jc0CgK3RWvqk0/MW05RuSu9Et/TmReUyGycqI4UzoA/l4qoi+dCCMTIRJ9YDS8z3wDK+9VzwqWeMCconmK8zRhJV3XtE5jXwSJyNvQGn08/j5m9H7XFcDx6Sv7l2mcxEyNWb16kU6dIzpsjkyhI5gOVXPOdS7GnIgqrKYxPMCbCsfzeagEs89ZTq5xtthWAB9aeRoHrxccBafc64DLZ+6tHL3f1mEsw8nCDvcN5KwB5IC4d06QaU8ruvu/ema3GnQPzwN3XH0l0wktgvIf8acGg+F8YyvuulxPcMobxfMKapfjUmcMk57qFdAFAF2hxAFNV9YmNBJpoJchAOJeH5rqjxSWvXHI7as6E8VQgGENotVAF/JXYcENPgjPBPEchZiatkZmir7KpGtQqgXPl1ojEc5YjvXcKcq0CLssl9qHal1MwSULX0xVbKE2MHy6ePzh3fU8WomXX8gnZncU1jjc2lLeW/wu9VNTYEdDU1HnmxYwWXZ/CbOaBf4hzjPq951vavccKUn63skXmwPVS7oJY6YXEoG0LXgbeNhYMwpyac2opEZlNT05lRddg9+ACbeowrANcvLx+PO8J8ZYuPjMTLpNL5Ty+uMHHARgzoQ2UVwD75+DnlWLkVSmgAVPWwTmgKXJQdp2e2I/hT/cnD66QVv7Bf+vNLZPYkDV2UjUBTAdfxuED07zhE/DnWcfbtrOHocwkQpFDD9+RKrQC7qkkNKAEgYfR1NUpwLi0CDfti+Knan/TfgCoewZksKE0VMOmA1NAgCrjxLaPHTAb6raCDAVhlEoQJ5SIYI9hyKVRZGQ9wvsTRhS3P30G5I2LhfxK9EmpRXiZhtNE9bSqHviyGadAGCNGmgrUtUwGu90keQQ0t+0q6sZR2VKi1jTa3SP3hTpky7iig9zoUJGDu4GnGWw3bboxcMfVZkS+gX3vsLED6XbRbBSDD50xuRFD1iqw+6AKsgwWKUrCaHBNJNmMx1NgSuekpCZTPZHjj+ZtEXvfZ6nHeC/i/1FFJSeJseQh2mISqtX/IhvFziYRa0ZvVVeAmy/lrwPsjlC9nbGeK7Z+BNgHWcJ4id3Nik3fsBfBgvygt7a3wht053mcdFt/GX1LJjsEFWCZY2QIXIDj6++XjZNmkEeLMRacrRSF+emmFLKVfpyJs03Wjwo3TkgBXPRLfCCvl3XNKRoZgK3Og6XH3AkyTJbUUlT/bAVD9Yd1mY5gwvqzQON7OrKYQnqoGHDShgWK64HvWcWY+ZtoAqx8z2Vynde1Ouzp6MUe3/upI1ai3KRCCB6uaGblSEn58nD8ew/+iBEXpUR033aCIIRWAatOJTadVWEIloMyUyjVX2fFiqq/VsEuClY/Aw5zD3jme4GnX8/1xmVdD6OsOdF0BSt2lVMCVRIugBOul9jEAYId6ZQf0aM9H8EQPrAaHY7ZFP2w0DJL2fnRpfypNnjeIYRXDKioh13zhAepfSH3nUhZ+sG8V5S+hi+i/GRaACrigOjWwof1TaTu+E+rWBVIPocQxWVOoh7LEy1Yg+zijscZWfu4ewG8hx/f3MUbq17nAX4FHzWDxbeDxzeMCbcherq+Rg7XbUvG1uGRmBc7x7U/z/Ur+EHAB1l4BZMPPm/5SiVnDHu9kugmvOD2/vAxJhGVO4nGuDSLAskJDvBQfRHD0iXMqZH5F6JRAjM6cvgS4Tuf4/Y/vHC/XzCg+Zdd/Zg2ejt7x8vtZQ++aVSifOrdcZmDskAtUTkfTA6qT/hnrJ4CKKew/GZzzAHxR2X7ouKjgSCMbZCab99emEgVjXov+E+0oi0FDgueS+ms9SsHqa3LSZPKoeTZgbY4rfRvuwp9sBOG0sQrrF/RP2tLIymArpebs40Vv5WiNDwKvxqTqSb4osBQ8zgPZa8DM9kBRomlggOnvCEMtcwHQJWAGsXeSK2RC52Z0Q5MshsOG0nScA/Bq6+WxN5JSPc0vrSjaO/hBcLxNWGXBoDbmuQh/oHxtC8o18azE2jbJyxMaU53gsF73rATKvgAif5BrV9DWRD6VlaBQBThzZHeSz7Hz/QIrqWdl3Y9cbQZTAVSnWIyPdpIJxuDAg+2VHvtGPSD7LUAWLQALniwsDgt/DBZHmYScy/x0UW4HY10t0c6tBvizq8AsoW2DBMPraItOKRUeRz8xWMaOjMmtZz/ZYTmQVGWwJ+kGtAVAVz1aZXK/zaSLmEkZi9enj59dJh+ZXy7TSwMjg+ea6tvcijz5/LKxcvX0EgwK4MW/xSFrdYOWqEzB6wrA9fZ3jJMFxAIbMawUHSRHcETM8uGV50oTwPnUK1ulqQtC6AQ7gAJjBYKuAODYO7UimKrHSXZ8AJSnzovq2ebiwcZZzMZVIe+xoSB6N5T5Wx802TQkjfHMlXkv9V1Vvrr46/YHmyPPH90lf/h/JNnyBBOE1B/+YgPu/DLT75uicl3BXRw7fkaoXbJ56qTksAsWDW27pTT0j1CuRTx+PO44eM06BjBWtUpexxfhCSGRj0TkWOMhkTUJuW+FLe/x/gzdtYc4jkM1I0xSZykBBFtJqwuwaZNH93dBfSqboicpmM+reVEmNe/khfwJWI5pqg/eJjtwwkGQBJjHCcHtazkm6+5WAO15/fK8j6Cf+yo8WcJ8YFxQe+BIT8Xd3xyJFWyTYNeX8UXpjiURPCqdXa2EBP9vdGp/a8Zne47DQ3YFed1FU1/WVB6Ta5r+ibxQwDieSQbaJNRYJ4mi34Cqz9LVvgtdi/roU9g+Zr6mqnprHxytQrwI5yKNv3lhhVyGcnwl0u8TvINvrZ23UooXUKXG2rfb3lFprMiK3yK46qbKUAcv0Td12XgVJrq3LR0LXxhT7hExaQxRQQkQ9DLeqy+YJ39z/XIiN8elqakVzYE9CKS5r8ftzF1K+aGRpEyfMV7OmzsF01lXBTNzwuoIJdPQ1AFBlbXbZ2bp/q7sgTCGBr2FZZohhi6VBlg8eS3d1UHBokHQz/xqTC/jC1Zf38wx9RT/4/v2cA0UaY15wVPS7R5wMqPhqP1gzWG+6h+ppmd1b/ihstUBzxq9kUrf0vvMTs1u94KerO9MlaHsb0Tb4y8z1aTbTH9m3nS/b6lRdkEdArF6dGS90nyQc/wkdsRix/XrCoDnSg98FcAnCq5Jpp3cbRiHLzWMJZ3S48y6pmVzl9d5+X1WXq1Ix82GUYOgrr/UPXbJjcD9lUtfN9SDSFVpHnzDYvnIAjQFUqFWRsQaBQ1LcfCzEnbAXyGVX4zD6jD+GUZEYu7K6Nt755UibCuXOUq5jpCumflRChOW3OWoVX2uekW3E5Tb/uwSuROgeu713bACENrqrpNCJN3I5lSNk0+/50I5e8aEnI6ttxCksBbvUyf14Uq1qiJZBEhr5NneKY6rwARWVOq2dECJbLp5GYFZjnnuAqyjjHeAtQ2oyRGQieH0vOS5+5MGm5x3WQQ1vW+cqM5c+XuX7+83YFqjQJobTHOXOlFfepXINc5c13oV6/6ZM++A2z81gNWXiqmsggXwrpnF8h70Nc8al0/YbU4iORZvdx+H6gvd0xd/IX26GT7wVTOKZAKBFQcLW7X6t5XgU88pz5NbzquQ6zC80HhkI2Le0oNi7mBUyarl8+ULf3apLJ41EaGUC3LqUWvGxDJZv/WAvPDGXqlrRBubtaBAuBBHLxcunG6iyKowq3dSh9ZPbdppvE8ZYZLKG06Q1LVggQIswN07xTEwiKFWZXi5A4FFxqQBD31MdK4l2hlRXyOnQg/37tHo79EZ6H8GTgywBlH0H3QwoAJmYsK5Cmctq6YXyVl4/y+BHYD8YHhTqo+qFjQev6nXzynFEqoEV38hKUb1KddLdaod1ibUOd5A3uc+dZv+4UkClFdHNx8/qwztigLjXGYw+tanvbdzAep1DJL+91x4lsyfNi7Lw1QQvur0cWUyqaxELl88C7+v6u8DVhssIgXVfLxf9Wd5tX77QVkPKLepr9h+VK96uk2d1KUBF3Md640vWKVgafukD1fnnnUb1oi8CNVzJWN2m+b/jLgHkqvHo9f+mGYgG2B1QRoSQ78gyQU9S4M+ggHmyRXTigxAVBX7McTAvdtwA6v2k/8DSOFLibh6xbRCef+8McTVyjfsAdh4g5t0Sk4lpfqnvNYzmb8PLyiTq2cWYdFG1NoRRbZmDIojeSN80megNpfPq0I3V9Uhe+6rhk4eFlZBNbJJzwf3M7L0ZE5927TnsHzngedkG+almP+cOLMpo21oiG0EpTn4pqqepWwG/W9AiWyFaDRofK9cKQrLQTUTTjiIXAVHr43OwABmwBdl97ZV8RvhgRdqpKzQx5EfA13YAIvGhuUCdEbPROVK/Qio4+dhxQYFLf3jbRgDqE7B/FZ1blcC/osB1gr8zQ46sNKatqgE04CSAVbCRLMxTYcvrdR+9ZljZFZJUDRCwYnAaED1n85MdC7Osfw3z2+RceXF8smrlhG+uxiQze61+ZV9qU+vFARfxTT26/c8Jc9s3CWdKtzKAZh9CuqRHj1yNZXt3a7mVfZAUv0823RgIHxYsik1nMsPgdanLAc7tab09x99qr51jNSjvO9RNYxeymx2AmZ0fhwtgUa5r0aV9t1VXU2YlYbCEnwM9CXztUzAi9FAslFWl+ENK4Mn+YFbiqQ1vwQ1DHf3UtmmOqC2w+gO+Dtk0paWnNFpsya5xiOromU8VExmM5T803n8tO8PdUkrmgyqeZBO1dVeaZmHfmo7oVsyyiVoP5zXIg/txodtSm82XSb3JzyxWzCUsEslVkh4mwhucLA0u++7PfOTq9y1txVKe8cYCRIGJRYjtlJpQ4qXnJXbp0d9v1VqeFRV6GHOAAgmYEKqQQA1AGAeoKqgdZL3KavSwfihgKYL39HFr449ePEnQf0thr+qfT6Hz7notlbCxyxgLfH/aeuj9uWEFJMuU+0n/0/BHeMlUNPq+3YRoK8+GAqh+Id1YzqlB4IxOXqm333wBRxuH5NPXrMc44EqohdgHDTAtPNwvdy/drP8+unXZNshNGP0PR8IuKbqN+yGHPxXva1HehMyaSDgqg+OhVE+prDfEOSOCvXcBzzA0Y3gbGqe2tL2AczWrmUtcsxA2T8rGQRELSny74DKOkJqu/qjrYXXElb5Rl429QHbq4yqceHxykl+R1Yce0TW4E0gnY7mXyk++SAOqyvMJabSlNfgZiXxFmmZsUeuvH2dOLHH5FGcX+dK5xM63El+HkXld6CdQmMp0O/OS59jWIEVln4DcH+zG+A7EbBI299TbjHldGNw++1HX9e2G/BWv1U6b3tQ5NimLGDurjf1RU1c29o/jprYu1D5Qk0sEJFO70/kstt/K0/8Gya0OZKCe7N9mQQL/4K7lbhOfBw3B9/je23v3L73YT0UR1gVRJQdZFGrRFuPZsMNCOrRv6qY4zTzOAdthVlQg7Ow0Vd/smXwfg3w08nB5gT0nqD0b/MO6iPsvfzow1h4v2djErwcan/RuBBGFnmcAtRh9ND1L93Pt/1pdlKPAdmH170pu/EzcP5ZM+SyswAe8bMAABaGSURBVGfI2dMnSgXesdT0NJOoVVv+1o4ogRIb5Tl4rY+9sl1e3XFQGvABm1Se6ymAqyoD769vlv/8/TopL04FKE0NSun//fVNchABm3mXBzBYdXr/JBT0cfoShCpOPz8dpmoivLqzFuc18IaHaiENoM9vOUsVcHfUN4Oj6DlQdXjUSoOleaiMkfHbsVoU4wuwSupJtkyGiiJGl2jcnNQKT5cho00cL9tTDqWaPUse4lVZGpVWQ4Wnki4M9U3lUT8DRERIJq8VT+AdsvLvvi/FB3b2oWjHEIww5pkDhXcuD0RNfKko1bZWqZokyTiuC417w1QjfLRG8PflW8D9c8lPvzLKWVDctnOJ5BEV1zu+RuZVr89hSODW1dJYhRnu9YA0hhXMH6QsOoBHAem1/M4NsDIP4U4Hs+1fyDxPZGN6TRJRyvZNvrKR4HO0b7+kDMr7jgvHMW0IKThaK3vCz8PTvSr7KecoPNiXUs9OBVV69B8He0LBfyZgv3Q8jrHLg8b7lerZhuigylMylshg9+b012c67xHMc2Tz/mO4Gjwuv1v7upQWo+cMwE4sK5JSIsv6GGgn0VjrMCCobWxHV7ZdjhOJtp1r6tDFUYf1p/ywPLIPoL579Ut9cZl+KeshoqeFgSTWi+Zc89puWYsOb65nEgdPokphZ+4YA6l7JOY52kAk1GA+k6RApTb8+2ClYL2kgbBIDiwAO4k1FpZYxYSHSScfD8pWvyQmrAr6rM7r7GCu3b8NL8ZOEHbG3imhsmxjAa8XhVi8dmHtzd8hwPlNHloXZfGAlazi4U+AWptCfz6GEUGptM74J5rclW7WfLbBkwx14oNWfQvwYB1nM9TkQe2sue/YWJMl3pBOqNJM1bOQj2gH2MKo0xV14mJZT6BkfQTKcCLXl/NAK2l/OT5ir5cJ03ajb9uHuhSNx9Xy8sWA9HTqoUnMKCwPsaNwtB3Q8jV7+eu7l7e0M7+4XLTZHHSeRZ3YpFwpZg3OIHavKyPkp2otKEtAU64XYyi7qdTyJxaWyw1njJFx+V6ZTETcQsA2AMWvlL/2dbgp/kGfDzPpavWHfzYAqKu5U460dMqbxOnSrdodL5nAJmT6UKoKfuYnd/mh5fXvVJPWQ6MdJzIlOMV6I9oxHUh/6RTr66+aYb/uwywrjh9YtcByNKyL/ShM9e9ixuoaASRj7DhhTNceb5cnN/TMSMLrg3pxt0J1rCLyFSxK9nSPx0vkAq+nHR5jJsAq8IaheBTgdB97mva+yY572EiePZ7J7MAfZWG8j97AerDexf1nZektx2T9XfBHU8lXC0AX8wIZF4E89iSOV6IPS8KHOWw6DyFl1u5X1oS2k05ERAAM1V+BJImKm/ypRPwvSiERX+OhL4g/+CGI0TEA73RJRPBdkCPVv1yBN4LLqaKCTYdNBS9dPmsmzbApxOfJ+cnN8nzKHDazuBdTYzsPFgyvgm72FnkieAnLkXxHm9vlGH9e+llckCdFCATCeJPP5XkoR/nTemmkrHsF0YvgqerhSZ378PMtYcdpnazTVXnqIejKVvsSTYb0Md9TF/Sifh2sBzZY9Wi/NA12fW6tI+9fpQaDnbjyA9L0xXes48Y362P/fgKrI/iJTgKeDwvb4XhsOah7OPWy5kRlGHp1DT4I2uBZcoY3floxD/XR3nN3uWan1fcel5Znv44Jvzr/voZsCKSS50lZ4AlK9wCsH7UkDautR1UNv5L01kqi4dgJ+aY681Yyn7dRHb6Q1PVhvFk6W5vlOSzRrrxNNwesrUgamtzWNzZHCiUvgkl/BpkA+cTL1AVFbuPUxTeGa/MwClYQdU2IM4vbZZirtisgKK0B1d1P2HFu+h59eYf8fPWLUt/eaRx0qEpLPkreeQZo/TK+pEhmjB+Dn88yqaoolbJinJH3I4DI7MPb/a5glkQAocA/Ek5vp+J96+2OfcSWz71MR2x3/+Q6VgD1loSK1WO1vjReYlQ53stwepICCVgACaKwdhB1NU1F3lzqkYPKnNUCoLJNzFfLs0JWfh5vUxx/jRjB10GwwM3ycBjz29SRub45H8kh0nfDJNUIkHjgAaDTCV+o5N0vl3VqWOKl1MUx3DObwIfjMY093CNx9xbRLGGmlaUBYHkJMijlXvps9nHTfszeJ07j9izQtX0l3NOjOi1q2G/6uGFCUlb+/TSxoosZDgCIH1mv7BQnry9IrqypFKfzOigm5aEyLs8aVErQvPAupRybAV6+Qp5p+MOtN/5w0+PSzygxuYIWWhcKsLqRwaMOpZWpMzMCsG1Y2Rw42iS7EB6Y2VRAo5AF8OsxUFW3CgJ+F3zDQSkpKSByaLloULv5U8fKJHx8qjWPWt8MJhCqv89//tVTsnHnYSjqoOH7TRtbitPmYhlXUogAhFha8AHz4YmqEFEVyXWqT0dSl3Yvbj8g+2obsDBCgFWEkUU4ZPQrNXaUen5Sd3gqmPOexn6cjrGN1vm/aAYs1FWUz2qxEG311QPlaDsrEG4pZcrrrTxxexMH29sZtUtFxiZQphNenPqPBY68nmV8P1NJRFOPcg6ScpCX+x9k3pZGeJkpNgF8MsGFITWCw7AjYNnH23sA1kwrYOz//B7gBICDZLIsvLEHcAqM34G0aaxFAEMHSlR5vWIBbPIpXiTUsdTdYarPlv1jiU/4Pvd61LQCOIZJwn9Fjkbe2Th++Xu5sh1tB2sqQzmD474C7EZxIg/J8UhfCt7TqtSrCvYIhUM+iW9nbhibt5E6UTXD8Xg0OZtgjK/TQPbxP6i2oQkdO+OAV6yuG6NlvcbOXRK4wLPgebjSXp1jTSmoApxRPMQCJyF1OFPmACAebMqfxx793sdeRQUsQDiQYlmMqeSyM6fKgukTjN5kaQERFajzbSXa3oqa0NOv7jD+OmGDwtqBVcQXH6DvR22otDBfpuDIeea4clkwtVJmTq4AeMPo8oYxPsDGf5AobbVUf/KVnfLzh16QFubDwzpWuYAXT/nqlq+iKCzjy4plKjqjU6Hyp00YgzDI9YlazKZUTDyotz0fb2syRwv/ScxANKkUmCt40dfPthA2IXDS46C+yxo1xYuAy1ExbCqpYAyzDt553jAwwqh34bFf82sdJqfdScQDkYp5ZLjPLVgUKSB+ENQywKwAa6nf2fy+IGMnodiU/aDFuK1WHWmYMZdUNQo3hT2tVSjhbDqc7rOD0M7bS6c3kSASgmEtUNIZB5W1yh2kUrWwOcT6A7j4fSSYL/ehQKtvDUmb7wJeSrQfGJs4TyMgq5O62iaZWPUqlOV87hXj+m2ReEuUpZFNASu/mli4XGfsOig8hzXuNiPkWlZSHoKbFBB1XH2SsmboghbnT/cLhfNO5hMJHRLkdtmyq1buffJVpMxhWT5/GqaUs+WcmZMMW0Gpu7eTtC3c+uKUnf0SqxvTuOGudMkh1Hm27j6iokRj1umD0i3H1HM+YHvh/BkyZwqgC2tjIuCnUU7fatJpUf3lJjaa41D8EulZISg0sdfaEAV6XgH8Ga6fiML58LMr6cuZ9OG82ZNl+oRymVReIlXjSrCQ4h0YTaMzMNgzYAGwemRXviOkG8QV4ODsAyV5cVigCVgEHsE/rErkU8kIxohu4KgGAYIxy1qPwGgz2KFvGZSXxqayD/EC7pe1Nfr6uykaQ3Dkg5Iij0cFaoBMTJWKeyWjwqUqVnq+hUSzkLh3lfXU42jIGHWwrVS3HtWdp+jHUdpXxKH9BFoE9nPwZ12thu7qlf8KuOvLaaOZQJxMvlWaZhz7f3B1+D3Zh6Bu13ddDYrucnxpCsxEqHc2eAYV7BwEx16WYvrfuYw5OALFajVTTzGU9GKk2ONhdRzmr2dsFqyEnqi2UM1QvmGiO+RIA0c/HUiOlAR9ibkgnegWNxHQrvbpTfKHFzZLFcf5s2ZOlndfOF8uXjjTsBFyFB/YJW07R/tJ9QfMUooZhi3PDF3HhrYO2X3wmDy2fpuEAFztx1xYGUvmTpWrls41rIZcFkIn7Qjrw7BAem1EGhbIhprVFaxqTWYHIiig1dklBwltvXnHYfnts68Dun4irBbBXsGqa/I4uXBBlSynTyVQ4TmGdtLujGYYnYE+M6BOdGNEYVWHugmCBMZ835NI5EUJqqVOKlUcTsjqeT0S+uPkLzZRV5Uaw/ON8zsA7X9gLzSj2+kuzaLWpKzl5QJV0tUAlICmhq4GsjlQcySPEs6wpx03I9QZYWGwZjcvT9KzVzpj9QC1vi5usolm4HU4bpsXbD8KZXehq7s1fdt8hpJdGEVkajBwGRUpB36msoA99ku0X4cq2A0A8VR4wUtxrH2/FHfuyqpHf6z8OpoPdSsJgTMDIFe+ZiHU19/Q7oek5AjjRadXebBGSOgsgAI+EwOLrZJpYBGLAe680ArwSr17YWnUKxnYNw0cYPuWda+YR+A+BwfwwU24cQTSuu+obDvAXL62U847s0o+csW5UJXTsWJTenOQktuseTYuAmuEN1e1KBq3pTnWgZPndtkEH/dhop/e89SrctniM6T6nQtMqOlBYSGk+2CG1PNDhaK6TZvNR52oQv02ska3H6iT4Iadcj9hr6smVMhFeKG6Ztk8mQul+3ao7EGa0dFq/phnoAOwDMAisM1xPwL/sEWe/pZ61u/18qeO+TrWQihBQV5umAEWQiG7XZy2Znnih/0o2WshkkUcHjUMUMGNBV/WCmAu2tRDmWqeVV+4GCC8BOq0GJ1RKNDka5AhTXorI6FuxeFPXx0bQZkv2SqPfdtEA8jI0/erCaSoDAzzzkUJWHA/hPpcQBd2ge9sKluFU4udFKzNKuypn4SmwhU4xXatzzwOqly+iwBa11hTKXkymHpRwUcItQgq93HqUDUxN2lUBLO5AHgWkRFUq3AS0R36wjkn28FMZqzmH7roNXoSexvb5PDzm+XFrfukesXZ8hdXLDFCskEBt6y+s7m6TbtX9TsbjG6V+heBomzYul827TokDz7/urz/0kXGa9QkeMinRSWtuy984XEon0VXn/6pPX3H8VbZz9y8sm2f/OKJV+S9Fy6U6ovOljMAWiVERtPoDJzyDNjxEC8eFiC8CRaCl46Txe+lBR+OH2zbpUR1kQoRaf3F5XLtl/Samxo5Ao/f3ZplhZUkFIvG/dKkVlsJQD1UOcaUa27Nx5nEIviyf00DZ9EXYoAlXoIyfkHWjs0GbgserEZC0JdX3xmfV+sYa+rVf+JtNiyFNrQO9KjfQ0Grkr9XJTOkJOG8lYfq8zxIW2dxZMfCTG6UvNBaTIIbuk2C1bCg45XlUOezqIkNQvbR6A4oWeXDmqr4hCp1ZsChmMnAlJ+9nPcXNoEBajdTAqGgD3NSpaIcWAsO8160pFKuXe5uMNpnFSJiijy4AJvqopmo1Hc9QqOmLAcAk+/9Zq28uu2g3Pbnl8qFZ00zfjrTRU7Lpz6wVFJevPJzm3Fqs3HPEdm5/1F8m+6Xj1+9TJZxVD8VW/t0naf0mdEXXUn6BPQU0gyl3VrXJHf+5ll56MWt8kFCtLzngvkIC9U/RA+v95TaGs38pzkDfj8UVzqMCdSo31gX9aJee02N1QW4AbKOMsAIry2eTyJFf4/rdJeFqupEYQwE6qd9j5KHukt7PBpFlj+V/julqHHdgprTB9QYTPJwAONRSyicnCh/NZnYQp7vSntsexYv01Tm0WCK4BDY5BAa25Fv0LayI0iq9hCqIzz4XQDl+m6gNPcAP9X3VZ8UFmFt/MkY7JGnGPN1gOxY7mDoINX0B36yAikpsRG/AM4qfA4A4GhJOMn/gvb+HzaYHtBXY4y84BVoO9zB9enkmwmFe5ac/9Ht8vyPXWGXHysuF3z1ra5E8HIH9VCHknIkO095uP/Ct5dOD8CaVlL/pIAFPRFph1f63Oa9UvufD8itN6yQavyOliDt7y+Zoqny/eUZ8PWMeuDkSzMCswdxSLKRMNIfWbVEPnrlUhmLGWh/aVD7oo1k9MfMDZohb2Al9X9/+pisXrdFPkcEgYvwARA6BScr/fV99PqfyAyoOaoP3iBCV6gqLGI8LkV1ouHH/OrZHEEAzEyVKznWDMhIgCWVlNsQjzcAYNkvqp1EBzagknxAEB6q13sGi1rBHFA2WgNYOxHryk48hrOmu6XLsx7d255jtlu9mkDi+QtrMFPUQbdVAxQqampNtK2+E1R9q6st443hnsfiaA87RPNYXsxz0dea3npQ9hfcJ768eVyfxliu5ubLsuIzP5c1sB068YsQ8C+mMGNJvoEjoBfkeOOBPloGq/7uVfp9FAq9ChCnf84VEix7hlZdgLXDJYby1z4r9W9ZC2jH7bP2WxKNzEKZfvMZ7/BE1ZQoFLhSTBnZNMPgJZ0f1fy1ZAeS/6/99FHGYMsNF59tVKpytROjXzYhPSD/6X+uHG/1mtuXLqjrXaidfevnj0tDc4d8pvoiJP2q2ZKddEqiCPFs+Kinb55cFkIz430OZyn1sBA+98HL5LrzF+QUEKqnMRTGWCusb11kp+/BZU/G6K/TPwMQdLbHZwUNdTjglc+xKHocCu0ZwOpNQG0PL35vfmffvscT7fAjn4Fvi65rr0WkR2C95shajn8uuKRr8FlEjE08yT2oU94nbBtICrDY8zvwW4WosM4GTEhflvr8WtH4W30TBfE9kIw9Coi5qjWZ+KPS46R9mI3ioLQFMjcLPY5uF1/iEYA1yIvwmnQ1dskPfxyXVbc9BTtiJq/GAvqGFBwNCfHnYXkWkJYO1M/QGHCsrVC7T0MpbwdcU2RnRueOtR3Gq9GvGd9h5hCedrwO/q4O0AUOp6sJYH2We1DkuplllDVfHbQlmB+S74xJFYQIWYCdOXOiEvIhSjaguaeuESFUhzEY6M0H1a4snzcd36Cwb9x98bT1zMb4vaE9IupmrxydVnUqnZlUKKuxpq656CyjE6waJactadW6MdKnTXvrZPEZk2VOHh7RerVZhA7y0vKERHbv2dPQ2taEeqEy0EbT/44ZAFg6difaOxTU+ry+/QwROPS+QjmitKKoHeLIfLgrt4vAzAoqig9IS/tXoehcgMu8l/6eDHZKxa5swZO38BXp7NghAVXj0gT+eX14zoHv24ZUN4jA6lBXl+y7G8qt3zGgE+u5T+wOfA+o8n6vFMTDhQ2bY2tzE/Uohy+dMPHM/yURZx+QJOUOcjzf/mMFdZHVe4/Iu2feKR0tACscD8tD+wX4v+Wtuib8KzSNHpDCqEe6CG3+XIkaW/Sd3w0/bJWrvvATVGTv5cUDpMNx2bNR59LNW+x5XZo77zDzrG32Tmo63FliNjdfIOS9jZAaXy1wYCsMYYonNDKoni7UBLnv3KplVEEQa6lwPpvVaU70RefOhk/rzaT0U83qHIc5eRUXsAZVjzsbf09L5+JEck3SF3VU1BtctUEfG08hbDC/30YrFw3zxAAEGqelp6OVDvYMOH6Ykk4yGh5jHenYmwMA+mvw0a93yh13dMmWLZbMm+fI7+7sCx69y977lThljpsyve+lf2tdNfdl1/W7r3RRLpJVTvOlU02Nfu/5nb7e+/M8nGMLf9rnXGkxdT767b71LJNm2XKoxYxz9Ve4/7VUHpxsL9SIs5VN3fNQo/dJi+/AEm2v287v74WMyfGyu31wJLNfpg8PU0eqi/d+M8LY6/rts87DV2jTqnFrG/13dAZGZ2B0BkZnYPBn4P8DhsavFN1zpFYAAAAASUVORK5CYII= 2x\" alt=\"Supremo Tribunal Federal\" class=\"img-header-stf\">
                                        </div>
                                        <div class=\"col-md-8 text-left text-news\" style=\"color: #212529;\">
                                            <span class=\"simple-bold\" style=\"color: #212529;\">$title</span> <br>
                                            $description
                                        </div>
                                    </div>

                                    <div class=\"text-right autor-news\" style=\"color: #212529;\">
                                        STF - $pubDate
                                    </div>

                                </div>
                            </a>
                                ";

                    echo $msg;

                ?>          

                <div style="padding-bottom: 40px;"></div>
                
            </div>
        </div>
        <!-- Fim Noticias -->
        
        <!-- Contato -->
        <div class="campo-contato">
            <div class="container" style="height: 100%">
                <div class="row infor-area">
                    <div class="col-md-6">
                        <span class="conteudo-white"> CONTATO </span> <br> <br>
                        <span class="endereco-white"> <i class="fas fa-map-marker-alt icon-brg"></i> R. Mal. Deodoro, 450 - Sala 1105, Centro <br> Curitiba - PR | CEP: 800.10-010 </span> <br> <br>
                        <span class="endereco-white"> <i class="fas fa-phone icon-brg"></i> Tel. 41 3322.2500 | 41 985.352.500 </span> <br>
                        <br>
                        <form>
                            
                            <input type="text" class="form-control brg-form" placeholder="Nome"> <br>
                            <input type="text" class="form-control brg-form" placeholder="E-mail"> <br>
                            <input type="text" class="form-control brg-form" placeholder="Assunto"> <br>
                            
                            <textarea type="text" class="form-control brg-form" placeholder="Sua Mensagem"></textarea> <br>
                            
                            <div class="text-left">
                                <button class="btn btn-primary btn-enviar">ENVIAR</button>
                            </div>
                            
                        </form>

                    </div>
                    <div class="col-md-6">
                        <div id="map" style="width:100%;height:100%;"></div>
                    </div>
                </div>
            </div>

            <div class="text-center" style="padding-top: 120px;">
                <img src="img/Logo2.svg" width="160px">
                <br>
                <br>
                <span class="simple-bold simple-white">Copyright © 2019 - BRG Advogados</span>
            </div>

        </div>      
        
        <!-- Fim Contato -->
                
    </body> 
    
</html>


