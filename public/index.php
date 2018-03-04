<?php require '../includes/header.php';

use Twilio\Rest\Client;

$verifier = false;
if(isset($_POST['verify'])){
  $verif_code = $_POST['code'];
  if($verif_code == $_SESSION['code']){
    $verifier = 'success';
  }
}

if (isset($_POST['submit'])) {
  if (isset($_POST['phone']) && isset($_POST['sms'])) {
    $number = $_POST['phone'];
    $message = $_POST['sms'];
    $client = new Client($config['account_id'],$config['auth_token']);
    $client->account->messages->create($number,['from' => $config['phone_no'],'body' => $message,]);

    echo '
    <h1 class="alert alert-success">Your Message has been send succesfully !</h1>
    ';
  }
}
?>
<h1> SMS GATE</h1>
<div class="col-sm-6 col-sm-offset-3">
<form class="" action="index.php" method="post">
  <div id="verif_form">
    <div class="panel panel-heading">
      <span style="padding:15px;"class="alert alert-danger">You must get verification code first to use sms gate</span>
    </div>
    <div class="form-group">
      <label for="code">Verification Code</label>
      <input type="hidden" value="<?php echo $verifier; ?>" id="checker">
      <input type="text" name="code" class="form-control" placeholder="Enter Code">
    </div>
      <input type="submit" name="verify" value="Verify" id="verif_form" class="btn btn-primary btn-block">
  </div>
  <div id="hide" class="hidden">
    <div class="form-group">
      <label for="number">Your Phone No</label>
      <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter Number">
    </div>
    <div class="form-group">
      <label for="message">Your Message</label>
      <textarea name="sms" rows="8" cols="40" class="form-control" id="sms"></textarea>
    </div>
  <input type="submit" name="submit" value="Send" class="btn btn-primary btn-block">
    </div>
</form>
</div>
<script type="text/javascript">
  $(document).ready(function() {
  var check = $('#checker').val();
    if(check == 'success'){
      console.log(check);
     $('#hide').removeClass('hidden');
     $('#verif_form').addClass('hidden');
    }
  });
</script>
 <?php require '../includes/footer.php'; ?>
