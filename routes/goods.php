<?php

$router->group([], function () use ($router) {
    $router->post('goods/list', ['uses' => 'GoodsController@list']);
});