<?php
    include "includes/header.php";
?>
<link rel="stylesheet" href="includes/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<div class="panel panel-info">
    <div class="panel-heading text-center">
        <h2>User Login</h2>
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

                <div class="checkbox">
                    <input type="checkbox" name="rememberMe" title="Remember me"> Remember me
                </div>

                <button class="btn btn-success" name="submit">Login</button>
            </form>
        </div>

    </div>
</div>


<?php
    include "includes/footer.php";
?>
