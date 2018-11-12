
<div id="title"></div>
<div id="langDiv"></div>

<!--<form >

    <input type="radio" name="choice" value="Pepe"> Pepe
    <input type="radio" name="choice" value="Spongegar"> Spongegar
    <input type="radio" name="choice" value="Get That Bread"> Get That Bread
    <input type="radio" name="choice" value="None of These"> None of These
</form>-->
<button onclick="submitAnswer()">Submit Answer</button>
<body onload="buildQuestion()">


</body>


<script>

    var xmlhttp;
    xmlhttp=new XMLHttpRequest();
    xmlhttp.addEventListener("load", buildQuestion, false);
    xmlhttp.open("GET","test1.txt",true);
    xmlhttp.send();


    function buildQuestion() {
        var data = this.response;
        var lang = data.split("\r\n").map(function(el){ return el.split("=");});
        var div = document.getElementById("langDiv");
        var title = document.getElementById("title");
        var currentQuestion = lang[0];
        var html = "";
        for (var i = 1; i < currentQuestion.length; i++) {

            html += '<input type="radio" name="choice" value="'+i+'">' + currentQuestion[i];
            /*var butt=document.createElement("button");
            butt.innerHTML=lang[0][i];
            div.appendChild(butt);*/
        }
        title.innerHTML = currentQuestion[0];

        div.innerHTML = html;
    }
    function submitAnswer() {
        var radios = document.getElementsByName("choice");
        var i = 0, len = radios.length;
        var checked = false;
        var userAnswer;
        for( ; i < len; i++ ) {
            if(radios[i].checked) {
                checked = true;
                userAnswer = radios[i].value;
            }
        }
        // if user click submit button without selecting any option, alert box should be say "please select choice answer".
        if(!checked) {
            alert("please select choice answer");
            return;
        }
        // Correct answer
        if(userAnswer == "Pepe") {
            alert("Answer is correct!");
            var name = getCookie("player")
            addPoints(name, 200);
            switchPlayer();
            location.href = "index.php";
  }
        if(userAnswer == 1) {
            alert("Answer is correct!");
            var name = getCookie("player")
            addPoints(name, 200);
            switchPlayer();
            location.href = "index.php";
        }
        // incorrect answer
        else {
            alert("Answer is wrong!");
            switchPlayer();
            location.href = "index.php";
  }
    }
    buildQuestion();
</script>
