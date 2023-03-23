<?php


require_once "Database.php";

class Estudiante extends Database {

    public function getAll() {
        $stmt = $this->connect()->prepare("SELECT * FROM estudiantes");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = $this->connect()->prepare("SELECT * FROM estudiantes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($nombre, $apellido, $edad) {
        $stmt = $this->connect()->prepare("INSERT INTO estudiantes (nombre, apellido, edad) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $apellido, $edad]);
    }

    public function update($id, $nombre, $apellido, $edad) {
        $stmt = $this->connect()->prepare("UPDATE estudiantes SET nombre = ?, apellido = ?, edad = ? WHERE id = ?");
        $stmt->execute([$nombre, $apellido, $edad, $id]);
    }

    public function delete($id) {
        $stmt = $this->connect()->prepare("DELETE FROM estudiantes WHERE id = ?");
        $stmt->execute([$id]);
    }
}

?>
