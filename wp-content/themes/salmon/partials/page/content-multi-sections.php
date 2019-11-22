
<?php

$sectionIDs = get_field('sections');


// The Query
$args = array(
    'post_type'=>'section',
    'post__in' => $sectionIDs,
    'orderby' => 'post__in'
);
$the_query = new WP_Query( $args );
 
// The Loop
while ( $the_query->have_posts() ) {
    $the_query->the_post();

    $extra = 'default';


    //to find section by section slug 
    $section_slug = get_post_field('post_name');
    if(locate_template(array('partials/section/content-'.$section_slug.'.php'))){
        $extra = $section_slug;
    }

    get_template_part('partials/section/content',$extra);
}

/* Restore original Post Data */
wp_reset_postdata();
?>







