<?php get_header(); ?>

<div class="ui container my-5">
    
    <div class="ui divided items">

        <?php get_template_part( 'includes/section', 'archive' ); ?>

    </div>

    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>




</div>

<?php get_footer(); ?>