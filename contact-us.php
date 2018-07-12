<div style="
  height: 48px;
  object-fit: contain;
  font-family: Lato;
  font-size: 40px;
  font-weight: bold;
  font-style: normal;
  font-stretch: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #231f20;
">
    Invest now - Get in touch with us
</div>
<div class="grid-container">
    <div>
        <p class="inside-header">How it works?</p>
        <ol class="disclamer-content" style=" padding-left: 30%;padding-right:17%">
            <li><p>CloudRest investments are NOT subject to market risks. Please read the FAQ carefully before investing </p></li>
            <li><p>Our pricing includes GST, Insurance, Deployment costs, and AMC.

 </p></li>
        </ol>
    </div>

    <div>
        <p class="inside-header"  id="inside-header-2">Give us your details!</p>
          <div style="padding-left: 27%;" id="form-placeholder">
             <form id="enquiry_form" action="/controller.php?task=sendmail" method="POST">
                <input type="text" class="inputboxes" placeholder="Your Name" name="name" id="name">
                <input type="text" class="inputboxes" placeholder="Phone Number" name="phone" id="phone">
                <input type="text" class="inputboxes" placeholder="Email Address" name="email" id="email">
                <input type="submit" class="inputboxes-sub" value="SUBMIT">
             </form>
          </div>
    </div>
</div>


      <script>
        $('#enquiry_form').submit(function(e) {
          e.preventDefault();
          $.post('/controller.php?task=sendmail', {
            name: $('#name').val(),
            phone: $('#phone').val(),
            email: $('#email').val()
          }, function(res) {
            if(res == 1) {
              $('#enquiry_form').hide();
              $('#form-placeholder').append(`                   <div class="thankyou">
                      Thank you for giving us your details.<br><br> 

                      Give us a few minutes. We’ll call you. <br><br>

                      Yes! We are really fast in our responses<br><br>
                      <br></br>
                      <button type="submit" class="inputboxes-sub" value="" id="makeanotherform" onclick="makeanotherform()">Make Another Enquiry</button>
                      
                  </div>`);
              $('#inside-header-2').html('<img style="width: 37px;margin-left: 45%;margin-top: -10px;padding-bottom: 59px;" src="https://emojipedia-us.s3.amazonaws.com/thumbs/160/apple/129/smiling-face-with-heart-shaped-eyes_1f60d.png">')
              

            }else {
              alert('somthing went wrong');
            }
          })
        })
        
        function makeanotherform() {
              $('.thankyou').remove();
              $('#enquiry_form').show();
              $('.inside-header').html('Give us your details!');
        }
      </script>