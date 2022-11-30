

<?php $__env->startSection('container'); ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Mahasiswa</h1>
</div>

<?php if(session()->has('success')): ?>
<div class="alert alert-success col-lg-8" role="alert">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<div class="table-responsive col-lg-8">
    <a href="/mahasiswa/create" class="btn btn-primary mb-4">Tambah Data Mahasiswa</a>
        <thead>
        <div class="col-lg-16">
                <div class="card">
                    <div class="container">
                        <table class="table tble-striped table-hover">
            <tr>
                <th style="text-align: center">No</th>
                <th >NIM</th>
                <th >Nama</th>
                <th >Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>Foto</th>
                <th style="text-align: center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="text-align: center"><?php echo e($loop->iteration); ?></td>
                <td>
                    <?php echo e($mhs['nim']); ?>

                </td>
                <td>
                    <?php echo e($mhs['nama']); ?>

                </td>
                <td>
                    <?php echo e($mhs['jk']); ?>

                </td>
                <td>
                    <?php echo e($mhs['alamat']); ?>

                </td>
                <td>
                    <?php echo e($mhs['prodi']); ?>

                </td>
                <td>
                    <?php echo e($mhs['email']); ?>

                </td>
                <td><img src="img/<?= $mhs['foto']; ?>" style="width: 90px"></td>
                <td style="text-align: center">
                    <a href="/mahasiswa/<?php echo e($mhs['id']); ?>" class="badge bg-info"><span data-feather="eye">Show</span></a>
                    <a href="/mahasiswa/<?php echo e($mhs['id']); ?>/edit" class="badge bg-warning"><span data-feather="edit">Edit</span></a>
                    <form action="/mahasiswa" method="post" class="d-inline">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="badge bg-danger border-0"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus<span
                                data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tugas6\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>