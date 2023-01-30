<?php include "includes.php"; ?>
<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <?php include "description.php"; ?>
    <link rel="stylesheet"
        href="<?php echo SITE_URL; ?>/assets/css/bootstrap.css?<?php echo filemtime('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet"
        href="<?php echo SITE_URL; ?>/assets/css/main.css?<?php echo filemtime('assets/css/main.css') ?>">
    <?php include "inc-tagmanager-head.php"; ?>
</head>

<body>
    <?php include "inc-tagmanager-body.php"; ?>
    <?php include "header.php"; ?>
    <main>
        <!-- |==========================================| -->
        <!-- |=====|| Page Title Start ||===============| -->
        <section class="page_title page_title__img-01"
            style="background: url(<?php echo SITE_URL; ?>/img/<?php echo $contato->paralax_1; ?>);">
            <div class="page_title__padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page_title__content">
                                <h1>Enviado Com Sucesso</h1>
                                <div class="page_title__bread-crumb">
                                    <ul>
                                        <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
                                        <li><a href="<?php echo SITE_URL; ?>/contato">Fale Conosco</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="contact_page1">
            <div class="content_box_100">
                <div class="container">
                    <div class="row mb-50">
                        <div class="col-md-12">
                            <div class="contact_page1__title text-center">
                                <h2>Sua mensagem foi enviada com sucesso!</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>
    <?php include "footer.php"; ?>

    <script src="<?php echo SITE_URL; ?>/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/vendor/jquery.waypoints.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/vendor/jquery.easing.1.3.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/plugins.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/wow.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/jquery.meanmenu.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/one-page-nav-min.js"></script>
    <!-- Ajax Contact js -->
    <script src="<?php echo SITE_URL; ?>/assets/js/ajax-contact.js"></script>
    <!-- Main js -->
    <script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>

</body>

</html>