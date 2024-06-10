<?php

function SubirImagen()
{
    $extension = explode('.', $_FILES['add_imagen']['name']);

    $nuevo_nombre = rand() . '.' . $extension[1];

    $ubicacion = './uploads/' . $nuevo_nombre;

    move_uploaded_file($_FILES['add_imagen']['tmp_name'], $ubicacion);

    return $nuevo_nombre;
}

function ObtenerNombreImagen($id, PDO $conexion, $tabla)
{
    $stmt = $conexion->prepare("SELECT imagen FROM $tabla WHERE id = :id");

    $stmt->execute(array(
        ':id' => $id,
    ));

    $fila = $stmt->fetch(PDO::FETCH_ASSOC) ?? null;

    return $fila;
}
