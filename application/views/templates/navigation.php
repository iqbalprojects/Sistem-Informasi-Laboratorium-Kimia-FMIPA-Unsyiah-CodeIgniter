    <div id="wrapper">
           <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Startmin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                           
                            <li>
                                <a href="<?= base_url(); ?>"><i class="fa fa-home fa-fw"></i> Beranda</a>
                            </li>
                            
                            <li>
                                <a href="<?= base_url(); ?>alat"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>form"><i class="fa fa-edit fa-fw"></i> Forms</a>
                            </li>
                           
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Data Alat & Bahan</a>
                                
                                    <li>
                                        <a href="tables.html"><i class="fa fa-angle-right fa-fw"></i>Alat Kimia</a>
                                    </li>
                                    <li>
                                        <a href="tables.html"><i class="fa fa-angle-right fa-fw"></i>Bahan Kimia</a>
                                    </li>
                             <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Peminjaman Alat</a>
                                
                                    <li>
                                        <a href="forms.html"><i class="fa fa-angle-right fa-fw"></i>Pengajuan</a>
                                    </li>
                                    <li>
                                        <a href="tables.html"><i class="fa fa-angle-right fa-fw"></i>Persetujuan</a>
                                    </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Cetak Laporan</a>
                                    </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Lihat Jadwal</a>
                                    </li>
                             <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Data Pengguna</a>
                                
                                    <li>
                                        <a href="tables.html"><i class="fa fa-angle-right fa-fw"></i>Petugas</a>
                                    </li>
                                    <li>
                                        <a href="tables.html"><i class="fa fa-angle-right fa-fw"></i>Asisten</a>
                                    </li>
                                    
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                           
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>