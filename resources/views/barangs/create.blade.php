@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 card border p-3" style="border-radius: 0;">
            <h5 class="text-center">Tambah Barang</h5>
            <form method="POST" action="{{ route('barangs.index') }}">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Ice cream Corneto">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Rp20.000">
                </div>

                <button type="submit" class="btn btn-success btn-block">Tambah</button>
            </form>
        </div>
       
    </div>
</div>
@endsection