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
        <h2 style="margin-top:0px">Barang Read</h2>
        <table class="table">
	    <tr><td>Kdsatuan</td><td><?php echo $kdsatuan; ?></td></tr>
	    <tr><td>Nmbrng</td><td><?php echo $nmbrng; ?></td></tr>
	    <tr><td>Hrgjual</td><td><?php echo $hrgjual; ?></td></tr>
	    <tr><td>Hrgbeli</td><td><?php echo $hrgbeli; ?></td></tr>
	    <tr><td>Stok</td><td><?php echo $stok; ?></td></tr>
	    <tr><td>Merek</td><td><?php echo $merek; ?></td></tr>
	    <tr><td>Tipe</td><td><?php echo $tipe; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('barang') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>