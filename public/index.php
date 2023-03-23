<?php

require_once "../app/controllers/EstudianteController.php";

$action = $_GET["action"] ?? "index"; 

switch ($action) {
    case "index":
        $controller = new EstudianteController();
        $controller->index(); // este método llama a la vista index.php
        break;
    case "create":
        $controller = new EstudianteController();
        $controller->create(); // este método llama a la vista create.php
        break;
    case "update":
        $controller = new EstudianteController();
        $controller->update(); // este método llama a la vista update.php
        break;
    case "delete":
        $controller = new EstudianteController();
        $controller->delete(); // este método llama a la vista delete.php 
        break;
    default:
        header("Location: index.php");
        break;
}

?>
