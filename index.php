<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>JS & JQ | Continuous Learning</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/animate.min.css">
    <link rel="stylesheet" type="text/css" href="styles/prism.css">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="back-top">

    <header>
        <div class="inner-header">

            <a href="#back-top"><div class="logo">
                <h1>JavaScript & jQuery</h1>

                <div id="infinity-logo"></div>

                <h2>Continuous Learning</h2>

            </div></a><!-- end logo -->

            <nav>
               <ul>
                <li><a  href="#tut1">T<br>One</a></li>
                <li><a  href="#tut2">T<br>Two</a></li>
                <li><a  href="#tut3">T<br>Three</a></li>
                <li><a  href="#contact">Contact</a></li>
            </ul>
        </nav>

        <div class="clear">
        </div><!-- end clear -->

    </div><!-- end inner-header -->

</header>

 <header id="header" class="header">
        <div class="inner-header">

            <a href="#back-top"><div class="logo">
                <h1>JavaScript & jQuery</h1>

                <div id="infinity-logo"></div>

                <h2>Continuous Learning</h2>

            </div></a><!-- end logo -->

            <nav>
               <ul>
                <li><a  href="#tut1">T<br>One</a></li>
                <li><a  href="#tut2">T<br>Two</a></li>
                <li><a  href="#tut3">T<br>Three</a></li>
                <li><a  href="#contact">Contact</a></li>
            </ul>
        </nav>

        <div class="clear">
        </div><!-- end clear -->

    </div><!-- end inner-header -->

</header>

<!-- HOME page -->

<main class="tutorial">

    <section class="inner-home">

        <div class="title-hp">
            <h1>JavaScript & jQuery</h1>
            <h1>Tutorials</h1>
        </div><!-- end title-hp -->

        <article class="article-hp">
            <p><span class="first-word">What</span> | JavaScript, simply put is a programming language which is used as part of the web browser. When implemented it allows client-side scripts to interact with the user, control the browser and alter teh document content that is displayed. jQuery is a free open source JavaScript library that basically makes JavaScript programming easier.</p>
            <p><span class="first-word">Why</span> | Want to design exciting and interactive web designs, learning and using JavaScript and Jquery will help you along the way to designing that "wow" type of website.</p>
            <p><span class="first-word">How</span> | Learn some basics with these three easy to master JavaScript and jquery tutorials. You will be an expert in no time.</p>
            <p><span class="first-word">Before starting</span> | To ensure all these new exciting and interactive web designs work we have a little bit of house keeping to do:</p>

            <ol>
                <li>We need to download the basic jQuery link found at <a href"https://developers.google.com/speed/libraries/devguide" target="_blank">Google Developers.</a> Please click on the jQuery link which will take you to the snippet which you will need to copy and paste into the bottom of your HTML page just above the body tag. This is bascially a link to ajQuery file that is hoste by a Content Delivery Network)</li> 
                <li>Another option is to download the jQuery source code and store it in a file locally and then link to that file in your HTML file. You can download jQuery from <a href"http://jquery.com/" target="_blank">here.</a></li>
            </ol>

        </article><!-- end article-hp" -->
    </section><!-- end inner-home -->

    <div class="back">
        <a href="#back-top">Back</a>
    </div><!-- end back-top -->
</main><!-- end home -->

<!-- Tutorial 1 -->

<main class="tutorial">
	<div class="anchor scrollto" id="tut1">
        <header>
            <div class="inner-header">

                <div class="tut-logo">
                    <p>T<br>One</p>
                </div><!-- end tut-logo -->

                <div class="tut-title">
                    <h1>Image Sliders</h1>
                    <h2>It is all about the images</h2>

                    <div class="clear">
                    </div><!-- end clear -->

                </div><!-- end tut-title -->

            </div><!-- end inner-header -->
        </header>

        <div class="inner-tut">

            <section class="tut-intro">
                <p> Everyone loves images - pretty pictures, graphics, product photos! Images help with engagement, reeling the customer stick araound a little longer. And what better way to showcase your images than with a fancy image slider/carousel. As they say an image worth a thousand words.</p>

                <p>The great news is nothing can be easier. Forget all that fancy JavaScript and jquery code we can pop in a creative and great looking slider with a few simple steps.</p>

            </section><!-- end tut-intro -->

            <section class="slider-demo">

                <h1>Demo</h1>
                <div class="cycle-slideshow" data-cycle-pause-on-hover="true">
                   <div class="cycle-overlay"></div>
                   <!-- prev/next links -->
                   <div class="cycle-prev"></div>
                   <div class="cycle-next"></div>
                   <img src="images/thailand.jpg" width="700" height="400" alt="boats at sunset in Thailand"
                   data-cycle-title="Thailand" 
                   data-cycle-desc="Koh Tao"/>
                   <img src="images/pakistan.jpg" width="700" height="400" alt="trekking in the mountains"
                   data-cycle-title="Pakistan" 
                   data-cycle-desc="Central Karakoram"/>
                   <img src="images/china.jpg" width="700" height="400" alt="winter riding in China"
                   data-cycle-title="China" 
                   data-cycle-desc="Central China"/>
                   <img src="images/china-desert.jpg" width="700" height="400" alt="desert riding in China"
                   data-cycle-title="China" 
                   data-cycle-desc="Central China"/>
                   <img src="images/cambodia.jpg" width="700" height="400" alt="riding in Cambodia"
                   data-cycle-title="Cambodia" 
                   data-cycle-desc="Central Cambodia"/>
               </div>
           </section><!-- end slider-demo -->

           <section class="tut-steps">

            <h1>Steps</h1>
            <ol>
               <li>Find pretty images you want to showcase (for this example we have used 5) and size to fit correctly within your slider (for this example they are 700 x 400.</li>
               <li><a href="http://jquery.malsup.com/cycle2/" target ="_blank"> Download Cycle2 plugin</a></li>
               <li>Place downloaded Cycle2 plugin in jquery folder which is connected to your source code and then include the Cycle2 plugin using the scripts tags you have just saved. Please ensure the Cycle2 script tag is placed under the jQuery script tag, which is placed right before <span class="code">&lt;&#47;body&gt;</span> tag. </li>
               <pre class="language-markup">
                <code class="language-markup">
&lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">&lt;/script>
&lt;script src="scripts/jquery.cycle2.min.js">&lt;/script>
                </code>
            </pre>
            <li>This great plugin not only allows you to place in an image slider with no jQuery code, it also enables you to add in description overlays, next and previous arrows and allows you to stop the slider on hover. All these have been implemented to the above demo and the CSS and HTML code shows how it is all achieved.</li>
            <li>Code HTML/CSS. (see below)</li>
            <li>No JavaScript/jQuery required.</li>
        </ol>

    </section><!-- end tut-steps -->

    <section class="code-examples">

        <h1>HTML <span id="plus">+</span></h1>
        <pre class="language-markup">
            <code class="language-markup">
            
             &lt;div class="cycle-slideshow" data-cycle-pause-on-hover="true">
                   &lt;div class="cycle-overlay"> &lt;/div>
                   &lt;div class="cycle-prev"> &lt;/div>
                   &lt;div class="cycle-next"> &lt;/div>
                   &lt;img src="images/thailand.jpg" width="700" height="400" alt="boats at sunset in Thailand"
                   data-cycle-title="Thailand" 
                   data-cycle-desc="Koh Tao"/>
                   &lt;img src="images/pakistan.jpg" width="700" height="400" alt="trekking in the mountains"
                   data-cycle-title="Pakistan" 
                   data-cycle-desc="Central Karakoram"/>
                   &lt;img src="images/china.jpg" width="700" height="400" alt="winter riding in China"
                   data-cycle-title="China" 
                   data-cycle-desc="Central China"/>
                   &lt;img src="images/china-desert.jpg" width="700" height="400" alt="desert riding in China"
                   data-cycle-title="China" 
                   data-cycle-desc="Central China"/>
                   &lt;img src="images/cambodia.jpg" width="700" height="400" alt="riding in Cambodia"
                   data-cycle-title="Cambodia" 
                   data-cycle-desc="Central Cambodia"/>
                &lt;/div>
            </code>
        </pre>

        <h1>CSS <span id="plus">+</span></h1>
        <pre class="language-css">
            <code>
.slider-demo {
	margin-bottom: 30px;
}

.slider-demo h1{
	text-align: center;
	font-family: 'Merriweather', serif;	
	color:#eb6e44;
	font-size: 1.8em;
	font-weight: bold;
	padding-top: 30px;
	padding-bottom: 20px;
}

.cycle-slideshow {
	margin: 0 auto;
	width: 700PX;
}

.cycle-prev, .cycle-next { 
	position: absolute; 
	top: 0; 
	width: 8%; 
	opacity: 0; 
	filter: alpha(opacity=0); 
	z-index: 800; 
	height: 100%; 
	cursor: pointer; 
}

.cycle-prev { 
	left: 0;  
	background: url(http://malsup.github.com/images/left.png) 50% 50% no-repeat;
}

.cycle-next { 
	right: 0; 
	background: url(http://malsup.github.com/images/right.png) 50% 50% no-repeat;
}

.cycle-prev:hover, 
.cycle-next:hover { 
	opacity: .7; 
	filter: alpha(opacity=70) 
}

.cycle-overlay { 
	font-family: tahoma, arial;
	position: absolute; 
	bottom: 0; 
	width: 100%; 
	z-index: 600;
	background: #7c786a; 
	color: white; 
	padding: 15px; 
	opacity: .7;
}
</code>
</pre>

<h1>jQuery <span id="plus">+</span></h1>
<pre class="language-markup">
    <code>
        &lt;p>No code required yay....</p>
    </code>
</pre>


</section><!-- end code-examples -->

</section><!-- end tut1-section -->
</div><!-- end inner-tut -->
</div>
</main><!-- end tutorial -->

<div class="back">
    <a href="#back-top">
    </a>
</div><!-- end back-top -->

<!-- Tutorial 2 -->

<main class="tutorial">
    <div class="anchor scrollto" id="tut2">
        <header>
            <div class="inner-header">
                <div class="tut-logo">
                    <p>T<br>Two</p>
                </div><!-- end tut-logo -->

                <div class="tut-title">
                    <h1>Sticky Navigation Bars</h1>
                    <h2>It is all about the Nav Bar</h2>

                    <div class="clear">
                    </div><!-- end clear -->

                </div><!-- end tut-title -->

            </div><!-- end inner-header -->
        </header>

        <div class="inner-tut">

            <section class="tut-intro">
                <p> Everyone likes to see their options! That is why sticky nav bars are becoming popular on many websites especially one page sites. A fixed navigation bar remains visible at all times and with jQuery once you start scrolling down the page and the top of window hits the nav bar you can make it stick to the top and stay visible. This way the reader can always see where they are and where they want to go next without having to scroll up and down.</p>

                <p>Lets find out how it all works behind the scenes.</p>

            </section><!-- end tut-intro -->

            <section class="sticky-demo">

                <h1>Demo</h1>

                <p>You may have noticed the sticky navigation bar already in use on this site. Please return to the top of the pag and notice as you scroll down the page at a certain point the navigation bar will stick to the top of the page and be visible while you scroll through the site and indicate which section you are on</p>

            </section><!-- end sticky-demo -->

            <section class="tut-steps">

                <h1>Steps</h1>
                <ol>
                   <li>Find pretty images you want to showcase (for this example we have used 5) and size to fit correctly within your slider.</li>
                   <li><a href="http://jquery.malsup.com/cycle2/" target ="_blank"> Download Cycle2 plugin</a> please follow link.</li>
                   <li>Place downloaded Cycle2 plugin in jquery folder which is connected to your source code and then include the Cycle2 plugin using the scripts tags you have just saved. Please ensure the Cycle2 script tag is placed under the jQuery script tag.</li>
                   <li>Code HTML/CSS. (see below)</li>
                   <li>No JavaScript/jQuery required</li>
               </ol>

           </section><!-- end tut-steps -->


           <section class="code-examples">

            <h1>HTML <span id="plus">+</span></h1>
            <pre class="language-markup">
                <code class="language-markup">
                    &lt;div class="cycle-slideshow">
                    &lt;img src="images/thailand.jpg" width="700" height="400" alt="boats at sunset in Thailan"/>
                    &lt;img src="images/pakistan.jpg" width="700" height="400" alt="trekking in the mountains"/>
                    &lt;img src="images/china.jpg" width="700" height="400" alt="winter riding in China"/>
                    &lt;img src="images/china-desert.jpg" width="700" height="400" alt="desert riding in China"/>
                    &lt;img src="images/cambodia.jpg" width="700" height="400" alt="riding in Cambodia"/>
                    &lt;/div>
                </code>
            </pre>

            <h1>CSS <span id="plus">+</span></h1>
            <pre class="language-css">
                <code>
                    .slider-demo h1{
                    color: #7c786a;	
                    font-size: 1.8em;
                    text-align: center;
                    font-weight: bold;
                    font-family: 'Merriweather', serif;	
                    padding-bottom: 10px;
                }
                

                .cycle-slideshow {
                padding-bottom: 30px;	
            }

            .cycle-slideshow img {
            display: block;	
            text-align: center;
        }
    </code>
</pre>

<h1>jQuery <span id="plus">+</span></h1>
<pre class="language-markup">
    <code>
        &lt;p>No code required yay....</p>
    </code>
</pre>

</section><!-- end code-examples -->

</section><!-- end tut1-section -->
</div><!-- end inner-tut -->

<div class="back">
    <a href="#back-top">
    </a>
</div><!-- end back-top -->
</div><!-- end anchor & scrollto -->
</main><!-- end tutorial -->

<!-- Tutorial 3 -->

<main class="tutorial">
    <div class="anchor scrollto" id="tut3">
        <header>
            <div class="inner-header">
                <div class="tut-logo">
                    <p>T<br>Three</p>
                </div><!-- end tut-logo -->

                <div class="tut-title">
                    <h1>Parallax Scrolling</h1>
                    <h2>It is all about the Scroll</h2>

                    <div class="clear">
                    </div><!-- end clear -->

                </div><!-- end tut-title -->

            </div><!-- end inner-header -->
        </header>

        <div class="inner-tut">

            <section class="tut-intro">
                <p>It seems people enjoy to scroll, hence the popularity of one page websites these days or readers just like information concenrtared in certain areas reducing browsing time. As they say time is of the essence. What ever the reason one page websites are popular! And hence to add greater effect to one pagers parallax scrolling websites are a hot techinque at the moment.</p>

                <p>So lets see how it goes down.</p>

            </section><!-- end tut-intro -->

            <section class="parallax-demo">

            </section><!-- end sticky-demo -->

            <section class="tut-steps">

                <h1>Steps</h1>
                <ol>
                   <li>Find pretty images you want to showcase (for this example we have used 5) and size to fit correctly within your slider.</li>
                   <li><a href="http://jquery.malsup.com/cycle2/" target ="_blank"> Download Cycle2 plugin</a>please follow link.</li>
                   <li>Place downloaded Cycle2 plugin in jquery folder which is connected to your source code and then include the Cycle2 plugin using the scripts tags you have just saved. Please ensure the Cycle2 script tag. 
                    
                    <li>Code HTML/CSS. (see below)</li>
                    <li>No JavaScript/jQuery required</li>
                </ol>

            </section><!-- end tut-steps -->


            <section class="code-examples">

                <h1>HTML <span id="plus">+</span></h1>
                <pre class="language-markup">
                    <code class="language-markup">
                        &lt;div class="cycle-slideshow">
                        &lt;img src="images/thailand.jpg" width="700" height="400" alt="boats at sunset in Thailan"/>
                        &lt;img src="images/pakistan.jpg" width="700" height="400" alt="trekking in the mountains"/>
                        &lt;img src="images/china.jpg" width="700" height="400" alt="winter riding in China"/>
                        &lt;img src="images/china-desert.jpg" width="700" height="400" alt="desert riding in China"/>
                        &lt;img src="images/cambodia.jpg" width="700" height="400" alt="riding in Cambodia"/>
                        &lt;/div>
                    </code>
                </pre>

                <h1>CSS <span id="plus">+</span></h1>
                <pre class="language-css">
                    <code>
                        .slider-demo h1{
                        color: #7c786a;	
                        font-size: 1.8em;
                        text-align: center;
                        font-weight: bold;
                        font-family: 'Merriweather', serif;	
                        padding-bottom: 10px;
                    }
                    
                    .cycle-slideshow {
                    padding-bottom: 30px;	
                }

                .cycle-slideshow img {
                display: block;	
                text-align: center;
            }
        </code>
    </pre>

    <h1>jQuery <span id="plus">+</span></h1>
    <pre class="language-markup">
        <code>
            &lt;p>No code required yay....</p>
        </code>
    </pre>


</section><!-- end code-examples -->	
</section><!-- end tut1-section -->
</div><!-- end inner-tut -->

<div class="back">
    <a href="#back-top">
    </a>
</div><!-- end back-top -->
</div><!-- end anchor & scrollto -->
</main><!-- end tutorial -->

<!-- Contact -->

<main class="tutorial">
    <div class="anchor scrollto" id="contact">
        <header>
            <div class="inner-header">
                <div class="tut-logo">
                    <p>Contact</p>
                </div><!-- end tut-logo -->

                <div class="tut-title">
                    <h1>Contact</h1>
                   
                    <h2>It is all about your Contacts</h2>

                    <div class="clear">
                    </div><!-- end clear -->
                </div><!-- end tut-title -->

            </div><!-- end inner-header -->
        </header>

        <div class="inner-tut">

            <section class="tut-intro">
            
             <div class="contact-form">
                <p>Send me a message I am always happy to chat:</p>
                
                <form action="../adelaide/thank_you.php" method="post" name="more_info" class="more_info" id="more-info">

			<fieldset class="general_info">
				<label for="input_name">Name: </label>
				<input name="input_name" type="text" id="input_name">
				<label for="input_email">Email: </label>
				<input name="input_email" type="email" id="input_email">
			</fieldset>
            
            <fieldset class="add_info">
				<h1>Please let us know if you would like any other additional information:</h1>
				<textarea name="additional_info" id="additional_info"></textarea>

			</fieldset>
            
            
			<fieldset class="submit">
				<input name="btn_submit" type="submit" id="btn_submit" value="Submit">
			</fieldset>
            
            </form>
                
 </div><!-- end contact-form -->
            </section><!-- end tut-intro -->

            <section class="form">

            </section><!-- end form -->

        </div><!-- end inner-tut -->

        <div class="back">
            <a href="#back-top">
            </a>
        </div><!-- end back-top -->
    </div><!-- end anchor & scrollto -->
</main><!-- end tutorial -->

<footer>
    <div class="inner-footer">
        <p>For Educational Purposes Only</p>
        <p>&copy; Jo Demmler</p>
        <p><a href="http://en.wikipedia.org/wiki/JavaScript" target_"blank">Copy Credit</a></p> 

        <div class="back">
            <p><a href="#back-top">back
            </a></p>
        </div><!-- end back-top -->
        
  <div class="clear">
        </div><!-- end clear -->
    </div><!--"end inner-footer" -->
</footer>





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="scripts/jquery.easing.min.js"></script>
<script src="scripts/jquery.stickyNavbar.min.js"></script>
<script src="scripts/jquery.cycle2.min.js"></script>
<script src="scripts/prism.js"></script>
<script src="scripts/scripts.js"></script>
</body>
</html>