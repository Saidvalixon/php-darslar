
<?php  
use PHPMailer\PHPMailer\PHPMailer; 

if(isset($_POST["name"]) && isset($_POST["email"])){
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "fara5645290@gmail.com";
    $mail->Password = '998935645290';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("fara5645290@gmail.com");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>


<div class="container">
      <form method="post" id="form">
        <div class="mb-3 w-50 m-auto ">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
      </div>  
      <div class="mb-3 w-50 m-auto">
        <label for="exampleFormControlInput1" class="form-label">your name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name@example.com">
      </div>
      <div class="mb-3 w-50 m-auto">
        <label for="exampleFormControlInput1" class="form-label">subject</label>
        <input type="text" class="form-control" name="subject" id="subject" placeholder="name@example.com">
       </div>
      <div class="mb-3 w-50 m-auto">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" name="body" id="body" rows="3"></textarea>
      </div>
      <div class="w-50 m-auto">
      <button type="submit" class="btn btn-primary" name="submit">Primary</button>
      </div>
        </form>