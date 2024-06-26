@extends('template')
@section('main')
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>NIS</label>
            <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
