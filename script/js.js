function changeCountTotal(action,id){
    var counterTotal = parseInt(document.getElementById("countTotal_"+id).innerHTML);

    if(action == "minusCount"){
        counterTotal --;
        updateCountTotal(counterTotal,id);
    }else if(action == "plusCount"){
        counterTotal ++;
        updateCountTotal(counterTotal,id);
    }

    document.getElementById("countTotal_"+id).innerHTML = counterTotal;
}

function updateCountTotal(counterTotal,id){
    $.ajax({
        url: 'http://localhost/thingCounter/ajax/ajaxCounter.php',
        type: 'post',
        data: {'action':'updateCountTotal', "counterTotal":counterTotal , "id":id},
        success: function(response){  
            
            console.log(response);
        }         
    });
}

function saveNewCounter(){
    var counterName = document.getElementById("name").value;
    var currentCount = document.getElementById("current_count").value;

    $.ajax({
        url: 'http://localhost/thingCounter/ajax/ajaxCounter.php',
        type: 'post',
        data: {'action':'saveNewCounter', "counterName":counterName , "currentCount":currentCount},
        success: function(response){  
            if(response == "true"){
                location.reload();
            }else{
                alert("Error: " + response);
            }
            console.log(response);
        }         
    });
    
}
// function readFile(){
//     $.ajax({
//         url: 'http://localhost/thingCounter/ajax/ajaxCounter.php',
//         type: 'post',
//         data: {'action':'readFile'},
//         success: function(response){
//             var arr = [
//                 ["user", "user1", "id": "1", "name":"CounterOne", "currentCount":"243"]
//             ];
//             // const obj = JSON.parse(response);
//             console.log(arr)
//             let innerH = document.getElementById("fileContents");
//             for (var key in arr) {
//                 var value = arr[key];
//                 innerH.innerHTML += key + " = " + value + ' <br>';
//             }
//             // document.getElementById("fileContents").innerHTML = obj;

//             // for (const key in obj){
//             //     if(obj.hasOwnProperty(key)){
//             //       console.log(`${key} : ${obj[key]}`)
//             //     }
//             //   }
//             // console.log(response);
         
//         }         
//     });
// }