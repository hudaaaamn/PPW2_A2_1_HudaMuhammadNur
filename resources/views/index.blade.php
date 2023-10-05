<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0e68c;
        }
        table {
            background-color: #FFA07A;
            color: #333; 
        }
        table thead th {
            background-color: #FF6347;
            color: white; 
        }
        table tbody tr:hover {
            background-color: #FFD700;
            transition: background-color 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>id_supplier</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_barang as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->harga }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->id_supplier }}</td>
                <td>
                    <a href="{{ route('barang.edit', $barang->id) }}"><button class="btn btn-primary">Edit</button></a>
                    <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
