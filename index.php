<!DOCTYPE html>
<html>
<head>
    <?php
        include "pg/main.php"
    ?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo title; ?></title>

</head>
<body>
    <div class="image_gallery">
        <div>
            <img src="<?php echo($image[0]['url']); ?>">
        </div>
        <div>
            <img src="<?php echo($image[1]['url']); ?>">
        </div>

    </div>
</body>
</html>