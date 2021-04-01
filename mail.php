<?php
require_once("phpMailer/PHPMailer.php");

require_once("phpMailer/Exception.php");

require_once("phpMailer/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

use PHPMailer\PHPMailer\SMTP;

$pm=new PHPMailer(true);

try{

    $pm->SMTPDebug =2;
    $pm->isSMTP(true);
    $pm->Host="";
    $pm->SMTPAuth =true;
    $pm->Username="";
    $pm->Password="";
    $pm->SMTPSecure="tls";
    $pm->Port=587;

    $pm->setFrom("test@gmail.com");
    $pm->addAddress("rkonahian@gmail.com");


    $pm->Subject="Here is the invoice";
    $pm->Body="hello whats the going hell";
    $pm->Altbody="here is the invoice from your last purchase";
    $pm->isHTML(true);
    // $pm->addAttachment("c:\laragon\www\phpMailer\C161059.pdf");
    $pm->send();

    echo "mail sent";
}catch(Exception $e){
    echo "failed".$pm->ErrorInfo;

}