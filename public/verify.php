<?php require '../includes/header.php';

use Twilio\Rest\Client;

if (isset($_POST['submit'])) {
  if (isset($_POST['phone']) && isset($_POST['sms'])) {
    $number = $_POST['phone'];
    $message = $_POST['sms'];
    $client = new Clinet($config['account_id'],$config['auth_token']);
    $client->account>messages->create($number,['number' => $config['account_id'],'body' => $message,]);
  }
}
?>
<h1> SMS GATE</h1>
<div class="col-sm-6 col-sm-offset-3">
<form class="" action="verify.php" method="post">
  <div class="form-group">
    <label for="number">Your Phone No</label>
    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter Number">
  </div>
  <div class="form-group">
    <textarea name="sms" rows="8" cols="40" class="form-control" id="sms"></textarea>
  </div>
  <input type="submit" name="submit" value="Send" class="btn btn-primary btn-block">
</form>
</div>
 <?php require '../includes/footer.php'; ?>
