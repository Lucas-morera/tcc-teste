<?php 

$host = 'localhost';
    $user = 'root';
    $senha = '';
    $dtbs = 'users';

    $con = mysqli_connect($host,$user,$senha,$dtbs);

	if(!$con){
        echo 'Não foi possivel conectar ao servidor .';
    }
    else{
       
    }


?>