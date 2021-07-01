@extends('layout/main')

@section('title', 'Form Tambah Mahasiswa')
 
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Mahasiswa</h1>

                <form method="post" action="/students">
                    @csrf
                    <div class="form-group">
                    <label for="Nama" class="form-label my-2">Nama</label>
                    <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama" placeholder="Masukkan Nama" name="Nama" value="{{ old('Nama') }}">
                    @error('Nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    
                    <div class="form-group">
                    <label for="NIM" class="form-label my-2">NIM</label>
                    <input type="text" class="form-control @error('NIM') is-invalid @enderror" id="NIM" placeholder="Masukkan NIM" name="NIM" value="{{ old('NIM') }}">
                    @error('NIM')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                    <label for="Email" class="form-label my-2">Email</label>
                    <input type="text" class="form-control @error('Email') is-invalid @enderror" id="Email" placeholder="Masukkan Email" name="Email" value="{{ old('Email') }}">
                    @error('Email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    
                    <div class="form-group">
                    <label for="Jurusan" class="form-label my-2">Jurusan</label>
                    <input type="text" class="form-control @error('Jurusan') is-invalid @enderror" id="Jurusan" placeholder="Masukkan Jurusan" name="Jurusan" value="{{ old('Jurusan') }}">
                    @error('Jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>

        
                </form>
            
            </div>
        </div>
    </div>
@endsection
