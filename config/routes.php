<?php

use Slim\Http\Response;
use Slim\Http\ServerRequest;
use Slim\App;

return function (App $app) {
    $app->get('/', function (ServerRequest $request, Response $response) {
        $response->getBody()->write('Hello, World!');

        return $response;
    });

    $app->get('/test', function (ServerRequest $request, Response $response, array $args) {
        $payload = json_encode(['hello' => 'world'], JSON_PRETTY_PRINT);
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    });
};