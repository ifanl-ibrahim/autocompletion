<?php

    $table = [];
    $conn = new PDO("mysql:host=localhost; dbname=autocompletion", 'root', '');
    $res = $conn->prepare("SELECT * FROM `pokemon`");
    $res->execute();

    $result = $res->fetchAll();
    array_push($table, $result);

    // var_dump($table);

    echo json_encode($result)

?>