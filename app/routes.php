<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);
    $app->get('/database-{type}', \App\Action\DatabaseAction::class);
};
