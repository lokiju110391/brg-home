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
                                        O BRG Advogados entende que cada problema demanda uma solução específica. <br> 
                                        Venha conhecer propostas inovadoras 1.
                                    </span>
                                </div>
                            </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="bunner-principal">
                            <div style="margin-top: auto; margin-bottom: auto;">        
                                <img class="brg-mobile" alt="Logo BRG" src="img/Logo_big.svg" width="600px;" style="padding-top: 40px;">
                                <h2 class="titulo-branco">Soluções jurídicas eficientes.</h2>
                                <div class="separador-tipo-1"></div>
                                <div class="brg-mobile" style="width: 600px; margin: auto;">
                                    <span class="info-branco">
                                        O BRG Advogados entende que cada problema demanda uma solução específica. <br> 
                                        Venha conhecer propostas inovadoras 2.
                                    </span>
                                </div>
                            </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="bunner-principal">
                            <div style="margin-top: auto; margin-bottom: auto;">        
                                <img class="brg-mobile" alt="Logo BRG" src="img/Logo_big.svg" width="600px;" style="padding-top: 40px;">
                                <h2 class="titulo-branco">Soluções jurídicas eficientes.</h2>
                                <div class="separador-tipo-1"></div>
                                <div class="brg-mobile" style="width: 600px; margin: auto;">
                                    <span class="info-branco">
                                        O BRG Advogados entende que cada problema demanda uma solução específica. <br> 
                                        Venha conhecer propostas inovadoras 3.
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

                    $msg = "  
                                <div class=\"card-noticia-2 text-center\" style=\"cursor: pointer\"> 
                                                                            
                                    <br>
                                    <div class=\"col-md-12 img-news\">
                                        <span class=\"simple-bold\" style=\"color: #212529;\">$title</span> <br> <br>
                                        <img src=\"$description_img\" >
                                    </div>
                                    <br>
                                    <div class=\"col-md-12 text-left text-news\" style=\"color: #212529;\">
                                        $description_text
                                    </div>

                                    <div class=\"text-right autor-news\" style=\"color: #212529;\">
                                        TSE
                                    </div>

                                </div>
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

                    $pubDate = strftime("%d/%m/%Y", strtotime($pubDate));

                    $msg = "  
                            <a href=\"$link\" target=\"_black\"> 
                                <div class=\"card-noticia-2 text-center\" style=\"cursor: pointer\"> 
                                                                            
                                    <br>
                                    <div class=\"col-md-12 img-news\">
                                        <span class=\"simple-bold\" style=\"color: #212529;\">$title</span> <br><br>
                                         <img src=\"$image\" width=\"230px\"> <br>
                                    </div>
                                    <br>
                                    <div class=\"col-md-12 text-left text-news\" style=\"color: #212529;\">                                        
                                        $description
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


