<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI - CRUD Application - View users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5 border" style="background-color:rgb(253, 244, 245) " >
<!-- As a heading -->
<nav class="navbar navbar-dark mt-2 " style="background-color:rgb(6, 141, 169) ">
  <span class="navbar-brand mb-0 h1 text-center">CRUD APPLICATION</span>
</nav>
<div class="row">
    <div class="col-10 mt-3"><h3 class = "text-center">VIEW USERS</h3></div>
    <div class="col-2 mb-1" ><a href="<?php echo base_url().'index.php/user/create'?>" class = "btn btn-primary mt-3 mb-0">ADD USER</a></div>
</div>
<div class="row">
  <div class="col-md-12">
  <?php
$success = $this->session->flashdata('success');
if (!empty($success)) {
    echo '<div class="alert alert-success">' . $success . '</div>';
}
?>

<?php
$failure = $this->session->flashdata('failure');
if (!empty($failure)) {
?>
<div class="alert alert-danger"><?= $failure ?></div>
<?php
}
?>

  </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(!empty($users)){foreach($users as $users) {?>
        <tr>
      <!-- <th scope="row">1</th> -->
      <td><?php echo $users['id']?></td>
      <td><?php echo $users['fullname']?></td>
      <td><?php echo $users['email']?></td>
      <td>
        <a href="<?php echo base_url().'index.php/user/edit/'.$users['id']?>" class ="btn btn-success">EDIT</a>
      </td>
      <td>
        <a href="<?php echo base_url().'index.php/user/delete/'.$users['id']?>" class ="btn btn-danger">DELETE</a>
      </td>
    </tr> 
    <?php }} else { ?>
        <tr>
            <td>RECORD NOT FOUND</td>
        </tr> 
        <?php }  ?>
    
  </tbody>
</table>
    </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>