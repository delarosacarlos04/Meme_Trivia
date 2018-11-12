function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
    
function addPoints(key, qValue){
    var newPoints = Number(getCookie(key)) + qValue;
    var x = String(newPoints);
        document.write(x);
        document.cookie = key + "=" + x;
    
}

function switchPlayer(){
    var x = getCookie(player)
    if(x == 'user1Points'){
        document.cookie = "player= user2Points"
    }
    else if(x == 'user2Points'){
        document.cookie = "player= user1Points" ;
    }
    
}
