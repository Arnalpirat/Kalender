var doors  = document.getElementsByClassName('door');

for(i = 0; i < doors.length; i++){
  
  doors[i].addEventListener('click', function(){
    console.log(this.className.slice(5,7))
    var doorClicked = this.className.slice(5,7)
    var span = document.getElementById('s' + doorClicked);
    var img = document.getElementById('p' + doorClicked); 
    
    if (span.style.display === "none") {        
        span.style.display = "inline";
        img.style.display = "none";        
      } else {
        span.style.display = "none";
        img.style.display = "inline";
      }      
  } );
}
  
