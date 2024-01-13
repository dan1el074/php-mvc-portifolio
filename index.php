<?php 
    spl_autoload_register(function($class) {
        require($class . '.php');
    });

    $app = new Application();
    $app->execute();

    //TODO: usar esse projeto como portifólio
    //TODO: fazer um controler com a rota /admin para login, para alterar as infos
    //TODO: criar um classe para mandar o e-mail na aba contato
?>