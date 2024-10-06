<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Asistencia en la solicitud de cancelación de remoción para residentes no permanentes.">
    <meta name="author" content="Devcrud">
    <title>SOMOS | Asistencia Migratoria</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">

    <link rel="icon" type="image/png" sizes="16x16" href="../assets_somos/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets_somos/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="../assets_somos/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets_somos/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets_somos/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="../assets_somos/favicon/android-chrome-512x512.png">
    <link rel="manifest" href="../assets_somos/favicon/site.webmanifest">
    <link rel="stylesheet" href="../assets/vendors/themify-icons/css/themify-icons.css">
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
                    <h2 class="text-primary">¿Qué es la Cancelación de Remoción?</h2>
                    <p>La Cancelación de Remoción, también conocida como suspensión de deportación, es un recurso legal que puede emplear una persona que enfrenta un proceso de deportación en la corte de inmigración. Esta opción está destinada a aquellos que no son residentes permanentes y se encuentran en medio de un procedimiento de expulsión.</p>
                </div>
                <div class="col-md-6">
                    <img src="../assets_somos/Img Servicios/CancelacionRemocion.jpg" alt="Proceso de inmigración" class="img-fluid rounded">
                </div>
            </div>
        </section>

        <section class="container my-5">
            <h2 class="text-center text-primary">Condiciones para aplicar</h2>
            <p>Para poder optar por la Cancelación de Remoción, es fundamental que el solicitante cumpla con ciertos requisitos esenciales:</p>
            <ul class="list-group mt-4">
                <li class="list-group-item"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>El individuo debe haber residido en Estados Unidos de manera continua durante al menos 10 años al momento de iniciarse el proceso de deportación.</li>
                <li class="list-group-item"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>Es necesario tener familiares directos, como padres, cónyuge o hijos, que sean ciudadanos estadounidenses o residentes legales permanentes.</li>
                <li class="list-group-item"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>Se debe demostrar un buen carácter moral, lo que implica tener un historial criminal limpio y haber cumplido con las obligaciones fiscales correspondientes.</li>
                <li class="list-group-item"><span class="ti-arrow-circle-right" style="margin-right: 10px;"></span>El solicitante debe evidenciar que su deportación causaría un daño extremo a sus familiares más cercanos.</li>
            </ul>
        </section>
    </div>

    <?php include '../cookies.php'; ?>
    <?php include 'footer service.php'; ?>

    <script src="../assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="../assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <script src="../assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <script src="../assets/vendors/isotope/isotope.pkgd.js"></script>
    <script src="../assets/js/leadmark.js"></script>
    <script src="../assets/js/cookies.js"></script>

</body>

</html>
