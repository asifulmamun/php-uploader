<?php

    // variable declare
     $upload_path = '../img/';
     $up_count_file = count($_FILES['file']['name']);
    
    // condition for access this page or not
    if (empty($_FILES['file']['name'])) {
        header('Location:index.php');
    }

    // processign upload
    if(isset($_FILES['file']['name'][0])){
        foreach($_FILES['file']['name'] as $keys => $values){

            // temp file name variable
            $SourcePath = $_FILES['file']['tmp_name'][$keys];

            // Set Default Time Zone Bangladesh
            date_default_timezone_set('Asia/Dhaka');

            // rename file and upload locator file variable include here
            $TargetPath = $upload_path . date('Y-m-d_H-i-s') . "s" . "-" . date('A') . "-" . str_replace(" ", "-", $values);

            // upload and mover temp to upload main folder
            if(move_uploaded_file($SourcePath, $TargetPath)){ 
                $upload_notice = 1;                
            }
        }
    }
               
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Successfully Uloaded</title>
  </head>
  <body>
<br>
    <!-- logo -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 text-center mycenter">
                <img class="logo text-center" src="https://shamimenterprisedhaka.files.wordpress.com/2018/10/se-logo-final.png">
            </div>
        </div>
    </div>
    <br><br>

    <!-- Success Notice -->
    <div class="alert alert-success" role="alert">
      <p class="text-center">আপনার <b style="color:green;"><?php echo $up_count_file ?>টি</b> ফাইলে আপলোড সম্পন্ন হয়েছে।<br>*** ধন্যবাদ ***<br><small style="color:blue;">আমাদের সাথে যোগাগের জন্য নিচের পদ্ধতিগ্রলো অবলম্বন করতে পারেন...!</small></p>
    </div>
    <br>

    <!-- details -->
    <div class="container">
        <div class="row">
           <div class="col-sm-12 text-center">
                <h3 style="color:green;"><u><i>Designer</i></u></h3>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FasifulmamunPage&tabs=messages&width=240&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="240" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                <br>
                <iframe width="240" height="250" src="https://www.youtube.com/embed/jLG_Wm7B7wc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <br>
               <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fshamimenterprise.se&tabs=messages&width=240&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="240" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
           </div> 
        </div>
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>