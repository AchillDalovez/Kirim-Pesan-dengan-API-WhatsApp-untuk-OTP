<?php
include("./library/whatsva.php");

$whatsva = new Whatsva();

$instance_key = "V103EvgIU66v";
$jid = "085693723196";

$message = "Halo"; 
        

$sendMessage = $whatsva->sendMessageText($instance_key,$jid,$message);

print_r($sendMessage);
