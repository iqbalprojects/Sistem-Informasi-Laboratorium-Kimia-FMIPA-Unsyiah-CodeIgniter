          <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="col-md-6"></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4><strong>Tambah Data Alat</strong></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <label for="nama_alat">Nama</label>
                                                    <input type="text" name="nama_alat" class="form-control" id="nama_alat" placeholder="Masukkan nama alat">
                                                    <small class="form-text text-danger"><?= form_error('nama_alat'); ?></small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kuantitas">Kuantitas</label>
                                                    <input type="number" name="kuantitas" class="form-control" id="kuantitas" placeholder="Masukkan kuantitas alat">
                                                    <small class="form-text text-danger"><?= form_error('kuantitas'); ?></small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lokasi">Lokasi</label>
                                                    <select class="form-control" id="lokasi" name="lokasi">
                                                         <?php foreach( $lokasi as $lok ) : ?>
                                                                <option value="<?= $lok; ?>"><?= $lok; ?></option>
                                                            <?php endforeach; ?>
                                                    </select>
                                                 </div>   
                                                <div class="form-group">
                                                    <label for="tgl_diperoleh">Tanggal Diperoleh</label>
                                                    <input type="date" name="tgl_diperoleh" class="form-control" id="tgl_diperoleh">
                                                    <small class="form-text text-danger"><?= form_error('tgl_diperoleh'); ?></small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="keterangan">Keterangan</label>
                                                    <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan keterangan">
                                                </div>
                                                <ul class="pull-right">
                                                <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                                                <a href="<?= base_url(); ?>alat" class="btn btn-danger">Batal</a>
                                            </ul>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->