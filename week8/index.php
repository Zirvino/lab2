<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yang's Profile</title>
    <link rel="icon" href="icon/icon.ico" type="image/x-icon">
    <style>
        body {
            border-radius: 5px;
            background-image: url('GIF/Smoke.gif');
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            color: #fff;
            font-family: Arial, sans-serif; 
        }
        .center-container {
            text-align: center;
        }
        .title-container {
            background-color: #8885ac;
            padding: 10px 20px; 
            border-radius: 20px;
            display: inline-block;
        }
        .title {
            font-size: 24px; 
            margin: 0; 
        }
        .body1 {
            font-size: 16px; 
            margin-bottom: 20px; 
        }
        .circular-picture {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 100px;
            height: 100px;
            border-radius: 20px;
            overflow: hidden;
            cursor: pointer; 
        }
        .circular-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 50%;
        }
        .image-container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }
        .image-container > div {
            flex: 0 0 calc(33.33% - 10px);
            margin-right: 10px;
            position: relative;
            overflow: hidden;
        }
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .video-overlay:hover {
            opacity: 1;
        }
        .video-overlay p {
            color: #fff;
            font-size: 18px;
            text-align: center;
            margin: 0;
        }
        .audio-container {
            margin-top: 20px;
        }
        .song-container {
            margin-top: 20px;
        }
        .song-item {
            text-align: center;
            margin-bottom: 20px;
        }
        .song-item iframe.spotify-iframe {
            width: 25%;
            height: 80px;
            border: none;
        }
    </style>
</head>
<body>
    <?php
    include 'gamesInfo.php';
    $userName = "Paul Damian Mariano";
    $nickname = "Yang";
    $age = 21;
    $course = "Computer Science";
    $school = "Asia Pacific College";
    ?>

    <section>
        <center>
            <div class="title-container">
                <h1 class="title"><?php echo $nickname; ?>'s Profile</h1>
            </div>
            <p class="body1">Hey there, my name is <?php echo $userName; ?>, but my nickname is <?php echo $nickname; ?>, and I'm <?php echo $age; ?> years old. I'm taking the course <?php echo $course; ?> at <?php echo $school; ?>!</p>
            <h2 class="title">Games I Play Often</h2>
        </center>
    </section>

    <section class="body1">
        <div class="center-container">
            <div class="image-container">
                <?php foreach ($gamesInfo as $gameKey => $game): ?>
                    <div>
                        <div class="video-overlay">
                            <p id="<?php echo $gameKey; ?>Overlay"><?php echo htmlspecialchars($game['name']); ?></p>
                        </div>
                        <img id="<?php echo $gameKey; ?>Image" src="<?php echo htmlspecialchars($game['gif']); ?>" class="round-image">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <a href="https://github.com/Zirvino" target="_blank" class="circular-picture">
            <img src="images/Me.jpg" alt="Me">
        </a>

        <div class="song-container">
            <center>
                <h2 class="title">My Favorite Songs</h2>
                <h2 class="title">VOLUME WARNING! </h2>
            </center>
            <div class="song-item">
                <iframe class="spotify-iframe" src="https://open.spotify.com/embed/track/0zqBZqm5czQ3A4EoSdKFHj?utm_source=generator" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
            <div class="song-item">
                <iframe class="spotify-iframe" src="https://open.spotify.com/embed/track/3duI7TT4kzLtoqf4PeUR3Z?utm_source=generator" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
            <div class="song-item">
                <iframe class="spotify-iframe" src="https://open.spotify.com/embed/track/28VbwtsYnj85UEODGpQRem?utm_source=generator" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
            <div class="song-item">
                <iframe class="spotify-iframe" src="https://open.spotify.com/embed/track/1rBTBbtkJlSDk78gg8Dw9F?utm_source=generator" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
            <div class="song-item">
                <iframe class="spotify-iframe" src="https://open.spotify.com/embed/track/1Ph65gYzHdiNDs9yWh4ePY?utm_source=generator" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <script>
        var gamesInfo = {
            game1: { name: "GENSHIN", gif: "videos/GENSHIN.gif" },
            game2: { name: "LEAGUE", gif: "videos/LEAGUE.gif" },
            game3: { name: "THE FINALS", gif: "videos/THE FINALS.gif" }
        };

        document.getElementById("game1Overlay").innerText = gamesInfo.game1.name;
        document.getElementById("game1Image").src = gamesInfo.game1.gif;

        document.getElementById("game2Overlay").innerText = gamesInfo.game2.name;
        document.getElementById("game2Image").src = gamesInfo.game2.gif;

        document.getElementById("game3Overlay").innerText = gamesInfo.game3.name;
        document.getElementById("game3Image").src = gamesInfo.game3.gif;

        function redirectToGitHub() {
            window.location.href = "https://github.com/Zirvino";
        }
    </script>
</body>
</html>
