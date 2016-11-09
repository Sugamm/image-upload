 <html>  
  <head> 
      <meta charset="utf-8">  
      <meta name="viewport" content="initial-scale=1.0, user-scalable=no"> 
      <title>Upload Image without Page Refresh Tutorial</title> 
      <link rel="stylesheet" type="text/css" href="style.css"> 
      <!-- For Jquery Support -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="js/jquery.form.js"></script>
  </head>  
  <body>  
  <h3>Upload & Resize Image using Ajax Jquery PHP without Page Refresh</h3><br />
   <div class="card"> 
      <div class="container">         
        <form method="post" id="upload_image" enctype="multipart/form-data" action="upload.php">  
          <div class="form-group">  
              <label>
                <h3 style="color:black">Select File</h3>
                   <input type="file" name="image_upload" id="image_upload" /><br>
                   <img src="image/addfile.png" style="cursor:pointer;border:1px solid #ccc; border-radius: 50%;padding:10px;width: 17%;">
              </label>  
          </div>  
        </form> 
      </div>
      <div id="preview" style="width:100%;"></div> 
   </div> 
   <p style="color: #fff;"><?php echo date("Y");?> &copy Sugam Malviya</p> 
  </body>  
 </html>  
 <script>  
 $(document).ready(function(){   
      $('#image_upload').change(function(){  
           $('#preview').html('<img src="image/loading.php" />');  
           $('#upload_image').ajaxForm({  
                target: '#preview'  
           }).submit();  
      });  
 });  
 </script> 