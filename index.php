<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caboclo Tech Café</title>
    <!-- uikit -->
    <link rel="stylesheet" href="node_modules/uikit/dist/css/uikit.min.css"/>
    <script src="node_modules/uikit/dist/js/uikit.min.js"></script>
    <script src="node_modules/uikit/dist/js/uikit-icons.min.js"></script>
    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css"/>
    <!-- googlefonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="uk-section">
    <?php
    include_once "core/theme/header.php";
    echo "<div class='uk-container'>";
        include_once "core/theme/main.php";
    echo "</div>";
    include_once "core/theme/footer.php";
    ?>
</div>
</body>
</html>