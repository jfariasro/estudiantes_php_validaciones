<?php

require '../config/conexion.php';

$variableConex = new Conexion();
$conexion = $variableConex->getPdo();

if (isset($_POST['formularioAdd'])) {
    $nombre = $_POST['add_nombre'] ?? '';
    $apellido = $_POST['add_apellido'] ?? '';
    $edad = $_POST['add_edad'] ?? '';
    $promedio = $_POST['add_promedio'] ?? '';

    $stmt = $conexion->prepare('INSERT INTO estudiante (nombre, apellido, edad, promedio)
    VALUES (:nombre, :apellido, :edad, :promedio)');
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':edad', $edad, PDO::PARAM_INT);
    $stmt->bindParam(':promedio', $promedio);

    if ($stmt->execute()) {
        $res = [
            'status' => 200,
            'message' => 'Estudiante Registrado Exitosamente'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Estudiante No Pudo Ser Registrado'
        ];
        echo json_encode($res);
        return;
    }
}

$stmt = $conexion->prepare('SELECT * FROM estudiante');

$stmt->execute();

$filas = $stmt->fetchAll();

echo json_encode($filas);