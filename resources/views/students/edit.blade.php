@extends('layout/main')

@section('title', 'Form Ubah Mahasiswa')
 
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Ubah Mahasiswa</h1>

                <form action="/students/{{ $student->ID }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                    <label for="Nama" class="form-label my-2">Nama</label>
                    <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama" placeholder="Masukkan Nama" name="Nama" value="{{ $student->Nama }}">
                    @error('Nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    
                    <div class="form-group">
                    <label for="NIM" class="form-label my-2">NIM</label>
                    <input type="text" class="form-control @error('NIM') is-invalid @enderror" id="NIM" placeholder="Masukkan NIM" name="NIM" value="{{ $student->NIM }}">
                    @error('NIM')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="form-group">
                    <label for="Email" class="form-label my-2">Email</label>
                    <input type="text" class="form-control @error('Email') is-invalid @enderror" id="Email" placeholder="Masukkan Email" name="Email" value="{{ $student->Email }}">
                    @error('Email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    
                    <div class="form-group">
                    <label for="Jurusan" class="form-label my-2">Jurusan</label>
                    <input type="text" class="form-control @error('Jurusan') is-invalid @enderror" id="Jurusan" placeholder="Masukkan Jurusan" name="Jurusan" value="{{ $student->Jurusan }}">
                    @error('Jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>

        
                </form>
            
            </div>
        </div>
    </div>
@endsection
