<!DOCTYPE html>
<html>
<head>
	<title>Codeigniter3 Instagram API Library</title>
	<?php echo link_tag('assets/magnific-popup.css');?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.magnific-popup.min.js" ></script>
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
					titleSrc: function(item) {
						return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
					}
				}
			});
		});
	</script>
</head>
<body>
<header>
</header>

<section id="main"></section>

	<?php $this->load->view($main_view); ?>

</section>

<footer>
  
  

</footer>


</body>
</html>