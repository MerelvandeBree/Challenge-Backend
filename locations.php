<?php

    include("resources/datalayer/datalayer.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $toevoegen=$_POST["toevoegen"];
            
        
        uploadLocation($toevoegen);
    }

    $location = readLocation($id);
    $locations = readLocations($id);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>locations</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>

    <header>
        <h1>Alle <?= sizeof($locations) ?> locaties uit je database</h1>
        <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
    </header>

    <div id="container">
        <h1> Name </h1>
        <p> <?php                 
            foreach($locations as $location){ ?>
                <a href="locatieVerwijderen.php?id=<?= $location["id"] ?>"><i class="fa fa-trash" aria-hidden="true"></i>  </a>
             <?   printf($location["name"]. "<br>") ;
            } ?> 
        </p> 
        <a class="locatieToevoegen" href="createLocation.php" > + Locatie toevoegen </a>
    </div>

    <footer>&copy; Merel van de Bree 2021</footer>

</body>
</html>