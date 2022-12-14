<!DOCTYPE html>
<html>
<head>
	<title>List Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<style>
	table {
	  border-collapse: collapse;
	  width: 50%;
	}

	th, td {
	  text-align: center;
	  padding: 8px;
	}

	tr{
		background-color: #ffffff;
	}

	th {
	  background-color: blue;
	  color: white;
	}

	</style>
</head>
<body>
    <div class="container">
        <a href="{{route('create')}}" class="btn btn-secondary mt-3">Tambah Data</a>
        <table align="center" border="2">
            <tr>
                <th>Nama Produk</th>
                <th>Deskripsi produk</th>
                <th>Gambar Produk</th>
            </tr>
            @foreach($data as $list)
            <tr>
                <td>{{$list->nama_produk}}</td>
                <td>{{$list->deskripsi}}</td>
                <td><img class="img-preview img-fluid" src="{{ url('/produk/'.$list->gambar) }}" 
                style="max-width: 100px;"></td>
            </tr>
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>