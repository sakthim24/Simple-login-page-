
<?php
    // header.php
    include ('header.php');
?>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            require ('register-process.php');
        }
    ?>

    <!-- registration area -->
    <section id="register">
        <div class="row m-0">
            <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark">Jazz logger</h1>
                    <p class="p-1 m-0 font-ubuntu text-black-50">Create your account here to join with us</p>

                </div>
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <img class="camera-icon" src="./assets/camera-solid.svg" alt="camera">
                        </div>
                        <img src="./assets/profile/beard.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                        <small class="form-text text-black-50">Choose Image</small>
                        <input type="file" form="reg-form" class="form-control-file" name="profileUpload" id="upload-profile">
                    </div>
                </div>
                <div class="d-flex justify-content-center">

                    <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName'];  ?>" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['LastName'])) echo $_POST['LastName'];  ?>" name="LastName" id="LastName" class="form-control" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="form-row my-10">
                            <div class="col">
                                <input type="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>" required name="email" id="email" class="form-control" placeholder="Email*">
                            </div>
                        </div>

                        <div class="form-row my-10">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];  ?>" maxlength="10" name="phone" id="phone" class="form-control" placeholder="Phone Number*">
                            </div>
                        </div>
                        
                        <div class="form-row my-10">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['adress1'])) echo $_POST['adress1'];  ?>"  name="adress1" id="adress1" class="form-control" placeholder="address line 1*">
                            </div>
                        </div>

                        <div class="form-row my-10">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['adress2'])) echo $_POST['adress2'];  ?>"  name="adress2" id="adress2" class="form-control" placeholder="adress line 2*">
                            </div>
                            </div>
                            <div class="form-row my-10">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['city'])) echo $_POST['city'];  ?>" name="city" id="city" class="form-control" placeholder="city*">
                            </div>                     
                        </div>
                        <div class="form-row my-10">
                            <div class="col">
                                <input type="number"  maxlength="6"  value="<?php if(isset($_POST['pin']))  echo $_POST['pin'];  ?>"  name="pin" id="pin" class="form-control" placeholder="Pin Code*">
                            </div>
                        </div>
                        
                        <div class="form-row my-10">
                            <div class="col">
                                <input type="text" value="<?php if(isset($_POST['company'])) echo $_POST['company'];  ?>"  name="company" id="company" class="form-control" placeholder="company*">
                            </div> 
                             </div>
                        <div class="form-row my-10">
                            <div class="col">
                                <input type="password" required name="password" id="password" class="form-control" placeholder="password*">
                            </div>
                        </div>

                        <div class="form-row my-10">
                            <div class="col">
                                <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirm Password*">
                                <small id="confirm_error" class="text-danger"></small>
                            </div>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="agreement" class="form-check-input" required>
                            <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a href="#">term, conditions, and policy </a>(*) </label>
                        </div>

                        <div class="submit-btn text-center my-11">
                            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                        </div>
                        <span class="font-ubuntu text-black-50"> already have account? <a href="login.php">Login</a> </span>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- #registration area -->


<?php
    // footer.php
    include ('footer.php');
?>