<?php
/* PHP USADO PARA VALIDAR SENHAS, CASO AS SENHAS DIGITADAS NÃO ESTEJEM AQUI, ELE DIRECIONA PRA OUTRA PÁGINA */

$senha = $_POST['senha'];

switch($senha){
    case '1234';
    include ('nome da pagina');
    break;

    case '123';
    include ('nome da pagina');
    break;

    case '1234567';
    include ('nome da pagina');
    break;

    default;
    include ('senhainvalida.html');
    break;
    
}
?>