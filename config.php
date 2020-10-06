<?php
require 'function.php';
$easy = new EasyShort;

if(isset($_POST['submit'])){
  $data = array(
    "site_key" => $_POST["sitekey"],
    "secret_key" => $_POST["secretkey"],
    "link" => $_POST["link"]
  );
  $easy->write_ini_file($data, 'config.ini');
  echo "<script>alert('saved');</script>";
  echo "<meta http-equiv='refresh' content='0; url=/config.php'/>";
}

if(isset($_POST['delete'])){
  @unlink('config.ini');
  echo "<script>alert('deleted');</script>";
  echo "<meta http-equiv='refresh' content='0; url=/config.php'/>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>EasyConfig</title>
    <link rel="stylesheet" href="vendor/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">EasyCaptcha Config</h1>
        <hr />

        <div class="row">
            <div class="col-6 mx-auto">
                <form method="post">
                    <div class="form-group">
                        <label for="sitekey">Site Key</label>
                        <input type="text" class="form-control" id="sitekey" name="sitekey" placeholder="6Lf57eYUAAAAAFd6h0Dked3xxxxxx" value="<?php echo ($easy->configini('site_key') != NULL ? $easy->configini('site_key') : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label for="secretkey">Secret Key</label>
                        <input type="text" class="form-control" id="secretkey" name="secretkey" placeholder="6Lf57eYUAAAAAIopQMrNQJe2xxxxxx" value="<?php echo ($easy->configini('secret_key') != NULL ? $easy->configini('secret_key') : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="link" name="link" placeholder="https://google.com/" value="<?php echo ($easy->configini('link') != NULL ? $easy->configini('link') : ''); ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="vendor/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.validate.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap.min.js"></script>
</body>

</html>
