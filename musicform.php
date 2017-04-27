<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Worship Team Application - FSBC</title>
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
            <form class="form-horizontal" action="musicredir.php" method="post">
                <fieldset>
                    <legend>Worship Team Application</legend>

                    <div class="form-group">
                        <label for="inputName" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your full name">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">E-Mail</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhoneHome" class="col-lg-2 control-label">Phone Number(s)</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" id="inputPhoneHome" name="inputPhoneHome" placeholder="Home">
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" id="inputPhoneWork" name="inputPhoneWork" placeholder="Work">
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" id="inputPhoneCell" name="inputPhoneCell" placeholder="Cell">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Have you ever served on a worship team before?</label>
                        <div class="col-lg-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Yes" checked="">
                                    Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="No">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">If yes, in what capacity?</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="textArea" name="experience" placeholder="Type here..."></textarea>
                            <span class="help-block">Please describe your role in your previous worship team</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="selectArea" class="col-lg-2 control-label"> Please select all items that apply to your gifts and talents:</label>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="solo" value="Yes"> Singing Solo
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="lead" value="Yes"> Lead Singer
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="backup" value="Yes"> Backup/Harmony
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="guitar" value="Yes"> Playing Guitar
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="electric" value="Yes"> Electric Guitar
                                </label>
                            </div>
                        </div>


                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="bass" value="Yes"> Bass Guitar
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="piano" value="Yes"> Piano/Keyboard
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="drums" value="Yes"> Drums
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="musicOther" value="Yes"> Other
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" id="other" name="musicOtherDesc" placeholder="Other...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="describe" class="col-lg-12 center">Please write briefly below the role you believe you could play in this
                            ministry and a snapshot of where you are currently in your walk with
                            Christ.  </label>
                        <div class="col-lg-12">
                            <textarea class="form-control" rows="5" name="describe" id="describe"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <a href="music.html" class="btn btn-default">Cancel</a>
                            <a href="#agree" type="submit" class="btn btn-primary" data-toggle="modal">Submit</a>
                            <!-- button type="submit" class="btn btn-primary">Submit</button -->
                        </div>
                    </div>
                </fieldset>
                
                <div class="modal fade center" id="agree" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Please agree to the following conditions</h4>
                            </div>
                            <div class="modal-body">
                                <p><em>By submitting this application, I agree that I have read the <a href="musictos.php" target="_blank">Fifth Street Baptist Church Music Ministry Guidelines</a> and understand their importance in providing music which is God-honoring and will provide the best opportunity possible for congregants to enter into worship.</em></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <!-- a href="musicredir.php" type="button" class="btn btn-success">Agree</a -->
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>


        </div>



<?php

include 'footer.html';

?>