<?php

return [
    'component' => [
        'html' => [
            'class' => 'hikari\html\Html',
            'options' => [
                'shared' => true,
                'register' => true,
            ],
        ],
        'view' => [
            'class' => 'hikari\view\View',
            'properties' => [
                'extension' => 'phtml',
            ],
        ],
        'router' => [
            'class' => 'hikari\router\Router',
            'options' => [
                'shared' => true,
            ],
            'properties' => [
                'cache' => true,
                /**
                 * All routes are grouped into a named category, this name is used when an URI is built.
                 * Names do not affect how routes are processed (first to last).
                 */
                'routes' => [
                    'index' => [
                        'format' => '/',
                        'target' => ['app\controller\Index', 'action' => 'index'],
                    ],
                    /*'testmodule' => [
                        'format' => [
                            '/testmodule',
                            '/testmodule/:controller/:action',
                            '/testmodule/:controller/:action/:id[d+]' => ['@testmodule\:controller', 'test' => 'testing'], // Use specific rule for this match
                        ],
                        'target' => ['@testmodule\:controller', 'action' => 'index'],
                    ],
                    'testregex' => [
                        'regexp' => '/\/testregex\/(?<controller>[\w]+)\/(?<action>[\w+])/',
                        'target' => ['@testregex\:controller', 'action' => 'index'],
                    ],
                    'testmoduleforward' => [
                        'format' => '/testmoduleforward',
                        'target' => ['@testmoduleforward\Index', 'action' => 'index'],
                        'import' => 'testmodule',
                    ],*/
                    'default' => [
                        'format' => [
                            '/:controller/:action/:id',
                            '/:controller/:action',
                            '/:controller',
                        ],
                        'target' => ['app\controller\:Controller', 'action' => 'index', 'id' => null],
                    ],
                ],
            ],
        ],
        'request' => [
            'class' => 'hikari\http\Request',
            'options' => [
                'shared' => true,
            ],
        ],
        'response' => [
            'class' => 'hikari\http\Response',
            'options' => [
                'shared' => true,
            ],
        ],
        'action' => [
            'class' => 'hikari\controller\Action',
        ],
    ],
];
