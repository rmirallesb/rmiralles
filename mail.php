<?php
    $url1="http://www.rmiralles.es";
    $url2="http://www.rmiralles.es/email.html"; 

if (isset ($_POST['submit'])) {
    $from = $_POST['name'];
    $text = $_POST['text'];
    $mail = $_POST['email'];
    $subject = "www.rmiralles.es - email";
    $header = "EMAIL";
    $to = "raulmiralles92@gmail.com";
 
    $mensaje = "Nombre: $from \n\nEmail: $mail  \n\nComentario: $text";
 
    mail($to, $subject, $mensaje, $header);
    print '<script language="JavaScript">'; 
    print 'alert("Mensaje enviado con éxito");'; 
    print '</script>';
    echo "<SCRIPT>window.location='$url1';</SCRIPT>";
}
else
{
    print '<script language="JavaScript">'; 
    print 'alert("Error, el mensaje no ha sido enviado");'; 
    print '</script>';
    echo "<SCRIPT>window.location='$url2';</SCRIPT>";
}
 
?>