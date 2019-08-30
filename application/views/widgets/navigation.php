<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
         <span class="navbar-brand"><strong style="font-family: verdana;">Pak POS</strong></span>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">	
			<li><a href="<?php echo base_url(); ?>admin"><i class="icon-home icon-white"> </i> Beranda</a></li>
            <li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-th-list icon-white"> </i> Referensi <span class="caret"></span></a>
				<ul class="dropdown-menu" aria-labelledby="themes">
				<li><a tabindex="-1" href="<?php echo base_url(); ?>admin/klas_surat">Klasifikasi Surat</a></li>
				</ul>
            </li>
		<?php
		if ($this->session->userdata('admin_level') != "Super Admin") {
		?>	
		<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-random icon-white"> </i> Catat Surat <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/surat_masuk">Surat Masuk</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/surat_keluar">Surat Keluar</a></li>
              </ul>
            </li>
            	<?php } ?>
			<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-file icon-white"> </i> Buku Agenda <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/agenda_surat_masuk"> Surat Masuk</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/agenda_surat_keluar"> Surat Keluar</a></li>
              </ul>
            </li>
		
			<?php
			if ($this->session->userdata('admin_level') == "Super Admin") {
			?>
		<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-wrench icon-white"> </i> Pengaturan <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/pengguna">Instansi Pengguna</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/manage_admin">Manajemen Admin</a></li>
              </ul>
            </li>
			<?php 
			}
			?>
          </ul>

          <ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-user icon-white"></i> Administrator <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>admin/passwod">Rubah Password</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>Signin/logout">Logout</a></li>
                <li><a tabindex="-1" href="http://nur-akhwan.blogspot.com/2013/10/aplikasi-sederhana-manajemen-surat.html" target="_blank">Help</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
