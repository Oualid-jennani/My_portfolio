<?php
session_start();



if(isset($_POST["color"])){
    $_SESSION['color'] = $_POST["color"];
}

function CheckPost($var){
    $var=trim($var);
    $var=strip_tags($var);
    $var=stripslashes($var);
    if(empty($var)) return false;
    else return $var;
}

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])){

    $name = CheckPost($_POST["name"]);
    $email = CheckPost($_POST["email"]);
    $Sujet = CheckPost($_POST["subject"]);
    $message = CheckPost($_POST["message"]);

    $message = "Message from Wali{dev}
Nom Complet : $name
Email : $email
Sujet : $Sujet
Message : 
$message
    ";

    $subject="Wali{dev} contact";
    $destinataire="walid.tdi.jennani@gmail.com";
    $headers = "From:" . $email;

    $infoSend = "";

    

    $messageSuccess = "&#10004; Message success thanks";
    $messageWrong = "&#9888; Message wrong !!! Please try again";
    
    if($_SESSION['language'] == "ar"){
        $messageSuccess = "&#10004; تم الإرسال بنجاح . شكرا لك";
        $messageWrong = "&#9888; تعذر الإرسال !!! حاول مرة أخرى";
    }

    if(mail($destinataire,$subject,$message,$headers))
    {
        $infoSend="<span class='success'>$messageSuccess</span>";
	}
	else{
		$infoSend="<span class='warning'>$messageWrong</span>";
    }
    
    
    echo $infoSend;
    
}


?>
