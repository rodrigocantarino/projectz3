<?php

namespace Album;

use Zend\Router\Http\Segment;

return [
    
    // Configuração das Controllers. 
    // Comentada, pois foi re-definida em: Album\Module::getControllerConfig();
    //'controllers' => [
    //      'factories' => [
    //        Controller\AlbumController::class => InvokableFactory::class,
    //      ],
    //],
    
    // Configuração das Rotas
    'router' => [
        'routes' => [
            'album' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/album[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\AlbumController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    
    
    // Configuração das Views
    'view_manager' => [
        'template_path_stack' => [
            'album' => __DIR__ . '/../view',
        ],
    ],
];