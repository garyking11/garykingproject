<!doctype html>

<html lang="en">
<head>
    <?php require_once 'assets/includes/head.php'; ?>
</head>

<body>
<?php require_once 'assets/includes/logo.php'; ?>
<?php require_once 'assets/includes/nav.php'; ?>


<div class=" container">
    <h2 class="bg-pink  text-black">Contact</h2>
</div>


<div class="container">

    <div class="content">

        <div class="col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">

            <form method="post" name="contact_form"
                  action="assets/includes/contact-form/contact-form-handler.php">
                <label>Your Name:</label>
                <div class="fform-group">
                    <input class="form-control" type="text" name="name">
                </div>

                <label>Email Address:</label>
                <div class="form-group">
                    <input class="form-control" type="text" name="email">
                </div>

                <label>Message:</label>
                <div class="form-group">
                    <textarea class="form-control" name="message"></textarea>
                </div>

                <div class="form-group">
                    <input class="form-control" type="submit" value="Submit">
                </div>

            </form>

        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">

        </div>

        <div class="clear"></div>

    </div>
    <script language="JavaScript">
        var frmvalidator = new Validator("contactform");
        frmvalidator.addValidation("name", "req", "Please provide your name");
        frmvalidator.addValidation("email", "req", "Please provide your email");
        frmvalidator.addValidation("email", "email",
            "Please enter a valid email address");
    </script>

    <?php

    /* $errors = '';
     $myemail = 'gary@garykingweb.com';//<-----Put Your email address here.
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
             " Here are the details:\n Name: $name \n " .
             "Email: $email_address\n Message \n $message";
         $headers = "From: $myemail\n";
         $headers .= "Reply-To: $email_address";
         mail($to, $email_subject, $email_body, $headers);
 //redirect to the 'thank you' page
         header('Location: contact-form-thank-you.html');
     }*/

    ?>

</div>
<?php require_once 'assets/includes/footer.php'; ?>

</body>
</html>
