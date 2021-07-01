@extends('layout/main')

@section('title', 'Daftar Students')
 
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1 class="mt-3">Daftar Students</h1>
                
                    <a href="/students/create" class="btn btn-primary my-3">Tambah Mahasiswa</a>

                    @if (session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                    </div>
                    @endif

                @foreach($students as $std)
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $std -> Nama }}
                        <a href="/students/{{ $std->id }}" class="badge bg-primary rounded-pill">detail</a>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection
