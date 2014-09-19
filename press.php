	<?php 
	$pageTitle = "Press";
	include('inc/header.php');
	include('inc/pressImages.php'); 
	?>

	<!-- Begin Press -->
	<section id="press">

		<div class="container portfolio" >

			<!-- Page Title -->
			<div class="row page-title-2">
				<div class="col-lg-12">
					<h3>Press</h3>
					<hr>
				</div>
			</div>

			<!-- Gallery Items -->
			<div class="container port-holder">
			  <ul id="myPortfolio" class="no-padding">

			  	<?php 

			  	foreach($pressImages as $pressImage) { ?>

				  	<li class="item col-xs-4 no-padding">

					    <a href='<?php echo $pressImage["body"]; ?>' data-lightbox='press' data-title='title'>
					    	<img class="example-image" src='<?php echo $pressImage["front"]; ?>' alt='' />
					    	<span class="portfolio-hover">
							  <span>
							  	<span class="portfolio-title"><i class="ion-plus-circled"></i></span>
							  </span>
							</span>
					    </a>
						
				  	</li>

			  	<?php } ?>

			  </ul>
			</div>
		</div>


	</section>