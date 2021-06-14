<?php

    include("resources/datalayer/datalayer.php");

    $id = $_GET["id"];
    $data;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $selectedLocation=$_POST["location"];
        if(is_numeric($selectedLocation)){
            updateSelect($id, $selectedLocation);
        }
    }
    else{
        $location=$data["location"];
    }

    $data = readCharacter($id);
    $location = readLocation($id);
    $locations = readLocations($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character <?=$data["name"]?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>

<body>

    <header>
        <h1> <?=$data["name"]?></h1>
        <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
    </header>
    
    <div id="container">
    <?php 
        require("includes/detail.php");
    ?>
    </div>

    <footer>&copy; Merel van de Bree 2021</footer>

</body>
</html>