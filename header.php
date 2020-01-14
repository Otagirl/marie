<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
        <!-- Tout le contenu de l entête de mon site -->
            <nav id="nav"> 
                <img src="sources/images/politic-logo.png" alt="logo">
                <a href="#">Nos idéaux</a>
                <a href="#">Actualités</a>
                <a href="#">Municipales 2020</a>
                <a href="#"> S'engager</a>
                <button>
                <h1>Connexion</h1>
                </button>
                <button>
                <h1>Adhérer</h1>
                </button>
                <button id="don">
                <h1>Don</h1>
                </button>
            </nav>
            <div></div>
            <nav id="second">
                <div id="recherche">
                    <input type="text" placeholder="Recherche">
                </div>
            </nav>
        </header>
