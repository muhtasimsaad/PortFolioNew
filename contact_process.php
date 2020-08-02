<?php

  
     $from = $_REQUEST['email'];
     $name = $_REQUEST['name'];
     $cmessage = $_REQUEST['message'];

mail("muhtasimsaad@gmail.com","My subject","Message from ".$from.". Message -> ".$cmessage);

header("Location: index.php");
?>