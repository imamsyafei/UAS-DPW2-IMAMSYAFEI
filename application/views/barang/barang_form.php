<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Barang <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Kdsatuan <?php echo form_error('kdsatuan') ?></label>
            <input type="text" class="form-control" name="kdsatuan" id="kdsatuan" placeholder="Kdsatuan" value="<?php echo $kdsatuan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nmbrng <?php echo form_error('nmbrng') ?></label>
            <input type="text" class="form-control" name="nmbrng" id="nmbrng" placeholder="Nmbrng" value="<?php echo $nmbrng; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Hrgjual <?php echo form_error('hrgjual') ?></label>
            <input type="text" class="form-control" name="hrgjual" id="hrgjual" placeholder="Hrgjual" value="<?php echo $hrgjual; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Hrgbeli <?php echo form_error('hrgbeli') ?></label>
            <input type="text" class="form-control" name="hrgbeli" id="hrgbeli" placeholder="Hrgbeli" value="<?php echo $hrgbeli; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Stok <?php echo form_error('stok') ?></label>
            <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok" value="<?php echo $stok; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Merek <?php echo form_error('merek') ?></label>
            <input type="text" class="form-control" name="merek" id="merek" placeholder="Merek" value="<?php echo $merek; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tipe <?php echo form_error('tipe') ?></label>
            <input type="text" class="form-control" name="tipe" id="tipe" placeholder="Tipe" value="<?php echo $tipe; ?>" />
        </div>
	    <input type="hidden" name="kdbrng" value="<?php echo $kdbrng; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('barang') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>