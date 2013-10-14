<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tim Doppenberg</title>
	<meta name="description" content="I am the greatest of all Tims.">
	
	<link href='http://fonts.googleapis.com/css?family=Average' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="stylesheets/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
</head>
<body>
<div id="outerWrap">
	<header>
		<nav id="topNav" role="navigation">
			<ul role="menubar">
				<li role="menuitem"><a href="#">Home</a></li>
				<li role="menuitem"><a href="#">About</a></li>
				<li role="menuitem"><a href="#">Blog</a></li>
				<li role="menuitem"><a href="#">Contact</a></li>
			</ul>
		</nav>
		<i class="icon-reorder" id="toggleMenu"></i>
	</header>
	<section id="firstSection" class="sections">
	<div class="inner_wrap">
	<h1>Tim Doppenberg</h1>
	<div id="hwrap">
	<a href="#secondSection" class="local"><h3>Design</h3></a>
	<a href="#secondSection" class="local"><h3>Development</h3></a>
	<a href="#thirdSection" class="local"><h3>Wordpress</h3></a>
	</div><!--  end hwrap  -->
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<a href="#" class="local"><div role="button" class="button action left">ACTIE 1</div></a>
	<a href="#" class="local"><div role="button" class="button action right">ACTIE 2</div></a>
	</div><!--  end inner_wrap  --> 
	</section><!--  end firstSection  -->
	<section id="secondSection" class="sections">
	<div class="pointerDowner"></div>
	<div class="inner_wrap">
	<h2>Design <span class="amp">&amp;</span> Development</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	</div><!--  end inner_wrap  -->
		
	</section><!--  end secondSection  -->
	<section id="thirdSection" class="sections">
	<div class="pointerDowner"></div>
	<div class="inner_wrap">
	<h2>Wordpress</h2>
	<img src="images/wordpress_cutout.png" id="wpStamp" class="left" alt="">
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	</div><!--  end inner_wrap  -->
		
	</section><!--  end thirdSection  -->
</div><!--  end outerWrap  -->

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/scrollTo.js"></script>
<script type="text/javascript" src="js/localScroll.js"></script>
<script type="text/javascript" src="js/tim.js"></script>
<script type="text/javascript">
	document.onload = timInit();
</script>
</body>
</html>