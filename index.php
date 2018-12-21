<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

<div class="w3-responsive w3-card">
<form action="process.php" method="POST" name="myform" id="my_form">
<table class="w3-table w3-bordered w3-small">
<thead>
    <tr>
      <th>#</th>
      <th>Item Code</th>
      <th>Item Description</th>
      <th>Unit</th>
      <th>Qty</th>
      <th>Unit Price</th>
      <th>Total Price</th>
      <th>Remarks</th>
    </tr></thead>
    <tbody>
    <tr>
      <td>1</td>
     <td><input type="text" id="item_code" name="item_code" class="w3-input w3-border" ></td>
     <td><input type="text" id="itemdesc" name="itemdesc" class="w3-input w3-border" ></td>
     <td><input type="text" id="unit" name="unit" class="w3-input w3-border" ></td>
     <td><input type="text" id="qty" name="qty" class="w3-input w3-border" ></td>
     <td><input type="text" id="unt_prc" name="unt_prc" class="w3-input w3-border" ></td>
     <td><input type="text" id="ttl_prc" name ="ttl_prc" class="w3-input w3-border" ></td>
     <td><input type="text" id="remarks" name="remarks" class="w3-input w3-border" ></td>

    </tr>
    </tbody>
  </table>
</form>
<div id="result"></div>
</div>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
 <script>

  
$(document).ready(function () {
   $("#item_code").keyup(function (e) {
    var item_code = $(this).val();
    var url = $("#my_form").attr("action");
    var method = $("#my_form").attr("method");
    var data = $("#my_form").serialize();
    e.preventDefault();
    $.ajax({
      url:url,
      type:method,
      data:data,
      success:function(response){
$("#result").html(response);
      }

    });

  });

    });


    function sendvalue(value) {
    $("#item_code").val(value);
    $("#result li").hide();
  }
 </script>
</body>
</html>