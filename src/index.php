<!doctype html><?php
	include_once __DIR__ . '/assets/scssphp-1.12.1/scss.inc.php';
	use ScssPhp\ScssPhp\Compiler;
	$compiler = new Compiler();
	$compiler->setImportPaths(__DIR__);
?><html lang="en">
<head>
	<title>Kaitlyn Callow | Software</title>
	<meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
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
			<h2>Software Developer — Team Lead — Systems Architect — DevOps</h2>
		</div>
		
		<div class="intro">
			<div class="profile">
				<img src="assets/coders2.png" alt="Kaitlyn in action!" />
				<div>
					<span>Kaitlyn Callow</span>
					<span>Coder Extraordinaire</span>
					<span>Powered by Coffee & Spite</span>
					<span>Located in Toronto Canada <img src="assets/canada2.png" alt="Flag of Canada" style="height: 11px; margin-left: 5px; margin-bottom: -1px;" /></span>
				</div>
			</div>
			
			<div style="flex:1;">
				<h3>What I do</h3>
				<p>I help companies grow and thrive.  I have more than 15 years experience developing software products from prototype to production and beyond.</p>
				<div class="socials">
					<a href="https://www.linkedin.com/in/kaitlyncallow/"><img alt="LinkedIn" src="assets/LI-Logo.png" /></a>
				</div>

				<p class="languages omnom">
					Food for search engines: Programming, Databases, Systems Design, DevOps, AWS, PHP, MySQL, Mobile, Cloud, Distributed, UX, UI, Design, Front-End, Back-End, Apache, Nginx, Linux, OpenGL, WebGL, Jira, Git, Slack, C#, Java, MSSQL, C++, Python, SQL, HTML, CSS, JavaScript, jQuery, React.js, Layout, Planning, Prototyping, ElasticBeanstalk, EC2, RDS, Amplify, Route53, Lamba, IoT, LwM2M, Particle.io, Android, iOS
				</p>
			</div>
		</div>
		
		<h3>My Work</h3>
		
		<div class="timeline">
			<div class="timeline-section left">
				<div class="company-bio">
					<h4>EXACT Technology</h4>
					<div>Software Tech Lead (formerly Track Product Lead)</div>
					<div>2020 &mdash; Now</div>
					<p>Concrete monitoring platform.  Real-time data services, hardware products, and suites of tools for managing concrete. Track focused on digital tools that capture all aspects of planning, qc, and scheduling.  After 2 years I switched to a Tech Lead position overseeing all software teams.</p>
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
				<div class="company-image"><img src="assets/projects/exact.png" alt="EXACT Technology" /></div>
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
				</div>
				<div class="company-image"><img src="assets/projects/cevnn.png" alt="Cevnn Payments" /></div>
			</div>
			<div class="timeline-section left">
				<div class="company-bio">
					<h4>Clausehound</h4>
					<div>Senior Full-Stack Developer</div>
					<div>2018</div>
					<p>Law tools and services for collaboration, knowledge capture, organization, and document assembly.</p>
					<ul><li>
						PHP
					</li><li>
						MySQL
					</li><li>
						React
					</li></ul>
				</div>
				<div class="company-image"><img src="assets/projects/Clausehound.jpeg" alt="Clausehound" /></div>
			</div>
			<div class="timeline-section right">
				<div class="company-bio">
					<h4>Bitcurve Systems</h4>
					<div>Full-Stack Developer</div>
					<div>2012 &mdash; 2017</div>
					<p>Software agency, digital design & development studio.  Wide range of clients. Largly medical industry projects as well as work for government agencies.  Planned and produced more then 35 software products from concept to production.</p>
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
				</div>
				<div class="company-image"><img src="assets/projects/Bitcurve.png" alt="Bitcurve" /></div>
			</div>
			<div class="timeline-section left">
				<div class="company-bio">
					<h4>Seneca College</h4>
					<div>Software Developer</div>
					<div>2011</div>
					<p>Developed a blackberry application for the Center for Development of Open Technology.  Interactive training materials prepared for the Center for Academic Excellence.</p>
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
				</div>
				<div class="company-image"><img src="assets/projects/Seneca.png" alt="Seneca College" /></div>
			</div>
			<div class="timeline-section right">
				<div class="company-bio">
					<h4>Webcom</h4>
					<div>Software Developer</div>
					<div>2009</div>
					<p>Book printing company, worked in I.T. migrating data and code from old systems to newer web technologies and languages.</p>
					<ul><li>
						MS SQL
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
				<div class="company-image"><img src="assets/projects/Webcom.png" alt="Webcom" /></div>
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
				<div class="company-image"><img src="assets/projects/Lambton.jpg" alt="Lambton College" /></div>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>