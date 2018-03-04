</div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
  var check = $('#checker').val();
    if(check == 'success'){
      console.log(check);
     $('#hide').removeClass('hidden');
     $('#verif_form').addClass('hidden');
    }
     $('#msg_send').delay(5000).fadeOut(400);
  });
</script>
</body>
</html>
