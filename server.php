<?php
require __DIR__ . "/database.php";
if (empty($_GET["genre"])) {
    $json = json_encode($database);
} else {
    $genre = $_GET["genre"];
    $selected_discs = [];
    // scorro il database e scelgo solo gli album che hanno lo stesso genere
    foreach($database as $item) {
        if ($item["genre"] === $genre) {
            $selected_discs[] = $item;
        }
    }
    // nel json inserisco l'array formato dal punto di sopra
    $json = json_encode($selected_discs);
}

header("Content-Type: application/json");
echo $json;
