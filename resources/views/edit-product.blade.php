@extends('master')

@section('content')
<div class="content">
    <form action="/product-update/{{$product->id}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}" placeholder="Nama Produk">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="price" value="{{$product->price}}" placeholder="1000">
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="stock" value="{{$product->stock}}" placeholder="Jumlah">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deskripsi</label>
            <textarea class="form-control" name="description" rows="3">{{$product->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
        <a href="/" class="btn btn-warning btn-block" style="color: white">Kembali</a>
    </form>
</div>    
@endsection


    