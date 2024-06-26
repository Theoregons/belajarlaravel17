@extends('template')
@section('main')
    <h1>Ini view Laravel</h1>
    <?php
    for ($i=1; $i <= 10 ; $i++) { ?>
    <h2>Ini perulangan</h2>
    <?php } ?>

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h2>Ini perulangan menggunakan blade</h2>
        @endif
    @endfor

    @php
        $no = 5;
        echo $no;
    @endphp

    <img src="{{ asset('img/foto.jpg') }}" width="450">
@endsection
