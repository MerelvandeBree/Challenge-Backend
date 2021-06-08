<?php

    include("resources/datalayer/datalayer.php");

    $characters = readCharacters();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
    <header>
        <h1>Alle <?= sizeof($characters) ?> characters uit de database</h1>
    </header>

    <div id="container">
        <?php foreach ($characters as $data){
            require("includes/items.php");
        } ?>
        <a class="item" href="locations.php">
            <h1 class="locations">Locations</h1>
        </a>
    </div>

    <footer>&copy; Merel van de Bree 2021</footer>
</body>
</html>