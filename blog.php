<!DOCTYPE html>
<html lang ="en>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />

<title>NCCR</title>
   <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try{ 
var pageTracker = _gat._getTracker("UA-12742932-1");
pageTracker._trackPageview();
} catch(err) {} 
</script>

<?php
require('./blog/wp-blog-header.php');
?>

</head>

<body>
<div id="container">
		<div id="header">
        	<img src="images/index_01.gif"/>
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="./index.php">Home</a></li>
                <li class="menuitem"><a href="./live.html">Listen Live</a></li>
                <li class="menuitem"><a href="./schedule.html">Schedule</a></li>
				<li class="menuitem"><a href="./contact.html">Contact</a></li>
			    <li class="menuitem"><a href="./listenAgain.html">Listen Again</a></li>
				<li class="menuitem"><a href="./Archive.html">From the Archive</a></li>
            </ul>
        </div>
		<div id="leftmenu">
			<div id="leftmenu_top"></div>
				<div id="leftmenu_main">                   
                <h3>Our Links</h3>
                <ul>
                    <li><a href="./DJ_Page.php">Our DJ's</a></li>
                    <li><a href="./events.html">Our Events</a></li>
                    <li><a href="./Photos.html">Our Photos</a></li>
					<li><a href="./blog.php">Our Blog</a></li>
                </ul>
		</div>
		</div>
      
		<div id="content">
        
        <div id="content_top"></div>
        <div id="content_main">
        	<h2>Welcome to North Cotswold Community Radio Blog </h2>
        	<p>&nbsp;</p>
			<p>Find out what the DJ's have lined up for this week, hear what they think about the shows, and general chat on the NCCR Blog site</p>
				<p>&nbsp;</p>
				<?php $posts = get_posts('numberposts=10&order=DES&orderby=the_date&category=4');
					foreach ($posts as $post) : start_wp(); ?>
						<h3><?php the_date(); echo "<br />"; ?><h3>
						<h4><?php the_title(); ?></h4>
						<?php the_excerpt(); ?> 
						<p>&nbsp;</p>
					<?php endforeach;?>
			<p>&nbsp;</p>
		 </div>
		 
        <div id="content_bottom"></div>

      </div>
   </div>

   
</body>
</html>
