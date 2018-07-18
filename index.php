<?php
  include 'header.php';

  $contacts = $db->query('SELECT * FROM my_contacts') //->fetchALL(PDO::FETCH_ASSOC);
?>

<div class="container panel panel-default">
  <div class="row panel-heading">
      <h1 class="panel-title">Katlego's Contacts</h1>
  </div>

<?php foreach ($contacts as $contact) :?>
        <a href="/portal/contacts/edit.php?id=<?=$contact['id'];?>">
        <div class="row box" id="view">
          <div class="col-xs-6 col-sm-6 left-detail">
              <span class="name"><strong>First Name:</strong> <?= $contact['first_name']; ?> <br/><strong>Last Name</strong> <?= $contact['last_name']; ?></span><br>
              <span class="title"><strong>Job Title: </strong><?= $contact['title']; ?></span><br>
          </div>
          <div class="col-xs-6 col-sm-6 right-detail">
              <p><strong>Cell Phone: </strong> <?= $contact['mobile']; ?><br></p>
              <p><strong>Physical Address:</strong> &nbsp;<?= $contact['address']; ?></p>
          </div>
        </div>
      </a>

<?php endforeach; ?>

</div>

<div id="container-floating">

  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="location.href='new.php';">
    <p class="create-btn">+</p>
    <img class="edit" src="http://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
  </div>

</div>
