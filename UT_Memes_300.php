<h1>The UT meme Facebook page was created in 2000.</h1><br>

<button onclick="trueAnswer()">True</button> 
<button onclick="falseAnswer()">False</button> 

<script src="main.js"></script> 
<script>
    function falseAnswer() {
        alert("Answer is correct!");
        var name = getCookie("player")
        addPoints(name, 300);
        switchPlayer();
        location.href = "index.php";
     }
  function trueAnswer(){
      alert("Answer is wrong!");
      switchPlayer();
      location.href = "index.php";
  }
</script>
