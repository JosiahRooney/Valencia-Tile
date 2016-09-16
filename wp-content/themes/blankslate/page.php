<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">
<?php 

$thisPost = get_post();
$pageName = $thisPost->post_name;
$pageTitle = $thisPost->post_title;
$thisParent = $thisPost->post_parent;

if ( $thisParent != '7' ) {
echo ('<div class="brdcrmbs"><a href="http://rvalenciatile.com/"><i class="fa fa-home"></i></a> - ');
echo ($pageTitle);
echo ('</div>');
}; 

if ( $thisParent == '7' ) {
echo ('<div class="brdcrmbs"><a href="http://rvalenciatile.com/"><i class="fa fa-home"></i></a> - <a href="http://norcadesign.com/rvalenciatile/services" title="Services">Services</a> - ');
echo ($pageTitle);
echo ('</div>');
}

?>

<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>