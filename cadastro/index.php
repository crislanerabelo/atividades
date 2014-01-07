<?php
require_once("menu.php");

    session_start();
    
    
    if(isset($_SESSION["cadastros"])){
        
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $pessoas){
            echo "$pessoas <br/>";
            
        }
    }
    else{
        echo "Nao existem pessoas cadastradas";
    }
    
    
?>

