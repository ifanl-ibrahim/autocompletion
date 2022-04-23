<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex !</title>
    <link rel="icon" href="noctali.png">
    <link href="http://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header>
    <form action="recherche.php" class="search-bar" method="GET">
        <input type="search" name="search" id="search" autocomplete="off" placeholder="Quel Pokémon voulez-vous voir ?">
        <!-- <button class="search-btn" type="submit">
            <span>Search</span>
        </button> -->
        <ul></ul>
    </form>
    </header>