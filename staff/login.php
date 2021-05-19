<?php
include("functions/init.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daglore Model School | Staff Portal </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Daglore Model School | Staff Portal">
    <meta name="keywords" content="Daglore Model School">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="icon" href="dist/img/logo.png" type="image/ico" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="https://staff.dagloremodelschool.com.ng"><b>Daglore Staff Portal</b></a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">Staff Login</div>
        <?php validate_user_login() ?>
        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="dist/img/logo.png" alt="Admin">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->

            <form method="post" class="lockscreen-credentials">
                <div class="input-group">
                    <input type="text" name="staff" class="form-control" placeholder="Input Staff ID">

                    <div class="input-group-append">
                        <button type="submit" name="submit" class="btn"><i
                                class="fas fa-arrow-right text-muted"></i></button>
                    </div>
                </div>
            </form>
            <!-- /.lockscreen credentials -->

        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">
            Enter your password to retrieve your session
        </div>

        <div class="lockscreen-footer text-center">
            &copy; <?php echo date("Y"); ?> <b><a href="https://doteightplus.com" class="text-black">Daglore Model
                    School </a></b><br>
            Developed by <a target="_blank" href="https://doteightplus.com" class="text-black"> DotEightPlus</a>
        </div>
    </div>
    <!-- /.center -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>