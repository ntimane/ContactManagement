<?php
  include 'database.php';

  $stmt = $db->prepare("INSERT INTO my_contacts
    (id, first_name, last_name, title, mobile, physical_address)
    VALUES
    (:id, :first_name, :last_name, :title, :mobile, :address)
  ");

$stmt->execute(array(
    ':id' => $_POST['id'],
    ':first_name' => $_POST['first'],
    ':last_name' => $_POST['last'],
    ':title' => $_POST['title'],
    ':mobile' => $_POST['mobile'],
    ':address' => $_POST['address']
));

  $id = $db->lastInsertId();

  header('Location: https://tplocal.ticketpros.co.za/portal/contacts/index.php?id=' . $id . '&created=true');
?>
