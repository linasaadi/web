<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_author' => [[], ['_controller' => 'App\\Controller\\AuthorController::index'], [], [['text', '/author']], [], [], []],
    'list' => [[], ['_controller' => 'App\\Controller\\AuthorController::list'], [], [['text', '/list']], [], [], []],
    'detailA' => [['i', 'n'], ['_controller' => 'App\\Controller\\AuthorController::detailA'], [], [['variable', '/', '[^/]++', 'n', true], ['variable', '/', '[^/]++', 'i', true], ['text', '/detailA']], [], [], []],
    'app_service' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/service']], [], [], []],
    'showService' => [['nom'], ['_controller' => 'App\\Controller\\ServiceController::showService'], [], [['variable', '/', '[^/]++', 'nom', true], ['text', '/showService']], [], [], []],
    'app_test' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
