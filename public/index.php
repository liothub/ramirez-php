<?php

include __DIR__ . "/../src/App/functions.php";

// bootstrap.php retourne une  donnée
$app = include __DIR__ . "/../src/App/bootstrap.php";

$app->run();

//dd($app);