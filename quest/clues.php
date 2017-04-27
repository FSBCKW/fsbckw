<?php
    $clues = array(
        "START" => "Welcome to the quest. Enter your clue here!",
        "WRONG" => "Sorry, that is not a valid key!",
        "NOTEAM" => "Team ID invalid. Enter your team ID!",
        "MOONWALK" => "The Jacksons of Gary Indiana may not have sold burgers, but you could get one from them if you don’t like Dominoes.",
        "DANCINGMACHINE" => "Michael and his brothers didn’t sing “Beat it” together, but this number of gents could run across the street and get a “Grand Slam” if they don’t like their burgers.",
        "THEJACKSONS" => "Jackie, Tito, Jermaine, Marlon, and Randy were this to pop icon Michael. But here, you could get a great Cuban sandwich.",
        "STUFFED" => "Though you may be in the dark <br />
You can still go here to play <br />
So find “Music in the Park” <br />
This venue is where your next clue will lay.",
        "PARKPLAY" => "If you want to go play some hoops, you should cruise around this loop. Here Harry Powell was nearly incendiary… and bears the name of Commodore Perry.",
        "PERRYHOOP" => "Beneath the Westernmost end of the span named for the Army fort at this body of water <br />
Put it together and see the light. <br /><br />
2 Nearly surrounded by land is a bight<br />
1 An Army fort is a garrison<br />
4 The direction the sun sets is the west<br />
3 And a span over water is a bridge ",
        "WGBB" => "Nestled in an Old Town Neighborhood <br />
This park is secluded and serene<br />
So to find your next clue, you know what to do <br />
Head to Bill Butler Park . . .. and soon!",
        "SHADYLANE" => "Legends abound of the deeds of yore <br />
On the diamonds of this little island <br />
And some can be found on this pitcher’s mound <br />
In the afternoon shadow of power ",
        "RUBBERBALL" => "If your ship is too often adrift <br />
Then your anchor is simply too small <br />
So head to the Tower, in the East at this hour <br />
For an anchor sufficient for all ",
        "WMTA" => "I hope you’re not scared of the dark <br />
So head down the trail, beyond the rail <br />
Go to Little Hanaca Park <br />
Or your effort will be to no avail ",
        "RAILEND" => "This symbol of Key West High <br />
Is about 10 or 12 feet tall <br />
As you enter the school, it stands like a jewel <br />
When you find it your spirits will fall",
        "BIGCONCH" => " You ran down the trail but to no avail . . . <br />

Your clue said BEYOND the rail  :) <br />

So back to the trail and go BEYOND the rail . . . <br />

To the REAL CLUE near the end of the trail!",
        "PASTRAIL" => "Your next clue will be strictly audio <br />
“Working Man” is your signal to stay <br />
Tune to 88.7 on your FM dial <br />
Near the fort on Nancy Cherry Way ",
        "MORSECODE" => "Nice try, but what does the code say?",
        "BACKTOIT" => "Proceed to the White Street Pier. Your next clue is on a brick in the water near the pier.  You’ll find your clue written on the brick.  READ the clue then replace the brick where you found it.   You’ll find the brick at the intersection of these two lines: <br />

LINE 1)  A line formed by the southwest corner of the White ST Pier and the northwest corner of the Main pier section.  (Line up the Blue lights duh) <br />
LINE 2)  The line formed by  the two green lights about halfway down the Pier
",
        "BGL" => "A&P Grocery....",
        "OLDFOOD" => "Western Auto",
        "TIRED" =>"You have persevered through thick and thin <br />

You have fought the good fight to win <br />

To Smathers beach proceed, but above all take heed <br />

The trophy lies buried herein: <br />

The intersection of the following two lines <br /> <hr /> 

1) A line drawn through the mast of the hobie cats west of beach entry #8 <br />

2) A line drawn through the easternmost set of railposts at beach entry #8.
<h2><em>GOOD LUCK!</em></h2>",
        
    );
    

    // TODO make a list of dummy questions
    if (isset($_GET["q"])) {
        $code = $_GET["q"];
        if (array_key_exists($code, $clues)) {
            $clue = $clues[$code];
            if(isset($_GET['teamID'])) {
                $teamerr="";
                $subject = "A Team has found a clue!";
                $teamID = $_GET['teamID'];
                $message = $teamID . " has found a clue! They entered " . $code . ". Be sure to update their progress.";
              mail("j2cool2012@gmail.com", $subject, $message);
            }
            else {
                $teamerr = "has-error";
                }
        } else {
            $clue = $clues["WRONG"];
        }
    } else {
        $clue = $clues["START"];
    }
    if(isset($_GET['teamID'])) {
        $teamerr="";
    }
    else {
        $teamerr = "has-error";
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
        <title>Clues - FSBC</title>
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
        <div class="col-lg-12">
         <div class="alert alert-dismissible alert-success" data-wr_replaced="true">
  <button type="button" class="close" data-dismiss="alert" data-wr_replaced="true">×</button>
  <strong data-wr_replaced="true">The Quest is now underway!! </strong>If you still need to sign up, <a href="reg.php" class="alert-link" data-wr_replaced="true">do so here</a>.
</div>
         </div>
     
     </div>
    
    
 <div class="center">
     
                <h1>Quest</h1><em>Clue Entry</em>
     <hr />

<div class="well" data-wr_replaced="true">
  <?php echo($clue); ?>
</div>
<form class="form-horizontal center" action="clues.php" method="get" name="mainform" enctype="multipart/form-data">
                <fieldset>
                    <legend>Clue Entry</legend>
                    <div class="form-group center <?php echo($teamerr); ?>">
                        <label for="teamID" class="col-lg-2 control-label">Team ID</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="teamID" name="teamID" placeholder="Name of your team">
                        </div>
                    </div>
                    <div class="form-group center">
                        <label for="q" class="col-lg-2 control-label">Clue</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="q" name="q" placeholder="Enter the clue you found here. ALL CAPS.">
                            
                        </div>
                    </div>
                       
                    </div>

                    <div class="form-group" data-wr_replaced="true">
      <div class="col-lg-10 col-lg-offset-2" data-wr_replaced="true">
        <button type="reset" class="btn btn-default" data-wr_replaced="true">Reset</button>
        <button type="submit" class="btn btn-primary" data-wr_replaced="true">Submit</button>
      </div>
                </fieldset>
            </form>
        </div>
    <p class="center">If you get stuck, email <a href="mailto:quest@fsbckw.org">quest@fsbckw.org</a></p>
</div>
<?php

include 'footer.html';

?>