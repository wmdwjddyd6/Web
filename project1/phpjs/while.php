<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>php</h1>
    <ul>
    <?php
        $i = 0;
        while($i < 10){
            echo "<li>hello world</li>";
            $i = $i + 1;
        }
    ?>
    </ul>

    <h1>JavaScript</h1>
    <ul>
    <script>
        i=0;
        while(i < 10){
            document.write("<li>hello world</li>");
            i = i + 1;
        }
    </script>
    </ul>

</body>
</html>