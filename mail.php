<?php
    $url="http://www.rmiralles.es"; 

if (isset ($_POST['submit'])) {
    $from = $_POST['name'];
    $text = $_POST['text'];
    $mail = $_POST['email'];
    $subject = "www.rmirales.es - email";
    $header = "EMAIL";
    $to = "raulmiralles92@gmail.com";
 
    $mensaje = "Nombre: $from \n\nEmail: $mail  \n\nComentario: $text";
 
    mail($to, $subject, $mensaje, $header);
    print '<script language="JavaScript">'; 
    print 'alert("mensaje");'; 
    print '</script>';
    echo "<SCRIPT>window.location='$url';</SCRIPT>";
}
else
{
    echo "Error, el mensaje no ha sido enviado";
}
 
?>