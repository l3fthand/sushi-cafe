<?php
	$terms = get_the_terms(get_the_ID(), 'filter');

	$classes = '';
	foreach($terms as $term){
		$classes .= $term->slug . ' ';
	}
?>

<div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix <?php echo $classes ?>">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="<?php the_field('image') ?>" alt="" />  
                  <div class="item-text">
                    <div class="description"><?php the_field('description') ?></div>
                    <div class="price"><?php the_field('price') ?></div>
                  </div>
                </div>               
              </div>
            </div>

            