<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
echo "
$green = "\033[0;32m";
$red = "\033[0;31m";
$blue = "\033[0;34m";
$white = "\033[1;37m";

system("clear");
echo $blue."
________________________
|                        |
|Career Resume FileUpload|
|________________________|
|TahPetis KediriBlackHat |
|   tahup62@gmail.com    |      
 _________________________ \n\n";
$pat = array("/document/","/documents/","/pdf/","/pdfs/","/cv/","/cvs/",
"/CV/","/CVS/","/resume/","/resumes/",
"/upload/","/uploads/","/uploaded/","/uploadify/","/docx/","/docxs/",
"/dokumen/","/career/","/simpandokumen/","/UPLOAD/","/UPLOADS/","/UPLOADED/",
"/data/","/data_file/","/data_upload/");
echo "Tergantung Face:v : ";
$wb = trim(fgets(STDIN));
foreach($pat as $path) {
$c3k = get_headers($wb.$path);
if (preg_match("/200/", $c3k[0])) {
echo "[Gamteng] muka lo > $wb/$path \nSudah Selesai Tuan \n";
exit;
} elseif (preg_match("/403/", $c3k[0])) {
echo "[403] On > $wb/$path \nSudah Selesai Tuan \n";
exit;
} else {
echo "[Burik] Muka lo > $wb/$path \n";
}
}
echo "Sudah Selesai Tuan\n";
?>

