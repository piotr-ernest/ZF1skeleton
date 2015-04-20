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
        'path' => APPLICATION_PATH . '/Bootstrap.php',
        'class' => 'bootstrap'
    ),
    'appnamespace' => 'Application',
    'autoloadernamespaces' => array(
        'CloutWork',
    ),
    'resources' => array(
        'frontController' => array(
            //'controllerDirectory' => APPLICATION_PATH . '/modules/Frontend/controllers',
            'params' => array(
                'displayExceptions' => 1,
            ),
            'moduleDirectory' => APPLICATION_PATH . '/modules',
        ),
        'layout' => array(
            'layoutPath' => APPLICATION_PATH . '/layouts/scripts'
        ),
        'modules' => array(
        ),
    ),
    'frontend' => array(
        'resources' => array(
            'frontController' => array(
                'controllerDirectory' => APPLICATION_PATH . '/modules/frontend/controllers',
                'defaultControllerName' => 'Start',
                'params' => array(
                    'displayExceptions' => 1,
                ),
                'moduleDirectory' => APPLICATION_PATH . '/modules',
            ),
            'layout' => array(
                'layoutPath' => APPLICATION_PATH . '/layouts/scripts'
            ),
        ),
    ),
    'admin' => array(
        'resources' => array(
            'frontController' => array(
                'controllerDirectory' => APPLICATION_PATH . '/modules/admin/controllers',
                'defaultControllerName' => 'Panel',
                'params' => array(
                    'displayExceptions' => 1,
                ),
                'moduleDirectory' => APPLICATION_PATH . '/modules',
            ),
            'layout' => array(
                'layoutPath' => APPLICATION_PATH . '/layouts/scripts'
            ),
        ),
    ),
);
