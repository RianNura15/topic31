<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    	<a href="{{route('produkindex')}}" class="btn btn-secondary mt-3">Kembali</a>
        <h2> Tambahkan Produk </h2>
        <form method="post" action="{{route('tambahproduk')}}" enctype="multipart/form-data">
        	@csrf
        	<div class="form-floating mb-3">
			  <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Nama Produk">
			  <label for="floatingInput">Nama Produk</label>
			</div>
			<div class="form-floating mb-3">
			  <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi">
			  <label for="floatingPassword">Deskripsi</label>
			</div>
			<div class="mb-3">
			  <label for="formFile" class="form-label">Gambar Produk</label>
			  <input class="form-control" name="gambar" type="file" id="formFile">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>