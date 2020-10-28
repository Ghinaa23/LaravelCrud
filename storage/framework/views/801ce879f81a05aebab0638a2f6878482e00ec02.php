    <div class="container mt-3">
    <h1>Data Siswa</h1>
    
        <form class="form-inline" method="GET" action='/input'>
            <div class="row mt-2">
                 <div class="col-md-12">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                    <button class="btn btn-info">Search</button>
                </div>
            </div>
        </form> 
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		
         
		<table id="tabellokasi" class="table table-striped table-bordered" style="width:100%">
		<thead align="center">
			<tr>
				<th>Nama Siswa</th>
				<th>NIS</th> 
				<th>Kelas</th>
				<th>Cita-cita</th>
				<th>Alamat</th>
                <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
            <?php $__currentLoopData = $lokasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-center">
            <td><?php echo e($d->nama); ?></td>
            <td><?php echo e($d->nis); ?></td>
            <td><?php echo e($d->kelas); ?></td>
            <td><?php echo e($d->cita_cita); ?></td>
            <td><?php echo e($d->alamat); ?></td>
                <td>
                    <a href='/lokasi/<?php echo e($d->id); ?>' class="btn btn-primary">Edit</a>
                    <a href='/lokasi/delete/<?php echo e($d->id); ?>' class="btn btn-danger">Hapus</a>   
                </td>
            </tr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
		</table>
                    <a class="btn btn-info" href="/lokasi/input" role="button">Tambah Data</a>
			</div>
		</div>
	</div>
<?php /**PATH C:\Users\LENOVO\Project1pkl\resources\views/lokasi/index.blade.php ENDPATH**/ ?>