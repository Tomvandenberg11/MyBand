<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>YELLOW CLAW | NEVER DIES</title>
	<link href="https://fonts.googleapis.com/css?family=Pirata+One|Roboto" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="menu.js"></script>
	<script src="scroll.js"></script>

	<script>
		$(function () {
			$('a[href*="#"]:not([href="#"])').click(function () {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 750);
						return false;
					}
				}
			});
		});
	</script>
</head>

<body>
	<header id="home">

		<nav>
			<ul class="topnav">
				<li><a id="homeLink" href="#home"><img id="logo" src="Images/YC_logo.jpg" alt="YELLOW CLAW LOGO"></a></li>
				<li><a href="#about">ABOUT</a></li>
				<li><a href="#tour">TOUR</a></li>
				<li><a href="#shop">SHOP</a></li>
				<li><a href="#tracks">TRACKS</a></li>
				<li><a href="#contact">CONTACT</a></li>
				<li class="icon">
					<a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
				</li>
			</ul>
			
		</nav>
			
	</header>

	<main>
		
		<div id="about">
			<h1>ABOUT</h1>
			<p>Yellow Claw is a DJ and record producer duo from Amsterdam, Netherlands. The group consists of Jim Aasgier (Jim Taihuttu) and Nizzle (Nils Rondhuis). Their music is a mix of wide range of genres and often incorporates elements from trap, hip hop, dubstep, hardstyle and moombahton.<br><br><br>
				
Yellow Claw first gained popularity in the middle of 2010, after founding and hosting a night party at one of Amsterdam's most famous night clubs, the Jimmy Woo. During 2012 and 2013, they released a number of successful singles, which charted on the Dutch and Belgian national charts: "Krokobil", "Nooit Meer Slapen", "Thunder" and "Last Night Ever". The music videos for the singles became viral, each gaining over four million views on YouTube. During that time, Yellow Claw performed at many Dutch festivals, such as DirtyDutch Festival, Sneakerz Festival, Latin Village Festival and Solar Festival.<br><br>

In 2013, Yellow Claw signed to Diplo's label Mad Decent. On 7 March 2013, they released their first international EP Amsterdam Trap Music. In June, they performed at Diplo and Friends on BBC Radio 1, and in July – at the 2013 Tomorrowland Festival. On 26 September 2013, they put out their second EP, titled Amsterdam Twerk Music.<br><br>

On 1 November 2013, after signing to Spinnin' Records, the group released their first international single "Shotgun", featuring vocals from Dutch singer Rochelle. The single peaked at number 10 in the Netherlands and number 20 in Belgium. On 8 November 2013, Yellow Claw released a collaboration single with Flosstradamus, titled "Pillz", under Fool's Gold Records and Ultra Music.<br><br>

In 2015, Yellow Claw released their debut studio album, Blood for Mercy. The album's lead single, "In My Room" features American record producer DJ Mustard and American rappers Ty Dolla Sign and Tyga.<br><br><a id="arrowUp" href="#home">&#8679;</a></p>
		</div><hr>
		
		<div id="tour">
			<h1>TOUR</h1>
			<p><a id="arrowUp" href="#home">&#8679;</a></p>
		</div><hr>
		
	</main>	
		
</body>

</html>