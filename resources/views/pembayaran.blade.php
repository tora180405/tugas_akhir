@extends('layout.layout_siswa')
@section('title', 'home')
@section('content-title', 'PEMBAYARAN')
@section('content')

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="nama" class="form-label">Nama</label>
        <p>namasiswa</p>
    </div>
    <div class="form-group">
      <label for="jumlah_uang" class="form-label">jumlah Uang</label>
        <input type="int" class="form-control" id="jumlah_uang">
          <div id="keterangan" class="form-text">masukkan jumlah uang yang benar.</div>
      </div>
          <div class="form-group">
            <label for="bulan">Bulan Pembayaran :</label>
                        <select name="bulan" id="bulan" class="form-select form-control">
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                        </select>
          </div>
          <div class="form-group">
          <label for="tanggal">Tanggal pembayaran: </label>
          <input type="date" class="form-control" id="tanggal" name="tanggal" value="">
        </div>
          <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          bayar
        </button>

          <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Metode Pembayaran</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
        <div class="modal-body">
          ppppp
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="statuspembayaran">bayar</a>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary" >Cancel</button>
  </div>
</div>

@endsection
