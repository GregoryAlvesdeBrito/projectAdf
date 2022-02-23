<?php
    ini_set("SMTP","ssl:smtp.gmail.com" );
    ini_set("smtp_port","465");
    
     if(isset($_POST['email']) &&!empty($_POST['email'])  ) {

    $nome = ($_POST['name']);
    $email  = ($_POST['email']);
    $mensagem = ($_POST['message']);
    

    $to = "tiawyuno@gmail.com";
    $subject = "Contato Site Sucata";
    $body = "Nome: ".$nome."\r\n".
            "Email: ".$email."\r\n".
            "Mensagem: ".$message;

    $headers = "From:gregorybrito148@gmail.com "."\r\n".
                "Replay-To".$email."\r\n".
                "X=Mailer:PHP/".phpversion();
    };


if(mail($to, $subject, $message, $headers)){
    
    echo("Enviado com Sucesso"); 
}
else{
    echo("Email não pode ser Enviado");
};
