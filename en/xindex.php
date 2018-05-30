<?php
require_once("../models/config.php");
unset($_SESSION["referer"]);
require_once 'head.php';
?>
<title>HitchMe &hearts; Join and meet thousands of singles from your city</title>
<meta name="keywords" content="SpeedDating, Speed Dating, Speed-dating, Berlin" />
<meta name="description" content="The biggest Speed Dating events in Berlin for English and German speakers. Join thousands of singles and find your soul mate.">

</head>
<body class="homepage">
<?php
include_once("../models/analyticstracking.php");
require_once 'header.php';
?>
<section id="main-slider" class="no-margin">
    <div class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1"><?= lang('SLIDE1_H1'); ?></h1>
                                <h2 class="animation animated-item-2"><i class="glyphicon glyphicon-heart"></i> <?= lang('SLIDE1_H21'); ?></h2>
                                <h2 class="animation animated-item-2"><i class="glyphicon glyphicon-heart"></i> <?= lang('SLIDE1_H22'); ?></h2>
                                <h2 class="animation animated-item-2"><i class="glyphicon glyphicon-heart"></i> <?= lang('SLIDE1_H23'); ?></h2>
                                <a class="btn-slide animation animated-item-3 main_button" href="<?= strtolower($lang['NAME']) ?>/events-list.php"><?= lang('BOOK_SPEED_DATING'); ?></a>
                            </div>
                        </div>

                        <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img1.png" class="img-responsive">
                            </div>
                        </div>-->

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1"><?= lang('SLIDE2_H1'); ?></h1>
                                <h2 class="animation animated-item-2"><?= lang('SLIDE2_H21'); ?></h2>
                                <a class="btn-slide animation animated-item-3 main_button" href="<?= strtolower($lang['NAME']) ?>/events-list.php"><?= lang('BOOK_SPEED_DATING'); ?></a>
                            </div>
                        </div>

                        <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img2.png" class="img-responsive">
                            </div>
                        </div>-->

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1"><?= lang('SLIDE3_H1'); ?></h1>
                                <h2 class="animation animated-item-2"><?= lang('SLIDE3_H21'); ?></h2>
                                <a class="btn-slide animation animated-item-3 main_button" href="<?= strtolower($lang['NAME']) ?>/events-list.php"><?= lang('BOOK_SPEED_DATING'); ?></a>
                            </div>
                        </div>
                        <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img3.png" class="img-responsive">
                            </div>
                        </div>-->
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2><?= lang('HOW_IT_WORKS'); ?></h2>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i><img src="images/dating_1_red.png" width="80" height="80" alt="fill profile"></i>
                        <h2>1- <?= lang('STEP1_H2'); ?></h2>
                        <h3><?= lang('STEP1_H3'); ?></h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i><img src="images/dating_2_red.png" width="80" height="80" alt="select event"></i>
                        <h2>2- <?= lang('STEP2_H2'); ?></h2>
                        <h3><?= lang('STEP2_H3'); ?></h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i><img src="images/dating_3_red.png" width="90" height="90" alt="join the speed dating"></i>
                        <h2>3- <?= lang('STEP3_H2'); ?></h2>
                        <h3><?= lang('STEP3_H3'); ?></h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i><img src="images/dating_4_red.png" width="90" height="90" alt="choose your favorite"></i>
                        <h2>4- <?= lang('STEP4_H2'); ?></h2>
                        <h3><?= lang('STEP4_H3'); ?></h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i><img src="images/dating_5_red.png" width="90" height="90" alt="exchange matching"></i>
                        <h2>5- <?= lang('STEP5_H2'); ?></h2>
                        <h3><?= lang('STEP5_H3'); ?></h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i><img src="images/dating_6_red.png" width="90" height="90" alt="meeting"></i>
                        <h2>6- <?= lang('STEP6_H2'); ?></h2>
                        <h3><?= lang('STEP6_H3'); ?></h3>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->
        <div class="center wow fadeInDown col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 ">
            <a href="<?= strtolower($lang['NAME']) ?>/events-list.php"><img src="images/book-now.png" height="100" alt="book now"></a>
        </div>

    </div><!--/.container-->
</section><!--/#feature-->

<section id="recent-works">
    <div class="container">
        <div class="wow fadeInDown">
            <div class="center"><h2><?= lang('WHY_SPEEDDATE'); ?></h2></div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="mini-icon">
                        <i class="icon-clock2"></i><h3><?= lang('WHY1'); ?></h3>
                    </div>
                    <div class="mini-icon">
                        <i class="icon-heart-broken"></i><h3><?= lang('WHY2'); ?></h3>
                    </div>
                    <div class="mini-icon">
                        <i class="icon-location2"></i><h3><?= lang('WHY3'); ?></h3>
                    </div>
                    <div class="mini-icon">
                        <i class="icon-sad2"></i><h3><?= lang('WHY4'); ?></h3>
                    </div>
            </div>
            <div class=" leftcol-sm-6 col-md-6 col-lg-6">
                <div class="mini-icon">
                    <i class="icon-stopwatch"></i><h3><?= lang('WHY5'); ?></h3>
                </div>
                <div class="mini-icon">
                    <i class="fa fa-group"></i><h3><?= lang('WHY6'); ?></h3>
                </div>
                <div class="mini-icon">
                    <i class="icon-home"></i><h3><?= lang('WHY7'); ?></h3>
                </div>
                <div class="mini-icon">
                    <i class="fa fa-user-secret"></i><h3><?= lang('WHY8'); ?></h3>
                </div>
                <div class="mini-icon">
                    <i class="fa fa-lock"></i><h3><?= lang('WHY9'); ?></h3>
                </div>
                <div class="mini-icon">
                    <i class="icon-wink2"></i><h3><?= lang('WHY10'); ?></h3>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#recent-works-->

<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2><?= lang('PARTNER_SOMEWHERE'); ?></h2>
            <div class="userCarousel carousel slide" id="myCarousel">
                <div class="carousel-inner">

                <?php
                $picList = getProfilePicsList();
                $active = ' active';
                foreach($picList as $profilePic){
                    echo '<div class="item'.$active.'">
                        <div class="col-lg-4 col-xs-4 col-md-4 col-sm-4">
                            <a href="'. strtolower($lang['NAME']). '/view-profile.php?id='.$profilePic['user_id'].'"><img src="'.USERSIMAGEPATH.$profilePic['user_id'].'/'.$profilePic['profile_pic'].'" alt="user pircture" class="img-responsive" ></a></div>
                    </div>';
                    $active = '';
                }
                ?>

                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>


        </div>
    </div><!--/.container-->
</section><!--/#services-->
<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h2><?= lang('SUPPORT_TITLE'); ?></h2>
                        <p><?= lang('SUPPORT_TEXT'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#conatcat-info-->

<?php
require_once 'footer.php';
?>
<script src="js/usersCarousel.js"></script>

</body>
</html>