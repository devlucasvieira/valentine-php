<?php
require_once "Class/textos.class.php";
$textosRodape = Textos::getInstance(Conexao::getInstance());
$puxaTextosFooter = $textosRodape->rsDados(50); ?>

<footer class="footer1">
    <?php include 'flutuante/flutuante.php' ?>
    <div class="footer1__top">
        <div class="content_box_100_50">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-lg-3">
                        <div class="footer1__item footer1__item--02 mb-50">
                            <h3>Sobre Nós</h3>
                            <ul>
                                <li>
                                    <?php echo $puxaTextosFooter->texto; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer1__item footer1__item--02 mb-50">
                            <h3>Site Map</h3>
                            <ul>
                                <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/sobre">Sobre</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/blog">Blog</a></li>
                                <!-- <li><a href="<?php echo SITE_URL; ?>/convenios">Convênios</a></li> -->
                                <li><a href="<?php echo SITE_URL; ?>/contato">Contato</a></li>
                                <li><a href="<?php echo SITE_URL; ?>/downloads">Downloads</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <nav>
                            <div class="footer1__item footer1__item--03 mb-50">
                                <h3>Localização</h3>
                                <ul>
                                    <li><span>
                                            <?php echo $infoSistema->endereco; ?>
                                        </span></li>
                                    <li><span>
                                            <?php echo $infoSistema->email1; ?>
                                        </span></li>
                                    <li><span>
                                            <?php echo $infoSistema->telefone1; ?>
                                        </span></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer1__item footer1__item--04 mb-50">
                            <h3>Instagram.</h3>
                            <div class="footer1__social">
                                <?php if (isset($infoSistema->instagram) && !empty($infoSistema->instagram)) { ?>
                                    <a href="<?php echo $infoSistema->instagram; ?>" target="_blank" class="ico-instagram"><i
                                            class="fab fa-instagram"></i></a>
                                <?php } ?>
                                <?php if (isset($infoSistema->youtube) && !empty($infoSistema->youtube)) { ?>
                                    <a href="<?php echo $infoSistema->youtube; ?>" target="_blank" class="ico-youtube"><i
                                            class="fab fa-youtube"></i></a>
                                <?php } ?>
                                <?php if (isset($infoSistema->twitter) && !empty($infoSistema->twitter)) { ?>
                                    <a href="<?php echo $infoSistema->twitter; ?>" target="_blank" class="ico-twitter"><i
                                            class="fab fa-twitter"></i></a>
                                <?php } ?>
                                <?php if (isset($infoSistema->facebook) && !empty($infoSistema->facebook)) { ?>
                                    <a href="<?php echo $infoSistema->facebook; ?>" target="_blank" class="ico-facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                                <?php } ?>
                                <?php if (isset($infoSistema->linkedln) && !empty($infoSistema->linkedln)) { ?>
                                    <a href="<?php echo $infoSistema->linkedln; ?>" target="_blank" class="ico-linkedin"><i
                                            class="fab fa-linkedin-in"></i></a>
                                <?php } ?>
                                <?php if (isset($infoSistema->pinterest) && !empty($infoSistema->pinterest)) { ?>
                                    <a href="<?php echo $infoSistema->pinterest; ?>" target="_blank" class="ico-pinterest"><i
                                            class="fab fa-pinterest"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer1__bottom">
        <?php include "copy.php"; ?>
    </div>
</footer>

<a href="#" class="scrollToTop">
    <i class="fas fa-level-up-alt"></i>
</a>