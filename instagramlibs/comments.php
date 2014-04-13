<?php
session_start();
include (__DIR__.'/instagram.class.php');
include (__DIR__.'../../dbc.php');
$incoming = json_decode(file_get_contents('php://input'));

foreach($incoming as $key => $value) {
	$data[$key] = filter($value); // post variables are filtered
}
$id = $data['id'];
$status = $data['status'];
$instagram = new Instagram(array(
  'apiKey'      => 'af0092092bd347f2948940ef30261dcc',
  'apiSecret'   => '12b2d103aa884b9c9a4bf377ad4cf279',
  'apiCallback' => 'http://localhost/MashdApp/www/instagramredirect.php' // must point to success.php
));

$response = $instagram->addMediaComment($id, $status);

echo json_encode($response);

?>