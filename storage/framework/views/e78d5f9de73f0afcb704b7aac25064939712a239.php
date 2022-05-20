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
 
	<?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form action="/mahasiswa/update" method="post">
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="id" value="<?php echo e($m->mahasiswa_id); ?>"> <br/>
		Nama <input type="text" required="required" name="nama" value="<?php echo e($m->mahasiswa_nama); ?>"> <br/>
		Umur <input type="number" required="required" name="umur" value="<?php echo e($m->mahasiswa_umur); ?>"> <br/>
		Alamat <textarea required="required" name="alamat"><?php echo e($m->mahasiswa_alamat); ?></textarea> <br/>
		Jurusan <textarea required="required" name="jurusan"><?php echo e($m->mahasiswa_jurusan); ?></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
 
</body>
</html><?php /**PATH C:\Programming\LaravelProject\datamahasiswa\resources\views/edit.blade.php ENDPATH**/ ?>