<?php

return [
    'routes' => [
        '/' => [
            'controller' => 'Pab\Controller\IndexController',
            'action'     => 'index'
        ],
        '/home' => [
            'controller' => 'Pab\Controller\IndexController',
            'action'     => 'index'
        ],
        '/new-orders' => [
            'controller' => 'Pab\Controller\IndexController',
            'action'     => 'orders'
        ],
        '/active-users' => [
            'controller' => 'Pab\Controller\IndexController',
            'action'     => 'users'
        ],
        '/active-users/:id' => [
            'controller' => 'Pab\Controller\IndexController',
            'action'     => 'user'
        ],
        '/admins' => [
            'controller' => 'Pab\Controller\IndexController',
            'action'     => 'admins'
        ],
        '*' => [
            'controller' => 'Pab\Controller\IndexController',
            'action'     => 'error'
        ]
    ]
];