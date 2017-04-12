<?php
require("PHPWebThread.php"); // Load the file! :D

function the_header(){
	/* Just echo the code for header, simple, huh? */
	?>
	<div id="header">
		This is the header of the website generated from thread : <b>the_header()</b>.
	</div>
	<?php
	}
	
	function the_content(){
		/* Just sleep and echo the code for content, simple, huh? */
	sleep(0);
	?>
	<div id="posts">
	<?php
	for($c=0;$c<2; ++$c){
	?>

		<div class="post">
			<h1 class="post-title">this section is generated from thread: <b>the_content()</b> : <?php echo $c; ?></h1><br/>
			<div class="post-content">
				<p>Test text</p>		
			</div>
		</div>
	
	<?php
	}
	?>
	</div>
	<?php
	}


	function the_sidebar(){
		/* Just sleep and echo the code for sidebar, simple, huh? */
	sleep(0);
	?>
	<div id="sidebar">
	<?php
	for($c=0;$c<3; ++$c){
	?>
		<div class="widget">
			<h1 class="widget-title">Widget from thread <?php echo $c; ?></h1><br />
			<div class="widget-content">
				thread name <b>the_sidebar()</b> : <?php echo $c; ?>
			</div>
		</div>
	<?php
	}
	?>
	</div>
	<?php
	}
	function the_footer(){
		/* Just echo the code to the footer, simple, huh? */
	?>
	<div id="footer">
		This is the footer of the website generated from the <b>the_footer()</b> thread.
	</div>
	<?php
	}
?>
<html>
	<head>
		<title>Test</title>
	</head>
	<body>
		<?php
		/*
		 /* Header */
		$header = new PHPWebThread("the_header"); //Constructs a PHPWebThread to the header, passing as a argument the function with the content of the header
		$header -> addCSSFile("css/header.css"); // Load the CSS of the header
		$header -> setCache(true);// We want to cache the header, that's static, huh?
		$header -> start(); // Just start, and echo, the code to initialize the thread

		/* Content */
		$content = new PHPWebThread("the_content");  //Constructs a PHPWebThread to the content, passing as a argument the function with the content of the content
		$content -> addCSSFile("css/content.css"); // Load the CSS of the content
		$content -> start(); // Just start, and echo, the code to initialize the thread

		/* Sidebar */
		$sidebar = new PHPWebThread("the_sidebar");  //Constructs a PHPWebThread to the sidebar, passing as a argument the function with the content of the sidebar	
		$sidebar -> addCSSFile("css/sidebar.css"); // Load the CSS of the sidebar
		$sidebar -> start(); // Just start, and echo, the code to initialize the thread

		/* Footer */
		$footer = new PHPWebThread("the_footer");
		$footer -> setCache(true); // We want to cache the footer, that's static too, huh?
		$footer -> addCSSFile("css/footer.css");  // Load the CSS of the footer
		$footer -> start(); // Just start, and echo, the code to initialize the thread
		PHPWebThread::printScripts("../"); //Just echo the script to load the file PHPWebThread.js, that initializes all the threads above
		// Oh, we need to pass an argument indicating to load the PHPWebThread.js to load file from up directory
		// $footer -> start();
		
		?>
		
	</body>
</html>

