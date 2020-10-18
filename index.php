<?php
session_start();
include("class/php/ip.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	include("link.html"); // ajout des liens externes 
	include("link_php.php"); // pour toutes les classe php 
	include("link_js.html"); // pour toutes les class Javascript
	?>
	<title>Bokonzi</title>
</head>

<body>
	<div id="body">
		<header>
			<?php
	 	include("model/header.php");
			?>
		</header>
		<section>
			<?php
			include("model/section.php");
			?>
		</section>
		<footer>
			<?php
			include("model/footer.php");
			?>
		</footer>
		<?php
		include("vue.html");
		?>
	</div>
 

<div id="div1">
 
</div>
<div id="block_paint"></div>


 
<script>
 
var nombre_carre_vertical = 1;
  nombre_carre_vertical = nombre_carre_vertical+1;

var nombre_carre_horizontal = 100;
nombre_carre_horizontal = nombre_carre_horizontal-1;




function my_block(){

	for(var i = 0 ; i<nombre_carre_vertical+1; i++){
var para = document.createElement("p");
 var node = document.createTextNode("");
para.appendChild(node);
var element = document.getElementById("block_paint");
element.appendChild(para);
para.setAttribute("class", "democlass demox1 margin-zero");
 
para.setAttribute("id", "block_"+i);





  for(j = 0 ; j<nombre_carre_horizontal;j++){
		var para = document.createElement("p");
var node = document.createTextNode("");
para.appendChild(node);
var element = document.getElementById("block_"+i);
element.appendChild(para);
para.setAttribute("class", "demox2");
para.setAttribute("id", "block_bis_"+i+"_"+j);
para.setAttribute("onclick", "change_color(this)");
}


 






}

}
my_block();


 
var para = document.createElement("p");
var node = document.createTextNode("");
para.appendChild(node);
var element = document.getElementById("block_0");
element.appendChild(para);
para.setAttribute("class", "demox2");
para.setAttribute("id", "god0");


var para = document.createElement("p");
var node = document.createTextNode("");
para.appendChild(node);
var element = document.getElementById("block_1");
element.appendChild(para);
para.setAttribute("class", "demox2");
para.setAttribute("id", "god1");

var para = document.createElement("p");
var node = document.createTextNode("");
para.appendChild(node);
var element = document.getElementById("block_2");
element.appendChild(para);
para.setAttribute("class", "demox2");
para.setAttribute("id", "god1");



// document.getElementsByTagName("p")[i].setAttribute("id", "block_"+i);


 



/*
for(var i = 0 ; i<nombre_carre; i++){
var para = document.createElement("p");
 var node = document.createTextNode("");
para.appendChild(node);
var element = document.getElementById("block_1");
element.appendChild(para);
document.getElementsByTagName("p")[i].setAttribute("class", "democlass demox1");
}
 
for(var j = i ; j<i+nombre_carre; j++){
var para = document.createElement("p");
 var node = document.createTextNode("");
para.appendChild(node);
var element = document.getElementById("block_2");
element.appendChild(para);
document.getElementsByTagName("p")[j].setAttribute("class", "democlass demox2");
}


for(var x = j ; x<j+nombre_carre; x++){
var para = document.createElement("p");
 var node = document.createTextNode("");
para.appendChild(node);
var element = document.getElementById("block_3");
element.appendChild(para);
document.getElementsByTagName("p")[x].setAttribute("class", "democlass demox3");
}
 
*/

</script>

<style>
	#block_paint{
		width: 300px;
		/*background-color: black;*/
	
		margin: auto;
	}
	#block_1,#block_2,#block_3 {
		display: flex;
 
	}
	.demox1,
 
 
.demox1{ 
	background-color: red; 
}
.demox2{ 
	background-color: white; 
}
 body {
	 background-color: rgba(0, 0, 0, 0.3);
 }
.demox3{ 
	background-color: green; 
}

.demox2{
 
 
  padding: 5px;

	background-color: white;
	border: 1px solid rgba(0, 0, 0, 0 );
 margin: 0;
 
	}
	.demox2:hover{
		border: 1px solid rgba(0, 0, 0, 0.1);
		cursor: pointer;
	}
	.democlass{
		display: flex;
		flex-wrap: wrap;
	}
	.xn {
		background-color: red;
	}
#block_0{
	margin-bottom: 0px;
}
.margin-zero{
	margin: 0px;
}
</style>



<input type="color" onchange="mycolor(this)" >
<script>
var color = "red";
	function change_color(_this){
	 
		document.getElementById(_this.id).style="background-color:"+color;
	}
	function mycolor(_this) {
	
	 
			color = _this.value; 
	 
	}
</script>


<style>
	.bidi {
		background-color: pink;
		border: 1px solid black;
	}
</style>
</body>
</html>