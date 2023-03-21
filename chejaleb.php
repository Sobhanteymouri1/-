<!DOCTYPE html>
<html lang="fa-IR">
<head>
<title>مجله اینترنتی چه جالب-نگارین رایق</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* تفکیک سایز تگ ها */
*{
 box-sizing: border-box;
}

/* محبوب ترین دسته ها */
body{
 font-family: tahoma, sans-serif;
 margin: 0;
 direction:rtl;
 background-color:#f2f2f2;
}

/* هدر */
.header{
 padding: 20px;
 text-align: center;
 background: #a4441f;
 background: linear-gradient(90deg, #a906d7 0%, #fb0763 100%);
 color: #fff;
 background-image: url(https://s2.uupload.ir/files/bbb_8njn.png);
 background-attachment: fixed;
 background-position: center bottom;
 background-size: cover;
}
.Pedar{
padding: 20px;
 background-image: url("files/bg2.jpg");
 background-size: cover;
 height: 20vh;
 position: relative;
}
.Pedar h2{
 background-color: #fff;
 color: #000;
 padding: 10px;
 width: 80%;
 font-size: 70px; 
 text-align: center;
 position: absolute;
 left: 50%;
 transform: translate(-50%, -50%);
 mix-blend-mode: screen;
}

.header h2{
 font-size: 30px;
}

/* منوی اصلی */
.navbar{
 background-color: #333;
}

/* آیتم های منو */
.navbar a{
 float: right;
 display: block;
 color: black;
 text-align: center;
 padding: 14px 20px;
 text-decoration: none;
 font-size:15px;
}

/* آیتم شناور شده بسمت چپ */
.navbar a.right {
  float: left;
}

/* وقتی ماوس میره روی آیتم های منو */
.navbar a:hover{
 background-color: #f70769;
 color: #fff;
}

/* آیتم فعال - صفحه جاری */
.navbar a.active{
 background-color: #000;
 color: #fff;
}

/* باکس اصلی که شامل ستون ها و باکس مطالب می باشد */
.row{  
 display: -ms-flexbox; 
 display: flex;
 -ms-flex-wrap: wrap; 
 background-color:#FDCA29;
 flex-wrap: wrap;
}
/* ستون های سمت راست و چپ */
.side{
 -ms-flex: 25%;
 flex: 25%;

}

/* باکس های داخل ستون های سمت راست و چپ */
.side .side-box{
 background-color: #2E4F4F;
  width: 430px;
  height:530px;
 box-shadow: 2px 5px 30px rgba(0,0,0,.1);
}

/* تگ های اچ 3 داخل ستون های سمت راست و چپ */
.side h3{
 font-size:18px;
 background-color: #A4441F;
 background: linear-gradient(90deg, #0E8388 0%, #0E8388 100%);
 padding: 7px;
 border-radius: 40px;
 color: #fff;
 text-align: center;
}


/* فوتر */
.footer{
 padding: 20px;
 text-align: center;
 background-color: #fff;
 background: linear-gradient(90deg, #000 0%, #000 100%);
 color:#fff;
}

/* لینک های داخل فوتر */
.footer a{
 text-decoration:none;
 color:#fff;
}

/* وقتی ماوس میره روی لینک های داخل فوتر */
.footer a:hover{
 text-decoration:underline;
}

/* باکس مطالب */
.mypost{
 background-color:#fff;
 box-shadow: 2px 5px 30px rgba(0,0,0,.1);
 padding:20px;
 margin:10px 0;
}

/* لینک های داخل باکس مطالب */
.mypost a{
 text-decoration:none;
 color:#000;
}

/* وقتی ماوس میره روی لینک های داخل باکس مطالب */
.mypost a:hover{
 text-decoration:underline;
 color:#000;
}

/* خط جداکننده مطالب */
hr{
 border:2px solid #f2f2f2;
 margin:20px 0;
}

/* وقتی با ماوس متن رو انتخاب میکنیم */
::selection{
 background-color:#5db616;
 color:#fff;
}

-moz-::selection{
 background-color:#5db616;
 color:#fff;
}

/* دکمه ادامه مطلب */
.more-post{
 text-align:center;
 padding:10px;
 background: linear-gradient(90deg, #a906d7 0%, #fb0763 100%);
 background-color:#f2f2f2;
}

/* لینک های داخل دکمه ادامه مطلب */
.more-post a{
 text-decoration:none;
 color:#fff;
}

/* محبوب ترین دسته ها */
ul.MyList{
 margin:0;
 padding:0;
 list-style-type:none;
}

ul.MyList li{
 background-color:#f2f2f2;
 margin:5px 0;
 padding:5px 10px;
 border-radius:25px;
}

ul.MyList li a{
 text-decoration:none;
 color:#000;
}

ul.MyList li:hover{
 background-color:#123456;
 color:#fff;
}

ul.MyList li:hover a{
 color:#fff;
}

/* برای واکنش گرایی */
/* روی موبایل ستون های سمت راست و چپ و وسط میوفتن زیرهم */
@media screen and (max-width: 700px) {
  .row{   
    flex-direction: column;
  }
}

/* برای واکنش گرایی */
/* آیتم های منو بصورت تمام عرض نمایش داده میشن */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
  .side{
   margin: 10px;
  }
}


.MyButton1{
 text-decoration:none;
 background-color:#2196f3;
 background-image: url(https://export-download.canva.com/rNilA/DAFdotrNilA/40/0/0001-1231634874.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230320%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230320T184408Z&X-Amz-Expires=70832&X-Amz-Signature=ef59d5c1a9270dabc4f70ee798a57ed3fb9bfe47256ddedab3a4a7876aef2eb7&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27%25DA%25AF%25DB%258C%25D8%25AA%25D8%25A7%25D8%25B1%25DB%258C%25D8%25B3%25D8%25AA%2520%25D9%25BE%25DB%258C%25D8%25B1%2520old%2520guitarist.png&response-expires=Tue%2C%2021%20Mar%202023%2014%3A24%3A40%20GMT);
 color:#fff;
  width: 430px;
  height:530px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
}

.MyButton1:hover{
 background-image: url(https://export-download.canva.com/rNilA/DAFdotrNilA/39/0/0002-1227682504.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230321%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230321T002224Z&X-Amz-Expires=44410&X-Amz-Signature=1b273f765a99d1c904239eb8cfc6eadf37ccd03c5ba465f7dc0158b6e409cb19&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27%25DA%25AF%25DB%258C%25D8%25AA%25D8%25A7%25D8%25B1%25DB%258C%25D8%25B3%25D8%25AA%2520%25D9%25BE%25DB%258C%25D8%25B1%2520old%2520guitarist.png&response-expires=Tue%2C%2021%20Mar%202023%2012%3A42%3A34%20GMT);
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}
.MyButton2{
 text-decoration:none;
 background-color:#2196f3;
 color:#fff;
  width: 430px;
  height:530px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
}

.MyButton2:hover{
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}
.MyButton3{
 text-decoration:none;
 background-color:#2196f3;
 color:#fff;
  width: 430px;
  height:530px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
}

.MyButton3:hover{
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}
.MyButton4{
 text-decoration:none;
 background-color:#2196f3;
  background-repeat:no-repeat;
background-size:100%;
 color:#fff;
  width: 430px;
  height:530px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
}

.MyButton4:hover{
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}
.MyButton5{
 text-decoration:none;
 background-color:#2196f3;
  background-repeat:no-repeat;
 color:#fff;
  width: 430px;
  height:530px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
}

.MyButton5:hover{
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}
.MyButton6{
 text-decoration:none;
 background-color:#2196f3;
 background-size:100%;

  background-repeat:no-repeat;
 color:#fff;
  width: 430px;
  height:530px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
}

.MyButton6:hover{
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}

.MyButton7{
 text-decoration:none;
 background-color:#2196f3;
 background-image: url(https://export-download.canva.com/rNilA/DAFdotrNilA/28/0/0002-1223564095.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230321%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230321T073854Z&X-Amz-Expires=14505&X-Amz-Signature=3b6b540ef87f1963a86eb97b59ad5feabdb2b5484451be250e5217221993015a&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27%25DA%25AF%25DB%258C%25D8%25AA%25D8%25A7%25D8%25B1%25DB%258C%25D8%25B3%25D8%25AA%2520%25D9%25BE%25DB%258C%25D8%25B1%2520old%2520guitarist.png&response-expires=Tue%2C%2021%20Mar%202023%2011%3A40%3A39%20GMT);
 background-size:100%;
  background-repeat:no-repeat;
 color:#fff;
  width: 430px;
  height:530px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
}

.MyButton7:hover{
background-image: url(https://export-download.canva.com/rNilA/DAFdotrNilA/27/0/0001-1223442170.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230320%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230320T141917Z&X-Amz-Expires=76372&X-Amz-Signature=949aba7bbb96a28028d6d033018a53951ce00307c691b46130d3103e57ae9c53&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27%25DA%25AF%25DB%258C%25D8%25AA%25D8%25A7%25D8%25B1%25DB%258C%25D8%25B3%25D8%25AA%2520%25D9%25BE%25DB%258C%25D8%25B1%2520old%2520guitarist.png&response-expires=Tue%2C%2021%20Mar%202023%2011%3A32%3A09%20GMT);
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}
.MyButton8{
 text-decoration:none;
 background-color:#2196f3;
 background-size:100%;
  background-repeat:no-repeat;
 color:#fff;
  width: 430px;
  height:530px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
}

.MyButton8:hover{
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}
nav ul ul {
	display: none;
}

nav ul li:hover > ul {
	display: block;
}
nav ul {
	background: #f1f4f7;
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 20px;
	border-radius: 10px;
	list-style: none;
	position: relative;
	display: inline-table;
}
nav ul:after {
	content: "";
	clear: both;
	display: block;
}
nav ul li {
	float: right;
	position: relative;
	font-weight: bold;
}

nav ul li:hover {
	background: #a70101;
}

nav ul li:hover a {
	color: #fff;
}

nav ul li a {
	display: block;
	padding: 15px 32px;
	color: #4e4e4e;
	text-decoration: none;
}
nav ul ul {
	background: #9c0000;
	border-radius: 0px;
	padding: 0;
	position: absolute;
	top: 100%;
	right: 0;
	width: 200px;
}
nav ul ul li {
	float: none;
	border-top: 1px solid #940000;
	border-bottom: 1px solid #940000;
	position: relative;
}
nav ul ul li a {
	padding: 15px 40px;
	color: #fff;
}	
nav ul ul li a:hover {
	background: #112f44;
}
nav ul ul ul {
	position: absolute;
	right: 100%;
	top:0;
}
</style>
</head>
<body>
<center>
<div class="header">

 
<div class="Pedar">
 <h2>مجله اینترنتی چه جـــالب</h2>
</div>
</div>

<div class="navbar">
<nav>
	<ul>
		<li><a href="chejaleb.php">خانه</a></li>
		<li><a href="#">هنری</a>
			<ul>
				<li><a href="negarin.php">نگارین رایق</a></li>
				</li>
			</ul>
		</li>
		<li><a href="#">ورزشی</a>
		</li>
		<li><a href="#">علمی</a>
		</li>
		<li><a href="ma.php">تماس با ما</a></li>
	</ul>
</nav>
</div>
بر روی تصویر مورد نظر کلیک کنید.
<div class="row">




<div class="side">

 <div class="side-box">
  <p><a href="negarin.php" class="MyButton1"></a></p>
 </div>
	 <div class="side-box"><center>

  <p><a href="javascript:alert('برای بخش مورد نظر ، فعلا مطلبی بارگذاری نشده.');" class="MyButton2"></a>
</p>

</p></center>
 </div>
	

</div>







<div class="side">

 <div class="side-box">
  <p><a href="javascript:alert('برای بخش مورد نظر ، فعلا مطلبی بارگذاری نشده.');" class="MyButton2"></a>
</p>
 </div>
	 <div class="side-box"><center>
  <p>
  <p>
<a href="javascript:alert('برای بخش مورد نظر ، فعلا مطلبی بارگذاری نشده.');" class="MyButton3"></a>
</p>



</p></center>
 </div>
	
</div>



<div class="side">

 <div class="side-box">
  
  <p><a href="javascript:alert('برای بخش مورد نظر ، فعلا مطلبی بارگذاری نشده.');" class="MyButton4"></a></p>
 </div>
	
 <div class="side-box">
<p><a href="javascript:alert('برای بخش مورد نظر ، فعلا مطلبی بارگذاری نشده.');" class="MyButton5"></a></p> </div>
	
</div>
  
</div>

<div class="footer">
 <p>حاجت به نگاریدن نبود رخ زیبا را</p>
 <br>
مجله اینترنتی چه جالب
</div>
</center>

</body>
</html>