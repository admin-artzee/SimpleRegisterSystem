<?php

    
    include "proses.php";

?>



<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
     <div class="container" style="margin-top: 50px;">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
        <div class="panel-body">


            <?php if (isset($success)) {
                if ($success==true) { ?>
                <div class="alert alert-success"><?php echo "Terima Kasih, komentar anda akan muncul setelah mendapatkan persetujuan dari Admin"; ?></div>
            <? } else { ?>
            <div class="alert alert-danger"><?php echo "Gagal!, Mohon lengkapi form dan Captcha yang tersedia"; ?></div>
            <?php } } ?>









<div class="shadow p-3 mb-5 bg-white rounded">
<div class="container2">
<h2>Daftar  <span class="badge badge-secondary">Akun</span></h2>
    <form action="registrasi2.php" method="post">
        <div class="form-group">
            <label>Username Atau Email:</label>
            <input type="text" name="username" class="form-control" placeholder="Maksimal 20 Karakter" />
        </div>
	
	<div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Maksimal 12 Karakter" />
        </div>

      <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
         <label class="form-check-label" for="inlineCheckbox1">Saya Menyetujui Persyaratan Dan Kebijakan</label>
      </div>
      <br>

           <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
                    <br>

        <button type="submit" name="submit" class="btn btn-primary">Daftar</button>

    </form>
</div>
</div>

      <script src='https://www.google.com/recaptcha/api.js'></script>
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>