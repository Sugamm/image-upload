# Image Upload
Upload and resize images using PHP, AJAX, JQUERY.

#index.php
  * Files Uploading without using submit button.
  * Input type file is replaced with an image.
  * Call Ajax request to url upload.php

#upload.php
  * Check whether file is image or not.
  * After that Check whether size of image is less than 1MB.
  * Using GD library (library of PHP) we can crop images in this case width is 200 Pixals and according to asspect ratio code will decide the height.
   
   
#Screenshot

1.
![alt tag](https://github.com/Sugamm/image-upload/blob/master/image/s1.png)

2.
![!alt tag](https://github.com/Sugamm/image-upload/blob/master/image/s2.png)


