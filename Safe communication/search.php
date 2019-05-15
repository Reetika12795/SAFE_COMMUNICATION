<?php
	session_start();
?>
<html>
<head>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box #per').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("aja.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
               resultDropdown.html(data);
               
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

<script>
function myFunction() {
var letter = document.getElementById("work").value; 
var min=1; 
var max=62;  
var alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"
var key =Math.floor(Math.random() * (+max - +min)) + +min; 

var text = "";
var data = "";
var i;
for (i = 0; i < letter.length; i++) {
  var index = alphabet.indexOf(letter[i]);
  if (index >=0 ){
  	var pos = key + index;
    text += alphabet[pos%62];
  }
  else{
  	text += letter[i];
    }
}
var text = text.replace(/ /g,"^");
document.getElementById("work").value = text;
}
</script>

<title>PHP Live MySQL Database Search</title>
<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
</head>
<body>
WELCOME <?php echo $_SESSION['name']; ?>
<form method="get" action="work.php">
    <div class="search-box">
        <input id="per" type="text" autocomplete="off" placeholder="Search user....." name="person" />
        <div class="result">
   </div>
<br><br><br><br><br>
        <textarea id="work" rows="4" cols="50" placeholder="Enter message" name="mess"> </textarea>
        <button onclick="myFunction()" type="submit"> Send </button>
    
</form>
</body>
</html>