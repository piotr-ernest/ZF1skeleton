<?php

return array(
    'phpSettings' => array(
        'display_startup_errors' => 1,
        'display_errors' => 1,
    ),
    'includePaths' => array(
        'library' => APPLICATION_PATH . "/../library"
    ),
    'bootstrap' => array(
        'path' => APPLICATION_PATH . '/modules/frontend/Bootstrap.php',
        'class' => 'frontend_bootstrap'
    ),
    'appnamespace' => 'Application',
    'autoloadernamespaces' => array(
        'CloutWork',
    ),
    
    'frontend' => array(
        'resources' => array(
            'frontController' => array(
                'controllerDirectory' => APPLICATION_PATH . '/modules/frontend/controllers',
                'defaultControllerName' => 'start',
                'params' => array(
                    'displayExceptions' => 1,
                ),
                'moduleDirectory' => APPLICATION_PATH . '/modules',
            ),
            'layout' => array(
                'layoutPath' => APPLICATION_PATH . '/layouts/scripts',
                'layout' => 'layout'
            ),
            'modules' => array(
            ),
        ),
    ),
);
