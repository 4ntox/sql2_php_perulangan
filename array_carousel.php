<?php

    $sleding = array (

        (object) array (
            "image" => "1.jpeg",
                    
        ),

        (object) array (
            "image" => "2.png",
                    
        ),

        (object) array (
            "image" => "bg.jpg",
                    
        ),

        (object) array (
            "image" => "3.jpeg",
                    
        ),

        (object) array (
            "image" => "4.png",
                    
        ),

        (object) array (
            "image" => "5.jpg",
                    
        ),

    );







?>

<html>

    <head>
        <title> array carousel </title>

     <!-- Java scrip dsini -->
     <script>https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js
    </script>

    <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js”></script>

    </head>


<body>


            <div class="carousel-item">

            <?php foreach ($sleding as $data) {?>

                <img class="d-block w-100" src=<?php  echo $data -> image ?> "/800x400?auto=yes&bg=777&fg=555&text=First slide" alt="">

                <div class="carousel-caption d-none d-md-block">

                    <h5>test</h5>
                    <p>ting</p>

                </div>

            <?php }?>

            </div>












        <!-- <?php foreach ($sleding as $data) {?>




        <img src= <?php  echo $data -> image ?>>
        

        <?php }?> -->














</body>



</html>