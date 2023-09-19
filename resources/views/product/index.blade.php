@extends('layout2')
@section('title', 'Product')
@section('content')
     <table class="table table-bordered">
          <tr>
               <th>Id</th>
               <th>Nama</th>
               <th>Kategori</th>
               <th>Harga</th>
               <th colspan="2">Action</th>
          </tr>
          @foreach ($products as $product)
              <tr>
               <td>{{$product->id}}</td>
               <td>{{$product->name}}</td>
               <td>{{$product->category->name}}</td>
               <td>{{$product->price}}</td>
               <td>{{link_to('product/'.$product->id.'/edit', 'Edit',['class'=>'btn btn-info'])}}</td>
               <td>
                    {{Form::open(['url'=>'product/'.$product->id,'method'=>'delete'])}}
                    {{Form::submit('Hapus',['class'=>'btn btn-danger'])}}
                    {{Form::close()}}
               </td>
              </tr>
          @endforeach
     </table>
     {{link_to('product/create','Input Product',['class'=>'btn btn-primary'])}}
@endsection