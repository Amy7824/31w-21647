
<?php get_header(); ?>
    <main class="site__main">

      <h2>Résulatat de la recherche</h2>
      
         <?php 
            $count = $wp_query->found_posts;
            $several = ($count<=1) ? '' : 's'; 

            if ($count>0) : $output = ' Elément'.$several.' de recherche :';
            else : $output = 'Aucun résultat pour la recherche';
            endif;
            
            $output .= ' "<span class="terms_search">'. get_search_query() .'</span>"';
            
            echo $output;
         ?>

    <section class="liste">
	  <?php	if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();?>
                <article class="liste_cours">
                <h1><a href="<?php the_permalink();?>">
                <?php the_title();?></a></h1>
           
                <a href="<?php the_permalink();?>">
                <?= wp_trim_words(get_the_excerpt(),10," ... "); ?><i class="fas fa-long-arrow-alt-right"></i></a>
                </article>  
               
          <?php  endwhile;?>
       <?php endif;?>
    </section>
    <?php 
            $count = $wp_query->found_posts;
            $several = ($count<=1) ? '' : 's'; 
            echo "Nombre de résultat:";
            if ($count>0) : $output =  $count ;
            endif;
            echo $output;
            
            
         ?>
</main>
<?php get_footer();?>

</html>


