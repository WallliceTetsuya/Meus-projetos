<?php 
    
if( $_GET['password'] == 1235){
    echo "Bem vindo Tela de Admin";

}else{
header('Location: index.php');
}