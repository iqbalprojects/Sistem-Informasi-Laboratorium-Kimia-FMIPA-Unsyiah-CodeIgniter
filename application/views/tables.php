          <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1 class="col-md-6"></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <?php if ($this->session->flashdata('flash')) : ?>
                     <div class="panel-body">
                                    <div class="alert alert-success alert-dismissible">
                                        Data <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?> <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    </div>
                                     <?php endif; ?>  
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <a href="<?= base_url(); ?>alat/tambah" class="btn btn-success pull-right">Tambah Data</a>
                                    <h4><strong>Data Alat Kimia</strong></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Alat</th>
                                                    <th>Kuantitas</th>
                                                    <th>Lokasi</th>
                                                    <th>Tanggal Diperoleh</th>
                                                    <th>Keterangan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i= 1; foreach( $alat as $alat ) : ?>
                                                <tr>
                                                    <td align="center"><?= $i++; ?></td>
                                                    <td><?= $alat ['nama_alat']; ?></td>
                                                    <td><?= $alat ['kuantitas']; ?></td>
                                                    <td><?= $alat ['lokasi']; ?></td>
                                                    <td><?= $alat ['tgl_diperoleh']; ?></td>
                                                    <td><?= $alat ['keterangan']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url(); ?>alat/edit/<?= $alat['id_alat']; ?>" class="btn btn-success btn-xs col-lg-5">Edit</a>
                                                        <a href="<?= base_url(); ?>alat/hapus/<?= $alat['id_alat']; ?>" class="btn btn-danger btn-xs col-lg-5 pull-right" onclick="return confirm('yakin?');">Hapus</a>    
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>                                 
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>    
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->