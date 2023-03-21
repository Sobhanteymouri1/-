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
.MyButton{
 text-decoration:none;
 background-color:#2196f3;
 background-image: url(https://bestfarsi.ir/wp-content/uploads/Women-of-the-Rain-Painting.jpg);
 color:#fff;
  width: 430px;
  height:530px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
}
.MyButton:hover{
 background-color:#00b185;
 background-image: url(https://export-download.canva.com/rNilA/DAFdotrNilA/8/0/0001-1146240239.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230319%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230319T131516Z&X-Amz-Expires=74249&X-Amz-Signature=bcc8cf980b59869ddf69f2669ca2101afab76048a35a141380e0b9ca047e2a24&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27%25D8%25B2%25D9%2586%2520%25D8%25A8%25D8%25A7%25D8%25B1%25D8%25A7%25D9%2586%25DB%258C%2520%2520Women%2520Of%2520The%2520Rain.png&response-expires=Mon%2C%2020%20Mar%202023%2009%3A52%3A45%20GMT);
 color:#fff;
   width: 430px;
   height:530px;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}

.MyButton1{
 text-decoration:none;
 background-color:#2196f3;
 background-image: url(https://bestfarsi.ir/wp-content/uploads/Garcon-a-la-pipe.jpg);
 color:#fff;
  width: 430px;
  height:530px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
}

.MyButton1:hover{
 background-image: url(https://s2.uupload.ir/files/پسری_با_پیپ_garçon_à_la_pipe_5nfn.png);
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}
.MyButton2{
 text-decoration:none;
 background-color:#2196f3;
 background-image: url(https://bestfarsi.ir/wp-content/uploads/The-Hands-Resist-Him.jpg);
 color:#fff;
  width: 430px;
  height:530px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
}

.MyButton2:hover{
 background-image: url(https://export-download.canva.com/rNilA/DAFdotrNilA/10/0/0001-43611006557.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230319%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230319T094526Z&X-Amz-Expires=87304&X-Amz-Signature=9ea97b3d17d5886461df6133fd062615192b0954852c2b4bddc520a6a1b4180b&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27%25D8%25B2%25D9%2586%2520%25D8%25A8%25D8%25A7%25D8%25B1%25D8%25A7%25D9%2586%25DB%258C%2520%2520Women%2520Of%2520The%2520Rain.png&response-expires=Mon%2C%2020%20Mar%202023%2010%3A00%3A30%20GMT);
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}
.MyButton3{
 text-decoration:none;
 background-color:#2196f3;
 background-image: url(https://images.khabaronline.ir//images/2014/6/14-6-10-214135The_Scream.jpg);
 color:#fff;
  width: 430px;
  height:530px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
}

.MyButton3:hover{
 background-image: url(https://export-download.canva.com/rNilA/DAFdotrNilA/13/0/0001-1151914441.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230319%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230319T191553Z&X-Amz-Expires=59809&X-Amz-Signature=a967bc8c7054a828df8482ec177d2f7e5e1501fe209b265eedc04a47fb6a2935&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27%2520%25D8%25AA%25D8%25A7%25D8%25A8%25D9%2584%25D9%2588%2520%25D8%25AC%25DB%258C%25D8%25BA%2520%2520The%2520Scream.png&response-expires=Mon%2C%2020%20Mar%202023%2011%3A52%3A42%20GMT);
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}
.MyButton4{
 text-decoration:none;
 background-color:#2196f3;
 background-image: url(q.jpg);
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
background-image: url(https://s2.uupload.ir/files/آیزل_ورث_مونالیزا_painting_by_isleworth_mona_lisa_ni8q.png);
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}
.MyButton5{
 text-decoration:none;
 background-color:#2196f3;
 background-image: url(https://export-download.canva.com/rNilA/DAFdotrNilA/23/0/0002-43684410514.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230320%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230320T230723Z&X-Amz-Expires=39326&X-Amz-Signature=a95fb8d1953830fa8ac87cdf7ec84a2658b8d7701c4b0eccd58f86c59b9336fd&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27%25D8%25B4%25D8%25A8%2520%25D9%25BE%25D8%25B1%2520%25D8%25B3%25D8%25AA%25D8%25A7%25D8%25B1%25D9%2587%2520De%2520sterrennach.png&response-expires=Tue%2C%2021%20Mar%202023%2010%3A02%3A49%20GMT);
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
background-image: url(https://export-download.canva.com/rNilA/DAFdotrNilA/21/0/0001-43684135985.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230320%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230320T153639Z&X-Amz-Expires=66308&X-Amz-Signature=963235462b371af5b1534438289787164fd7e65c45995e555b000a4f1f91c3c1&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27%25D8%25B4%25D8%25A8%2520%25D9%25BE%25D8%25B1%2520%25D8%25B3%25D8%25AA%25D8%25A7%25D8%25B1%25D9%2587%2520De%2520sterrennach.png&response-expires=Tue%2C%2021%20Mar%202023%2010%3A01%3A47%20GMT);
 background-color:#00b185;
 color:#fff;
 box-shadow: 0 6px 4px rgba(5,5,5,.9),0 5px 7px rgba(5,5,5,.9);
}
.MyButton6{
 text-decoration:none;
 background-color:#2196f3;
 background-image: url(https://files.virgool.io/upload/users/12302/posts/mpjdxkubuvub/auxbcnfcbss3.jpeg);
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
background-image: url(https://export-download.canva.com/rNilA/DAFdotrNilA/26/0/0001-43685790640.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230321%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230321T084030Z&X-Amz-Expires=7044&X-Amz-Signature=43599c511ad6ca1dd3d7417f28dd505d16c492e2f4346616690cfb1a689c1996&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27%25DA%25AF%25DB%258C%25D8%25AA%25D8%25A7%25D8%25B1%25DB%258C%25D8%25B3%25D8%25AA%2520%25D9%25BE%25DB%258C%25D8%25B1%2520old%2520guitarist.png&response-expires=Tue%2C%2021%20Mar%202023%2010%3A37%3A54%20GMT);
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
 background-image: url(https://export-download.canva.com/rNilA/DAFdotrNilA/33/0/0002-1224807077.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230320%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230320T202751Z&X-Amz-Expires=57270&X-Amz-Signature=d2553484e83c644104e082f43bb1c6e5db962dbb9ca510575b1091ea252051ec&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27%25DA%25AF%25DB%258C%25D8%25AA%25D8%25A7%25D8%25B1%25DB%258C%25D8%25B3%25D8%25AA%2520%25D9%25BE%25DB%258C%25D8%25B1%2520old%2520guitarist.png&response-expires=Tue%2C%2021%20Mar%202023%2012%3A22%3A21%20GMT);
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
background-image: url(https://export-download.canva.com/rNilA/DAFdotrNilA/31/0/0001-43688303263.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJHKNGJLC2J7OGJ6Q%2F20230320%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230320T131906Z&X-Amz-Expires=80161&X-Amz-Signature=cc8753825ab95a69b904da7a1755e04748d2ff5c3794f21192ef5a4365b9a5e6&X-Amz-SignedHeaders=host&response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27%25DA%25AF%25DB%258C%25D8%25AA%25D8%25A7%25D8%25B1%25DB%258C%25D8%25B3%25D8%25AA%2520%25D9%25BE%25DB%258C%25D8%25B1%2520old%2520guitarist.png&response-expires=Tue%2C%2021%20Mar%202023%2011%3A35%3A07%20GMT);
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
 <h2>مجله اینترنتی چه جالب <br>نگارین رایق</h2>
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
  <p><a href="pesaripip.php" class="MyButton1"></a></p>
 </div>
	 <div class="side-box"><center>
  <p>
<a href="zanbarani.php" class="MyButton"></a>

</a>
</p></center>
 </div>
	
 
	
 <div class="side-box">


  <p><a href="gutarist.php" class="MyButton6"></a></p>

 </div>

</div>







<div class="side">

 <div class="side-box">
  <p><a href="dastha.php" class="MyButton2"></a>
</p>
 </div>
	 <div class="side-box"><center>
  <p>
<a href="gigh.php" class="MyButton3"></a>


</p></center>
 </div>
	
 
	
 <div class="side-box">
  <p><a href="vengog.php" class="MyButton8"></a></p>

 </div>
</div>



<div class="side">

 <div class="side-box">
  
  <p><a href="monaliza.php" class="MyButton4"></a></p>
 </div>
	
 <div class="side-box">
<p><a href="shabpor.php" class="MyButton5"></a></p> </div>
	
 <div class="side-box">
  <p><a href="safeh.php" class="MyButton7"></a></p>

 </div>
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