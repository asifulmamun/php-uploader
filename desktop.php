<!DOCTYPE html>
<html lang="en">
<head>
	 <title>File Upload</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 
	<style>
		 .file_drag_div{
		 width: 600px;
		 height: 273px;
		 border: 2px dashed #ccc;
		 line-height: 250px;
		 text-align: center;
		 font-size: 30px;
		 }
		 .file_drag_div_over{
		 color: #000;
		 border-color: #000;
		 }
	</style>
</head>
<body>
 
	<div class="jumbotron text-center">
	 <h1>Drag and Drop and Upload Multiple Files</h1>
	 <p>Using JQuery AJAX in php</p> 
	</div>
 
	<div class="container">
		 <div class="row">
			 <div class="col-md-12">
				 <div class="file_drag_div">
				 	Drop your files here
				 </div>
			 </div>
		 </div>
			 <div class="row">
			 	<div class="col-md-12" id="result_images"></div>
			 </div>
	</div>
 




 	<!-- js -->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	
 	<!-- file uploader Js -->
 	<script type="text/javascript">
		 $(document).ready(function() {
			 $('.file_drag_div').on('dragover',function(){
				 $(this).addClass('file_drag_div_over');
				 return false;
			 });

			 $('.file_drag_div').on('dragleave',function(){
				 $(this).removeClass('file_drag_div_over');
				 return false;
			 });

			 $('.file_drag_div').on('drop',function(e){
				 e.preventDefault();
				 $(this).removeClass('file_drag_div_over');
				 var formdata = new FormData();
				 var multiple_files = e.originalEvent.dataTransfer.files;
				 for(var i=0;i<multiple_files.length; i++){
				 	formdata.append('file[]',multiple_files[i]);
				 }
				 $.ajax({
					 url: 'upload/upload.php',
					 method: 'post',
					 data: formdata,
					 contentType: false,
					 cache: false,
					 processData: false,
					 success:function(result){
						 $('#result_images').html(result);
					 }
				 });
			 });
		 });
 	</script>

</body>
</html>