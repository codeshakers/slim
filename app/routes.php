<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);
    $app->get('/home', \App\Action\HomeAction::class);
    $app->any('/profile', \App\Action\ProfileAction::class);
    $app->get('/database-{type}', \App\Action\DatabaseAction::class);
};
