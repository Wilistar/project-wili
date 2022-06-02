<?php
// Create database connection using config file
include_once("../databases/connection.php");
session_start();

$id = $_GET['id'];
// Fetch all users data from database
$result = mysqli_query($connection, "SELECT * FROM pengguna WHERE id = '$id'");
while ($user_data = mysqli_fetch_array($result)) {
    $id = $user_data['id'];
    $email = $user_data['email'];
    $name = $user_data['name'];
    $school = $user_data['school'];
    $phone_number = $user_data['phone_number'];
    $address = $user_data['address'];
    $user_image = $user_data['image'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSBO Register</title>
    <link rel="icon" href="../dist/img/favicon.ico" type="image/ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../dist/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../dist/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../dist/img/favicon-16x16.png">
    <link rel="manifest" href="../dist/img/site.webmanifest">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="login-logo">
            <img src="../dist/img/AdminLTELogo.png" height="100px">
            <p>SMK Negeri 1 Majalengka</p>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Pendaftaran Siswa Baru Online SMK Negeri 1 Majalengka </p>
                <center>
                    <h3>Edit Data</h3>
                </center>
                <br>

                <form action="../queries/edit_user_data.php" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                    <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="id">
                        <input type="text" class="form-control" value="<?php echo $name; ?>" name="name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" value="<?php echo $email; ?>" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div> -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="school" value="<?php echo $school; ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-school"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="phone_number" value="<?php echo $phone_number; ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-home"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name='user_image'>
                                <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div> -->
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Konfirmasi</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <a href="../index.php" class="text-center">I already have an account</a> -->
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>