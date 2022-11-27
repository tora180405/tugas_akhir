@extends('layout.layout_siswa')
@section('title', 'home')
@section('content-title', '')
@section('content')

<div class="card mt-5">
    <div class="card-header text-white bg-primary text-center fs-3">
        <p>HALO nama siswa</p>
    </div>
    <div class="text-end">
        <button class="btn btn-primary mt-2 me-2" type="submit">gantiphoto</button>
    </div>
    <div class="card-body text-center">
    <div class="photo">
        <img src="https://img.freepik.com/free-vector/botanical-capital-letter-p-vector_53876-165798.jpg?w=2000" class="rounded-circle mx-auto d-block" width="200px" height="200px" alt="ok">
    </div>
    
        <p class="fw-bold mt-5">nama siswa</p>
        <p class="fw-bold">nisn siswa</p>
        <p class="fw-bold">kelas siswa</p>
    </div>
        {{-- <button>gantiphoto</button> --}}
    <div class="card-footer bg-primary" style="height: 80px"></div>
</div>



<link href="{{ asset('template/css/my-css-template.css')}}" rel="stylesheet">

@endsection