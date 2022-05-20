<!DOCTYPE html>
<html>
<head>
	<title>Table Mahasiswa</title>
</head>
<body>
 
	<h2>Universitas Gunadarma</h2>
	<h3>Edit Data Mahasiswa</h3>
 
	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($mahasiswa as $m)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->mahasiswa_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $m->mahasiswa_nama }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $m->mahasiswa_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $m->mahasiswa_alamat }}</textarea> <br/>
		Jurusan <textarea required="required" name="jurusan">{{ $m->mahasiswa_jurusan }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>