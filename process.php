<?php

if(isset($_POST['button_pressed']))
{
    $to      = 'borzasebastiancornel@gmail.com';
    $subject = 'PLATA TAXEI FORMULAR';
    $message = 'Observatii';

    mail($to, $subject, $message);
}

?>