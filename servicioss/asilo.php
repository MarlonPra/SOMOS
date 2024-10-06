<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>SOMOS | Asistencia Migratoria</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- intl-tel-input CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">

    <!-- Favicon para navegadores estándar -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets_somos/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets_somos/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="../assets_somos/favicon/favicon.ico">
    <!-- Favicon para dispositivos Apple -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets_somos/favicon/apple-touch-icon.png">
    <!-- Favicon para Android -->
    <link rel="icon" type="image/png" sizes="192x192" href="../assets_somos/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="../assets_somos/favicon/android-chrome-512x512.png">
    <link rel="manifest" href="../assets_somos/favicon/site.webmanifest">
    <!-- font icons -->
    <link rel="stylesheet" href="../assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
    <link rel="stylesheet" href="../assets/css/leadmark.css">

    <style>
        body {
            padding-top: 100px; /* Ajusta este valor según la altura de tu navbar */
        }
        .navbar.custom-navbar .nav-link {
            color: #444;
        }
        .navbar.custom-navbar .nav-link:hover {
            color: #1e3362;
        }
        .navbar.custom-navbar {
            box-shadow: 0px -1px 5px gray;
        }
        .containerr {
            margin: 0 auto; /* Centra el contenedor */
            padding-bottom: 10px;
            margin-bottom: 50px;
        }
        h2 {
            margin-bottom: 20px;
        }

        img {
            border-radius: 10px;
        }

        .list-group-item {
            font-size: 1.1rem;
        }

        .items-mios {
            padding: 0.9rem 1.25rem;
        }

        .items-mios2 {
            padding: 1.2rem 1.25rem;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <?php include 'nav service.php'; ?>

    <div class="container containerr mt-5">
    <section class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="text-primary">¿Qué es el asilo?</h2>
                <p>El asilo es un derecho de protección que permite a personas quedarse en los Estados Unidos si temen ser perseguidas en su país de origen debido a su raza, religión o pertenencia a un grupo social.</p>
            </div>
            <div class="col-md-6">
                <img src="../assets_somos/Img Servicios/Asilo/Chica caminando.jpg" alt="Persona en camino" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <!-- Sección: Motivos para solicitar asilo -->
    <section class="container my-5">
        <h2 class="text-center text-primary">Razones para pedir asilo</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <img src="../assets_somos/Img Servicios/Asilo/solicitud_Asilo.jpg" alt="Motivo de asilo" class="img-fluid rounded">
            </div>
            <div class="col-md-8">
                <ul class="list-group" style="list-style-type:circle">
                    <li class="list-group-item items-mios"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>Presente en los EE. UU.</li>
                    <li class="list-group-item items-mios"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>Temor fundado de sufrir persecución por su nacionalidad o grupo étnico.</li>
                    <li class="list-group-item items-mios"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>Víctima de violencia o maltrato en su país de origen.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Sección: Motivaciones -->
    <section class="container my-5">
        <h2 class="text-center text-primary">Motivaciones comunes</h2>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item items-mios2"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>Discriminación racial</li>
                    <li class="list-group-item items-mios2"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>Persecución religiosa</li>
                    <li class="list-group-item items-mios2"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>Condiciones políticas en el país de origen</li>
                    <li class="list-group-item items-mios2"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>Membresía en un grupo social en riesgo</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="../assets_somos/Img Servicios/Asilo/Personas_fila.jpg" alt="Motivaciones" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <!-- Sección: Restricciones -->
    <section class="container my-5">
        <h2 class="text-center text-primary">Restricciones para la solicitud de asilo</h2>
        <ul class="list-group mt-4">
            <li class="list-group-item"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>Presentar la solicitud después de un año desde su ingreso al país.</li>
            <li class="list-group-item"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>Si se ha cometido un crimen serio o amenaza a la seguridad nacional.</li>
            <li class="list-group-item"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>Participación en actividades terroristas o persecución de otras personas.</li>
        </ul>
    </section>

    </div>
    <?php include '../cookies.php'; ?>

    <?php include 'footer service.php'; ?>
    <!-- Scripts necesarios para Bootstrap y otros -->
    <!-- core  -->
    <script src="../assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="../assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="../assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="../assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="../assets/js/leadmark.js"></script>
    <script src="../assets/js/cookies.js"></script>

</body>

</html>