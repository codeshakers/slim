<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Container\ContainerInterface;
use Slim\Views\PhpRenderer;

final class HomeAction
{
    public function __construct(PhpRenderer $view)
    {
        $this->view = $view;
    }

    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface {
        $view = $this->view;
        $view->render($response, 'header.php');
        $view->render($response, 'home.php');
        $view->render($response, 'footer.php');

        return $response;
    }
}
