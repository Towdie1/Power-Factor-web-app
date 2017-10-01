function changeText(id){ 
    var weight = document.getElementById('weight-input').value;
    var reps = document.getElementById('reps-input').value;
    var time = document.getElementById('time-input').value;
     
     document.getElementById(id).value = ((reps*weight)/time)+" kg per minute";
}