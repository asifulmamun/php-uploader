<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Upload your file - Shamim Enterprise</title>
  </head>
  <body>
  		<div class="container full_content">
  			<div class="row">
  				<div class="col-md-12 col-sm-12">
  					<div class="alert alert-success" role="alert">
              <h4 class="alert-heading">Welcome To File Uploader</h4>
					  	<p style="color:red;">Click to browse button for upload and chose all of your files to upload.</p>
					</div>
  				</div>

  				<div class="col-md-4"></div>
  				<div class="col-md-4 col-sm-12">
          <center>
            <a class="btn btn-success" href="desktop.php">Upload Drag and Drop Click Here</a>
          </center>
  					<!-- main form -->
					<div class="upform">
						<form action="upload.php" method="post" enctype="multipart/form-data">
							<br><br>
              <input class="btn" type="file" name="file[]" multiple="30">
							<br><br>
							<input class="btn btn-lg btn-primary" type="submit" name="submit" value="আপলোড">
						</form>
					</div>
  				</div>
  				<div class="col-md-4"></div>
  			</div>
        <!-- space -->
        <br><br><br><br><br>
  		</div>
  		

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>