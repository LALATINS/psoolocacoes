<?php
    $hostname = 'sql300.epizy.com'; 
    $user = 'epiz_32535973';
    $password = 'XUfADnVzYvc'; 
    $database = 'epiz_32535973_locacoes';

    $con = mysqli_connect($hostname, $user, $password ,$database) or die ($con -> connect_errno);
?>
