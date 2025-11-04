<?php namespace ProcessWire;

// Optional main output file, called after rendering page’s template file. 
// This is defined by $config->appendTemplateFile in /site/config.php, and
// is typically used to define and output markup common among most pages.
// 	
// When the Markup Regions feature is used, template files can prepend, append,
// replace or delete any element defined here that has an "id" attribute. 
// https://processwire.com/docs/front-end/output/markup-regions/
	
/** @var Page $page */
/** @var Pages $pages */
/** @var Config $config */
	
$home = $pages->get('/'); /** @var HomePage $home */

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	        <title><?php
        echo $page->title;
        if(stripos($page->title, ' Ministerio la Unción ') === false) {
            echo ' | La Unción';
        }
        ?></title>

    <!-- DESCRIPCIÓN SEO -->
    <meta name="description" content="Ministerio La Unción Panamá es una iglesia cristiana ubicada en Milla 8, dirigida por los pastores Orlando Quintero y Edilma de Quintero. Un lugar de fe, adoración y palabra viva para toda la familia.">
    
    <!-- PALABRAS CLAVE -->
    <meta name="keywords" content="iglesia cristiana panamá, ministerio la unción, pastores orlando quintero, edilma de quintero, milla 8, adoración, palabra de Dios, culto cristiano, ministerio cristiano panamá, iglesia evangélica">
    
    <!-- AUTOR / DESARROLLADOR -->
    <meta name="author" content="DigitjezPTY - Desarrollo Web y Diseño Digital en Panamá">

    <!-- ICONO DE PESTAÑA -->
    <link rel="icon" type="image/png" href="images/Logo_UNCION_blue.png">

    <!-- META DE INDEXACIÓN -->
    <meta name="robots" content="index, follow">
    <meta name="language" content="es">
    <meta name="geo.region" content="PA">
    <meta name="geo.placename" content="Milla 8, Panamá">

    <!-- OPEN GRAPH (Facebook, Instagram y WhatsApp) -->
    <meta property="og:title" content="Ministerio La Unción Panamá - Iglesia Cristiana en Milla 8">
    <meta property="og:description" content="Iglesia cristiana dirigida por los pastores Orlando y Edilma de Quintero. Te invitamos a vivir una experiencia de fe y avivamiento.">
    <meta property="og:image" content="https://tusitio.com/images/FondoPredica.png">
    <meta property="og:url" content="https://tusitio.com/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_PA">
    <meta property="og:site_name" content="Ministerio La Unción Panamá">

    <!-- TWITTER CARD -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ministerio La Unción Panamá - Iglesia Cristiana en Milla 8">
    <meta name="twitter:description" content="Pastores Orlando y Edilma de Quintero te invitan a vivir un encuentro con Dios.">
    <meta name="twitter:image" content="https://tusitio.com/images/FondoPredica.png">
    <meta name="twitter:site" content="@MinisterioLaUncion">

    <!-- ENLACES A REDES SOCIALES -->
    <link rel="me" href="https://www.facebook.com/MinisterioLaUncionPanama" type="text/html">
    <link rel="me" href="https://www.instagram.com/ministeriolauncionpa/" type="text/html">
    <link rel="me" href="https://www.youtube.com/@MinisterioLaUncionPanama" type="text/html">

    <!-- VERIFICACIÓN FACEBOOK -->
    <meta property="fb:app_id" content="YOUR_FACEBOOK_APP_ID_HERE">
    <meta property="article:publisher" content="https://www.facebook.com/MinisterioLaUncionPanama">

    <!-- VERIFICACIÓN YOUTUBE -->
    <meta name="youtube-channel" content="https://www.youtube.com/@MinisterioLaUncionPanama">

    <!-- VERIFICACIÓN INSTAGRAM -->
    <meta property="instagram:site" content="https://www.instagram.com/ministeriolauncionpa/">

    <!-- FUENTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <!-- ARCHIVOS CSS -->
    <link href="<?php echo $config->urls->templates; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $config->urls->templates; ?>css/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo $config->urls->templates; ?>css/launcion.css" rel="stylesheet">

</head>

<body>

    <main>

        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="custom-icon me-2"> <img src="images/Logo_UNCION.png" width="25px" alt=""></i>
                            <strong class="text-dark">Ministerio la Unción Panamá</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    Mato 28:19-20
                </a>

                <a href="Transmition.html" class="btn custom-btn d-lg-none ms-auto me-4">En Vivo</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Somos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Servicios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Agendas</a>
                        </li>

                        <li class="nav-item">


						<a class="nav-link click-scroll" data-bs-toggle="modal" data-bs-target="#modalDonar" style="cursor: pointer;">Donar$</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Contacto</a>
                        </li>
                    </ul>

                    <a href="transmition.html" class="btn custom-btn d-lg-block d-none">En Vivo</a>
                </div>
            </div>
        </nav>


   



            
             <?php echo $mainContent; ?>


    
        <!-- Modal -->


        <div class="modal fade" id="modalDonar" tabindex="-1" aria-labelledby="modalDonarLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDonarLabel">Donar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
<div class="modal-body text-center">

  <form>
    <!-- Información Bancaria -->
   <div class="mb-3">
  <label class="form-label"><strong>Bancos</strong></label>
  <p class="mb-1"><b>Banco General</b></p>
  <p class="mb-1"><b>Ministerio la Unción</b></p>
  <p class="mb-1"><b>12345-1245-12412-23523</b></p>
  <p><b>Cuenta Corriente</b></p>
</div>

<!-- Información Yappy -->
<div class="mb-3">
  <label class="form-label"><strong>Yappy</strong></label>
  <p><b>6611-1111</b></p>
</div>


        <!-- Información Yappy -->
    <div class="mb-3">
      <img src="images/qr.png" width="20%" height="20%" alt="">
    </div>

    <!-- Botón -->
<div class="d-grid">
  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar Aquí</button>
</div>


    
  </form>
</div>

    </div>
  </div>
</div>
    </main>


    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">Ministerio la Unción</h2>
                    </div>

                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                        <ul class="social-icon d-flex justify-content-lg-end">
                             <!--  <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>-->

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-tiktok"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-youtube"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 pb-2">
                    <h5 class="site-footer-title mb-3">Links</h5>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Inicio</a>
                        </li>


                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Servicios</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Agendas</a>
                        </li>



                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Contacto</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Deseas algun apoyo?</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: 390-3506" class="site-footer-link">
                            390-3506
                        </a>
                    </p>

                </div>

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3">Lugar</h5>

                    <p class="text-white d-flex mt-3 mb-2">
                        3F9J+4XW, C. Milla 8, San Miguelito, Provincia de Panamá</p>

                    <a class="link-fx-1 color-contrast-higher mt-3" href="https://maps.app.goo.gl/vpieTMcQrtAT4SMk7">
                        <span>Nuestro Maps</span>
                        <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="16" cy="16" r="15.5"></circle>
                                <line x1="10" y1="18" x2="16" y2="12"></line>
                                <line x1="16" y1="12" x2="22" y2="18"></line>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container justify-content-center text-center">
                <div class="row">

                    <div class="col-lg-12 col-12 mt-5">
                        <p class="copyright-text">Copyright © 2026 Ministerio la Unción</p>
                        <p class="copyright-text">Distribuido por: <a href="">Digitjezpty</a></p>
                    </div>

                 <!--    <div class="col-lg-8 col-12 mt-lg-5">
                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Privacy Policy</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Your Feedback</a>
                            </li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </div>
    </footer>

    <!--

T e m p l a t e M o

-->

    <!-- JAVASCRIPT FILES -->
    <script src="<?php echo $config->urls->templates; ?>js/jquery.min.js"></script>
    <script src="<?php echo $config->urls->templates; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $config->urls->templates; ?>js/jquery.sticky.js"></script>
    <script src="<?php echo $config->urls->templates; ?>js/click-scroll.js"></script>
    <script src="<?php echo $config->urls->templates; ?>js/custom.js"></script>
    <script>
    // Crear la fecha actual
    const fecha = new Date();
    
    // Opcional: formato legible (por ejemplo, "26 Oct 2025")
    const opciones = { day: '2-digit', month: 'short', year: 'numeric' };
    const fechaFormateada = fecha.toLocaleDateString('es-ES', opciones);

    // Insertar en el HTML
    document.getElementById("fechaActual").textContent = fechaFormateada;
</script>



<script>
    function obtenerProximoDia(diaObjetivo) {
        const hoy = new Date();
        const diaActual = hoy.getDay(); // 0=domingo, 1=lunes, ..., 6=sábado
        let diasHasta = (diaObjetivo - diaActual + 7) % 7;

        // Si es el mismo día, mostrar el próximo (no el de hoy)
        if (diasHasta === 0) diasHasta = 7;

        const proximo = new Date(hoy);
        proximo.setDate(hoy.getDate() + diasHasta);

        // Formato: "29 Oct 2025"
        const opciones = { day: '2-digit', month: 'short', year: 'numeric' };
        return proximo.toLocaleDateString('es-ES', opciones)
            .replace('.', '') // quita el punto de "oct."
            .replace(/\b\w/g, l => l.toUpperCase()); // capitaliza inicial
    }

    // Actualiza todos los spans que tengan el mismo id
    document.querySelectorAll('#proximoDomingo').forEach(el => {
        el.textContent = obtenerProximoDia(0); // Domingo
    });

    document.querySelectorAll('#proximoMiercoles').forEach(el => {
        el.textContent = obtenerProximoDia(3); // Miércoles
    });

    document.querySelectorAll('#proximoViernes').forEach(el => {
        el.textContent = obtenerProximoDia(5); // Viernes
    });
</script>


</body>

</html>