<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 0px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;

}

.row {
  margin: 10px -16px;
}



/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
 
  padding: 0px;
  box-shadow: 17px 9px 11px rgba(0, 0, 0, 0.2);
  border-style: solid;
  border-width: 0.01px;
  border-color: lightgrey;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
  text-align: center;
}

.btn:hover {
  background-color: #F4BB44;
}

.btn.active {
  background-color: #F4BB44;
  color: white;
}
.portf{
	margin-top: 20px;
	color: slategray;
	font-weight: bold;
	text-transform: uppercase;
}
.portft{
	font-weight: bold;
	color: black;
	margin: 10px;
	text-transform: uppercase;
}

*{
	font-family: "Raleway", sans-serif;
}

</style>
<body>



<!-- MAIN (Center website) -->
<div class="main">

<h6 class="portf">Portfolio</h6> <hr>


<h2 class="portft"> CHECK our portfolio</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nature')"> Nature</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('people')"> People</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="<?php echo base_url('assets/image/portfolio/portfolio-1.jpg');?>" alt="Mountains" style="width:320px; height:300px;">
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="<?php echo base_url('assets/image/portfolio/portfolio-2.jpg');?>" alt="Lights" style="width:320px; height:300px;">
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="<?php echo base_url('assets/image/portfolio/portfolio-3.jpg');?>" alt="Nature" style="width:320px; height:300px;">
      
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="<?php echo base_url('assets/image/portfolio/portfolio-4.jpg');?>" alt="Car" style="width:320px; height:300px;">

    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="<?php echo base_url('assets/image/portfolio/portfolio-5.jpg');?>" alt="Nature" style="width:320px; height:300px;">
      
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="<?php echo base_url('assets/image/portfolio/portfolio-6.jpg');?>" alt="Car" style="width:320px; height:300px;">
      
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="<?php echo base_url('assets/image/portfolio/portfolio-7.jpg');?>" alt="People" style="width:100%">
      
    </div>
  </div>
  
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

</body>
</html>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

