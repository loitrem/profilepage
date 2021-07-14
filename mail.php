<?php

if (isset($_POST["email"])){
    $captcha = $_POST["g-recaptcha-response"];
    $secretkey = "6Ldet5QbAAAAADjVjqTk9nyJQ8Xbdbb5ptU2QaEc";
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.urldecode($secretkey).'&response='.urldecode($captcha);
    $response = file_get_contents($url);
    $responseKey = json_decode($response,TRUE);
}

if ($responseKey["success"]==TRUE){
    $email = "empty";
    $message = "empty";

    if ($_POST['email']==null||$_POST['textarea']==null){
        header("Location: index.php?error=2#contact");
    }

    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['textarea']);

    $to = "ski_fix@hotmail.com";
    $subject = "email from website";

    if ($email!=null&&$message!=null){
        $to = "ski_fix@hotmail.com";
        $subject = "Loitrem.com - From : " . $email;
        $headers = 'Loitrem.com - From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);
    }
}    
else if ($responseKey["success"]==FALSE){
    header("Location: index.php?error=1#contact");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" detached></script>
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Email has been sent<br><br></h1>
    <div class="text-center">You will be redirected in 5 seconds or click the link below.</div><br/>
    <h1 class="text-center"><a href="http://loitrem.com" class="text-center text-decoration-none fs-4">Back to Home</a></h1>

    <?php 
        header('Refresh: 5; URL=index.php');
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>