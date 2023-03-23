<?php

require_once "../app/models/Estudiante.php";


class EstudianteController {
    private $estudianteModel; // Instancia de la clase Estudiante (modelo)

    public function __construct() {
        $this->estudianteModel = new Estudiante();
    }

    public function index() {
        $estudiantes = $this->estudianteModel->getAll();
        require_once "../app/views/estudiantes/index.php";
    }

    public function create() {
        // direcionarlo a la vista de crear 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $edad = $_POST["edad"];
            $this->estudianteModel->create($nombre, $apellido, $edad);
            header("Location: index.php"); // redirecciona a la página principal
        } else {
            require_once "../app/views/estudiantes/create.php"; // llama a la vista create.php
        }


    }

    public function update() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $edad = $_POST["edad"];
            $this->estudianteModel->update($id, $nombre, $apellido, $edad);
            header("Location: index.php"); // redirecciona a la página principal
        } else {
            $id = $_GET["id"];
            $estudiante = $this->estudianteModel->getById($id);
            require_once "../app/views/estudiantes/update.php"; // llama a la vista update.php
        }
    }

    
    public function delete() {
        $id = $_GET["id"];
        $this->estudianteModel->delete($id);
        header("Location: index.php");
    }





}
