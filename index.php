<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>PPC | project procurement consultant ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.jpg">
    
	<!-- CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/fonts.css" rel="stylesheet" type="text/css" /
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="js/superfish.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.js" type="text/javascript"></script>
	<script src="js/animate.js" type="text/javascript"></script>
	<script src="js/jquery.BlackAndWhite.js"></script>
	<script src="js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>
	
</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
	
		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="index.php" ><img src="images/pp.png" height="130px" width="150px" class="img-responsive pull-left" style="margin-top: 10px;"><span class="b1" style="font-size: 12px;">Project Procurement Consultant ltd.</span></a>
					</div><!-- //LOGO -->
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
						<form method="get" action="#">
							<input type="text" name="Search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
						</form>
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first active scroll_btn"><a href="#home" >Home</a></li>
								<li class="scroll_btn"><a href="#about" >About Us</a></li>
								<li class="scroll_btn"><a href="#projects" >Projects</a></li>
								<li class="scroll_btn last"><a href="#contacts" >Contacts</a></li>
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- HOME -->
		<section id="home" class="padbot0">
				
			<!-- TOP SLIDER -->
			<div class="flexslider top_slider">
				<ul class="slides">
					<li class="slide1">
						<div class="flex_caption1">
							<p class="title1 captionDelay2 FromTop" style = "color: #FFF; font-size: 70px;">Construction</p>
							<p class="title2 captionDelay4 FromTop" style = "color: #FFF; font-size: 70px;">and Procument</p>
							<p class="title3 captionDelay6 FromTop" style = "color: #FFF; font-size: 70px;">Of Goods,</p>
							<p class="title4 captionDelay7 FromBottom" style = "color: #FFF;">Works and Services, and also offer professional training on Project Management and Sustainable Construction/Buildings.</p>
						</div>
						<a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
					<li class="slide2">
						<div class="flex_caption1">
							<p class="title1 captionDelay6 FromLeft">We </p>
							<p class="title2 captionDelay4 FromLeft"> &nbsp;Have</p>
							<p class="title3 captionDelay2 FromLeft">&nbsp;Strategic</p>
							<p class="title4 captionDelay7 FromLeft">partnerships/alliances with individual consultants and firms to offer services in our none core area of compentecies.</p>
						</div>
						<a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
					</li>
					<li class="slide3">
						<div class="flex_caption1">
							<p class="title1 captionDelay1 FromBottom">We</p>
							<p class="title2 captionDelay2 FromBottom">&nbsp;Intend to </p>
							<p class="title3 captionDelay3 FromBottom">&nbsp;Achieve</p>
							<p class="title4 captionDelay5 FromBottom">by harnessing on the diverse expertise and experience, networks, and above all creative/innovative abilities of our team and Partners.</p>
						</div>
						<a class="slide_btn FromRight" href="javascript:void(0);" >Read More</a>
						
						<!-- VIDEO BACKGROUND -->
						<a id="P2" class="player" data-property="{videoURL:'tDvBwPzJ7dY',containment:'.top_slider .slide3',autoPlay:true, mute:true, startAt:0, opacity:1}" ></a>
						<!-- //VIDEO BACKGROUND -->
					</li>
				</ul>
			</div>
			<div id="carousel">
				<ul class="slides">
					<li><img src="images/slider/s.jpg" alt="" /></li>
					<li><img src="images/slider/t.jpg" alt="" /></li>
					<li><img src="images/slider/u.jpg" alt="" /></li>
				</ul>
			</div><!-- //TOP SLIDER -->
		</section><!-- //HOME -->
		
		
		<!-- ABOUT -->
		<section id="about">
			
			<!-- SERVICES -->
			<div class="services_block padbot40" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<!-- CONTAINER -->
				<div class="container">
					<p><h2><b>Who We Are</b></h2></p><hr><br>
					<p><b>PROJECT PROCUREMENT CONSULTANTS LTD, was incorporated as a Construction and Procurement Consultancy Firm of the Ninth (9th) day of June, 2014 with registerarion number RC 1196124.

				Our objective (is)/are: to be a “one stop shop” on all matters relating to professional services/advice on construction and procument of Goods,Works and Services; and also offer professional training on Project Management and Sustainable Construction/Buildings.
					</b></p>

					<p><h2><b>Our Skills</b></h2></p><hr><br>
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Contract </b> Documentation</p>
								<span></span>
							</a>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Cost </b> Management</p>
								<span></span>
							</a>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Contract/Claims </b> Management</p>
								<span></span>
							</a>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Project </b> Management</p>
								<span></span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Procurement Advisory</b> Services.</p>
								<span></span>
							</a>
						</div>
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //SERVICES -->
			
			
			
		</section><!-- //ABOUT -->
		
		
		<!-- PROJECTS -->
		<section id="projects" class="padbot20">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Featured</b> Works</h2>
			</div><!-- //CONTAINER -->
			
				
			<div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
				<!-- PROJECTS SLIDER -->
				<div class="owl-demo owl-carousel projects_slider">
					
					<!-- work1 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/k.jpg" alt="" class="img-responsive" />
								<a class="zoom" href="images/works/k.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="#" >PPC | LTD.</a>
									<span><?php echo date('d/m/y'); ?></span>
								</div>
							</div>
						</div>
					</div><!-- //work1 -->
					
					<!-- work2 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/l.jpg" alt="" class="img-responsive" />
								<a class="zoom" href="images/works/l.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="#" >PPC | LTD.</a>
									<span><?php echo date('d/m/y'); ?></span>
								</div>
							</div>
						</div>
					</div><!-- //work2 -->
					
					<!-- work3 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/m.jpg" alt="" class="img-responsive" />
								<a class="zoom" href="images/works/m.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="#" >PPC | LTD.</a>
									<span><?php echo date('d/m/y'); ?></span>
								</div>
							</div>
						</div>
					</div><!-- //work3 -->
					
					<!-- work4 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/n.jpg" alt="" />
								<a class="zoom" href="images/works/n.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="#" >PPC | LTD.</a>
									<span><?php echo date('d/m/y'); ?></span>
								</div>
							</div>
						</div>
					</div><!-- //work4 -->
					
					<!-- work5 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/o.jpg" alt="" />
								<a class="zoom" href="images/works/o.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="#" >PPC | LTD.</a>
									<span><?php echo date('d/m/y'); ?></span>
								</div>
							</div>
						</div>
					</div><!-- //work5 -->
					
					<!-- work6 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/p.jpg" alt="" />
								<a class="zoom" href="images/works/p.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="#" >PPC | LTD.</a>
									<span><?php echo date('d/m/y'); ?></span>
								</div>
							</div>
						</div>
					</div><!-- //work6 -->
					
					<!-- work7 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="images/works/q.jpg" alt="" />
								<a class="zoom" href="images/works/q.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="#" >PPC | LTD.</a>
									<span><?php echo date('d/m/y'); ?></span>
								</div>
							</div>
						</div>
					</div><!-- //work7 -->
				</div><!-- //PROJECTS SLIDER -->
			</div>
			
			
			<!-- OUR CLIENTS -->
			<div class="our_clients">
			
				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/cbn_1.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/gsu_1.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/3.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/dkw.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/gsu_1.jpg" alt="" />
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 client_img">
							<img src="images/clients/cbn_1.jpg" alt="" />
						</div>
					</div><!-- //ROW -->
				</div><!-- CONTAINER -->
			</div><!-- //OUR CLIENTS -->
		</section><!-- //PROJECTS -->
		
		<div align="center"><a href="images/team/ppc.docx"><img src="images/team/docs.jpg"  style="float:center"/></a><a href="images/team/ppc.docx" style="font-weight:bold"><br>Download our full company profile here</a></div><br />

		<!-- TEAM -->
		<section id="team">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Our</b> Team</h2>
				
				<!-- ROW -->
				<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TEAM SLIDER -->
					<div class="owl-demo owl-carousel team_slider">
				
						<!-- crewman1 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/1.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>ABUBAKAR HASSAN</p>
										<span><b>Managing Partner</b></span>
										<hr>
										<p style="text-align: left; font-size: 14px; padding-left: 15PX; padding-right: 10PX;">Abubakar Hassan has more than 10 years’ experience in construction cost and project management. He is a Quantity Surveyor and has M.Tech in Construction Project Management from Modibbo Adama University of Technology Yola, Nigeria.</p>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman2 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/2.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>AHMAD MUHAMMAD KABIR </p>
										<span>Senior Partner</span>
										<hr>
										<P style="text-align: left; font-size: 14px; padding-left: 15PX; padding-right: 10PX;">Ahmad obtained his Bachelors of Technology in Quantity Surveying from Abubakar Tafawa BAlewa University Bauchi, and had his Professional Training at OHIO SAYE & ASSOCIATES (Youth Service) and Y.S Associates { Trainee- Chater}.</P>
									</div>
								</div>

								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman3 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/3.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>HASSAN ALI KUMO</p>
										<span>Senior Partner</span>
										<hr>
										<P style="text-align: left; font-size: 14px; padding-left: 15PX; padding-right: 10PX;">Hassan Ali kumo graduated from Abubakar Tafawa BAlewa University Bauchi with 2nd Class Upper Honours, Quantity Surveying; and also attended Ahmadu Bello University Zaria for masters of science construction management.</P>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman3 -->
						
						<!-- crewman4 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/4.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>YUSUF IBRAHIM</p>
										<span>Assistant Consultant - Quantity Surveying/Research</span>
										<hr>
										<P style="text-align: left; font-size: 14px; padding-left: 15PX; padding-right: 10PX;">He Has B. Tech and O.N.D in Quantity Surveying at Abubakar Tafawa Balewa University, Bauchi and Federal Polytechnic, Bauchi he also Participated in the Design & Supervision of Presidential Needs Special Intervention Phase II for Gombe State University, PPC Ltd.</P>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman4 -->
						
						<!-- crewman5 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/5.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>HARUNA SAIDU</p>
										<span>Assistant Consultant - Quantity Surveying</span>
										<hr>
										<P style="text-align: left; font-size: 14px; padding-left: 15PX; padding-right: 10PX;">He Has B. Tech in Quantity Surveying at Abubakar Tafawa Balewa University, Bauchi he is a Supporting Staff, National Youth Service Corp (BMPIPPU), Due Process Office, Government House, Bauchi. May 2015 to April 2016</P>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman5 -->
						
						<!-- crewman6 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="images/team/6.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>KWARGANA IMRAN LAWAL</p>
										<span>Assistant Consultant – Design: Civil/ Structural Engineering</span>
										<hr>
										<P style="text-align: left; font-size: 14px; padding-left: 15PX; padding-right: 10PX;">He is a graduate of Abubakar Tafawa Balewa University, BauchiWith Second Class Upper Division B. Eng. (Hons) Civil Engineering. 
										</P>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="glyphicon glyphicon-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman6 -->
						
						<
					</div><!-- TEAM SLIDER -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //TEAM -->
		
		
		<!-- NEWS -->
		<section id="news">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Clients</b> say about us</h2>
				
				<!-- TESTIMONIALS -->
				<div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TESTIMONIALS SLIDER -->
					<div class="owl-demo owl-carousel testim_slider">
						
						<!-- TESTIMONIAL1 -->
						<div class="item">
							<div class="testim_content">“There is nothing scary in the darkness, if you encounter it face-to-face. The inevitable price we pay for our happiness is eternal fear to lose it. When you start thinking a lot about your past, it becomes your present and you can't see your future without it.”</div>
							<div class="testim_author">—  Anna Balashova, <b>Philosopher</b></div>
						</div><!-- TESTIMONIAL1 -->
						
						<!-- TESTIMONIAL2 -->
						<div class="item">
							<div class="testim_content">“There is nothing scary in the darkness, if you encounter it face-to-face. The inevitable price we pay for our happiness is eternal fear to lose it. When you start thinking a lot about your past, it becomes your present and you can't see your future without it.”</div>
							<div class="testim_author">—  Anna Balashova, <b>Philosopher</b></div>
						</div><!-- TESTIMONIAL2 -->
						
						<!-- TESTIMONIAL3 -->
						<div class="item">
							<div class="testim_content">“There is nothing scary in the darkness, if you encounter it face-to-face. The inevitable price we pay for our happiness is eternal fear to lose it. When you start thinking a lot about your past, it becomes your present and you can't see your future without it.”</div>
							<div class="testim_author">—  Anna Balashova, <b>Philosopher</b></div>
						</div><!-- TESTIMONIAL3 -->
					</div><!-- TESTIMONIALS SLIDER -->
				</div><!-- //TESTIMONIALS -->
				<!-- RECENT POSTS -->
				<div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="images/blog/l.jpg" alt="" />
								<a class="link" href="#" ></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="#" ></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="images/blog/m.jpg" alt="" />
								<a class="link" href="#"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="#" ></a>
								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="images/blog/p.jpg" alt="" />
								<a class="link" href="#"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="#" ></a>
								<ul class="post_item_inf">
								</ul>
							</div>
						</div>
					</div>
				</div><!-- RECENT POSTS -->
			</div><!-- //CONTAINER -->
		</section><!-- //NEWS -->
	</div><!-- //PAGE -->
				
	
	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->
	
	<!-- FOOTER -->
	<footer>
			
		<!-- CONTAINER -->
		<div class="container">
			
			<!-- ROW -->
		<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
				
		<div class="col-lg-4 col-md-4 col-sm-6 padbot30">
				<h4><b>Get In Touch</b></h4>
			<ul>
				<li><i class="glyphicon glyphicon-map-marker"></i><strong> &nbsp;Address:</strong> Suite A7, Duwa Plaza, Plot 47 Bauchi Road, Gombe State.</li><br>
				<li><i class="glyphicon glyphicon-earphone"></i><strong> &nbsp; Phone:</strong> (+234) 803 6851 385 </li><br>
				<li><i class="glyphicon glyphicon-envelope"></i><strong>&nbsp; &nbsp; &nbsp;Email:</strong> <a href="#">ppcconsultants2014@gmail.com </a></li>
			</ul>
		</div>
				
				<div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
					<h4><b>About</b> Us</h4>
					<p><b>We provide comprehensive in house services on our areas of core competencies and collaborate with our partners to offer services on the non core areas – Design & Supervison, Research and Training, Dispute Resolution and other Legal services.</b> </p>
					<ul class="social">
						<li><a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="map_show fa fa-map-marker"></i></a></li>
					</ul>
				</div>
				
				<div class="respond_clear"></div>
				
				<div class="col-lg-4 col-md-4 padbot30">
					<h4><b>Contacts</b> Us</h4>
					
					<!-- CONTACT FORM -->
					<div class="span9 contact_form">
						<div id="note"></div>
						<div id="fields">
							<form id="contact-form-face" class="clearfix" action="" method="post">
								<input type="text" name="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
								<input type="text" name="email" value="Email" onFocus="if (this.value == 'Email') this.value = '';" onBlur="if (this.value == '') this.value = 'Email';" />
								<textarea name="message" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';">Message</textarea>
								<input class="contact_btn" type="submit" name = "contact" value="Send message" />
							</form>
						</div>
					</div><!-- //CONTACT FORM -->
				</div>
			</div><!-- //ROW -->
			<p align="center"> Copyright &copy; 2017 <?php echo date('Y');?> Project procurement consultant Ltd. All rights reserved
			</p>
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->
	
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
	</div><!-- //MAP -->

</div>
		
</body>
</html>