<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit']))
{
	//Load Composer's autoloader
	require 'vendor/autoload.php';

	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'dfcce6d558d12e';                     //SMTP username
		$mail->Password   = 'd80b7ca0239573';                               //SMTP password
		$mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		$email = $_POST['email'];
		$name = $_POST['name']; 
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		//Recipients
		$mail->setFrom('info@mailtrap.io', 'Mailtrap');
		$mail->addReplyTo('info@mailtrap.io', 'Mailtrap');
		$mail->addAddress($email, 'Tim');
		$mail->addCC('cc1@example.com', 'Elena');
		$mail->addBCC('bcc1@example.com', 'Alex');

		// ########################################### CONTENT TO SEND GOES HERE ################################################ 
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $message;
		$mail->AltBody = '<b>'. $name .'</b>';

		if($mail->send())
		{
			echo "<script> alert('Message has been sent') </script>";
		}
		
		
		// ########################################## CONTENT TO SEND ENDS HERE ###################################################
	} catch (Exception $e) {
		echo "<script> alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}') </script>";
	}
}




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Adio - Portfolio From Ridwan Abdulhammed </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">RIDWAN</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
	          <!-- <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li> -->
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section id="home-section" class="hero">
		  <div class="home-slider  owl-carousel">
	      <div class="slider-item ">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(images/we1.png);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h1 class="mb-4 mt-3">I'm <span>Abdulhammed Ridwan Adio</span></h1>
			            <h2 class="mb-4">A Freelance Web Designer/Developer</h2>
			            <p><a href="tel:+2347035743427" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(images/we3.png);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h1 class="mb-4 mt-3">I'm a <span>web designer</span> based in Nigeria</h1>
			            <p><a href="https://wa.me/+2349098146934" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/adio.png);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<h1 class="big">About</h1>
		            <h2 class="mb-4">About Me</h2>
		            <p>A disciplined individual with managerial ability for time, human and material resources.</p>
		            <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Name:</span> <span>Abdulhammed Ridwan Adio</span></li>
		            	<li class="d-flex"><span>Date of birth:</span> <span>September 30, 1995</span></li>
		            	<li class="d-flex"><span>Address:</span> <span>71, Onikoyi Street, [Iba] Lagos State, Nigeria</span></li>
		            	<li class="d-flex"><span>Zip code:</span> <span>102113</span></li>
		            	<li class="d-flex"><span>Email:</span> <span>adioridwan784@gmail.com</span></li>
		            	<li class="d-flex"><span>Phone: </span> <span>+234-703-574-3427</span></li>
		            </ul>
		          </div>
		        </div>
	          <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text">
              	<p class="mb-4">
	                <span class="number" data-number="40">0</span>
	                <span>Project complete</span>
                </p>
                <p><a href="ABDULHAMMED RIDWAN ADIO Software Development-updated.pdf" class="btn btn-primary py-3 px-3">Download CV</a></p>
              </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Resume</h1>
            <h2 class="mb-4">Resume</h2>
            <p>Education Background/Qualification Obtained and Training.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
    					<span class="date">2022</span>
    					<h2>UI/UX Designer</h2>
    					<span class="position">Udemy Academy</span>
    					<p class="mt-4">Figma for Beginners 2022, Learning by Doing approach</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2015 - 2017</span>
    					<h2>National Diploma [ND] </h2>
    					<span class="position">Ogun State Institute of Technology, Igbesa</span>
    					<p class="mt-4">Computer Science.</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2016 - 2017</span>
    					<h2>IT Essential </h2>
    					<span class="position">Cisco Certified Networking Academy, Igbesa</span>
    					<p class="mt-4"> Setting up a computer & connect it to a network. Step-one to a great career in IT.</p>
    				</div>
    			</div>

    			<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
    					<span class="date">2018-2020</span>
    					<h2>Higher National Diploma [HND]</h2>
    					<span class="position">Ogun State Institute of Technology, Igbesa</span>
    					<p class="mt-4">Computer Science.</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2014</span>
    					<h2>Graphics &amp; Computer Studies</h2>
    					<span class="position">Ministry of Women Affairs and Poverty Alleviation [WAPA]</span>
    					<p class="mt-4">Desktop Publishing and General Computing.</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2016</span>
    					<h2>PHP Developer</h2>
    					<span class="position">Quaducate Consult</span>
    					<p class="mt-4">Tech Consult, Telecommunication & Training Center.</p>
    				</div>
    			</div>
    		</div>
    		<div class="row justify-content-center mt-5">
    			<div class="col-md-6 text-center ftco-animate">
    				<p><a href="ABDULHAMMED RIDWAN ADIO Software Development-updated.pdf" class="btn btn-primary py-3 px-3">Download CV</a></p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section" id="services-section">
    	<div class="container">
    		<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Services</h1>
            <h2 class="mb-4">Services</h2>
            <p>Core Competencies and Achievement </p>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Web Design</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-flasks"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Graphic Design</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-ideas"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Web Developer</h3>
							</div>
						</a>
					</div>

					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">App Developing</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-flasks"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Branding</h3>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1">
							<span class="icon">
								<i class="flaticon-ideas"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Product Strategy</h3>
							</div>
						</a>
					</div>
				</div>
    	</div>
    </section>

		
		<section class="ftco-section" id="skills-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Skills</h1>
            <h2 class="mb-4">My Skills</h2>
            <p>An ambitious and determined graduate in the field of Computer Science with wide set of skills applicable across different sectors and roles.</p>
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Corel-Draw</h3>
							<div class="progress">
							 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
							  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
							    <span>90%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>jQuery</h3>
							<div class="progress">
							 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
							  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
							    <span>85%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>HTML5</h3>
							<div class="progress">
							 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
							  	aria-valuemin="0" aria-valuemax="100" style="width:95%">
							    <span>95%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>CSS3</h3>
							<div class="progress">
							 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
							  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
							    <span>90%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>PHP</h3>
							<div class="progress">
							 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
							  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
							    <span>70%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>SEO</h3>
							<div class="progress">
							 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
							  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
							    <span>80%</span>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
 

    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Projects</h1>
            <h2 class="mb-4">Our Projects</h2>
            <p>Below are few projects sources with core PHP</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project6.PNG);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="http://re-claimculture.com/">Culture &amp; IInnovation Design</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
  				</div>
  				<div class="col-md-8">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project3.PNG);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="https://quicktopit.excelinfortech.com/">Virtual Topup &amp; Illustration Design</a></h3>
	    					<span>Web Development</span>
	    				</div>
    				</div>
  				</div>

    			<div class="col-md-8">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project1.PNG);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="https://www.trinityng.com">School Website &amp; Admission Portal<a></h3>
	    					<span>Web Development</span>
	    				</div>
    				</div>

    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project2.PNG);">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="https://www.thebridgenetwork.ca">Church Website &amp; Payment Integration</a></h3>
	    					<span>Web Design</span>
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="row">
    					<div class="col-md-12">
		    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project5.PNG);">
		    					<div class="overlay"></div>
			    				<div class="text text-center p-4">
			    					<h3><a href="https://zuuroo.com/">Mobile Topup &amp; Loan Management</a></h3>
			    					<span>Web Development</span>
			    				</div>
		    				</div>
	    				</div>
	    				<div class="col-md-12">
		    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project4.PNG);">
		    					<div class="overlay"></div>
			    				<div class="text text-center p-4">
			    					<h3><a href="https://raphjofma.com/">Full Ecommerce Website </a></h3>
			    					<span>Web Development</span>
			    				</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


    <!-- <section class="ftco-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Blog</h1>
            <h2 class="mb-4">Our Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">June 21, 2019</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">June 21, 2019</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">June 21, 2019</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    	<div class="container">
				<div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="0">0</strong>
                <span>Awards</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="40">0</strong>
                <span>Complete Projects</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="20">0</strong>
                <span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="500">0</strong>
                <span>Designs</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 ftco-animate text-center">
						<h2>I'm <span>Available</span> for freelancing</h2>
						<p>Open to freelancing jobs and contract, ready to work with corporate organization or individual.</p>
						<p class="mb-0"><a href="https://wa.me/+2349098146934" class="btn btn-primary py-3 px-5">Hire me</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact</h1>
            <h2 class="mb-4">Contact Me</h2>
            <p>I'm Committed and Dedicated to improving life quality on the individual, corporate, social and emotional levels</p>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>71 Onikoyi Str. Iba New Site, Ojo LGA, Lagos, NIG.</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://2347035743427">+234 703 5743 427</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:adioridwan784@gmail.com">adioridwan784@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">excelinfortech.com</a></p>
	          </div>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form method="POST" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(images/contact.jpg);"></div>
          </div>
        </div>
      </div>
    </section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Great attention to detail. Impactful, fact driven, team work and curious to learn more. Always complete 
projects within schedules and budget. Able to handle rise up challenges. Excelled in teaching and 
impacting knowledge.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://web.facebook.com/akeuyanju.opeyemi"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/excelglobaltech/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>UI/UX Design</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Large Format Printing</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">71 Onikoyi Str. Iba New Site, Ojo LGA, Lagos, NIG.</span></li>
	                <li><a href="tel://2347035743427"><span class="icon icon-phone"></span><span class="text">+234 703 5743 427</span></a></li>
	                <li><a href="mailto:adioridwan784@gmail.com"><span class="icon icon-envelope"></span><span class="text">adioridwan784@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="#">Ridwan Adio</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>