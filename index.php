<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание JS</title>
</head>
<body>

    <form action = "#" method = "get">
        <button type = "submit" onclick = Click()>Ок</button>
    </form>

    

    <script>
        function Click()
        {
            var Result = "<?php open();?>";
            document.write(Result);
        }
    </script>
    <?php
    
    function open()
    {
        $fh = fopen('text.txt','r');
        while ($line = fgets($fh)) {
          
          
          
          $Result = preg_match_all('/[\d]{1,3}\.[\d]{1,3}\.[\d]{1,3}\.[\d]{1,3}/', $line, $rows);
          foreach($rows[0] as $row)
          {
            echo $row ;
            echo "<br>";
          }
          
        }
        fclose($fh);
    }
        
    ?>
</body>
</html>