//Function that will validate whether something is a NaN
//NaN = 'Not a Number'
const validateString = (x) => {
    if (isNaN(x)){
        return true;
    } 
    else{
        return false;
    }
}

const booleanAnswer = (x) => {
    if (x==true || x=='T' || x=='t'|| x=='True'|| x=='true'|| x==false|| x=='false'|| x=='F'|| x=='False'|| x=='f'){
        return true;
    }
    else{
        return false;
    }
}

//Ready functions to be exported
module.exports = {
    
    validateString,
    booleanAnswer
}
