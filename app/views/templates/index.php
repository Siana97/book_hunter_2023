<?php 
/*
    ./app/views/templates/index.php 
    Template général
*/

?>

<!DOCTYPE html>
<html lang="fr"> 
  <head>
    <?php include_once './partials/_head.php'; ?>

  </head>
  <body class="bg-gray-900 text-white font-sans leading-normal tracking-normal">
    <!-- Header -->
    <?php include_once './partials/_header.php'; ?>
    <!-- Main -->
    <div class="container mx-auto flex flex-wrap pt-4 pb-12 text-white">
      <!-- Aside -->
      <?php include_once './partials/_aside.php'; ?>

      <!-- Main content -->
      <?php include_once './partials/_main.php'; ?>
    </div>

    <!-- Footer -->
    <?php include_once './partials/_footer.php'; ?>
  </body>
</html>
