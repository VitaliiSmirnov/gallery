<!DOCTYPE html>
<html>
<head>
    <?php
        include "pg/main.php"
    ?>
    <meta charset="utf-8">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
</head>
<body>
    <div class="image_gallery">
        <?php foreach ($images as $image): ?>
            <div>
                <a data-fancybox="gallery"
                    href="<?php echo isset($image['url']) ? $image['url'] : IMAGE_PLACEHOLDER ?>">
                    <img src="<?php echo isset($image['thumbnail']) ? $image['thumbnail'] : IMAGE_PLACEHOLDER ?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>