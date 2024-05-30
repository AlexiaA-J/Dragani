<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sophrologue Certifiée sur Grenoble et ses alentours. Découvrez mes services et contactez-moi pour une séance.">
    <title>Delphine Dragani - Sophrologue Certifiée</title>
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>
    <div class="mainWrapper">
        <header class="header">
            <div>
                <a class="header__brand" href="<?php echo home_url(); ?>">
                    <img class="logo" src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="Logo" >
                    <p class="mainTitle">
                        Delphine Dragani Sophrologie
                    </p>
                </a>
            </div>
            <div class="header__navDesktop">
                <?php wp_nav_menu(array('theme_location' => 'main')); ?>
            </div>
            <div class="menuToggle">
                <span class="bar topBar"></span>
                <span class="bar middleBar"></span>
                <span class="bar bottomBar"></span>
            </div>
            <div class="header__navMobile">
                <?php wp_nav_menu(array('theme_location' => 'main')); ?>
            </div>
        </header>
