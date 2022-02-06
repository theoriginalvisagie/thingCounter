function changeCountTotal(action){
    var counterTotal = parseInt(document.getElementById("countTotal").innerHTML);

    if(action == "minusCount"){
        counterTotal --;
    }else if(action == "plusCount"){
        counterTotal ++;
    }

    document.getElementById("countTotal").innerHTML = counterTotal;
}