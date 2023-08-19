<?
include("create-script.php")
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Signup.css">
</head>

<body>

    <div class="login-page">
        <div class="form">
            <form class="login-form " action="" target="_blank">
                <h2>SIGN UP</h2>
                <div class="input-group mb-3">
                    <input class="form-control" id="username" name="username" placeholder="Username" value="" required>
                </div>
                <div class="input-group mb-3">
                    <input class="form-control" id="username" name="email" placeholder="Email" type="email" value=""
                        required>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password2" name="password" placeholder="Password"
                        value="" required>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password" name="repassword"
                        placeholder="Re-Password" value="" required>
                </div>

                <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="create">Sign
                        Up</button>
                    <div class="text-center mb-3">

                        <small class="text-dark">
                            Have an account? <a href="login.php">Sign In</a>
                        </small>
                    </div>

            </form>
        </div>
    </div>

</body>

</html>