<div class="col-lg-8 col-md-10 mx-auto">
<?php foreach($posts as $post) : ?>

          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                <?php echo $post['title']; ?>
              </h2>
            </a>
            <p class="post-meta">Posted by
              <a href="#"><?php echo $post['created_at']; ?></p></a>
              <p class="post-subtitle">
                <?php echo $post['body']; ?>
              </p>
            

          </div>
          <hr>
<?php  endforeach;?>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts →</a>
          </div>

</div>

         
