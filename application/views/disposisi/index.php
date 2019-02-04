<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>suratkeluar/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="col-md-6">
        <form action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Surat Keluar" name="keyword">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col md-6">
            <div class="table-responsive-sm">
                <h3>Daftar Disposisi</h3>
                <?php if (empty($disposisi)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data Disposisi tidak ditemukan
                    </div>
                <?php endif; ?>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col md-3" class="text-center">No</th>
                            <th scope="col" class="text-center">Status</th>   
                            <th scope="col" class="text-center">DIvisi</th>                    
                            <th scope="col" class="text-center">Keterangan</th>                           
                            <th scope="col" class="text-center">Surat Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($disposisi as $dis) : ?>
                        <tr>
                            <th class="text-center"><?= $no++; ?></th>
                            <th>
                                <a href="#" class="fa fa-download fa-lg" style="color:black"></a>
                                <a href="<?= base_url(); ?>disposisi/detail" class="fa fa-search-plus fa-lg"></a>
                                <a href="#" class="fa fa-pencil-square-o fa-lg" style="color:Green"></a>
                                <a href="#" class="fa fa-trash fa-lg tombol-hapus" style="color:red"></a>
                            </th>
                            <th><?= $dis['iddivisi']; ?></th> 
                            <th><?= $dis['keterangan']; ?></th>
                            <th><?= $dis['idsuratmasuk']; ?></th> 
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>