        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
                Pengguna
            </h1>
            <p class="lead">Menampilkan data Pengguna</p>
            
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <?php if ($this->session->flashdata('success_msg')): ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?= $this->session->flashdata('success_msg') ?>.
                        </div>
                    <?php endif ?>
                    <?php if ($this->session->flashdata('fail_msg')): ?>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?= $this->session->flashdata('fail_msg') ?>.
                        </div>
                    <?php endif ?>
                    
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Pengguna</th>
                                    <th>Email</th>
                                    <th>No Telepon</th>
                                    <th>Provinsi</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ((array) $penggunas as $key => $pengguna) : ?>
                                    <tr>
                                        <td><?= $pengguna->id_pengguna ?></td>
                                        <td><?= $pengguna->nama_pengguna ?></td>
                                        <td><?= $pengguna->email ?></td>
                                        <td><?= $pengguna->no_telp ?></td>
                                        <td><?= $pengguna->nama_provinsi ?></td>
                                        <td><?= $pengguna->alamat ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/main col-->
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Large Modal</h4>
                    </div>
                    <div class="modal-body">
                        Anda Ingin Menghapus Data Pengguna
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="<?=base_url('pengguna/hapus/')?>"><button type="button" class="btn btn-primary-outline" data-dismiss="modal">OK</button></a>
                    </div>
                </div>
            </div>
        </div>