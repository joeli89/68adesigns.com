<?php 
$pageTitle = "Healthy Selfie | Health &amp; Fitness App";
$section = "contact";
include('inc/header.php'); ?> 
		
        <?php if($_GET["status"] == "thanks") { ?>

             <!-- SUCCESS PAGE -->
             <div class="row">
                <div class="col-sm-12 contact">
                    <div class="alert alert-success animated slideInDown delay-1" role="alert">
                            <h1>Sweet, we got it! <i class="fa fa-thumbs-o-up"></i></h1>
                            <h4>We'll be in touch soon. Thanks.</h4>
                          </div>
                    
                    <h3>How to contact us</h3>
                    <p>
                        Let's us know what you think? Interested in getting involved? Get in touch!
                    </p>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-6 col-md-offset-3 contact-form">
                        
                        <h4>Send us another message</h4>
                        <form method="post" action="assets/contact.php">
                            <input type="text" name="email" placeholder="Email..." class="contact-email">
                            <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
                            <textarea name="message" placeholder="Message..."></textarea>
                            <button type="submit">Send</button>
                        </form>
                        
                    </div>


                </div>

        <?php } else{ ?>

                <?php if($_GET["try"] == "again") { ?>

                        <!-- ERROR PAGE -->
                        <div class="container" id="contactUs">
                            <div class="row">
                                <div class="col-sm-12 contact">
                                    <div class="alert alert-danger animated slideInDown delay-1" role="alert">
                                        <h1>Houston we have a problem. <i class="fa fa-thumbs-o-down"></i></h1>
                                        <h4>Please try again, and make sure all your details are entered correctly. Thanks.</h4>
                                    </div>

                                    <h3>How to contact us</h3>
                                    <p>
                                        Let's us know what you think? Interested in getting involved? Get in touch!
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 contact-form">
                                    
                                    <h4>Send us a message</h4>
                                    <form method="post" action="assets/contact.php">
                                        <input type="text" name="email" placeholder="Email..." class="contact-email">
                                        <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
                                        <textarea name="message" placeholder="Message..."></textarea>
                                        <button type="submit">Send</button>
                                    </form>
                                    
                                </div>


                            </div>
                        </div>

                <?php }else { ?>

                    <!-- NORMAL CONTACT PAGE -->
                    <div class="container" id="contactUs">
                        <div class="row">
                            <div class="col-sm-12 contact">

                                <h3>How to contact us</h3>
                                <p>
                                	Let's us know what you think? Interested in getting involved? Get in touch!
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 contact-form">
                            	
                                <h4>Send us a message</h4>
                                <form method="post" action="assets/contact.php">
                                    <input type="text" name="email" placeholder="Email..." class="contact-email">
                                    <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
                                    <textarea name="message" placeholder="Message..."></textarea>
                                    <button type="submit">Send</button>
                                </form>
                                
                            </div>


                        </div>
                    </div>

        <?php } ?>
    <?php } ?>

        
<?php 
include('inc/footer.php'); ?>