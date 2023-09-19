@extends('layout')
@section('title', 'Edit')
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
    <h3>Edit Kategori</h3>
    {{ Form::model($categories,['url'=>'category/'.$categories->id, 'method'=>'put'])}}
    Nama Kategori : {{ Form::text('name', null, ['placeholder'=>'Nama Kategori'])}}
    <br>
    {{ Form::submit('Update Kategori')}} | {{ link_to('category','Kembali')}}
    {{ Form::close()}}
@endsection