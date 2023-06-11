<!DOCTYPE html>
<html>
   <head>
      <title>Employee Data Entry</title>
      <link rel="stylesheet" type="text/css" href="css/form.css">
      
   </head>
   <body>
      <form action="process.php" method="post" enctype="multipart/form-data">
         <label for="name">Name:</label>
         <input type="text" name="name" id="name" required>
     
         <label for="id">ID:</label>
         <input type="text" name="id" id="id" required>
     
         <label for="department">Department:</label>
         <input type="text" name="department" id="department" required>
     
         <label for="photo">Choose your text folder:</label>
         <input type="file" name="photo" id="photo">

         <br> <br>
     
         <label for="resume">Choose your photoe:</label>
         <input type="file" name="resume" id="resume">
         <br><br>
         <button type="submit">Submit</button>
     </form>
     <br>

     <form method="POST">
         <div class = "col-md-6 well">
		      <h3 class = "text-primary">Load XML Data</h3>
		      <hr style = "border-top:1px dotted #000;" />
		      <form method="POST">
			   <button name="load" class="btn btn-primary"><span class="glyphicon glyphicon-book"></span> Load XML</button>
		      <br /><br />
		      <?php include 'loadxml.php'?>
         </div>
      </form>
               <br> <br>
   </script>
   </body>
</html>
