<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/notes', 'notes/index.php')->only('auth');
$router->get('/note', 'notes/show.php');

$router->delete('/note', 'notes/destroy.php');
$router->patch('/note', 'notes/update.php');

$router->get('/notes/create', 'notes/create.php');
$router->get('/note/edit', 'notes/edit.php');
$router->post('/notes', 'notes/store.php');

$router->get('/register', 'registration/create.php')->only('quest');
$router->post('/register', 'registration/store.php')->only('quest');

$router->get('/login', 'session/create.php')->only('quest');
$router->post('/session', 'session/store.php')->only('quest');
$router->delete('/session', 'session/destroy.php')->only('auth');