<?php  
 if(isset($_POST["id"],$_POST["tname"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "yqprj");  
      $query = "SELECT services FROM $_POST["tname"]";  
      $result = mysqli_query($con, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Restaurants</label></td>  
                     <td width="70%">'.$row["services"].'</td>  
                </tr>    
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>