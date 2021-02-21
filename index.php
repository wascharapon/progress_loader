<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  body {
  background-color: #202020;
}

p {
  padding: 20px;
  text-align: center;
  
  a {
    display: block;
    text-decoration: none;
    line-height: 30px;
    color: #999999;
    
    &:hover {
      color: #ffffff;
    }
  }
}

#progress {
	position: fixed;
	z-index: 1;
	top: 0;
	left: -6px;
	width: 1%;
	height: 1.80%;
  background-color: #ce0000;
  
  -moz-border-radius: 1px;
	-webkit-border-radius: 1px;
	border-radius: 1px;

  -moz-transition: width 600ms ease-out,opacity 500ms linear;
	-ms-transition: width 600ms ease-out,opacity 500ms linear;
	-o-transition: width 600ms ease-out,opacity 500ms linear;
	-webkit-transition: width 600ms ease-out,opacity 500ms linear;
	transition: width 1000ms ease-out,opacity 500ms linear;
  
  b, i {
    position: absolute;
    top: 0;
    height: 3px;
    
    -moz-box-shadow: #777777 1px 0 6px 1px;
    -ms-box-shadow: #777777 1px 0 6px 1px;
    -webkit-box-shadow: #777777 1px 0 6px 1px;
    box-shadow: #777777 1px 0 6px 1px;
    
    -moz-border-radius: 100%;
    -webkit-border-radius: 100%;
    border-radius: 100%;
  }

  b {
    clip: rect(-6px, 22px, 14px, 10px);
    opacity: .6;
    width: 20px;
    right: 0;
  }
  
  i {
    clip: rect(-6px, 90px, 14px, -6px);
  	opacity: .6;
    width: 180px;
    right: -80px;
  }    
}
</style>
<body>
      <!-- trigger the demo -->
  <p>
  </p>
  <button onclick="load()">click</button>
</body>
</html>
<script>
// in this demo, it is triggered by a click event
// you may use any trigger in your apps
 function load () {
  if ($("#progress").length === 0) {
    // inject the bar..
    $("body").append($("<div><b></b><i></i></div>").attr("id", "progress"));
    
    // animate the progress..
    $("#progress").width("101%").delay(10000).fadeOut(1000, function() {
      // ..then remove it.
     $("this").remove();
    });  
  }
 }
</script>
