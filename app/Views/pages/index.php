<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div style="margin-top: 5px; margin-left: 10px; color: #fff; font-family: 'Verdana', Geneva, Tahoma, sans-serif;">
	<h3 class="title-app">APLIKASI</h3>
	<p class="desc-app">Absensi Rapat [e-Office]</p>
</div>
<div class="blog-card__squareblue"></div>
<div class="blog-card__squaregreen"></div>
<div class="row animate-slide-in-left">
	<div class="col-sm-2">
		<a href="/urmeet">
			<button class="btn btn-icon btn-block btn-menu">
				<i class="clip-data"></i>
				Rapat Anda
			</button>
		</a>
	</div>
	<div class="col-sm-2">
		<button class="btn btn-icon btn-block btn-menu the-icons list-unstyled">
			<i class="fa fa-envelope-o"></i>
			Undangan Rapat<span class="badge badge-danger"> 4 </span>
		</button>
	</div>
	<div class="col-sm-2">
		<button class="btn btn-icon btn-block btn-menu the-icons list-unstyled">
			<i class="clip-history"></i>
			History Rapat
		</button>
	</div>
</div>
<?= $this->endSection(); ?>