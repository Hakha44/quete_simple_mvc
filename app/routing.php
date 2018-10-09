<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 09/10/18
 * Time: 13:27
 */
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method

    ],
    'Category' => [ // Controller
        ['index', '/categories', 'GET'], // action, url, HTTP method
        ['show', '/category/{id}', 'GET'],

    ],
];