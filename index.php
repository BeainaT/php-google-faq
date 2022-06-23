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
    </head>
    <body>
        <main>
            <?php
            foreach($FAQs as $FAQ):?>
                <h2><?= $FAQ['question'] ?></h2>
                <p><?= $FAQ['answer'] ?></p>
            <?php endforeach; ?>
        </main>
    </body>
</html>