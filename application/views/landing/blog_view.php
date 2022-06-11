<div class="col-md-9 list-into-single">
	<div>
		<p class="list-page-single"><a href="<?= base_url() ?>">Home</a></p>>><p class="list-page-single"><a href="<?= base_url('/landing/blog/').$blog['category'] ?>"><?=$blog['category']?></a></p>
	</div>
</div>
<div class="col-md-9 single-post-posts" style="padding-bottom: 20px">

	<div id="title-post">
		<h2><?= $blog['title'] ?></h2>
	</div>
	<div class="detail-post">
		<p class="date-post">
			<span class="glyphicon glyphicon-dashboard" style="margin-right:5px;color:rgb(28, 71, 128)"></span><b>Tanggal :</b>
			<span class="text-date-post"><?= format_date($blog['date'], 'd F Y') ?></span>
		</p>
		<p class="created-post" style="margin-right:10px">
			<span class="glyphicon glyphicon-user" style="margin-right:5px;color:rgb(28, 71, 128)"></span><b>Ditulis oleh : </b>
			<span class="text-created-post"><?= $blog['writer_name'] ?></span>
		</p>
		<p class="created-post">
			<span class="glyphicon glyphicon-star" style="margin-right:5px;color:rgb(28, 71, 128)"></span><b>Dilihat oleh : </b>
			<span class="text-created-post"><?= $blog['count_view'] ?></span>
		</p>
	</div>
	<button type="button" class="btn btn-outline-success btn-floating" data-mdb-ripple-color="dark">
		<i class="fas fa-star"></i>
	</button>
	<?php if (!empty($blog['attachment'])) : ?>
		<a href="<?= base_url() . 'uploads/' . $blog['attachment'] ?>">
			<button class="btn btn-primary">Lihat Lampiran</button>
		</a>
	<?php endif; ?>
	<div id="img-post-wrap">
		<img class="img-responsive img-post" src="<?= asset_url($blog['photo']) ?>" />
	</div>
	<p id="isi-post">
	<div style="text-align:justify">
		<?= $blog['body'] ?>
	</div>


	<br>
	<br>
	<br>

	</p>
	<div id="post-bottom-wrap">
		<div data-aos="zoom-up">
			<div id="terkait-post" class="col-sm-6">
				<h3>POST TERKAIT</h3>
				<div class="underscore" style="margin-left:0px;margin-left:0px;margin-bottom:15px;"></div>
				<ul id="terkait-post-list">
					<?php foreach ($blogTerkaits as $key => $blogTerkait) :?>
						<li><a href="<?= base_url('landing/blog-view/'.$blogTerkait['id']) ?>"><?= $blogTerkait['title'] ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div data-aos="zoom-up">
			<div id="terbaru-post" class="col-sm-6">
				<h3>POST TEBARU</h3>
				<div class="underscore" style="margin-left:0px;margin-left:0px;margin-bottom:15px;"></div>
				<ul id="terbaru-post-list">
					<?php foreach ($blogTerbarus as $key => $blogTerbaru) :?>
						<li><a href="<?= base_url('landing/blog-view/'.$blogTerbaru['id']) ?>"><?= $blogTerbaru['title'] ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>

</div>