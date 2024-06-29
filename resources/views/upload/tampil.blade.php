@extends('template')
@section('main')
    <h2>Upload File</h2>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="d-flex align-items-center">
        @csrf
        <div class="custom-file w-25 mr-4">
            <input type="file" class="custom-file-input" name="image">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
        <div>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/'. $item->image) }}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
