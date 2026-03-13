<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Demo</title>



    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">

        <?php include 'inc/styles.php'; ?>

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">

    <?php include 'inc/nav.php'; ?>


        <section class="top-sec centred" style="    background: url(images/topbg.jpg);
        background-position: center;
        padding: 150px 0;">
            <div class="container">
                <div class="row clearfix">
                    <h2 style="color:#0c406c; font-size:42px; font-weight:bold; text-transform:uppercase"> Blog
                    </h2>
                </div>
            </div>
        </section>


        <!-- team-section -->
        <section class="team-section pt_110 pb_70" style="position: relative;">
            <div class="pattern-layer" style="background-image: url(images/shape/shape-6.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">


                    <div class="col-sm-12">
                        <div class="blog-sidebar mr_40 mb_30">


                            <div class="sidebar-widget tags-widget mb_45">
                                <div class="widget-title mb_20">
                                    <h3>Filter by Tags</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="#">RMC News</a></li>
                                        <li><a href="#">General News</a></li>
                                        <li><a href="#">India Nursing</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">Nursing Jobs</a></li>
                                        <li><a href="#">Nursing Students</a></li>
                                        <li><a href="#">Germany Jobs</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="blogbxs" style="display:flex; gap:20px">

                        <figure class="image"><a href="#"><img src="images/news/news-4.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3> What German Hospitals Look for When Hiring International Nurses? </h3><br>
                            <p>Germany faces a growing demand for skilled nurses, opening doors for international
                                professionals. But what exactly do hospitals prioritize when selecting candidates from
                                abroad? This article breaks down the key qualifications, language expectations, and
                                personal traits German employers value most.</p><br>
                            <div class="btn-box"><a href="#" class="theme-btn btn-one"><span>Read More</span></a></div>
                        </div>

                    </div>

                    <hr>

                    <div class="blogbxs" style="display:flex; gap:20px">

                        <figure class="image"><a href="#"><img src="images/news/news-5.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3> How Indian Nurses Can Build a Rewarding Career in Germany? </h3><br>
                            <p>With excellent pay, advanced medical infrastructure, and high living standards, Germany
                                is an attractive destination for Indian nurses. Learn how you can leverage your
                                education, gain the right certifications, and adapt to German workplace culture to build
                                a successful nursing career abroad.</p><br>
                            <div class="btn-box"><a href="#" class="theme-btn btn-one"><span>Read More</span></a></div>
                        </div>

                    </div>

                    <hr>


                    <div class="blogbxs" style="display:flex; gap:20px">

                        <figure class="image"><a href="#"><img src="images/news/news-6.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3> From Application to Arrival: The Process of Working as a Nurse in Germany? </h3><br>
                            <p>Dreaming of working as a nurse in Germany? From preparing documents and clearing language
                                exams to securing your visa and finally landing in Germany, this guide walks you through
                                each step of the journey — making your transition smoother and stress-free.</p><br>
                            <div class="btn-box"><a href="#" class="theme-btn btn-one"><span>Read More</span></a></div>
                        </div>

                    </div>


                </div>




            </div>
    </div>



    </section>
    <!-- team-section end -->


 


    <?php include 'inc/footer.php'; ?>



<!--Scroll to top-->
<div class="scroll-to-top">
    <svg class="scroll-top-inner" viewbox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>

</div>


<?php include 'inc/scripts.php'; ?>

</body><!-- End of .page_wrapper -->

</html>