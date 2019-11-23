<?php
  
  ob_start();
  session_start();

  $koneksi = new mysqli ("localhost","root","","db_bootcamp");


?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
<style>
body{
  background-color: #323232;
}
#header
{
    background  : gray;
    height      : 10%;
    font-size   : 1.5em;
    text-align  : center;
    padding-top : 20px;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width : 70%;
    margin:auto;
    margin-top:60px
}
td {
    font-family: arial, sans-serif;
    border: 1px solid #dddddd;
    text-align: center;
    padding: 20px;
}
th {
    font-family: arial, sans-serif;
    border: 1px solid #dddddd;
    background-color: whitesmoke;
    text-align: center;
    padding: 18px;
}
tr {
    background-color: white;
}
.i{ 
    color:green;
}
.a{
    color:red;
}
</style>
       <div id="header">
                  <img src="img/logo_arkademy.png" class="media-object" style="width:120px">
                <div class="media-body">
                  <h4 class="media-heading">
                    <strong> ARKADEMY BOOTCAMP </strong>
                  <button type="button" class="btn btn-info pull-right mt-0" data-toggle="modal" data-target="#myModal">ADD</button>
                </h4>
                </div>
        </div>

<table>
  <tr>
    <th>Cashier</th>
    <th>Product</th>
    <th>Category</th>
    <th>Price</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>Pevita  Pearce</td>
    <td>Latte</td>
    <td>Drink</td>
    <td>10.000</td>
    <td>
      <i class="i">Edit</i>
      <i></i>
      <i class="a">Delete</i>
    </td>
  </tr>
  <tr>
    <td>Raisa  Andriana</td>
    <td>Cake</td>
    <td>Food</td>
    <td>20.000</td>
     <td>
      <i class="i">Edit</i>
      <i></i>
      <i class="a">Delete</i>
    </td>
  <tr>
    <td>Imam Febi Satrio</td>
    <td>Brownies</td>
    <td>Food</td>
    <td>50.000</td>
    <td>
      <i class="i">Edit</i>
      <i></i>
      <i class="a">Delete</i>
    </td>
 
</table>
            <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
            <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h4 class="modal-title">ADD DATA</h4>
                    </div>
                    <div class="modal-body">
                            <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="name"></label>
                                        <div class="col-sm-10">
                                            <input type="Name" class="form-control" id="name" placeholder="Name" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                    <label class="control-label col-sm-2" for="Category"></label>
                                    <div class="col-sm-10">          
                                    <select type="select" class="form-control" id="work" placeholder="Category" name="work">
                                            <option value="" selected disabled>Category</option>
                                            <option value="0">ice tea</option>
                                            <option value="1">lemon tea</option>
                                            <option value="2">Ice Chocolate</option>
                                    </select>    
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-sm-2" for="Select"></label>
                                    <div class="col-sm-10">          
                                    <select type="select" class="form-control" id="salary" placeholder="salary" name="salary">
                                            <option value="" selected disabled>Select</option>
                                            <option value="0">Drink</option>
                                            <option value="1">Food</option>
                                    </select>    
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-sm-2" for="Salary"></label>
                                    <div class="col-sm-10">
                                      <input type="Name" class="form-control" id="name" placeholder="Salary" name="salary">
                                    </div>    
                                    </div>




                            </form>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-warning" data-dismiss="modal">ADD</button>
                        </div>
                    </div>
            </div>
    </div> 
</body>
</html>