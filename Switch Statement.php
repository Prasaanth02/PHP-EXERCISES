<?php
echo'
<html>
    <head>
        <title>
            Switch statement
        </title>
    </head>
    <body>
        <h2>Switch Statement in javascript</h2>
        <script>
            let day=5;
            switch(day){
                case 1:
                    document.write("sunday");
                    break;
                    case 2:
                    document.write("Monday");
                    break;
                    case 3:
                    document.write("Tuesday");
                    break;
                    case 4:
                    document.write("Wednesday");
                    break;
                    case 5:
                    document.write("Thursday");
                    break;
                    case 6:
                    document.write("Friday");
                    break;
                    case 7:
                    document.write("Saturday");
                    break;
                default:
                    document.write("Invalid");
            }
        </script>
        </body>
</html>';
?>