<?php
  /**
   * Active security features:
   * 1.Limit the number of file can be uploaded (Not active)
   * 2.Limit the size of the file.
   * 3.Protection against file name injection attack.
   * 4.Move to separate upload directory.
   * 5.Purge the exif data.
   */

  use classes\FileUplaod;

  //Check if the file is uploaded and the submit button is clicked
  if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
    //Limit upload file size
    if (filesize($_FILES['file']['tmp_name']) > 4000) {
      header("location:index.html.php");
      exit();
    }

    //include the PHP file for FIleUpload class
    include "classes\\Fileupload.php";
    //Instantiate the FileUpload class

    $file_uplaod = new FileUplaod($_FILES['file'],TRUE);
    //Restrict MIME type
    $alowed_mime = ["text/plain","image/jpeg","image/png"];
    if (!in_array($file_uplaod->chkMime(),$alowed_mime)){
      header("location:index.html.php");
      exit();
    }
    //Move file to specified directory
    $tar_dir = "C:\\Users\\dprah\\Desktop\\target";
    $upload_status=$file_uplaod->moveFile($tar_dir);
    if ($upload_status){
      echo "Uplaod OK";
    } else{
      header("location:index.html.php");
      exit();
    }
  } else {
    //Go back to the index page
    header("location:index.html.php");
  }