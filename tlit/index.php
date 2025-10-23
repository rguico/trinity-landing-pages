<?php

use Carbon\Carbon;

require_once('vendor/autoload.php');

header("Refresh: 300");

if (isset($_GET['now'])) {
  $now = Carbon::parse($_GET['now'], 'America/Chicago');
} else {
  $now = Carbon::now('America/Chicago');
}


$games = [
  '2025-10-21 16:30:00' => [
    'East Gym' => [
      'Mount Prospect @ Palatine',
      'Mount Prospect @ Batavia',
      'Palatine @ Batavia',
    ]
  ],
  '2025-10-23 16:30:00' => [
    'East Gym' => [
      'Mount Prospect @ Palatine',
      'Mount Prospect @ Marengo',
      'Palatine @ Marengo',
    ]
  ],
  '2025-10-24 16:30:00' => [
    'East Gym' => [
      'Roselle @ Lombard',
      'Roselle @ Naperville (Girls)',
      'Lombard @ Naperville (Girls)',
    ],
    'Heritage Center' => [
      'East Dundee @ Crystal Lake',
      'East Dundee @ Naperville (Boys)',
      'Crystal Lake @ Naperville (Boys)',
    ]
  ],
  '2025-10-25 09:00:00' => [
    'East Gym' => 'G1: Mount Prospect @ Black 3',
    'Heritage Center' => 'G2: Black 2 @ Batavia',
  ],
  '2025-10-25 10:00:00' => [
    'East Gym' => 'G3: Winner G2 @ Palatine',
    'Heritage Center' => 'G4: Winner G1 @ Batavia',
  ],
  '2025-10-25 11:00:00' => [
    'East Gym' => 'Loser G3 @ Loser G4',
    'Heritage Center' => 'Loser G1 @ Loser G2',
  ],
  '2025-10-25 12:00:00' => [
    'East Gym' => 'Winner G3 @ Winner G4',
  ],
  '2025-10-25 13:00:00' => [
    'East Gym' => 'G1: Orange 2 @ Black 3',
    'Heritage Center' => 'G2: Black 2 @ Orange 3',
  ],
  '2025-10-25 14:00:00' => [
    'East Gym' => 'G3: Winner G2 @ Black 1',
    'Heritage Center' => 'G4: Winner G1 @ Orange 1',
  ],
  '2025-10-25 15:00:00' => [
    'East Gym' => 'Loser G3 @ Loser G4',
    'Heritage Center' => 'Loser G1 @ Loser G2',
  ],
  '2025-10-25 16:00:00' => [
    'East Gym' => 'Winner G3 @ Winner G4',
  ]

];

$gamesToday = array_filter($games, fn($date) => Carbon::parse($date, 'America/Chicago')->toDateString() == $now->toDateString(), ARRAY_FILTER_USE_KEY);

function output_games($location) {
  global $gamesToday;

  if (str_contains($location, 'East Gym')) {
    $header = "<h1 style='text-align: center;'>↑ $location ↑</h1>";
  } else {
    $header = "<h1 style='text-align: center;'>→ $location →</h1>";
  }
  echo($header);

  if (!count($gamesToday)) {
    echo('<h2>No games scheduled</h2>');
  }

  foreach ($gamesToday as $date => $games) {
    $locationGames = array_filter($games, fn($locationKey) => $locationKey === $location, ARRAY_FILTER_USE_KEY);
    if (count($locationGames) > 0) {
      echo('<h2>' . Carbon::parse($date, 'America/Chicago')->format('l @ g:i A') . '</h2>');
      echo('<ul>');
      foreach (array_values($locationGames) as $matches) {
        if (!is_array($matches)) {
          $matches = [$matches];
        }

        foreach ($matches as $match) {
          echo("<li>$match</li>");
        }
      }
      echo('</ul>');
    } else {
      echo('<h2>No games scheduled</h2>');
    }
  }
}
?>

<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style type="text/css">
    * {
    box-sizing:border-box;
    font-family: "Noto Sans", serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-variation-settings: "width" 100;
}

h1 {
  font-size: 40px;
}

h2 {
  font-size: 36px;
}

li {
  font-size: 24px;
}

.title {
  text-align: center;
  background-color: #ffcd98;
  font-size: 40px;
  font-weight: bold;
  padding: 20px;
}
    </style>
  <title>TLIT!</title>
</head>
<body>
  <div class="title">
    Welcome to the 2025 Trinity Lutheran Invitational Tournament!
  </div>
  <div style="clear: both; float: left; width: 30%; margin-left: 25px;">
    <?php output_games('East Gym'); ?>
  </div>
  <div style="float: left; width: 30%; text-align: center; background-color: #EEE; padding-bottom: 50px;">
    <h1>Online Brackets:</h1>
    <img src="TLIT.png" width="50%"/>
  </div>
  <div style="float: left; margin-left: 25px;">
    <?php output_games('Heritage Center'); ?>
  </div>
</body>
</html>