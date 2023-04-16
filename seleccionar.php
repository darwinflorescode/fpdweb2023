<?php
session_start();


if (isset($_GET['search'])) {
   if($_GET['search']=="group1" || $_GET['search']=="group2"){
    $_SESSION['ok'] = 1;
    $_SESSION['curso'] = $_GET['search'];
    header("location: ./fdpweb/");
    
   }else{
    header("location: ./");
    session_destroy();
   }

}else{
    header("location: ./");
    session_destroy();
}



?>