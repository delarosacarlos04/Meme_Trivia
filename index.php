<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trivia Time</title>
    
     <link rel="stylesheet" href="main.css" />
     <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
     
    </head>
<body>
    
    <?php
    
    if(!isset($_COOKIE["user1Points"])){
        setcookie("user1Points", "0", time() + (200));
        setcookie("user2Points", "0", time() + (200));
        setcookie("player", "user1Points", time() + (200));
    }   
   ?>
    
    
    <script src="main.js"></script>
    <script>
        var player = getCookie("player")
        if(player == "user1Points"){
          alert('Player One, Your Turn to Pick!');
        }
        if(player == "user2Points"){
            alert('Player Two, Your Turn to Pick!');
        }
        
    </script>
   
   
   
   
    
    <h1>  <img src="picture/mtIcon.png" alt=" MT Icon" class="icon" width="50" height="50" align="middle"> Meme Trivia </h1>
    
    <h2>Test your knowledge of meme culture. </h2>
    
    <script> 
        
        points1 = getCookie('user1Points');
        points2 = getCookie('user2Points');
        
        document.write("Player One points: " + points1 + "<br>" );
        document.write("Player Two points: " + points2);
    
    </script>
    
    
    
        <div class="grid">
            
        <div class="category-group">
          <button class="button" >The Office</button>
          <button class="button" >Spungebob</button>
          <button class="button" >Pepe</button>
          <button class="button" >UT memes</button>
        </div>

        <div class="btn-group" >
          <button class="button"  >100</button>
          <button class="button" onclick="this.disabled=true; location.href='testTF.html'">100</button>
          <button class="button" onclick="location.href='testMC.php'" >100</button>
          <button class="button" onclick="location.href='UT_Memes_100.html'">100</button>
        </div>

        <div class="btn-group" >
          <button class="button" >200</button>
          <button class="button" onclick="location.href='spongeQuestion200.html'">200</button>
          <button class="button" onclick="location.href='testFillBlank.html'" >200</button>
          <button class="button" onclick="location.href='UT_Memes_200.html'">200</button>

        </div>

        <div class="btn-group" >
          <button class="button" onclick="location.href='The_Office_300.html'">300</button>
          <button class="button" onclick="location.href='spongeQuestion300.html'">300</button>
          <button class="button" onclick="location.href='pepeQuestion300.html'">300</button>
          <button class="button" onclick="location.href='UT_Memes_300.php'">300</button>

        </div>

        <div class="btn-group">
          <button class="button" >400</button>
          <button class="button" onclick="location.href='spongeQuestion400.html'">400</button>
          <button class="button" onclick="location.href='pepeQuestion400.html'">400</button>
          <button class="button" onclick="location.href='UT_Memes_400.html'">400</button>
        </div>
    </div>


    
    <img class="picture" src="picture/pepehands2.png" alt="Pepehands meme">
    </br><button onclick="location.href='logout.php'">Would you like to start a new game?</button>
    
</body>
</html>
