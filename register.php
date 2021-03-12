<?php $pagetitle = "REGISTER" ?>

<?php include('insert.php');?>

<?php include('header-white.php');?>
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
 
    <div class="container-fluid section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 text-left" style="border: 1px solid #ccc; padding: 25px; margin-top: 50px;">
                    <h2 class="text-left text-base" style="font-size: 30px; margin-bottom: 20px;">Registration form</h2>
                    
                    <p>
                    * Maximum number of participants per team is 5.<br>
                    * Minimum number of participants per team is 3.<br>
                    </p>
                    
                    <hr>
                    
                    <form name="registration" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateitem();">
                        
                        <div class="form-group row">
                            <div class="col-md-4 form-group">
                                <label>Name (Head of delegation) <span class="text-danger">*</span></label>
                                <input type="text" name="e_name" id="e_name" class="form-control" required value="<?php echo $uname; ?>">
                            </div>    
                            <div class="col-md-4 form-group">
                                <label>Email (Head of delegation) <span class="text-danger">*</span></label>
                                <input type="email" name="e_email" id="e_email" class="form-control" required value="<?php echo $uemail; ?>"> 
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Contact no. (Head of delegation) <span class="text-danger">*</span></label>
                                <input type="tel" name="e_phone" id="e_phone" class="form-control" required value="<?php echo $uphone; ?>">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6 form-group">
                                <label>Name of 2<sup>nd</sup> participant <span class="text-danger">*</span></label>
                                <input type="text" name="e_p2" id="e_p2" class="form-control" required value="<?php echo $up2; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Contact no. <span class="text-danger">*</span></label>
                                <input type="tel" name="e_p2Phone" id="e_p2Phone" class="form-control" required value="<?php echo $up2Phone; ?>">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6 form-group">
                                <label>Name of 3<sup>rd</sup> participant <span class="text-danger">*</span></label>
                                <input type="text" name="e_p3" id="e_p3" class="form-control" required value="<?php echo $up3; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Contact no. <span class="text-danger">*</span></label>
                                <input type="tel" name="e_p3Phone" id="e_p3Phone" class="form-control" required value="<?php echo $up3Phone; ?>">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6 form-group">
                                <label>Name of 4<sup>th</sup> participant</label>
                                <input type="text" name="e_p4" id="e_p4" class="form-control" value="<?php echo $up4; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Contact no.</label>
                                <input type="tel" name="e_p4Phone" id="e_p4Phone" class="form-control" value="<?php echo $up4Phone; ?>">
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <div class="col-md-6 form-group">
                                <label>Name of 5<sup>th</sup> participant</label>
                                <input type="text" name="e_p5" id="e_p5" class="form-control" value="<?php echo $up5; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Contact no.</label>
                                <input type="tel" name="e_p5Phone" id="e_p5Phone" class="form-control" value="<?php echo $up5Phone; ?>">
                            </div>
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <div class="radio">
                                <label for="private">
                                <input type="radio" id="private" name="school" value="Private" checked>
                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                Private</label>
                            </div>
                            <div class="radio">
                                <label for="school">
                                    <input type="radio" id="school" name="school" value="School">
                                    <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                    School
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-md-12 form-group" id="schoolnamebox">
                            <label>School Name <span class="text-danger">*</span></label>
                            <input type="text" name="e_schoolname" id="e_schoolname" class="form-control" value="<?php echo $uschoolname; ?>">
                        </div>
                        
                        <div class="col-md-12 form-group">
                        
                        <label>How would you like to pay? <span class="text-danger">*</span></label>
                         
                        <div class="radio">
                            <label for="CashHandover">
                            <input type="radio" name="paymentoption" value="Cash Handover" checked id="CashHandover">
                            <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                Cash Handover
                            </label>
                        </div>
                        <div class="radio">
                            <label for="BankDraft">
                                <input type="radio" name="paymentoption" value="Bank Draft" id="BankDraft">
                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                Bank Draft
                            </label>
                        </div>
                            
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <input name="submit" type="submit" class="btn-base mb-2" value="REGISTER"> <br>
                            <small class="help-block text-danger" id="errormsg"> <?php echo $error_msg; ?> </small>
                            <small class="help-block text-success"> <?php echo $success_msg; ?> </small>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>


<?php include('footer.php');?>

<script>

    var ckbox = $('#school');
    $("#schoolnamebox").hide();
    $('input').on('click',function () {
        if (ckbox.is(':checked')) {
            $("#schoolnamebox").show();
        } else {
            $("#schoolnamebox").hide();
        }
    });
    
</script>