<?php 

$json_string = file_get_contents('dischi.json');

$list= json_decode($json_string, true);

$array_discs= $list[$_GET['index']]

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.4.23/vue.global.prod.js"></script> 
  <title>php-dischi-json</title>
  
</head>
<body class="text-center bg-secondary">

  <header class="d-flex justify-content-between align-items-center  p-3  bg-dark ">

    <div class="d-flex text-secondary  ">

      <img class="me-2 " src="img/Logo.png" alt="boolify">




      <h1>Boolify</h1>


    </div>


    <a href="index.html" class="btn btn-secondary text-dark " >Torna alla Home</a>



  </header>

  <main class="d-flex justify-content-around py-5">

    <div>

     <h1 class="mb-5">Copertina:</h1>

     <img src="<?php echo $array_discs['poster'] ?>" alt="<?php echo $array_discs['title']  ?>">


    </div>


    <div>


      <h1 class="mb-5">Dettagli:</h1>


      <h2 >Titolo:</h2>
      <h4 class="mb-5"><?php echo $array_discs['title']  ?></h4>
      <h2>Autore:</h2>
      <h4 class="mb-5"><?php echo $array_discs['author']  ?></h4>
      <h2>Anno:</h2>
      <h4 class="mb-5"><?php echo $array_discs['year']  ?></h4>
      <h2>Genere:</h2>
      <h4><?php echo $array_discs['genre']  ?></h4>




    </div>




  </main>

  
 
</body>
</html>
