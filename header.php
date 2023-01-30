<!-- HEADER AREA START (header-5) -->
<header
    class="ltn__header-area ltn__header-5 ltn__header-8 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-transparent gradient-color-4---">
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area section-bg-6">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li><a href="mailto:<?php echo $infoSistema->email1; ?>"><i class="icon-mail"></i>
                                    <?php echo $infoSistema->email1; ?>
                                </a></li>
                            <li><a href="<?php echo SITE_URL; ?>/contato"><i class="icon-placeholder"></i>
                                    <?php echo $infoSistema->endereco; ?>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right text-right">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li>
                                    <!-- ltn__social-media -->
                                    <div class="ltn__social-media">
                                        <ul>
                                            <li><a href="<?php echo $infoSistema->facebook; ?>" title="Facebook"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="<?php echo $infoSistema->twitter; ?>" title="Twitter"><i
                                                        class="fab fa-twitter"></i></a></li>

                                            <li><a href="<?php echo $infoSistema->instagram; ?>" title="Instagram"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="<?php echo $infoSistema->linkedln; ?>" title="Dribbble"><i
                                                        class="fab fa-linkedln"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-top-area end -->

    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="<?php echo SITE_URL; ?>"><img
                                    src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>"
                                    class="logo-resize" alt="Logo"></a>
                        </div>
                    </div>
                </div>
                <div class="col header-menu-column menu-color-white---">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li><a href="<?php echo SITE_URL; ?>">Início</a></li>
                                    <li><a href="#sessao01">Sobre nós</a></li>
                                    <li><a href="#servicosdiv">Serviços</a></li>
                                    <li><a href="#parceirosdiv">Parceiros</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="ltn__header-options ltn__header-options-2 ">
                    <!-- header-extra-button -->
                    <div class="ltn__header-extra-btn">
                        <a href="#contato"
                            class="btn theme-btn-1 btn-effect-1 d-none d-md-block btn-contato">Contato</a>
                    </div>
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path
                                    d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                    id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path
                                    d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                    id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>
<!-- HEADER AREA END -->