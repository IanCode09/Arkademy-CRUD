@extends('master')

@section('content')
<div class="content">
    <div class="card">
        <div class="card-header">
            Detail Produk : <strong>{{$product->product_name}}</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3">
                    <p>Nama Produk</p>
                    <p>Harga</p>
                    <p>Jumlah</p>
                    <p>Keterangan</p>
                </div>
                <div class="col-lg-8">
                    <strong><p>{{$product->product_name}}</p></strong>
                    <strong><p>Rp. {{number_format($product->price)}}</p></strong>
                    <strong><p>{{$product->stock}}</p></strong>
                    <strong><p>{{$product->description}}</p></strong>
                </div>
            </div>
            <a href="/" class="btn btn-warning btn-block" style="color: white">Kembali</a>
        </div>
        
    </div>
</div>

@endsection
