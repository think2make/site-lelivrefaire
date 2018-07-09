jQuery(document).ready(function($){

/*
 * CONTENTS
 *
 *   1: Email Spam Protection 
 *
 */
 
 
/* 
 * 0: js-hidden must be hidden
 ****************************************************
 */
// $(".js-hidden").hide(); // adds in-line CSS, hard to override.
$(".js-hidden").addClass( "hidden" );


/* 
 * Outgoing Links = new window
 ****************************************************
 */

$("a[href^=http]").each(
   function(){
      if(this.href.indexOf(location.hostname) === -1) {
      $(this).attr('target', '_blank');
			}
   }
 );

/* 
 * that's it !
 ****************************************************
 */
		
}); // end document ready