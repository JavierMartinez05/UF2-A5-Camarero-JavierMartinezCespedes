<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Catalonia</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/3bc5094caf.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="./img/comida.png">
    <style>
        body {
          background-image: url('./img/fondocatalan.jpg');
          background-size: cover;
          background-position: center;
        }
    </style>
  </head>
  <body>
    <div class="image-logo">
      <img src="./img/catalunya.png">
    </div>
    <div class="menu-container">
      <?php
        $menu = simplexml_load_file('xml/menu.xml');
        foreach ($menu->category as $category) {
          echo '<div class="category">';
          echo '<h2 class="category-title">' . $category['name'] . '</h2>';
          echo '<ul>';
          foreach ($category->dish as $dish) {
            echo '<li class="dish">';
            echo '<div class="dish-name">' . $dish->name . '</div>';
            if(isset($dish->caracteristicas->item['tipo1']) && $dish->caracteristicas->item['tipo1'] == 'glutenfree'){
              echo '<div class="dish-icon" title="Libre de gluten"><i class="fas fa-seedling"></i></div>';
            }
            if(isset($dish->caracteristicas->item['tipo2']) && $dish->caracteristicas->item['tipo2'] == 'carne'){
              echo '<div class="dish-icon" title="Contiene carne"><i class="fas fa-drumstick-bite"></i></div>';
            }
            if(isset($dish->caracteristicas->item['tipo3']) && $dish->caracteristicas->item['tipo3'] == 'pescado'){
              echo '<div class="dish-icon" title="Contiene pescado"><i class="fas fa-fish"></i></div>';
            }
            if(isset($dish->caracteristicas->item['tipo4']) && $dish->caracteristicas->item['tipo4'] == 'alcohol'){
              echo '<div class="dish-icon" title="Contiene alcohol"><i class="fas fa-wine-bottle"></i></div>';
            }
            if(isset($dish->caracteristicas->item['tipo5']) && $dish->caracteristicas->item['tipo5'] == 'vegano'){
              echo '<div class="dish-icon" title="Vegano"><i class="fas fa-carrot"></i></div>';
            }
            echo '<div class="dish-price">' . $dish->price . '</div>';
            echo '</li>';
            echo '<div class="dish-description">' . $dish->description . '</div>';
            echo '<div class="dish-calorias">' . $dish->calorias . '</div>';
            //echo '<img src="'. $dish->img.'" class="card-img-top" alt=" ">';

          }
          echo '</ul>';
          echo '</div>';
        }
      ?>

      <table class="icon">
        <thead>
        </thead>
        <tbody>
          <tr>
            <td><i class="fas fa-seedling"></i></td>
            <td>SIN GLUTEN</td>
          </tr>
          <tr>
            <td><i class="fas fa-drumstick-bite"></i></td>
            <td>CONTIENE CARNE</td>
          </tr>
          <tr>
            <td><i class="fas fa-fish"></i></td>
            <td>CONTIENE PESCADO</td>
          </tr>
          <tr>
            <td><i class="fas fa-wine-bottle"></i></td>
            <td>CONTIENE ALCOHOL</td>
          </tr>
          <tr>
            <td><i class="fas fa-carrot"></i></td>
            <td>VEGANO</td>
          </tr>
        </tbody>
      </table>


      <table class="contacto">
        <thead>
        </thead>
        <tbody>
          <tr>
            <td><i class="fas fa-phone"></i></td>
            <td>634 540 410</td>
          </tr>
          <tr>
            <td><i class="fas fa-envelope"></i></td>
            <td>catalonia@gmail.com</td>
          </tr>
          <tr>
            <td><i class="fas fa-share-alt"></i></td>
            <td>@cataloniacatalanarest</td>
          </tr>
          <tr>
            <td><i class="fas fa-map-marker"></i></td>
            <td>C. de Fontcoberta, 4</td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
