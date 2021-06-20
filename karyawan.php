<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h2 class="mb-0 bread" style="margin:70px;"><b>Daftar Karyawan</b></h2>
                </div>
            </div>

            <div class="container py-4">

                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">NIP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($karyawan as $k) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $k['nama']; ?></td>
                                <td><?= $k['NIP']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>