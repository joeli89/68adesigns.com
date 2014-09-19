<?php include('inc/bespokeImages.php'); ?>
<?php 
$pageTitle = "Traditional Bespoke";
include("inc/header.php");
include("inc/project-nav.php"); ?>


	<!-- Begin Hero -->
	<div class='jumbotron <?php echo $heading;
?> clearfix' data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target=".ticker h1">
		<!-- Content -->
		<div class="container center-vertically heading">
			<img src="img/logo/watermark.png">
			<div class="ticker">
				<h1><?php echo $pageTitle; ?></h1>
				
			</div>
			<hr>
			<a href="#" data-id="section2" class="btn btn-default bolt-button-light scroll-link" style="margin-top:10px;">
				Gallery &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
			</a>
		</div>

	</div>
	<!-- End Hero -->



	<!-- Begin Portfolio -->
	<section id="section2">

		<div class="container portfolio">

			<!-- Page Title -->
			<div class="row page-title-2">
				<div class="col-lg-12">
					<h3>Gallery</h3>
					<hr>
				</div>
			</div>


			<!-- Gallery Items -->
			<div class="container port-holder">
			  <ul id="myPortfolio" class="no-padding">

			  	<?php 
			  	/*shuffle($images);*/ //Random Order
			  	foreach($images as $project_id => $image) { ?>

				  	<li class="item <?php echo $image["class"]; ?> col-xs-4 no-padding">

					    <a href='<?php echo $image["main"]; ?>' data-lightbox='<?php echo $image["class"]; ?>' data-title='<?php echo $image["text"]; ?>'>
					    	<img class="example-image" src='<?php echo $image["thumb"]; ?>' alt='<?php echo $image["title"]; ?>' />
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
	<!-- End Portfolio -->

<?php include('inc/footer.php'); ?>