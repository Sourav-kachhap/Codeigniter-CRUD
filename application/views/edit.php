<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI - CRUD Application - Update Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5 border" style="background-color:rgb(253, 244, 245) " >
<!-- As a heading -->
<nav class="navbar navbar-dark mt-2 " style="background-color:rgb(6, 141, 169) ">
  <span class="navbar-brand mb-0 h1 text-center">CRUD APPLICATION</span>
</nav>
<form class="mt-3 mb-3" action="<?= base_url().'index.php/user/edit/'.$userdata['id']?>" method = "POST" name = "createuser">
  <h4 class = "text-center">UPDATE USERS</h4>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name = "username" value = "<?=$userdata['fullname'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
    <?= form_error('username')?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" name = "email" value = "<?=$userdata['email'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
    <?= form_error('email')?>
  </div>
  <button class="btn btn-primary">UPDATE</button>
  <a href="<?= base_url()?>index.php/user/index" class="btn btn-secondary"> Cancal</a>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>