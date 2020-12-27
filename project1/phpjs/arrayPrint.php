<!--11-->
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>php</h1>
    <ul>
    <?php
        $list = array("최진혁", "최유빈", "한이랑");
        $i = 0;
        while($i < count($list)){
            echo "<li>".$list[$i]."</li>";
            $i = $i + 1;
        }
    ?>
    </ul>

    <h1>JavaScript</h1>
    <ul>
    <script>
        list = new Array("최진혁", "최유빈", "한이랑");
        i = 0;
        while(i < list.length){
            document.write("<li>"+list[i]+"</li>");
            i = i + 1;
        }
    </script>
    </ul>
</body>
</html>