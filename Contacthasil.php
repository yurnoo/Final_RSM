    <?php
        $name = $_POST['name'];
		$gen = $_POST['gen'];
        $date = $_POST['date'];
		$citi = $_POST['citi'];
        $email = $_POST['email'];
        $hob = $_POST['hob'];
        $city = $_POST['city'];
        $message = $_POST['message'];
    ?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Contact</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- My Css -->
	<link rel="stylesheet" type="text/css" href="contact.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<!-- Navigation (Sits on top) -->
<div class="w3-bar w3-orange w3-card w3-left-align w3-large">
<a href="Home.html" class="w3-bar-item w3-button">Travelgo</a>

<!-- Right-sided navbar links. Hide them on small screens -->
<div class="w3-right w3-hide-small">
<a href="Home.html" class="w3-bar-item w3-button">Home</a>
<a href="About.html" class="w3-bar-item w3-button">About</a>
<a href="Artikel.html" class="w3-bar-item w3-button">Artikel</a>
<a href="PhotoGallery.html" class="w3-bar-item w3-button">Photo Gallery</a>
<a href="Videogallery.html" class="w3-bar-item w3-button">Video Gallery</a>
<a href="ContactUs.html" class="w3-bar-item w3-button"  style="background-color:lavender;">Contact Us</a>
</div>
</div>
<!--akhir navbar-->

  <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
	<h3><a>User Personal Data Based on Data Input Received</a><h3>
  </div>
  
  <div class="row">
    <div class="column">
      <img src="gambar/travel.png" width="100%" height="50%" style="display: block; margin: auto;">
	</div>
	

    <div class="column">
        <div class="panel-group">
        <div class="panel panel-success">
        <div class="panel-heading">Hasil Penginputan Data</div>
        <br>
            <div class="panel-body">
        <div class="row">
                <label class="col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
                <?= $name?>
            </div>
        </div>
		<div class="row">
                <label class="col-sm-2" for="gen">Gender:</label>
            <div class="col-sm-10">
                <?=$gen?>
            </div>
		</div>
		<div class="row">
                <label class="col-sm-2" for="date">Date:</label>
            <div class="col-sm-10">
                <?php echo $_POST['date']; ?>
            </div>
        </div>
		<div class="row">
                <label class="col-sm-2" for="citi">Citizenship:</label>
            <div class="col-sm-10">
                <?=$citi?>
            </div>
		</div>
        <div class="row">
                <label class="col-sm-2" for="nama">Email:</label>
            <div class="col-sm-10">
                <?php echo $email; ?>
            </div>
        </div>
		<div class="row">
                <label class="col-sm-2" for="hob">Hobby:</label>
            <div class="col-sm-10">
                <?=$hob?>
            </div>
        </div>
		<div class="row">
                <label class="col-sm-2" for="city">City:</label>
            <div class="col-sm-10">
                <?=$city?>
            </div>
        </div>
        <div class="row">
                <label class="col-sm-2" for="message">Message:</label>
            <div class="col-sm-10">
                <?=$message?>
            </div>
		  </div>
	    </div>
	  </div>
	</div>
</div>


<!-- Footer -->
<footer class="w3-container w3-center w3-opacity w3-margin-bottom">
  <h5>Follow Us</h5>
  <div class="w3-xlarge w3-padding-16">
    <a href="https://www.facebook.com"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com"><i class="fa fa-instagram w3-hover-opacity"></i>
    <a href="https://accounts.snapchat.com/"><i class="fa fa-snapchat w3-hover-opacity"></i>
    <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
  <p>Powered by <a href="Landingpage.html" target="_blank" class="w3-hover-text-green">Travelgo</a></p>
</footer>
<!-- Akhir Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>