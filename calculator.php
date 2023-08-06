<html>
<head>
<style>
body{
  background-color:#8B0000;
}
#box{color:#B22222;
background-color:#F8F8FF;
box-shadow:8px 8px 8px black;
border-radius:5px;
text-shadow:4px 5px 4px black;
}
#btn{height:40px;
width:39px;
background-color:#B22222;
font-size:29px;
color:#F8F8FF;
margin-left:20px;
}
#btn:hover{transform:rotate(180deg);
transition:2s;

}
#h3{background-color:#B22222;
color:#F8F8FF;

}
</style>

</head>
<body "C:\xampp\htdocs\img\calcuimg.jpg">
<center> <fieldset style="width:50%;"id="box"> 
<form method="POST">
<h1>Mini Calculator </h1>
<h2>Enter Frist Digit</h2> <br/>
<input type="number"name="one"> <br/> <br/> 

<h2>Enter Second Digit</h2> <br/>
<input type="number"name="two"> <br/> <br/> 
<input type="submit"value="+"name="sum"id="btn">
<input type="submit"value="-"name="sub"id="btn">
<input type="submit"value="*"name="multi"id="btn">
<input type="submit"value="/"name="div"id="btn">
<input type="submit"value="%"name="mod"id="btn">
</form>

<?php
if(isset($_POST['sum']))
{$a=$_POST['one'];
$b=$_POST['two'];
$c=$a+$b;
echo"<h3 id='h3'>You'r Result is $a+$b=$c</h3>";
}

if(isset($_POST['sub']))
{$a=$_POST['one'];
$b=$_POST['two'];
$c=$a-$b;
echo"<h3 id='h3'>You'r Result is $a-$b=$c</h3>";
}

if(isset($_POST['multi']))
{$a=$_POST['one'];
$b=$_POST['two'];
$c=$a*$b;
echo"<h3 id='h3'>You'r Result is $a*$b=$c</h3>";
}

if(isset($_POST['div']))
{$a=$_POST['one'];
$b=$_POST['two'];
$c=$a/$b;
echo"<h3 id='h3'>You'r Result is $a/$b=$c</h3>";
}

if(isset($_POST['mod']))
{$a=$_POST['one'];
$b=$_POST['two'];
$c=$a%$b;
echo"<h3 id='h3'>You'r Result is $a%$b=$c</h3>";
}
?></center><br/> <br/> <br/> <br/> <br/>
<center>
<div>
<h3><font-color="white">created by @KHUSHBU SHARMA</font><h3>
</div>
</center>
</body>
</html>