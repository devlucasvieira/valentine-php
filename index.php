<?php

include "includes.php";
include "Class/banners.class.php";
include "Class/textos.class.php";
include "Class/galerias.class.php";
include "Class/doutores.class.php";
include "Class/blogs.class.php";
include "Class/parceiros.class.php";
include "Class/servicos.class.php";

$parceiros = Parceiros::getInstance(Conexao::getInstance());
$blogs = Blogs::getInstance(Conexao::getInstance());
$doutores = Doutores::getInstance(Conexao::getInstance());
$bannersIndex = Banners::getInstance(Conexao::getInstance());
$textos = Textos::getInstance(Conexao::getInstance());
$galerias = Galerias::getInstance(Conexao::getInstance());
$servicos = Servicos::getInstance(Conexao::getInstance());

// Informações
$puxaBanners = $bannersIndex->rsDados();
$sessao1 = $textos->rsDados(1, '', '', '', 'S');
$sessao2 = $textos->rsDados(2, '', '', '', 'S');
$sessao3 = $textos->rsDados(3, '', '', '', 'S');
$sessao4 = $textos->rsDados(4, '', '', '', 'S');
$puxaParceiros = $parceiros->rsDados('', '', '5');

// Envio de formulário
$destinatario      = $infoSistema->email_recebimento;
$remetente         = $infoSistema->email_recebimento;
$assunto           = 'Contato pelo site';
$redirecionar_para = '/';
/**** FIM DAS ALTERAÇÕES ****/

if (isset($_POST['acao']) && $_POST['acao'] == "enviarMensagem") {
    $erros = [];
    if (empty($_POST['nome']))
        $erros[] = 'Nome não preenchido';

    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        $erros[] = 'E-mail não preenchido ou inválido';

    if (empty($_POST['telefone']))
        $erros[] = 'Telefone não preenchido';

    // if (empty($_POST['mensagem']))
    // 	$erros[] = 'Mensagem não fornecida';
    if (!$erros) {

        $corpo = "<br> Nome:" . $_POST['nome'] .
            "<br> Telefone:" . $_POST['telefone'] .
            "<br> E-mail:" . $_POST['email'];

        $headers  = "From: $remetente\n";
        $headers .= "Reply-To: $de";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\n";

        if (mail($destinatario, $assunto, $corpo, $headers, "-f$remetente")) {
            header("Location: $redirecionar_para");
            exit;
        } else {
            $erros[] = 'Erro ao mandar seu e-mail, por favor tente novamente mais tarde';
        }
    }
}
?>
<!doctype html>
<html class="no-js" lang="pt-BR">

<head>
    <?php include "description.php"; ?>
    <!-- Font Icons css -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/font-icons.css?<?php echo filemtime('assets/css/font-icons.css') ?>">
    <!-- plugins css -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/plugins.css?<?php echo filemtime('assets/css/plugins.css') ?>">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css?<?php echo filemtime('assets/css/style.css') ?>">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/responsive.css?<?php echo filemtime('assets/css/responsive.css') ?>">
    <?php include "inc-tagmanager-head.php"; ?>

    <style>
        .bg-image-right-before::before {
            background-image: url('<?php echo SITE_URL; ?>/img/<?php echo $sessao3->foto; ?>');
        }

        :root {
            --ltn__primary-color: <?php echo $infoSistema->cor_primaria; ?>;
            --ltn__primary-color-2: <?php echo $infoSistema->cor_menu; ?>;
            --ltn__secondary-color: <?php echo $infoSistema->cor_background; ?>;
            --ltn__heading-font: 'Rajdhani', sans-serif;
            --ltn__body-font: 'Nunito Sans', sans-serif;
            --section-bg-2: <?php echo $infoSistema->cor_secundaria; ?>;
            --section-bg-6: <?php echo $infoSistema->cor_botao; ?>;

        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- Header ->
        <?php include('header.php'); ?>

        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="<?php echo SITE_URL; ?>"><img src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_mobile; ?>" alt="Logo"></a>
                    </div>
                    <button class="ltn__utilize-close">X</button>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
                        <li><a href="#sessao01">Sobre nós</a></li>
                        <li><a href="#servicosdiv">Serviços</a></li>
                        <li><a href="#parceirosdiv">Parceiros</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="<?php echo $infoSistema->facebook; ?>" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo $infoSistema->twitter; ?>" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?php echo $infoSistema->linkedin; ?>" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="<?php echo $infoSistema->instagram; ?>" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- SLIDER AREA START -->
        <div class="ltn__slider-area ltn__slider-3 banner-mobile d-sm-none d-block section-bg-2---">
            <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
                <?php foreach ($puxaBanners as $banner) { ?>
                    <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---" data-bg="<?php echo SITE_URL; ?>/img/<?php echo $banner->imagem_mobile; ?>">
                        <div class="ltn__slide-item-inner text-left">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 align-self-center">
                                        <div class="slide-item-info">
                                            <div class="slide-item-info-inner ltn__slide-animation">
                                                <h6 class="slide-sub-title ltn__secondary-color animated text-uppercase text-white"><span><i class="fas fa-square-full"></i></span> <?php echo $banner->titulo1; ?></h6>
                                                <h1 class="slide-title animated text-white"><?php echo $banner->titulo2; ?></h1>
                                                <div class="slide-brief animated">
                                                    <p class="text-white"><?php echo strip_tags($banner->breve); ?></p>
                                                </div>
                                                <?php if (isset($banner->tem_botao) && $banner->tem_botao == 'S') { ?>
                                                    <div class="btn-wrapper animated">
                                                        <a href="<?php echo SITE_URL; ?><?php echo $banner->link_botao; ?>" class="theme-btn-1 btn btn-effect-1"><?php echo $banner->nome_botao; ?></a>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- SLIDER AREA END -->

        <!-- SLIDER AREA START -->
        <div class="ltn__slider-area ltn__slider-3 d-sm-block d-none section-bg-2---">
            <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
                <?php foreach ($puxaBanners as $banner) { ?>
                    <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---" data-bg="<?php echo SITE_URL; ?>/img/<?php echo $banner->foto; ?>">
                        <div class="ltn__slide-item-inner text-left">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 align-self-center">
                                        <div class="slide-item-info">
                                            <div class="slide-item-info-inner ltn__slide-animation">
                                                <h6 class="slide-sub-title ltn__secondary-color animated text-uppercase text-white"><span><i class="fas fa-square-full"></i></span> <?php echo $banner->titulo1; ?></h6>
                                                <h1 class="slide-title animated text-white"><?php echo $banner->titulo2; ?></h1>
                                                <div class="slide-brief animated">
                                                    <p class="text-white"><?php echo strip_tags($banner->breve); ?></p>
                                                </div>
                                                <?php if (isset($banner->tem_botao) && $banner->tem_botao == 'S') { ?>
                                                    <div class="btn-wrapper animated">
                                                        <a href="<?php echo SITE_URL; ?><?php echo $banner->link_botao; ?>" class="theme-btn-1 btn btn-effect-1"><?php echo $banner->nome_botao; ?></a>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- SLIDER AREA END -->

        <?php if (isset($sessao1->ativo) && $sessao1->ativo == 'S') { ?>
            <!-- ABOUT US AREA START -->
            <div class="ltn__about-us-area pt-120 pb-120" id="sessao01">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="about-us-img-wrap about-img-left">
                                <img src="<?php echo SITE_URL; ?>/img/<?php echo $sessao1->foto; ?>" alt="<?php echo $sessao1->titulo; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="about-us-info-wrap">
                                <div class="section-title-area ltn__section-title-2">
                                    <h6 class="section-subtitle ltn__secondary-color"><span><i class="fas fa-square-full"></i></span> <?php echo $sessao1->titulo; ?></h6>
                                    <h1 class="section-title"><?php echo $sessao1->titulo2; ?></h1>
                                    <p><?php echo strip_tags($sessao1->titulo3); ?></p>
                                </div>
                                <p><?php echo strip_tags($sessao1->texto_4); ?></p>
                                <div class="about-author-info d-flex">
                                    <div class="author-name-designation  align-self-center mr-30">
                                        <div class="btn-wrapper">
                                            <a class="btn theme-btn-2 btn-effect-1" href="<?php echo $sessao1->link_botao_4; ?>"><?php echo $sessao1->nome_botao_4; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT US AREA END -->
        <?php } ?>

        <?php if (isset($sessao3->ativo) && $sessao3->ativo == 'S') { ?>
            <!-- ABOUT US AREA START -->
            <div class="ltn__about-us-area section-bg-6 bg-image-right-before pt-120 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="about-us-info-wrap">
                                <div class="section-title-area ltn__section-title-2 mb-20">
                                    <h6 class="section-subtitle ltn__secondary-color"><span><i class="fas fa-square-full ltn__secondary-color"></i></span> <?php echo $sessao3->titulo; ?></h6>
                                    <h1 class="section-title"><?php echo $sessao3->titulo2; ?></h1>
                                </div>
                                <ul class="ltn__list-item-half ltn__list-item-half-2 list-item-margin clearfix">
                                    <li>
                                        <i class="icon-done"></i>
                                        <?php echo $sessao3->titulo3; ?>
                                    </li>
                                    <li>
                                        <i class="icon-done"></i>
                                        <?php echo $sessao3->titulo4; ?>
                                    </li>
                                    <li>
                                        <i class="icon-done"></i>
                                        <?php echo $sessao3->titulo5; ?>
                                    </li>
                                    <li>
                                        <i class="icon-done"></i>
                                        <?php echo $sessao3->titulo6; ?>
                                    </li>
                                    <li>
                                        <i class="icon-done"></i>
                                        <?php echo $sessao3->titulo7; ?>
                                    </li>
                                    <li>
                                        <i class="icon-done"></i>
                                        <?php echo $sessao3->titulo8; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="about-us-img-wrap about-img-left"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT US AREA END -->
        <?php } ?>

        <?php if (isset($sessao2->ativo) && $sessao2->ativo == 'S') { ?>
            <!-- ABOUT US AREA START -->
            <div class="ltn__about-us-area section-bg-1 bg-image pt-120 pb-90" id="servicosdiv" data-bg="img/bg/31.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="about-us-info-wrap mb-50">
                                <div class="section-title-area ltn__section-title-2">
                                    <h6 class="section-subtitle ltn__secondary-color"><span><i class="fas fa-square-full"></i></span> <?php echo $sessao2->titulo; ?></h6>
                                    <h1 class="section-title"><?php echo $sessao2->titulo2; ?></h1>
                                    <p><?php echo strip_tags($sessao2->titulo3); ?></p>
                                </div>
                                <p><?php echo strip_tags($sessao2->texto_3); ?></p>
                                <div class="btn-wrapper">
                                    <a class="btn theme-btn-1 btn-effect-1" href="<?php echo $sessao2->link_botao_3; ?>"><?php echo $sessao2->nome_botao_3; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="ltn__feature-item ltn__feature-item-6 box-shadow-1">
                                        <div class="ltn__feature-icon">
                                            <span><i class="icon-repair"></i></span>
                                        </div>
                                        <div class="ltn__feature-info">
                                            <h3><?php echo $sessao2->titulo4; ?></h3>
                                            <p><?php echo strip_tags($sessao2->texto_4); ?></p>
                                            <!-- <a class="ltn__service-btn ltn__service-btn-2" href="service-details.html"><?php echo $sessao2->nome_botao_4; ?> <i class="flaticon-right-arrow"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="ltn__feature-item ltn__feature-item-6 box-shadow-1">
                                        <div class="ltn__feature-icon">
                                            <span><i class="flaticon-slider"></i></span>
                                        </div>
                                        <div class="ltn__feature-info">
                                            <h3><?php echo $sessao2->titulo5; ?></h3>
                                            <p><?php echo strip_tags($sessao2->texto_5); ?></p>
                                            <!-- <a class="ltn__service-btn ltn__service-btn-2" href="service-details.html">Service Details <i class="flaticon-right-arrow"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="ltn__feature-item ltn__feature-item-6 box-shadow-1">
                                        <div class="ltn__feature-icon">
                                            <span><i class="flaticon-building"></i></span>
                                        </div>
                                        <div class="ltn__feature-info">
                                            <h3><?php echo $sessao2->titulo6; ?></h3>
                                            <p><?php echo strip_tags($sessao2->texto_6); ?></p>
                                            <!-- <a class="ltn__service-btn ltn__service-btn-2" href="service-details.html">Service Details <i class="flaticon-right-arrow"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="ltn__feature-item ltn__feature-item-6 box-shadow-1">
                                        <div class="ltn__feature-icon">
                                            <span><i class="flaticon-house"></i></span>
                                        </div>
                                        <div class="ltn__feature-info">
                                            <h3><?php echo $sessao2->titulo7; ?></h3>
                                            <p><?php echo strip_tags($sessao2->texto_7); ?></p>
                                            <!-- <a class="ltn__service-btn ltn__service-btn-2" href="service-details.html">Service Details <i class="flaticon-right-arrow"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT US AREA END -->
        <?php } ?>

        <div class="d-sm-block d-none col-12 p-0">
            <a href="https://api.whatsapp.com/send?phone=55<?php echo $infoSistema->whatsapp_flutuante; ?>">
                <img src="<?php echo SITE_URL; ?>/img/site/banner-wpp-desktop.jpg" alt="Banner Whatsapp Desktop">
            </a>
        </div>

        <div class="d-sm-none d-block col-12 p-0">
            <a href="https://api.whatsapp.com/send?phone=55<?php echo $infoSistema->whatsapp_flutuante; ?>">
                <img src="<?php echo SITE_URL; ?>/img/site/banner-wpp-mobile.jpg" alt="Banner Whatsapp Mobile">
            </a>
        </div>

        <?php if (isset($sessao4->ativo) && $sessao4->ativo == 'S') { ?>
            <!-- ABOUT US AREA START -->
            <div class="ltn__about-us-area pt-115 pb-95" id="contato">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 align-self-center">
                            <div class="about-us-info-wrap">
                                <div class="section-title-area ltn__section-title-2">
                                    <h6 class="section-subtitle ltn__secondary-color"><span><i class="fas fa-square-full"></i></span> <?php echo $sessao4->titulo; ?></h6>
                                    <h1 class="section-title"><?php echo $sessao4->titulo2; ?></h1>
                                    <p><?php echo strip_tags($sessao4->titulo3); ?></p>
                                </div>
                                <div class="about-us-info-wrap-inner about-us-info-devide">
                                    <p><?php echo strip_tags($sessao4->texto_3); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 align-self-center">
                            <div class="get-a-quote-wrap">
                                <h2>Fale conosco</h2>
                                <form action="#" class="get-a-quote-form">
                                    <div class="input-item">
                                        <select class="nice-select" name="cidade_cliente" id="cidade-cliente" onchange="definirCidade(this.value)" required>
                                            <option>Selecione sua Cidade</option>
                                            <option>Brasília</option>
                                            <option>Águas Claras</option>
                                            <option>Brazilândia</option>
                                            <option>Candangolândia</option>
                                            <option>Ceilândia</option>
                                            <option>Cruzeiro</option>
                                            <option>Fercal</option>
                                            <option>Gama</option>
                                            <option>Guará</option>
                                            <option>Itapoã</option>
                                            <option>Jardim Botânico</option>
                                            <option>Lago Sul</option>
                                            <option>Lago Norte</option>
                                            <option>Núcleo Bandeirante</option>
                                            <option>Paranoá</option>
                                            <option>Planaltina</option>
                                            <option>Park Way</option>
                                            <option>Recanto das Emas</option>
                                            <option>Riacho Fundo</option>
                                            <option>Riacho Fundo 2</option>
                                            <option>Samambaia</option>
                                            <option>Santa Maria</option>
                                            <option>São Sebastião</option>
                                            <option>Scia</option>
                                            <option>Sia</option>
                                            <option>Sobradinho</option>
                                            <option>Sobradinho 2</option>
                                            <option>Sudoeste/Octogonal</option>
                                            <option>Taguatinga</option>
                                            <option>Varjão</option>
                                            <option>Vicente Pires</option>
                                        </select>
                                    </div>
                                    <div class="input-item">
                                        <select class="nice-select" onchange="definirServico(this.value)" required>
                                            <option>Selecione o serviço</option>
                                            <option>Manutenção</option>
                                        </select>
                                    </div>
                                    <div class="btn-wrapper mt-0">
                                        <button type="button" id="btn-wpp-enviar" onclick="enviarWhatsapp()" class="btn theme-btn-1 btn-effect-1 text-uppercase" style="display:none">Entrar em Contato</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT US AREA END -->
        <?php } ?>

        <?php if (isset($sessao5->ativo) && $sessao5->ativo == 'S') { ?>
            <!-- CALL TO ACTION START (call-to-action-6) -->
            <div class="ltn__call-to-action-area call-to-action-6 before-bg-left-skew ltn__secondary-bg bg-image pt-110 pb-110" data-bg="img/bg/33.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="call-to-action-inner call-to-action-inner-6 p-0 text-center---">

                                <div class="section-title-area ltn__section-title-2--- mb-0 text-color-white">
                                    <h1 class="section-title"><?php echo $sessao5->titulo; ?></h1>
                                    <p><?php echo $sessao5->texto; ?></p>
                                </div>
                                <div class="btn-wrapper">
                                    <a class="btn btn-effect-4 btn-white font-weight-bold" href="#formContato">Agendar atendimento <i class="icon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CALL TO ACTION END -->
        <?php } ?>

        <!-- BRAND LOGO AREA START -->
        <div class="ltn__brand-logo-area ltn__brand-logo-1 before-bg-bottom" id="parceirosdiv">
            <div class="container">
                <div class="row ltn__brand-logo-active ltn__secondary-bg ltn__border-radius pt-30 pb-20">
                    <?php foreach ($puxaParceiros as $parceiro) { ?>
                        <div class="col-lg-12">
                            <div class="ltn__brand-logo-item">
                                <img src="<?php echo SITE_URL; ?>/img/<?php echo $parceiro->foto; ?>" alt="<?php echo $parceiro->nome; ?>">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- BRAND LOGO AREA END -->

        <!-- FOOTER AREA START -->
        <footer class="ltn__footer-area">
            <div class="footer-top-area  section-bg-2 plr--5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-about-widget">
                                <div class="footer-logo">
                                    <div class="site-logo">
                                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_rodape; ?>" alt="Logo">
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-placeholder"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><?php echo $infoSistema->endereco; ?></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-call"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="tel:<?php echo $infoSistema->telefone1; ?>"><?php echo $infoSistema->telefone1; ?></a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-mail"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="mailto:<?php echo $infoSistema->email1; ?>"><?php echo $infoSistema->email1; ?></a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Sitemap</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
                                        <li><a href="#sessao01">Sobre</a></li>
                                        <li><a href="#servicosdiv">Serviços</a></li>
                                        <li><a href="#contato">Contato</a></li>
                                        <li><a href="#parceirosdiv">Parceiros</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Social</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="<?php echo $infoSistema->facebook; ?>" title="Facebook"><i class="fab fa-facebook-f"></i></a> Facebook</li>
                                        <li><a href="<?php echo $infoSistema->twitter; ?>" title="Twitter"><i class="fab fa-twitter"></i> Twitter</a></li>
                                        <li><a href="<?php echo $infoSistema->linkedin; ?>" title="Linkedin"><i class="fab fa-linkedin"></i> Linkedin</a></li>
                                        <li><a href="<?php echo $infoSistema->youtube; ?>" title="Youtube"><i class="fab fa-youtube"></i> Youtube</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-sm-6 col-12"></div>
                    </div>
                </div>
            </div>
            <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
                <div class="container-fluid ltn__border-top-2">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="ltn__copyright-design clearfix">
                                <p>Direitos reservados @ <?php echo $infoSistema->nome_empresa; ?> <span class="current-year"></span></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 align-self-center">
                            <div class="ltn__copyright-menu text-right">
                                <p>Ayzen Tech</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER AREA END -->
    </div>
    <!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <script>

        var servicoEscolhido = '';
        var cidadeEscolhida = '';
        
        function definirServico(servico) {
            servicoEscolhido = servico;
            $('#btn-wpp-enviar').show();
        }
        
        function definirCidade(cidade) {
            cidadeEscolhida = cidade;
        }
        
        function enviarWhatsapp() {
            var texto = "Olá, tudo bem? Gostaria de receber mais informações sobre o serviço: "+ servicoEscolhido +" e a disponiblidade na cidade: "+ cidadeEscolhida;
            
            window.open('https://api.whatsapp.com/send?phone=55<?php echo $infoSistema->whatsapp_flutuante; ?>&text='+texto, '_blank');
        }
        
    </script>

    <!-- All JS Plugins -->
    <script src="<?php echo SITE_URL; ?>/assets/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>

</body>

</html>
