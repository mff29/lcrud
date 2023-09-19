@extends('layout')
@section('title', 'Kategori')
@section('content')
     <h3>Data Category</h3>
     <table border="1">
          <tr>
               <th>Id</th>
               <th>Nama</th>
               <th colspan="2">Action</th>
          </tr>
          @foreach($categories as $category)
              <tr>
               <td>{{ $category->id}}</td>
               <td>{{ $category->name}}</td>
               <td>{{link_to('category/'.$category->id.'/edit', 'Edit')}}</td>
               <td>
                    {{Form::open(['url'=>'category/'.$category->id,'method'=>'delete'])}}
                    {{Form::submit('Hapus')}}
                    {{Form::close()}}
               </td>
              </tr>
          @endforeach
     </table>
     {{link_to('category/create','Input Category')}}
@endsection