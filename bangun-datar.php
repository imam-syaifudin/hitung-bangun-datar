<?php
// Udin Ganteng
// Coded By Udin 
function getData(){
if ( isset($_POST['submitLingkaran'])){
    $jari = $_POST['jari-jari'];
    $phi = $_POST['phi'];


    $hasil1 = 3.14*($jari * $jari);
    $hasil2 = 22/7*($jari * $jari);

        if ( $_POST['phi'] == '1'){
            return $hasil1;
        } else {
            return $hasil2;
        }
    
}
if ( isset($_POST['submitPersegiPanjang'])){
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar']; 
        $hasil1 = $panjang*$lebar;
            return $hasil1;
        

    }
if ( isset($_POST['submitPersegi'])){
            $panjang = $_POST['sisi'];
            $lebar = $_POST['sisi']; 
            $hasil1 = $panjang*$lebar;
                return $hasil1;
            } 
    
        
}
function addClassLingkaran(){
    if ( isset($_POST['gasSelect'])){
        if ( $_POST['opsi'] == 'lingkaran'){
            return "displayInline";
        } else {
            return "luas-lingkaran";
        }
    } else {
            return "luas-lingkaran";
    }
}

function addClassPersegiPanjang(){
    if ( isset($_POST['gasSelect'])){
        if ( $_POST['opsi'] == 'persegi-panjang'){
            return "displayInline";
        } else {
            return "luas-persegi-panjang";
        }
    } else {
            return "luas-persegi-panjang";
    }
}

function addClassPersegi(){
    if ( isset($_POST['gasSelect'])){
        if ( $_POST['opsi'] == 'persegi'){
            return "displayInline";
        } else {
            return "luas-persegi";
        }
    } else {
            return "luas-persegi";
    }
}
    

    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
    <style> 
            body {
                margin: 0;
                padding: 0;
                font-family: 'Mouse Memoirs', sans-serif;
                background-color: #2d3238;
            }

            svg {
                color: white;
                width: 120px;
                height: 120px;
            }

         .row {
            margin-top: 30px;
            border-radius: 10px;
            padding: 10px;
         }

         .luas-lingkaran,.luas-persegi-panjang,.luas-persegi {
            display: none;
         }

         .displayInline {
            display: inline;
         }
    </style>
  </head>
  <body>
    <div class="jumbotron">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-3 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg"width="16" height="16" fill="currentColor" class="bi bi-calculator" viewBox="0 0 16 16">
                        <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                        <path d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z"/>
                      </svg>
                </div>
                <div class="col-md-8 mt-3">
                    <h2 class="text-center text-warning">Program Hitung Luas Bangun Datar</h2>
                </div>
            </div>
        </div>
    </div>
    <section class="body-select">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <form action="" method="post">
                        <label for="opsi">
                            <h3 class="text-warning mt-3">Silahkan Pilih Bangun yang akan dihitung</h3>
                        </label>
                        <select class="form-select" aria-label="Default select example" name="opsi" id="opsi">
                            <option value="lingkaran" class="text-center fs-3">Lingkaran</option>
                            <option value="persegi" class="text-center fs-3">Persegi</option>
                            <option value="persegi-panjang" class="text-center fs-3">Persegi Panjang</option>
                          </select>
                          <button class="btn btn-warning mt-3" id="gasSelect" name="gasSelect">SUBMIT</button>                       
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="choice">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                 <div class=<?php echo addClassLingkaran(); ?> >
                    <form action="" method="post">
                         <!-- Hitung Lingkaran -->
                        
                          <label for="name">
                             <h3 class="text-warning mt-3 text-center">Program Menghitung Luas Lingkaran</h3>
                          </label>
                        <div class="mb-3">
                            <input type="number" class="form-control text-center" name="jari-jari" id="jari-jari" placeholder="Masukkan jari jari ( r )">
                        </div>
                        <select class="form-select text-center" aria-label="Default select example" name="phi" id="phi">
                            <option selected>Pilih phi</option>
                            <option value="1" class="fs-3">3,14</option>
                            <option value="2" class="fs-3">22/7</option>
                        </select>
                          <button class="btn btn-warning mt-3" id="submit" name="submitLingkaran">submit</button>   
                        </form>
                        </div>
                        
                        <!-- Hitung Persegi Panjang -->
                        
                        <div class=<?php echo addClassPersegiPanjang(); ?> >
                          <form action="" method="post">
                            <label for="name">
                                <h3 class="text-warning mt-3 text-center">Program Menghitung Luas Persegi Panjang</h3>
                            </label>
                            <div class="mb-3">
                                <input type="number" class="form-control text-center" name="panjang" id="panjang" placeholder="Masukkan panjang">
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control text-center" name="lebar" id="lebar" placeholder="lebar">
                            </div>    
                           <button class="btn btn-warning mt-3" id="submit" name="submitPersegiPanjang">submit</button> 
                           </form>
                        </div>  
                    
                        <!-- Hitung Luas Persegi  -->
                        <div class=<?php echo addClassPersegi(); ?> >
                        <form action="" method="post">
                            <label for="name">
                                <h3 class="text-warning mt-3 text-center">Program Menghitung Luas Persegi</h3>
                            </label>
                            <div class="mb-3">
                                <input type="number" class="form-control text-center" name="sisi" id="sisi" placeholder="Masukkan sisi">
                            </div>
                            <button class="btn btn-warning mt-3" id="submit" name="submitPersegi">submit</button> 
                           </form>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hasil">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="d-grid gap-2 p-4">
                     <h1 class="btn btn-warning btn-lg fs-1" >Hasil : <span id="hasil">0</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
      document.getElementById('hasil').innerHTML = <?php echo getData(); ?>
    </script>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
