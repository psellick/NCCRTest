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
<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<script language="javascript" src="./tweet/jquery.tweet.js" type="text/javascript"></script>
<script type='text/javascript'>
      jQuery(function($){
        $(".tweet").tweet({
          join_text: "auto",
          username: "NCCRradio",
          avatar_size: 32,
          count: 3,
          auto_join_text_default: " NCCR Tweeted ",
          auto_join_text_ed: " NCCR ",
          auto_join_text_ing: " NCCR were ",
          auto_join_text_reply: " NCCR replied ",
          auto_join_text_url: " NCCR ",
          loading_text: "loading tweets..."
        });
      });
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
		<div id="leftmenu_bottom"></div>
        </div>
      
		<div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main">
        	<h2>Welcome to North Cotswold Community Radio</h2>
        	<p>&nbsp;</p>
           	<p>&nbsp;</p>
       	  <h3>NCCR - Local community radio for the North Cotswolds and Beyond</h3>
       	  <p>Welcome to NCCR, the only station in the North Cotswolds, where we broadcast a selection of music, local news stories and programmes that are relevant to the local community.
Listen in Now or playback 7 days worth of content</p>
        	<p>&nbsp;</p>
		<?php $posts = get_posts('numberposts=10&order=DES&orderby=the_date&category=3');
			foreach ($posts as $post) : start_wp(); ?>
				<h3><?php the_title(); ?></h3>
				<p>
					<?php the_content(); ?> 
				</p>			
				<p>&nbsp;</p>
			<?php endforeach;?>
			<h3>@NCCRradio </h3>
			<p>&nbsp;</p>
		 <div class="tweet"></div>
		 </div>
		 
        <div id="content_bottom">
		
			<p>&nbsp;</p>
				<p>&nbsp;</p>
				<h1>Our Sponsor's</h1>
			<table align="centre">
				<tr>			
					<td style="width:25%">
						<a HREF="http://www.warnersbudgens.co.uk/"><img src="./images/sponsers/budgens.jpg" /></a>
					</td>
					<td style="width:25%">
						<a HREF="http://www.gloucestershirecommunityfoundation.co.uk/"><img src="./images/sponsers/glosComunity.jpg" /></a>
					</td>
					<td style="width:25%">
						<a HREF="http://www.bourtontimes.co.uk/">
						<img src="./images/sponsers/Bourton.jpg" /></a>
					</td>
					<td style="width:25%">
						<a HREF="http://www.walkersprivatedaynursery.com/">
						<img src="./images/sponsers/walkers.jpg" /></a>
					</td>
				</tr>
		</table>
		</div>
      </div>
   </div>

   
</body>
</html>
