<?php require '../includes/header.php';
$code = uniqid();
$reveal = false;
if(isset($_POST['code'])){
  $_SESSION['code'] = $code;
  $reveal = true;
}
?>
<h1> Verification Code</h1>
<div class="col-sm-6 col-sm-offset-3">
<form class="" action="verify.php" method="post">
  <div class="form-group">
    <label for="number">Show Your verification code</label>
    <input type="tel" name="phone" class="form-control" id="phone" value="<?php echo ($reveal ? $code : '')?>">
  </div>
  <input type="submit" name="code" value="Show code" class="btn btn-primary btn-block">
</form>
</div>
 <?php require '../includes/footer.php'; ?>
