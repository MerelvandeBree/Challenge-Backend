<?php

    include("resources/datalayer/datalayer.php");

    $id = $_GET["id"];
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Locations</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
    <header>
        <h1>Locatie verwijderen</h1>
        <a class="backbutton" href="locations.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
    </header>

    <div id="container">
        <h1>Weet u zeker dat u deze locatie wilt verwijderen?</h1>
        <form action="locatieverwijderd.php?id=<?= $id?>"  method="post" >
            <select name="gert">
                <option value="1">Ja</option>
                <option value="2">Nee</option>
            </select>
            <input type="submit" value="submit">
        </form>
        
    </div>

    <footer>&copy; Merel van de Bree 2021</footer>
</body>
</html>