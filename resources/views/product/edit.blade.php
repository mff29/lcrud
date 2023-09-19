@extends('layout2')
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
    <h3>Edit Product</h3>
    {{ Form::model($products,['url'=>'product/'.$products->id,'method'=>'put'])}}
    <table cellpadding="5">
        <tr>
            <th>Nama</th>
            <td>{{ Form::text('name', null, ['placeholder'=>'Nama Product', 'style'=>'width:100%;'])}}</td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>{{Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder'=>'Pilih Kategori']);}}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>{{ Form::text('price', null, ['placeholder'=>'Harga Product', 'style'=>'width:100%;'])}}</td>
        </tr>
        <tr>
            <td>{{ Form::submit('Update Product', ['class'=>'btn btn-success'])}}</td>
            <td>{{ link_to('product','Kembali', ['class'=>'btn btn-danger'])}}</td>
        </tr>
    </table>
    {{ Form::close()}}
@endsection