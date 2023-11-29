<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// $config = require(BASE_PATH . 'config.php');
// $db = new Database($config['database']);

$currentUserId = 1;
$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note,
]);
