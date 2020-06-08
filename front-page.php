<?php get_header() ; ?>

<?php if (have_posts()): while (have_posts()): the_post();?>
<!-- пост -->
    <?php the_content() ; ?>
<?php endwhile; ?>
<!-- навигация -->
<?php else: ?>
<!-- нет постов -->
<?php endif; ?>

<?php get_footer() ; ?>