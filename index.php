<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>RCK Games</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>

    <!-- animate.css -->
    <link rel="stylesheet" href="assets/animate/animate.css"/>
    <link rel="stylesheet" href="assets/animate/set.css"/>

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Thumbs -->
    <link rel="stylesheet" href="assets/thumbs/slick.css">
    <link rel="stylesheet" href="assets/thumbs/slick-theme.css">

    <link rel="stylesheet" href="assets/style.css">

    <!-- jquery -->
    <script type="text/javascript" src="assets/jquery.js"></script>

    <!-- boostrap -->
    <script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>

    <!-- custom script -->
    <script type="text/javascript" src="assets/thumbs/slick.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

<!-- Header Starts -->
<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav"
             style="border-bottom-color: #E89F10; border-width: 0 0 2px;">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo Starts -->
                    <a class="navbar-brand" href="#home"><img src="images/RCK-logo.png" alt="logo"></a>
                    <!-- #Logo Ends -->

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>


                <!-- Nav Starts -->
                <div id="navbar" class="navbar-collapse  collapse">
                    <ul class="nav navbar-nav navbar-right scroll">
                        <li id="start-nav"><a href="#home">Inicio</a></li>
                        <li id="games-nav"><a href="#chobi-section">Juegos</a></li>
                        <li id="coming-nav"><a href="#proximamente">Pr&oacute;ximamente</a></li>
                        <li id="team-nav"><a href="#team-section">Equipo RCK</a></li>
                        <li id="contact-nav"><a href="#contact">Contacto</a></li>
                    </ul>
                </div>
                <!-- #Nav Ends -->

            </div>
        </div>

    </div>
</div>
<!-- #Header Starts -->


<div id="home">
    <!-- Slider Starts -->
    <div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Item 1 -->
            <div class="item active">
                <img id="slide_1" src="assets/img/Slider/inicio_1.jpg" alt="banner">
            </div>
            <!-- #Item 1 -->

            <!-- Item 2 -->
            <div class="item">
                <img id="slide_2" src="assets/img/Slider/incio_2.jpg" alt="banner">
            </div>
            <!-- #Item 2 -->

        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="top:50%">
            <i class="fa fa-angle-left fa-2x"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next" style="top:50%">
            <i class="fa fa-angle-right fa-2x"></i>
        </a>
    </div>
    <!-- #Slider Ends -->
</div>

<!-- Social Links -->
<div class="social-links-container">
    <ul>
        <li>
            <a href="https://www.facebook.com/RCK-Games-1561226457532605/?fref=ts" target="_blank">
                <img height="30px" width="30px" src="assets/social-icons/facebook-icon.png">
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/rckgames/" target="_blank">
                <img height="30px" width="30px" src="assets/social-icons/instagram-icon.png">
            </a>
        </li>
    </ul>
</div>
<!--#Social Links Ends -->

<div class="divider-2" style="margin: 0"></div>

<!-- Games Starts -->
<section id="chobi-section">
    <div id="games-container" class="container">
        <div class="row" id="game-row">
            <div align="center" class="col-sm-9 wowload fadeInLeft">
                <div id="video-container" class="video-container" align="center" style="display: none">
                    <div class="center-player">
                        <img src="assets/img/next_hover_btn.png" id="videoplayer-img-next" class="videoplayer-img"
                             style="position: absolute; z-index: 999; left: -50%; display: none">
                        <img src="assets/img/previous_hover_btn.png" id="videoplayer-img-prev" class="videoplayer-img"
                             style="position: absolute; z-index: 999; left: -50%; display: none">
                        <img src="assets/img/play_hover_btn.png" id="videoplayer-img-play" class="videoplayer-img"
                             style="position: absolute; z-index: 999; left: -50%; display: none">
                        <img src="assets/img/video_player.png" id="videoplayer-img" class="videoplayer-img"
                             style="position: relative; left: -50%;">
                    </div>
                    <div id="player"></div>

                    <div class="center-play-btn">
                        <button id="play-btn" class="play-btn"></button>
                    </div>
                    <button class="play-youtube-btn"></button>
                    <button class="next-btn"></button>
                    <button class="prev-btn"></button>

                </div>
                <div class="col-sm-12" align="center">
                    <ul class="game-indicator">
                        <li><img id="chobi-game" class="game game-active" src="assets/img/games/chobi_90px.png"></li>
                        <li><img id="ghost-game" class="game" src="assets/img/games/ghost_63px.png"></li>
                    </ul>
                </div>
            </div>

            <div align="center" class="col-sm-3 wowload fadeInRight gameInfo">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="modal fade and carousel slide" id="thumbs_modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <ol class="carousel-indicators">
                                            <li data-target="#lightbox" data-slide-to="0" class="active"></li>
                                            <li data-target="#lightbox" data-slide-to="1"></li>
                                            <li data-target="#lightbox" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div id="thumb_item_1" class="item active">
                                                <img id="first_thumb" src="assets/img/thumbs/1_original.jpg"
                                                     alt="First slide">
                                            </div>
                                            <div id="thumb_item_2" class="item">
                                                <img id="second_thumb" src="assets/img/thumbs/2_original.jpg"
                                                     alt="Second slide">
                                            </div>
                                            <div id="thumb_item_3" class="item">
                                                <img id="third_thumb" src="assets/img/thumbs/3_original.jpg"
                                                     alt="Third slide">
                                            </div>
                                        </div><!-- /.carousel-inner -->
                                        <a class="left carousel-control" href="#thumbs_modal" role="button"
                                           data-slide="prev" style="top: 50%">
                                            <i class="fa fa-angle-left fa-2x"></i>
                                        </a>
                                        <a class="right carousel-control" href="#thumbs_modal" role="button"
                                           data-slide="next" style="top: 50%">
                                            <i class="fa fa-angle-right fa-2x"></i>
                                        </a>
                                    </div><!-- /.modal-body -->
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                        <img id="game-logo" width="200px" class="img-responsive"
                             src="assets/img/logos_juegos/logo%20choby.png">

                        <div class="divider"></div>

                        <p id="game-descrip" class="choby-descrip">
                            Después de un pequeño choque, los dulces de Chobi se esparcen por toda la
                            galaxia, ¡Ayuda a Chobi a encontrar sus dulces y descubre un increible universo!
                        </p>

                        <div class="divider"></div>

                        <!--start-->

                        <div class="thumbs" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite": true,}'>
                            <div><img onclick="openModal(0)" class="img-responsive hover-img"
                                      src="assets/img/thumbs/1.png"></div>
                            <div><img onclick="openModal(1)" class="img-responsive hover-img"
                                      src="assets/img/thumbs/2.png"></div>
                            <div><img onclick="openModal(2)" class="img-responsive hover-img"
                                      src="assets/img/thumbs/3.png"></div>
                            <div><img onclick="openModal(2)" class="img-responsive hover-img"
                                      src="assets/img/thumbs/3.png"></div>
                        </div>

                        <div class="divider"></div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <a href="https://itunes.apple.com/mx/app/chobi-candy-quest/id1012748944?mt=8" target="_blank">
                            <img src="images/Stores/apple_appstore_big.png" class="img-responsive">
                        </a>
                        <br><br>
                    </div>
                    <div class="col-xs-6">
                        <a href="https://play.google.com/store/apps/details?id=com.rckgames.chobicandyquest&hl=es"
                           target="_blank">
                            <img src="images/Stores/Google-play-logo.jpg.png" class="img-responsive">
                        </a>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</section>
<!-- #Games Ends -->

<div class="divider-2" style="margin: 0"></div>

<!-- Comming Starts -->
<section id="proximamente">
    <div id="coming" class="coming ">
        <div class="container about full-height">
            <div class="row full-height">
                <div class="col-xs-12 full-height" align="center">
                    <div id="ghostLogo-div" class="hidden-xs">
                        <img id="ghostLogo" src="assets/img/coming/ghost_apocalipse_logo_grande.png">
                    </div>
                    <div id="ghost-descrip" class="hidden-xs" style="display: none" align="center">
                        <div class="parent-div">
                            <img id="ghostLogoSmall" class="element-to-center"
                                 src="assets/img/coming/ghost_apocalipse_logo_pequeno.png" width="300px">
                        </div>
                        <div class="ghost-descript-div">
                            <div class="divider" style="margin: 30px"></div>
                            <p class="coming-text">
                                Después de mil años, Shardock, el emperador de la magia oscura,
                                ha vuelto y desatado el caos. Usando hechizos e invocaciones mágicas, Bruno, Mila
                                y su abuelo deberán luchar contra el apocalipsis fantasma y vencer a Shardock.
                            </p>
                        </div>
                    </div>
                    <div class="visible-xs">
                        <div class="valign">
                            <div class="parent-div">
                                <img class="element-to-center"
                                     src="assets/img/coming/ghost_apocalipse_logo_pequeno.png" width="300px">
                            </div>
                            <div class="ghost-descript-div">
                                <div class="divider" style="margin: 30px"></div>
                                <p class="coming-text">
                                    Después de mil años, Shardock, el emperador de la magia oscura,
                                    ha vuelto y desatado el caos. Usando hechizos e invocaciones mágicas, Bruno, Mila
                                    y su abuelo deberán luchar contra el apocalipsis fantasma y vencer a Shardock.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- #Comming Ends -->

<div class="divider-2" style="margin: 0"></div>

<section id="team-section">
    <div class="hidden-xs full-height">
        <div class="full-height">
            <div class="row full-height" style="margin: 0; background: white">
                <div id="team-container" class="col-xs-7 col-md-8 full-height">
                    <div id="teamdiv" class="full-height">
                        <div class="row">
                            <div class="col-xs-12" style="padding: 0">
                                <div class="crew-title" align="right">
                                    <div class="crew-content">
                                        <p><b>"El Crew"</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" align="center" style="height: 200px; padding-top: 30px">
                            <div class="col-xs-2 col-xs-offset-1" style="padding: 0; height: 100%">
                                <div class="cf" align="center">
                                    <img class="bottom img-responsive" width="131px"
                                         src="assets/img/team/ricardo_color.png"/>
                                    <img id="ricardo-img" class="top img-responsive" width="131px"
                                         src="assets/img/team/ricardo_bn.png"/>
                                </div>
                            </div>
                            <div class="col-xs-2" align="center" style="padding: 0; height: 100%">
                                <div class="team-member-container">
                                    <div class="cf" align="center">
                                        <img class="bottom img-responsive" width="131px"
                                             src="assets/img/team/landy_color.png"/>
                                        <img id="landy-img" class="top img-responsive" width="131px"
                                             src="assets/img/team/landy_bn.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2" align="center" style="padding: 0; height: 100%">
                                <div class="cf" align="center">
                                    <img class="bottom img-responsive" width="131px"
                                         src="assets/img/team/misael_color.png"/>
                                    <img id="misael-img" class="top img-responsive" width="131px"
                                         src="assets/img/team/misael_bn.png"/>
                                </div>
                            </div>
                            <div class="col-xs-2 center-block" align="center" style="padding: 0; height: 100%">
                                <div class="team-member-container">
                                    <div class="cf" align="center">
                                        <img class="bottom img-responsive" width="131px"
                                             src="assets/img/team/julio_color.png"/>
                                        <img id="julio-img" class="top img-responsive" width="131px"
                                             src="assets/img/team/julio_bn.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2" align="center" style="padding: 0; height: 100%">
                                <div class="cf" align="center">
                                    <img class="bottom img-responsive" width="131px"
                                         src="assets/img/team/javi_color.png"/>
                                    <img id="javi-img" class="top img-responsive" width="131px"
                                         src="assets/img/team/javi_bn.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="team-info" class="row" style="display: none; vertical-align: middle">
                        <div class="row">
                            <div id="team-imgs" class="col-xs-3" align="center">
                                <ul class="vertical-list img-list">
                                    <li>
                                        <div class="cf" align="center">
                                            <img class="bottom img-responsive" width="110px"
                                                 src="assets/img/team/ricardo_color.png"/>
                                            <img id="ricardoLateral" class="top img-responsive" width="110px"
                                                 src="assets/img/team/ricardo_bn.png"/>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cf" align="center">
                                            <img class="bottom img-responsive" width="110px"
                                                 src="assets/img/team/landy_color.png"/>
                                            <img id="landyLateral" class="top img-responsive" width="110px"
                                                 src="assets/img/team/landy_bn.png"/>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cf" align="center">
                                            <img class="bottom img-responsive" width="110px"
                                                 src="assets/img/team/misael_color.png"/>
                                            <img id="misaelLateral" class="top img-responsive" width="110px"
                                                 src="assets/img/team/misael_bn.png"/>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cf" align="center">
                                            <img class="bottom img-responsive" width="110px"
                                                 src="assets/img/team/julio_color.png"/>
                                            <img id="julioLateral" class="top img-responsive" width="110px"
                                                 src="assets/img/team/julio_bn.png"/>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cf" align="center">
                                            <img class="bottom img-responsive" width="110px"
                                                 src="assets/img/team/javi_color.png"/>
                                            <img id="javiLateral" class="top img-responsive" width="110px"
                                                 src="assets/img/team/javi_bn.png"/>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- RICARDO INFO -->
                            <div id="ricardo" class="col-xs-9 hide" align="center" style="padding: 0; margin: 0">
                                <div style="position: absolute; width: 100%; z-index: 999">
                                    <img class="img-responsive" width="150px " src="assets/img/team/ricardo_color.png"/>
                                </div>
                                <div align="center" style="position: absolute; width: 100%; top: 50px;">
                                    <p class="text-center team-p">
                                        <span class="member-name"><b>Rich</b></span> <br><br>
                                        <span class="member-country">Mexicano</span> <br><br>
                                        <span class="member-job">Productor & Manager</span> <br><br>
                                    <span class="member-description">
                                        Programador Amateur, experto en Unity. <br>
                                        Apasionado y no conoce l&iacute;mite sin antes intentarlo. <br><br>
                                        <span class="member-cite"><b>"Voy a marcar un cambio generacional en M&eacute;xico"</b></span> <br><br>
                                        <span class="social-list">
                                            <a href="mailto:ricardoeglezg@gmail.com"><i class="fa fa-envelope-o"
                                                                                        aria-hidden="true"></i></a>
                                        </span>
                                    </span>
                                    </p>
                                </div>
                            </div>
                            <!-- ENDS RICARDO INFO -->
                            <!-- LANDY INFO -->
                            <div id="landy" class="col-xs-9 hide" align="center" style="padding: 0; margin: 0">
                                <div style="position: absolute; width: 100%; z-index: 999">
                                    <img class="img-responsive" width="150px " src="assets/img/team/landy_color.png"/>
                                </div>
                                <div align="center" style="position: absolute; width: 100%; top: 50px;">
                                    <p class="text-center team-p">
                                        <span class="member-name"><b>Arvizu</b></span> <br><br>
                                        <span class="member-country">Mexicana</span> <br><br>
                                        <span class="member-job">Ilustradora</span> <br><br>
                                        <span class="member-student">TSU Diseño y Animaci&oacute;n Digital e Ingeniera en Software.</span><br><br>
                                    <span class="member-description">
                                        Ilustradora profesional, positiva y proactiva que combina su pasi&oacute;n con su trabajo. <br><br>
                                        <span class="member-cite"><b>"Voy a ser la comiquera de genero homoer&oacute;tico
                                                y storytelling artist de videojuegos m&aacute;s reconocida en
                                                M&eacute;xico"</b></span> <br><br>
                                        <span class="social-list">
                                            <a target="_blank" href="https://www.instagram.com/arvizuland/"><i
                                                    class="fa fa-instagram"
                                                    aria-hidden="true"></i></a> &nbsp;
                                            <a target="_blank" href="https://www.facebook.com/arvizuLand"><i
                                                    class="fa fa-facebook"
                                                    aria-hidden="true"></i></a> &nbsp;
                                            <a target="_blank" href="http://behance.com/landyArvizu"><i
                                                    class="fa fa-behance"
                                                    aria-hidden="true"></i></a>
                                        </span>
                                    </span>
                                    </p>
                                </div>
                            </div>
                            <!-- ENDS LANDY INFO -->
                            <!-- MISAEL INFO -->
                            <div id="misael" class="col-xs-9 hide" align="center" style="padding: 0; margin: 0">
                                <div style="position: absolute; width: 100%; z-index: 999">
                                    <img class="img-responsive" width="150px " src="assets/img/team/misael_color.png"/>
                                </div>
                                <div align="center" style="position: absolute; width: 100%; top: 50px;">
                                    <p class="text-center team-p">
                                        <span class="member-name"><b>Misael</b></span> <br><br>
                                        <span class="member-country">Mexicano</span> <br><br>
                                        <span class="member-job">Ilustrador</span> <br><br>
                                        <span
                                            class="member-student">TSU Diseño y Animaci&oacute;n Digital</span><br><br>
                                    <span class="member-description">
                                        Ilustrador y Animador Profesional, ama dibujar y es muy exigente con la composici&oacute;n de colores. <br><br>
                                        <span class="member-cite"><b>"Voy a ser el Maestro Pokem&oacute;n y Visual
                                                Development m&aacute;s reconocido en M&eacute;xico"</b></span> <br><br>
                                        <span class="social-list">
                                            <a target="_blank"
                                               href="https://www.facebook.com/Misael-Soberanis-1374730839485197/?fref=ts"><i
                                                    class="fa fa-facebook" aria-hidden="true"></i></a> &nbsp;
                                            <a target="_blank" href="https://www.behance.net/misaelsoberanis"><i
                                                    class="fa fa-behance"
                                                    aria-hidden="true"></i></a>
                                        </span>
                                    </span>
                                    </p>
                                </div>
                            </div>
                            <!-- ENDS MISAEL INFO -->
                            <!-- JULIO INFO -->
                            <div id="julio" class="col-xs-9 hide" align="center" style="padding: 0; margin: 0">
                                <div style="position: absolute; width: 100%; z-index: 999">
                                    <img class="img-responsive" width="150px " src="assets/img/team/julio_color.png"/>
                                </div>
                                <div align="center" style="position: absolute; width: 100%; top: 50px;">
                                    <p class="text-center team-p">
                                        <span class="member-name"><b>J.Julio</b></span> <br><br>
                                        <span class="member-country">Mexicano</span> <br><br>
                                        <span class="member-job">Programador</span> <br><br>
                                        <span class="member-student">Ingeniero en Software</span><br><br>
                                    <span class="member-description">
                                        Desarrollador y Diseñador Profesional de Videojuegos. Proactivo, inteligente,
                                        amante de los videojuegos y de los juegos de cartas. <br><br>
                                        <span class="member-cite"><b>"Voy a crear y diseñar videojuegos tan geniales que
                                                van a ser reconocidos y amados en todo el mundo"</b></span> <br><br>
                                        <span class="social-list">
                                            <a href="mailto:jjulio0493@hotmail.com"><i class="fa fa-envelope-o"
                                                                                       aria-hidden="true"></i></a>
                                        </span>
                                    </span>
                                    </p>
                                </div>
                            </div>
                            <!-- ENDS JULIO INFO -->
                            <!-- JAVI INFO -->
                            <div id="javi" class="col-xs-9 hide" align="center" style="padding: 0; margin: 0">
                                <div style="position: absolute; width: 100%; z-index: 999">
                                    <img class="img-responsive" width="150px " src="assets/img/team/javi_color.png"/>
                                </div>
                                <div align="center" style="position: absolute; width: 100%; top: 50px;">
                                    <p class="text-center team-p">
                                        <span class="member-name"><b>Javi</b></span> <br><br>
                                        <span class="member-country">Mexicano</span> <br><br>
                                        <span class="member-job">Programador</span> <br><br>
                                        <span class="member-student">Ingeniero en Software</span><br><br>
                                    <span class="member-description">
                                        Programador Profesional y Diseñador, l&iacute;der, dispuesto a escuchar,
                                        aprender y mejorar, apasionado en el trabajo y amante del entretenimiento, futuro rey de los piratas. <br><br>
                                        <span class="member-cite"><b>"Voy a lograr apasionar a las personas como varios
                                                creativos lo han hecho en mi vida, voy a hacer posible lo
                                                imposible"</b></span> <br><br>
                                        <span class="social-list">
                                            <a href="mailto:javierserranosolis@gmail.com"><i class="fa fa-envelope-o"
                                                                                             aria-hidden="true"></i></a>
                                        </span>
                                    </span>
                                    </p>
                                </div>
                            </div>
                            <!-- ENDS JAVI INFO -->
                        </div>
                    </div>

                </div>
                <div id="rck-info-container" class="col-xs-5 col-md-4 border-style-2 full-height">
                    <div id="rck-info-div" class="RCK-info-div">
                        <p class="text-center">
                            <span class="RCK-name"><b>RCK Games ®</b><br></span>
                            <span class="RCK-slogan">"Produce y publica videojuegos de la más alta calidad"</span>
                        </p>
                        <p class="text-justify RCK-info">
                            Compañía de videojuegos mexicana fundada en 2014 en la ciudad de Mérida, Yucatán.
                            RCK Games ® le da un nuevo giro a la producción de videojuegos al ofrecer una experiencia
                            diferente con contenido único en cada uno de sus títulos. <br><br>
                            Inspirado en las grandes producciones y con el enorme talento que las personas tienen en
                            México,
                            nació esta empresa que brinda el ambiente necesario para que aquellos músicos, ilustradores
                            y programadores talentosos pudieran reunirse y crear títulos que no tuvieran precedente en
                            la
                            industria de los videojuegos. <br><br>
                            Gracias al duro trabajo y a la pasión de todos aquellos que abrazaron la idea de explorar
                            los limites de la imaginación, RCK Games ® seguirá brindando contenido único, innovador y
                            exclusivo con el fin de crear experiencias nuevas y apasionantes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="visible-xs">
        <div class="row">
            <div class="RCK-info-div" style="color: #E89F10">
                <p class="text-center">
                    <span class="RCK-name"><b>RCK Games ®</b></span> <br><br>
                    <span class="RCK-slogan">"Produce y publica videojuegos de la más alta calidad"</span>
                </p>
                <p class="text-justify RCK-info" style="color:#3a3a3a">
                    Compañía de videojuegos mexicana fundada en 2014 en la ciudad de Mérida, Yucatán.
                    RCK Games ® le da un nuevo giro a la producción de videojuegos al ofrecer una experiencia
                    diferente con contenido único en cada uno de sus títulos. <br><br>
                    Inspirado en las grandes producciones y con el enorme talento que las personas tienen en
                    México,
                    nació esta empresa que brinda el ambiente necesario para que aquellos músicos, ilustradores
                    y programadores talentosos pudieran reunirse y crear títulos que no tuvieran precedente en
                    la
                    industria de los videojuegos. <br><br>
                    Gracias al duro trabajo y a la pasión de todos aquellos que abrazaron la idea de explorar
                    los limites de la imaginación, RCK Games ® seguirá brindando contenido único, innovador y
                    exclusivo con el fin de crear experiencias nuevas y apasionantes.
                </p>
            </div>
        </div>
        <div class="divider-2" style="margin: 0"></div>
        <div class="row">
            <h2 class="text-center team-title"><b>"El Crew"</b></h2>
            <div class="col-xs-12" align="center">
                <div class="member-mob">
                    <div style="position: absolute; width: 100%; z-index: 999">
                        <img class="img-responsive" width="150px " src="assets/img/team/ricardo_color.png"/>
                    </div>
                    <div align="center" style="position: absolute; width: 100%; top: 50px;">
                        <p class="text-center team-p">
                            <span class="member-name"><b>Rich</b></span> <br><br>
                            <span class="member-country">Mexicano</span> <br><br>
                            <span class="member-job">Productor & Manager</span> <br><br>
                                    <span class="member-description">
                                        Programador Amateur, experto en Unity. <br>
                                        Apasionado y no conoce l&iacute;mite sin antes intentarlo. <br><br>
                                        <span class="member-cite"><b>"Voy a marcar un cambio generacional en M&eacute;xico"</b></span> <br><br>
                                        <span class="social-list">
                                            <a href="mailto:ricardoeglezg@gmail.com"><i class="fa fa-envelope-o"
                                                                                        aria-hidden="true"></i></a>
                                        </span>
                                    </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12" align="center">
                <div class="member-mob">
                    <div style="position: absolute; width: 100%; z-index: 999">
                        <img class="img-responsive" width="150px " src="assets/img/team/landy_color.png"/>
                    </div>
                    <div align="center" style="position: absolute; width: 100%; top: 50px;">
                        <p class="text-center team-p">
                            <span class="member-name"><b>Arvizu</b></span> <br><br>
                            <span class="member-country">Mexicana</span> <br><br>
                            <span class="member-job">Ilustradora</span> <br><br>
                            <span
                                class="member-student">TSU Diseño y Animaci&oacute;n Digital e Ingeniera en Software.</span><br><br>
                                    <span class="member-description">
                                        Ilustradora profesional, positiva y proactiva que combina su pasi&oacute;n con su trabajo. <br><br>
                                        <span class="member-cite"><b>"Voy a ser la comiquera de genero homoer&oacute;tico
                                                y storytelling artist de videojuegos m&aacute;s reconocida en
                                                M&eacute;xico"</b></span> <br><br>
                                        <span class="social-list">
                                            <a target="_blank" href="https://www.instagram.com/arvizuland/"><i
                                                    class="fa fa-instagram"
                                                    aria-hidden="true"></i></a> &nbsp;
                                            <a target="_blank" href="https://www.facebook.com/arvizuLand"><i
                                                    class="fa fa-facebook"
                                                    aria-hidden="true"></i></a> &nbsp;
                                            <a target="_blank" href="http://behance.com/landyArvizu"><i
                                                    class="fa fa-behance"
                                                    aria-hidden="true"></i></a>
                                        </span>
                                    </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12" align="center">
                <div class="member-mob">
                    <div style="position: absolute; width: 100%; z-index: 999">
                        <img class="img-responsive" width="150px " src="assets/img/team/misael_color.png"/>
                    </div>
                    <div align="center" style="position: absolute; width: 100%; top: 50px;">
                        <p class="text-center team-p">
                            <span class="member-name"><b>Misael</b></span> <br><br>
                            <span class="member-country">Mexicano</span> <br><br>
                            <span class="member-job">Ilustrador</span> <br><br>
                            <span class="member-student">TSU Diseño y Animaci&oacute;n Digital</span><br><br>
                                    <span class="member-description">
                                        Ilustrador y Animador Profesional, ama dibujar y es muy exigente con la composici&oacute;n de colores. <br><br>
                                        <span class="member-cite"><b>"Voy a ser el Maestro Pokem&oacute;n y Visual
                                                Development m&aacute;s reconocido en M&eacute;xico"</b></span> <br><br>
                                        <span class="social-list">
                                            <a target="_blank"
                                               href="https://www.facebook.com/Misael-Soberanis-1374730839485197/?fref=ts"><i
                                                    class="fa fa-facebook" aria-hidden="true"></i></a> &nbsp;
                                            <a target="_blank" href="https://www.behance.net/misaelsoberanis"><i
                                                    class="fa fa-behance"
                                                    aria-hidden="true"></i></a>
                                        </span>
                                    </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12" align="center">
                <div class="member-mob">
                    <div style="position: absolute; width: 100%; z-index: 999">
                        <img class="img-responsive" width="150px " src="assets/img/team/julio_color.png"/>
                    </div>
                    <div align="center" style="position: absolute; width: 100%; top: 50px;">
                        <p class="text-center team-p">
                            <span class="member-name"><b>J.Julio</b></span> <br><br>
                            <span class="member-country">Mexicano</span> <br><br>
                            <span class="member-job">Programador</span> <br><br>
                            <span class="member-student">Ingeniero en Software</span><br><br>
                                    <span class="member-description">
                                        Desarrollador y Diseñador Profesional de Videojuegos. Proactivo, inteligente,
                                        amante de los videojuegos y de los juegos de cartas. <br><br>
                                        <span class="member-cite"><b>"Voy a crear y diseñar videojuegos tan geniales que
                                                van a ser reconocidos y amados en todo el mundo"</b></span> <br><br>
                                        <span class="social-list">
                                            <a href="mailto:jjulio0493@hotmail.com"><i class="fa fa-envelope-o"
                                                                                       aria-hidden="true"></i></a>
                                        </span>
                                    </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12" align="center">
                <div class="member-mob">
                    <div style="position: absolute; width: 100%; z-index: 999">
                        <img class="img-responsive" width="150px " src="assets/img/team/javi_color.png"/>
                    </div>
                    <div align="center" style="position: absolute; width: 100%; top: 50px;">
                        <p class="text-center team-p">
                            <span class="member-name"><b>Javi</b></span> <br><br>
                            <span class="member-country">Mexicano</span> <br><br>
                            <span class="member-job">Programador</span> <br><br>
                            <span class="member-student">Ingeniero en Software</span><br><br>
                                    <span class="member-description">
                                        Programador Profesional y Diseñador, l&iacute;der, dispuesto a escuchar,
                                        aprender y mejorar, apasionado en el trabajo y amante del entretenimiento, futuro rey de los piratas. <br><br>
                                        <span class="member-cite"><b>"Voy a lograr apasionar a las personas como varios
                                                creativos lo han hecho en mi vida, voy a hacer posible lo
                                                imposible"</b></span> <br><br>
                                        <span class="social-list">
                                            <a href="mailto:javierserranosolis@gmail.com"><i class="fa fa-envelope-o"
                                                                                             aria-hidden="true"></i></a>
                                        </span>
                                    </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="divider-2" style="margin: 0;"></div>

<div class="row">
    <div id="contact" class="spacer">
        <br><br>
        <!--Contact Starts-->
        <div class="container contactform center">
            <h2 class="text-center  wowload fadeInUp">Cont&aacute;ctanos</h2>
            <div class="row wowload fadeInLeftBig">
                <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                    <form action="email.php" id="contact-form" method="post">
                        <p id='email-msg' class='text-center' style='color: green'>¡Mensaje enviado correctamente!</p>
                        <p class="error-form">Campos requeridos</p>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                        <select name="rol" id="rol">
                            <option value="Estudiante">Estudiante</option>
                            <option value="Ilustrador">Ilustrador</option>
                            <option value="Programador">Programador</option>
                            <option value="Prensa">Prensa</option>
                            <option value="Developer Studio">Developer Studio</option>
                            <option value="Publisher">Publisher</option>
                            <option value="Inversionista">Inversionista</option>
                            <option
                                value="Extraterrestre que quiere controlar la humanidad a trav&eacute;s de los videojuegos">
                                Extraterrestre que quiere controlar la humanidad a trav&eacute;s de los videojuegos
                            </option>
                            <option value="No... Ninguno de los anteriores">No... Ninguno de los anteriores</option>
                        </select>
                        <p id='email-msg-error'>Correo electr&oacute;nico inv&aacute;lido</p>
                        <input type="text" id="correo" name="correo" placeholder="Correo electr&oacute;nico">
                        <textarea rows="5" id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>
                        <div class="g-recaptcha" data-sitekey="6Lcc8QcUAAAAAI32bhDzxQD1uUuP4sZtpjkixUxz"></div>
                        <br>
                        <button id="submit-btn" type="button" onclick="validateForm()" class="btn btn-primary"><i
                                class="fa fa-paper-plane"></i> Enviar
                        </button>
                    </form>
                </div>
            </div>
            <div id="scroll"></div>
        </div>
    </div>
</div>
<!--Contact Ends-->


<!-- Footer Starts -->
<div class="footer text-center">
    <p class="wowload flipInX">

    </p>
    &copy; 2016 RCK GAMES. Todos los derechos reservados.
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop"><img id="up-btn" src="assets/img/flechas_2.png"></a>
<script type="text/javascript" src="assets/script.js"></script>
<script type="text/javascript" src="assets/youtube_script.js"></script>
</body>
</html>