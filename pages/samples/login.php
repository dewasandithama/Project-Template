<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spica Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
    <div class="container-scroller d-flex">
        <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="../../images/logo-dark.svg" alt="logo">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" action="login.php" method="post">
                                <div class="form-group">
                                    <?php
                    if(isset($_POST['login'])) {
                        $user = trim(mysqli_escape_string($con, $_POST['username']));
                        $pass = sha1(trim(mysqli_escape_string($con, $_POST['password'])));
                        $sql = mysqli_query($con, "SELECT * FROM tb_mahasiswa WHERE user_id = '$user' AND password = '$pass'") or die (mysqli_error($con));
                        $sql_data = mysqli_fetch_array($sql);
                        if(mysqli_num_rows($sql_login_1) > 0) {
                            $_SESSION['nim']      = $sql_data_1['nim'];
                            $_SESSION['username'] = $sql_data_1['nama_mahasiswa'];
                            $_SESSION['level']    = "Mahasiswa";
                            header("location: ".base_url());
                        } elseif(mysqli_num_rows($sql_login_2) > 0) {
                            $_SESSION['username'] = $sql_data_2['nama_dosen'];
                            $_SESSION['level']    = "Dosen";
                            header("location: ".base_url());
                        } elseif(mysqli_num_rows($sql_login_3) > 0) {
                            $_SESSION['username'] = ucfirst($sql_data_3['user_id']);
                            $_SESSION['level']    = "Administrator";
                            header("location: ".base_url());
                        } else{ ?>
                                    <div class="alert alert-danger alert-dismissible show fade">
                                        Username atau password salah!!
                                        <button type="button" class="btn-close text-primary" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    <?php
                }
                    }?>
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <a type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                        IN</a>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                        <i class="mdi mdi-facebook me-2"></i>Connect using facebook
                                    </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="register.html" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <script src="../../js/jquery.cookie.js" type="text/javascript"></script>
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <!-- endinject -->
</body>

</html>