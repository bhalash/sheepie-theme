<?php get_header(); ?>
<div class="content-right">
    <div class="interior">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?> id="article-<?php the_ID(); ?>">
                    <h3 class="article-title">
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p class="meta">
                        by <a title="Find more posts by <?php the_author(); ?>" href="<?php echo home_url(); ?>/?s&author=<?php the_author(); ?>"><?php the_author(); ?></a> 
                        on <time datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time(get_option('date_format')) ?> in <?php the_category(', '); ?>.</time> <?php comments_popup_link('0 comments', '1 comment.', '% comments.'); ?>
                        <?php edit_post_link('Edit post.', ' ', ''); ?>
                    </p>
                    <?php the_content('Read the rest of this post &raquo;'); ?>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <article> 
                <h3>No joy, sorry</h3>
                <p>Sorry, no posts were found that match your criteria!</p>
            </article>
        <?php endif; ?>
        <div class="pagination">
            <div class="left">
                <?php previous_posts_link('Previous Page'); ?>
            </div>
            <div class="right">
                <?php next_posts_link('Next Page'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
