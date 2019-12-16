<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <meta charset="utf-8">

  <link rel=stylesheet type=text/css href=../bootstrap/css/bootstrap.min.css>
  <link rel=stylesheet type=text/css href=../bootstrap/css/bootstrap.css>
<style>
img.j{
 height:10px;
 width:10px;
 }
</style>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</head>
<body>



<div class="container">
<form action="" method="post" enctype="multipart/form-data">
  <div class="well">
    Select image to upload:
    <input onchange="readURL(this);" type="file" name="fileToUpload[]" multiple="multiple" class="bt" id="fileToUpload"></input>
    <input type="submit" style="margin:2px" value="Upload Image" name="submit"></input>
  </div>
    <div class="well">
    <img id="blah" height="200px" width="300px" src="#" alt="your image" />
    </div>
</form>
</div>
<div class=well>
<?php
if(isset($_POST["submit"])){
 $target_dir = "uploads/";

 $uploadOk = 1;
$total=count($_FILES["fileToUpload"]["name"]);
for($i=0;$i<$total;$i++)
{
 $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$i]);
 $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
// Allow certain file formats
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
        echo "<br><li>The file <strong>". basename( $_FILES["fileToUpload"]["name"][$i]). "</strong> has been uploaded.</li>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
}
?>
</div>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
  article, aside, figure, footer, header, hgroup,
  menu, nav, section { display: block; }
</style>
</head>
</html>
