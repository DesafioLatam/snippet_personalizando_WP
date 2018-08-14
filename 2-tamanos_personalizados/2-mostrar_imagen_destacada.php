<div class="col-md-4 mt-5">
  <?php the_post_thumbnail('custom-size-blog', array('class' => 'img-fluid mb-3')); ?>
  <h4><?php the_title() ?></h4>
  <p><?php the_excerpt() ?></p>
  <a class="btn btn-primary" href="<?php the_permalink() ?>">Léeme completo</a>
</div>
