<?php
//import data from another php file
require 'php-data/data.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Google FAQs</title>
        <!--fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
        <!--my css-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="header_box">
                <div class="header_top">
                    <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="">
                    <span>Privacy e termini</span>
                    <i class="fa-solid fa-grip"></i>
                    <a href="#">T</a>
                </div>
                <div class="header_nav">
                    <nav>
                        <ul>
                            <?php 
                            foreach($links_nav as $link):?>
                            <li><a href="#"><?= $link ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main>
            <?php
            foreach($FAQs as $FAQ):?>
                <h2><?= $FAQ['question'] ?></h2>
                <p><?= $FAQ['answer'] ?></p>
            <?php endforeach; ?>
        </main>
    </body>
</html>