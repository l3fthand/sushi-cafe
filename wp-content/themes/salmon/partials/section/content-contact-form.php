
<?php

  $address = get_field('address');

?>

<section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <h3>Get in touch!</h3>
                <div class="contact-address">
                
                  <p class="email">Address: <span><a href="<?php echo $address['url']?>" target="_blank"><?php echo $address['title']?></a></span></p>
                  <p class="phone">Phone: <span><?php the_field('phone')?></span></p>
                  <p class="email">E-mail: <span><?php the_field('email')?></span></p>
                 
                  <p class="email">Opening Hours: <span><?php the_field('opening')?></span></p>
                </div>
              </div>
            </div>     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-block">
              <?php echo do_shortcode('[contact-form-7 id="40" title="Contact form 1" html-id="contactForm"]')?>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>

  