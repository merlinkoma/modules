<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="carousel.css">
  <title>Systeco carousel test</title>
</head>

<body>
  <div id="carousel-container" class="carousel-container">

    <div class="carousel-bloc1">

      <div class="carousel-bloc2">

        <div class="carousel-chevrons">
          <img src="left-chevron.png" alt="">
        </div>

        <div class="carousel-slides">
          <?php

          $cards = [
            [
              'title' =>  "Dispositifs de protection",
              'img' => "protection-system.webp",
              'categories' => [
                ["Produits filaires", "plug.png"],
                ["Produits radios", "radio.png"],
                ["Homologation NF A2P", "compliant.png"],
                ["Applications smartphones", "smartphone.png"],
              ],
              'anchor' => '1',
            ],
            [
              'title' => "Détection",
              'img' => "detection.webp",
              'categories' => [
                ["Détection extérieure", "alarm.png"],
                ["Détection périmétrique", "weakness.png"],
                ["Détection volumétrique", "cube.png"],
                ["Détection technique", "technical-support.png"],
              ],
              'anchor' => '2',
            ],
            [
              'title' => "Vidéoprotection",
              'img' => "videosurveillance.webp",
              'categories' => [
                ["Matériels fixes ou motorisés, thermiques, asservis, etc.", "videosurveillance.png"],
                ["Technologies IP, analogique HD", "technology.png"],
                ["Applications smartphones", "smartphone.png"],
                ["Solutions légères", "light-camera.png"]
              ],
              'anchor' => '3',
            ],
            [
              'title' => "Télésurveillance agréée APSAD P3",
              'img' => "telesurveillance.webp",
              'categories' => [
                ["Intervention sur alarme (partenaire)", "partner-alarm.png"],
                ["Alarme panique, téléassistance (partenaire)", "help.png"],
                ["Levée de doute vidéo (partenaire)", "doubt.png"]
              ],
              'anchor' => '4',
            ],
            [
              'title' => "Détection incendie",
              'img' => "fire-detection.webp",
              'categories' => [
                ["Conformité loi Morange", "law.png"],
                ["Systèmes autonomes", "settings.png"],
                ["Systèmes asservis", "settings.png"],
                ["Technologies filaire / radio", "radio.png"]
              ],
              'anchor' => '5',
            ]
          ];

          foreach ($cards as $index => $card) {

            if ($index == 0) { ?>
              <div class="carousel-item active">

                <img src="./webp/<?= $card['img'] ?>" alt="">

                <div class="carousel-texts">
                  <h2><?= $card['title'] ?></h2>
                  <a href="#<?= $card['anchor']; ?>">En savoir plus</a>
                </div>

              </div>
            <?php } else { ?>


              <div class="carousel-item">

                <img src="./webp/<?= $card['img'] ?>" alt="">

                <div class="carousel-texts">
                  <h2><?= $card['title'] ?></h2>
                  <a href="#<?= $card['anchor']; ?>">Plus d'informations</a>
                </div>
              </div>


          <?php }
          } ?>

        </div>

        <div class="carousel-chevrons">
          <img src="right-chevron.png" alt="">
        </div>

      </div>

      <div class="bottom-buttons">
        <div class="buttons"></div>
        <div class="buttons"></div>
        <div class="buttons"></div>
        <div class="buttons"></div>
        <div class="buttons"></div>
      </div>
    </div>
  </div>
  <script src="carousel-systeco.js"></script>
</body>

</html>