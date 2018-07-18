<?php
include 'database.php';

$stmt = $db->prepare('UPDATE my_contacts SET first_name = :first_name, last_name = :last_name, title = :title, mobile = :mobile, address = :address WHERE id = :id');

$stmt->execute(array(
  ':id' => $_POST['id'],
  ':first_name' => $_POST['first'],
  ':last_name' => $_POST['last'],
  ':title' => $_POST['title'],
  ':mobile' => $_POST['mobile'],
  ':address' => $_POST['address']
));

header('Location: https://tpslocal.ticketpros.co.za/portal/contacts/index.php?updated=true');
