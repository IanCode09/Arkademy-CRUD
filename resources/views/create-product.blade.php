<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopOnline</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="heading text-center">
            <h1>ShopOnline</h1>
        </div>
        <div class="content">
            <form action="/product-store" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                        name="product_name" placeholder="Nama Produk">
                    @error('product_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                        placeholder="1000">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" class="form-control @error('stock') is-invalid @enderror" name="stock"
                        placeholder="Jumlah">
                    @error('stock')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                        rows="3"></textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <a href="/" class="btn btn-warning btn-block" style="color: white">Kembali</a>
            </form>
            
        </div>
    </div>

</body>

</html>
