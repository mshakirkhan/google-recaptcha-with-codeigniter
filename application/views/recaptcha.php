<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Google Recaptcha With Codeigniter</h1>
  <p>Replace sitekey in form and secret key from controller with your's</p> 
</div>
  
<div class="container">
  <div class="row">
   <?= form_open('recaptcha/authentication'); ?>
    <center>
        <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
    </center>
    <center>
    <br>
            <input type="submit" value="Submit Form" class="btn btn-success">
    </center>
   <?= form_close(); ?>
  </div>
</div>

</body>
</html>
