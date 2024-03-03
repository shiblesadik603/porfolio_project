<?php 
include("config/database.php");
$result = 0;

if ($_POST) {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["message"];


    $sql = "INSERT INTO contact_form (user_name, email, phone, messages) VALUES ('$name', '$email', '$number', '$message')";
    $result = $conn->query($sql);

   }
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Portfolio Website</title>
	<!---custom css link---->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>

	<link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
	<header>
		<a href="#" class="logo">Develo <span>pe</span>r..</a>
		<ul class="navlist">
			<li><a href="#home" class="active">Home</a></li>
			<li><a href="#about">About Me</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#portfolio">Portfolio</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>

		<div class="bx bx-menu" id="menu-icon"></div>
	</header>
	
	<section class="home" id="home">
		<div class="home-text">
			<div class="slide">
				<span class="one">Hello</span>
				<span class="two">I'm</span>
			</div>
			<h1>Shible</h1>
			<h3>website <span>Designer.</span></h3>
			<p>we developer with much experience that keep customers <br> coming for about services make best effort.</p>
			<div class="button">
				<button style="cursor:pointer" onclick="downloadCV()" class="btn">Download CV</a>
			</div>
		</div>
	</section>

	<section class="about" id="about">
		<div class="about-img">
			<img src="img/shible_8.jpg">
		</div>
		<div class="about-text">
			<h2>About <span>Me</span></h2>
			<h4>Website Designer!</h4>
			<p>I am pursuing my education in the Department of Computer Science and Engineering at Khulna University of Engineering and Technology (KUET). My fascination with technology has been a constant throughout my life, leading me to develop proficiency in programming languages such as C, C++, Java, and Python. My primary focus is on problem-solving with C++. Venturing into the exciting realm of machine learning, I am actively engaged in learning Python and its versatile libraries like Pandas, NumPy, and Matplotlib. Currently enrolled in Andrew Ng's machine learning course on Coursera, I am driven by a passion for expanding my knowledge in this field. Additionally, for academic purposes, I am honing my skills in web development, exploring HTML, CSS, JavaScript, PHP, and Laravel, with the goal of creating an impressive website. My diverse skill set reflects my commitment to continuous learning and growth in the dynamic world of computer science.</p>
			<!-- <a href="#" class="btn">More About</a> -->
		</div>
	</section>

	<section class="services" id="services">
		<div class="main-text">
			<h2><span>My</span>Services</h2>
		</div>
		<div class="services-content">
			<div class="box">
				<div class="s-icons">
					<i class="bx bx-mobile-alt"></i>
				</div>
				<h3>Web Designer</h3>
				<p>One Way to categories the activities is in terms of the professional's area of experience such as competitive analysis, corporate stragety.</p>
				<a href="#" class="btn">Read More</a>
			</div>
	
			<div class="box">
				<div class="s-icons">
					<i class="bx bx-code-alt"></i>
				</div>
				<h3>Android Developer</h3>
				<p>One Way to categories the activities is in terms of the professional's area of experience such as competitive analysis, corporate stragety.</p>
				<a href="#" class="btn">Read More</a>
			</div>
	
			<div class="box">
				<div class="s-icons">
					<i class="bx bx-edit-alt"></i>
				</div>
				<h3>UI/UX</h3>
				<p>One Way to categories the activities is in terms of the professional's area of experience such as competitive analysis, corporate stragety.</p>
				<a href="#" class="btn">Read More</a>
			</div>
		</div>
	</section>

	<section class="portfolio" id="portfolio">
		<div class="main-text">
			<h2><span>latest</span>Project</h2>
		</div>
		<div class="portfolio-content">
			<div class="row">
				<img src="img/project1.jpg" alt="">
				<div class="layer">
					<h5>Inventory Management System</h5>
					<p>Analyze the requirements for the inventory management system, gather user needs, and design the architecture of the website to meet those requirements.</p>
					<a href="https://github.com/shiblesadik603/Inventory-Management-System.git"><i class="bx bx-link-external"></i></a>
				</div>
			</div>
			<div class="row">
				<img src="img/project2.jpg" alt="">
				<div class="layer">
					<h5>Banking</h5>
					<p>Check out 10 best Design's updates for the top web design and development companies.</p>
					<a href="https://github.com/shiblesadik603/bank.git"><i class="bx bx-link-external"></i></a>
				</div>
			</div>
			<div class="row">
				<img src="img/project3.jpg" alt="">
				<div class="layer">
					<h5>Robot Control</h5>
					<p>A robot control automation by ros that make the robot completely automated to run it smoothly.</p>
					<a href="https://github.com/shiblesadik603/ros_code.git"><i class="bx bx-link-external"></i></a>
				</div>
			</div>
			<!-- <div class="row">
				<img src="img/project4.jpg" alt="">
				<div class="layer">
					<h5>Visual Design</h5>
					<p>Check out 10 best Design's updates for the top web design and development companies.</p>
					<a href="#"><i class="bx bx-link-external"></i></a>
				</div>
			</div>
			<div class="row">
				<img src="img/project5.jpg" alt="">
				<div class="layer">
					<h5>Visual Design</h5>
					<p>Check out 10 best Design's updates for the top web design and development companies.</p>
					<a href="#"><i class="bx bx-link-external"></i></a>
				</div>
			</div> -->
			<div class="row">
				<img src="img/project6.jpg" alt="">
				<div class="layer">
					<h5>Visual Design</h5>
					<p>Check out 10 best Design's updates for the top web design and development companies.</p>
					<a href="https://github.com/shiblesadik603/oop_final_exam.git"><i class="bx bx-link-external"></i></a>
				</div>
			</div>
		</div>
	</section>

	<section class="contact" id="contact">
		<div class="contact-text">
			<h2>Contact <span>Me!</span></h2>
			<h4>If you have any project in your mind.</h4>
			<p>i'm a website Designer - creating bold and brave interface design for companies all across the world.</p>
			<div class="list">
				<li><a href="#">+8801762002498</a></li>
				<li><a href="#">smsadik82@gmail.com</a></li>
				<li><a href="#">Like Share & Subscribe</a></li>
			</div>
			<div class="contact-icons">
				<a href="https://www.facebook.com/smsadik24/" target="_blank"><i class='bx bxl-facebook'></i></a>
				<a href="https://twitter.com/i/flow/login" target="_blank"><i class='bx bxl-twitter'></i></a>
				<a href="https://www.instagram.com/smsadik82/" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
				<a href="https://github.com/shiblesadik603" target="_blank"><i class='bx bxl-github'></i></a>
			</div>
		</div>
		<div class="contact-form">
			<form action="#" method="post">
				<input type="name" name="name" placeholder="Your Name " required>
				<input type="email" name="email" placeholder="Your Email " required>
				<input type="number" name="number" placeholder="Your Mobile Number" required>
				<textarea name="message" id="" cols="35" rows="10" placeholder="How Can I Help You " required></textarea>

   				<?php
					if($result == 1){
						echo '<p style="color:green;margin-bottom:10px;">Message sent successfully</p>';
					}
				?>
				<input type="submit" value="Send Massage" class="submit">
			</form>
		</div>
	</section>

	<section class="end">
		<div class="last-text">
			<p>Design By SADIK</p>
		</div>
		<div class="top">
			<a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
		</div>
	</section>
</body>

<script src="./js/scripts.js" type="text/javascript"></script>
</html>