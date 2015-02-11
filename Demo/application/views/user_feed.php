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
		<?php if(is_object($user_feed)) { ?>
			<?php foreach($user_feed->data as $feed_item) { ?>
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <div class="caption">
				        <?php if($feed_item->type == 'image') { ?>
		
							<p><?php echo anchor($feed_item->images->standard_resolution->url, img(array('src' => $feed_item->images->thumbnail->url, 'height'=>'242', 'width'=>'200', 'class'=>'img-thumbnail'))); ?></p>
							
							<p>Posted by <?php echo anchor('#', $feed_item->user->username); ?> using the <?php echo $feed_item->filter; ?> filter</p>
							
							<?php if(isset($feed_item->location->name) && $feed_item->location->name != '') { ?>
							
							<p>Taken at <?php echo anchor('#', $feed_item->location->name); ?></p>
							
							<?php } ?>
							
						<?php } ?>
				      </div>
				    </div>
				  </div>
			<?php } ?>
		<?php } ?>
		</div>
	</div>
</section>