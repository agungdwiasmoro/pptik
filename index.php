<?php 
include 'config/koneksi.php'; 
include 'header.php';
?>


    <!-- Carausel -->
    <section id="carausel" class="mb-5">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/carausel1.jpg" class="bd-placeholder-img" width="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <div class="container">
                        <div class="carousel-caption">
                            <h4>Selamat Datang di</h4>
                            <h1>Pusat Pelayanan Teknologi Informasi dan Komunikasi</h1>
                            <p>Universitas Muhammadiyah Purworejo</p>
                            <p class="mt-lg-5"><a class="btn btn-md btn-primary" href="#About">Get Started</a></p>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carausel2.jpg" class="bd-placeholder-img" width="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <div class="container">
                        <div class="carousel-caption">
                            <h4>Selamat Datang di</h4>
                            <h1>Pusat Pelayanan Teknologi Informasi dan Komunikasi</h1>
                            <p>Universitas Muhammadiyah Purworejo</p>
                            <p class="mt-lg-5"><a class="btn btn-md btn-primary" href="#About">Get Started</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carausel3.jpg" class="bd-placeholder-img" width="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <div class="container">
                        <div class="carousel-caption">
                            <h4>Selamat Datang di</h4>
                            <h1>Pusat Pelayanan Teknologi Informasi dan Komunikasir</h1>
                            <p>Universitas Muhammadiyah Purworejo</p>
                            <p class="mt-5-lg"><a class="btn btn-md btn-primary" href="#About">Get Started</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Carausel end -->

    <!-- About -->
    <section id="About" class="mb-5">
        <div class="container">
            <div class="row">
                <div class="header justify-content-center text-center mb-5">
                    <h2 class="mt-5 mb-lg-5">Tentang Kami</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-6 align-self-center">
                    <h3 class="fw-bold">VISI</h3>
                    <?php 
                    $query = "SELECT * FROM about ORDER BY id_about";	
                    $result = mysqli_query($koneksi,$query);
                    if ($result->num_rows > 0) {
                        while($row = mysqli_fetch_assoc($result)){ 
                        ?>
                    <p><?=$row['visi'];?></p>
                    <h3 class="fw-bold">MISI</h3>
                    <p><?=$row['misi'];?></p>
                    <?php }
                     } ?>	
                </div>
                <div class="col-md-6 text-end">
                    <img src="assets/img/about.jpg" class="mb-5  d-none d-md-inline-block shadow rounded" width="60%">
                </div>
            </div>
        </div>
    </section>  

    <!-- Event -->
    <section id="Event" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="header align-self-center text-center mt-5 mb-5">
                    <h2>Event</h2>
                </div>
            </div>
            
            <div class="row mb-2">
            <?php 
            $event = "SELECT * FROM event ORDER BY id_event desc limit 4";	
            $result = mysqli_query($koneksi,$event);
            
                if ($result->num_rows > 0) {
                    while($event = mysqli_fetch_assoc($result)){ 
                    ?>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" data-aos="fade-zoom-in"data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0"><?= $event['judul'];?></h3>
                            <div class="mb-1 text-muted"><?= date('d M Y', strtotime($event["tanggal"]));   ?></div>
                            <p class="card-text mb-auto"><?=substr($event['artikel'], 0, 100);?> ...</p>
                            <a href="#" class="stretched-link">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        <img src="assets/img/<?=$event['img'];?>" alt=""width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

                        </div>
                    </div>
                </div>
                <?php }
                } ?>
            </div>
    </section>
    <!-- event end -->

    <!-- Staff -->
    <section id="Staff">
        <div class="container">
            <div class="row">
                <div class="header align-self-center text-center mt-5 ">
                    <h2>Staff Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-5 m-3 border-0" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="800">
                        <div class="text-center">
                            <img src="assets/img/user2.png" alt="" class="rounded-circle text-center mb-5" width="60%">
                        </div>
                        <div class="title text-center">
                            <p>Plt Kepala UPT PPTIK</p>
                            <h2>Nuning Cahyaningrum</h2><hr>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-md-4">
                    <div class="card p-5 m-3 border-0" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-delay="600" data-aos-duration="800">
                        <div class="text-center">
                            <img src="assets/img/user3.jpg" alt="" class="rounded-circle text-center mb-5" width="60%">
                        </div>
                        <div class="title text-center">
                            <p>Kasubag Pelayanan</p>
                            <h2>Moch. Zaenal Arifin</h2><hr>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-md-4">
                    <div class="card p-5 m-3 border-0" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-delay="1200" data-aos-duration="800">
                        <div class="text-center">
                            <img src="assets/img/user1.png" alt="" class="rounded-circle text-center mb-5" width="60%">
                        </div>
                        <div class="title text-center">
                            <p>Staff</p>
                            <h2>Agung Dwi Asmoro</h2><hr>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
    </section>

    <?php include 'footer.php' ; ?>