     <?php 
     // allow the config
       define('__CONFIG__', true);
       // require the config
       require_once "inc/config.php"; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.11/dist/css/uikit.min.css" />
    </head>
    <body>
   
   
      <div class="uk-section uk-container">
        <?php echo "hello Today is :" ;
           echo date("Y m d");
        ?>

        <p>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </p>
        </div>

       <?php require_once"inc/footer.php"; ?>
   
   
    </body>
    </html>
