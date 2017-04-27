<?php
    $questions = array(
        "12AB" => "This is the first question",
        "34CD" => "This is the second question",
    );
    // TODO make a list of dummy questions
    if (isset($_GET["q"])) {
        $code = $_GET["q"];
        if (array_key_exists($code, $questions)) {
            $question = $questions[$code];
        } else {
            $question = $questions["12AB"];
        }
    } else {
        $question = $questions["12AB"];
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> - FSBC</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/fifthstreet.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
<?php

include 'navbar.html';

?>

<div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <h4><?php echo($question); ?></h4>
                </div>
            </div>
        </div>

<?php

include 'footer.html';

?>