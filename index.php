 <?php

  function itemsDesc() {
    return [
      ["name" => "MAXEY M", "img" => "shoes1.png", "color" => "grey", "size" => "41", "price" => "2,299.00", "desc" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, ipsam!", "alt" => "shoes 1"],
      ["name" => "VESTIGE", "img" => "shoes2.png", "color" => "white", "size" => "41", "price" => "1,999.00", "desc" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, ipsam!", "alt" => "shoes 2"],
      ["name" => "HIGH-WIND M", "img" => "shoes3.png", "color" => "white Black", "size" => "39", "price" => "1,999.00", "desc" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, ipsam!", "alt" => "shoes 3"],
      ["name" => "TENACITY", "img" => "shoes4.png", "color" => "All Black", "size" => "39", "price" => "2,499.00", "desc" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, ipsam!", "alt" => "shoes 4"],
      ["name" => "CAGER M", "img" => "shoes5.png", "color" => "Off White", "size" => "41", "price" => "2,999.00", "desc" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, ipsam!", "alt" => "shoes 5"],
      ["name" => "SQUADRON M", "img" => "shoes6.png", "color" => "Black", "size" => "41", "price" => "2,099.00", "desc" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, ipsam!", "alt" => "shoes 6"]
      ];
  }

  $shoes = itemsDesc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Project Loop</title>
  <link rel="stylesheet" href="style.css">
</head>
<body> 
          <?php foreach($shoes as $newshoes):?>
    <div class="container">
    <section class="items">
      <img src="<?= $newshoes["img"] ?>" alt="<?= $newshoes["alt"] ?>">
    </section>
    <div class="description">
      <h3 class="name"><?= $newshoes["name"] ?></h3>
      <p class="price"><?= $newshoes["price"] ?></p>
      <p class="color"><?= $newshoes["color"] ?></p>  
      <p class="size"><?= $newshoes["size"] ?></p>
      <p class="desc"><?= $newshoes["desc"] ?></p>
    </div>      
  </div>
  <?php  endforeach;  ?>

</body>
</html>