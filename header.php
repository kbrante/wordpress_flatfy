<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flatfy</title>

    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/static/css/style.css' ;?>">
    <?php wp_head() ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row monHeader" id="home">
            <div class="col-md-12 text-center">
                <h1>Flatfy</h1>
                <p>Clean & minimal Theme</p>
                <div class="">

                    <a href="#" class="btn btn-primary btn-lg">Twitter</a>
                    <a href="#downloadlink" class="">Free Download</a>
                </div>

                <a href="#"><img src=<?php echo get_stylesheet_directory_uri()."/static/images/circle.png"?> alt="circle"></a>
            </div>
        </div>

        <?php
            $args = array (
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'bs-example-navbar-collapse-1',
                'menu_class' => 'nav navbar-nav navbar-right',
                'menu' => 'navbar',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                );

           wp_nav_menu($args)
        ?>
