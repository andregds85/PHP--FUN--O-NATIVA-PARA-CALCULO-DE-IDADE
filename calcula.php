<?php
$dataNascimento = $_POST['dataNasc'];

$date = new DateTime($dataNascimento );
$interval = $date->diff( new DateTime( date('Y-m-d') ) );
$interval->format( '%Y anos' );

$idade=$interval->format( '%Y anos' );
echo $idade;

/*                         
function dataDDD($data){
    return date("d/m/Y", strtotime($data));
}
// exemplo de utilização:

echo "Nome completo: ";
$nome=$_POST["nome"];
echo $nome;

echo "<br>";
echo "Data de Nascimento";
echo $dataNasc=$_POST["dataNasc"];
echo "<br>";
/*
/*echo data($dataNasc); */
                         /*
echo "<br>";
echo "<br>";
echo "<br>";
*/
   /*                      
$data = new DateTime($dataNasc);
/*$data->setDate($dataNasc);*/ /*
echo $data->format('d-m-Y H:i:s');
*/

?>