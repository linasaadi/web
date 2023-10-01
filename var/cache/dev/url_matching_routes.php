<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/author' => [[['_route' => 'app_author', '_controller' => 'App\\Controller\\AuthorController::index'], null, null, null, false, false, null]],
        '/list' => [[['_route' => 'list', '_controller' => 'App\\Controller\\AuthorController::list'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/detailA/([^/]++)/([^/]++)(*:33)'
                .'|/showService/([^/]++)(*:61)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:96)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'detailA', '_controller' => 'App\\Controller\\AuthorController::detailA'], ['i', 'n'], null, null, false, true, null]],
        61 => [[['_route' => 'showService', '_controller' => 'App\\Controller\\ServiceController::showService'], ['nom'], null, null, false, true, null]],
        96 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
