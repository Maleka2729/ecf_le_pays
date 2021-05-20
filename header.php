<!-- Header code here -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <?php 
    wp_head(); 
    ?>

    <style>
        body{
            background-color: #f8f9fa;
        }
        .menu ul li {
            list-style-type: none;
            display: inline;
            margin: 20px;
        }

        .menu ul li:hover {
            text-decoration: underline;
        }

        .menu ul li a {
            color: black;
            font-size: 30px;
        }

        .wp-post-image{
            height: auto;
            width: 100%;
        }

        .card-title{
            font-family: 'PT Sans Narrow', sans-serif; 
            font-weight:bold;
        }
    </style>

</head>


<body <?php body_class('site'); ?>>
    <!-- code here -->

    <header class="header test" >
        <nav class="navbar navbar-expand-lg " style="background: #edf2f4;">
            <a href="<?php echo home_url( '' ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" height="90"
                    style="margin-left: 40%;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent"
                style="font-family: 'PT Sans Narrow', sans-serif;color: black;">
                <div class="navbar-nav mr-auto">
                    <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
                </div>
            </div>
        </nav>

        <?php wp_body_open(); ?>