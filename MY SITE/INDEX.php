<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>index</title>
<link href="mysite.css" rel="stylesheet" type="text/css">
</head>
    <body>
        <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openslidemenu()">
          
        <svg width="30" height="30">
            <path d="M0,5 30,5" STROKE="#fff"
                  stroke-width="5"/>
            <path d="M0,14 30,14" STROKE="#fff"
                  stroke-width="5"/>
            <path d="M0,23 30,23" STROKE="#fff"
                  stroke-width="5"/>
            </svg>        
        </a> 
        </span>
            <ul class="navbar-nav">
            <li><a href="#"><img src="logo2.png" width="130px" height="45px"></a></li>
        </ul>
    </nav>
    <div id="side-menu" class="side-nav">
            
        <a href="#" class="btn-close" onclick="closeslidemenu()">&times;</a>
        <a href="#">ASSETS</a>

</div>
        
<script>
    function openslidemenu(){
        document.getElementById('side-menu').style.width= '250px';
        document.getElementById('main').style.marginLeft= '250px';
    }
         function closeslidemenu(){
        document.getElementById('side-menu').style.width= '0';
        document.getElementById('main').style.marginLeft= '0';
    }
    
    </script>
	

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
        <script src="main.js"></script>
    </body>
</head>

