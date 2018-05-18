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
        <h2 style="margin-top:0px">Satuan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nm Satuan <?php echo form_error('nm_satuan') ?></label>
            <input type="text" class="form-control" name="nm_satuan" id="nm_satuan" placeholder="Nm Satuan" value="<?php echo $nm_satuan; ?>" />
        </div>
	    <input type="hidden" name="kd_satuan" value="<?php echo $kd_satuan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('satuan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>