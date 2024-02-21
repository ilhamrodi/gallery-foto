<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        require"function.php";
        $datas= query("SELECT * FROM albumfoto");

    ?>
    <article>
        <div class="judul">
            <h1>Gallery Photo</h1>
        </div>
        <div class="card-wrapper">
            <div class="card-scroll">
              <img src="nomer1.jpg" alt="pemandangan" width="10%" height="10%">
              <p>Keterangan :</p>
              <p>Kegiatan :</p> 
              <p>Tanggal Kegiatan :</p>             
            </div>
            <div>
                <img src="nomer2.jpg" alt=""  width="10%" height="10%">
                <p>Keterangan :</p>
              <p>Kegiatan :</p> 
              <p>Tanggal Kegiatan :</p>    
            </div>
            <div>
                <img src="nomer3.jpg" alt=""  width="10%" height="10%">
                <p>Keterangan :</p>
              <p>Kegiatan :</p> 
              <p>Tanggal Kegiatan :</p>    
            </div>
        </div>
    </article>
    <footer>
        <a href="login.php">silahkan login untuk menambahkan data</a>
    </footer>
    
</body>
</html>

