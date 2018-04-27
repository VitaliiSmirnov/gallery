<!DOCTYPE html>
<html>
<head>
    <?php
        define ("title", "Пример адаптивного сайта");
        $image="https://fakeimg.pl/350x200/?text=World&font=lobster";
    ?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo title; ?></title>

</head>
<body>
    <div class="image_gallery">
        <div>
            <img src="<?php echo $image ?>">
        </div>        <div>
            <img src="<?php echo $image ?>">
        </div>        <div>
            <img src="<?php echo $image ?>">
        </div>        <div>
            <img src="<?php echo $image ?>">
        </div>        <div>
            <img src="<?php echo $image ?>">
        </div>        <div>
            <img src="<?php echo $image ?>">
        </div>        <div>
            <img src="<?php echo $image ?>">
        </div>        <div>
            <img src="<?php echo $image ?>">
        </div>        <div>
            <img src="<?php echo $image ?>">
        </div>
    </div>
</body>
</html>