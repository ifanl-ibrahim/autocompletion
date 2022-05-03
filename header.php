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
    <link rel="icon" href="icon.png">
    <link href="http://fonts.cdnfonts.com/css/collegerion" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/spirit-ginger" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body id="body">
    <header>
    <a class="title" href="index.php">Pokedex</a>
    <form action="recherche.php" class="search-bar" method="GET">
        <input type="search" name="search" id="search" autocomplete="off" placeholder="Quel Pokémon voulez-vous voir ?">
        <ul></ul>
        <ul id="ul"></ul>
    </form>
    </header>