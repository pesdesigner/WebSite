<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Web Site</title>
    </head>
    <body>
        <?php
        require './vendor/autoload.php';
        $url = new Core\ConfigController();
        $url->carregar();
        ?>
    </body>
</html>
