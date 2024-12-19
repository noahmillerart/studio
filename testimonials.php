<div class="container-fluid"><!--Testimonials-->
  <div class="row pb-5 pt-5">
      <?php
      $post_ids = array(32, 25, 29);

      foreach ($post_ids as $post_id) :
          $post = get_post($post_id);
      ?>
          <div class="col-sm text-center">
              <div class="py-4">
                  <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid rounded-circle')); ?>
              </div>

              <?php
              if ($post) {
                  echo apply_filters('the_content', $post->post_content);
              } else {
                  echo 'No post found';
              }
              ?>
          </div>
      <?php endforeach; ?>
  </div>
</div><!--End Testimonials-->