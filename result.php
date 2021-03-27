UID: 
<?php
$data = json_decode($_GET['data'], true);
echo $data['_id'];