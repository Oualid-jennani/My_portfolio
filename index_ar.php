<!DOCTYPE html>
<html>
    <head>
        <title>وليد جناني</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" type="image/png" href="img/logo.png"/>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="OwlCarousel/dist/assets//owl.theme.default.min.css">

		<link href="https://fonts.googleapis.com/css?family=Farro|Droid+Arabic+Kufi|Open+Sans|Pacifico|Vast+Shadow&display=swap" rel="stylesheet">


		<link rel="stylesheet" href="css/style-ar.css">


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
					document.documentElement.style.setProperty('--slider2', 'url(../img/slider/slider3/2.svg)');
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
				<div class="loader-titre"><span>و</span></div>
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

					<a class="navbar-brand" href="#home" data-value="0">ليد</a>


						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cnav">
							<span class="navbar-toggler-icon"></span>
						</button>

					<div class="collapse navbar-collapse" id="cnav">

						<div class="mr-auto"></div>
						<ul class="navbar-nav">
                            
                            <li class="nav-item active">
									<a class="nav-link" href="#home" data-value="0">الرئيسية<span></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about" data-value="1">نبذة عني<span></span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#skills" data-value="2">المهارات<span></span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#services" data-value="3">الخدمات<span></span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#portfolio" data-value="4">المشاريع<span></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#blog" data-value="5">المدونة<span></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact" data-value="6">تواصل معي<span></span></a>
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
                                    
									<li><span class="nameApp">ليد</span></li>
                                    
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
							<button id="change-coleur">AR</button>
						</div>
                        
						<div class="bg-color-items">
							<button class="bg" id="bg-blue"></button>
							<button class="bg" id="bg-turquoise"></button>
							<button class="bg" id="bg-violet"></button>
							<button class="bg" id="bg-green"></button>
							<button class="bg" id="bg-black"></button>
						</div>

						<div class="lang"><div></div><a href="index.php?lang=en">الإنجليزية</a></div>
                        
					</div>

					<nav class="navbar navbar-expand-lg navbar-light ">
						<a class="navbar-brand" href="#home" data-value="0"></a>

							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cnav2">
								<span class="navbar-toggler-icon"></span>
							</button>

						<div class="collapse navbar-collapse" id="cnav2">

							<div class="mr-auto"></div>
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a class="nav-link" href="#home" data-value="0">الرئيسية<span></span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#about" data-value="1">نبذة عني<span></span></a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="#skills" data-value="2">المهارات<span></span></a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="#services" data-value="3">الخدمات<span></span></a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="#portfolio" data-value="4">المشاريع<span></span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#blog" data-value="5">المدونة<span></span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#contact" data-value="6">تواصل معي<span></span></a>
								</li>
							</ul>
						</div>
					</nav>


					<div class="mainSlide">
							<div class="container-fluid infoPersonal">
								<div class="row">

									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6  slide-info">
										<h3>مرحبا!</h3>

										<h2>إسمي وليد جناني</h2>

                                        <p>أنا مطور ومصمم ويب مستقل في وجدة. مرحبا بكم في البورتفوليو الخاص بي!</p>
                                        <div class="slider-action">
                                            <a href="#contact" id="Talk" data-value="6"><button class="btn-talk">طلب استفسار<span>&#x279C;</span></button></a>
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
					<div class="title title-about"><h2>نبذة عني</h2></div>
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-7 col-sm-12 col-xs-12">
							<div class="card-personal">
                                
                                <div class="CV">
                                    <div>
                                        <a href="CV%20Walid%20Jennani.pdf" target="_blank" class="btn-cv" data-value="">تحميل السيرة الذاتية</a>
                                        <div class="pole-cv"></div>
                                    </div>
                                </div>
                                
								<div class="row">
									<div class="col-6" >الاسم:</div><div class="col-6">وليد جناني</div>
									<div class="col-6" >المهنة:</div><div class="col-6">مطور</div>
									<div class="col-6" >الجنسية:</div><div class="col-6">مغربية</div>
									<div class="col-6" >تاريخ الولادة:</div><div class="col-6">28 يوليوز 1996</div>
									<div class="col-6" >مكان الولادة:</div><div class="col-6">وجدة</div>
									<div class="col-6" >الهاتف:</div><div class="col-6">0635316658</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 col-xs-12">
							<div class="about-info">
								<p class="p-info">
								 شخص حر أعمل  على مسؤليتي وطالب في سنتي الرابعة في تطوير المعلومات. طالب مبدع شاب يحلم بأحلام كبيرة. شخص منظم بشكل جيد ، قادر على حل المشكلات ، موظف مستقل مع اهتمام كبير بالتفاصيل. من محبي مانغا وأنيمي ، الأنشطة الخارجية ، المسلسلات التلفزيونية والأفلام ، بلاي ستيشن ، كرة القدم ، الموسيقى ، الجري مؤخراً.
								</p>
								<h3>الإقتباس المفضل :</h3>
								<q class="q-info">أحلام الناس لا تنتهي</q><p class="marchal">مارشال دي تيتش</p>
							</div>
						</div>

					</div>
				</div>
			</section>

	<!-------------------------------------------------------------------------------------------------------------->  

			<section class="skills" id="skills">
				<div class="container">
					<div class="title title-skills"><h2>المهارات</h2></div>
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<p class="p-content">كطالب جامعي في السنة الرابعة  ، أنا تقريبًا مطور مكدس كامل لدي مهارات مختلفة في مجالات مختلفة في مجال البرمجة.</p>

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
									الاعمال المنجزة
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
									سنوات الخبرة
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
									مجموع العملاء
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
									الجوائز
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
				<div class="title title-services"><h2>الخدمات</h2></div>

				<div class="row">
					<div class="col-lg-12 text-center">
					  <p class="p-content">أقوم بتصميم وتطوير الخدمات للعملاء من جميع الأحجام ، والمتخصصة في إنشاء مواقع ويب حديثة أنيقة وخدمات ويب ومتاجر عبر الإنترنت. شغفي هو تصميم تجارب المستخدم الرقمية من خلال الواجهة الجريئة.</p>
					</div>
				  <div class="col-12 col-md-6 col-lg-4">
					<div class="services-box">
					  <i class="icon i-development"></i>
					  <div class="services-content">
						<h5>تطوير البرمجيات</h5>
						<p>من ضمنها عملية تطوير الويب أخذ العناصر الرسومية المحددة في عملية التصميم وتكويدها ، تطوير و تكويد .القوالب الجاهزة ، قوالب الووردبريس</p>
						<div class="read-more">
						  <a href="javascript:void(0)" class="more-btn">اقرأ المزيد</a>
						</div>
					  </div>
					</div> <!-- feature-box-02 -->
				  </div> <!-- col -->


				  <div class="col-12 col-md-6 col-lg-4">
					<div class="services-box">
					  <i class="icon i-web"></i>
					  <div class="services-content">
						<h5>تصميم المواقع</h5>
						<p>توجهي في تصميم مواقع الويب هو إنشاء موقع ويب يعزز العلامة التجارية لشركتك مع ضمان سهولة الاستخدام والبساطة لجمهورك.
						</p>
						<div class="read-more">
						  <a href="javascript:void(0)" class="more-btn">اقرأ المزيد</a>
						</div>
					  </div>
					</div> <!-- feature-box-02 -->
				  </div> <!-- col -->


				  <div class="col-12 col-md-6 col-lg-4">
					<div class="services-box">
					<i class="icon i-mobile"></i>
					  <div class="services-content">
						<h5>تطبيقات الهاتف</h5>
						<p>توجهي هو إنشاء وتطوير تصميم تطبيق يعزز العلامة التجارية لشركتك مع ضمان سهولة الاستخدام والبساطة لجمهورك.</p>
						<div class="read-more">
						  <a href="javascript:void(0)" class="more-btn">اقرأ المزيد</a>
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

					<div class="title title-portfolio"><h2>المشاريع</h2></div>
					<div class="row">
						<div class="col-lg-12 text-center">
						  <p class="p-content">كطالب ، ليس لدي الكثير من الخبرة كموظف ، مشاريع قليلة مع بعض الدورات التدريبية أو المشاريع الشخصية  و خبرات قليلة</p>
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
					<div class="title title-blog"><h2>المدونة</h2></div>
					<div class="row">

						<div class="col-lg-12 text-center">
						  <p class="p-content">أهم أخبار المطورين ، الوظائف و برامج تطوير التطبيقات <br>iOs ، Android ، Windows ، .net ، App Store ، المنصات ، القرصنة ، HTML5 ، PHP ، J2ME ، 3D ، ...</p>
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
									  <a href="https://www.silicon.fr/java-developpeurs-java8-tomcat-334720.html" class="more-btn">اقرأ المزيد</a>
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
									  <a href="https://www.silicon.fr/gitlab-modele-zero-trust-securite-334413.html" class="more-btn">اقرأ المزيد</a>
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
									  <a href="https://www.silicon.fr/devsecops-europe-334283.html" class="more-btn">اقرأ المزيد</a>
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
									  <a href="https://www.silicon.fr/developpeurs-10-langages-programmation-apprecies-333211.html" class="more-btn">اقرأ المزيد</a>
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
					<div class="title title-contact"><h2>تواصل معي</h2></div>
					<div class="row m-45px-b md-m-30px-b sm-m-25px-b">
					  <div class="col-12">
						<div class="text-center">
						  <p class="p-content">أنا مهتم بالفرص الحرة - خاصة المشاريع الطموحة أو الكبيرة. ومع ذلك ، إذا كان لديك طلب أو سؤال آخر ، فلا تتردد في الاتصال بي باستخدام النموذج أدناه أيضًا.</p>
						</div>
					  </div>
					</div> <!-- row -->
				</div>
				<div class="container container-contact">
					 <div class="row">
						<div class="col-lg-6">
							<div class="title-box-2 pt-4 pt-md-0">
								<h5 class="contact-title">ابقى على تواصل</h5>
							</div>

								<p class="desc">يرجى الاتصال بي عن طريق البريد الإلكتروني أو الهاتف ، وانتظر بعد إجابتي للتأكد من أنني أستطيع تلقي الإرسال الخاص بك.</p>

								<div class="contact_info">
									<div class="info_item lnr-home">
										<h6>وجدة ، المغرب</h6>
										<p>النجد 3 طريق سيدي يحي</p>
									</div>
									<div class="info_item lnr-phone">
										<h6><a href="javascript:void(0)">0635316658</a></h6>
										<p>من الإثنين إلى الجمعة من الساعة 9 صباحًا حتى 6 مساءً</p>
									</div>
									<div class="info_item lnr-envelope">
										<h6><a href="javascript:void(0)">walid.tdi.jennani@gmail.com</a></h6>
										<p>أرسل لنا استفسارك في أي وقت!</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="title-box-2 pt-4 pt-md-0">
									<h5 class="contact-title">إرسال رسالة</h5>
								</div>
								<form class="row contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="أدخل الإسم">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="أدخل البريد الالكتروني">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="subject" name="subject" placeholder="موضوع الرسالة">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="مضمون الرسالة"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<div class="send">
											<input type="button" id="submit_btn" class="btn submit_btn" value="إرسال الرسالة"/>
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
						<p>شكرا لأخذ الوقت للاتصال بي. الرجاء إرسال بعض المعلومات الخاصة بمشروعك حتى أتمكن من معرفة أفضل طريقة لمساعدتك.</p>
						</div>
						<div class="empty-space xs-25 sm-25"></div>
					</div>

					<div class="col-sm-6 col-md-4 footer-2">
						<!-- webintern_footer_title -->
						<h4 class="webintern_footer_title h5"><small>روابط سريعة</small></h4>
						<ul class="webintern-footer-list">

							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="0">الرئيسية</a>
							</li>
							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="1">معلومات عني</a>
							</li>

							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="2">المهارات</a>
							</li>
							
							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="3">الخدمات</a>
							</li>
							
							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="4">المشاريع</a>
							</li>
							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="5">المدونة</a>
							</li>
							<li>
								<a class="footer-link" href="javascript:void(0)" data-value="6">تواصل معي</a>
							</li>
							
						</ul>
						<div class="empty-space xs-25 sm-25"></div>
					</div>

					<div class="col-xs-12 col-md-4 col-sm-12 footer-3">
						<div class="marg-sm-b30"></div>
						<!-- webintern_footer_title -->
						<h4 class="webintern_footer_title h5"><small>مواقع التواصل الاجتماعي</small></h4>
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
									<div class="label-zone">اشترك في قناتي</div>

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
						<div class="tt-copy-right">Copyright © 2020. جميع الحقوق محفوظة.</div>
					</div>
					<div class="col-sm-6">
						<div class="tt-copy-left">
						أنشئ من طرف : <span <?php echo "style = '".$new_style."'"; ?>>وليد جناني </span> 
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
		<script src="js/Script-ar.js"></script>

		<script src="https://apis.google.com/js/platform.js"></script>
		
		<?php
			if(isset($_SESSION['color'])){echo "<script>document.getElementById('bg-".$_SESSION['color']."').style.display = 'none';</script>";}
			else{echo "<script>document.getElementById('bg-blue').style.display = 'none';</script>";}
		?>
        
    </body>
</html>