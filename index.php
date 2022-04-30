<?php
session_start();
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>User Data</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style type="text/css">
      #data{
         display: none;
      }
   </style>
</head>
<body>
    <div class="container">
      <p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                  <h2>Manage <b>Users</b></h2>
               </div>
               <div class="col-sm-6">
                  <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New User</span></a>
                  <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons"></i> <span>Delete</span></a>                  
               </div>
                </div>
            </div>


            

            <!-- Modal -->
            
            <form method="post" id="password_form">
               <label>enter Your password</label>
               <textarea name="password" id="password"></textarea>
               <!-- <input type="text" name="password" id="password"> -->
               <button type="submit" id="data_pass"> submit </button>
            </form>
           

             <table class="table table-striped table-hover" id="data">
                <thead>
                    <tr>
                  <th>
                     <span class="custom-checkbox">
                        <input type="checkbox" id="selectAll">
                        <label for="selectAll"></label>
                     </span>
                  </th>
                  <th>SL NO</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                  <th>PHONE</th>
                        <th>CITY</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
               <tbody>
               
               <?php
                  $private = $_SESSION["password"];
                  $result = mysqli_query($conn,"SELECT * FROM crud");
                  $i=1;
                  while($row = mysqli_fetch_array($result)) {
                      $name=   base64_decode($row['name']);
                      $email = base64_decode($row['email']);
                      $phone = base64_decode($row['phone']);
                      $city = base64_decode($row['city']);
                     openssl_private_decrypt( $name , $name1 , $private);
                     openssl_private_decrypt( $email , $email1 , $private);
                     openssl_private_decrypt( $phone , $phone1 , $private);
                     openssl_private_decrypt( $city , $city1 , $private);
               ?>
               <tr id="<?php echo $row["id"]; ?>">
               <td>
                        <span class="custom-checkbox">
                           <input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
                           <label for="checkbox2"></label>
                        </span>
                     </td>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $name1 ?></td>
                  <td><?php echo $email1; ?></td>
                  <td><?php echo $phone1; ?></td>
                  <td><?php echo $city1; ?></td>
                  <td>
                     <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                        <i class="material-icons update" data-toggle="tooltip" 
                        data-id="<?php echo $row["id"]; ?>"
                        data-name="<?php echo $name1; ?>"
                        data-email="<?php echo $email1; ?>"
                        data-phone="<?php echo $phone1; ?>"
                        data-city="<?php echo $city1; ?>"
                        title data-original-title="Edit"></i>
                     </a>
                     <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
                      title="Delete"></i></a>
                       </td>
               </tr>
               <?php
               $i++;
               }
               ?>
               </tbody>
            </table> 
         
        </div>
    </div>
   <!-- Add Modal HTML -->
   <div id="addEmployeeModal" class="modal fade">
      <div class="modal-dialog">
         <div class="modal-content">
            <form id="user_form">
               <div class="modal-header">                
                  <h4 class="modal-title">Add User</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
               </div>
               <div class="modal-body">               
                  <div class="form-group">
                     <label>NAME</label>
                     <input type="text" id="name" name="name" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label>EMAIL</label>
                     <input type="email" id="email" name="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label>PHONE</label>
                     <input type="phone" id="phone" name="phone" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label>CITY</label>
                     <input type="city" id="city" name="city" class="form-control" required>
                  </div>               
               </div>
               <div class="modal-footer">
                   <input type="hidden" value="1" name="type">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <button type="button" class="btn btn-success" id="btn-add">Add</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Edit Modal HTML -->
   <div id="editEmployeeModal" class="modal fade">
      <div class="modal-dialog">
         <div class="modal-content">
            <form id="update_form">
               <div class="modal-header">                
                  <h4 class="modal-title">Edit User</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
               </div>
               <div class="modal-body">
                  <input type="hidden" id="id_u" name="id" class="form-control" required>             
                  <div class="form-group">
                     <label>Name</label>
                     <input type="text" id="name_u" name="name" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="email" id="email_u" name="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label>PHONE</label>
                     <input type="phone" id="phone_u" name="phone" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label>City</label>
                     <input type="city" id="city_u" name="city" class="form-control" required>
                  </div>               
               </div>
               <div class="modal-footer">
               <input type="hidden" value="2" name="type">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <button type="button" class="btn btn-info" id="update">Update</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Delete Modal HTML -->
   <div id="deleteEmployeeModal" class="modal fade">
      <div class="modal-dialog">
         <div class="modal-content">
            <form>
                  
               <div class="modal-header">                
                  <h4 class="modal-title">Delete User</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
               </div>
               <div class="modal-body">
                  <input type="hidden" id="id_d" name="id" class="form-control">             
                  <p>Are you sure you want to delete these Records?</p>
                  <p class="text-warning"><small>This action cannot be undone.</small></p>
               </div>
               <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <button type="button" class="btn btn-danger" id="delete">Delete</button>
               </div>
            </form>
         </div>
      </div>
   </div>



<script type="text/javascript">





   $(document).on('click', '#btn-add', function(e) {
   var data = $("#user_form").serialize();
   $.ajax({
      data: data,
      type: "post",
      url: "save.php",
      success: function(dataResult) {
         var dataResult = JSON.parse(dataResult);
         if (dataResult.statusCode == 200) {
            $('#addEmployeeModal').modal('hide');
            alert('Data added successfully !');
            location.reload();
         } else if (dataResult.statusCode == 201) {
            alert("Please fill all the fields !");
         }
      }
   });
});
$(document).on('click', '.update', function(e) {
   var id = $(this).attr("data-id");
   var name = $(this).attr("data-name");
   var email = $(this).attr("data-email");
   var phone = $(this).attr("data-phone");
   var city = $(this).attr("data-city");
   $('#id_u').val(id);
   $('#name_u').val(name);
   $('#email_u').val(email);
   $('#phone_u').val(phone);
   $('#city_u').val(city);
});
$(document).on('click', '#update', function(e) {
   var data = $("#update_form").serialize();
   $.ajax({
      data: data,
      type: "post",
      url: "save.php",
      success: function(dataResult) {
         var dataResult = JSON.parse(dataResult);
         if (dataResult.statusCode == 200) {
            $('#editEmployeeModal').modal('hide');
            alert('Data updated successfully !');
            location.reload();
         } else if (dataResult.statusCode == 201) {
            alert("Please fill all the fields !");
         }
      }
   });
});
$(document).on("click", ".delete", function() {
   var id = $(this).attr("data-id");
   $('#id_d').val(id);
});
$(document).on("click", "#delete", function() {
   $.ajax({
      url: "save.php",
      type: "POST",
      cache: false,
      data: {
         type: 3,
         id: $("#id_d").val()
      },
      success: function(dataResult) {
         $('#deleteEmployeeModal').modal('hide');
         $("#" + dataResult).remove();
      }
   });
});
$(document).on("click", "#delete_multiple", function() {
   var user = [];
   $(".user_checkbox:checked").each(function() {
      user.push($(this).data('user-id'));
   });
   if (user.length <= 0) {
      alert("Please select records.");
   } else {
      WRN_PROFILE_DELETE = "Are you sure you want to delete " + (user.length > 1 ? "these" : "this") + " row?";
      var checked = confirm(WRN_PROFILE_DELETE);
      if (checked == true) {
         var selected_values = user.join(",");
         console.log(selected_values);
         $.ajax({
            type: "POST",
            url: "save.php",
            cache: false,
            data: {
               type: 4,
               id: selected_values
            },
            success: function(response) {
               var ids = response.split(",");
               for (var i = 0; i < ids.length; i++) {
                  $("#" + ids[i]).remove();
               }
            }
         });
      }
   }
});
$(document).ready(function() {
   $('[data-toggle="tooltip"]').tooltip();
   var checkbox = $('table tbody input[type="checkbox"]');
   $("#selectAll").click(function() {
      if (this.checked) {
         checkbox.each(function() {
            this.checked = true;
         });
      } else {
         checkbox.each(function() {
            this.checked = false;
         });
      }
   });
   checkbox.click(function() {
      if (!this.checked) {
         $("#selectAll").prop("checked", false);
      }
   });
});


$(document).on('click', '#data_pass', function(e) {
   e.preventDefault();
    var password = $("#password").val();
   $.ajax({
      url: "save.php",
      type: "POST",
      data: {
         type : 5,
         password: password
      },
      success: function(dataResult) {
      console.log(dataResult);
      var dataResult = JSON.parse(dataResult);
      if (dataResult.statusCode == 200) {
         $('#password_form').css('display','none');
         alert('Login successfully !');
         $('#data').css('display','block');
      } else if (dataResult.statusCode == 201) {
         alert("Please fill all the fields !");
      }
      }
   });
});

</script>
</body>
</html>