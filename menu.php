<?php
$menus = [
    'about_as' => 'About as',
    'prices' => 'Prices'
]; ?>
<nav class="text_shadow">
    <ul>
        <?php foreach ($menus as $key => $menu): ?>
            <li>
                <a href="index.php?id=<?php echo $key; ?>"><?php echo $menu; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
