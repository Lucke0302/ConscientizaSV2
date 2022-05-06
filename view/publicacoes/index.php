<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../componentescss/footer.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
    <link rel="shortcut icon" href="../imagens/logo.png">
    <title>Document</title>
</head>
<body>
    <section id="general">
        <?php 
            require_once('../../controller/publicacoes/controller.php');
        ?>
    </section>
    <?php
        error_reporting(0);
        include_once('../componentes/menu.php');
        include_once('../componentes/footer.php')
    ?>
</body>
</html>