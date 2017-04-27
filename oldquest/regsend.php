<?php
$to = "register@thegreatkeywestquest.us";
$subject = "Key West Quest Registration";
$teamName = $_POST['inputTname'];
$teamCaptain = $_POST['inputTcap'];
$leaderCell = $_POST['inputTcell'];
$leaderMail = $_POST['inputTmail'];
$vehicle = $_POST['inputTcar'];
$teamMembers = $_POST['textArea'];
$numTeam = $_POST['select'];

$message = "Team Name: " . $teamName . "\n"
    . "Team Captain: ". $teamCaptain . "\n"
    . "Leader Cell " . $leaderCell . "\n"
    . "Leader Mail: " . $leaderMail . "\n"
    . "Vehicle: " . $vehicle . "\n"
    . "Team Members: " . $teamMembers . "\n"
    . "Number of Team Memberes: " . $numTeam;

mail("$to", "$subject", "$message");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>The Great Key West Quest</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/paddat.css" rel="stylesheet">
    <link href="css/sticky.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">The Great Key West Quest</a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="rules.html">Rules</a>
                    </li>
                    <li class="active">
                        <a href="reg.html">Registration</a>
                    </li>
                    <li>
                        <a href="hunt.html">Scavenger Hunt</a>
                    </li>
                    <li>
                        <a href="guest.html">Guestbook</a>
                    </li>



                </ul>

            </div>
        </div>

        <div class="container">

            <div class="starter-template">
                <h1>Registration</h1>
                <p class="lead">Thank you for registering!</p>
            </div>
        </div>
        <div class="push"></div>


        <div class="footer">
            <center>
                <p>Website designed by
                    <a href="http://j2cool.com">Jeffrey Matthews II</a>
                </p>
            </center>
        </div>

    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown();
        });
    </script>
</body>

</html>
