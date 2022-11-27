<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login-web SPP</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('template/css/my-css-template.css')}}" rel="stylesheet">
    <link href="{{ asset('public/template/js/js-tambahan.js')}}" rel="stylesheet">

</head>

<body>

<div class="container-full-background">
    <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-7 col-lg-9 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5 bg-transparent">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-white mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user">
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                          </div>
                                          <input name="nama" type="text" value="" class="input form-control" id="nama" placeholder="nama" aria-label="nama" aria-describedby="basic-addon1" />
                                        </div>
                                      </div>
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                          </div>
                                          <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                                          <div class="input-group-append">
                                            <span class="input-group-text" onclick="password_show_hide();">
                                              <i class="fas fa-eye" id="show_eye"></i>
                                              <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small text-white">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck" >Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <a href="index.html" class="btn btn-primary btn-user btn-block text-white">
                                        Login
                                    </a>
                                    <hr>    
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small text-white" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small text-white" href="registrasi">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('template/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('template/js/sb-admin-2.min.js')}}"></script>

</body>

</html>