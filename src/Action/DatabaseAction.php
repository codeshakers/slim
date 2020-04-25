<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Container\ContainerInterface;
use Illuminate\Database\Connection;

final class DatabaseAction
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $args
    ): ResponseInterface {
        if ($args['type'] == 'test') {
            $connection = $this->connection;
            $row = $this->connection->table('tb_user')->find(1);
            $row = json_encode($row);
            $response->getBody()->write($row);
            $response->withHeader('Content-Type', 'application/json');
        } else {
            $response->withStatus(404);
            $response->getBody()->write('Page not found');
        }
        return $response;
    }
}
