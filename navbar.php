<!DOCTYPE html>
<html>
<head>
<meta name="viewport"content="width=device-width, initial-scale=1">
<style>
body
{
font-family:roboto;
}

.sidebar
{
height: 100%;
width: 0;
position: fixed;
z-index: 1;
top: 0;
left: 0;
background-color: white;
overflow-x:hidden;
transition: 0.5s;
padding-top: 60px;
}

.sidebar a
{
padding: 8px 8px 8px 32px;
text-decoration: none;
font-size: 25px;
color: black;
display: block;
transition: 0.3s;
}

.sidebar a:hover {
color: #f1f1f1;
background-color: brown;

.sidebar:openbtn {
position: absolute;
top: 0;
right: 25px;
font-size: 36px;
margin-left: 50px;
}

.openbtn {
font-size: 20px;
cursor: pointer;
background-color: brown;
color: white;
padding: 10px 15px;
border: none;
}

.openbtn:hover {
background-color: orange;
}

#main {
transition: margin-left .5s;
padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the
sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px)
{

    .sidebar {
    padding-top: 15px;
    }
    .sidebar a {
    font-size: 18px;
    }

}

</style>
</head>
<body>
<div id="mySidebar"class="sidebar">
<a href="javascript:void(0)"class="closebtn" onclick="closeNav()">×</a>
<a href="https://favoredonline.com"class="active"><img src="https://Favoredonline.com/images/FavoredOnline.png"width="30px"height="auto"/></a>
<a href="http://favoredonline.com/">Home</a>
<a href="https://favoredonline.com/softdev">Softwares</a>
<a href="https://favoredonline.com/webdesign">Web Templates</a>
<a href="https://techhub.favoredonline.com/">TechHub</a>
</div>
<div id="main">
<button class="openbtn"onclick="openNav()">☰Menu</button>
</div>


<div class="header">
<img src="https://Favoredonline.com/images/FavoredOnline.png"width="50px"height="auto"/>
<a href="https://favoredonline.com/index.php"class="logo">FavoredOnline</a>
</div>
<div class="header-right">
</div>
</body>
</html>