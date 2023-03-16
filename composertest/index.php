<?php

require_once __DIR__. '/vender/autoload.php';

use Apps\Controllers\TestController;

$app = new TestController;
$app->run();

?>