<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-coffee"></i>   <?php echo $title; ?></div>
        <div class="card-body">
          <div class="demo-grid" style="padding:20px">
            <form action="<?php echo base_url()?><?php echo $role .'/updatePelanggan'?>" method="POST" enctype="multipart/form-data">

              <?php
              if($this->session->flashdata('success')){
                echo '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> '.$this->session->flashdata('success').'.
              </div>';
            } elseif ($this->session->flashdata('error')) {
                echo '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Waduh!</strong> '.$this->session->flashdata('error').'.
              </div>';
            } ?>
              <table style="font-size: 14px" width="100%">
              <tr>
                 <td style="padding: 5px">pelangganID</td>
                  <td style="padding: 5px"><input value="<?php echo $pelanggan[0]->pelangganID ?>" class="form-control" type="text" name="pelangganID" required readonly /></td>
                </tr>
                <tr>
                  <td style="padding: 5px">nama</td>
                  <td style="padding: 5px"><input value="<?php echo $pelanggan[0]->nama ?>" class="form-control" type="text" name="nama" required/></td>
                </tr>
                <tr>
                  <td style="padding: 5px">lokasi</td>
                  <td style="padding: 5px"><input value="<?php echo $pelanggan[0]->lokasi ?>" class="form-control" type="text" name="lokasi" required/></td>
                </tr>
                <tr style="padding: 5px">
                  <td></td>
                  <td style="padding: 5px" colspan="1"><input class="btn btn-primary" type="submit" name="submit" value="Update Pelanggan" /></td>
                </tr>
              </table>
            </form>
          </div>
      </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

	<script>
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
  </script>
    <script type="text/javascript">
    function previewImage() {
      document.getElementById("image-preview").style.display = "block";
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
      oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
      };
    };
    </script>