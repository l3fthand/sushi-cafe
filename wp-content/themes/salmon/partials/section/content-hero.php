<header id="hero-area" data-stellar-background-ratio="0.5"
    style="background-image: url(<?php echo get_template_directory_uri()?>/img/hero.jpeg)">    
    <div class="opacity-layer"></div>
    <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s"><?php the_title() ?></h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"><?php the_content() ?></p>
            </div>
          </div>
        </div> 
      </div>    
</header>