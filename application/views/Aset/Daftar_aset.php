<?php
	$data['tittle'] = "Daftar Aset";
	$this->load->view('template/head', $data);
?>
<body>
    <div id="wrapper">
        <?php $this->load->view('template/navbar'); ?>
        <!--/. NAV TOP  -->
        <?php $this->load->view('template/menu'); ?>
        <!-- /. NAV SIDE  -->

		<div id="page-wrapper">
            <div class="header"> 
                <h1 class="page-header">
                    Daftar Aset
                </h1>
                <?= $this->session->flashdata('pesan'); ?>
                <ol class="breadcrumb">
                    <li><a href="#"><?php $str = $this->session->userdata('nama_pegawai');
                    echo wordwrap($str, 15, "<br>\n"); ?></a></li>
                    <li><a href="<?=base_url()?>Aset/home">Home</a></li>
                    <li class="active">Daftar Aset</li>
                </ol> 
            </div>
            
            <div id="page-inner">
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Line Chart
                            </div>
                            <div class="panel-body">
                                
                            </div>						
                        </div>   
                    </div>		
                        
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bar Chart Example
                            </div>
                            <div class="panel-body">

                            </div>
                        </div>  
                    </div>
                </div> 	
                <!-- /. ROW  -->
				<?php $this->load->view('template/copyright') ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <?php $this->load->view('template/script') ?>

</body>

</html>