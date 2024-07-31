<!doctype html><?php
	include_once __DIR__ . '/assets/scssphp-1.12.1/scss.inc.php';
	use ScssPhp\ScssPhp\Compiler;
	$compiler = new Compiler();
	$compiler->setImportPaths(__DIR__);
?><html lang="en">
<head>
	<title>Kaitlyn Callow | Software</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Software, Leadership, Systems Architect, DevOps - 15+ years experience - I help companies grow and thrive.">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="assets/lib/lightgallery/css/lightgallery-bundle.css" />
	<script src="assets/lib/lightgallery/lightgallery.min.js"></script>
    <script src="assets/lib/lightgallery/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <script src="assets/lib/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
	<style type="text/css">
		<?php echo $compiler->compileString('@import "style.scss";')->getCss(); ?>
	</style>

</head>
<body>
<div class="body">
<div class="column">
	<div class="main">
		<div class="title">
			<h1>Kaitlyn Callow</h1>
			<h2>Software — Leadership — Systems Architect — DevOps</h2>
		</div>

		<div class="intro">			
			<h3>I help companies grow and thrive</h3>
			<p>I have more than 15 years' experience developing software products from prototype to production and beyond.</p>
			<div class="socials">
				<a href="https://www.linkedin.com/in/kaitlyncallow" class="linkedin"><img alt="LinkedIn" src="assets/LI-Logo-light.png" /></a>
				<a href="https://github.com/kales0" class="github"><img alt="GitHub" src="assets/GitHub_Logo-light.png" /></a>
			</div>
		</div>

		<div class="navigation">
			<a href="#work">My Work</a>
			<a href="#coding">Coding</a>
			<a href="#resume">Resume</a>
			<span class="spacer"></span>
		</div>

		<p class="languages omnom">
			Food for search engines: Programming, Databases, Systems Design, DevOps, AWS, PHP, MySQL, Mobile, Cloud, Distributed, UX, UI, Design, Front-End, Back-End, Apache, Nginx, Linux, OpenGL, WebGL, Jira, Git, Slack, C#, Java, MSSQL, C++, Python, SQL, HTML, CSS, JavaScript, jQuery, React.js, Layout, Planning, Prototyping, ElasticBeanstalk, EC2, RDS, Amplify, Route53, Lamba, IoT, LwM2M, Particle.io, Android, iOS
		</p>

		<div class="profile">
			<img src="assets/coders2.png" alt="Kaitlyn in action!" />
			<div>
				<span>Kaitlyn Callow</span>
				<span>Coder Extraordinaire</span>
				<span>Powered by Coffee & Spite</span>
				<span>Canadian <img src="assets/canada2.png" alt="Flag of Canada" style="height: 11px; margin-left: 5px; margin-bottom: -1px;" /></span>
			</div>
		</div>
		
		<div id="work">
			<h3>My Work</h3>
			<div class="timeline">
				<div class="timeline-section left">
					<div class="company-bio">
						<h4>EXACT Technology</h4>
						<div>Software Tech Lead</div>
						<div>2020 &mdash; Now</div>
						<p>Concrete monitoring platform.  Real-time data services, hardware products, and suites of tools for managing concrete. Initially hired as the Track Product Lead focusing on digital tools that capture all aspects of planning, qc, and scheduling.  After 2 years I am now in a Tech Lead position overseeing all software teams.</p>
						<ul><li>
							AWS
						</li><li>
							PHP
						</li><li>
							MySQL
						</li><li>
							Python
						</li><li>
							React
						</li><li>
							React Native
						</li></ul>
					</div>
					<div class="company-image"><img src="assets/work/exact.png" alt="EXACT Technology" /></div>
				</div>
				<div class="timeline-section right">
					<div class="company-bio">
						<h4>Cevnn Payments</h4>
						<div>Lead Software Engineer</div>
						<div>2019</div>
						<p>Payment gateway service with integrations for commonly used checkout carts.  I was hired to move the product beyond the prototype stage and get the team established.  We had significant growth in the year I was working there.</p>
						<ul><li>
							AWS
						</li><li>
							PHP
						</li><li>
							MySQL
						</li><li>
							React
						</li><li>
							NodeJS
						</li></ul>
						<div class="gallery">
							<a href="assets/work/samples/cevnn/cevnn1.png"><img src="assets/work/samples/cevnn/cevnn2-thumbnail.png" alt="Cevnn Payments" /></a>
						</div>
					</div>
					<div class="company-image"><img src="assets/work/cevnn.png" alt="Cevnn Payments" /></div>
				</div>
				<div class="timeline-section left">
					<div class="company-bio">
						<h4>Clausehound</h4>
						<div>Senior Full-Stack Developer</div>
						<div>2018</div>
						<p>Law tools and services for collaboration, knowledge capture, organization, and document assembly.  I prototyped a new product called Paperchaser which enabled legal document assembly, review / signing, and tracking.</p>
						<ul><li>
							PHP
						</li><li>
							MySQL
						</li><li>
							React
						</li></ul>
						<div class="gallery">
							<a href="assets/work/samples/clausehound/paperchaser.png"><img src="assets/work/samples/clausehound/paperchaser-thumbnail.png" alt="Paperchaser" /></a>
						</div>
					</div>
					<div class="company-image"><img src="assets/work/Clausehound.jpeg" alt="Clausehound" /></div>
				</div>
				<div class="timeline-section right">
					<div class="company-bio">
						<h4>Bitcurve Systems</h4>
						<div>Full-Stack Developer</div>
						<div>2012 &mdash; 2017</div>
						<p>Software agency, digital design & development studio.  Wide range of clients. Largely medical industry projects as well as work for government agencies.  Planned and produced more than 35 software products from concept to production.</p>
						<ul><li>
							Linux
						</li><li>
							PHP
						</li><li>
							MySQL
						</li><li>
							JavaScript
						</li><li>
							jQuery
						</li><li>
							Java
						</li><li>
							C#
						</li><li>
							PhoneGap
						</li><li>
							WebGL
						</li></ul>

						<div class="gallery">
							<a href="assets/work/samples/bitcurve/clinicinfo.png"><img src="assets/work/samples/bitcurve/clinicinfo-thumbnail.png" alt="ClinicInfo" /></a>
							<a href="assets/work/samples/bitcurve/equity.png"><img src="assets/work/samples/bitcurve/equity-thumbnail.png" alt="OSC Equity Crowdfunding" /></a>
							<a href="assets/work/samples/bitcurve/rheumchoice.png"><img src="assets/work/samples/bitcurve/rheumchoice-thumbnail.png" alt="RheumChoice" /></a>
							<a href="assets/work/samples/bitcurve/whistleblower.png"><img src="assets/work/samples/bitcurve/whistleblower-thumbnail.png" alt="OSC Whistleblower" /></a>
							<a href="assets/work/samples/bitcurve/practice.png"><img src="assets/work/samples/bitcurve/practice-thumbnail.png" alt="Practice Reflectives" /></a>
							<a href="assets/work/samples/bitcurve/rheumreports.png"><img src="assets/work/samples/bitcurve/rheumreports-thumbnail.png" alt="RheumReports" /></a>
						</div>
					</div>
					<div class="company-image"><img src="assets/work/Bitcurve.png" alt="Bitcurve" /></div>
				</div>
				<div class="timeline-section left">
					<div class="company-bio">
						<h4>Seneca College</h4>
						<div>Software Developer</div>
						<div>2011</div>
						<p>Developed a blackberry application with the Center for Development of Open Technology.  Coded modern style swipe gestures and screen transitions that were not yet supported by BlackBerry OS.  Produced interactive training materials for the Center for Academic Excellence.</p>
						<ul><li>
							BlackBerry
						</li><li>
							Java
						</li><li>
							Photoshop
						</li><li>
							Processing
						</li><li>
							JavaScript
						</li><li>
							PhoneGap
						</li></ul>

						<div class="gallery">
							<a href="assets/work/samples/seneca/berrysync.jpg"><img src="assets/work/samples/seneca/berrysync-thumbnail.png" alt="BerrySync Blackberry App" /></a>
							<a href="assets/work/samples/seneca/senetech.png" class="pipette"><img src="assets/work/samples/seneca/senetech-thumbnail.gif" alt="SeneTech Training Materials" /></a>
						</div>
					</div>
					<div class="company-image"><img src="assets/work/Seneca.png" alt="Seneca College" /></div>
				</div>
				<div class="timeline-section right">
					<div class="company-bio">
						<h4>Webcom</h4>
						<div>Software Developer</div>
						<div>2009</div>
						<p>Book printing company, worked in I.T. migrating data and code from old systems to newer web technologies and languages.</p>
						<ul><li>
							MSSQL
						</li><li>
							MySQL
						</li><li>
							PHP
						</li><li>
							ASP.net
						</li><li>
							MS Access
						</li><li>
							Excel
						</li><li>
							VBScript
						</li></ul>
					</div>
					<div class="company-image"><img src="assets/work/Webcom.png" alt="Webcom" /></div>
				</div>
				<div class="timeline-section left">
					<div class="company-bio">
						<h4>Lambton College</h4>
						<div>Software Developer</div>
						<div>2007</div>
						<p>Prepared internal tools for administration as part of the I.T. team.</p>
						<ul><li>
							PHP
						</li></ul>
					</div>
					<div class="company-image"><img src="assets/work/Lambton.jpg" alt="Lambton College" /></div>
				</div>
			</div>
		</div>

		<div id="coding" style="margin-top: 60px;">
			<h3>Coding</h3>
			<p>This is various personal projects I've done that I want to keep records of.  Still filling this in.</p>
		</div>

		<div id="resume" style="margin-top: 60px;">
			<h3>Resume</h3>
			<p>
				I am still preparing an updated resume for 2024, until then please refer to my &nbsp;<a href="https://www.linkedin.com/in/kaitlyncallow" class="linkedin" style="display: inline-block"><img alt="LinkedIn" src="assets/LI-Logo-light.png" style="height:20px; margin-bottom: -4px;" /></a>
			</p>
		</div>
	</div>
</div>
</div>



	<script type="text/javascript">
	    Array.prototype.forEach.call(document.getElementsByClassName('gallery'), function (elm) {
	    	console.log(elm);
	    	lightGallery(elm, {
		        plugins: [lgZoom, lgThumbnail],
		        //licenseKey: 'your_license_key',
		        speed: 500,
		        // ... other settings
		    });
		});
	</script>
</body>
</html>