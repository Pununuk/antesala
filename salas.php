<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Antesala | Salas</title>
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
                                <h1 class="fc-blanco">Salas</h1>
                                <div class="title">
                                    <h2>Antesala</h2>
                                    <span>movie</span>
                                </div>
                                <div class="name">
                                    <h2>Vladimir Kudinov</h2>
                                    <span>name</span>
                                </div>
                                <div>
                                    <div class="seat">
                                        <h2>156</h2>
                                        <span>seat</span>
                                    </div>
                                    <div class="time">
                                        <h2>12:00</h2>
                                        <span>time</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-3 ps-0">
                            <div class="card-ticket cardRight d-flex flex-column justify-content-around position-relative">
                                <div class="text-center">
                                    <img src="assets/img/iso-antesala.svg" alt="">
                                </div>
                                <div class="number">
                                    <h3>156</h3>
                                    <span>asiento</span>
                                </div>
                                <div class="text-center">
                                    <img class="barchart" src="assets/img/barcode.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-md-flex justify-content-end">
                            <div class="d-flex align-items-center me-0 me-md-4 mb-4 mb-md-0 wow bounceInUp">
                                <p class="mb-0 me-2 text-nowrap">Provincia</p>
                                <select class="form-select form-select form-select-sm">
                                    <option selected>Seleccionar</option>
                                    <option value="1">BUENOS AIRES</option>
                                    <option value="2">CATAMARCA</option>
                                    <option value="5">CHACO</option>
                                    <option value="6">CHUBUT</option>
                                    <option value="50">CIUDAD AUTONOMA DE Bs As</option>
                                    <option value="3">CORDOBA</option>
                                    <option value="4">CORRIENTES</option>
                                    <option value="7">ENTRE RIOS</option>
                                    <option value="8">FORMOSA</option>
                                    <option value="9">JUJUY</option>
                                    <option value="10">LA PAMPA</option>
                                    <option value="11">LA RIOJA</option>
                                    <option value="12">MENDOZA</option>
                                    <option value="13">MISIONES</option>
                                    <option value="14">NEUQUEN</option>
                                    <option value="15">RIO NEGRO</option>
                                    <option value="16">SALTA</option>
                                    <option value="17">SAN LUIS</option>
                                    <option value="19">SANTA CRUZ</option>
                                    <option value="20">SANTA FE</option>
                                    <option value="21">SANTIAGO DEL ESTERO</option>
                                    <option value="22">TIERRA DEL FUEGO</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center me-0 me-md-4 mb-4 mb-md-0 wow bounceInUp">
                                <p class="mb-0 me-2 text-nowrap">Localidad</p>
                                <input type="text" class="form-control form-search form-control-sm" placeholder="Buscar">
                            </div>
                            <div class="d-flex align-items-center wow bounceInUp">
                                <p class="mb-0 me-2 text-nowrap">Sala</p>
                                <input type="text" class="form-control form-search form-control-sm" placeholder="Buscar">
                            </div>
                        </div>
                        <div class="col-12">
                            <hr class="wow bounceInUp">
                        </div>
                    </div>
                </div>
            </section>

            <section id="salas" class="pt-100 pb-100 mt-4">
                <div class="container">
                    <div class="row mt-4">
                        <div class="col-md-3 d-flex flex-column align-items-center mb-4 wow bounceInUp">
                            <a href="sala.php" class="logo-sala">
                                <img src="assets/img/logo-cuenco.svg" width="100%" alt="">
                            </a>
                            <p class="mt-2 mb-0"><span class="Grifter">córdoba</span> | córdoba</p>
                            <h3>el cuenco</h3>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center mb-4 wow bounceInUp">
                            <a href="sala.php" class="logo-sala">
                                <img src="assets/img/logo-cuenco.svg" width="100%" alt="">
                            </a>
                            <p class="mt-2 mb-0"><span class="Grifter">córdoba</span> | tanti</p>
                            <h3>otillia</h3>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center mb-4 wow bounceInUp">
                            <a href="sala.php" class="logo-sala">
                                <img src="assets/img/logo-cuenco.svg" width="100%" alt="">
                            </a>
                            <p class="mt-2 mb-0"><span class="Grifter">córdoba</span> | río 4</p>
                            <h3>viejo mercado</h3>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center mb-4 wow bounceInUp">
                            <a href="sala.php" class="logo-sala">
                                <img src="assets/img/logo-cuenco.svg" width="100%" alt="">
                            </a>
                            <p class="mt-2 mb-0"><span class="Grifter">córdoba</span> | córdoba</p>
                            <h3>el cuenco</h3>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center mb-4 wow bounceInUp">
                            <a href="sala.php" class="logo-sala">
                                <img src="assets/img/logo-cuenco.svg" width="100%" alt="">
                            </a>
                            <p class="mt-2 mb-0"><span class="Grifter">córdoba</span> | córdoba</p>
                            <h3>el cuenco</h3>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center mb-4 wow bounceInUp">
                            <a href="sala.php" class="logo-sala">
                                <img src="assets/img/logo-cuenco.svg" width="100%" alt="">
                            </a>
                            <p class="mt-2 mb-0"><span class="Grifter">córdoba</span> | córdoba</p>
                            <h3>el cuenco</h3>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center mb-4 wow bounceInUp">
                            <a href="sala.php" class="logo-sala">
                                <img src="assets/img/logo-cuenco.svg" width="100%" alt="">
                            </a>
                            <p class="mt-2 mb-0"><span class="Grifter">córdoba</span> | córdoba</p>
                            <h3>el cuenco</h3>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center mb-4 wow bounceInUp">
                            <a href="sala.php" class="logo-sala">
                                <img src="assets/img/logo-cuenco.svg" width="100%" alt="">
                            </a>
                            <p class="mt-2 mb-0"><span class="Grifter">córdoba</span> | córdoba</p>
                            <h3>el cuenco</h3>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center mb-4 wow bounceInUp">
                            <a href="sala.php" class="logo-sala">
                                <img src="assets/img/logo-cuenco.svg" width="100%" alt="">
                            </a>
                            <p class="mt-2 mb-0"><span class="Grifter">córdoba</span> | córdoba</p>
                            <h3>el cuenco</h3>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center mb-4 wow bounceInUp">
                            <a href="sala.php" class="logo-sala">
                                <img src="assets/img/logo-cuenco.svg" width="100%" alt="">
                            </a>
                            <p class="mt-2 mb-0"><span class="Grifter">córdoba</span> | córdoba</p>
                            <h3>el cuenco</h3>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center mb-4 wow bounceInUp">
                            <a href="sala.php" class="logo-sala">
                                <img src="assets/img/logo-cuenco.svg" width="100%" alt="">
                            </a>
                            <p class="mt-2 mb-0"><span class="Grifter">córdoba</span> | córdoba</p>
                            <h3>el cuenco</h3>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-center mb-4 wow bounceInUp">
                            <a href="sala.php" class="logo-sala">
                                <img src="assets/img/logo-cuenco.svg" width="100%" alt="">
                            </a>
                            <p class="mt-2 mb-0"><span class="Grifter">córdoba</span> | córdoba</p>
                            <h3>el cuenco</h3>
                        </div>
                    </div>
                </div>
            </section>


        
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