<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */
?>
        <script src="https://kit.fontawesome.com/4e2b8e41f4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<?php get_header(); ?>
    <main class="site__main">
        
    <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                the_title('<h2>','</h2>');
                the_content(null, true);
            endwhile;
        endif;
    ?>
    </main>
<?php get_footer();?>



