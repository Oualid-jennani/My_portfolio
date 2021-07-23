<?php

session_start();


if(isset($_GET["lang"])){
    $_SESSION['language'] = $_GET["lang"];
}


$acceptLang = ['ar', 'en']; 


if(isset($_SESSION['language']) && in_array($_SESSION['language'], $acceptLang)){
    require_once "index_".$_SESSION['language'].".php";
}
else{
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    require_once "index_$lang.php"; 
}


?>
