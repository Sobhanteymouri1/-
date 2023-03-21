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
 <h2>شب پر ستاره| De sterrennach

</h2>
 <hr>
 <p> تابلوی شب پرستاره اثر ونسان ونگوگ معروفترین صحنه تاریخ هنر از آسمان است و یکی از آن تابلوهایی است که بازدیدکنندگان علاوه بر تماشا دوست دارند در آن قدم بزنند. دلیل آن هم روشن است چون در این شاهکار پست امپرسیونیستی یک انرژی خاص در جریان است که هر بیننده‌ای را در خود غرق می‌کند. آسمانی که ون گوگ در این نقاشی تصویر کرده به هیچ وجه راکد و دور از دسترس نیست بلکه زنده است و در حال حرکت، ستارگان و ماه این آسمان در حلقه‌هایی زرد به روشنی می‌درخشند و یک روستا زیر پتوی آسمان درخشان آرام خوابیده است.
در کنار ویژگی‌های ظاهری این نقاشی، افسانه‌های زیادی درباره آن وجود دارد. ون گوگ این تابلو را در یک بیمارستان روانی در جنوب فرانسه کشید. بیمارستانی که پس آن که به سرش زد و گوشش را برید داوطلبانه خود را در آن بستری کرده بود. بسیاری این تابلو را نمود تفکرات ون گوگ درباره فناپذیری خویش می‌دانند چون درخت سرو آن زمان نمادی رایج از مرگ و سوگواری بود و خود ون گوگ هم ستاره‌ها را با مفهوم جهان پس از مرگ پیوند داده است. وی زمانی در یک نامه به برادرش، تئو، اینطور نوشته بود: «درست همانطور که با قطار به تاراسکان یا روآن می‌رویم، برای رسیدن به یک ستاره سوار قطار مرگ می‌شویم.»  
اگرچه این تابلو را می‌توان به روش‌های مختلف تفسیر کرد اما این اثر همچنین محصول یکی از پربارترین دوره‌های حرفه هنری ون گوگ نیز هست. از طرفی بیمارستان روانی که این هنرمند در آن بستری بود بیماران را تشویق می‌کرد در طبیعت وقت بگذرانند و از طرف دیگر برادر ون گوگ تدبیری اتخاد کرده بود که به وی یک استودیو و زمان زیادی برای نقاشی کردن اختصاص داده شود.
ون گوگ در امنیت بیمارستان روانی برخی از درخشان ترین و بی سرو صدا ترین لحظات زندگی خود را تجربه کرد. وی تابلوی معروف گل‌های زنبق را در چند روز اول اقامت خود در این بیمارستان کشید و بعدها تابلوی شب پرستاره را نیز در این بیمارستان تکمیل کرد. با وجود شهرت بالای تابلوی شب پرستاره این تابلو هنوز پر از شگفتی و حقایق غافلگیر کننده است که یا از نظر دورمانده یا مورد سوءبرداشت قرار گرفته‌اند
یک تصور غلط درباره تابلوی شب پرستاره این است که ونگوگ این شاهکار را در حالی که از پنجره اتاقش در بیمارستان روانی به آسمان نگاه می کرد، کشید. اگرچه حقیقت به اندازه باور اشتباهی که وجود دارد رمانتیک نیست اما ونگوگ در بیمارستان برای نقاشی یک استودیوی جداگانه داشت که صبح ها در آن کار می کرد و اصلا پنجره نداشت! البته ونگوگ چند طرح اولیه از پنجره اتاقش ثبت کرده بود و در تابلوی شب پرستاره رشته کوه کم ارتفاعی که از پنجره اتاق این هنرمند دیده می شد نیز به چشم می‌خورد. نقاشی شب پرستاره ترکیبی از تصاویر واقعی و تخیلی است: ون گوگ روستایی را که از پنجره اتاقش می دید روی بوم آورد اما درباره آسمان کمی تخیل به خرج داد. البته برخی جزئیات درباره آسمان نیز از لحاظ تاریخی دقیق هستند؛ اخترشناسان آن جسم سماوی را که در سمت چپ بخش مرکزی بوم وجود دارد، به عنوان سیاره زهره شناسایی کرده اند که در تابستان ۱۸۸۹ به طور خاصی درخشان بود. همچنین صورت های فلکی چون ستاره سروش، ذات‌الکُرسی و اسب بالدار نیز در جای درستی قرار داده شده اند. حتی برخی اخترشناسان تا آنجا پیش رفتند که بگویند صحنه نقاشی شب پرستاره مربوط به ساعت ۴ صبح روز ۱۹ ژوئن سال ۱۸۸۹ است. 
</p>
<center>
<img SRC= "11-1300x731.jpg"  width="280" height="180"  />
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