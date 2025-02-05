<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Designo web site" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/css/style.min.css" />
		<title>Designo about page</title>
	</head>
	<body>
		<header class="bloc_header">
			<a title="designo Home page" href="index.html"><img class="header_img_logo" src="<?php echo get_template_directory_uri(); ?>/src/img/logo_header.png" alt="logo designo" /></a>
			<nav class="header_nav">
				<ul class="header_nav_ul">
					<li class="header_nav_ul_li"><a class="header_nav_ul_li_a" href="about.html" title="designo about page">OUR COMPANY</a></li>
					<li class="header_nav_ul_li"><a class="header_nav_ul_li_a" href="locations.html" title="designo locations page">LOCATIONS</a></li>
					<li class="header_nav_ul_li"><a class="header_nav_ul_li_a" href="contact.html" title="designo contact page">CONTACT</a></li>
				</ul>
			</nav>
			<nav class="header_nav_mobile">
				<div class="toggle">
					<img src="./src/img/logo_header.png" alt="logo designo" class="header_logo_mobile" />
					<img src="./src/img/menu_burger_open.png" alt="menu-burger-open" class="menu-burger-open" />
					<img src="./src/img/menu_burger_close.png" alt="menu-burger-close" class="menu-burger-close" />
				</div>
				<ul class="header_nav_mobile_ul">
					<li class="header_nav_mobile_ul_li"><a class="header_nav_mobile_ul_li_a" href="about.html" title="designo about page">OUR COMPANY</a></li>
					<li class="header_nav_mobile_ul_li"><a class="header_nav_mobile_ul_li_a" href="locations.html" itle="designo locations page">LOCATIONS</a></li>
					<li class="header_nav_mobile_ul_li"><a class="header_nav_mobile_ul_li_a" href="contact.html" title="designo contact page">CONTACT</a></li>
				</ul>
			</nav>
		</header>

		<main class="bloc_main_index">
			<article class="about_main_article">
				<section class="about_main_article_section">
					<h1 class="about_main_article_section_h1">About Us</h1>
					<p class="about_main_article_section_p">
						Founded in 2010, we are a creative agency that produces lasting results for our clients. We’ve partnered with many startups, corporations, and nonprofits alike to craft designs that make real impact. We’re always looking forward to
						creating brands, products, and digital experiences that connect with our clients’ audiences.
					</p>
				</section>
				<div class="about_main_article_image">
					<img src="<?php echo get_template_directory_uri(); ?>/src/img/computers-image.png" alt="computers" class="about_main_article_image_computers" />
				</div>
			</article>

			<img src="<?php echo get_template_directory_uri(); ?>/src/img/deco_background_1_index.svg" alt="decoration" class="about_main_img_deco_top" />

			<article class="about_second_article">
				<div class="about_second_article_image">
					<img src="<?php echo get_template_directory_uri(); ?>/src/img/person_image.png" alt="person" class="about_second_article_image_person" />
				</div>
				<section class="about_second_article_section">
					<h1 class="about_second_article_section_h1">World-class talent</h1>
					<p class="about_second_article_section_p_one">
						We are a crew of strategists, problem-solvers, and technologists. Every design is thoughtfully crafted from concept to launch, ensuring success in its given market. We are constantly updating our skills in a myriad of platforms.
					</p>
					<p class="about_second_article_section_p_two">
						Our team is multi-disciplinary and we are not merely interested in form — content and meaning are just as important. We give great importance to craftsmanship, service, and prompt delivery. Clients have always been impressed with our
						high-quality outcomes that encapsulates their brand’s story and mission.
					</p>
				</section>
			</article>
			<nav class="about_nav_country">
				<ul class="about_nav_country_ul">
					<li class="about_nav_country_ul_li">
						<img src="<?php echo get_template_directory_uri(); ?>/src/img/canada_image.png" alt="canada-illustration" class="about_nav_country_ul_li_img" />
						<h3 class="about_nav_country_ul_li_h3">CANADA</h3>
						<a href="locations.html" class="about_nav_country_ul_li_btn" title="designo locations page">SEE LOCATION</a>
					</li>
					<li class="about_nav_country_ul_li">
						<img src="<?php echo get_template_directory_uri(); ?>/src/img/australia_image.png" alt="australia-illustration" class="about_nav_country_ul_li_img" />
						<h3 class="about_nav_country_ul_li_h3">AUSTRALIA</h3>
						<a href="locations.html" class="about_nav_country_ul_li_btn" title="designo locations page">SEE LOCATION</a>
					</li>
					<li class="about_nav_country_ul_li">
						<img src="<?php echo get_template_directory_uri(); ?>/src/img/united_kingdom_image.png" alt="united-kingdom-illustration" class="about_nav_country_ul_li_img" />
						<h3 class="about_nav_country_ul_li_h3">UNITED KINGDOM</h3>
						<a href="locations.html" class="about_nav_country_ul_li_btn" title="designo locations page">SEE LOCATION</a>
					</li>
				</ul>
			</nav>

			<img src="<?php echo get_template_directory_uri(); ?>/src/img/deco_background_2_index.svg" alt="decoration" class="about_main_img_deco_bottom" />

			<article class="about_third_article">
				<section class="about_third_article_section">
					<h1 class="about_third_article_section_h1">The real deal</h1>
					<p class="about_third_article_section_p_one">
						As strategic partners in our clients’ businesses, we are ready to take on any challenge as our own. Solving real problems require empathy and collaboration, and we strive to bring a fresh perspective to every opportunity. We make design
						and technology more accessible and give you tools to measure success.
					</p>
					<p class="about_third_article_section_p_two">We are visual storytellers in appealing and captivating ways. By combining business and marketing strategies, we inspire audiences to take action and drive real results.</p>
				</section>
				<div class="about_third_article_image">
					<img src="<?php echo get_template_directory_uri(); ?>/src/img/hands_image.png" alt="hands" class="about_third_article_image_hands" />
				</div>
			</article>
		</main>

		<footer class="bloc_footer">
			<article class="footer_article">
				<h2 class="footer_article_h2">Let’s talk about your project</h2>
				<p class="footer_article_p">Ready to take it to the next level? Contact us today and find out how our expertise can help your business grow.</p>
				<a class="footer_article_a" title="Designo Contacte page" href="contact.html">Get in touch</a>
			</article>
			<section class="footer_section">
				<div class="footer_section_div">
					<a title="designo Home page" href="index.html"><img class="footer_img_logo" alt="logo Designo" src="./src/img/logo_footer.png" /></a>
					<nav class="footer_nav">
						<ul class="footer_nav_ul">
							<li class="footer_nav_ul_li"><a class="footer_nav_ul_li_a" title="Designo about page" href="about.html">OUR COMPANY</a></li>
							<li class="footer_nav_ul_li"><a class="footer_nav_ul_li_a" title="Designo locations page" href="locations.html">LOCATIONS</a></li>
							<li class="footer_nav_ul_li"><a class="footer_nav_ul_li_a" title="Designo contact page" href="contact.html">CONTACT</a></li>
						</ul>
					</nav>
				</div>
				<div class="footer_section_deco_div"></div>
			</section>
			<div class="footer_div_backgroud_black">
				<section class="footer_section_contact">
					<div class="footer_section_contact_div">
						<h4 class="footer_section_contact_div_h4">Designo Central Office</h4>
						<p class="footer_section_contact_div_p">386 Wellington Street</p>
						<p class="footer_section_contact_div_p">1000 Brussels - Belgium</p>
					</div>
					<div class="footer_section_contact_div">
						<h4 class="footer_section_contact_div_h4">Contact Us (Central Office)</h4>
						<h4 class="footer_section_contact_div_h4">P : +1 253-863-8967</h4>
						<h4 class="footer_section_contact_div_h4">M : contact@designo.co</h4>
					</div>

					<nav class="footer_nav_social">
						<ul class="footer_nav_social_ul">
							<li class="footer_nav_social_ul_li">
								<a title="Designo facebook.com" href="https://www.facebook.com/Designo"><i class="fa fa-facebook-official fa-1x" aria-hidden="true"></i></a>
							</li>
							<li class="footer_nav_social_ul_li">
								<a title="Designo youtube.com" href="https://www.youtube.com/Designo"><i class="fa fa-youtube-play fa-1x" aria-hidden="true"></i></a>
							</li>
							<li class="footer_nav_social_ul_li">
								<a title="Designo twitter.com" href="https://www.twitter.com/Designo"><i class="fa fa-twitter fa-1x" aria-hidden="true"></i></a>
							</li>
							<li class="footer_nav_social_ul_li">
								<a title="Designo pinterest.com" href="https://www.pinterest.com/Designo"><i class="fa fa-pinterest fa-1x" aria-hidden="true"></i></a>
							</li>
							<li class="footer_nav_social_ul_li">
								<a title="Designo instagram.com" href="https://www.instagram.com/Designo"><i class="fa fa-instagram fa-1x" aria-hidden="true"></i></a>
							</li>
						</ul>
					</nav>
				</section>
			</div>
		</footer>
		<script src="app.js"></script>
	</body>
</html>
