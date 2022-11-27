<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>data-registrasi</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('template/css/my-css-template.css')}}" rel="stylesheet">

</head>
<body>
    
    <div class="container d-flex justify-content-center">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <label for="nama">nama</label>
                                    <input type="text" class="form-control form-control-user" id="nama"
                                        placeholder="masukkan nama">
                                </div>
                                <div class="form-group">
                                    <label for="kelas">kelas :</label>
                                        <select name="kelas" id="kelas" class="form-select form-control">
                                            <option></option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">alamat :</label>
                                        <select name="alamat" id="alamat" class="form-select form-control">
                                            <option></option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin :</label>
                                        <select name="jk" id="jk" class="form-select form-control">
                                            <option>Laki-Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="foto">FOTO : </label>
                                    <input type="file" class="form-control-file" id="foto" name="foto">
                                </div>    
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password">
                                </div>
                                <a href="login" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                            <div class="text-center">
                                <a class="small" href="login">Already have an account? Login!</a>
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