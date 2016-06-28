<?php 
	include 'views/head.php';
	include 'views/header.php';
?>
			<!-- Banner -->
				<div id="banner">
					<div class="container">
						<section>
							<a><img class="headerImg" src="images/nsappbanner.png" alt="" /></a>
						</section>
					</div>
				</div>

			<!-- Featured -->
				<div id="featured">
					<section class="container">
						<header>
							<h2>Ns App</h2>
							<span class="byline">Verdwaald en opzoek naar een station? Gebruik de Ns App om een station te zoeken.</span>
						</header>
					</section>
				</div>
				
			<!-- Main -->
				<div id="main">
					<section class="container">
											
						<h2>Ns App</h2>
						<p>In dit project heb ik alleen een Web Applicatie gemaakt met behulp van <a href="https://angularjs.org/">Angular</a>. <br>
							In dit project heb ik geleerd om functies te schrijven en controllers te gebruiken met behulp van angular, <br>
							en ik heb geleerd om JSON files te gebruiken. <br>
							Ook heb ik gebruik gemaakt van enkele modules: </p>
							<ul>
								<li>NgAnimate: een module voor het animeren van elementen.</li>
								<li>uiGmapgoogle-maps: een Google Maps API die ik heb gebruikt voor het laten zien van de diverse stations.</li>
							</ul>
							<p>Door middel van JSON laad ik alle stations in die in de lijst staan. <br>
								Als er dan op een station geklikt wordt, laat de map het bijbehorende station zien.</p>

							<p>Link naar de code: <br>
							<ul>
								<li><a target="_blank" href="https://github.com/Ih4teappels/NsApp" class="icon fa-github"><span> Ns App</span></a></li></p>
							</ul>
							<p>Link naar de site: <br>
								<ul>
								<li><a target="_blank" href="http://17786.hosts.ma-cloud.nl/NsApp/index.html" class="icon fa-website"><span> Ns App</span></a></li></p>
							</ul>
					</section>
				</div>

<?php 
	include 'views/footer.php';
?>