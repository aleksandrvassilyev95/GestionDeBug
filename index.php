<link rel="stylesheet" type="text/css" href="../style.css">
<?php
require('Controllers/bugController.php');
$url = '';
if(isset($_GET['url'])) {
    $url = $_GET['url'];
}
switch(true) {
   case ($url== 'bug/list'):
       return (new bugController())->list();
       break;
   case preg_match('#^bug/show/(\d+)$#', $url, $matches):
       $id = $matches[1];
       return (new bugController())-> show($id);
       break;
   case ($url== 'bug/add'):
       return (new bugController())->add();
       break;
   default:
       http_response_code(404);
       echo 'Eror 404! Page non trouve.';
}

?>