<!DOCTYPE html>
<html>
<head> 
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
  
    
    <div class="container">
      <form method="post" id="form" action="send.php">
        <div class="mb-3 w-50 m-auto ">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
      </div>  
      <div class="mb-3 w-50 m-auto">
        <label for="exampleFormControlInput1" class="form-label">your name</label>
        <input type="text" class="form-control" id="name" placeholder="name@example.com">
      </div>
      <div class="mb-3 w-50 m-auto">
        <label for="exampleFormControlInput1" class="form-label">subject</label>
        <input type="text" class="form-control" id="subject" placeholder="name@example.com">
       </div>
      <div class="mb-3 w-50 m-auto">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="body" rows="3"></textarea>
      </div>
      <div class="w-50 m-auto">
      <button type="submit" class="btn btn-primary" onclick="sendEmail()">Primary</button>
      </div>
        </form>
  </div>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    function sendEmail(){
      var name = $('#name');
      var email = $('#email');
      var subject = $('#subject');
      var body = $('#body');


      if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(body)){
              $.ajax({ 
                url: 'send.php',
                method: 'Post',
                dataType: 'json',
                data: {
                  name: name.val(),
                  email: email.val(),
                  subject: subject.val(),
                  body: body.val()
           
          }, success: function(response){
                $('#form').reset();
                $('.sent-notification').text('Message sent succesfully');
              }
        });
      }

    }
     function isNotEmpty(caller){
      if (caller.val() == '') {
        caller.css('border','1px', 'solid red');
        return false;
      } else {
        caller.css('border','');
        return true;
      }
    }

  </script>
</body>
</html>