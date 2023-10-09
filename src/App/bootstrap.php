<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Controllers\HomeController;


$app = new App();

// donne le nom de la classe avec le namespace, dans une chaine
//echo HomeController::class;
$app->get('/', [HomeController::class, 'home']);



return $app;