<?php
require 'function.php';
$easy = new EasyShort;
if(!file_exists('config.ini')){
  @header('location: config.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Captcha by Google</title>
    <link rel="stylesheet" href="/vendor/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/vendor/googlelogo.svg">
</head>

<body class="bg-light">
    <div class="container pt-4">
        <div class="row pt-4">
            <div class="col-4 pt-4 mx-auto">
              <div id="notif" style="display: none !important;">
                <div class="alert alert-danger" role="alert">Oops! Something went wrong. Please try again.</div>
              </div>

                  <h5 class="text-center">Prove if you're not robot</h5>

                  <form method="post" name="form_captcha" id="form_captcha" onsubmit='return false;'>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="<?php echo $easy->configini('site_key'); ?>" ></div>
                    </div>
                    <input type="hidden" id="link" name="link" value="<?php echo $easy->configini('link'); ?>">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                  </form>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="/vendor/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/vendor/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript" src="/vendor/proc.js"></script>
</body>

</html>
