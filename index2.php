<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
    <meta name="description" content="This is an awesome website!">
    <meta name="author" content="The genius">
    <meta name="keywords" content="HTML, page, eternal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
    href = "../Project/index.css">
  </head>
  <body onload="time() , resize() , screensize() , himsg() " onunload="confirmLeave()" onresize="resize()">
<script>
  function himsg(){
    <?php
      $username = $_POST["username"];
      $password = $_POST["password"];
      if ($username == "" && $password == ""){
        echo 'const person = window.prompt("Would you please enter your name?","the genius");
        if (person == null || person == ""){alert("Stay Healthy and Stay Wealthy!");
      }else{if( person == "ysw" ){
        var sorry = setInterval(()=>{
          var input = window.prompt("Are you sure you want to leave?");
            console.log(input);
          if (input == "Sorry, I am wrong."){
            clearInterval(sorry);
            windowsopening(5);}
        } ,100);

      }else{
        alert("Hello " + person +" , Nice to see you! \nStay Healthy and Stay Wealthy!")
      }
    }';}
      ?>

}
  function windowsopening(i){
  i*=20;
    for (let p=0 ; p<i ; p+=20){
      window.open("https://www.google.com/","_blank","height=100,left=p,width=100,top=p");
    }
  }
  function confirmLeave(){
    if(window.confirm("Are you sure to leave?")){
      window.close();
    } else {}
  };
  // window.addEventListener("beforeunload", confirmLeave());
  // window.onbeforeunload = confirmLeave();
  </script>
    <div class="bar1">
      <div class="bar11">
        <a id="firstbar" href="../Project/index.html">
          <div class="barblock1" style="order:1";
          flex-grow:0;flex-shrink:1;flex-basis:80px;
          align-self:center>
          Home</div></a>
          <a id="firstbar" href="https://www.google.com/search?q=colour+picker&oq=colou&aqs=chrome.0.69i59j69i57j0l4j69i60l2.3099j0j9&sourceid=chrome&ie=UTF-8"
          target="_blank">
            <div class="barblock1" style="order:2";
            flex-grow:0;flex-shrink:1;flex-basis:80px;
            align-self:center>
            Calendar</div></a>
      </div>
      <div class="bar12">
        <a id="firstbar" href="http://www.google.com" target="_blank">
          <div class="barblock1" style="order:4";
          flex-grow:0;flex-shrink:1;flex-basis:80px;
          align-self:center>
          Google</div></a>
          <a id="firstbar" href="http://www.plktytc.edu.hk" target="_blank">
            <div class="barblock1" style="order:5";
            flex-grow:0;flex-shrink:1;flex-basis:80px;
            align-self:center>
            TYT</div></a>
          <a id="firstbar" href="#" target="_blank">
            <div class="barblock1" style="order:6";
            flex-grow:0;flex-shrink:1;flex-basis:80px;
            align-self:center>
            Codes</div></a>
        </div>
        <!-- Notes on FlexBox -->
          <!-- flex-grow:[int]
          default=0; the larger the flex-grow value,
          the larger proportion of space the block gets.
          the proportion is relative to the other
          flex-grow value-->
          <!-- flex-shrink:[int]
          default value = 1; 0= do not shrink
          the larger the flex-shrink value, the
          larger the value shrinks when the window is too
          small and exceed the flex-basis-->
          <!-- flex-basis:[int]
          the flex-basis is the smallest space a-
          cell takes -->
          <!-- align-self:align the thing verticlally:
          flex-start=top,flex-end=bottom,center=center;
          baseline=top,stretch=make the box as high
          as the full height-->
          <!-- Shorthand:
          flex: 1 1 100px
          where the format = grow shrink basis-->
      </div>
    <!-- <div id="barline"></div> -->
      <hr>
      <div id="firstpage">
      <br>
      <br>
      <br>
      <br>
      <h1 id="page1line1">Eternity Comes to Those Who Wait</h1>
      <h2 id="page1line2">A Radical New Webpage</h2>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
      <hr>
    <a href="../Project/page2_learncss.html" target="_blank"><div id="secondpage">
      <br>
      <h1 id="page2line1">Rise from <span class="bigger9vw">ZERO</span>
        to <span class="bigger9vw">HERO</span> in CSS</h1>
      <h2 id="page2line2"><span class="bigger7vw">Nerd</span>, Created by Nature</h2>
    </div></a>
    <hr>
    <div>
    <div class="page3-grid-container">
      <a href="../Project/index.html" target="_blank"> <div class="grid-item-chinese"><span id=grid-chinese-word>
      中文</span></div></a>
      <a href="../Project/index.html" target="_blank"> <div class="grid-item-english"><span id=grid-english-word>
      English</span></div></a>
      <a href="../Project/index.html" target="_blank"> <div class="grid-item-ls"><span id=grid-ls-word>
      Liberal</span> <span id="grid-ls-word2">Studies</span></div></a>
      <a href="../Project/maths.html" target="_blank"> <div class="grid-item-maths"><span id=grid-maths-word>
      Mathematics</span></div></a>
      <a href="../Project/index.html" target="_blank"> <div class="grid-item-chemistry"><span id=grid-chemistry-word>
      Chemistry</span></div></a>
      <a href="../Project/index.html" target="_blank"> <div class="grid-item-physics"><span id=grid-physics-word>
      Physics</span></div></a>
      <a href="../Project/index.html" target="_blank"> <div class="grid-item-biology"><span id=grid-biology-word>
      Biology</span></div></a>
      <a href="../Project/index.html" target="_blank"> <div class="grid-item-m2"><span id=grid-m2-word>
      Mathematics</span> <span id="grid-m2-word2">Module 2</span></div></a>
      <a href="../Project/index.html" target="_blank"> <div class="grid-item-economics"><span id=grid-economics-word>
      Economics</span></div></a>
      <a href="../Project/games.html" target="_blank"> <div class="grid-item-games"><span id=grid-games-word>
      Games</span></div></a>
    </div>
    <div class="page32-grid-container">
      <a href="../Project/javascript.html"> <div class="grid-item-cpp"><span id=grid-cpp-word>
      </span></div></a>
      <a href="../Project/index.html"> <div class="grid-item-css" ><span id=grid-css-word>
      </span></div></a>
    </div>
    <hr>
    <div class="page4-grid-container">
      <div>What you will learn in Physics: Heat and Gases, Force and Motion, Wave Motions, Electromagnetism, Radioactivity, Astronomy, Atomic World </div>
      <div>What you will learn in Chemistry: Microscopic World I II III, Redox Reaction, Carbon Compound </div>
      <div>What you will learn in Biology: Cell and Structure, Systems in Human Body, Systems in Dicot Plants, Health and Disease, Genetic Materials </div>
      <div>What you will learn in Mathematics Module 2: Surds, Binomial Theorm, Differentiation and Application of Differention, Integration and Application of Integration, Matrices </div>
      <div>What you will learn in Chinese: Lun Ren Lun Xiao Lun Jun Zi, Yue Yang Liu Ji, Liu Guo Ln, Yu Wo Suo Yu Ye, Shi Shuo</div>
      <div onmousedown="modifyText()" id="EnglishNothing">What you will learn in English: Nothing.</div>
      <div>What you will learn in Maths: Quadratic Equation, Variation. Advanced Statistics, Advanced Probability, 3-D, linear programming </div>
      <div>What you will learn in Liberal Studies: Today Hong Kong, Modern China, Globalization, Public Health, Environment and Technology </div>
    </div>
    <script>
    function modifyText(){
      // if(document.getElementById("EnglishNothing").innerHTML == "404 Not Found"){
      //   document.getElementById("EnglishNothing").innerHTML = "Nothing";
      // }else{
        document.getElementById("EnglishNothing").innerHTML = "404 Not Found";
      alert("That was a typo. We have fixed it.")
      setTimeout(()=>document.getElementById("EnglishNothing").innerHTML = "What you will learn in English: Nothing", 5000);
     };
    </script>

        <hr>
      <div>
        <table id="page5-table">
          <thead>
            <caption><h2 id="page5-headline">For the genius Webpage Developer</h2></caption></thead>
          <tbody>
            <tr><th>Username</th>
            <th><form action="index2.php" method="post"><input type="text" name="username" id="usernameInput"></th>
            <tr><th>Password</th>

            <th><input type="password" name="password" id="passwordInput"></th>
            <th><input id="page5-button" type="submit"></form></th>

          </tbody>
        </table>
        <span id="page5-password">Please Enter the UserName and Password</span>
        <div>
        <?php
          $username = $_POST["username"];
          $password = $_POST["password"];
          if ($username == "user" && $password == "pw"){
            echo '<script type="text/javascript">alert("You are so smart!")</script>';
          }else if($username != "" || $password != ""){echo '<spam style="color:yellow; font-size:3vw"> False username or password</spam>';
          }else {};
          ?> </div>
        <?php
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username != "" && $password != ""){
          echo '<script type="text/javascript">document.getElementById("page5-button").scrollIntoView();</script>';}
        ?>
  </div>
  <script>
    var input = document.getElementById("passwordInput");
    input.addEventListener("keyup", ()=>{if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("page5-button").click();
  }
});

  </script>
    <hr>
    <hr>
    <!-- <br>
    <iframe src="../Project/differentiation.cpp" id="page6-cpp"></iframe>
    <hr> -->
    <div>
      <table id="pageendtable">
        <tr id="pageend"><th>The time now is <span id="date">  </span></th>
            <!-- <th><button id="date-refreshing" type="button"
             onclick="document.getElementById('date').innerHTML = Date()">
             Refresh Date and Time</button> -->
           </tr>
        <tr><td colspan="2" rowspan="1" id="websiteURL">Loading</td></tr>
      </table>
  </div>
  <hr>
    <div>
      <table style="color:rgb(120,120,120)">
        <tr><td colspan="2" rowspan="1">Data for nerds:</td></tr>
        <tr><td colspan="2" rowspan="1" id="pagesize">Loading</td></tr>
        <tr><td colspan="2" rowspan="1" id="screensize">Loading</td></tr>
        <tr><td colspan="2" rowspan="1" id="availscreensize">Loading</td></tr>
        <tr><td colspan="2" rowspan="1" id="colorDepth">Loading</td></tr>
        <tr><td colspan="2" rowspan="1" id="pixelDepth">Loading</td></tr>
        <tr><td colspan="2" rowspan="1" id="cookieEnabled">Loading</td></tr>
        <tr><td colspan="2" rowspan="1" id="browserName">Loading</td></tr>
        <tr><td colspan="2" rowspan="1" id="browserCodeName">Loading</td></tr>
        <tr><td colspan="2" rowspan="1" id="browserVersion">Loading</td></tr>
        <tr><td colspan="2" rowspan="1" id="browserPlatform">Loading</td></tr>
        <tr><td colspan="2" rowspan="1" id="browserLanguage">Loading</td></tr>
        <tr><td colspan="2" rowspan="1" id="browserJava">Loading</td></tr>
        <tr><td colspan="2" rowspan="1" onclick="opencpp()">Getting the raw program of differentiation in C++(Click here)</td></tr>

      </table>
    </div>
  <script>
  function time(){window.setInterval(()=>document.getElementById('date').innerHTML = Date(),1000)};
  // function byemsg(){window.alert("Stay Healthy and Stay Wealthy!")};
  </script>
  <script>
  function resize(){
  var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
  document.getElementById("pagesize").innerHTML = "Webpage inner-width = "+ w +
  " | inner-height = " + h +".";}

  function screensize(){
    document.getElementById("screensize").innerHTML =
    "Screen-width = " + screen.width +" | Screen-height = " + screen.height +".";
    document.getElementById("availscreensize").innerHTML =
    "Screen-available-width = " + screen.availWidth +" | Screen-available-height = " + screen.availHeight +".";
    document.getElementById("colorDepth").innerHTML ="Screen-Color-Depth: " + screen.colorDepth;
    document.getElementById("pixelDepth").innerHTML ="Screen-Pixel-Depth: " + screen.pixelDepth;
    document.getElementById("websiteURL").innerHTML = "Page location is " + window.location.href;
    document.getElementById("cookieEnabled").innerHTML ="Cookies-enabled is " + navigator.cookieEnabled;
    document.getElementById("browserName").innerHTML ="Your Browser is " + navigator.appName;
    document.getElementById("browserCodeName").innerHTML ="Your browser code-name  is " + navigator.appCodeName;
    document.getElementById("browserVersion").innerHTML = "Your browser version is "+navigator.appVersion;
    document.getElementById("browserPlatform").innerHTML = "Your operating system is " + navigator.platform;
    document.getElementById("browserLanguage").innerHTML = "Your language is "+ navigator.language;
    document.getElementById("browserJava").innerHTML = "Is java enabled? "+ navigator.javaEnabled();
  }
  function opencpp(){
    if(window.confirm("You may copy the C++ code and paste it in any compiler for running.")){
    // window.location.assign("../Project/differentiation.cpp");
    window.open("../Project/differentiation.cpp");}
    else{}
    // window.close();
    // window.moveTo();
    // window.resizeTo();
  }
  </script>
<!-- <script>
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
</script>
<script>
function getCookie(cname) {
var name = cname + "=";
var decodedCookie = decodeURIComponent(document.cookie);
var ca = decodedCookie.split(';');
for(var i = 0; i <ca.length; i++) {
  var c = ca[i];
  while (c.charAt(0) == ' ') {
    c = c.substring(1);
  }
  if (c.indexOf(name) == 0) {
    return c.substring(name.length, c.length);
  }
}
return "";
}
</script>
<script>
function checkCookie() {
var username = getCookie("username");
if (username != "") {
 alert("Welcome again " + username);
} else {
  username = prompt("Please enter your name:", "");
  if (username != "" && username != null) {
    setCookie("username", username, 365);
  }
}
}
</script> -->
  </body>
</html>

<!-- https://us.123rf.com/450wm/serg036/serg0361706/serg036170600028/79393076-abstract-geometric-background-for-material-modern-design-3d-illustration-works-for-text-and-website-.jpg?ver=6 -->
<!-- <button onclick="myFunction()">
  function(){
  document.getElementById().type === window.document.getElementById("id")
  document.getElementById().name
  document.getElementById().value
  document.getElementById().form.id
  document.getElementById().innerHTML =x //Edit content
  document.getElementById().disabled = true}
  document.getElementById().submit();
  document.getElementById().reset();

  <body onload="fx()"
   onunload="fx()"
   onresize="fx()"
   onmouseover / onmouoseout ="fx()"
   onmousemove/onmouseout = "fx()"
   >>function myFunction(e) {
   x = e.clientX;
   y = e.clientY;
   coor = "Coordinates: (" + x + "," + y + ")";
   document.getElementById("demo").innerHTML = coor}

   function clearCoor() {
   <<document.getElementById("demo").innerHTML = "";}

   onmousedown="fx(event)" //event.button = the key on the mouse that pressed
   onmousedown ="fx()"
   >>function whichElement(e) {
  var targ;
  if (!e) {
    var e = window.event;
  }
  if (e.target) {
    targ=e.target;
  } else if (e.srcElement) {
    targ=e.srcElement;
  }
  var tname;
  tname = targ.tagName;
  <<alert("You clicked on a " + tname + " element.");

  onmouseover="fx()"
  >><img src ="planets.gif" width ="145" height ="126" alt="Planets" usemap="#planetmap" />

  map name="planetmap"
  <area shape ="rect" coords ="0,0,82,126"
  onmouseover="writeText('The Sun and the gas giant planets like Jupiter are by far the largest objects in our Solar System.')"
  href ="sun.htm" target ="_blank" alt="Sun" />

  <area shape ="circle" coords ="90,58,3"
  onmouseover="writeText('The planet Mercury is very difficult to study from the Earth because it is always so close to the Sun.')"
  href ="mercur.htm" target ="_blank" alt="Mercury" />

  <area shape ="circle" coords ="124,58,8"
  onmouseover="writeText('Until the 1960s, Venus was often considered a twin sister to the Earth because Venus is the nearest planet to us, and because the two planets seem to share many characteristics.')"
  href ="venus.htm" target ="_blank" alt="Venus" /></map>

  << <p id="desc">Mouse over the sun and the planets and see the different descriptions.</p> >
   >
   <button onclick="fx()" ondblclick="fx()">
   function(){window.scrollTo(x,y);}
   window.open() - open a new window
   window.close() - close the current window
   window.moveTo() - move the current window
   window.resizeTo() - resize the current window
    -->
