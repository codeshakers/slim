<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);
    $app->get('/home', \App\Action\HomeAction::class);
    $app->get('/profile', \App\Action\ProfileAction::class);
    $app->any('/profile-galeri', \App\Action\ProfileGaleriAction::class);
    $app->get('/database-{type}', \App\Action\DatabaseAction::class);
};
