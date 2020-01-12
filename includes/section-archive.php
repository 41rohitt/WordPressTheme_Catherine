<?php if(have_posts(  )): while(have_posts(  )): the_post(  ); ?>

<div class="item my-3 pt-5">
    <div class="ui two column stackable grid">
        <div class="ten column wide">
            <div class="content">
                <h3 class="ui huge header mb-3"><?php the_title(); ?></h3>
                <div class="description pb-5">
                    <?php the_content(); ?>
                </div>
                <div class="extra">
                          
                </div>
            </div>
        </div>
        <div class="six column wide">
            <div class="image">
                <?php if(has_post_thumbnail(  )): ?>

                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title( ); ?>" class="ui fluid image">

                <?php endif; ?>
            </div>
        </div>
        <a href="<?php the_permalink(); ?>">
        <div class="ui left floated animated large button mb-3">
            <div class="visible content">Read More</div>
            <div class="hidden content"><i class="right arrow icon"></i></div>
        </div>
    </a>
    </div>
     

</div>
<div class="ui horizontal divider"><i class="pencil icon"></i></div>

<?php endwhile; else: endif; ?>