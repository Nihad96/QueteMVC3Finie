<?php
/**
 * Created by PhpStorm.
 * User: nihad
 * Date: 02/10/18
 * Time: 16:38
 */

// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],
    'Categories' => [ // Controller
        ['index', '/categories', 'GET'], // action, url, HTTP method
        ['show', '/categorie/{id}', 'GET'], // action, url, HTTP method
    ],
];




