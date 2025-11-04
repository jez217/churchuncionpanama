<?php namespace ProcessWire;    


  foreach( $page->itemSectionOne as $itemSectionOne){
    $htmlSectionOne .= '  

        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center">
                        <small>'. $itemSectionOne->title_1 .'</small>

                        <h1 class="text-white mb-5">'. $itemSectionOne->title_2 .'</h1>

                        <a class="btn custom-btn smoothscroll" href="#section_2">Visión</a>
                    </div>

                    <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
     <div class="date-wrap">
    <h5 class="text-white">
        <i class="custom-icon bi-clock me-2"></i>
        <span id="fechaActual"></span>
    </h5>
</div>



                        <div class="location-wrap mx-auto py-3 py-lg-0">
                            <h5 class="text-white">
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                '. $itemSectionOne->location_text .'
                            </h5>
                        </div>

                        <div class="social-share">
                            <ul class="social-icon d-flex align-items-center justify-content-center">
                                <span class="text-white me-3">Comparte:</span>

                                <li class="social-icon-item">
                                    <a href="'. $itemSectionOne->facebook_url .'" class="social-icon-link">
                                        <span class="bi-facebook"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="'. $itemSectionOne->tiktok_url .'" class="social-icon-link">
                                        <span class="bi-tiktok"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="'. $itemSectionOne->instagram_url .'" class="social-icon-link">
                                        <span class="bi-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="'. $itemSectionOne->video_1->url.'" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>
   ';  
   
}


    foreach( $page->itemSectionTwo as $itemSectionTwo){
    $htmlSectionTwo .= ' 

   <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <h2 class="text-white mb-4">'. $itemSectionTwo->title_1 .'</h2>

                            <p class="text-white">'. $itemSectionTwo->paragraph_1 .'</p>

                            <h6 class="text-white mt-4">'. $itemSectionTwo->title_2 .'</h6>

                            <p class="text-white">'. $itemSectionTwo->paragraph_2 .'</p>

                            <h6 class="text-white mt-4">'. $itemSectionTwo->paragraph_3 .'</h6>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="'. $itemSectionTwo->imgshepherd->url.'" class="about-image img-fluid">

                            <div class="about-text-info d-flex">
                                <div class="d-flex">
                                    <i class="about-text-icon bi-person"></i>
                                </div>


                                <div class="ms-4">
                                    <h5>Pastores</h5>

                                    <p class="mb-0">'. $itemSectionTwo->shepherd .'</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    ';
}


    foreach( $page->itemSectionThree as $itemSectionThree){
    $htmlSectionThree .= ' 


        <section class="artists-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">'. $itemSectionThree->title_1 .'</h1>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="'. $itemSectionTwo->img1->url.'"
                                    class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover">

                                <p class="mb-1 text-white"><b>'. $itemSectionThree->service_1 .' </b></p>

                                <p class="mb-1 text-white " ><b>Fecha: </b><span id="proximoDomingo"></span></p>


                                <hr>
                                <p class="mb-1 text-white"><b>Predicador: </b> '. $itemSectionThree->shepherd_1 .'</p>
                                <!--  <p class="mb-0">
                                    <a  class="btn custom-btn text-white " href="#transmition.html">En Vivo</a>
                                </p>   Comentario -->   
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="'. $itemSectionTwo->img2->url.'"
                                    class="artists-image img-fluid">
                            </div>

                            <div class="artists-hover text-white">
                                
                                <p class="mb-1 text-white"><b>'. $itemSectionThree->service_2 .'</b></p>

                                <p class="mb-1 text-white " ><b>Fecha: </b><span id="proximoViernes"></span></p>


                                <hr>                                
                                <p class="mb-1 text-white"><b>Predicador: </b> '. $itemSectionThree->shepherd_2 .'</p>

                                <!--  <p class="mb-0">
                                    <a  class="btn custom-btn text-white " href="#transmition.html">En Vivo</a>
                                </p>   Comentario -->
                            </div>
                        </div>

                        <div class="artists-thumb">
                            <img src="'. $itemSectionTwo->img3->url.'"
                                class="artists-image img-fluid">

                            <div class="artists-hover">
                                <p class="mb-1 text-white"><b>'. $itemSectionThree->service_3 .' </b></p>

                                <p class="mb-1 text-white " ><b>Fecha: </b><span id="proximoMiercoles"></span></p>


                                <hr>
                                <p class="mb-1 text-white"><b>Predicador: </b>'. $itemSectionThree->shepherd_3 .'</p>

                                <!--  <p class="mb-0">
                                    <a  class="btn custom-btn text-white " href="#transmition.html">En Vivo</a>
                                </p>   Comentario -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>





    ';
}
?>





  <?php echo $htmlSectionOne; ?>
  <?php echo $htmlSectionTwo; ?>

