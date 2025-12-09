<?php
echo"
<!doctype html>
<html>
    <title>Forms</title>
    <body>
        <h2>This is a form</h2>
        <form>
            <label>Name</label>
            <input type='text' id='username' name='username'/><br><br>
            <label>Roll No</label>
            <input type='text' id='RollNO' name='Roll NO'/><br><br>
                  <label>Department</label>
            <input type='text' id='dept' name='Department'/><br><br>
            <input type='submit' id='Submit' value='submit' onclick='displayname()'/>
           
        </form>
     
    </body>
       <script>
            function displayname(){
                   let inputname=document.getElementById('username').value;
                   let inputrollno=document.getElementById('RollNO').value;
                   let inputdept=document.getElementById('dept').value;
                   document.write(inputname,'<br>');
                   document.write(inputrollno,'<br>');
                   document.write(inputdept,'<br>');
            }
         
        </script>
    </html>";

    ?>

