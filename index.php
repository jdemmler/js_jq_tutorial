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
    <link href='http://fonts.googleapis.com/css?family=Asset' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="back-top">

    <header>
        <div class="inner-header">

            <a href="#back-top"><div class="logo">
                <h1>jQuery</h1>

                <div id="infinity-logo"></div>

            </div></a><!-- end logo -->

            <nav>
               <ul>
                <li><a  href="#tut1"><span class="bt">T</span><br>One</a></li>
                <li><a  href="#tut2"><span class="bt">T</span><br>Two</a></li>
                <li><a  href="#tut3"><span class="bt">T</span><br>Three</a></li>
                <li><a  href="#contact"><span class="icon-envelope"></span></a></li>
            </ul>
        </nav>
        
        
       

        <div class="clear">
        </div><!-- end clear -->

    </div><!-- end inner-header -->

</header>

 <header id="header" class="header">
        <div class="inner-header">

            <a href="#back-top"><div class="logo">
                <h1>jQuery</h1>

                <div id="infinity-logo"></div>

            </div></a><!-- end logo -->

            <nav>
               <ul>
                <li><a  href="#tut1"><span class="big-text">T</span><br>One</a></li>
                <li><a  href="#tut2"><span class="big-text">T</span><br>Two</a></li>
                <li><a  href="#tut3"><span class="big-text">T</span><br>Three</a></li>
                <li><a  href="#contact"><span class="icon-envelope"></span></a></li>
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
            <h1>jQuery Tutorials</h1>
           
        </div><!-- end title-hp -->

        <article class="article-hp">
            <p><span class="first-word">What</span> <span class="line">|</span> JavaScript, simply put is a programming language which is used as part of the web browser. When implemented it allows client-side scripts to interact with the user, control the browser and alter the document content that is displayed. jQuery is a free open source JavaScript library that basically makes JavaScript programming easier.</p>
            <p><span class="first-word">Why</span> <span class="line">|</span>  Want to design exciting and interactive web designs, learning and using JavaScript and Jquery will help you along the way to designing that "wow" type of website.</p>
            <p><span class="first-word">How</span> <span class="line">|</span>  Learn some basics with these three easy to master jquery tutorials. You will be an expert in no time.</p>
            <p><span class="first-word">Before starting</span> <span class="line">|</span>  To ensure all these new exciting and interactive web designs work we have a little bit of house keeping to do:</p>

            <ol>
                <li>We need to download the basic jQuery link found at <a href="https://developers.google.com/speed/libraries/devguide" target="_blank">Google Developers.</a> Please click on the jQuery link which will take you to the snippet  of script which you will need to copy and paste into the bottom of your HTML page just above the body tag. This is bascially a link to ajQuery file that is hoste by a Content Delivery Network)</li> 
                <li>Another option is to download the jQuery source code and store it in a file locally and then link to that file in your HTML file. You can download jQuery from <a href="http://jquery.com/" target="_blank">here.</a></li>
            </ol>

        </article><!-- end article-hp" -->
    </section><!-- end inner-home -->

    <div class="back">
        <a href="#back-top">
         <span class="icon-arrow-up"></span></a>
    </div><!-- end back-top -->
</main><!-- end home -->

<!-- Tutorial 1 -->

<main class="tutorial">
	<div class="anchor scrollto" id="tut1">
        <header>
            <div class="inner-header">

                <div class="tut-title">
                    <h1><span class="tut-number">T<br>one</span></h1> 
                    <h1>Image Sliders</h1>
                    <h2>It is all about the images</h2>
                    
                    <div class="clear">
        </div><!-- end clear -->

                </div><!-- end tut-title -->

            </div><!-- end inner-header -->
        </header>

        <div class="inner-tut">

            <section class="tut-intro">
                <p> Everyone loves images - pretty pictures, graphics, product photos! Images help with engagement, reeling the user to stick araound a little longer. And what better way to showcase your images than with a fancy image slider/carousel. As they say an image is worth a thousand words.</p>

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
<div class="back">
    <a href="#back-top">
    <span class="icon-arrow-up"></span>
    </a>
</div><!-- end back-top -->
</main><!-- end tutorial -->



<!-- Tutorial 2 -->

<main class="tutorial">
    <div class="anchor scrollto" id="tut2">
        <header>
            <div class="inner-header">

                <div class="tut-title">
                <h1><span class="tut-number">T<br>two</span></h1>
                    <h1>More Image Options</h1>
                    <h2>It is all about the images and how to display them</h2>

                </div><!-- end tut-title -->

            </div><!-- end inner-header -->
        </header>

        <div class="inner-tut">

            <section class="tut-intro">
                <p>There are so many great ways to display images, more than just the humble mage slider. In some industries, like travel, images are important to really showcase destinations, hotels and activities, hence the reason for demonstrating another jQuery plugin. This time we are going to investigate "THE LIGHTBOX".</p>

                <p>Lets find out how it all works behind the scenes.</p>

            </section><!-- end tut-intro -->

            <section class="lightbox-demo">

                <h1>Demo</h1>
                <p>By clicking on an image it will show the image in the centre of the page while the rest of the window is dimmed out. Allowing the user to view images in a clean crisper environment if they choose to.</p>
             
             <div class="lightbox">
             <a href="images/lunch-mountains.jpg" class="gallery1">
             <img src="images/lunch-mountains-150.jpg" width="150" height="150" alt="lunch in the mountains of Pakistan"></a>
             <a href="images/glacier-crossing.jpg" class="gallery1"><img src="images/glacier-crossing-150.jpg" width="150" height="150" alt="Crossing Baltoro Glacier Pakistan"></a>
             <a href="images/friends-pakistan.jpg" class="gallery1"><img src="images/friends-pakistan-150.jpg" width="150" height="150" alt="Friends in the Mountains of Pakistan"></a>
             <a href="images/group-shot-pakistan.jpg" class="gallery1"><img src="images/group-shot-pakistan-150.jpg" width="150" height="150" alt="Friends in the Mountains of Pakistan"></a>
             <a href="images/k2.jpg" class="gallery1"><img src="images/k2-150.jpg" width="150" height="150" alt="Group shot at K2"></a> 

             </div><!-- end lightbox -->

            </section><!-- end lightbox-demo -->

            <section class="tut-steps">

                <h1>Steps</h1>
                <ol>
                   <li>Find pretty images you want to showcase (for this example we have used 5) and size to fit correctly within your lightbox.</li> 
                   <li>As we used a smaller version of the image as the hyperlink you may like to resize your images to fit in the space you decide on. In this scenareo ourplace holders are 150px by 150px. So we have one set of image sized to 150px x 150px and another set sized at  700px x 443px (but you can work with what ever size you like).</li>
                   <li><a href="http://www.jacklmoore.com/colorbox/" target ="_blank"> Download Colorbox plugin</a> please follow link.</li>
                   <li>Place downloaded Colorbox plugin in working-files folder (if you have one), this allows you to unzip the folder and extract the files you require for your scripts and styles folders. The files you will need are the jquery.colorbox.js, jquery.colorbox-min.js and a colorbox.css file which can be found in one of the example folder.</li>
                   <li>Please ensure the Colorbox stles are placed in the head section of your markup and the script tags are placed under the jQuery script tag, which is placed right before <span class="code">&lt;&#47;body&gt;</span> tag. </li>
               <pre class="language-markup">
                <code class="language-markup">
&lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">&lt;/script>
&lt;script src="scripts/jquery.colorbox.js">&lt;/script>
&lt;script src="scripts/jquery.colorbox.min.js">&lt;/script>
                </code>
            </pre>
                   <li>Code HTML (see below)</li>
                   <li>CSS - The css for the initial layout of the images, prior to displaying in a lightbox, is up to you, we have stuck with the colour themes of the tutorial and kept the images small to begin with.</li>
                   <li>Code jQuery - <a href="http://www.jacklmoore.com/colorbox/" target ="_blank">The Colorbox website</a> is a great source of setting properties. Colorbox accepts settings from an object of key/vlaue pairs, and can be assigned to any html element. Example below:</li>
  <pre class="language-markup">
                <code class="language-markup">
&lt;script> $(selector).colorbox({key:value, key:value, key:value});&lt;/script>
                </code>
            </pre> 
            <li>In our example we chose a fixed width and height (75% od screen) and included next, previous and close features to the lightbox. Please ensure you include the images from the Colorbox file youdownload in your images file. And seeing you have included the Colorbox styles sheet it all comes together for you with a little bit of jQuery code.</li>                

               </ol>

           </section><!-- end tut-steps -->

           <section class="code-examples">

            <h1>HTML <span id="plus">+</span></h1>
            <pre class="language-markup">
                <code class="language-markup">
                
&lt;div class="lightbox">
&lt;a href="images/lunch-mountains.jpg" class="gallery1">
&lt;img src="images/lunch-mountains-150.jpg" width="150" height="150" alt="lunch in the mountains of Pakistan">&lt;/a>
&lt;a href="images/glacier-crossing.jpg" class="gallery1">
&lt;img src="images/glacier-crossing-150.jpg" width="150" height="150" alt="Crossing Baltoro Glacier Pakistan">&lt;/a>
&lt;a href="images/friends-pakistan.jpg" class="gallery1">
&lt;img src="images/friends-pakistan-150.jpg" width="150" height="150" alt="Friends in the Mountains of Pakistan">&lt;/a>
&lt;a href="images/group-shot-pakistan.jpg" class="gallery1">
&lt;img src="images/group-shot-pakistan-150.jpg" width="150" height="150" alt="Friends in the Mountains of Pakistan">
&lt;/a>
&lt;a href="images/k2.jpg" class="gallery1">
&lt;img src="images/k2-150.jpg" width="150" height="150" alt="Group shot at K2">&lt;/a>
&lt;/div><!-- end lightbox -->
                
                </code>
            </pre>

            <h1>CSS <span id="plus">+</span></h1>
           
            <pre class="language-css">
                <code>
.lightbox-demo h1 {
	text-align: center;
	font-family: 'Merriweather', serif;	
	color:#eb6e44;
	font-size: 1.8em;
	font-weight: bold;
	padding-top: 30px;
	padding-bottom: 20px;	
}

.lightbox-demo p {
	color: #7c786a;
	font-size: 1.3em;
	line-height: 1.2em;
	padding-bottom: 20px;
	padding-top: 20px;	
}

.lightbox {
	margin: 0 auto;	
	width: 810px;	
	padding: 17px;
	background-color: #d3e397;
	border: 3px solid #7c786a;
}

.lightbox img {
	padding: 5px;
	border: 2px solid #7c786a;
	background-color: #fff;
	opacity: 0.7;
}

.lightbox img:hover {
	opacity: 1;
	-ms transform: scale(1.02);
	-webkit-transform: scale(1.02);
	-o-transform: scale(1.02);
	transform: scale(1.02);
}                
    </code>
</pre>

<h1>jQuery <span id="plus">+</span></h1>
<pre class="language-markup">
    <code>
&lt;script>    
$('.gallery1').colorbox({rel:'gallery1', transition:"elastic", width:"75%", height:"75%", previous:"previous", next:"next", close:'close'});
&lt;/script>
    </code>
</pre>

</section><!-- end code-examples -->

</section><!-- end tut1-section -->
</div><!-- end inner-tut -->

<div class="back">
    <a href="#back-top">
    <span class="icon-arrow-up"></span>
    </a>
</div><!-- end back-top -->
</div><!-- end anchor & scrollto -->
</main><!-- end tutorial -->

<!-- Tutorial 3 -->

<main class="tutorial">
    <div class="anchor scrollto" id="tut3">
        <header>
            <div class="inner-header">
  
                <div class="tut-title">
                <h1><span class="tut-number">T<br>three</span></h1>
                    <h1>Accodion</h1>
                    <h2>It is all about the space</h2>

                    <div class="clear">
                    </div><!-- end clear -->

                </div><!-- end tut-title -->

            </div><!-- end inner-header -->
        </header>

        <div class="inner-tut">

            <section class="tut-intro">
                <p>You may have noticed the accodion feature already in use on this site. At the bottom of each of the steps section the code is broken down into HTML, CSS and jQuery. To ensure the entire page isn't taken up with code it has been displayed in an accodion, this allows users to see each section as they want them and they didn't get too overwhelmed by copy on a page or in this case a lot of coding!.</p>
                <p>Simply put an accodion displays collapsible content panels for presenting inforamtion in a limited amount of space.</p>

                <p>Lets see how it is done.</p>

            </section><!-- end tut-intro -->

         <div class="accodion-head">

                <h1>Demo</h1>
                <p></p>
                
                </div><!-- end accodion-head -->
                
                <section class="accodion-demo">
                <h1>Red Centre <span id="plus">+</span></h1>
                <p> You probably know about the red monolith in Australia’s Red Centre. </p>

					<p> You may know it’s sacred to the Aboriginal people here, and that it turns some spectacular colours at sunrise and sunset. You might not know that you can experience it through Aboriginal eyes, or that there are many other sacred and breathtaking sites here in Australia’s vast centre.</p> 

						<p>Uluṟu’s cousin Kata Tjuṯa is just 40 kilometres away and you’ll find the awe-inspiring Kings Canyon not far from Alice Springs. You might not realise that this landscape has green vegetation and lush waterholes as well as dusty red roads and huge slabs of rock.  And what you won’t really understand until you get here is the magic, majesty, silence and splendid isolation of Australia’s Red Centre.</p>
                        
                        <h1>Sydney <span id="plus">+</span></h1>
                        <p> Discover Sydney, Australia’s famous harbour city and the capital of New South Wales.</p>

						<p> Plan your Sydney holiday using our three-day itinerary, which takes in the attractions around Sydney Harbour, beaches and inner-city precincts. Read up on the World Heritage-listed Blue Mountains and the Six Foot Track bushwalk.</p>

						<p> Learn about other places to visit in New South Wales and scenic journeys you can take from Sydney. Drive the Pacific Coast Touring Route north to Brisbane past the Hunter Valley, Port Stephens and bohemian Byron Bay. Or head south to Melbourne via the pure white beaches of Jervis Bay. </p>
                        
                        <h1>Great Barrier Reef <span id="plus">+</span></h1>
                
						<p> You can swim, snorkel, dive and sail the World Heritage-listed Great Barrier Reef, a living masterpiece so big it can be seen from outer space.</p>

						<p> It stretches more than 2,000 kilometres along the Queensland coast, from the mainland towns of Port Douglas to Bundaberg. Hop between the pristine, palm-fringed islands on top, then explore the rainbow-coloured coral islands and marine life below.</p>

						<p> Check out the technicolour coral and marine life through a glass-bottomed boat from coastal hubs such as Cairns, Port Douglas, Townsville, Bundaberg, Rockhampton, Mackay, Mission Beach and Airlie Beach. Or experience the reef’s smooth seas, deep drop offs, underwater tunnels and caves with a dive school or day trip operator.Snorkel or dive the edge of the continental shelf at Agincourt Reef from Cairns, explore the SS Yongala shipwreck from Townsville and Magnetic Island and the Llewellyn shipwreck from Mackay. </p> 
                        
                        <h1>Credits <span id="plus">+</span></h1>
                        <p><id="credit"><a href="http://www.australia.com/" target="_blank"> Copy credits Tourism Australia</p></a>
                
                
                </section><!-- end accodion demo -->

            <section class="tut-steps">

                <h1>Steps</h1>
                <ol>
                   <li>Get your copy together and break it down into sections you would like to show and hide.</li>
                   <li>There is no plugin used for this script - but don't worry we just need to write a small section of jQuery.</li>                    
                    <li>Code HTML (see below)</li>
                       <li>CSS - The css for the initial layout of the accodion is up to you, we have stuck with the colour themes of the tutorial.</li>
                    <li>jQuery (see below)</li>
                </ol>

            </section><!-- end tut-steps -->


            <section class="code-examples">

                <h1>HTML <span id="plus">+</span></h1>
                <pre class="language-markup">
                    <code class="language-markup">
&lt;section class="accodion-demo">
&lt;h1>Red Centre &ltspan id="plus">+&lt/span>&lt;/h1>
&lt;p> You probably know about the red monolith in Australia’s Red Centre. &lt;/p>

&lt;p> You may know it’s sacred to the Aboriginal people here, and that it turns some spectacular colours at sunrise and sunset. You might not know that you can experience it through Aboriginal eyes, or that there are many other sacred and breathtaking sites here in Australia’s vast centre.&lt;/p> 

&lt;p>Uluṟu’s cousin Kata Tjuṯa is just 40 kilometres away and you’ll find the awe-inspiring Kings Canyon not far from Alice Springs. You might not realise that this landscape has green vegetation and lush waterholes as well as dusty red roads and huge slabs of rock.  And what you won’t really understand until you get here is the magic, majesty, silence and splendid isolation of Australia’s Red Centre.&lt;/p>
                        
&lt;h1>Sydney &ltspan id="plus">+&lt/span>&lt;/h1>
&lt;p> Discover Sydney, Australia’s famous harbour city and the capital of New South Wales.&lt;/p>

&lt;p> Plan your Sydney holiday using our three-day itinerary, which takes in the attractions around Sydney Harbour, beaches and inner-city precincts. Read up on the World Heritage-listed Blue Mountains and the Six Foot Track bushwalk.&lt;/p>

&lt;p> Learn about other places to visit in New South Wales and scenic journeys you can take from Sydney. Drive the Pacific Coast Touring Route north to Brisbane past the Hunter Valley, Port Stephens and bohemian Byron Bay. Or head south to Melbourne via the pure white beaches of Jervis Bay. &lt;/p>
                        
&lt;h1>Great Barrier Reef &lt;span id="plus">+&lt;/span>&lt;/h1>
                
&lt;p> You can swim, snorkel, dive and sail the World Heritage-listed Great Barrier Reef, a living masterpiece so big it can be seen from outer space.&lt;/p>

&lt;p> It stretches more than 2,000 kilometres along the Queensland coast, from the mainland towns of Port Douglas to Bundaberg. Hop between the pristine, palm-fringed islands on top, then explore the rainbow-coloured coral islands and marine life below.&lt;/p>

&lt;p> Check out the technicolour coral and marine life through a glass-bottomed boat from coastal hubs such as Cairns, Port Douglas, Townsville, Bundaberg, Rockhampton, Mackay, Mission Beach and Airlie Beach. Or experience the reef’s smooth seas, deep drop offs, underwater tunnels and caves with a dive school or day trip operator.Snorkel or dive the edge of the continental shelf at Agincourt Reef from Cairns, explore the SS Yongala shipwreck from Townsville and Magnetic Island and the Llewellyn shipwreck from Mackay. &lt;/p> 
                        
&lt;h1>Credits &ltspan id="plus">+&lt/span>&lt;/h1>
&lt;p><id="credit">&lta href="http://www.australia.com/" target="_blank"> Copy credits Tourism Australia&lt;/p>&lt/a>
                        
&lt;/section><!-- end accodion demo -->  
                        
                    </code>
                </pre>

                <h1>CSS <span id="plus">+</span></h1>
                <pre class="language-css">
                    <code>
.accodion-demo h1 {
	background-color: #8dcdc1;
	padding: 10px;
	font-family: 'Merriweather', serif;	
	font-size: 1.5em;
	font-weight: bold;
	color: #fff5c3;
	border-bottom: 2px solid #eb6e44;
 		}

.accodion-demo p {
	padding-top: 10px;
	color: #7c786a;
	font-size: 1.3em;
	line-height: 1.2em;
		}

.accodion-demo h1:hover {
	background-color: #d3e397;
	border-bottom: 2px dotted #eb6e44;	
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
    <span class="icon-arrow-up"></span>
    </a>
</div><!-- end back-top -->
</div><!-- end anchor & scrollto -->
</main><!-- end tutorial -->

<!-- Contact -->

<main class="tutorial">
    <div class="anchor scrollto" id="contact">
        <header>
            <div class="inner-header">

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
				<input name="input_name" placeholder="Name" type="text" id="input_name" required>
				<label for="input_email">Email: </label>
				<input name="input_email" placeholder="Email" type="email" id="input_email" required>
			</fieldset>
            
            <fieldset class="add_info">
				<h1>Please let us know if you would like any other additional information:</h1>
				<textarea name="additional_info" placeholder="Message" id="additional_info" required></textarea>

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
            <span class="icon-arrow-up"></span>
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
            <p><a href="#back-top">
            <span class="icon-arrow-up"></span>
            </a></p>
        </div><!-- end back-top -->
        
  <div class="clear">
        </div><!-- end clear -->
    </div><!--"end inner-footer" -->
</footer>





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="scripts/jquery.colorbox-min.js"></script>
<script src="scripts/jquery.colorbox.js"></script>
<script src="scripts/jquery.easing.min.js"></script>
<script src="scripts/jquery.stickyNavbar.min.js"></script>
<script src="scripts/jquery.cycle2.min.js"></script>
<script src="scripts/prism.js"></script>
<script src="scripts/scripts.js"></script>
</body>
</html>