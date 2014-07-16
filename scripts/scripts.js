// JavaScript Document

// sticky header...

$(function () {
  $('.header').stickyNavbar({
      activeClass: "active",        // Class to be added to highlight nav elements
      sectionSelector: "scrollto",  // Class of the section that is interconnected with nav links
      navOffset: 0,                 // Offset from the default position of this() (nav container)
      animDuration: 250,            // Duration of jQuery animation
      startAt: 0,                   // Stick the menu at XXXpx from the top of the this() (nav container)
      easing: "linear",             // Easing type if jqueryEffects = true, use jQuery Easing plugin to extend easing types - gsgd.co.uk/sandbox/jquery/easing
      animateCSS: true,             // AnimateCSS effect on/off
      animateCSSRepeat: false,      // Repeat animation everytime user scrolls
      bottomAnimation: false,       // CSS animation on/off in case we hit the bottom of the page
      cssAnimation: "flipInX",   // AnimateCSS class that will be added to selector
      jqueryEffects: false,         // jQuery animation on/off
      jqueryAnim: "slideDown",      // jQuery animation type: fadeIn, show or slideDown
      selector: "a",                // Selector to which activeClass will be added, either "a" or "li"
      mobile: false                 // If false nav will not stick under 480px width of window
  });
}); 


$(document).ready(function(){

var navVisible = false;

	 $('.header').css('display','none');
	 console.log('hidden')
	 
	 $(window).scroll(function(e) {
    	var pos = $(window).scrollTop();
		console.log(pos+"pos")	

		if((pos > 183)&&(navVisible==false))
		{ $('.header').css('display','initial');
			console.log('not hidden')

			}else{
		
		 $('.header').css('display','none');
			}
		
		});
	
	});


// end sticky header...


// accordian code example.....


$('.code-examples > pre').hide();

var exampleReveal = $('.code-examples h1');
 
 exampleReveal.click(function() {
	 if ( $(this).children('span').text() =='+' ) {
	 $(this).children('span').text('-') 
	 
	}else{
	 $(this).children('span').text('+')
	}
	 
	 $(this).next().slideToggle();
	 });


// end accordian...


// light box example.....

$('.gallery1').colorbox({rel:'gallery1', transition:"elastic", width:"75%", height:"75%", previous:"previous", next:"next", close:'close'});
	 
