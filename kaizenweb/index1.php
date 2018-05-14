
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>
        
    </head>
    <body>
        <div class="container">
             <?php session_start(); ?>
             
            <?php if (isset($_SESSION['success'])): ?>
                <div class="message animated bounceIn" style="width: 600px;margin: 100px auto;display: block;background: #00aae6;padding: 20px;">
                    <h3 style="color: #fff;">Thank you for contacting us.</h3>
                    <p style="color: #fff;">You are very important to us, all information received will always remain confidential. We will contact you as soon as we review your message.</p>

                    
                </div><br><br>

                <style>
                    #contact-form{
                        display: none;
                    }
                </style>
            <?php endif; ?>

            <form role="form" id="contact-form" class="contact-form" action="data1.php" method="post">
                <h3>Contact us</h3>


                <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-warning"><?php echo $_SESSION['error']; ?></div>
                <?php endif; ?>




                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <input type="email" class="form-control" name="contact-email" autocomplete="off" id="contact-email" placeholder="E-mail">
                        </div>
                    </div>
                     <div class="col-md-6">

                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile-no" autocomplete="off" id="mobile-no" placeholder="mobile-no">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" autocomplete="off" id="subject" placeholder="Subject">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="msg" id="msg" placeholder="msg"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn main-btn pull-right">Send a message</button>
                    </div>
                </div>
            </form>
        </div>

    </body>
</html>