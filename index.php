<!DOCTYPE HTML>  
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="UTF-8">
    <title>Intern-Details</title>
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
	input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    </style>
</head>
<body> 
 <div class="wrapper">
        
                    <div class="page-header w3-container w3-purple"> 
                        <h2>Moolya Interns details</h2> 
                    </div> 
<form method="post" action="validationpage.php"> 
<div class="form-group">
 <label for="name"> Name: </label>
<input type="text" name="name">
</div>
<div class="form-group">
  <label for="email"> E-mail: </label>
<input type="text" name="email">
</div>
<div class="form-group">
 <label for="mobile"> Mobile:</label>
 <input type="text" name="mobile">
</div>
<div class="form-group">
   <label for="website">Website: </label>
<input type="text" name="website">
</div>
<div class="form-group">
   <label for="comment"> Comment: </label>
<textarea name="comment" rows="5" cols="40"></textarea>
</div>
<div class="form-group">
  <label for="gender"> Gender:</label>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  </div>
  <input type="submit" name="submit" value="Submit">  
</form>
 </div>       
  </div>        
        </div>
    </div>
</body>
</html>
