@extends('layout.main')
@section('title', 'Daftar Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-7">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <ul class="list-group">
                @foreach($students as $x)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$x->nama}}
                    <a href="/students/{{$x->id}}" class="badge bg-info">Detail</a>
                </li>

                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection