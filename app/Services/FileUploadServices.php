<?php

namespace App\Services;

class FileUploadServices {
  
  public static function fileUpload($imageFile)
  {
    $filenameWithExt = $imageFile->getClientOriginalName();
    
    $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    
    $extension = $imageFile->getClientOriginalExtension();
    
    $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
    
    $fileData = file_get_contents($imageFile->getRealPath());
    
    return [$extension, $fileNameToStore, $fileData];
    
  }
  
}