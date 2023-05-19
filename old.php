<html>
    
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=0.5" />
<link rel="stylesheet" type="text/css" href="style.css" /> 
<link rel="stylesheet" href="background.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<hr> <h3> Theo's drive V1 (Beta) <span style="float : center;"> <span> <button onClick="window.location.reload();" class="button-4" role="button">Refresh</button> </span> </h3> <hr>

</body>


</html>

<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file">   
    <input type="submit" value="Upload">


   
    
    
</form>

<?php
 

$files = scandir("uploads");
 


for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p>

        <?php echo $files[$a]; ?>
 
    
        
        <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
            
        </a>
        <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">
    Delete
</a>
    </p>
    <?php
    
}

