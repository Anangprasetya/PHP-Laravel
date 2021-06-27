@extends('layout.main')
@section('title', 'Form Ubah Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

            <form action="/students/{{ $student->id }}" method="POST">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}">
                    <div id="validationServer03Feedback" class="invalid-feedback">@error('nama') {{$message}} @enderror</div>
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label">NRP</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" name="nrp" value="{{ $student->nrp }}">
                    <div id="validationServer03Feedback" class="invalid-feedback">@error('nrp') {{$message}} @enderror</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" value="{{ $student->email }}">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
                </div>

                <button type="submit" class="btn btn-info">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection