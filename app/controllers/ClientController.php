<?php
require_once 'app/models/Client.php';

class ClientController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $clients = $this->model->getAllClients();
        include 'app/views/clients.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->createClient($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address']);
            header('Location: index.php');
        }
        include 'app/views/create_client.php';
    }
}
?>
