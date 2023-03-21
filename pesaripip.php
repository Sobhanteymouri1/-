<!DOCTYPE html>
<html lang="fa-IR">
<head>
<title>قالب ساده HTML - طراحی شده با DIV</title>
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
 background-color: #A4441F;
 background: linear-gradient(90deg, #000 0%,  #000 100%);
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
/* ستون وسطی - مطالب سایت */
.main{   
 -ms-flex: 50%;
 flex: 50%;
 padding: 0 10px;
}
/* باکس مطالب */
.mypost{
 background-color:#2E4F4F;
 box-shadow: 2px 5px 30px rgba(0,0,0,.1);
 color:white;
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
  width: 530px;
  height:650px;
 text-align:center;
 transition:0.4s;
 display: inline-block;
 border-radius:6px;
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
.MyButton:hover{
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
 <h2>وبسایت هنری نگارین رایق</h2>
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

<div class="row">
</center>
<div class="mypost">
 <h2>پسری با پیپ | garçon à la pipe</h2>
 <hr>
 <p> پسری با پیپ (به فرانسوی: Garçon à la pipe) از آثار نقاش اسپانیایی پابلو پیکاسو است که پیکاسوی ۲۴ ساله، آن را در سال ۱۹۰۵ و اندکی پس از رسیدن به Montmartre در پاریس خلق کرد.
این اثر در دومین دوره طبقه‌بندی سیر تکامل آثار هنری پیکاسو موسوم به دوره سرخ (۱۹۰۴ - ۱۹۰۶ میلادی) کشیده شده‌است، زمانی که پیکاسوی جوان از زمینه سرد و دلگیر آبی به زمینه‌ای گرم و دلگشا با ترکیبی از قرمز و نارنجی روی آورد. در این پرتره، پیکاسو پسری جوان به نام «لویی کوچک» (به فرانسوی: Petit Louis) را به تصویر کشیده‌است که معمولاً در اطراف استودیو وی در Montmartre وقت را به بطالت می‌گذارند. پسرک لباسی یکپارچه آبی بر تن دارد و پیپی را قلم گونه در دست گرفته‌است در حالی که تاجی از گل سرخ بر سر دارد.

با این که این اثر در زمره کارهای درجه ۲ و نه چندان مشهور پیکاسو قرار دارد، نمی‌توان از تلاش نقاش در تبدیل پسربچه پاریسی به قدیسی خدای‌گونه در نهایت آرامش و زیبایی گذشت. تلاشی که در طرح زیبای تاج گل سرخ بر سر پسربچه، پس زمینه‌ای کلاسیک از دوره سرخ و ترکیب آن با لباس تماماً آبی وی که گریزی است به دوره آبی، شکل گرفته‌است.

این اثر در سال ۲۰۰۴ میلادی و در جریان یک حراجی در نیویورک به قیمت باورنکردنی ۱۰۴ میلیون دلار به فروش رفت و برای مدتی رکورددار گران‌ترین اثر هنری جهان باقی ماند. رکورد گران‌ترین اثر هنری جهان، هم‌اکنون در اختیار «شماره ۵، ۱۹۴۸» اثر جکسون پولاک است.

تفاوت بین کیفیت اثر در مقام مقایسه با سایر کارهای پیکاسو و قیمت نجومی آن در زمان خود بحث‌های بسیاری در مورد محدود کردن سقف قیمت حراج آثار هنری با توجه کیفیت، قدمت و تأثیر آن در چرخه پیدایش هنر و به خصوص هنر مدرن ایجاد کرد.
</p>
<center>
<img SRC= "Garcon-a-la-pipe.jpg"  width="180" height="180" />
</center>
 <hr>

</div>



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