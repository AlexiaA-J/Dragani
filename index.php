    <?php
    get_header();
    ?>
    <div class="mainContent">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
    </div>
    <?php
    get_footer();
    ?>