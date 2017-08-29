<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flatfy</title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()."/static/external/bootstrap/dist/css/bootstrap.min.css "?>">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()."/static/external/font-awesome/css/font-awesome.css"?>">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/static/css/style.css' ;?>">
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
        wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
         ?>
