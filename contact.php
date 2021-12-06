<?php

    if(isset($_POST['send'])){
        $userName = $_POST['userContactName'];
        $userEmail = $_POST['userContactEmail'];
        $subject = $_POST['subject'];
        $userMessage = $_POST['userMessage'];

        $adminEmail = 'ddtharangasri@gmail.com';
        $mailHeaders = "From:" . $userName . "<" . $userEmail . ">\r\n";

        try{
            if(mail($adminEmail, $subject, $userMessage, $mailHeaders)){
                $message = "Your message is recived successfully!";
            }else{
                $message = "You message not recived, please contact +98855222";
            }
        }catch(Exception $ex){
            $message = "Somthing went wrong please try again later or contact +98855222";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
        <form class="text-center border border-light p-5" method="POST">
            <p class="h4 mb-4">Contact Us</p>

            <?php if(isset($message)){?>
            <div class="alert alert-primary" role="alert">
                <?php echo $message; ?>
            </div>
            <?php } ?>
            
            <input type="text" name="userContactName" required class="form-control mb-4" placeholder="Name">

            <input type="email" name="userContactEmail" required class="form-control mb-4" placeholder="Email">

            <label>Subject</label>
            <select class="browser-default custom-select mb-4" name="subject">
                <option value="" disabled>Choose Option</option>
                <option value="feedback">Feedback</option>
                <option value="bug">Report a bug</option>
                <option value="feature">Featrue request</option>
            </select>

            <div class="form-group">
                <textarea name="userMessage" class="form-control rounded-0" required rows="3" placeholder="Message"></textarea>
            </div>

            <button class="btn btn-info btn-block" type="submit" name="send">Send Message</button>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>