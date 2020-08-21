@extends('master')

@section('content')
<div class="content">
    <div class="add-product">
        <a href="/create" class="btn btn-md btn-primary">Tambah Produk</a>
    </div>
    <div class="product-list">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>Rp. {{number_format($product->price)}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="/edit/{{$product->id}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/destroy/{{$product->id}}" class="btn btn-sm btn-danger">Delete</a>
                        <a href="/detail-product/{{$product->id}}" class="btn btn-sm btn-info">Detail</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
