<?php include('inc/projects.php'); ?>
<?php include('inc/pressImages.php'); ?>
<?php 
$pageTitle = "Home";
include("inc/header.php");
include("inc/index-nav.php"); ?>



	<!-- Begin Hero -->
	<div class='jumbotron <?php echo "homepage";?> clearfix' data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target=".ticker h1">
		<!-- Content -->
		<div class="container center-vertically heading">
			<img src="img/logo/watermark.png">
			<div class="ticker">
				<h1>Beautifully Functional</h1>
				
			</div>
			<hr>
			<a href="#" data-id="section2" class="btn btn-default bolt-button-light scroll-link" style="margin-top:10px;">
				Portfolio &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
			</a>
		</div>

	</div>
	<!-- End Hero -->

	<!-- Begin Summary -->
	<section id="section1">
	
		<div class="summary">

			<div class="container">

				<!-- Content -->
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1" >
						<h3 data-scroll-reveal="enter left and move 50px over 1.2s">Beautifully Functional</h3>
						<hr data-scroll-reveal>
						<p data-scroll-reveal>
							68a Designs is principally guided by our clients and their needs. People are the inspiration for our creativity 
							and we embrace every project with the  passion and enthusiasm as if it was our own home.
 						</p>
 						<div id="index-quote" data-scroll-reveal="enter left and move 50px over 1.2s">
 							<p><b>“Design is not just what it looks and feels like. Design is how it works”.</b> <br><span class="fancy">Steve Jobs</span></p>
 						</div>
						<a data-scroll-reveal="enter right and move 50px over 1.2s" href="#" data-id="section3" class="btn btn-default bolt-button-dark scroll-link">
							About us &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
						</a>
					</div>
				</div>

			</div>

		</div>

	</section>
	<!-- End Summary -->



	<!-- Begin Portfolio -->
	<section id="section2">

		<div class="container portfolio">

			<!-- Page Title -->
			<div class="row page-title-2">
				<div class="col-lg-12">
					<h3>Furniture Gallery</h3>
					<hr>
				</div>
			</div>


			<!-- Gallery Items -->
			<div class="container port-holder" data-scroll-reveal="enter top and move 50px over 1.5s">
			  <ul id="myPortfolio" class="no-padding">

			  	<?php 
			  	/*shuffle($images);*/ //Random Order
			  	foreach($projects as $project_id => $project) 
			  		{ ?>

				  	<li class="item col-xs-4 no-padding" >

					    <a href='<?php echo $project["link"]; ?>' >
					    	<img class="example-image" src='<?php echo $project["img-thumb"]; ?>' alt='<?php echo $project["title"]; ?>' />
					    	<span class="portfolio-hover">
							  <span>
							  	<span class="portfolio-title"><?php echo $project["title"]; ?></span><br>
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

<section id="testies">
<div class="bs-example">
    <div id="testimonials" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#testimonials" data-slide-to="0" class=""></li>
        <li data-target="#testimonials" data-slide-to="1" class=""></li>
        <li data-target="#testimonials" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item">
          <img src="img/quote/bg3.jpg" alt="" >
          <div class="carousel-caption" id="test-1">
            <p>
            	"Unlike most Kitchen designer's, Jillian listens to the requirements of her clients and then produces a design with unique 
            	flair and attention to detail. I would highly recommend Jillian to anyone contemplating a new kitchen."
            </p>
            <h3>C. Reynolds, <span class="test-span">Cobham</span></h3>
          </div>
        </div>
        <div class="item">
       	  <img src="img/quote/bg2.jpg" alt="" >
          <div class="carousel-caption" id="test-2">
            <p>
            	“I am so proud of my home and the work we have done to it. To make it as beautiful as it is now without Jillian would of been 
            	impossible. She helped us see all our options and transformed the space beyond what we could of imagined. Thank you for being 
            	part of our project and now part of our family. We couldn’t of achieved this without you”. 
 			</p>
            <h3>Lady Carol Marks, <span class="test-span">Windsor</span></h3>
          </div>
        </div>
        <div class="item active">
        <img src="img/quote/bg3.jpg" alt="" >
          <div class="carousel-caption" id="test-3">
            <p>
            	"Greatly appreciated all the care and consideration Jillian put in to the design of our kitchen. Every aspect was carefully thought
            	 out and efficiently worked through. Many thanks!"
            </p>
            <h3>M. Brown, <span class="test-span">Chertsey</span></h3>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#testimonials" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#testimonials" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
  </section>




	<!-- Begin Call to Action -->
	<div class="cta">

		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-lg-offset-1">
					<p>
						Interested in working with us?
					</p>
				</div>
				<div class="col-lg-2">
					<a href="#" data-id="section6" class="btn btn-default bolt-button-cta scroll-link">
						Contact
					</a>
				</div>
				<div class="col-lg-4">
					<p>
						Ready when you are.
					</p>
				</div>
			</div>

		</div>

	</div>
	<!-- End Call to Action -->

	<!-- Begin About Us -->
	<section id="section3">

		<div class="about">

			<div class="container">

				<div class="row">

					<!-- Page Title -->
					<div class="col-lg-10 col-lg-offset-1 page-title-2">
						<h3>About</h3>
						<hr>
						<p>A passionate team of creative &amp; innovative minds.</p>
					</div>

					<!-- Who We Are-->
					<div data-scroll-reveal="enter top and move 50px over 1.2s" class="col-sm-6">
						<h5>Who We Are</h5>
						<p>
							68a Designs is a boutique Interior Design company founded on state- of- the- art designs, quality 
							products, professional installations combined with unsurpassed customer service.
						</p>
						<p>
							Designing with the use of cutting edge technology to create amazing true- to- life perspectives 
							transforming your vision into a reality.
						</p>
						<p>
							A hand-picked blend of elite British, German & Italian reputable manufacturers allows us to deliver a 
							vast array of unique product selection and quality guaranteed décor.
						</p>
					</div> 

					<!-- Goals -->
					<div data-scroll-reveal="enter bottom and move 50px over 1.2s" class="col-sm-6">
						<h5>Goals</h5>
						<p>
							At 68a Designs we provide clients the level of attention, creativity and price competitiveness that they deserve. 
							Our attention to detail allows us to tailor to your exact needs. 
						</p>
						<p>
							Our job is to manage every aspect of the project
							 to transfer the burden of designing and installing from your shoulders and onto ours. With minimal disruption 
							 to your home and day to day living, making it as stress free as possible. 

						<p>
							 68a Designs is fully committed to 
							 outstanding customer service. We work exclusively with the highest level of Traditional Bespoke and German 
							 furniture fitters. Their product knowledge and trustworthy reputations gives you added reassurance and complete 
							 peace of mind.
						</p>
					</div>


				</div>

			</div>

		</div>

	</section>
	<!-- End About Us -->

	<!-- Begin Team -->
	<section id="section4">

		<div class="team">

			<div class="container">

				<div class="row">

					<!-- Page Title -->
					<div class="col-lg-12 page-title">
						<h3>The Team</h3>
					</div>

					<!-- The Team -->
					<div data-scroll-reveal="enter bottom and move 50px over 1.2s" class="col-sm-12 team-text">
						<p>
							With over 30 years combined experience, the 68a Designs team work on the principles of technical understanding and 
							up-to-date product knowledge.
						</p>
						<p> Lead by Founder <b>Jillian Knowlton</b>, who brings an intense passion, infectious energy
							 and a high level of attention to detail, the team works together to produce “Beautifully Functional” spaces.
						</p>
						<p>
							 Their outstanding professionalism and dedication to each and every project, from inception to completion, displays 
							 their expertise and insight in an ever-changing market.
						</p>
						
					</div>

					<div id="content-holder">

						<!-- Team Member 1 -->
						<div data-scroll-reveal="enter top and move 50px over 1s" class="col-md-4 team-member-holder">
							<img src="img/team/jillian.png" alt="...">
							<div class="team-info-holder">
								<h3 class="team-name">Jillian Knowlton</h3>
								<p class="team-job">Director / Designer</p>
							</div>
							<div class="team-about">
								Awarding winning and professionally trained Interior Designer Jillian Knowlton believes “kitchens are the heart and
							 soul of the home.” She prides herself on creating warm, inviting spaces that embrace the sense of family.

							</div>
						</div>

						<!-- Team Member 2 -->
						<div data-scroll-reveal="enter bottom and move 50px over 1s" class="col-md-4 team-member-holder">
							<img src="img/team/lora.png" alt="...">
							<div class="team-info-holder">
								<h3 class="team-name">Lora Ekkel</h3>
								<p class="team-job">Manager</p>
							</div>
							<div class="team-about">
								With many years of experience in a variety of office management environments, Lora brings a strong leadership platform
								 to the team. “ I accredit that organization is the key to a successful installation”, says Lora, “and ever project 
								 deserves the same amount of time and attention in order to achieve the best results”.

							</div>
						</div>

						<!-- Team Member 3 -->
						<div data-scroll-reveal="enter top and move 50px over 1s" class="col-md-4 team-member-holder">
							<img src="img/team/phil.png" alt="...">
							<div class="team-info-holder">
								<h3 class="team-name">Phil Rawstron</h3>
								<p class="team-job">Contractor/Project Manager</p>
							</div>
							<div class="team-about">
								Being a general contractor and decorator for over 2 decades has allowed Phil to come to the conclusion that the finishing 
								is the most important part of a build. “That attention to the smallest detail and finishing touches is what can make or 
								break a job. It doesn’t matter how big or small it is. Every last inch of the project should be treated as if you were 
								the one that had to look at it once it was complete.
							</div>
						</div>

					</div>

				</div>

			</div>

		</div>

	</section>
	<!-- End Team -->


	<!-- Begin Portfolio -->
	<section id="press">

		<div class="container portfolio">

			<!-- Page Title -->
			<div class="row">
				<div class="text-center">
					<div class="col-md-6 col-md-offset-3">
						<h4>Press</h4>
						<hr>
					</div>
				</div>
			</div>


			<!-- Portfolio Items -->
			<div class="container port-holder">
			  <ul id="myPress" class="no-padding">

			    <li class="item branding col-xs-3 no-padding" data-scroll-reveal="enter top and move 50px over 1.5s"> 
			    	<a data-toggle="modal" href="press/press-1.html" data-target="#myModal">
						<img src="img/Press/EKBB-Nov-2013-sm.jpg" alt="..." class="press-img"/>
					</a>
			    </li>
			    <li class="item web col-xs-3 no-padding">
			    	<a data-toggle="modal" href="press/press-2.html" data-target="#myModal" data-scroll-reveal="enter top and move 50px over 2s">
						<img src="img/Press/Beautiful-Kitchens-Sept-sm1.jpg" alt="..." class="press-img"/>
					</a>
			    </li>
			    <li class="item print col-xs-3 no-padding">
			    	<a data-toggle="modal" href="press/press-3.html" data-target="#myModal" data-scroll-reveal="enter top and move 50px over 2.5s">
						<img src="img/Press/Beautiful-Kitchens-Sept-sm.jpg" alt="..." class="press-img"/>
					</a>
			    </li>
			    <li class="item branding illustrations col-xs-3 no-padding" data-scroll-reveal="enter top and move 50px over 3s">
			    	<a data-toggle="modal" href="press/press-4.html" data-target="#myModal">
						<img src="img/Press/Utopia-Kitchens-and-Bathrooms-Sept-2012-sm.jpg" alt="..." class="press-img"/>
					</a>
			    </li>

			  </ul>
			</div>

		</div>

	</section>
	<!-- End Portfolio -->

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-body"></div>
	        </div> <!-- /.modal-content -->
	    </div> <!-- /.modal-dialog -->
	</div> <!-- /.modal -->

	<!-- Begin Contact -->
	<section id="section6">

		<div class="contact">

			<div class="container">

				<!-- Page Title -->
				<div class="col-lg-10 col-lg-offset-1 page-title">
					<h3>Contact</h3>
					<hr>
					<p>Get in touch with us!</p>
				</div>


				<!-- Address -->

				<div class="col-md-5 col-md-offset-1">
					
					<p class="contact-info">
						<button type="button" class="btn btn-default address" data-toggle="tooltip" data-placement="bottom" title="Go To Link" >
						<a href="https://www.google.com.hk/maps/place/68A+High+St/@51.393114,-0.44865,17z/data=!3m1!4b1!4m2!3m1!1s0x48767435d48ca6d7:0x751e0f0b6ad7a392" target="_blank"><em><i class="ion-pin"></i> 68a, High Street Shepperton,<br> Surrey, TW17 9AU</em></a>
						</button>
					</p>
					
				</div>

				<!-- Phone Number -->
				<div class="col-md-2">
					<p class="contact-info">01932 245 986</p>
				</div>

				<!-- Email -->
				<div class="col-md-3">
					<p class="contact-info-email"><a href="mailto:enquiries@68adesigns.com"><em>enquiries@68adesigns.com</em></a></p>
				</div>

				<?php 
				if($_GET["status"] == "thanks") { ?>

					<div class="col-md-12 thanks-message">
						<h1><i class="ion-ios7-paperplane"></i></h1>
						<h2>Thanks we got your message! We'll be in touch soon!</h2>
						
					</div>
					
				<?php } else { ?>

				    <div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-3">
						
								<!-- Form -->
								<form id="defaultForm" name="form3" method="post" accept-charset="UTF-8" novalidate action="https://joeli89.wufoo.com/forms/q1v3kgrd1amochb/#public" autocomplete="off" enctype="multipart/form-data" class="form-horizontal" role="form">

									<div class="form-group" data-scroll-reveal="enter top and move 50px over 1.5s">
				                        <div class="col-lg-8">
				                           	<input id="Field1" name="Field1" type="text" class="field text medium form-control" value="" maxlength="255" tabindex="1" onkeyup="" placeholder="Full Name" />
				                        </div>
				                        
				                    </div>

				                    <div class="form-group" data-scroll-reveal="enter bottom and move 50px over 1.5s">

				                        <div class="col-lg-8">
				                            <input id="inputEmail" name="Field2" placeholder="Email" type="email" spellcheck="false" class="field text medium form-control" value="" maxlength="255" tabindex="2" />
				                        </div>
				                    </div>

									<div class="form-group" data-scroll-reveal="enter top and move 50px over 1.5s">
										<div class="col-lg-8">
											  
											<textarea 
												id="inputMessage"
												name="Field3"
												class="field textarea medium form-control form-control-message"
												spellcheck="true"
												rows="5" cols="50"
												placeholder="Message"
												tabindex="3"
												onkeyup=""
											 ></textarea>

										</div>
									</div>

									<div data-scroll-reveal="enter bottom and move 50px over 1.7s" class="form-group">
										<div class="col-lg-2 ">
											<button type="submit" class="btn btn-default bolt-button-send" id="saveForm" name="saveForm">
												Send
											</button>
										</div>
									
									</div>

									<div style="display:none;">
									 	<label for="comment">Do Not Fill This Out</label>
										<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
										<input type="hidden" id="idstamp" name="idstamp" value="rNQ8nWW08w49heRP6bHX3pUtphecL6Fy3lXXd3NPtLo=" />
									</div>

								</form>

							</div>
						</div> <!-- End of Row -->
					</div> <!-- End of Container -->

				<?php } ?>

			</div>

		</div>

	</section>
	<!-- End Contact -->


	<section id="section8">

	<div class="awards">

		<div class="container">
			<h5>Awards & Acclimations</h5>
			<hr>
			<div class="col-md-3 col-md-offset-2 col-sm-4"><a href="http://www.kbbreview.com/"><img src="img/award.png" class="img-responsive kbb" data-toggle="tooltip" data-placement="bottom" title='KBB Review Award'></a></div>
			<div class="col-md-3 col-sm-4"><a href="http://www.sbid.org/"><img src="img/sbid.png" class="img-responsive sbid" data-toggle="tooltip" data-placement="bottom" title='SBID'></a></div>	
			<div class="col-md-3 col-sm-4"><a href="http://www.nkba.org/"><img src="img/NKBA_logo.png" class="img-responsive nkba" data-toggle="tooltip" data-placement="bottom" title='National Kitchen & Bath Association'></a></div>			
		</div>
	</div>

	</section>
	<!-- End AWARDS -->


<?php include('inc/footer.php'); ?>