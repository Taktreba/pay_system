<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body>
<?php
$id = '';
if (!empty($_GET)) {
    $id = empty($_GET['id']) ? '' : trim(strip_tags($_GET['id']));
}
$blocks = ['header', 'content', 'footer'];

?>
<div class="container">
    <?php foreach ($blocks as $block): ?>
        <?php if ($block == 'header'): ?>
            <?php include 'header.php'; ?>
        <?php elseif ($block == 'content'): ?>
            <?php include 'menu.php'; ?>
            <article>
                <?php
                switch ($id) {
                    case 'about_as':
                        include 'about_as.php';
                        break;
                    case 'prices':
                        include 'prices.php';
                        break;
                    case 'sing_in':
                        include 'chekin/sing_in.php';
                        break;
                    case 'sing_up':
                        include 'chekin/sing_up.php';
                        break;
                    default: include 'default.php';
                }
                ?>
            </article>
        <?php elseif ($block == 'footer'): ?>
            <?php include 'footer.php'; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
</body>
</html>
