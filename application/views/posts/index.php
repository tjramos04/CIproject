<h2><?= $title ?></h2>
<div>
	<?php foreach ($posts as $post) : ?>
	
	<div class="row">
	<br>
		<div class="col-md-3">
				<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
				
		</div>
			<div class="col-md-9">
						<h3><?php echo $post['title']; ?></h3>
						<small class = "post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small><br>	
				<blockquote>
				<?php echo word_limiter($post['body'], 50); ?><br>
				<p><a class = "btn btn-primary btn-xs" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
				</blockquote>
				
			</div>
	</div>
		
	<?php endforeach; ?>

</div>