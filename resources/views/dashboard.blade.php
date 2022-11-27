@extends('layout.layout_siswa')
@section('title', 'home')
@section('content-title', )
@section('content')

<div class="container text-center">
    <div class="row justify-content-md-center">
        <div class="col col-md-10">
            <h2>Selamat Datang di Aplikasi pembayaran SPP SMKN 1 Surabaya</h2>
        </div>                  
    </div>
</div>

<div class="mt-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-md-12">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://media.istockphoto.com/id/1334351035/id/foto/batu-satam.jpg?s=1024x1024&w=is&k=20&c=4f-R7UfjM4-xtEBjKQ2BdZ9IndG5rJxsHGiTK42dqBY=" height="250" width="1050" class="" alt="">
                      </div>
                      <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1624976507762-37b9fd7c20f4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" height="250" width="1050" class="" alt="">
                      </div>
                      <div class="carousel-item active">
                        <img src="https://media.istockphoto.com/id/537790507/id/foto/sumber-anse-dargent.jpg?s=1024x1024&w=is&k=20&c=XBK12BZq-qebC28uSWpsGfzO9qIc2IUCLMLB08j8qMU=" height="250" width="1050" class="" alt="">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            status pembayarn</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection