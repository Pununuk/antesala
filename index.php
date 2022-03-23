<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Antesala | Inicio</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- css -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/wow-master/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
        
        <?php include 'includes/navbar.php';?>
        <main>
            <section id="header">
                <div class="container wow bounceInUp">
                    <div class="row">
                        <div class="col-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="assets/img/img-carousel.png">
                                    <div class="body-carusel">
                                        <h5 class="Grifter fc-gris-claro">PROGRAMACIÓN <br>2022</h5>
                                        <p class="GothamBold">Some representative placeholder content for the first slide.</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-custom">Ver más +</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/img-carousel.png">
                                    <div class="body-carusel">
                                        <h5 class="Grifter fc-gris-claro">PROGRAMACIÓN <br>2022</h5>
                                        <p class="GothamBold">Some representative placeholder content for the first slide.</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-custom">Ver más +</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-dots">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="calendar" class="position-relative pb-100">
                <img src="assets/img/bg-02.svg" class="img" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex flex-column mb-4 align-items-center wow bounceInLeft">
                            <h1>Qué hacer?</h1>
                            <div class="calendar calendar-first" id="calendar_first">
                                <div class="calendar_header d-flex justify-content-center align-items-center mb-2">
                                    <button class="switch-month switch-left">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
                                        </svg>
                                    </button>
                                    <h2 class="m-0"></h2>
                                    <button class="switch-month switch-right">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="calendar_weekdays"></div>
                                <div class="calendar_content"></div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center d-flex wow bounceInRight">
                            <a href="#" class="big-button today d-flex align-items-center justify-content-center">
                                <h1>hoy</h1>
                            </a>
                            <a href="#" class="big-button weekend d-flex align-items-center justify-content-center">
                                <h1>el finde</h1>
                            </a>
                            <a href="#" class="big-button month d-flex align-items-center justify-content-center">
                                <h1>este mes</h1>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="eventos" class="pb-100 pt-100">
                <div class="container">
                    <div class="row">
                        <div id="recipeCarousel" class="carousel slide wow bounceInUp" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-4 mb-4 pe-3 ps-3">
                                        <div class="box-eventos text-center">
                                            <div class="img-evento">
                                                <span class="tag-evento">Teatro</span>
                                                <span class="tag-descuento">%20</span>
                                                <img src="assets/img/img-teatro-01.png" width="100%" alt="">
                                            </div>
                                            <p class="teatro mt-4">El Cuenco Teatro</p>
                                            <h1 class="obra mt-2">Mi nombre es Eva Duarte</h1>
                                            <p class="mb-0 mt-3">Desde</p>
                                            <p class="precio fc-violeta mt-2">$800<span>$900</span></p>
                                            <a href="ticket.php" class="btn btn-custom-amarillo mb-4">comprar</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4 mb-4 pe-3 ps-3">
                                        <div class="box-eventos text-center">
                                            <div class="img-evento">
                                                <span class="tag-evento">Teatro</span>
                                                <img src="assets/img/img-teatro-02.png" width="100%" alt="">
                                            </div>
                                            <p class="teatro mt-4">El Cuenco Teatro</p>
                                            <h1 class="obra mt-2">Mi nombre es Eva Duarte</h1>
                                            <p class="mb-0 mt-3">Desde</p>
                                            <p class="precio mt-2">$700</p>
                                            <a href="#" class="btn btn-custom-black disabled mb-4">agotado</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4 mb-4 pe-3 ps-3">
                                        <div class="box-eventos text-center">
                                            <div class="img-evento">
                                                <span class="tag-evento">Teatro</span>
                                                <img src="assets/img/img-teatro-03.png" width="100%" alt="">
                                            </div>
                                            <p class="teatro mt-4">El Cuenco Teatro</p>
                                            <h1 class="obra mt-2">Mi nombre es Eva Duarte</h1>
                                            <p class="mb-0 mt-3">Desde</p>
                                            <p class="precio mt-2">$800</p>
                                            <a href="ticket.php" class="btn btn-custom-amarillo mb-4">comprar</a>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="actualidad" class="pt-100 pb-100">
                <div class="container">
                    <div class="row pb-100">
                        <div class="col-md-6 box-cartelera bg-naranja text-center wow bounceInLeft">
                            <h1 class="fc-blanco mb-0">CARTELERA</h1>
                            <p class="Grifter fc-blanco mb-0">POR SALAS</p>
                        </div>
                        <div class="col-md-6 d-flex align-items-center box-cartelera bg-gris pe-4 ps-4  wow bounceInRight">
                            <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                <option selected>Salas...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h1 class="mb-4 wow bounceInLeft">Actualidad</h1>
                        </div>
                        <div class="col-md-4 mb-4 wow bounceInUp">
                            <div class="card">
                                <img src="assets/img/img-box-01.png" width="100%">
                                <div class="card-body">
                                    <h1 class="fc-blanco">La cochera gana un premio konex</h1>
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-inner">
                                        <p class="GothamLight fc-blanco m-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore  et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 wow bounceInUp">
                            <div class="card">
                                <img src="assets/img/img-box-01.png" width="100%">
                                <div class="card-body">
                                    <h1 class="fc-blanco">La cochera gana un premio konex</h1>
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-inner">
                                        <p class="GothamLight fc-blanco m-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore  et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 wow bounceInUp">
                            <div class="card">
                                <img src="assets/img/img-box-01.png" width="100%">
                                <div class="card-body">
                                    <h1 class="fc-blanco">La cochera gana un premio konex</h1>
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-inner">
                                        <p class="GothamLight fc-blanco m-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore  et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center pb-100 pt-100 wow bounceInUp">
                            <h1>¿Querés saber más? <br>Toda la info en un solo lugar</h1>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center wow bounceInUp d-none d-md-block">
                            <a href="podcast.php" class="circulo-enlace bg-black d-flex align-items-center justify-content-center">
                                <h4 class="Grifter fc-blanco text-center m-0">podcast</h4>
                            </a>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center wow bounceInUp d-none d-md-block">
                            <a href="#" class="circulo-enlace bg-naranja d-flex align-items-center justify-content-center">
                                <h4 class="Grifter fc-blanco text-center m-0">videos</h4>
                            </a>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center wow bounceInUp d-none d-md-block">
                            <a href="#" class="circulo-enlace bg-black d-flex align-items-center justify-content-center">
                                <h4 class="Grifter fc-blanco text-center m-0">entrevistas y notas</h4>
                            </a>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center wow bounceInUp d-none d-md-block">
                            <a href="#" class="circulo-enlace bg-naranja d-flex align-items-center justify-content-center">
                                <h4 class="Grifter fc-blanco text-center m-0">cartelera</h4>
                            </a>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center wow bounceInUp d-none d-md-block">
                            <a href="#" class="circulo-enlace bg-black d-flex align-items-center justify-content-center">
                                <h4 class="Grifter fc-blanco text-center m-0">salas</h4>
                            </a>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center wow bounceInUp d-none d-md-block">
                            <a href="#" class="circulo-enlace bg-naranja d-flex align-items-center justify-content-center">
                                <h4 class="Grifter fc-blanco text-center m-0">cursos</h4>
                            </a>
                        </div>
                        <div class="col-12 d-flex justify-content-center mb-4 wow bounceInUp d-block d-md-none">
                            <a href="podcast.php" class="rectangulo-enlace bg-black d-flex align-items-center justify-content-center">
                                <h4 class="Grifter fc-blanco text-center m-0">podcast</h4>
                            </a>
                        </div>
                        <div class="col-12 d-flex justify-content-center mb-4 wow bounceInUp d-block d-md-none">
                            <a href="#" class="rectangulo-enlace bg-naranja d-flex align-items-center justify-content-center">
                                <h4 class="Grifter fc-blanco text-center m-0">videos</h4>
                            </a>
                        </div>
                        <div class="col-12 d-flex justify-content-center mb-4 wow bounceInUp d-block d-md-none">
                            <a href="#" class="rectangulo-enlace bg-black d-flex align-items-center justify-content-center">
                                <h4 class="Grifter fc-blanco text-center m-0">entrevistas y notas</h4>
                            </a>
                        </div>
                        <div class="col-12 d-flex justify-content-center mb-4 wow bounceInUp d-block d-md-none">
                            <a href="#" class="rectangulo-enlace bg-naranja d-flex align-items-center justify-content-center">
                                <h4 class="Grifter fc-blanco text-center m-0">cartelera</h4>
                            </a>
                        </div>
                        <div class="col-12 d-flex justify-content-center mb-4 wow bounceInUp d-block d-md-none">
                            <a href="#" class="rectangulo-enlace bg-black d-flex align-items-center justify-content-center">
                                <h4 class="Grifter fc-blanco text-center m-0">salas</h4>
                            </a>
                        </div>
                        <div class="col-12 d-flex justify-content-center mb-4 wow bounceInUp d-block d-md-none">
                            <a href="#" class="rectangulo-enlace bg-naranja d-flex align-items-center justify-content-center">
                                <h4 class="Grifter fc-blanco text-center m-0">cursos</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-black pb-100 pt-100 position-relative">
                <img src="assets/img/bg-07.svg" class="bg-07-index">
                <div class="container">
                    <div class="row mb-100" id="video">
                        <div class="col-12 text-center mb-4">
                            <h1 class="fc-blanco wow bounceInUp">últimas notas y entrevistas</h1>
                        </div>
                        <div class="col-lg-4 wow bounceInUp">
                            <div class="bg-blanco box-multimedia mb-4">
                                <div class="header-box position-relative d-flex align-items-center justify-content-center">
                                    <img src="assets/img/img-multimedia.png" width="100%" alt="">
                                </div>
                                <div class="d-flex flex-column justify-content-between p-4">
                                    <div>
                                        <p>12 de enero de 2022</p>
                                        <hr class="hr-black">
                                        <h2 class="fc-amarillo">"El pucho en la boca"</h2>
                                        <p class="Grifter">Por Punu Vazquez</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis rerum sapiente accusantium, facilis labore exercitationem odio perferendis cum veniam quam!</p>
                                    </div>
                                    <div class="text-center mt-4">
                                        <a href="#" class="btn btn-custom-black">leer</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow bounceInUp">
                            <div class="bg-blanco box-multimedia mb-4">
                                <div class="header-box position-relative d-flex align-items-center justify-content-center">
                                    <img src="assets/img/img-multimedia.png" width="100%" alt="">
                                </div>
                                <div class="d-flex flex-column justify-content-between p-4">
                                    <div>
                                        <p>12 de enero de 2022</p>
                                        <hr class="hr-black">
                                        <h2 class="fc-amarillo">"El pucho en la boca"</h2>
                                        <p class="Grifter">Por Punu Vazquez</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis rerum sapiente accusantium, facilis labore exercitationem odio perferendis cum veniam quam!</p>
                                    </div>
                                    <div class="text-center mt-4">
                                        <a href="#" class="btn btn-custom-black">leer</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow bounceInUp">
                            <div class="bg-blanco box-multimedia mb-4">
                                <div class="header-box position-relative d-flex align-items-center justify-content-center">
                                    <img src="assets/img/img-multimedia.png" width="100%" alt="">
                                </div>
                                <div class="d-flex flex-column justify-content-between p-4">
                                    <div>
                                        <p>12 de enero de 2022</p>
                                        <hr class="hr-black">
                                        <h2 class="fc-amarillo">"El pucho en la boca"</h2>
                                        <p class="Grifter">Por Punu Vazquez</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis rerum sapiente accusantium, facilis labore exercitationem odio perferendis cum veniam quam!</p>
                                    </div>
                                    <div class="text-center mt-4">
                                        <a href="#" class="btn btn-custom-black">leer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 wow bounceInUp">
                            <a href="#" class="btn btn-custom-amarillo">ver más +</a>
                        </div>
                    </div>
                    <div class="row" id="podcast">
                        <div class="col-lg-8">
                            <div class="col-12 text-center mb-4">
                                <h2 class="fc-blanco wow bounceInUp">últimos podcast</h2>
                            </div>

                            <div class="bg-gris-oscuro box-multimedia mb-4 wow bounceInUp">
                                <div class="row">
                                    <div class="col-lg-8 d-flex flex-column justify-content-between p-4 p-md-5 order-2 order-lg-1">
                                        <div>
                                            <p class="fc-blanco">12 de enero de 2022</p>
                                            <hr class="hr-white-01">
                                            <h2 class="fc-amarillo mb-0">sobre verse bella en el teatro</h2>
                                            <h3 class="fc-amarillo">de belén pistone</h3>
                                            <p class="fc-blanco">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis rerum sapiente accusantium, facilis labore exercitationem odio perferendis cum veniam quam!</p>
                                        </div>
                                        <div class="text-center">
                                            <a class="btn btn-custom-amarillo" data-bs-toggle="modal" data-bs-target="#spotify">escuchar</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="spotify" tabindex="-1" aria-labelledby="spotifyLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <iframe src="https://open.spotify.com/embed/episode/3Gfh07HRSjeBTY91Bdj24P?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 order-1 order-lg-2 header-box d-flex justify-content-center align-items-centers">
                                        <img src="assets/img/img-multimedia.png" width="100%" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gris-oscuro box-multimedia mb-4 wow bounceInUp">
                                <div class="row">
                                    <div class="col-lg-8 d-flex flex-column justify-content-between p-4 p-md-5 order-2 order-lg-1">
                                        <div>
                                            <p class="fc-blanco">12 de enero de 2022</p>
                                            <hr class="hr-white-01">
                                            <h2 class="fc-amarillo mb-0">sobre verse bella en el teatro</h2>
                                            <h3 class="fc-amarillo">de belén pistone</h3>
                                            <p class="fc-blanco">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis rerum sapiente accusantium, facilis labore exercitationem odio perferendis cum veniam quam!</p>
                                        </div>
                                        <div class="text-center">
                                            <a class="btn btn-custom-amarillo" data-bs-toggle="modal" data-bs-target="#spotify">escuchar</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="spotify" tabindex="-1" aria-labelledby="spotifyLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <iframe src="https://open.spotify.com/embed/episode/3Gfh07HRSjeBTY91Bdj24P?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 order-1 order-lg-2 header-box d-flex justify-content-center align-items-centers">
                                        <img src="assets/img/img-multimedia.png" width="100%" alt="">
                                    </div>
                                </div>
                            </div>
                                
                            <div class="d-grid gap-2 wow bounceInUp">
                                <a href="podcast.php" class="btn btn-custom-amarillo">ver más +</a>
                            </div>
                              
                        </div>
                        <div class="col-lg-4" id="video">
                            <div class="col-12 text-center mb-4 mt-4 mt-md-0">
                                <h2 class="fc-blanco wow bounceInUp">video del mes</h2>
                            </div>
                                
                            <div class="bg-naranja box-multimedia mb-4 wow bounceInUp">
                                <div class="header-box position-relative d-flex align-items-center justify-content-center">
                                    <img src="assets/img/img-multimedia.png" width="100%" alt="">
                                    <a class="lottie-player" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <lottie-player src="https://assets7.lottiefiles.com/private_files/lf30_avzk3oss.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop autoplay></lottie-player>
                                    </a>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/JWRlTezTF2k?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column justify-content-between p-4 order-2 order-md-1">
                                    <div>
                                        <p class="fc-blanco">12 de enero de 2022</p>
                                        <hr class="hr-white-01">
                                        <h2 class="fc-blanco mb-0">Recorrido virtual por el cuenco teatro</h2>
                                        <p class="fc-blanco">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis rerum sapiente accusantium, facilis labore exercitationem odio perferendis cum veniam quam!</p>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="d-grid gap-2 wow bounceInUp">
                                <a href="videos.php" class="btn btn-custom-amarillo">ver más +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="publicidad" class="d-flex align-items-center mt-100 pb-100 wow bounceInUp">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="assets/img/banner.jpg" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </section>  
            <section id="apoyo" class="wow bounceInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mb-200">
                            <div class="text-center bg-gris-oscuro br-10 pt-50 pb-50 pe-4 ps-4">
                                <h1 class="fc-blanco m-0">contamos con el apoyo de</h1>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <div class='wrapper'>
                                <div class='carousel'>
                                    <div class='carousel__item'>
                                        <div class='carousel__item-body'>
                                            <img src="assets/img/logo-01.png" alt="">
                                        </div>
                                    </div>
                                    <div class='carousel__item'>
                                        <div class='carousel__item-body'>
                                            <img src="assets/img/logo-02.png" alt="">
                                        </div>
                                    </div>
                                    <div class='carousel__item'>
                                        <div class='carousel__item-body'>
                                            <img src="assets/img/logo-03.png" alt="">
                                        </div>
                                    </div>
                                    <div class='carousel__item'>
                                        <div class='carousel__item-body'>
                                            <img src="assets/img/logo-04.png" alt="">
                                        </div>
                                    </div>                            
                                    <div class='carousel__item'>
                                        <div class='carousel__item-body'>
                                            <img src="assets/img/logo-05.png" alt="">
                                        </div>
                                    </div>
                                    <div class='carousel__item'>
                                        <div class='carousel__item-body'>
                                            <img src="assets/img/logo-nmg.svg" alt="">
                                        </div>
                                    </div>
                                    <div class='carousel__item'>
                                        <div class='carousel__item-body'>
                                            <img src="assets/img/logo-01.png" alt="">
                                        </div>
                                    </div>
                                    <div class='carousel__item'>
                                        <div class='carousel__item-body'>
                                            <img src="assets/img/logo-02.png" alt="">
                                        </div>
                                    </div>
                                    <div class='carousel__item'>
                                        <div class='carousel__item-body'>
                                            <img src="assets/img/logo-03.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include 'includes/subscription.php';?>
        </main>

        <?php include 'includes/footer.php';?>

        <!-- js -->
        <script src="assets/jquery/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
        <script src="assets/wow-master/js/wow.min.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>