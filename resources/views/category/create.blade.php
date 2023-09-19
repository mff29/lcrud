@extends('layout')
@section('title', 'Input')
@section('content')
     @if ($errors->any())
     <div class="alert alert-danger">
          <ul>
               @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
               @endforeach
          </ul>
     </div>
     @endif
    <h3>Input Kategori Baru</h3>
    {{ Form::open(['url'=>'category'])}}
    Nama Kategori : {{ Form::text('name', null, ['placeholder'=>'Nama Kategori'])}}
    <br>
    {{ Form::submit('Simpan Kategori')}} | {{ link_to('category','Kembali')}}
    {{ Form::close()}}
@endsection