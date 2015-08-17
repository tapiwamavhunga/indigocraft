<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header(); ?>



		<section class="home-section">
		
		<div id="top-section">
		
			<div id="hero">				
				<div id="owl-top" class="owl-carousel owl-theme">
									 
					<div class="item back-image-1">			 
						<!-- <div class="hero-text">			 
							<h4>Recognizing the need.</h4>	
							<h1>1997</h1>
							<p>we never stopped dreaming...</p>		

							<div class="short-button-1 border-but left-radius">Button <span></span>
							</div>	

							<div class="short-button-1 border-but right-radius">Button <span></span>
							</div>

						</div> -->	

						


					</div>

					<div class="item back-image-2">			 
						<div class="hero-text">			 
							<h4>Fashion fades.</h4>	
							<p>only style remains the same.</p>														
						</div>									
					</div>
				</div>
			</div>
		</div>

			
		
	</section>

	<section class="home-section">
		
			<div>
			<h2>Section 3</h2>
		</div>

		
	</section>

	<section class="home-section">
		<div>
			<h2>Here</h2>
		</div>
	</section>

	<section class="home-section">
		<div>
			<h2>Section 4</h2>
		</div>
	</section>

	<section class="home-section">
		<div>
			<h2>Section 5</h2>
		</div>
	</section>

	<nav>
		<ul class="home-vertical-nav">
			<li><a href="#0" class="home-prev inactive">Next</a></li>
			<li><a href="#0" class="home-next">Prev</a></li>
		</ul>
	</nav> <!-- .home-vertical-nav -->



		
<?php get_footer(); ?>
