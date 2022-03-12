<h1>User Otp</h1>
<h3>Add Phone Number</h3>
<form action="user" method="POST">
    @csrf
    <input type="text" name="mobile" placeholder="enter mobile number"><br><br>
    {{-- <input type="code" name="code" placeholder="enter code"><br><br> --}}
    <button type="submit">send OTP</button>
</form>

    <h3>Add verification code</h3>
    <form action="" method="POST">
        <input type="text"  id="verification" placeholder="Verification code">
        <button type="button" >Verify code</button>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).on('click','#Confirm2',function(e){
e.preventDefault();
$("#ConfirmNo02input").show();
$("#Confirm2").hide();
$.ajax({
    url: 'OTP_send', // URL for the function
    method:"POST",
    data:{
        phone:$("#Confirm2").val()
    },
    success:function(result){
        if(result.status == 'success'){
            alert('ran');
        }
        else{
            alert('failure');
        }
    }
});
});
<?php
   session_start();
   if(isset($_SESSION['message'])&& $_SESSION['message'] != '')

   {
       ?>
       <hr class="text-light-border-light">
       <?php
       echo $_SESSION['message'];
       unset($_SESSION['message']);
   }


?>