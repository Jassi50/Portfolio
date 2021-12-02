<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio-Jassi
 */

?>

<div class="container">
			<!-- main images -->
			<div class="holder">
			  <div class="slides">
			  <img src="<?php bloginfo('template_url'); ?>/pictures/movie-screenshot.jpg">
			  </div>
		  
			  <div class="slides">
				<img src="<?php bloginfo('template_url'); ?>/pictures/movie-screenshot.jpg">
			  </div>
		  
			  <div class="slides">
			  <img src="<?php bloginfo('template_url'); ?>/pictures/movie-screenshot.jpg">
			  </div>
				
			  <div class="slides">
			  <img src="<?php bloginfo('template_url'); ?>/pictures/movie-screenshot1.jpg">
			  </div>
		  
			  <div class="slides">
			  <img src="<?php bloginfo('template_url'); ?>/pictures/movie-screenshot2.jpg">
			  </div>
				
			  <div class="slides">
			  <img src="<?php bloginfo('template_url'); ?>/pictures/movie-screenshot2.jpg">
			  </div>
			</div>
		  
			<div class="prevContainer"><a class="prev" onclick="plusSlides(-1)">
			  <svg viewBox="0 0 24 24">
			  <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
		  </svg>
			  </a></div>
			<div class="nextContainer"><a class="next" onclick="plusSlides(1)">
			  <svg viewBox="0 0 24 24">
			<path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
		  </svg>
			  </a></div>
		  
		  
			<!-- thumnails in a row -->
			<div class="row">
			  <!-- <div class="column column-1">
				<img class="slide-thumbnail" src="<?php bloginfo('template_url'); ?>/pictures/screenshot.png" onclick="currentSlide(1)" alt="Caption One">
			  </div> -->
			  <!-- <div class="column column-2">
			  <img class="slide-thumbnail" src="<?php bloginfo('template_url'); ?>/pictures/screenshot.png" onclick="currentSlide(2)" alt="Caption Two">
			  </div> -->
			  <div class="column column-3">
			  <img class="slide-thumbnail" src="<?php bloginfo('template_url'); ?>/pictures/movie-screenshot.jpg" onclick="currentSlide(3)" alt="Caption Three">
			  </div>
			  <div class="column column-4">
			  <img class="slide-thumbnail" src="<?php bloginfo('template_url'); ?>/pictures/movie-screenshot1.jpg" onclick="currentSlide(4)" alt="Caption Four">
			  </div>
			  <div class="column column-5">
			  <img class="slide-thumbnail" src="<?php bloginfo('template_url'); ?>/pictures/movie-screenshot2.jpg" onclick="currentSlide(5)" alt="Caption Five">
			  </div>    
			  <!-- <div class="column column-6">
			  <img class="slide-thumbnail" src="<?php bloginfo('template_url'); ?>/pictures/screenshot.png" onclick="currentSlide(6)" alt="Caption Six">
			  </div> -->
			</div>
		  </div>