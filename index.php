<?php
    require_once './assets/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title><?php echo $titulo ?></title>
</head>
<body>
    <h1>Telefones</h1>

    <?php
        foreach($telefones as $item){
            echo "<p>" . $item["nome"] . "</p>";
            echo "<p>" . $item["numero"] . "</p>";
        };
    ?>
</body>
</html>