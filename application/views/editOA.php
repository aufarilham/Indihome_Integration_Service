<div class="col-sm-12">
<div class="col-sm-3"> </div>
<center>
<div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit OA</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo base_url()?><?php echo $role .'/updateOA'?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                         
                    
                         <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">xConnectCable</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input type="text" required readonly value="<?php echo $oa[0]->xConnectCable ?>" id="hf-email" name="xConnectCable" placeholder="" class="form-control"></div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">ospTerm</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input type="text" required readonly value="<?php echo $oa[0]->ospTerm ?>" id="hf-email" name="ospTerm" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">feederCable</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input type="text" required value="<?php echo $oa[0]->feederCable ?>" id="hf-email" name="feederCable" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">primaryFiberCable</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="text" required value="<?php echo $oa[0]->primaryFiberCable ?>" id="hf-email" name="primaryFiberCable" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">fileABDOSP</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="text" required value="<?php echo $oa[0]->fileABDOSP ?>" id="hf-email" name="fileABDOSP" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">odcPortIn</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="text" required value="<?php echo $oa[0]->odcPORTIN ?>"  id="hf-email" name="odcPortIn" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">lossCore</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="text" id="hf-email" required value="<?php echo $oa[0]->lossCore ?>"  name="lossCore" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">xConnectODCspin</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="text" id="hf-email" required value="<?php echo $oa[0]->xConnectODCspin ?>" name="xConnectODCspin" placeholder="" class="form-control"></div>
                          </div>
                          
                        
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm btn-block">
                          <i class="fa fa-dot-circle-o"></i> Update
                        </button>
                      </div>
                    </div>
                  </form>
      
  
                  


          </div>
          </center>
      </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Baleni 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

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
