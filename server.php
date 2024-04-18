<?php 

$json_string = file_get_contents('dischi.json');

$list= json_decode($json_string);

if (isset($_POST['newdiskTitle'])) {
 $new_disk=[

  'title' => $_POST['newDiskTitle'],
  'author' => $_POST['newDiskAuthor'],
  'year' => $_POST['newDiskYear'],
  'poster' => $_POST['newDiskPoster'],
  'genre' => $_POST['newDiskGenre']

 ];
 $list[]= $new_disk;
 file_put_contents('dischi.json', json_encode($list));

}

header('Content-Type: application/json');

echo json_encode($list);

?>