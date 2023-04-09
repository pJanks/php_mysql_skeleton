<?php
  session_start();
  $request_uri = strtolower(rtrim($_SERVER['REQUEST_URI'], '/'));
  $route = explode('/', $request_uri)[1] ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link rel="stylesheet" href="global.css">
    <?= "<link rel=stylesheet href=frontend/views/$route/$route.css>" ?>
  </head>
  <body>
    <?php
      switch ($request_uri) {
        case '':
        case '/home':
        case '/sandbox':
        case '/404':
          require_once "frontend/views/$route/index.html";
        break;
        default:
          header('Location: /404');
        break;
      } 
    ?>
  </body>
  <script src="global.js"></script>
  <?= "<script src=frontend/views/$route/$route.js></script>"; ?>
</html>