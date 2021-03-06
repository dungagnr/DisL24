<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'header.php' ?>
</head>

<body>
    <div class="index-container">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">

                    <div class="wrapper-logo">
                        <img class="logo" src="image/logo.jpg">
                    </div>

                    <!--Header-->
                    <div class="form-header mb-4">
                        <h3><i class="fa fa-lock"></i> Login:</h3>
                    </div>

                    <!--Body-->
                    <div id="login-process" style="display: none;"></div>
                    <form id="login-form" action="./engine/login.php" onsubmit="return false;" form="#login-form" process="#login-process">
                        <div class="form-group">
                            <i class="fa fa-envelope text-red"></i>
                            <input type="text" id="login-email" name="login-email" class="form-control">
                            <label for="login-email">Your email</label>
                        </div>

                        <div class="form-group">
                            <i class="fa fa-lock text-red"></i>
                            <input type="password" id="login-pass" name="login-pass" class="form-control">
                            <label for="login-pass">Your password</label>
                        </div>

                        <div class="text-center">
                            <button type="submit" onclick="requestLogin()" class="btn btn-default">Login</button>
                        </div>
                    </form>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-end">
                    <div class="options">
                        <p>Not a member?
                            <a href="#">Sign Up</a>
                        </p>
                        <p>Forgot
                            <a href="#">Password?</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>