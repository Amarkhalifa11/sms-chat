
<form action="{{ route('send') }}" method="get" style="margin-left: 500px;margin-top: 250px">
    <h1>send sms message</h1>
    <div class="form-group">
      <label for="number">number:</label>
      <input type="number" name="number" class="form-control" id="number">
    </div>
    <div class="form-group form-control" >
      <label for="text">message:</label>
      <input type="text" name="message" class="form-control" id="text">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>



  <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/65c22ce88d261e1b5f5cef22/1hlv7urif';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->