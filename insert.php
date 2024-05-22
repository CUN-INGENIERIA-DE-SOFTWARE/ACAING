<?php
include 'db.php';

// Obtener datos del formulario
$owner = isset($_POST['propietario']) ? $_POST['propietario'] : '';
$model = isset($_POST['modelo']) ? $_POST['modelo'] : '';
$licensePlate = isset($_POST['placa']) ? $_POST['placa'] : '';
$entryDate = isset($_POST['fechaing']) ? $_POST['fechaing'] : '';
$exitDate = isset($_POST['fechasal']) ? $_POST['fechasal'] : '';

// Insertar datos en la base de datos
$sql = "INSERT INTO carros (propietario, modelo, placa, fechaing, fechasal)
        VALUES ('$owner', '$model', '$licensePlate', '$entryDate', '$exitDate')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

$conn->close();
?>
