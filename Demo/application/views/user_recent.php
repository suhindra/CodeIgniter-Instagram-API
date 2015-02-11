<div class="container">
    <div class="starter-template">
    	<?php echo img(array('src' => $user_data->data->profile_picture,'width' => '140', 'height' => '140', 'class'=>'img-thumbnail')); ?>	
		<h1><?php echo ucfirst($user_data->data->username); ?>'s Instagram feed</h1>
	</div>
</div>

<section>
	<div class="container">
	<h2>Recent Media</h2>
		<div class="popup-gallery">
		<?php if(is_array($user_recent_data->data)) { ?>
			<?php foreach($user_recent_data->data as $feed_data) { ?>
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <a href="<?php echo $feed_data->images->standard_resolution->url; ?>"><img height="242" width="200" src="<?php echo $feed_data->images->thumbnail->url; ?>" alt="thumbnail"></a>
				      <div class="caption">
				        <?php if(isset($feed_data->location->name)) { ?>
	
							<p>Taken at <?php echo $feed_data->location->name; ?></p>
					
						<?php } ?>
						
						<?php if(isset($feed_data->comments->count)) { ?>
					
							<p><?php echo $feed_data->comments->count; ?> comments</p>
					
						<?php } ?>
						
						<?php if(isset($feed_data->likes->count)) { ?>
					
							<p><?php echo $feed_data->likes->count; ?> likes</p>
					
						<?php } ?>
						
						<?php if(count($feed_data->tags) > 0) { ?>
						
							<p>Tags</p>
							
							<ul>
							
							<?php foreach($feed_data->tags as $tag) { ?>
								<li><?php echo anchor('/tags/recent/' . $tag, $tag); ?></li>
							<?php } ?>
							
							</ul>
						
						<?php } ?>
				      </div>
				    </div>
				  </div>
			<?php } ?>
		<?php }  else { ?>
		<p>There is nothing in the feed</p>
		<?php } ?>
		</div>
	</div>

</section>