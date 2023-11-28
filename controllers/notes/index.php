<?php

use Core\Database;

$config = require(BASE_PATH . 'config.php');
$db = new Database($config['database']);

$currentUserId = 1;
$notes = $db->query('select * from notes where user_id = 1')->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes,
]);

