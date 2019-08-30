<div class="panel panel-info">
	<div class="panel-heading"><h3 style="margin-top: 5px">Cetak Agenda</h3></div>
</div>

<div class="well">
<form action="<?php echo base_URL(); ?>admin/cetak_agenda" target="blank" method="post" accept-charset="utf-8" enctype="multipart/form-data">	
	<input type="hidden" name="tipe" value="<?php echo $this->uri->segment(2); ?>">

	<table class="table-form" width="100%">
	<tr><td width="20%">Dari Tanggal</td><td><b><input type="text" name="tgl_start" id="tgl_start" class="form-control" style="width: 150px" required></b></td></tr>		
	<tr><td width="20%">Sampai Tanggal</td><td><b><input type="text" name="tgl_end" id="tgl_end" class="form-control" style="width: 150px"  required></b></td></tr>	
	
	<tr><td colspan="2">
	<br>
	<button type="submit" class="btn btn-primary"><i class="icon icon-print icon-white"></i> Cetak</button>
	<a href="<?php echo base_URL(); ?>admin" class="btn btn-success"><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
	</td></tr>
	</table>
</form>
</div>

<?php 
	//$this->template->javascript->add('https://getbootstrap.com/2.3.2/assets/css/bootstrap.js'); 
?>

<script type="text/javascript">
$(function() {
	$( "#tgl_start" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd'
	});
	$( "#tgl_end" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd'
	});
});
</script>



<script type="text/javascript">
$(function() {
	
});
</script>
