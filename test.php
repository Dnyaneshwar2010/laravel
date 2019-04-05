<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<title>MY TEST HTML Tutorial version 3</title>
<body>

<h1>This is a heading</h1>
<p>This is a paragraph.</p>
<script type="text/javascript" src="jquery.min.1.4.js"></script>
<script type="text/javascript" src="jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="jquery.easing-1.4.pack.js"></script>
<script type="text/javascript" src="jquery.mousewheel-3.0.4.pack.js"></script>

<link rel="stylesheet" href="jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<a id="single_image" href="image_big.jpg"><img src="image_small.jpg" alt=""/></a>
<a id="inline" href="#data">This shows content of element who has id="data"</a>

<div style="display:none"><div id="data">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div></div>
<a href="http://www.example?iframe">This goes to iframe</a>

or

<a class="iframe" href="http://www.example">This goes to iframe</a>
<a href="http://www.example/data.php">This takes content using ajax</a>
/* HTML */
<a class="grouped_elements" rel="group1" href="image_big_1.jpg"><img src="image_small_1.jpg" alt=""/></a>
<a class="grouped_elements" rel="group1" href="image_big_2.jpg"><img src="image_small_2.jpg" alt=""/></a> 	

<a class="grouped_elements" rel="group2" href="image_big_3.jpg"><img src="image_small_3.jpg" alt=""/></a> 
<a class="grouped_elements" rel="group2" href="image_big_4.jpg"><img src="image_small_4.jpg" alt=""/></a> 
<?php

?>
<script type="text/javascript">
	$(document).ready(function() {

	/* This is basic - uses default settings */
	
	$("a#single_image").fancybox();
	
	/* Using custom settings */
	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});

	/* Apply fancybox to multiple items */
	
	$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	
	$("a.grouped_elements").fancybox();
	
});
</script>

</body>

</html> 