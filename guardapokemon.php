<?php 

$jsonstring = file_get_contents("pokemon_json.js");
$tempArray = json_decode($jsonstring, true);

$nuevopokemon = array('nuemero' => count($tempArray)+1,
					    "nombre"=> $_POST["form_nombre"],
					    "tipo1" => $_POST["form_tipo1"],
					    "tipo2" => $_POST["form_tipo2"],
					    "evoluciona" => $_POST["form_evoluciona"],
					    "animal" => $_POST[""],
					    "accion" => $_POST[""],
					    "sexo" => $_POST[""],
					    "raro" => $_POST[""],
					    "habitat"=> $_POST[""],
					    "cant_evo" => $_POST[""],
					    "evolucionado" =>$_POST[""],
					    "tipo_evo" => $_POST[""]
	);


array_push($tempArray, $nuevopokemon);

$string_json_output = json_encode($tempArray, JSON_UNESCAPED_UNICODE );

$file = fopen("pokemon_json.js", "w");
fwrite($file, $string_json_output);
fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pokemon</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style type="text/css">
	
  html {
    font-family: GillSans, Calibri, Trebuchet, sans-serif;
  }
     
</style>
</head>
<body>
 <div class="container">
 	<div class="row">
 		<h1><center>Tu <img src='pokemon.png' style='width: 20%;' class='responsive-img' /> <strong><?php echo $_POST[""]; ?></strong> a sido agregado </center></h1>
 		<br> <a  class='btn waves-effect waves-light right' href='index.html'> Jugar de Nuevo <i class='material-icons right'>replay</i></a>
 	</div>
 </div>

 </body>
</html>