<div class="row mt-2">
    <div class="container mt-3">
    <h1>Edit Data</h1>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
    <hr>
    <?php $__currentLoopData = $lokasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="/lokasi/<?php echo e($d->id); ?>" method="post">
            <?php echo e(csrf_field()); ?>

             <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo e($d->nama); ?>" required>
            </div>
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" name="nis" value="<?php echo e($d->nis); ?>" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" name="kelas" value="<?php echo e($d->kelas); ?>" required>
            </div>
            <div class="form-group">
                <label for="cita_cita">Cita-Cita</label>
                <input type="text" class="form-control" name="cita_cita" value="<?php echo e($d->cita_cita); ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="alamat" required>
            </div>
            <input type="submit" class="btn btn-info" value="Simpan Data"> 
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </hr>
    </div>
</div><?php /**PATH C:\Users\LENOVO\Project1pkl\resources\views/lokasi/edit.blade.php ENDPATH**/ ?>