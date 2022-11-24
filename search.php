<h2>
 <?php 
   $count = $wp_query->found_posts;
   $several = ($count<=1) ? '' : 's'; 

   if ($count>0) : $output =  $count.' résultat'.$several.' pour la recherche';
   else : $output = 'Aucun résultat pour la recherche';
   endif;
   
   $output .= ' "<span class="terms_search">'. get_search_query() .'</span>"';
   
   echo $output;
 ?>
</h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- 1) S'il y a au moins un résultat -->
<?php 
endwhile; 
else: 
?>
<!-- 2) Si pas de résultat -->
<?php endif; ?>

<article class="article_found" id="post-<?php the_ID(); ?>">
   <h3>
      <a href="<?php the_permalink(); ?>" title="Lire l'article &quot;<?php the_title(); ?>&quot;">
         <?php the_title(); ?>
      </a>
   </h3>
   <p class="the_excerpt">
      <?php
            // utilise le résumé alors on l'affiche
            if( get_the_excerpt() != '' ) : the_excerpt();

            // crée à partir du contenu de l'article
            else : echo mb_substr( strip_tags( get_the_content() ), 0, 300, "UTF-8" ).'[&hellip;]' ;

            endif;
         ?>
   </p>
   <footer class="metadata">
      <a class="url" href="<?php the_permalink(); ?>">
         <?php
             $permalink = get_permalink();
             
             // le permalien fait plus de 60 caractères de long on le coupe
             if( strlen($permalink) > 60 ) : echo mb_substr( $permalink, 0, 60, "UTF-8" ) . '&hellip;'; 

             else : echo $permalink;
                  echo'<i class="fas fa-long-arrow-alt-right"></i>';
             endif;?>
            
      </a>
     
   </footer>
</article>