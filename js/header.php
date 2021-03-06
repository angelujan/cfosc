<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registralow | Registra tu marca en México a bajo costo por internet</title>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/dialog.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/dialog-sandra.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <script type="text/javascript" src="http://registralow.api.oneall.com/socialize/library.js?lang=es"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logo"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo home_url(); ?>">INICIO</a></li>
                        <li><a id="scrollPrecios">PRECIOSLOW</a></li>
                        <li><a href="nosotros">¿QUIENES SOMOS?</a></li>
                        <li><a href="blog">BLOG</a></li>
                        <li><a href="contacto">CONTACTO</a></li>
                        <li class="dropdown">
                            <?php
                            if ( current_user_can( 'manage_options' ) ) {
                            ?>
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">ADMIN</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo home_url();?>/wp-admin">GESTOR</a></li>
                                <li><a href="<?php echo home_url();?>/lista-seguimientos">SOLICITUDES</a></li>
                                <li><a href="<?php echo wp_logout_url( home_url() ); ?>">SALIR</a></li>
                            </ul>
                            <?php
                            } else if ( is_user_logged_in() ) { 
                                $current_user = wp_get_current_user();
                                $first_name = $current_user->user_firstname;
                                $username = $current_user->user_login;
                            ?> 
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false"><?php if( $first_name != "" ) { echo $first_name; } else { echo $username; } ?></a>
                            <ul class="dropdown-menu <?php echo 'mi-cuenta'; ?>">
                                <li><a href="<?php echo home_url();?>/mi-cuenta">SOLICITUDES</a></li>
                                <li><a href="<?php echo wp_logout_url( home_url() ); ?>">SALIR</a></li>
                            </ul>
                            <?php } else { ?>
                            <li><a href="#" data-dialog="somedialog" class="trigger" id="login-modal">LOGIN</a></li>
                            <?php } ?>
                        </div>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div id="somedialog" class="dialog">
            <div class="dialog__overlay"></div>
            <div class="dialog__content">
                <?php echo do_shortcode('[registralow_login_form]'); ?>
                <div class="hidden"><button class="action hidden" data-dialog-close>Close</button></div>
            </div>
        </div>