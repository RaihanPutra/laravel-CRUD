<!DOCTYPE html>
<html>
<head>
	<title>Tabel Mahasiswa</title>
</head>
<body>
 
	<h2>Universitas Gunadarma</h2>
	<h3>Data Mahasiswa</h3>
 
	<a href="/mahasiswa/tambah"> + Tambah Mahasiswa</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Jurusan</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $m)
		<tr>
			<td>{{ $m->mahasiswa_nama }}</td>
			<td>{{ $m->mahasiswa_umur }}</td>
			<td>{{ $m->mahasiswa_alamat }}</td>
			<td>{{ $m->mahasiswa_jurusan }}</td>
			<td>
				<a href="/mahasiswa/edit/{{ $m->mahasiswa_id }}">Edit</a>
				|
				<a href="/mahasiswa/hapus/{{ $m->mahasiswa_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>