<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $telefono = $_POST['telefono'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($mailFrom) || empty($message)) {
        header("Location: index.php?contact=empty#form-span");
        exit();
    } else {
        $mailTo = "mcarril@migueljcarrilsa.com.ar, ccloquell@migueljcarrilsa.com.ar, jescudero@migueljcarril.com.ar, agustinacarril@migueljcarril.com.ar";
        $txt = "Email enviado desde el sitio web www.migueljcarrilsa.com.ar \n\nNombre: ".$name.".\n\n"."Teléfono: ".$telefono.".\n\n"."Mail: ".$mailFrom.".\n\n"."Mensaje: ".$message;
        
        mail($mailTo, $subject, $txt);
        header("Location: index.php?contact=success#form-span");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
