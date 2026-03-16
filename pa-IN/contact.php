<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Demo</title>

<base href="../">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
        
        <?php include '../inc/styles.php'; ?>

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">

    <?php include '../inc/pa-nav.php'; ?>


        <section class="top-sec centred" style="    background: url(images/topbg.jpg);
        background-position: center;
        padding: 150px 0;">
            <div class="container">
                <div class="row clearfix">
                    <h2 style="color:#0c406c; font-size:42px; font-weight:bold; text-transform:uppercase"> Contact Us
                    </h2>
                </div>
            </div>
        </section>


        <!-- contact-section -->
        <section class="contact-section pt_80 pb_80" style="position:relative;">
            <div class="pattern-layer" style="background-image: url(images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-md-5 info-column" style="    background: var(--secondary-color);">
                            <div class="info-box">
                                <h3>Kontaktinformationen</h3>
                                <div class="single-item"
                                    style="display:flex; align-items: center; width: 100%; gap: 25px;">
                                    <div class="icon-box"><img src="images/icons/icon-27.png" alt=""></div>
                                    <div>
                                        <h4>Hauptverwaltung</h4>
                                        <p>RMC Nurses GmbH Alt Oberliederbach 35 65835 Liederbach am Taunus Germany</p>
                                    </div>
                                </div>

                                <div class="single-item"
                                    style="display:flex; align-items: center; width: 100%; gap: 25px;">
                                    <div class="icon-box"><img src="images/icons/icon-28.png" alt=""></div>
                                    <div>
                                        <h4>E-Mail-Adresse</h4>
                                        <p><a href="mailto:info@rmcnurses.de">info@rmcnurses.de</a> </p>
                                    </div>
                                </div>
                                <div class="single-item"
                                    style="display:flex; align-items: center; width: 100%; gap: 25px;">
                                    <div class="icon-box"><img src="images/icons/icon-29.png" alt=""></div>
                                    <div>
                                        <h4>Telefonnummer</h4>
                                        <p><a href="tel:+49 999 7865 43232">+49 999 7865 43232</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 content-column">
                            <div class="form-inner">
                                <form method="post" action="sendemail.php" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Name <span>*</span></label>
                                            <input type="text" name="username" placeholder="" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Phone <span>*</span></label>
                                            <input type="text" name="phone" placeholder="" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Email Address <span>*</span></label>
                                            <input type="email" name="email" placeholder="" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Subject <span>*</span></label>
                                            <input type="text" name="subject" placeholder="" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Write Message <span>*</span></label>
                                            <textarea name="message" placeholder=""></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one" name="submit-form">Send
                                                Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->
 

        <?php include '../inc/pa-footer.php'; ?>



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewbox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>

    </div>


    <?php include '../inc/scripts.php'; ?>

</body><!-- End of .page_wrapper -->

</html>