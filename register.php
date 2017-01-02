<?php
    /**
     * Created by PhpStorm.
     * User: optim
     * Date: 1/2/2017
     * Time: 6:20 PM
     */

    include "includes/header.php";
?>

<link rel="stylesheet" href="includes/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<div class="panel panel-info">
    <div class="panel-heading text-center">
        <h2>User Registration</h2>
    </div>


    <div class="panel-body">
        <div style="max-width: 600px; margin: 0 auto;">
            <form action="" method="post">
                <!--
                     This is bootstrap form template created by Optimized faisal.
                     To use this form template, bootstrap and font-awesome must be include in the project and the custom
                     css for form field must be loaded....
                -->
                <div class="form-group">
                    <label for="fullname">Full name : </label>
                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i></span>
                        <div class="icon-addon">
                            <input class="form-control" type="text" name="name" placeholder="your full name" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username">Username : </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <div class="icon-addon">
                            <input class="form-control" type="text" name="uname" placeholder="your username" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password : </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <div class="icon-addon">
                            <input class="form-control" type="password" name="pwd" placeholder="your password" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="repeatPassword">Repeat Password : </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <div class="icon-addon">
                            <input class="form-control" type="password" name="repeatpwd" placeholder="repeat password"
                                   required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email : </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <div class="icon-addon">
                            <input class="form-control" type="email" name="email" placeholder="your email" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="birthdate">Your Birthdate : </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <div class="icon-addon">
                            <input class="form-control" type="date" name="birthdate" placeholder="your birthdate"
                                   required>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="gender">Your gender : </label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="o4" value="">
                            <span class="cr"><i class="cr-icon fa fa-male"></i></span>
                            <i></i>
                            Male
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="o4" value="" checked>
                            <span class="cr"><i class="cr-icon fa fa-female"></i></span>
                            Female
                        </label>
                    </div>
                </div>


                <div class="form-group">
                    <label for="yourCity">Your city : </label>
                    <div class="input-group">
                        <span class="input-group-addon"> <i class="glyphicon glyphicon-globe"></i></span>
                        <div class="icon-addon">
                            <select class="form-control" required title="your current city">
                                <option>your current city</option>
                                <option class="text-info">Dhaka</option>
                                <option class="text-info">Chittagong</option>
                                <option class="text-info">Rajshahi</option>
                                <option class="text-info">Khulna</option>
                                <option class="text-info">Barishal</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mobile">Your mobile number : </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <div class="icon-addon">
                            <input class="form-control" type="tel" name="mobile"
                                   placeholder="your mobile number(01*********)"
                                   required>
                        </div>
                    </div>
                </div>


                <button class="btn btn-success" name="register">Register</button>
            </form>
        </div>

    </div>
</div>


<?php
    include "includes/footer.php";
?>
