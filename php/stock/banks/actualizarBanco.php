<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: ../../../");
}else{
    require_once("../../conn.php");
    
    if(mysqli_query($veja, "UPDATE bancos SET nombre = '".strtoupper($_POST['nombre'])."', activo = '".$_POST['activo']."' WHERE id = '".$_POST['id']."' LIMIT 1")){
        echo "1";
    }else{
        echo "0";
    }

    mysqli_close($stock);
}
?>