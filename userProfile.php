<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/jquery.jscroll.js"></script>
</head>
<body>
 <?php
  include 'conn.php';	
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 
  $provincia = $_POST['provincia'];
  $departamento = $_POST['departamento'];
  $localidad = $_POST['localidad'];
  $barrio = $_POST['barrio'];
  $calle = $_POST['calle'];
  $casa = $_POST['casa'];
  $usuario = $_SESSION['Tabla_Usuario_01_Id'];
  
/*   $query = "INSERT INTO `tabla_Domicilio_02` (`Tabla_Domicilio_02_Provincia`, `Tabla_Domicilio_02_Departamento`, `Tabla_Domicilio_02_Localidad`, `Tabla_Domicilio_02_Barrio`, `Tabla_Domicilio_02_Calle`, `Tabla_Domicilio_02_Casa`) VALUES ('$provincia', '$departamento', '$localidad', '$barrio', '$calle', '$casa'); ";
 */  
try {
  $query = "INSERT INTO `tabla_domicilio_02` (`tabla_domicilio_02_Provincia`, `tabla_domicilio_02_Ciudad`, `tabla_domicilio_02_Departamento`, `tabla_domicilio_02_Barrio`, `tabla_domicilio_02_Calle`, `tabla_domicilio_02_Casa`,`rela_Tabla_Usuario_01`) VALUES ('$provincia', '$departamento', '$localidad', '$barrio', '$calle', '$casa', '$usuario');";
  print $query;

  if (mysqli_query($conn, $query)) {
    echo "ok";}
} catch (\Exception $e) {
  echo $e->getMessage();
}

?>

</body>
</html>