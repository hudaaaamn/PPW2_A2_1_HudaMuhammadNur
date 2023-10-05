@extends('layout.main')

@section('container')
    @php
        use Carbon\Carbon;
    @endphp

    <h1 class="display-4 ms-5 mt-2 center">Daftar Barang</h1>

    <div class="mt-3 m-5">
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">stok</th>
            <th scope="col">Harga</th>
            <th scope="col">id supplier</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data_barang as $barang)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ "Rp ".number_format($barang->harga, 2, ',', ',') }}</td>
                    <td>{{ $barang->id_supplier }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
@endsection