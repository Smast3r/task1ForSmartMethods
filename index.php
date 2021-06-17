<?php
include 'config.php' ;


// Check connection







?>

<html>
    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script href="Js.js"></script>
    </head>
    <body class="bg-dark text-light">
        <div class="container ">





            <div class="controller">

                <table class="table table-dark ">
                    <tr>
                        <td class="">
                            <label  for="M1" id="M1L">Motor 1 : 0 degree </label>
                        </td>

                        <td align="right" >
                            <input  id="M1" type="range" value="0" min="-90" max="90">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="M2" id="M2L">Motor 2 : 0 degree</label>
                        </td>
                        <td align="right">
                            <input id="M2" type="range" value="0" min="-90" max="90">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="M3" id="M3L">Motor 3 : 0 degree</label>
                        </td>
                        <td align="right">
                            <input id="M3" type="range" value="0" min="-90" max="90">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="M4" id="M4L">Motor 4 : 0 degree</label>
                        </td >
                        <td align="right">
                            <input id="M4" type="range" value="0" min="-90" max="90">
                        </td >
                    </tr>
                    <tr>
                        <td>
                            <label for="M5" id="M5L">Motor 5 : 0 degree</label>
                        </td>
                        <td align="right">
                            <input id="M5" type="range" value="0" min="-90" max="90">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="M6" id="M6L">Motor 6 : 0 degree</label>
                        </td>
                        <td align="right" >
                            <input id="M6" type="range" value="0" min="-90" max="90">
                        </td>
                    </tr>
                </table>

            </div>


            <div>
                <?php
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                echo "            <ul class=\" justify-content-end nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
               
                    <div class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Database Connected</div>
                
            </u>";
                ?>
            </div>




        </div>



    </body>
    <script>
    $M1 = document.getElementById('M1') ;
    $M2 = document.getElementById('M2') ;
    $M3 = document.getElementById('M3') ;
    $M4 = document.getElementById('M4') ;
    $M5 = document.getElementById('M5') ;
    $M6 = document.getElementById('M6') ;






       $M1.addEventListener('change',function (event) {

                $M1L = document.getElementById('M1L') ;

                $M1L.textContent= putin($M1L.textContent,$M1.value) ;
            })

        $M2.addEventListener('change',function (event) {

            $M2L = document.getElementById('M2L') ;

            $M2L.textContent= putin($M2L.textContent,$M2.value) ;
        })

        $M3.addEventListener('change',function (event) {

            $M3L = document.getElementById('M3L') ;

            $M3L.textContent= putin($M3L.textContent,$M3.value) ;
        })

        $M4.addEventListener('change',function (event) {

            $M4L = document.getElementById('M4L') ;

            $M4L.textContent= putin($M4L.textContent,$M4.value) ;
        })

        $M5.addEventListener('change',function (event) {

            $M5L = document.getElementById('M5L') ;

            $M5L.textContent= putin($M5L.textContent,$M5.value) ;
        })

        $M6.addEventListener('change',function (event) {

            $M6L = document.getElementById('M6L') ;

            $M6L.textContent= putin($M6L.textContent,$M6.value) ;
        })





        function putin(Mystring , Myvalue) {
        $string1 = Mystring+"" ;
        $ourindex = $string1.indexOf(':') ;
        //$string2 = $string1.substring($ourindex +1 , Mystring.length) ;
        $string1 = $string1.substring(0 , $ourindex +1) ;


        return $string1+" "+Myvalue+" degree";

        }
    </script>

</html>