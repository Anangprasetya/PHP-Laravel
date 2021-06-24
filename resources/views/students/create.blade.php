@extends('layout.main')
@section('title', 'Form Tambah Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>

            <form action="/students" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label">NRP</label>
                    <input type="text" class="form-control" id="nrp" placeholder="Masukkan NRP" name="nrp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan">
                </div>

                <button type="submit" class="btn btn-info">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection