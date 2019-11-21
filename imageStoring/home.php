<?php

            $con=mysqli_connect("localhost","root","","imageStoring")or die('error connecting database');
            // Fetch images
            $fetch_images = mysqli_query($con,"SELECT * FROM image");

             while($row = mysqli_fetch_assoc($fetch_images)){
              
               $imagepath = $row['imagePath'];
               
               echo '<img  style="height:300px; width: 500px;""  src="'.$imagepath.'" >';
}

?>
