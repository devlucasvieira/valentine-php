<style>
    #copyright-ayzen {
        position: relative;
        display: inline-block;
        justify-content: center;
        align-items: center;
        margin-top: 1em;
        font-size: 14px;
    }

    #copyright-ayzen img {
        width: 53px;
        position: absolute;
        margin-top: 6px;
    }

    #copyright-ayzen a {
        margin-right: 53px;
        margin-left: 4px;
    }

    #copyright-ayzen i {
        font-size: 12px;
        color: red;
    }

    #copyright-ayzen.container {
        text-align: right;
        font-size: 14px;
        line-height: normal;
    }

    #copyright-ayzen .pulse {
        animation: pulse 1s infinite;
    }

    #copyright-ayzen .dark {
        color: white;
        line-height: 26px;
    }

    #copyright-ayzen .light {
        color: white;
    }

    #copyright-ayzen p {
        color: white;
    }

    #copyright-ayzen small {
        font-weight: 400;
        font-family: 'Open Sans';
    }

    #copyright-ayzen p {
        margin-bottom: 0px !important;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        5% {
            transform: scale(1.25);
        }

        20% {
            transform: scale(1);
        }

        30% {
            transform: scale(1);
        }

        35% {
            transform: scale(1.25);
        }

        50% {
            transform: scale(1);
        }

        55% {
            transform: scale(1.25);
        }

        70% {
            transform: scale(1);
        }
    }

    @media only screen and (max-width: 767px) {
        #copyright-ayzen.container {
            text-align: center;
        }

        .text-copy {
            text-align: center;
        }
    }

    .text-right1 {
        text-align: right;
    }

    .text-copy {
        text-align: right;
    }
</style>

<!-- <i class="fa fa-heart pulse"></i> Font Awesome 4-->
<!-- Classe dark para fudo escuro-->
<div class="container">
    <div class="row ">
        <div class="col-md-3">
            <img src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_rodape; ?>" alt="footer-logo">
            <!-- <div class="clearfix">&nbsp;</div> -->
        </div>
        <div class="col-md-9 text-copy">
            <div id="copyright-ayzen" class="">
                <div class="row">
                    <div class="light">
                        <p>© 2009 -
                            <?php echo date('Y'); ?> Feito com <i class="fa fa-heart pulse"></i> por<a
                                href="https://www.ayzen.com.br/"><img
                                    src="<?php echo SITE_URL; ?>/flutuante/ayzen_logo.svg" alt="ayzen"
                                    title="ayzen"></a>. Todos os direitos reservados.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>