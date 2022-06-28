<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="col-sm-12">
    <ol class="breadcrumb" ">
    <li>
        <i class=" clip-home"></i>
        <a href="/" style="color: white;"> &nbsp;Home </a>
        </li>
        <li>
            <a href="#" style="color: white;">Rapat Anda </a>
        </li>
    </ol>
</div>
<div class=" blog-card__squareblue"></div>
<div class="blog-card__squaregreen"></div>
<div class="row">
    <div class="col-sm-4 animate-slide-in-left" style="margin-top: 10px; margin-left:13px">
        <div class="panel panel-white">
            <div class="panel-heading">
                <i class="clip-data"></i>
                Rapat Anda
            </div>
            <div class="panel-scroll" style="height: 150px">
                <ul class="activities">
                    <li>
                        <a class="activity" href="/create">
                            <i class="clip-pencil circle-icon circle-green"></i>
                            <span class="desc">Buat Rapat Anda</span>
                        </a>
                    </li>
                    <li>
                        <a class="activity" href="/list">
                            <i class="clip-list circle-icon circle-green"></i>
                            <span class="desc">Daftar Undangan Rapat</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>