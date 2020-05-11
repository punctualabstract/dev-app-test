<?php

require_once __DIR__ . '/../vendor/autoload.php';

try {
    $app = new Pop\Application(include __DIR__ . '/../app/config/app.web.php');
    $app->register(new Pab\Module());
    $app->run();
} catch (\Exception $exception) {
    echo $exception->getMessage();
}
