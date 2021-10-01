<?php

    // init
    $dir_installed = '/share'; // if installed root directory put empty other wise put full name 

    // variable declare
    $upload_path = 'files/';
    $up_count_file = count($_FILES['file']['name']);
    
    // condition for access this page or not
    if (empty($_FILES['file']['name'])) {
        header('Location:index.php');
    }

    // processign upload
    if(isset($_FILES['file']['name'][0])){

        // file name store in files.txt
        $handle = fopen("files.txt", "a");
        fwrite($handle, "\r\n");
        fwrite($handle, "\r\n");
        fwrite($handle,   '--------------------@asifulmamun--------------------------');
        fwrite($handle, "\r\n");
        fwrite($handle, 'Time: ' . date('h-i-s') . date('A') . '  |  Date : ' . date('d-m-Y'));

        foreach($_FILES['file']['name'] as $keys => $values){
            // temp file name variable
            $SourcePath = $_FILES['file']['tmp_name'][$keys];

            // Set Default Time Zone Bangladesh
            date_default_timezone_set('Asia/Dhaka');

            // File Name
            $FileName = date('d-m-Y') . "__at__" . date('h-i-s') . "s" . "-" . date('A') . "___" . str_replace(" ", "_", $values);

            // upload and mover temp to upload main folder
            if(move_uploaded_file($SourcePath, $upload_path.$FileName)){ 
                $upload_notice = 1;  
                
                // Upload Link for download or use other necessary
                $direct_link = $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] . $dir_installed . '/' . $upload_path . $FileName;


                // file name store with loop in files.txt            
                fwrite($handle, "\r\n");
                fwrite($handle,   $direct_link);
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

    <!-- Success Notice -->
    <div class="alert alert-success" role="alert">
      <p class="text-center">
          Uploaded files. Thank you.
      </p>
    </div>
    <br>
    
    <center><a class="btn btn-success" href="./">Home</a></center>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>