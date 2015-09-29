<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Content fades in when appears -->
<script type="text/javascript" src="js/fade.js"></script>
<!-- Smooth scroll for anchors -->
<script type="text/javascript" src="js/scroll.js"></script>
<!-- Keeps content text fixed while scrolling -->
<!--script src="js/jquery.sticky-kit.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".sticky_column").stick_in_parent();
		});
	</script-->

  <!-- Broken...Prevents opened mobile menu from displaying when broswer window expands to tablet or desktop size -->
  <!-- <script type="text/javascript">

    if ($(window).width() > 767) {
       $('.mobile_menu').hide();
    }
    </script> -->

<!-- Carousel for app -->
<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle2.swipe.min.js"></script>
<!-- Thumbs show Content, Mobile Menu -->
<script type="text/javascript" src="js/content_hide.js"></script>

<title>Design :: Bryan Butler Graphic Design</title>
<meta name="description" content="b2 graphic design is Bryan Butler, a creative director who resides in Chicago. The design portfolio includes UX and UI for mobile apps, responsive web design, branding, motion graphics, and even some print">
<meta name="keywords" content="Bryan Butler, Brian Butler, Chicago, Graphic Design, design, b2, b2 design, b2 graphic, b2 graphic design, freelance, creative director, mobile, UX, UI, responsive, web design, web developer, branding, motion graphics">

<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="favicon/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="favicon/manifest.json">
<link rel="shortcut icon" href="favicon.ico">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="msapplication-TileImage" content="favicon/mstile-144x144.png">
<meta name="msapplication-config" content="favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4667783-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
	<div class="header">
		<div class="wrapper">
        	<div class="b2_logo"></div>

				  <ul class="desktop_tablet">
          	<li><span><a href="#grid">Design</a></span></li>
              <li><a href="photo.php">Photo/Video</a></li>
              <li><a href="about.php">About</a></li>
					</ul>

					<div class="mobile mobile_menu_icon" onclick="toggle_menu();">
					</div>
					<div class="clear"></div>
					<div class="mobile mobile_menu" style="display:none;">
          	<ul>
							<li class="mobile_li"><span><a href="#grid" onclick="toggle_menu();">Design</a></span></li>
              <li class="mobile_li"><a href="photo.php" onclick="toggle_menu();">Photo/Video</a></li>
              <li class="mobile_li"><a href="about.php" onclick="toggle_menu();">About</a></li>
            </ul>
					</div>

        </div>
	</div>
    <div class="content">
    	<div class="wrapper">
	    	<div id="content1" class="stick_in_parent">
					<div class="desc">
          	<h2>Mobile Marketing Associate Events App</h2>
            <p>The MMA app is a guide for the MMA's numerous conferences. When there is an active conference, users can view the week's events, find speakers and sponsors and which events they are hosting, as well view a list of the other attendees.</p>
          	<p class="tags">UX, Wireframes, UI, App Design</p>
					</div>
					<!--div class="desc sticky_column desktop">
          	<h2>Mobile Marketing Associate Events App</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
          	<p class="tags">UX, Wireframes, UI, App Design</p>
					</div>
					<div class="desc tablet_mobile">
	        	<h2>Mobile Marketing Associate Events App</h2>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p class="tags">UX, Wireframes, UI, App Design</p>
	        </div-->
          <div class="showcase">
						<div class="desktop_tablet" id=prev></div>
        		<div class="desktop_tablet" id=next></div>
						<div class="phone_bg cycle-slideshow"
							data-cycle-fx="fade"
							data-cycle-speed=600
							data-cycle-timeout=4000
							data-cycle-next="#next"
							data-cycle-manual-fx=fade
    					data-cycle-manual-speed=200
							data-cycle-pager=".dots"
							data-cycle-swipe=true
    					data-cycle-swipe-fx="scrollHorz"
							data-cycle-prev="#prev"
						>
							<img src="images/mma1@2x.jpg" />
							<img src="images/mma2@2x.jpg" />
							<img src="images/mma3@2x.jpg" />
							<img src="images/mma4@2x.jpg" />
							<img src="images/mma5@2x.jpg" />
							<img src="images/mma6@2x.jpg" />
						</div>
						<div class="dots"></div>
          </div>
          <div class="clear"></div>
        </div>

				<div id="content2" class="stick_in_parent">
					<div class="desc">
          	<h2>Mobile 101</h2>
						<p>The desire to create the Mobile 101 video arose from the need to explain why a marketing campaign benefits from including mobile.</p>
						<p class="tags">Motion Graphics, Illustration</p>
          </div>
					<!--div class="desc sticky_column desktop">
          	<h2>Mobile 101</h2>
						<p>This video was made to explain why a marketing campaign benefits from including mobile.</p>
						<p class="tags">Motion Graphics, Illustration</p>
          </div>
					<div class="desc tablet_mobile">
	        	<h2>Mobile 101</h2>
	          <p>This video was made to explain why a marketing campaign benefits from including mobile.</p>
						<p class="tags">Motion Graphics, Illustration</p>
	        </div-->
          <div class="showcase">
						<iframe class="video" src="https://www.youtube.com/embed/dohPb30LVvk?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
						<p class="runtime">Runtime 1:23</p>
          </div>
          <div class="clear"></div>
        </div>

				<div id="content3" class="stick_in_parent">
					<div class="desc">
          	<h2>The 3rd Degree</h2>
            <p>The 3rd Degree is a now defunct bar trivia system that allowed users to answer questions on a tv by either texting in, or through an app. The project had a psuedo-retro theme, and was filled with irreverant humor. Between each question, a random interstitial short video would play, made mostly from heavily editted public domain educational films from the 1950's. These shorts would have a pun about the short that would encourage the players, i.e. after implying a suburban family was blown up by an atomic bomb, the short would encourage the players to "have a blast".</p>
						<p>The first video here would show in part of a loop when no one was currently playing on a particular system. It is an animated quick overview on how to play. The second video is a very indepth overview of the whole system.</p>
						<p class="tags">Branding, Print Design, UI, Video Editing, Illustration, Animation, Motion Graphics, App Design</p>
          </div>
					<!--div class="desc sticky_column desktop">
          	<h2>The 3rd Degree</h2>
            <p>The 3rd Degree is a now defunct bar trivia system that allowed users to answer questions on a tv by either texting in, or through an app.</p>
						<p class="tags">Branding, Print Design, UI, Video Editing, Illustration, Animation, Motion Graphics, App Design</p>
          </div>
					<div class="desc tablet_mobile">
	        	<h2>The 3rd Degree</h2>
						<p>The 3rd Degree is a now defunct bar trivia system that allowed users to answer questions on a tv by either texting in, or through an app.</p>
						<p class="tags">Branding, Print Design, UI, Video Editing, Illustration, Animation, Motion Graphics, App Design</p>
	        </div-->
          <div class="showcase">
						<div class="cards">
							<img src="images/third_cardf.jpg" />
							<img src="images/third_cardb.jpg" />
						</div>
						<iframe class="video" src="https://www.youtube.com/embed/OZw6R92bufo?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
						<p class="runtime">Runtime 0:28</p>
						<iframe class="video" src="https://www.youtube.com/embed/IdFynv10H5E?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
						<p class="runtime">Runtime 4:06</p>
          </div>
          <div class="clear"></div>
        </div>

				<div id="content4" class="stick_in_parent">
					<div class="desc">
          	<h2>Christina Stradone</h2>
            <p>I wanted to create an exciting brand for Christina, something that would match her upbeat personality. The sharp, bright geometric shape that envelopes her name create this sort of mark. As for the portfolio site itself, the design is clean and minimal, allowing her work to stand in the forefront.</p>
						<p class="tags">Branding, Web Design</p>
          </div>
					<!--div class="desc sticky_column desktop">
          	<h2>Christina Stradone</h2>
            <p>Branding and Website for a Digital Cinematographer</p>
						<p class="tags">Branding, Web Design</p>
          </div>
					<div class="desc tablet_mobile">
	        	<h2>Christina Stradone</h2>
	          <p>Branding and Website for a Digital Cinematographer</p>
						<p class="tags">Branding, Web Design</p>
	        </div-->
          <div class="showcase">
						<div class="cards">
							<img src="images/christina_cardf.jpg" />
							<img src="images/christina_cardb.jpg" />
						</div>
          	<img class="site" src="images/christina_site1.jpg" />
						<img class="site" src="images/christina_site2.jpg" />
          </div>
          <div class="clear"></div>
        </div>

				<div id="content5" class="stick_in_parent">
					<div class="desc">
						<h2>Geopolis Theater Company</h2>
						<p>Geopolis was a startup theater company, whose goal was to bring a different culture to audiences each season. As such, the website, business cards and the more frequent events were branded with a theme as a vintage airline, using colors, shapes and typefaces that will help evoke that feeling.</p>
						<p class="tags">Branding, Web Design, Print Design</p>
					</div>
					<!--div class="desc sticky_column desktop">
						<h2>Geopolis Theater Company</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
						<p class="tags">Branding, Web Design, Print Design</p>
					</div>
					<div class="desc tablet_mobile">
						<h2>Geopolis Theater Company</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
						<p class="tags">Branding, Web Design, Print Design</p>
					</div-->
					<div class="showcase">
						<div class="cards">
							<img src="images/geopolis_cardf.jpg" />
							<img src="images/geopolis_cardb.jpg" />
						</div>
          	<img class="site" src="images/geopolis_site.jpg" />
						<img class="desktop_tablet" src="images/geopolis_poster.jpg" />
						<img class="desktop_tablet" src="images/geopolis_wildwoman.jpg" />
						<img class="mobile" src="images/geopolis_poster_mobile.jpg" />
						<img class="mobile" src="images/geopolis_wildwoman_mobile.jpg" />
					</div>
					<div class="clear"></div>
				</div>

				<div id="content6" class="stick_in_parent">
					<div class="desc">
          	<h2>Puttaroo</h2>
            <p>The now defunct "Groupon for golf", Puttaroo was a startup that saw an untapped market in offering discounts where everyone else had overlooked. I developed the name and the mark, setting the cornerstone for creating a brand that was clean, simple, and inviting.</p>
						<p class="tags">Branding, Web Design, Print Design</p>
          </div>
					<!--div class="desc sticky_column desktop">
          	<h2>Puttaroo</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
						<p class="tags">Branding, Web Design, Print Design</p>
          </div>
					<div class="desc tablet_mobile">
	        	<h2>Puttaroo</h2>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
						<p class="tags">Branding, Web Design, Print Design</p>
	        </div-->
          <div class="showcase">
						<div class="cards">
							<img src="images/puttaroo_cardf.jpg" />
							<img src="images/puttaroo_cardb.jpg" />
						</div>
          	<img class="site" src="images/puttaroo_site.jpg" />
          </div>
          <div class="clear"></div>
        </div>

      </div>
    </div>
    <div class="wrapper" id="grid">
    <h1>Design Work</h1>

			<a id="thumb1" class="link" href="#content1">
        <div class="nav_thumb">
					<div class="mobile_gradient">
						<div class="icon_container">
							<div class="icon icon_mobile"></div>
							<p class="icon_text">&mdash;&nbsp;view project&nbsp;&mdash;</p>
						</div>
					</div>
        </div>
      </a>
      <a id="thumb2" class="link" href="#content2">
      	<div class="nav_thumb">
					<div class="mobile_gradient">
						<div class="icon_container">
							<div class="icon icon_video"></div>
							<p class="icon_text">&mdash;&nbsp;view project&nbsp;&mdash;</p>
						</div>
					</div>
      	</div>
      </a>
      <a id="thumb3" class="link" href="#content3">
      	<div class="nav_thumb">
					<div class="mobile_gradient">
						<div class="icon_container">
							<div class="icon icon_design"></div><div class="icon icon_video"></div>
							<p class="icon_text">&mdash;&nbsp;view project&nbsp;&mdash;</p>
						</div>
					</div>
      	</div>
      </a>
      <a id="thumb4" class="link" href="#content4">
      	<div class="nav_thumb">
					<div class="mobile_gradient">
						<div class="icon_container">
							<div class="icon icon_design"></div><div class="icon icon_web"></div>
							<p class="icon_text">&mdash;&nbsp;view project&nbsp;&mdash;</p>
						</div>
					</div>
      	</div>
      </a>
      <a id="thumb5" class="link" href="#content5">
      	<div class="nav_thumb">
					<div class="mobile_gradient">
						<div class="icon_container">
							<div class="icon icon_design"></div><div class="icon icon_web"></div><div class="icon icon_print"></div>
							<p class="icon_text">&mdash;&nbsp;view project&nbsp;&mdash;</p>
						</div>
					</div>
      	</div>
      </a>
      <a id="thumb6" class="link" href="#content6">
      	<div class="nav_thumb">
					<div class="mobile_gradient">
						<div class="icon_container">
							<div class="icon icon_design"></div><div class="icon icon_web"></div>
							<p class="icon_text">&mdash;&nbsp;view project&nbsp;&mdash;</p>
						</div>
					</div>
      	</div>
      </a>
    </div>
    <div class="clear"></div>
    <div class="footer">
			<p class="copyright center">&copy; Bryan Butler <?php echo date("Y"); ?></p>
		</div>
</body>
</html>
