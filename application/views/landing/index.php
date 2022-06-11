<div id="carousel-wrap">
  <div id="carousel-wrap-in" class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php foreach ($banners as $key => $banner) : ?>
            <?php if($key == 0): ?>
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <?php else: ?>
              <li data-target="#carousel-example-generic" data-slide-to="<?= $key ?>"></li>
            <?php endif; ?>
        <?php endforeach; ?>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner slider-post">
        <?php foreach ($banners as $key => $banner) : ?>
        <div class="item <?= $key==0? 'active':'' ?>">
          <img src="<?= asset_url($banner['photo'])?>" alt="...">
          <div class="carousel-caption">
            <h2><?= $banner['title'] ?></h2>
            <p style="font-family: myf">
              <?= $banner['caption'] ?>
              </p>
          </div>
        </div>
        <?php endforeach; ?>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
</div>
<div id="popular-wrap">
</div>
<div id="popular-wrap-bottom">
  <h2 class="title-section">POPULAR POST</h2>
  <div class="underscore"></div>
  <div class="container">
    
    <?php foreach ($blogPopulars as $key => $blogPopular) :?>
      <div data-aos="fade-up">
      <div class="col-sm-4 post-populer">
        <img class="img-responsive img-popular" src="<?= asset_url($blogPopular['photo']) ?>">
        <h3>
          <a href="<?= base_url('landing/blog-view/'.$blogPopular['id']) ?>" class="title-post-popular"><?= $blogPopular['title'] ?></a>
        </h3>
        <h6 style="color:#555;font-family: myf">Penulis : <b><?= $blogPopular['writer_name'] ?></b><span style="margin-left:10px">
            Tanggal : <b><?= format_date($blogPopular['date'], 'd F Y') ?></b></span></h6>
        <p class="content-popular-post">
          <?= substr(strip_tags($blogPopular['body']),0,110) . "..."?>
        </p>
        <a href="<?= base_url('landing/blog-view/'.$blogPopular['id']) ?>" style="color:green">Selengkapnya >> </a>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</div>
<div class="col-sm-12" id="activity">
  <div class="container">
    <h2 class="title-section" style="color:#fff;margin-top:60px">POST TERBAIK</h2>
    <div class="underscore"></div>


    <div class="col-md-12">
      <div id="news-slider" class="owl-carousel">
        <div data-aos="zoom-in-up">
          <div class="post-slide">
            <div class="post-img">
              <a href="single/Menjawab-Tantangan-di-Era-4-0-dengan-Aplikasi-Penelitian-Berbasis-STEM-2019-04-1110-02-00.html"><img src="assets/img/thumb/bea41da75d76587cefa394781f6187bc.jpg" alt=""></a>
            </div>

            <div class="post-content">
              <div class="post-date">
                <span class="month">05</span>
                <span class="date">10</span>
                <span class="month">2020</span>
              </div>

              <h5 class="post-title"><a href="single/pendidikan-humanis-secara-daring-apakah-dapat-dilaksanakan-2020-10-0510-46-48.html">PENDIDIKAN
                  HUMANIS SECARA DARING : APAKAH DAPAT DILAKSANAKAN?</a></h5>
              <a href="#" class="isi-suka">
                <p class="post-description">
                  PENDIDIKAN HUMANIS SECARA DARING : APAKAH DAPAT DILAKSANAKAN?

                  Muhamad Aditya Hidayah / 20104060025

                  e-mail : madityahidayah@gmail.com

                  Pendidikan Kimia Universitas Islam Negeri S...
                </p>
              </a>
            </div>
            <ul class="post-bar">
              <li>Penulis : <a href="penulis/20104060025.html"> MUHAMAD ADITYA HIDAYAH</a> </li>
            </ul>
          </div>
        </div>
        <div data-aos="zoom-in-up">
          <div class="post-slide">
            <div class="post-img">
              <a href="single/Menjawab-Tantangan-di-Era-4-0-dengan-Aplikasi-Penelitian-Berbasis-STEM-2019-04-1110-02-00.html"><img src="assets/img/thumb/7740486c888ec05384d76e623a6dcaca.jpg" alt=""></a>
            </div>

            <div class="post-content">
              <div class="post-date">
                <span class="month">06</span>
                <span class="date">10</span>
                <span class="month">2020</span>
              </div>

              <h5 class="post-title"><a href="single/gangguan-mental-pada-masa-pandemi2020-10-0601-35-38.html">Gangguan Mental Pada Masa
                  Pandemi</a></h5>
              <a href="#" class="isi-suka">
                <p class="post-description">
                  &nbsp;

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Benarkah hanya daya tahan tubuh saja yang perlu dijaga?

                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Masa pandemi ini memang mengharuskan semua orang untuk t...
                </p>
              </a>
            </div>
            <ul class="post-bar">
              <li>Penulis : <a href="penulis/20104060050.html"> KHAFIFAH AULIA WULAYALIN </a> </li>
            </ul>
          </div>
        </div>
        <div data-aos="zoom-in-up">
          <div class="post-slide">
            <div class="post-img">
              <a href="single/Menjawab-Tantangan-di-Era-4-0-dengan-Aplikasi-Penelitian-Berbasis-STEM-2019-04-1110-02-00.html"><img src="assets/img/thumb/e21606f6d3d577f294d5c42a2af6dc94.gif" alt=""></a>
            </div>

            <div class="post-content">
              <div class="post-date">
                <span class="month">11</span>
                <span class="date">04</span>
                <span class="month">2019</span>
              </div>

              <h5 class="post-title"><a href="single/Menjawab-Tantangan-di-Era-4-0-dengan-Aplikasi-Penelitian-Berbasis-STEM-2019-04-1110-02-00.html">Menjawab
                  Tantangan di Era 4.0., dengan Aplikasi Penelitian Berbasis STEM.</a></h5>
              <a href="#" class="isi-suka">
                <p class="post-description">
                  Yogjakarta - Dalam meningkatkan kualitas dan mutu mahasiswa untuk menjawab tantangan baru di era
                  4.0, prodi pendidikan kimia UIN Sunan Kalijaga Yogyakarta menyelenggarakan kuliah umum d...
                </p>
              </a>
            </div>
            <ul class="post-bar">
              <li>Penulis : <a href="penulis/18106070028.html"> FAUZAN ABRORI</a> </li>
            </ul>
          </div>
        </div>
        <div data-aos="zoom-in-up">
          <div class="post-slide">
            <div class="post-img">
              <a href="single/Menjawab-Tantangan-di-Era-4-0-dengan-Aplikasi-Penelitian-Berbasis-STEM-2019-04-1110-02-00.html"><img src="assets/img/thumb/572a7c57b1c506c308e6e6479bc16f43.jpg" alt=""></a>
            </div>

            <div class="post-content">
              <div class="post-date">
                <span class="month">06</span>
                <span class="date">10</span>
                <span class="month">2020</span>
              </div>

              <h5 class="post-title"><a href="single/omnibus-law-bentuk-nyata-fungsi-hukum-tidak-lagi-sebagai-pelaksana-kehendak-rakyat2020-10-0609-48-16.html">OMNIBUS
                  LAW : BENTUK NYATA FUNGSI HUKUM TIDAK LAGI SEBAGAI PELAKSANA KEHENDAK RAKYAT</a></h5>
              <a href="#" class="isi-suka">
                <p class="post-description">
                  Apa sih Omnibus Law itu?

                  Kok Sekarang rame banget se-Indonesia menyuarakan hal yang sama. Jadi, Omnibus Law adalah aturan
                  baru yang dibuat untuk menggantikan aturan-aturan yang sebel...
                </p>
              </a>
            </div>
            <ul class="post-bar">
              <li>Penulis : <a href="penulis/20104060046.html"> FITRIA NADIN WULANDARI</a> </li>
            </ul>
          </div>
        </div>
        <div data-aos="zoom-in-up">
          <div class="post-slide">
            <div class="post-img">
              <a href="single/Menjawab-Tantangan-di-Era-4-0-dengan-Aplikasi-Penelitian-Berbasis-STEM-2019-04-1110-02-00.html"><img src="assets/img/thumb/9c1c5dac8a2846a9e8ad6dbbe9bd735e.png" alt=""></a>
            </div>

            <div class="post-content">
              <div class="post-date">
                <span class="month">03</span>
                <span class="date">03</span>
                <span class="month">2021</span>
              </div>

              <h5 class="post-title"><a href="single/hand-sanitizer-ekstrak-daun-salam-syzygium-polyanthum-sebagai-karya-generasi-milenial-di-era-pandemi2021-03-0315-47-46.html">Hand
                  Sanitizer Ekstrak Daun Salam (Syzygium polyanthum) sebagai Karya Generasi Milenial di Era
                  Pandemi</a></h5>
              <a href="#" class="isi-suka">
                <p class="post-description">
                  Hand Sanitizer Ekstrak Daun Salam (Syzygium polyanthum) sebagai Karya Generasi Milenial di Era
                  Pandemi

                  &nbsp;

                  HM-PS Pendidikan Kimia UIN Sunan Kalijaga

                  Fakultas Ilmu Tarbiyah d...
                </p>
              </a>
            </div>
            <ul class="post-bar">
              <li>Penulis : <a href="penulis/20104060025.html"> MUHAMAD ADITYA HIDAYAH</a> </li>
            </ul>
          </div>
        </div>
        <div data-aos="zoom-in-up">
          <div class="post-slide">
            <div class="post-img">
              <a href="single/Menjawab-Tantangan-di-Era-4-0-dengan-Aplikasi-Penelitian-Berbasis-STEM-2019-04-1110-02-00.html"><img src="assets/img/thumb/7a2911b81ce6e38c9e25f36ea947648e.png" alt=""></a>
            </div>

            <div class="post-content">
              <div class="post-date">
                <span class="month">08</span>
                <span class="date">04</span>
                <span class="month">2019</span>
              </div>

              <h5 class="post-title"><a href="single/Pendekatan-STEM-di-Era-Revolusi-Industri-4-02019-04-0818-53-48.html">Pendekatan STEM di
                  Era Revolusi Industri 4.0</a></h5>
              <a href="#" class="isi-suka">
                <p class="post-description">
                  Program studi pendidikan kimia&nbsp; Universitas Islam Negeri Yogyakarta kembali lagi
                  menyelenggarakan Kuliah umum yang bertajuk &ldquo;Aplikasi Penelitian Berbasis STEM ( Science ,
                  Tec...
                </p>
              </a>
            </div>
            <ul class="post-bar">
              <li>Penulis : <a href="penulis/17106070042.html"> HUBAILA AZMI</a> </li>
            </ul>
          </div>
        </div>
        <div data-aos="zoom-in-up">
          <div class="post-slide">
            <div class="post-img">
              <a href="single/Menjawab-Tantangan-di-Era-4-0-dengan-Aplikasi-Penelitian-Berbasis-STEM-2019-04-1110-02-00.html"><img src="assets/img/thumb/bcd22d9cffbf821109d490b3e6b5719e.jpg" alt=""></a>
            </div>

            <div class="post-content">
              <div class="post-date">
                <span class="month">05</span>
                <span class="date">10</span>
                <span class="month">2019</span>
              </div>

              <h5 class="post-title"><a href="single/pendidikan-kimia-uin-suka-gelar-stadium-general-dengan-tema-pengembangan-soal-soal-high-order-thinking-skill-hots-untuk-calon.html">Pendidikan
                  Kimia UIN Suka Gelar Stadium General Pengembangan Soal-Soal HOTS dalam Menghadapi Era Disrupsi
                  Industri 4.0</a></h5>
              <a href="#" class="isi-suka">
                <p class="post-description">
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pendidikan Kimia UIN Sunan Kalijaga Yogyakarta kembali mengelar
                  stadium general guna untuk menambah wawasan baru yang dikembangkan sesuai dengan kebut...
                </p>
              </a>
            </div>
            <ul class="post-bar">
              <li>Penulis : <a href="penulis/18106070028.html"> FAUZAN ABRORI</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
<div id="all-post-wrapper">
  <div class="container-fluid">
    <div class="col-sm-3">
      <h3 class="title-section title-section-bottom" style="line-height: 1.3em">MAHASISWA <br> TERAKTIF</h3>
      <div class="underscore"></div>
      <?php foreach ($bestWriters as $key => $bestWriter) :?>
      <div data-aos="zoom-in">
        <a href="<?= base_url('landing/writer/'.$bestWriter['writed_by']) ?>">
          <div class="col-sm-12 post-pengumuman">
            <div class="col-sm-4 col-xs-5 img-pengumuman-wrap">
              <img class="img-responsive img-pengumuman" src="assets/img/trophy.svg" />
            </div>
            <div class="col-sm-8 col-xs-7 main-pengumuman">
              <a href="<?= base_url('landing/writer/'.$bestWriter['writed_by']) ?>" class="aktif">
                <h5 class="title-pengumuman"><?= $bestWriter['no_student']?></h5>
                <h5 class="title-pengumuman" style="color:#555"><?= $bestWriter['student_name']?></h5>
                <h6 class="title-pengumuman" style="color:#6d9c6f"><?= $bestWriter['count_blog']?> Posts</h6>
              </a>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
    <div id="recent-post" class="col-sm-6">
      <h3 class="title-section title-section-bottom">POST TERBARU</h3>
      <div class="underscore"></div>
      <?php foreach ($blogTerbarus as $key => $blogTerbaru) :?>
        <div data-aos="zoom-in">
        <div class="col-sm-12 post-recent">
          <div class="col-sm-4 col-xs-5 img-recent-wrap">
            <img class="img-responsive img-recent" src="<?= asset_url($blogTerbaru['photo']) ?>" />
          </div>
          <div class="col-sm-8 col-xs-7 main-pengumuman">
            <a href="<?= base_url('landing/blog-view/'.$blogTerbaru['id']) ?>">
              <h4 class="title-recent"><?= $blogTerbaru['title'] ?></h4>
            </a>
            <h6 style="color:#555;font-family: myf">Penulis : <b><?= $blogTerbaru['writer_name'] ?></b><span style="margin-left:10px">
                Tanggal : <b><?= format_date($blogTerbaru['date'],'d F Y') ?></b></span></h6>
            <p>
            <?= substr(strip_tags($blogTerbaru['body']),0,110) . "..."?>
            </p>
            <a href="<?= base_url('landing/blog-view/'.$blogTerbaru['id']) ?>" style="color:green">Selengkapnya >> </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="col-sm-3">
      <h3 class="title-section title-section-bottom">AGENDA</h3>
      <div class="underscore"></div>
      <div class="col-sm-12 agenda-wrapper">
        <ul>
          <?php foreach ($agendas as $key => $agenda) : ?>
            <div data-aos="zoom-in">
              <a href="<?= base_url('landing/agenda/'.$agenda['id']) ?>">
                <li class="agenda-post"><i class="glyphicon glyphicon-calendar" style="margin-right:5px"></i><?= $agenda['title'] ?>
                  <p class="date-agenda"><?= format_date($agenda['date'], 'd F Y') ?></p>
                </li>
              </a>
            </div>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>