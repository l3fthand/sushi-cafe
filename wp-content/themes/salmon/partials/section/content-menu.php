

    <section id="portfolio" class="section">
 
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title"><?php the_title() ?></h2>
          <hr class="lines">
          <p class="section-subtitle"><?php the_content() ?></p>
        </div>
        <div class="row">          
          <div class="col-md-12">
           
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                All 
              </a>
              <?php
					$terms = get_terms('filter',array('hide_empty'=>false));

					foreach ($terms as $term) {
						echo '<a class="filter btn btn-common" data-filter=".'.$term->slug.'">
					              '.$term->name.' 
					          </a>';
					}
				?>
            </div>
          </div>
          <?php
        // The Query
          $args = array(
            'post_type' => 'menu');
          $query = new WP_Query($args);
            while ($query->have_posts()) {

              $query->the_post();
              get_template_part('partials/menu/content','default');
            
            }
          /* Restore original Post Data */
          wp_reset_postdata();
        ?>
          </div>
        </div>
      </div>
     
    </section>

