
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Registrasi</h3>
            </div>

            <p>
             <!--  <a href="<?= base_url('home/tambah_pasien')?>" class="btn btn-success">
                <i class="fa fa-plus"> Baru</i>
              </a> -->
              <a href="<?= base_url('home/pasien_keluar')?>" class="btn btn-primary">
                <i class="fa fa-sign-out"> Keluar</i>
              </a>
            </p>



            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Registrasi</th>
                  <th>No MedRec</th>
                  <th>Nama Pasien</th>
                  <th>Ruangan</th>
                  <th>Dokter</th>
                  <!-- <th>Status</th> -->
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($pasien as $us ) { ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $us->no_registrasi?></td>
                  <td><?= $us->no_rekam_medis?></td>
                  <td><?= $us->nama_pasien?></td>
                  <td><?= $us->nama_ruangan?></td>
                  <td><?= $us->nama_dokter?></td>
                 <!--  <td>
                    <?php if ($us->status_pasien==='1') {

                    if ($us->alasan_keluar==='1') {
                      echo"Sehat";
                    }elseif ($us->alasan_keluar==='2') {
                      echo"Rujuk";
                    }elseif ($us->alasan_keluar==='3') {
                      echo"Wafat";
                    }elseif ($us->alasan_keluar==='4') {
                      echo"Evakuasi";
                    }

                    }elseif ($us->status_pasien==='0') {
                      echo('belum pulang');
                    } ?>


                  </td> -->
                  <td>
                    <a href="<?= base_url('home/pasien_edit/'.$us->id_pasien)?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>
                    <a href="<?= base_url('home/pasien_hapus/'.$us->id_pasien)?>" class="btn btn-danger btn-xs" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fa fa-trash"></i>Hapus</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
