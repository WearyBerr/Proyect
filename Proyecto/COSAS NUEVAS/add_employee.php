

<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "root", "celora3");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$secondLastName = $_POST['secondLastName'];
$departmentCode = $_POST['departmentCode'];
$password = $_POST['password'];
$userType = $_POST['userType'];


if($departmentCode == 'COMPR'){
    $user = 'u2';
}else{
    $user = 'u1';
}

// Insertar en la base de datos
$query = "INSERT INTO employee (firstName, lastName, secondLastName, departmentCode, password, userType) 
          VALUES ('$firstName', '$lastName', '$secondLastName', '$departmentCode', '$password', '$user')";
if ($conn->query($query) === TRUE) {
    header("Location: employee.php"); // Redirige a la página principal
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}


?>

