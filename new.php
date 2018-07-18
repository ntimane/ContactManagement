<?php
include 'header.php';

?>

<div class="container-fluid">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6 col-md-10">

  <!-- START OF ADD NEW CONTACT FORM -->
  <div class="container panel panel-default" id="view">
    <div class="row panel-heading">
  <form method="POST" action="/portal/contacts/create.php">

      <h1>Create New Contact</h1>
</div>
    <input type="hidden" name="id" id="id" value="<?= $contact['id']; ?>" />

  <div class="form-group">
    <label for="contact_first">First Name</label>
    <input class="form-control" type="text" name="first" id="first" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label for="contact_last">Last Name</label>
    <input type="text" class="form-control" name="last" id="last" placeholder="Enter Last Name">
  </div>
  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="title" id="title" placeholder="Enter Your Job Title">
  </div>
  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <textarea class="form-control" name="mobile" id="mobile" placeholder="Enter Cell Number"></textarea>
  </div>
  <div class="form-group">
    <label for="contact_address">Physical Address</label>
    <input class="form-control" type="text" name="address" id="address" placeholder="Enter Address">
  </div>
  <button class="btn btn-primary">Create</button>
</form>
</div>
</div>
</div>
</div>

<div id="container-floating">
  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Back" onclick="location.href='index.php';">
<p class="plus">+</p>
    <i class="fa fa-chevron-left back" aria-hidden="true"></i>
  </div>
</div>

<!-- END CREATE NEW CONTACT -->
<?php include 'footer.php' ?>
