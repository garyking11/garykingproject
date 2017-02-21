<?php
$errors = '';
$myemail = 'gary@garykingweb.com';//<!-- Put Your email address here. -->
if (empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['message'])
) {
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email_address)
) {
    $errors .= "\n Error: Invalid email address";
}

if (empty($errors)) {
    $to = $myemail;
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. " .
        " Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message";

    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";

    mail($to, $email_subject, $email_body, $headers);
    //redirect to the 'thank you' page
    header('Location: contact-form-thank-you.php');
}
?><!doctype html>
<html lang="en">

<head>
<?php require_once '../../../assets/includes/head.php'; ?>
</head>

<body>

<div class="bg-pink">
    <div class="container">
        <a href="/"><img class="logo image-logo-100" src="../../../assets/images/gkp-banner.png"
                         alt="GARY KING PROJECT"></a>
    </div>
</div>

<?php //require_once '../../../assets/includes/logo.php'; ?>
<?php //require_once '../../../assets/includes/nav.php'; ?>

<div class="container">
    <h2 class="bg-pink  text-black">Gary King Project</h2>
</div>

<div class="container">
    <!-- This page is displayed only if there is some error -->
    <?php
    echo nl2br($errors);
    ?>


    <?php require_once '../../../assets/includes/footer.php'; ?>

</div>

</body>
</html>