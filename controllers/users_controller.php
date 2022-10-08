<?php
    require_once('../models/conexion.php');
    require_once('../models/users_model.php');

    $opc = $_GET['opc'];
    switch($opc){
        case 1: $objBD = new MYSQLBD(); // REGISTRO DE USUARIOS
                $conBD = $objBD->connectBD();

                $nombre = $_POST['txtNombre'];
                $apepat = $_POST['txtApePat'];
                $apemat = $_POST['txtApeMat'];
                $email  = $_POST['txtEmail'];
                $nick   = $_POST['txtNickname'];
                $pass   = md5($_POST['txtPassword']);
                
                $objUser = new USERMODEL($nombre,$apepat,$apemat,$email,$nick,$pass);
                $objUser->INSUSER($conBD);

                break;
        case 2:
        case 3:

    }
?>