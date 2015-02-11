<div class="container">
    <div class="starter-template">
    	<?php echo img(array('src' => $user_data->data->profile_picture,'width' => '140', 'height' => '140', 'class'=>'img-thumbnail')); ?>
		<h1><?php echo ucfirst($user_data->data->username); ?> follows</h1>
	</div>
</div>


<section>
	<div class="container">
		<div class="popup-gallery">
		<?php if(is_array($follows->data)) { ?>
			<?php foreach($follows->data as $follower) { ?>
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <div class="caption">
				        	<p><?php echo anchor('/user/profile/' . $follower->id, $follower->username); ?></p>
							<p><?php echo img(array('src' => $follower->profile_picture, 'height'=>'242', 'width'=>'200', 'class'=>'img-thumbnail')); ?></p>
				      </div>
				    </div>
				  </div>
			<?php } ?>
		<?php } ?>
		</div>
	</div>
</section>