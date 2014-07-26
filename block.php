<a href="<?php echo get_permalink(); ?>" alt="<?php echo get_the_title(); ?>">
    <article id="post-<?php the_ID(); ?>" <?php post_class('block-article'); ?>>

        <div class="entry-image block-image">
            <?php $thumbnail = get_the_post_thumbnail($post->ID, 'roche-block');

            if($thumbnail) {
                echo $thumbnail;
            } else {
            ?>
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/cross.jpg'; ?>" alt="Placeholder"/>
            <?php
            }
            ?>
        </div>

        <div class="block-overlay">

        </div>

        <div class="block-title" style="<?php echo $thumbnail ? '' : 'display:table;'; ?>">
            <h3 class="entry-title"><?php the_title(); ?></h3>
        </div>

    </article>
</a>