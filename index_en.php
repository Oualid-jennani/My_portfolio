<!DOCTYPE html>
<html>
    <head>
        <title>Walid Jennani</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" type="image/png" href="img/logo.png"/>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="OwlCarousel/dist/assets//owl.theme.default.min.css">

		<link href="https://fonts.googleapis.com/css?family=Farro|Open+Sans|Pacifico|Vast+Shadow&display=swap" rel="stylesheet">


		<link rel="stylesheet" href="css/style-en.css">


		<?php 

		$new_style = "";
		
		if(isset($_SESSION['color'])){
			
			
			if($_SESSION['color'] == "blue"){
				echo "<script>
					document.documentElement.style.setProperty('--main-bg-color', '#0078ff');
					document.documentElement.style.setProperty('--shadow-color', '#0078ffd4');
					document.documentElement.style.setProperty('--slider1', 'url(../img/slider/slider1/1.svg)');
					document.documentElement.style.setProperty('--slider2', 'url(../img/slider/slider1/2.svg)');
					document.documentElement.style.setProperty('--slider3', 'url(../img/slider/slider1/3.svg)');
					document.documentElement.style.setProperty('--slider4', 'url(../img/slider/slider1/4.svg)');
					document.documentElement.style.setProperty('--slider5', 'url(../img/slider/slider1/5.svg)');
					document.documentElement.style.setProperty('--slider6', 'url(../img/slider/slider1/6.svg)');
				</script>";
			}
			else if($_SESSION['color'] == "green"){
				echo "<script>
					document.documentElement.style.setProperty('--main-bg-color', '#94c728');
					document.documentElement.style.setProperty('--shadow-color', '#94c728c4');
					document.documentElement.style.setProperty('--slider1', 'url(../img/slider/slider2/1.svg)');
					document.documentElement.style.setProperty('--slider2', 'url(../img/slider/slider2/2.svg)');
					document.documentElement.style.setProperty('--slider3', 'url(../img/slider/slider2/3.svg)');
					document.documentElement.style.setProperty('--slider4', 'url(../img/slider/slider2/4.svg)');
					document.documentElement.style.setProperty('--slider5', 'url(../img/slider/slider2/5.svg)');
					document.documentElement.style.setProperty('--slider6', 'url(../img/slider/slider2/6.svg)');
				</script>";
			}
			else if($_SESSION['color'] == "violet"){
				echo "<script>
					document.documentElement.style.setProperty('--main-bg-color', '#E80CE7');
					document.documentElement.style.setProperty('--shadow-color', '#E80CE7c4');
					document.documentElement.style.setProperty('--slider1', 'url(../img/slider/slider3/1.svg)');
					document.documentElement.style.setProperty('--slider2', 'url(../img/slider/slider3/3.svg)');
					document.documentElement.style.setProperty('--slider3', 'url(../img/slider/slider3/3.svg)');
					document.documentElement.style.setProperty('--slider4', 'url(../img/slider/slider3/4.svg)');
					document.documentElement.style.setProperty('--slider5', 'url(../img/slider/slider3/5.svg)');
					document.documentElement.style.setProperty('--slider6', 'url(../img/slider/slider3/6.svg)');
				</script>";
			}
			else if($_SESSION['color'] == "black"){
				echo "<script>
					document.documentElement.style.setProperty('--main-bg-color', '#4a4b4c');
					document.documentElement.style.setProperty('--shadow-color', '#4a4b4cd4');
					document.documentElement.style.setProperty('--slider1', 'url(../img/slider/slider4/1.svg)');
					document.documentElement.style.setProperty('--slider2', 'url(../img/slider/slider4/2.svg)');
					document.documentElement.style.setProperty('--slider3', 'url(../img/slider/slider4/3.svg)');
					document.documentElement.style.setProperty('--slider4', 'url(../img/slider/slider4/4.svg)');
					document.documentElement.style.setProperty('--slider5', 'url(../img/slider/slider4/5.svg)');
					document.documentElement.style.setProperty('--slider6', 'url(../img/slider/slider4/6.svg)');
				</script>";

				$new_style = "color:white";
			}
			else if($_SESSION['color'] == "turquoise"){
				echo "<script>
					document.documentElement.style.setProperty('--main-bg-color', '#20BAC5');
					document.documentElement.style.setProperty('--shadow-color', '#20BAC5D4');
					document.documentElement.style.setProperty('--slider1', 'url(../img/slider/slider5/1.svg)');
					document.documentElement.style.setProperty('--slider2', 'url(../img/slider/slider5/2.svg)');
					document.documentElement.style.setProperty('--slider3', 'url(../img/slider/slider5/3.svg)');
					document.documentElement.style.setProperty('--slider4', 'url(../img/slider/slider5/4.svg)');
					document.documentElement.style.setProperty('--slider5', 'url(../img/slider/slider5/5.svg)');
					document.documentElement.style.setProperty('--slider6', 'url(../img/slider/slider5/6.svg)');
				</script>";
			}

		}

		
		?>


    </head>
    <body>
		
		<div class="loading">

			<div class="loading-circle">
				<div class="circle">
				  <div class="loader">
					<div class="loader">
						<div class="loader">
						   <div class="loader"></div>
						</div>
					</div>
				  </div>

				  
				</div>
				<div class="loader-titre"><span>O</span></div>
			</div>

		</div>
		
		<div class="window-command">
            <div class="window-command-container">
                
                <div class="top">
                    
                    <div class="top-title">
                        <h6>Ligne Command</h6>
                    </div>
                    
                    <div class="top-button">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    
                </div>

                <div class="cmd">
                    <div class="ligne-command">
                        <div class="ligne-command-controls">
                            
                            <span class="ereurCmd">ereur syntaxe</span>
                            
                            <input id="txtCmd" class="txtCmd" type="text">
                        </div>
                    </div>
                </div>
            </div>
			
		</div>

		
		<header>
			<div class="nav-content">
				<nav class="navbar navbar-expand-lg navbar-light">

					<a class="navbar-brand" href="#home" data-value="0">ualiD</a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cnav">
							<span class="navbar-toggler-icon"></span>
						</button>

					<div class="collapse navbar-collapse" id="cnav">

						<div class="mr-auto"></div>
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="#home" data-value="0">Home<span></span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#about" data-value="1">About<span></span></a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#skills" data-value="2">Skills<span></span></a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="#services" data-value="3">Services<span></span></a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="#portfolio" data-value="4">Portfolio<span></span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#blog" data-value="5">Blog<span></span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contact" data-value="6">Contact<span></span></a>
							</li>
						</ul>
					</div>


				</nav>
			</div>
		</header>
		
		
		<div class="home" id="home">
				<div class="slide">

					<div class="logo">
						<div class="infoApp">
							<a href="#home" data-value="0">
								<ul>
									<li><span class="iconApp"></span></li>
									<li><span class="nameApp">ualiD</span></li>
								</ul>
							</a>
						</div>
					</div>


					<div class="bg-color-shadow">
						<div class="bg-color-icone">
							<button></button>
						</div>
					</div>
					<div class="bg-color bg-lang">
						<div class="bg-color-icone">
							<button id="change-coleur">EN</button>
						</div>
						<div class="bg-color-items">
							<button class="bg" id="bg-blue"></button>
							<button class="bg" id="bg-turquoise"></button>
							<button class="bg" id="bg-violet"></button>
							<button class="bg" id="bg-green"></button>
							<button class="bg" id="bg-black"></button>
						</div>

						<div class="lang"><div></div><a href="index.php?lang=ar">arabic</a></div>

					</div>

					<nav class="navbar navbar-expand-lg navbar-light ">
						<a class="navbar-brand" href="javascript:void(0)"></a>

							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cnav2">
								<span class="navbar-toggler-icon"></span>
							</button>

						<div class="collapse navbar-collapse" id="cnav2">

							<div class="mr-auto"></div>
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a class="nav-link" href="#home" data-value="0">Home<span></span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#about" data-value="1">About<span></span></a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="#skills" data-value="2">Skills<span></span></a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="#services" data-value="3">Services<span></span></a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="#portfolio" data-value="4">Portfolio<span></span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#blog" data-value="5">Blog<span></span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#contact" data-value="6">Contact<span></span></a>
								</li>
							</ul>
						</div>
					</nav>


					<div class="mainSlide">
							<div class="container-fluid infoPersonal">
								<div class="row">

									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6  slide-info">
										<h3>Hello</h3>

										<h2>I Am Oualid Jennani</h2>

										<p>I am a web developer and designer  in Oujda. Welcome to my portfolio!</p>
                                        <div class="slider-action">
                                            <a href="#contact" id="Talk" data-value="6"><button class="btn-talk">Let's Talk<span>&#x279C;</span></button></a>
                                        </div>
                                        
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 slide-animation">

										<div class="wapper2">
											<div class="rotate2">
												<div class="item item1"></div>
												<div class="item item2"></div>
												<div class="item item3"></div>
												<div class="item item4"></div>
												<div class="item item5"></div>
												<div class="item item6"></div>
											</div>        
										</div>

									</div>
								</div>
							</div>
					</div>


					<div class="classProfilImg-shadow">
						<div class="animate"><div class="pole"></div></div>
					</div>

					<div class="classProfilImg">
						<div class="animate"><div class="pole"></div></div>
					</div> 

					<div class="pl pole1"></div>
					<div class="pl pole2"></div>
					<div class="pl pole3"></div>
					<div class="pl pole4"></div>
					<div class="pl pole5"></div>
					<div class="pl pole6"></div>
					<div class="pl pole7"></div>
					<div class="pl pole8"></div>
					<div class="pl pole9"></div>
					<div class="pl pole10"></div>
					<div class="pl pole11"></div>
					<div class="pl poleM"><span><a href="https://api.whatsapp.com/send?phone=+212635316658" target="_blank"></a></span><span></span><span></span></div>


				</div>

		</div>
        
        
        
<!-------------------------------------------------------------------------------------------------------------->
        
        
            
    	<div class="main">
			
			<section class="about" id="about">
				<div class="container">
					<div class="title title-about"><h2>About</h2></div>
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-7 col-sm-12 col-xs-12">
							<div class="card-personal">
                                
                                <div class="CV">
                                    <div>
                                        <a href="CV%20Walid%20Jennani.pdf" target="_blank" class="btn-cv" data-value="">Download CV</a>
                                        <div class="pole-cv"></div>
                                    </div>
                                </div>
                                
								<div class="row">
									<div class="col-6" >Name:</div><div class="col-6">Jennani Oualid</div>
									<div class="col-6" >Profile:</div><div class="col-6">Developer</div>
									<div class="col-6" >Nationality:</div><div class="col-6">Moroccan</div>
									<div class="col-6" >Date Of Birth:</div><div class="col-6">28 Jui 1996</div>
									<div class="col-6" >Place Of Birth:</div><div class="col-6">Oujda</div>
									<div class="col-6" >Phone:</div><div class="col-6">(+212) 635316658</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 col-xs-12">
							<div class="about-info">
								<p class="p-info">
								Freelancer and fourth year of Licence student in development informatique. young creative student with big dreams. Well-organised person, problem solver, independent employee with high attention to detail. Fan of Manga and Animes, outdoor activities, TV series and Movies,playstation,football, Music, recently, running.
								</p>
								<h3>Favourit quote :</h3>
								<q class="q-info">Dreams Of People Never Ends</q><p class="marchal">marshall d teach</p>
							</div>
						</div>

					</div>
				</div>
			</section>

	<!-------------------------------------------------------------------------------------------------------------->  

			<section class="skills" id="skills">
				<div class="container">
					<div class="title title-skills"><h2>Skills</h2></div>
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<p class="p-content">As a fourth year of Licence student I'm almost a full stack developer I've different skills in different fields in the programming area.</p>

							<div class="wapper">
								<div class="rotate">
									<div class="item item1"></div>
									<div class="item item2"></div>
									<div class="item item3"></div>
									<div class="item item4"></div>
									<div class="item item5"></div>
									<div class="item item6"></div>
								</div>        
							</div>

						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="row">
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<div class="copm">

										<span>Html 5</span>
										<div><div style="width: 70%"><span></span></div></div>
										
										<span>Css 3</span>
										<div><div style="width: 85%"><span></span></div></div>
										
										<span>Javascript</span>
										<div><div style="width: 60%"><span></span></div></div>
										
										<span>Jquery</span>
										<div><div style="width: 50%"><span></span></div></div>
										
										<span>Bootstrap</span>
										<div><div style="width: 50%"><span></span></div></div>
										
										<span>Php</span>
										<div><div style="width: 90%"><span></span></div></div>
										
										<span>Symfony(Php)</span>
										<div><div style="width: 80%"><span></span></div></div>
										
										<span>C#</span>
										<div><div style="width: 90%"><span></span></div></div>
										
										<span>ASP.net Core</span>
										<div><div style="width: 60%"><span></span></div></div>

									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<div class="copm">
										<span>C</span>
										<div><div style="width: 80%"><span></span></div></div>
										
										<span>C++ </span>
										<div><div style="width: 70%"><span></span></div></div>

										<span>Java</span>
										<div><div style="width: 50%"><span></span></div></div>
										
										<span>Spring Boot</span>
										<div><div style="width: 30%"><span></span></div></div>

										<span>Mysql (SGBD1 - SGBD2)</span>
										<div><div style="width: 80%"><span></span></div></div>
										
										<span>SQL server (SGBD1 - SGBD2)</span>
										<div><div style="width: 80%"><span></span></div></div>
			
										<span>Dart</span>
										<div><div style="width: 50%"><span></span></div></div>
										
										<span>Flutter</span>
										<div><div style="width: 50%"><span></span></div></div>

									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</section>

	<!-------------------------------------------------------------------------------------------------------------->  
			
			<section class="counter" id="counter">
				<div class="container">
					<div class="row">

						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
							<div>
								<div class="counter-title">
									WORKS COMPLETED
								</div>
								<div class="counter-pole">
									<div class="absolute"></div>
								</div>
								<div class="counter-col counter-work">
									<div><span>7</span></div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
							<div>
								<div class="counter-title">
									YEARS EXPERINCE
								</div>
								<div class="counter-pole">
									<div class="absolute"></div>
								</div>
								<div class="counter-col counter-years">
									<div><span>2</span></div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
							<div>
								<div class="counter-title">
									TOTAL CLIENTS
								</div>
								<div class="counter-pole">
									<div class="absolute"></div>
								</div>
								<div class="counter-col counter-client">
									<div><span>25</span></div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
							<div>
								<div class="counter-title">
									AWARD WON
								</div>
								<div class="counter-pole">
									<div class="absolute"></div>
								</div>
								<div class="counter-col counter-badge">
									<div><span>1</span></div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</section>

	<!-------------------------------------------------------------------------------------------------------------->

			<section class="services" id="services">
			  <div class="container">
				<div class="title title-services"><h2>Services</h2></div>

				<div class="row">
					<div class="col-lg-12 text-center">
					  <p class="p-content">I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface.</p>
					</div>
				  <div class="col-12 col-md-6 col-lg-4">
					<div class="services-box">
					  <i class="icon i-development"></i>
					  <div class="services-content">
						<h5>Development</h5>
						<p>The web development process involves taking the graphical elements defined in the design process and coding them into a custom Wordpress theme.</p>
						<div class="read-more">
						  <a href="javascript:void(0)" class="more-btn">Read More</a>
						</div>
					  </div>
					</div> <!-- feature-box-02 -->
				  </div> <!-- col -->


				  <div class="col-12 col-md-6 col-lg-4">
					<div class="services-box">
					  <i class="icon i-web"></i>
					  <div class="services-content">
						<h5>Web Design</h5>
						<p>my approach to website design is to create a website that strengthens your company’s brand while ensuring ease of use and simplicity for your audience.
						</p>
						<div class="read-more">
						  <a href="javascript:void(0)" class="more-btn">Read More</a>
						</div>
					  </div>
					</div> <!-- feature-box-02 -->
				  </div> <!-- col -->


				  <div class="col-12 col-md-6 col-lg-4">
					<div class="services-box">
					<i class="icon i-mobile"></i>
					  <div class="services-content">
						<h5>Mobile apps</h5>
						<p>my approach is to create and develop an app design that strengthens your company’s brand while ensuring ease of use and simplicity for your audience.</p>
						<div class="read-more">
						  <a href="javascript:void(0)" class="more-btn">Read More</a>
						</div>
					  </div>
					</div> <!-- feature-box -->
				  </div> <!-- col -->

				</div> <!-- row -->
			  </div> <!-- container -->
			</section>

	<!-------------------------------------------------------------------------------------------------------------->    

			<div class="ifram-video">
				<div class="ifram-content">
					<div class="video-content">
						<div class="video-close">
							<button title="Close (Esc)" type="button" class="btn-close">×</button>
						</div>
						<div class="embed-responsive embed-responsive-16by9">
						  <iframe class="embed-responsive-item v-iframe" src="" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>

			<div class="portfolioImg-img">
				<div class="portfolioImg-content">
					<div class="img-content">
						<div class="img-close">
							<button title="Close (Esc)" type="button" class="btn-img-close">×</button>
						</div>
						<div class="img-responsive">
							<img class="p-img w-100" src="">
						</div>
					</div>
				</div>
			</div>

			<section class="portfolio" id="portfolio">
				<div class="container">

					<div class="title title-portfolio"><h2>Portfolio</h2></div>
					<div class="row">
						<div class="col-lg-12 text-center">
						  <p class="p-content">As a student I don't have much experience as an employee,just some Trainingships or personal projects..Experiences.</p>
						</div>

						<!---------------------------------------------------------------------------------------------------------------->
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card">

								<div class="image">
									<div class="hover">
										<a class="" href="javascript:void(0)" data-link="" data-title="" hidden></a>
										<a class="popup-img" href="javascript:void(0)" data-link="img/portfolio/shop2.png" data-title=""></a>
										<a></a>
									</div>
									<img src="img/portfolio/shop2.png">
								</div>

								<div class="card-body">
									<span class="card-title">Site ecommerce (delevry / shopping)</span>
									<p class="card-text">php(symfony) / ajax / mysql</p>
								</div>
							</div>
						</div>

						<!---------------------------------------------------------------------------------------------------------------->

						<!---------------------------------------------------------------------------------------------------------------->
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card">

								<div class="image">
									<div class="hover">
										<a class="popup" href="javascript:void(0)" data-link="https://www.youtube.com/embed/y6ceDQT3WiA" data-title=""></a>
										<a class="popup-img" href="javascript:void(0)" data-link="img/portfolio/prg-onssa2.jpeg" data-title=""></a>
										<a></a>
									</div>
									<img src="img/portfolio/prg-onssa2.jpeg">
								</div>

								<div class="card-body">
									<span class="card-title">app web gestion magasin</span>
									<p class="card-text">html5 / css3 / js / jquery / php / ajax / mysql</p>
								</div>
							</div>
						</div>

						<!---------------------------------------------------------------------------------------------------------------->
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card">

								<div class="image">
									<div class="hover">
										<a class="popup" href="javascript:void(0)" data-link="https://www.youtube.com/embed/4hlGvskXzys" data-title=""></a>
										<a class="popup-img" href="javascript:void(0)" data-link="img/portfolio/prg-sport.jpeg" data-title=""></a>
										<a></a>
									</div>
									<img src="img/portfolio/prg-sport.jpeg">
								</div>

								<div class="card-body">
									<span class="card-title">app sport hall management</span>
									<p class="card-text">C# / sql server</p>
								</div>
							</div>

						</div>

						<!---------------------------------------------------------------------------------------------------------------->
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card">

								<div class="image">
									<div class="hover">
										<a class="popup" href="javascript:void(0)" data-link="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/watch/?v=1251420311876469" data-title=""></a>
										<a class="popup-img" href="javascript:void(0)" data-link="img/portfolio/shop.png" data-title=""></a>
										<a></a>
									</div>
									<img src="img/portfolio/shop.png">
								</div>

								<div class="card-body">
									<span class="card-title">shopping Site</span>
									<p class="card-text">html5 / css3 / bootstrap / js / jquery / php / ajax / mysql</p>
								</div>
							</div>

						</div>


						<!---------------------------------------------------------------------------------------------------------------->
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card">

								<div class="image">
									<div class="hover">
										<a class="popup" href="javascript:void(0)" data-link="https://www.youtube.com/embed/L4wSJYlLdvA" data-title=""></a>
										<a class="popup-img" href="javascript:void(0)" data-link="img/portfolio/prg-foot.jpeg" data-title=""></a>
										<a></a>
									</div>
									<img src="img/portfolio/prg-foot.jpeg">
								</div>

								<div class="card-body">
									<span class="card-title">app management équipe foot</span>
									<p class="card-text">html5 / css3 / js / jquery</p>
								</div>
							</div>
						</div>

						<!---------------------------------------------------------------------------------------------------------------->
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card">

								<div class="image">
									<div class="hover">
										<a class="popup" href="javascript:void(0)" data-link="https://www.youtube.com/embed/LNl--JCuHrw" data-title=""></a>
										<a class="popup-img" href="javascript:void(0)" data-link="img/portfolio/goku.png" data-title=""></a>
										<a></a>
									</div>
									<img src="img/portfolio/goku.png">
								</div>

								<div class="card-body">
									<span class="card-title">Drawing Son Goku</span>
									<p class="card-text">html5 / css3 / javascript</p>
								</div>
							</div>
						</div>

						<!---------------------------------------------------------------------------------------------------------------->
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card">

								<div class="image">
									<div class="hover">
										<a class="popup" href="javascript:void(0)" data-link="https://www.youtube.com/embed/76TlPlZo6Ek" data-title=""></a>
										<a class="popup-img" href="javascript:void(0)" data-link="img/portfolio/luffy.png" data-title=""></a>
										<a></a>
									</div>
									<img src="img/portfolio/luffy.png">
								</div>

								<div class="card-body">
									<span class="card-title">Drawing Monky D. Luffy</span>
									<p class="card-text">html5 / css3</p>
								</div>
							</div>
						</div>

						<!---------------------------------------------------------------------------------------------------------------->
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card">

								<div class="image">
									<div class="hover">
										<a class="popup-img" href="javascript:void(0)" data-link="img/portfolio/joker.jpg" data-title=""></a>
										<a class="popup-img" href="javascript:void(0)" data-link="img/portfolio/joker.jpg" data-title=""></a>
										<a></a>
									</div>
									<img src="img/portfolio/joker.jpg">
								</div>

								<div class="card-body">
									<span class="card-title">Draw the joker </span>
									<p class="card-text">html5 / css3</p>
								</div>
							</div>
						</div>

						<!---------------------------------------------------------------------------------------------------------------->
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card">

								<div class="image">
									<div class="hover">
										<a class="popup" href="javascript:void(0)" data-link="https://www.youtube.com/embed/THT9S4qhzu8" data-title=""></a>
										<a class="popup-img" href="javascript:void(0)" data-link="img/portfolio/Animation-1.jpeg" data-title=""></a>
										<a></a>
									</div>
									<img src="img/portfolio/Animation-1.jpeg">
								</div>

								<div class="card-body">
									<span class="card-title">Animation 3D hexadonal</span>
									<p class="card-text">html5 / css3 </p>
								</div>
							</div>
						</div>

						<!---------------------------------------------------------------------------------------------------------------->
						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card">

								<div class="image">
									<div class="hover">
										<a class="popup" href="javascript:void(0)" data-link="https://www.youtube.com/embed/yFpCaOyUnpI" data-title=""></a>
										<a class="popup-img" href="javascript:void(0)" data-link="img/portfolio/Animation-2.jpeg" data-title=""></a>
										<a></a>
									</div>
									<img src="img/portfolio/Animation-2.jpeg">
								</div>

								<div class="card-body">
									<span class="card-title">Animation 3D squar</span>
									<p class="card-text">html5 / css3</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

	<!-------------------------------------------------------------------------------------------------------------->

			<section class="blog" id="blog">
				<div class="container">
					<div class="title title-blog"><h2>Blog</h2></div>
					<div class="row">

						<div class="col-lg-12 text-center">
						  <p class="p-content">the most important Developer News, Jobs &#38; SDK Coding Insight: App Development Software, iOs, Android, Windows, .net, App Store, Platforms, hacking, HTML5, PHP, J2ME, 3D, ...</p>
						</div>

						<div class="owl-carousel owl-theme">
							<div class="item">
								<div class="item-header">
									<img src="img/img-news/Java.png">
								</div>                      
								<div class="item-body">
									<div class="item-category-box">
										<div class="item-category">
											<div class="category">Java</div>
										</div>
									</div>
									<div class="item-info">
										<h3 class="item-title">Les développeurs privilégient Java 8 et Tomcat</h3>
										<p class="item-description">Les développeurs Java utilisent encore largement la v8 du langage de programmation. Du côté des serveurs d’application, Tomcat l’emporte, selon un rapport de JRebel.</p>
									</div>
									<div class="read-more">
									  <a href="https://www.silicon.fr/java-developpeurs-java8-tomcat-334720.html" class="more-btn">Read More</a>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="item-header">
									<img src="img/img-news/Mark-Loveless_GitLab-684x353.jpg">
								</div>                      
								<div class="item-body">
									<div class="item-category-box">
										<div class="item-category">
											<div class="category">GitLab</div>
										</div>
									</div>
									<div class="item-info">
										<h3 class="item-title">Le modèle Zero Trust de sécurité est notre crédo</h3>
										<p class="item-description">L’ingénieur Mark Loveless (GitLab) explique pourquoi le gestionnaire de dépôt a intégré le modèle Zero Trust dans son programme global de sécurité.</p>
									</div>
									<div class="read-more">
									  <a href="https://www.silicon.fr/gitlab-modele-zero-trust-securite-334413.html" class="more-btn">Read More</a>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="item-header">
									<img src="img/img-news/devphoto2.jpg">
								</div>                      
								<div class="item-body">
									<div class="item-category-box">
										<div class="item-category">
											<div class="category">DevSecOps</div>
										</div>
									</div>
									<div class="item-info">
										<h3 class="item-title">Un terreau favorable en Europe ?</h3>
										<p class="item-description">Une étude MongoDB donne des éclairages sur la perception des développeurs et des décideurs IT européens à propos de la répartition des responsabilités en matière de sécurité des applications.</p>
									</div>
									<div class="read-more">
									  <a href="https://www.silicon.fr/devsecops-europe-334283.html" class="more-btn">Read More</a>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="item-header">
									<img src="img/img-news/devphoto.jpg">
								</div>                      
								<div class="item-body">
									<div class="item-category-box">
										<div class="item-category">
											<div class="category">Développeurs</div>
										</div>
									</div>
									<div class="item-info">
										<h3 class="item-title">Les 10 langages de programmation les plus appréciés</h3>
										<p class="item-description">Python devance Java et JavaScript au top des langages les plus populaires auprès des développeurs de la communauté CodinGame.</p>
									</div>
									<div class="read-more">
									  <a href="https://www.silicon.fr/developpeurs-10-langages-programmation-apprecies-333211.html" class="more-btn">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>

	<!-------------------------------------------------------------------------------------------------------------->

			<section class="contact" id="contact">
				<div class="container">
					<div class="title title-contact"><h2>Contact Me</h2></div>
					<div class="row m-45px-b md-m-30px-b sm-m-25px-b">
					  <div class="col-12">
						<div class="text-center">
						  <p class="p-content">I am interested in freelance opportunities – especially ambitious or large projects. However, if you have other request or question, don’t hesitate to contact me using below form either.</p>
						</div>
					  </div>
					</div> <!-- row -->
				</div>
				<div class="container container-contact">
					 <div class="row">
						<div class="col-lg-6">
							<div class="title-box-2 pt-4 pt-md-0">
								<h5 class="contact-title">Get in touch</h5>
							</div>

								<p class="desc">Please contact me by email or phone, and wait after my answer to make sure that I can receive your sending.</p>

								<div class="contact_info">
									<div class="info_item lnr-home">
										<h6>Oujda, Maroc</h6>
										<p>Sidi Yehya najd 4</p>
									</div>
									<div class="info_item lnr-phone">
										<h6><a href="javascript:void(0)">(+212) 635316658</a></h6>
										<p>Mon to Fri 9am to 6 pm</p>
									</div>
									<div class="info_item lnr-envelope">
										<h6><a href="javascript:void(0)">walid.tdi.jennani@gmail.com</a></h6>
										<p>Send us your query anytime!</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="title-box-2 pt-4 pt-md-0">
									<h5 class="contact-title">Send Message</h5>
								</div>
								<form class="row contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-left">
										<div class="send">
											<input type="button" id="submit_btn" class="btn submit_btn" value="Send Message"/>
											<div id="info-send" class="info-send"></div>
										</div>
									</div>
								</form>
							</div>
					</div>
				</div>
			</section>
			
		</div>
		
		
       
		<footer class="webintern-footer">
		<div class="webintern-footer-inner">
			<div class="container">
				<div class="row">

					<div class="col-sm-6 col-md-4 ">
						<span class="webintern-footer-logo">
							<div class="infoApp">
								<ul>
									<li><span class="iconApp"></span></li>
								</ul>
							</div>
						</span>
						<div class="simple-text dark padding-sm">
						<p>Thanks for taking the time to contact my. Please send my some information on your project so I can figure out how best to help you.</p>
						</div>
						<div class="empty-space xs-25 sm-25"></div>
					</div>

					<div class="col-sm-6 col-md-4 footer-2">
						<!-- webintern_footer_title -->
						<h4 class="webintern_footer_title h5"><small>Quick Links</small></h4>
						<ul class="webintern-footer-list">

							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="0">Home</a>
							</li>
							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="1">About</a>
							</li>

							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="2">Skills</a>
							</li>
							
							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="3">Services</a>
							</li>
							
							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="4">Portfolio</a>
							</li>
							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="5">Blog</a>
							</li>
							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="6">Contact</a>
							</li>
							
						</ul>
						<div class="empty-space xs-25 sm-25"></div>
					</div>

					<div class="col-xs-12 col-md-4 col-sm-12 footer-3">
						<div class="marg-sm-b30"></div>
						<!-- webintern_footer_title -->
						<h4 class="webintern_footer_title h5"><small>Social media</small></h4>
						<div class="empty-space marg-lg-b20"></div>
						<!--
						<div class="simple-text last dark ">
						<p>Get latest updates and offers.</p>
						</div>
						-->
						<div class="empty-space marg-lg-b15"></div>
						<!-- TT-SUBSCRIBE -->
						<form method="post">
							<div class="tt-subscribe">
								
								<div class="zone-ytsubscribe">
									<div class="label-zone">Subscribe to my channel</div>
									<div class="button-zone"><div class="g-ytsubscribe" data-channelid="UCBCPjO9DCHHXqae49tAYmJQ" data-layout="full" data-count="default"></div></div>
								</div>
							</div>
						</form>
						<div class="empty-space marg-lg-b30"></div>
						<!-- TT-SOCAIL -->
						<ul class="tt-socail">
							<li><a href="https://www.facebook.com/jennani.walid" target="_blank" class="fa-facebook"></a></li>
							<li><a href="https://www.linkedin.com/in/oualid-jennani/" class="fa-linkedin" target="_blank"></a></li>
							<li><a href="https://twitter.com/JennaniW" target="_blank" class="fa-twitter"></a></li>
							<li><a href="https://www.youtube.com/channel/UCBCPjO9DCHHXqae49tAYmJQ" target="_blank" class="fa-youtube"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="tt-copy">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="tt-copy-left">Copyright © 2020. All rights reserved. </div>
					</div>
					<div class="col-sm-6">
						<div class="tt-copy-right">
						Created by : <span <?php echo "style = '".$new_style."'"; ?>>oualid jennani</span> 
						</div>
					</div>
				</div>
			</div>
		</div>
		</footer>

        <a href="#home" class="topWindow" id="topWindow" data-value="0"></a>
 
        <script src="js/jQuery-3.3.1.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="OwlCarousel/dist/owl.carousel.min.js"></script>
        <script src="js/Script.js"></script>
		<script src="js/Script-en.js"></script>

		<script src="https://apis.google.com/js/platform.js"></script>
		
		<?php
			if(isset($_SESSION['color'])){echo "<script>document.getElementById('bg-".$_SESSION['color']."').style.display = 'none';</script>";}
			else{echo "<script>document.getElementById('bg-blue').style.display = 'none';</script>";}
		?>
        
    </body>
</html>