@extends('layout/main')

@section('title', 'Detail Students')
 
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">    
                <h1 class="mt-3">Detail Students</h1>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student->Nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $student->NIM }}</h6>
                        <p class="card-text">{{ $student->Email }}</p>
                        <p class="card-text">{{ $student->Jurusan }}</p>

                        <a href="{{ $student->ID }}/edit"  class="btn btn-primary">Edit</a>

                        <form action=" {{ $student->ID }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <a href="/students" class="card-link">Kembali</a>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
@endsection
