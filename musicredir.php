<?php
// Contact Information
$name = $_POST["inputName"];
$email = $_POST["inputEmail"];
$phoneHome = $_POST["inputPhoneHome"];
$phoneWork = $_POST["inputPhoneWork"];
$phoneCell = $_POST["inputPhoneCell"];

// Experience
$servedBefore = $_POST["optionsRadios"];
$experience = $_POST["experience"];

// Musical Experience
$solo = $_POST["solo"];
$lead = $_POST["lead"];
$backup = $_POST["backup"];
$guitar = $_POST["guitar"];
$electric = $_POST["electric"];
$bass = $_POST["bass"];
$piano = $_POST["piano"];
$drums = $_POST["drums"];
$musicOther = $_POST["musicOther"];
$musicOtherDesc = $_POST["musicOtherDesc"];

// Role Description
$describe = $_POST["describe"];

$subject = "(FSBC) Worship Team Application";

// Body
$body =
"
Name: $name
E-Mail: $email
Home Phone: $phoneHome
Work Phone: $phoneWork
Cell Phone: $phoneCell

Have you ever served on a worship team before? $servedBefore
If yes, in what capacity? $experience

Gifts and Talents
Singing Solo: $solo
Lead Singer: $lead
Backup/Harmony: $backup
Playing Guitar: $guitar
Electric Guitar: $electric
Bass Guitar: $bass
Piano/Keyboard: $piano
Drums: $drums
Other: $musicOther - $musicOtherDesc

Please write briefly below the role you believe you could play in this ministry and a snapshot of where you are currently in your walk with Christ.
$describe
";

$headers = "From: musicapplication@fifthstreetbaptistchurch.com" . "\r\n" .
    "Reply-To: $inputEmail" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

// To add an email, add it to the ones below
// kwfifthstreet@aol.com
$to = array("ben@butzow.me", "j2cool2012@gmail.com");

foreach ($to as $toAddress) {
    mail($toAddress, $subject, $body, $headers);
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="refresh" content="5;URL='home.html'" />
        <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

        <title>Redir - Fifth Street Baptist Church</title>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap.css" rel="stylesheet">
        <link href="fifthstreet.css" rel="stylesheet">

    </head>

    <body>
        <div class="container">
            <div class="center">
                <p>Thank you for taking this first step in exploring the possibilities of
                    serving in Fifth Street Baptist’s music ministry!</p>
                <br /><br />
                <em>If you are not automatically redirected in 5 seconds, please <a href="home.html">click here.</a></em>
                    </div>


            </div>

            <!-- /.container -->

            <!-- Bootstrap core JavaScript
================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('.dropdown-toggle').dropdown();
                });
            </script>
            </body>

        </html>