<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <!--Bootstrap JS-->
    <script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js" defer></script>
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/style.css">
    <style>
        .suscribe {
            background: url("<?php echo bloginfo('template_url'); ?>/images/bg.jpg");
            background-size: cover;
            background-position: center;
            height: 400px;
        }
    </style>
    <title><?php echo wp_get_document_title(); ?></title>

</head>

<body>
    <!--Start Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!-- <img src="<?php echo bloginfo('template_url'); ?>/images/bootstrap-logo.svg" alt="Logo" width="30" height="24"> -->
                <?php bloginfo('name');?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php wp_nav_menu(array(
                'theme_location' => 'top_menu',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarSupportedContent',
                'items_wrap' => '<ul class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>',
                'menu_class' => 'nav-item'
            )); ?>
        </div>
    </nav>
    <!--End Navbar-->