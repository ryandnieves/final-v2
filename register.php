
<?php
include_once 'connectDatabase.php';
?>

<div class="container-fluid">
    <section class="container">
        <div class="container-page">                
            <div class="col-md-6">
                <h3 class="dark-grey">Registration</h3>
                
                <div class="form-group col-lg-12">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" id="fname">
                </div>
                
                <div class="form-group col-lg-12">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" id="lname">
                </div>

                <div class="form-group col-lg-6">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                                
                <div class="form-group col-lg-6">
                    <label>Email Address</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                
                <div class="form-group col-sm-9">
                    <label>Date of Birth</label>
                    <input type="date" name="birthday" id="birthday" class="form-control">
                </div>

                <div class="form-group col-lg-6">
                    <label>Phone Number</label>
                    <input type="number" name="number" class="form-control" id="number">
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>     
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block"><a href="index.php">Register</a></button>
                    </div>
                </div>
            </div>
    </section>
</div>
