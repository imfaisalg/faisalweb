<?php

session_start();
include_once 'header.php';
include_once 'dbconnect.php';

//set validation error flag as false
$error = false;
$userRole = "";

if(isset($_SESSION['usr_id'])) {
    //
    if ($_SESSION['usr_role'] == "student") {
        ?>
        <div class="container" style="margin-top:100px">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 well">
                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="registerexperimentform">
                        <fieldset>
                            <legend>New Experiment</legend>

                            <div class="form-group">
                                <label for="name">Experiment Name</label>
                                <input type="text" name="expname" placeholder="Experiment Name" required class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="name">Description</label>
                                <input type="text" name="expdescription" placeholder="Description" required class="form-control" />
                            </div>

                            <div class="form-group">
                                <input type="submit" name="newexp" value="Create" class="btn btn-primary" />
                            </div>
                        </fieldset>
                    </form>
                    <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
                </div>
            </div>
           
        </div>


        <?php
    }
}
include_once 'footer.php';
?>


