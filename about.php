<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Smooth scroll for anchors -->
<script type="text/javascript" src="js/scroll.js"></script>

	<!-- Mobile Menu -->
	<script type="text/javascript">

    function toggle_menu() {
        $('.mobile_menu').toggle();
        $('.mobile_li a').next().hide();
    }
</script>

<title>About :: Bryan Butler Graphic Design</title>
<meta name="description" content="b2 graphic design is Bryan Butler, a creative director who resides in Chicago. He specializes in UX and UI for mobile apps, and responsive web design">
<meta name="keywords" content="Bryan Butler, Brian Butler, Chicago, Graphic Design, design, b2, b2 design, b2 graphic, b2 graphic design, freelance, creative director, about">

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
          	<li><a href="index.php">Design</a></li>
            <li><a href="photo.php">Photo/Video</a></li>
            <li><span><a href=#>About</a></span></li>
					</ul>

					<div class="mobile mobile_menu_icon" onclick="toggle_menu();">
					</div>
					<div class="clear"></div>
					<div class="mobile mobile_menu" style="display:none;">
          	<ul>
							<li class="mobile_li"><a href="index.php" onclick="toggle_menu();">Design</a></li>
              <li class="mobile_li"><a href="photo.php" onclick="toggle_menu();">Photo/Video</a></li>
              <li class="mobile_li"><span><a href=# onclick="toggle_menu();">About</a></span></li>
            </ul>
					</div>

        </div>
	</div>

    <div class="wrapper" id="grid">
    	<h1>About</h1>

			<div id="profile">
				<div class="profile_pic"></div>
			</div>

      <div id="profile_copy">
      	<p>Hello!<br /><br />
				I'm Bryan, a creative director based in Chicago. My background has consisted of a lot of UX and UI for mobile apps and responsive websites. I'm really good with Photoshop and CSS. That said, I could still illustrate some vector icons or set and kern some good type at the drop of a hat. Speaking of hats, I tend to wear many, dabbling in photography, coding, and animation/motion graphics. Sometimes, I shoot a bit of video on my 5D, too.
				<br /><br />
				When I'm not basking in the glow of a Mac, I'm probably petting a cat or two, reading a novel, or playing a board game.
				</p>
      </div>

    </div>
    <div class="clear"></div>
    <div class="footer">
			<p class="copyright center">&copy; Bryan Butler <?php echo date("Y"); ?></p>
		</div>
</body>
</html>
