<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <title>Details</title>
<body>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
 <div class="row">
        <div class="col-md-9">Intern Details</div>
        <div class="col-md-3" align="right">
           <button class="btn danger">
            <a href="display.php" >Download</a></button>
<div class="col-md-3" align="left">
  <button class="btn danger">
            <a href="form.php" >Home</a></button>
        </div>
        </div>
	</div>
	</div>
        <div class="panel-body">
            <table class="table table-bordered" id="report">
                <thead>
                    <tr>
                      <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Website</th>
<th>Comment</th>
<th>Gender</th>
                    </tr>
                </thead>
                <tbody>
                <?php
               
                    include 'connection.php';
                    
                 
                    $query = $conn->query("SELECT name,email,mobile,website,comment,gender FROM formdetails");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>                
                    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['mobile']; ?></td>
 <td><?php echo $row['website']; ?></td>
 <td><?php echo $row['comment']; ?></td>
 <td><?php echo $row['gender']; ?></td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="8">No user(s) found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

 </body>
</html>