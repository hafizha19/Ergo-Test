@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-5">
            @if (session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
            @endif
            <table class="table table-sm border">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($barangs); $i++) <tr>
                        <td scope="row">{{ $i+1 }}</td>
                        <td>{{ $barangs[$i]->nama }}</td>
                        <td>{{ $barangs[$i]->harga }}</td>
                        <td><a href="barangs/{{$barangs[$i]->id}}/edit" class="btn btn-info btn-block">Edit</a></td>
                        <td><form action="barangs/{{ $barangs[$i]->id}}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-block">Delete</button>
                        </form>
                        </td>
                        </tr>
                        @endfor
                </tbody>
            </table>
            <a href="{{route('barangs.create')}}" class="btn btn-success text-light btn-block">Tambah Barang</a>
        </div>
    </div>
</div>
@endsection