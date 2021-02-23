<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/aviva.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-social.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Aviva Finance Limited</title>
  </head>
  <body>
<dir id="home"></dir>
<?php include "menu.php"; ?>
<?php include "slider.php"; ?>


<!-- <div class="sticky-top bg-white hidden-spacer"> </div> -->
<section id="conventional_product" class="my-5">
    <div class="py-5">
        <h3 class="text-center">Conventional Products</h3>
        <p>blog.</p>
        <?php include "c_deposit_products.php"; ?>
        <?php include "c_loan_products.php"; ?>
    </div>
</section>

<section id="islamic_product" class="my-5">
    <div class="py-5">
        <h3 class="text-center">Islamic Products</h3>
        <p>blog.</p>
        <?php include "iw_deposit_products.php"; ?>
        <?php include "iw_loan_products.php"; ?>
    </div>
</section>

<section id="about_us" class="my-5">
    <div class="py-5">
        <h3 class="text-center">About Us</h3>
    </div>
</section>

<section id="contact_us" class="my-5">
    <div class="py-5">
        <h3 class="text-center">Contact Us</h3>
    </div>
    <div class="w-50 m-auto">
        <form action="server.php" method="POST">
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" name="username" autocomplete="off" class="form-control" required="true">
            </div>
                        <div class="form-group">
                <label>E-Mail</label>
                <input type="text" name="email" autocomplete="off" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea type="textarea" name="comments" autocomplete="off" class="form-control"></textarea> 
            </div>
            <button type="submit" class="btn btn-primary" name="submit" required="true">Submit</button>
        </form>
    </div>
</section>

<?php include "footer.php"; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>