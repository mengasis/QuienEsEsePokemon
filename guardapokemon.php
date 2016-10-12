<?php 

$jsonstring = file_get_contents("pokemon_json.js");
$tempArray = json_decode($jsonstring, true);

$nuevopokemon = array('nuemero' => count($tempArray)+1,
					    "nombre"=> $_POST["nombre"],
					    "tipo1" => $_POST["tipo1"],
					    "tipo2" => $_POST["tipo2"],
					    "evoluciona" => $_POST["evoluciona"],
					    "animal" => $_POST["animal"],
					    "accion" => $_POST["accion"],
					    "sexo" => $_POST["sexo"],
					    "raro" => $_POST["raro"],
					    "habitat"=> $_POST["habitat"],
					    "cant_evo" => $_POST["cant_evo"],
					    "evolucionado" =>$_POST["evolucionado"],
					    "tipo_evo" => $_POST["tipo_evo"]
	);


array_push($tempArray, $nuevopokemon);

$string_json_output = json_encode($tempArray, JSON_UNESCAPED_UNICODE );

$file = fopen("pokemon_json.js", "w");
fwrite($file, $string_json_output);
fclose($file);
?>

 		<h1><center>Tu <img src='pokemon.png' style='width: 20%;' class='responsive-img' /> <strong><?php echo $_POST["nombr"]; ?></strong> a sido agregado </center></h1>
 		<br> <a  class='btn waves-effect waves-light right' href='index.html'> Jugar de Nuevo <i class='material-icons right'>replay</i></a>