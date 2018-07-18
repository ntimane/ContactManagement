<?php
  include 'database.php';
  $stmt = $db->prepare('DELETE from my_contacts WHERE id = :id');
  $stmt->execute(array(
    ':id' => $_GET['id']
  ));
  header('Location: https://tplocal.ticketpros.co.za/portal/contacts/index.php?deleted=true');
 ?>
