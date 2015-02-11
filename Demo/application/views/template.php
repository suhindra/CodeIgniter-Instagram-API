<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Codeigniter 3.0 Instagram API Library</title>
	<?php echo link_tag('assets/magnific-popup.css');?>
	<?php echo link_tag('assets/bootstrap.min.css');?>
	<style type="text/css">
	body {
	  padding-top: 50px;
	}
	.starter-template {
	  padding: 40px 15px;
	  text-align: center;
	}
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.magnific-popup.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap.min.js" ></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.popup-gallery').magnificPopup({
				delegate: 'a',
				type: 'image',
				tLoading: 'Loading image #%curr%...',
				mainClass: 'mfp-img-mobile',
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				}
			});
		});
	</script>
	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	 	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-58743016-1', 'auto');
  		ga('send', 'pageview');

	</script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Cinsta</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <?php if($this->session->userdata('instagram-token')) { ?>
            <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><?php echo anchor('/user/profile/', 'Your profile'); ?></li>
				<li><?php echo anchor('/user/feed/', 'Your feed'); ?></li>
				<li><?php echo anchor('/user/recent/', 'Your recent media'); ?></li>
				<li><?php echo anchor('/user/search/', 'Search users'); ?></li>
				<li><?php echo anchor('/user/follows/', 'Who you follow'); ?></li>
				<li><?php echo anchor('/user/followed_by/', 'Who follows you'); ?></li>
	          </ul>
	        </li>
	        <?php } else { ?>
			<li><?php echo anchor($this->instagram_api->instagram_login(), 'Instagram Login'); ?></li>
			<?php } ?>
          </ul>
        </div>
      </div>
    </nav>
	<?php $this->load->view($main_view); ?>
</body>
</html>