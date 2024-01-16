<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Project | <?= ucfirst($atributes['titulo']) ?></title>
    <link rel="stylesheet" href="<?= INCLUDE_PATH_FULL ?>css/style.css">
</head>

<body>
    <div class="layout-fix">
        <div>
            <header>
                <nav>
                    <a href="<?= INCLUDE_PATH ?>">
                        <img src="<?= INCLUDE_PATH_FULL ?>assets/images/d-logo.svg" class="logo" alt="Logo">
                    </a>

                    <div id="menuToggle">
                        <input type="checkbox" />
                        <span></span>
                        <span></span>
                        <span></span>
                        <ul id="menu">
                            <?php
                                foreach($this->menuItems as $key => $value) {
                                    echo '<li><a href="'.INCLUDE_PATH.$value.'">'.$value.'</a></li>';
                                }
                            ?>
                        </ul>
                    </div>

                    <ul>
                        <?php 
                            foreach($this->menuItems as $key => $value) {
                                echo '<li><a href="'.INCLUDE_PATH.$value.'">'.$value.'</a></li>';
                            }
                        ?>
                    </ul>
                </nav>
            </header>
            <main class="fade-in">