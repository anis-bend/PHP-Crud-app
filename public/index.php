<?php
require_once '../config/database.php';
require_once '../app/controllers/ClientController.php';

$clientController = new ClientController(new Client($db));
$clientController->index();
?>
