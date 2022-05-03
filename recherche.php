<?php

use function PHPSTORM_META\type;

include "header.php";

$search = htmlspecialchars($_GET['search']);
$table = [];
$arg = "%";
$conn = new PDO("mysql:host=localhost; dbname=autocompletion", 'root', '');
$res = $conn->prepare("SELECT * FROM `pokemon` WHERE `name` LIKE '$search$arg'");
$res->execute();
$result = $res->fetchAll();
array_push($table, $result);

?>
<link rel="stylesheet" href="recherche.css">

    <main>
    <a class="ancre" href="#body"><img src="img/noctaliancre.png" alt="imgancre"></a>
        <section>
            <?php
                foreach ($table as $key) {
                    foreach ($key as $value) { 
                        // var_dump($value);
                        ?>
                        <a href="element.php?id=<?= $value[0]?>">
                            <li>
                                <img src=<?= $value[17] ?> alt="image poke">
                                <span>
                                    <span class="name"><?= $value[1] ?></span>
                                    <span>
                                        <span class="type"
                                            <?php
                                            if($value[5] == 'normal') { ?>
                                                style ="background-color: #A8A878; border-top-color: #D8D8D0; border-bottom-color: #705848"
                                            <?php } elseif($value[5] == 'fire') { ?>
                                                style = "background-color: #F08030; border-top-color: #F8D030; border-bottom-color: #C03028"
                                            <?php } elseif($value[5] == 'water') { ?>
                                                style = "background-color: #6890F0; border-top-color: #98D8D8; border-bottom-color: #807870"
                                            <?php } elseif($value[5] == 'electric') { ?>
                                                style = "background-color: #F8D030; border-top-color: #F8F878; border-bottom-color: #B8A038"    
                                            <?php } elseif($value[5] == 'grass') { ?>
                                                style = "background-color: #78C850; border-top-color: #C0F860; border-bottom-color: #588040"
                                            <?php } elseif($value[5] == 'flying') { ?>
                                                style = "background-color: #A890F0; border-top-color: #C8C0F8; border-bottom-color: #705898"
                                            <?php } elseif($value[5] == 'rock') { ?>
                                                style = "background-color: #B8A038; border-top-color: #E0C068; border-bottom-color: #886830"
                                            <?php } elseif($value[5] == 'steel') { ?>
                                                style = "background-color: #B8B8D0; border-top-color: #D8D8C0; border-bottom-color: #807870"
                                            <?php } elseif($value[5] == 'ground') { ?>
                                                style = "background-color: #E0C068; border-top-color: #F8F878; border-bottom-color: #886830"
                                            <?php } elseif($value[5] == 'bug') { ?>
                                                style = "background-color: #A8B820; border-top-color: #D8E030; border-bottom-color: #A8B820"
                                            <?php } elseif($value[5] == 'poison') { ?>
                                                style = "background-color: #A040A0; border-top-color: #D880B8; border-bottom-color: #483850"
                                            <?php } elseif($value[5] == 'ice') { ?>
                                                style = "background-color: #98D8D8; border-top-color: #D0F8E8; border-bottom-color: #9090A0"
                                            <?php } elseif($value[5] == 'fighting') { ?>
                                                style = "background-color: #C03028; border-top-color: #F08030; border-bottom-color: #484038"
                                            <?php } elseif($value[5] == 'psychic') { ?>
                                                style = "background-color: #F85888; border-top-color: #F8C0B0; border-bottom-color: #789010"
                                            <?php } elseif($value[5] == 'dark') { ?>
                                                style = "background-color: #705848; border-top-color: #A8A878; border-bottom-color: #484038"
                                            <?php } elseif($value[5] == 'ghost') { ?>
                                                style = "background-color: #705898; border-top-color: #A890F0; border-bottom-color: #483850"
                                            <?php } elseif($value[5] == 'dragon') { ?>
                                                style = "background-color: #7038F8; border-top-color: #B8A0F8; border-bottom-color: #483890"
                                            <?php } elseif($value[5] == 'fairy') { ?>
                                                style = "background-color: #F0B6BC; border-top-color: #F5CAD1; border-bottom-color: #905F63"
                                            <?php } ?>>
                                        <?= $value[5] ?></span>

                                        <span class="type"
                                            <?php
                                            if($value[6] == 'normal') { ?>
                                                style ="background-color: #A8A878; border-top-color: #D8D8D0; border-bottom-color: #705848"
                                            <?php } elseif($value[6] == 'fire') { ?>
                                                style = "background-color: #F08030; border-top-color: #F8D030; border-bottom-color: #C03028"
                                            <?php } elseif($value[6] == 'water') { ?>
                                                style = "background-color: #6890F0; border-top-color: #98D8D8; border-bottom-color: #807870"
                                            <?php } elseif($value[6] == 'electric') { ?>
                                                style = "background-color: #F8D030; border-top-color: #F8F878; border-bottom-color: #B8A038"    
                                            <?php } elseif($value[6] == 'grass') { ?>
                                                style = "background-color: #78C850; border-top-color: #C0F860; border-bottom-color: #588040"
                                            <?php } elseif($value[6] == 'flying') { ?>
                                                style = "background-color: #A890F0; border-top-color: #C8C0F8; border-bottom-color: #705898"
                                            <?php } elseif($value[6] == 'rock') { ?>
                                                style = "background-color: #B8A038; border-top-color: #E0C068; border-bottom-color: #886830"
                                            <?php } elseif($value[6] == 'steel') { ?>
                                                style = "background-color: #B8B8D0; border-top-color: #D8D8C0; border-bottom-color: #807870"
                                            <?php } elseif($value[6] == 'ground') { ?>
                                                style = "background-color: #E0C068; border-top-color: #F8F878; border-bottom-color: #886830"
                                            <?php } elseif($value[6] == 'bug') { ?>
                                                style = "background-color: #A8B820; border-top-color: #D8E030; border-bottom-color: #A8B820"
                                            <?php } elseif($value[6] == 'poison') { ?>
                                                style = "background-color: #A040A0; border-top-color: #D880B8; border-bottom-color: #483850"
                                            <?php } elseif($value[6] == 'ice') { ?>
                                                style = "background-color: #98D8D8; border-top-color: #D0F8E8; border-bottom-color: #9090A0"
                                            <?php } elseif($value[6] == 'fighting') { ?>
                                                style = "background-color: #C03028; border-top-color: #F08030; border-bottom-color: #484038"
                                            <?php } elseif($value[6] == 'psychic') { ?>
                                                style = "background-color: #F85888; border-top-color: #F8C0B0; border-bottom-color: #789010"
                                            <?php } elseif($value[6] == 'dark') { ?>
                                                style = "background-color: #705848; border-top-color: #A8A878; border-bottom-color: #484038"
                                            <?php } elseif($value[6] == 'ghost') { ?>
                                                style = "background-color: #705898; border-top-color: #A890F0; border-bottom-color: #483850"
                                            <?php } elseif($value[6] == 'dragon') { ?>
                                                style = "background-color: #7038F8; border-top-color: #B8A0F8; border-bottom-color: #483890"
                                            <?php } elseif($value[6] == 'fairy') { ?>
                                                style = "background-color: #F0B6BC; border-top-color: #F5CAD1; border-bottom-color: #905F63"
                                            <?php } else { ?>
                                                style = "display: none"
                                            <?php } ?>>
                                        <?= $value[6] ?></span>
                                    </span>
                                </span>
                            </li>
                        </a>
                    <?php
                    }
                }
            ?> 
        </section>
    </main>
</body>
</html>