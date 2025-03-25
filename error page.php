<?php include('server.php')
<!DOCTYPE html>
<!-- saved from url=(0040)file:///C:/Users/dhana/error%20page.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device width, initialscale=1.0">
<title>404 Error Page</title>
<link rel="stylesheet" href="file:///C:/Users/dhana/404styles.css"> </head>
<body>
    <style>
        body {
margin: 0;
padding: 0;
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
background-color: #1c1c2e;
color: #ffffff;
font-family: Arial, sans-serif; }
.error-container {
text-align: center;
}
h1 {
font-size: 100px;
margin: 0;
}
p {
font-size: 20px;
margin-bottom: 20px; }
.buttons {
margin-top: 20px;
}
.btn {
padding: 10px 20px;
margin: 0 10px;
background-color: #28a745; color: white;
text-decoration: none; borderradius: 5px;
}
.btn:hover {
background-color: #218838; }
.hexagons {
margin-top: 40px;
display: flex;
justify-content: center;
gap: 10px;
}
.hexagon {
width: 50px;
height: 50px;
background: transparent;
border: 2px solid #28a745;
clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0%
25%);
animation: float 4s infinite ease-in-out;
}
.hexagon:nth-child(2) {
border-color: #ff5722;
animation-delay: 1s;
}
.hexagon:nth-child(3) {
border-color: #2196f3;
animation-delay: 2s;
}
.hexagon:nth-child(4) {
border-color: #ffeb3b;
animation-delay: 3s;
}
@keyframes float {
0%, 100% {
transform: translateY(0);
}
50% {
transform: translateY(-10px);
}
}
    </style>
<div class="error-container">
<h1>404</h1>
<p>Page not found</p>
<div class="buttons">
<a href="file:///C:/Users/dhana/error%20page.html#" class="btn">Go Back</a> <a href="file:///C:/Users/dhana/index.html" class="btn">Go to Home Page</a>
</div>
<div class="hexagons">
<div class="hexagon"></div>
<div class="hexagon"></div>
<div class="hexagon"></div>
<div class="hexagon"></div>
</div>
</div>

 </body></html>
