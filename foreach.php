<?php

// perulangan menggunakan for each

// echo "menampilkan array menggunakan (fore-each)";
// echo "<br \>";
// echo "<br \>"; 

$artikel = array (
    (object) array (
        "image" => "1.jpeg",
        "judul" => "ASPROKSI anniversary",
        "text"  => "On August 14, 2021, the Deputy Chairperson of the Indonesian Chamber of Commerce for Trade, Dian Prasetio together with Asproksi (Association of International Standard Indonesian Medical Device Products), chaired by Dr. Melani Arnaldo, M.Psi., Psi., and Secretary General Dr. Fazhra Fawwaz Al Firman, dr., S.H., M.M., join hands to increase the production of Indonesian medical devices (alkes) with international standards.

        In Asproksi’s first anniversary event, as well as the inauguration of Asproksi members in Lombok, Dian Prasetio, as the Deputy General Chair of the Indonesian Chamber of Commerce for Trade, was determined to support funding for any increase in the production of medical devices produced and distributed by Asproksi members throughout Indonesia.
        
        The plan for cooperation between the Indonesian Chamber of Commerce and Industry and Asproxi was highly appreciated by the Chairman and Secretary General of Asproxi. Chairman, Dr. Melanie and the Secretary General, Dr. Fazhra Asproksi really appreciates the support from the Indonesian Chamber of Commerce and Industry."
        
    ),

    (object) array (
        "image" => "2.png",
        "judul" => "Singapore Airlines Cargo",
        "text"  => "Singapore Airlines Cargo (disingkat SIA Cargo) yaitu maskapai penerbangan kargo yang berbasis di Singapura. Maskapai penerbangan ini adalah anak perusahaan dari Singapore Airlines dan didirikan pada tahun 2001. SIA Cargo mengoperasikan 13 pesawat kargo dan mengendalikan semua pesawat Singapore Airlines. Kantor utama dari maskapai penerbangan ini berada di lantai lima SATS Airfreight Terminal 5."
        
    ),

    (object) array (
        "image" => "bg.jpg",
        "judul" => "KIP Medika Collaborate",
        "text"  => "Asproksi East Java and Asproksi Jakarta are ready to work closely together in the procurement and distribution of latex and nitrile (the raw material for making handscoon gloves).

        The package of cooperation is in the MoU between Khairul Akbar, Director of PT Prisma Intra Persada who is the Head of Jakarta Asproxy and Director Pramudiono, Chair of East Java Asproxi as well as KIP Medika International, in Surabaya, Thursday (5/8).
        
        This collaboration is believed to be able to fulfill very significant latex and nitrile needs, including needs outside Indonesia."
        
    ),

    (object) array (
        "image" => "3.jpeg",
        "judul" => "Ayam Petelur",
        "text"  => "Ayam petelur adalah ayam-ayam betina dewasa yang dipelihara khusus untuk diambil telurnya. Asal mula ayam unggas adalah berasal dari ayam hutan dan itik liar yang ditangkap dan dipelihara serta dapat bertelur cukup banyak. Tahun demi tahun ayam hutan dari wilayah dunia diseleksi secara ketat oleh para pakar."
        
    ),

    (object) array (
        "image" => "4.png",
        "judul" => "Sistem ERP",
        "text"  => "Pengertian Enterprise Resource Planning (ERP) adalah sistem perangkat lunak modular yang dirancang untuk mengintegrasikan area fungsional utama dari proses bisnis perusahaan ke dalam satu sistem yang terpadu.
        ERP men-standardisasi, menyederhanakan, dan mengintegrasikan proses bisnis seperti keuangan, sumber daya manusia, pengadaan, distribusi, dan departemen lainnya."
        
    ),

    (object) array (
        "image" => "5.jpg",
        "judul" => "Oxy Concentrator",
        "text"  => "Oxy Concentrator adalah oksigen yang berasal dari produk yang dihasilkan oleh mekanisme oxygen concentrator. Oxygen concentrator adalah alat yang bisa mengubah kondisi kandungan oksigen dari udara bebas yang hanya 21 persen menjadi konsentrasi lebih tinggi bisa sampai 90-95 persen."
        
    ),

    


);

// // foreach ($artikel as $data) {

//     // echo $data -> text . "<br \>";
//     // echo $data -> judul . "<br \>";
// }


// foreach carousel

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="style.css">

    <!-- Java scrip dsini -->
    <script>https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js
    </script>

        <script>
            const menuToggle = document.querySelector ('.menu-toggle input');
const nav = document.querySelector ('nav ul');


menuToggle.addEventListener ('click', function() {

    nav.classList.toggle('slide')
});

        </script>
                <title>Beranda</title>

    </head>

    <body>

        
        <!-- <div class="container"> -->
        <nav>
            
            <div class="logo">
                <h3>KIP Medika Internasional</h3>
                <!-- <img src="kip.png" /> -->
                
            </div>
            
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Product</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Galery</a></li>
            </ul>


            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>

            </div>
            
        </nav>


        <div class="content">



                            <div class="sidebar">

                                <ul>
                                    <li><a href="">News</a></li>
                                    <li><a href="">Top Info</a></li>
                                    <li><a href="">Company Profile</a></li>
                                    
                                </ul>


                            </div>



                            
                            <div class="main">


                            <?php foreach ($artikel as $data) {?>
            
                                <div class="image-box">
                                
                                    <img src=<?php  echo $data -> image ?> alt="">
                                
                                </div>
            
                                <div class="teks-box">
                                    <h2><?php  echo $data -> judul ?></h2>
                                    <p><?php  echo $data -> text ?></p>
                                    <a href="">Read More</a>
                                </div>

                            <?php }?>
                            </div>







        </div>


        
        <!-- TEST carousel  -->

        <div class = "container-fluid carousel-contain py-5">


                <?php foreach ($sleding as $data) {?>


            <div class="container">

                    

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">


                    

                    <div class="carousel-inner">

                    

                        <div class="carousel-item active">

                            <img class="d-block w-100" src= <?php  echo $data -> image ?> alt="First slide">

                        </div>

                    </div>

                    <?php }?>

                </div>


            </div>

        </div>

            
        


        <div class="footer">
                <h1><p>Contact Us</p></h1>
                <p>Phone : 031-7658474</p>
                <p>Komplex Pergudangan - Tritan point</p>
                <p>Gedangan - Sidoarjo</p>
                <p>e-mail : info@kipmedika.com</p>
                <p></p>
                <p align="right">Copyright By : KIP Medika Internasional</p>
                <p align="right">---------------------------------------</p>
        </div>

        



        
        
        <!-- <?php foreach ($artikel as $data) {?>

            <img src= <?php  echo $data -> image ?>>
            <h1><?php  echo $data -> judul ?></h1>
            <p><?php  echo $data -> text ?></p>
            

        <?php }?> -->



        <!-- <?php foreach ($sleding as $data) {?>

            <img src=<?php  echo $data -> image ?> alt="">

        <?php }?> -->




             



        







    </body>

</html>