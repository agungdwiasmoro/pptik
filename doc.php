<?php include 'config/koneksi.php'; ?>
<?php include 'header.php' ;?>

<section class="mt-5">
  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Documents</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <?php 
    $doc = "SELECT * FROM doc ORDER BY id_doc desc";	
    $result = mysqli_query($koneksi,$doc);
    
        if ($result->num_rows > 0) {
            while($doc = mysqli_fetch_assoc($result)){ 
            ?>
      <div class="col d-flex align-items-start">
        <div class=" card p-3 m-2">
          <h3><?= $doc['judul'];?></h3>
          <small><?= date('d M Y', strtotime($doc["date"]));   ?> </small><hr>
          <p><?=substr($doc['disc'], 0, 150);?></p>
          <a href="assets/doc/<?= $doc['file'];?>" class="btn btn-primary">
            Download
          </a>
        </div>
      </div>
      <?php }
        } ?>
    </div>
  </div>
</section>
<?php include 'footer.php' ; ?>