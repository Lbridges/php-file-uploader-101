<?php

$file = $_FILES['product_upload'];
$name = $file['name'];
$temporary_file = $file['tmp_name'];
$upload_location = "../img/";
$location_with_name = $upload_location.$name;
move_uploaded_file( $temporary_file, $location_with_name );
$str_to_array = explode( '.', $name );
$extension = end( $str_to_array );
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$file_type = finfo_file( $finfo, $temporary_file );
header("Location: ../thank-you.php/?img=$name");
exit;
?>
