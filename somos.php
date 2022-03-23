<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Antesala | Somos</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- css -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/wow-master/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>

        <?php include 'includes/navbar.php';?> 

        <main>
            <section class="wow bounceInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-8 col-md-9 pe-0">
                            <div class="card-ticket cardLeft d-flex flex-column">
                                <h1 class="fc-blanco">Somos</h1>
                                <div class="title">
                                    <h2>Antesala</h2>
                                    <span>sala</span>
                                </div>
                                <div>
                                    <div class="seat">
                                        <h2>156</h2>
                                        <span>asiento</span>
                                    </div>
                                    <div class="time">
                                        <h2>12:00</h2>
                                        <span>hora</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-3 ps-0">
                            <div class="card-ticket cardRight d-flex flex-column justify-content-around position-relative">
                                <div class="text-center">
                                    <img src="assets/img/iso-antesala.svg">
                                </div>
                                <div class="number">
                                    <h3>156</h3>
                                    <span>asiento</span>
                                </div>
                                <div class="text-center">
                                    <img class="barchart" src="assets/img/barcode.svg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="team" class="mt-100 pb-100 position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="wow bounceInUp">Hola, somos ANTESALA, un equipo de amigues con mucha experiencia en diferentes aéreas de las artes escénicas y la gestión cultural. Juntes creamos este sitio de difusión y venta de entradas para que toda la info de la cultura independiente sea más accesible para vos. Para que el Off provinciano se ponga On-line diseñamos Antesala, la página y tikcetera desde la cual vas a poder acceder a toda la oferta cultural.
                                Antesala es la escalera a la escena independiente, profunda y diversa.
                                Antesala es la escalera a la nueva escena y también a la escena tradicional.
                                Todas las poéticas a un click de vos. Somos la puerta a lo que está pasando en la escena de tu ciudad.
                            </p>
                        </div>
                        <div class="col-12 text-center pt-100 pb-50 wow bounceInUp">
                            <h2>team antesala</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-3 d-flex flex-column justify-content-center text-center mb-4 wow bounceInUp">
                                    <div class="box-team">
                                        <img src="assets/img/img-team-01.jpg" width="100%" class="mb-4">
                                        <h3>Belén Pistone</h3>
                                        <p>coord. comercial y de contenidos</p>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex flex-column justify-content-center text-center mb-4 wow bounceInUp">
                                    <div class="box-team">    
                                        <img src="assets/img/img-team-02.jpg" width="100%" class="mb-4">
                                        <h3>Lali Monayar</h3>
                                        <p>coord. general</p>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex flex-column justify-content-center text-center mb-4 wow bounceInUp">
                                    <div class="box-team">    
                                        <img src="assets/img/img-team-03.jpg" width="100%" class="mb-4">
                                        <h3>Rodri Brunelli</h3>
                                        <p>coord. de arte y web</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-3 d-flex flex-column justify-content-center text-center mb-4 wow bounceInUp">
                                    <div class="box-team">
                                        <img src="assets/img/img-team-04.jpg" width="100%" class="mb-4">
                                        <h3>Flavia Pipliza</h3>
                                        <p>legales</p>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex flex-column justify-content-center text-center mb-4 wow bounceInUp">
                                    <div class="box-team">    
                                        <img src="assets/img/img-team-05.jpg" width="100%" class="mb-4">
                                        <h3>Daniela Medrano</h3>
                                        <p>contabilidad y administración</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/bg-04.svg" class="img">
                </div>
            </section>
    
            <?php include 'includes/subscription.php';?>
        </main>
        
        <?php include 'includes/footer.php';?>

        <!-- js -->
        <script src="assets/jquery/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/wow-master/js/wow.min.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>