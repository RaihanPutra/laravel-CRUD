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
		<?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($m->mahasiswa_nama); ?></td>
			<td><?php echo e($m->mahasiswa_umur); ?></td>
			<td><?php echo e($m->mahasiswa_alamat); ?></td>
			<td><?php echo e($m->mahasiswa_jurusan); ?></td>
			<td>
				<a href="/mahasiswa/edit/<?php echo e($m->mahasiswa_id); ?>">Edit</a>
				|
				<a href="/mahasiswa/hapus/<?php echo e($m->mahasiswa_id); ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
 
 
</body>
</html><?php /**PATH C:\Programming\LaravelProject\datamahasiswa\resources\views/index.blade.php ENDPATH**/ ?>