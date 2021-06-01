@extends('layout.main')
@section('title', 'Daftar Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Anang Nur Prasetya</td>
                        <td>2000018047</td>
                        <td>anang2000018047@webmail.uad.ac.id</td>
                        <td>Teknik Informatika</td>
                        <td>
                            <a href="" class="badge bg-success">Edit</a>
                            <a href="" class="badge bg-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection