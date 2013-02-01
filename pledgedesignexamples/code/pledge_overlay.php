<!--INCLUDE THIS CSS FILE ON THE PAGE YOU'RE INCLUDING THIS SCRIPT ON:
		<link href="css/pledge.css" type="text/css" rel="stylesheet" media="screen" />
		-->
		<!--Pledge Overlay-->
		<div id="pledgeOverlay">		
				<img src="/splash/close_up.png" id="hide-pledgeOverlay" name="pic1" onMouseOver="up('pic1')" onMouseOut="off('pic1')" width="41px" height="38px">
				<div id="yui3-widget-hd">
					<p>EXPANDING NEWS HORIZONS</p>
					<!--p>LISTEN <span style="color:white">LEARN</span> <a href="https://www.kuow.org/pledge/" onClick="javascript:urchinTracker('/clicks/pledgeoverlay');">PLEDGE</a></p-->
				</div>
<!--count down script-->
						<?php /*  
//EVENT DATE INFORMATION
$eDay = 31; //Day of the Target Event
$eMonth = 12; //Month of the Target Event
$eYear = 2011; //Year of the Target Event
$eHour = 23; //Hour of the Target Event

$today = time(); //CURRENT TIME
//$today = mktime(0,0,0,1,1,2012); //hour,minute,second,month,day,year //DEBUGGING to test different 'current dates'
$event = mktime($eHour,0,0,$eMonth,$eDay,$eYear); //EVENT TIME

$remaining_seconds = $event - $today; //DIFFERENCE IN SECONDS
$remaining_hours = (int)ceil($remaining_seconds/3600); //DIFFERENCE IN HOURS
$remaining_days = (int)ceil($remaining_hours/24); //DIFFERENCE IN DAYS

if($remaining_days > 1){
      echo("Only <span style='color:#FF8300;'>{$remaining_days} days </span> left to make your gift by 12/31!");
}elseif($remaining_days == 1){ //This is the last day to make your pledge.
      echo("Only <span style='color:#FF8300;'>1 day</span> left to make your gift by 12/31!");
}else{ //if Target Event has passed, just tell them to pledge (unless you already told them to in the static copy).
      echo("Make your gift today!");
}
*/ ?>									
				<div id="yui3-widget-bd">
					<!--a href="https://www.kuow.org/pledge" onClick="javascript:urchinTracker('/clicks/pledgeoverlay');"><img src="/splash/pledge_off.jpg" name="pic2" onMouseOver="up('pic2')" onMouseOut="off('pic2')" width="583" height="226" /></a-->
					<p>Our fall membership drive has ended. Thanks to everyone who pledged! If you haven't pledged yet, <a href="https://www.kuow.org/pledge/"><span style="color:#cb2529;font-weight:bold;">there's still time!</span></a></p>
				</div>
				<div id="yui3-widget-ft">					
					<p id="hide-pledgeOverlay1">[ <em>continue without pledging</em> ]</p>
				</div>
		</div>
		<!--End Pledge Overlay-->
		<script src="http://yui.yahooapis.com/3.1.1/build/yui/yui-min.js"></script>

		<script>
			YUI({
				gallery: 'gallery-2010.05.12-19-08'
				}).use('gallery-overlay-extras', 'cookie', 'event-base', function(Y){
							
					Y.on('contentready', function(){
								  
						var ppc = Y.Cookie.get("KUOWpledge");
						
						if ( ppc == null ) {
							
							Y.one('#pledgeOverlay').setStyle("display", "block");
							
							var pledgeOverlay = new Y.Overlay({
									srcNode           : '#pledgeOverlay',
									width             : '500px',
									height            : '360px',
									zIndex            : 10001,
									centered          : true,
									constrain         : true,
									render            : true,
									visible           : true,
									plugins           : [
										{ fn: Y.Plugin.OverlayModal },
										{ fn: Y.Plugin.OverlayKeepaligned }
									]
								});
							
							Y.one('#hide-pledgeOverlay').on('click', Y.bind(pledgeOverlay.hide, pledgeOverlay));
							Y.one('#hide-pledgeOverlay1').on('click', Y.bind(pledgeOverlay.hide, pledgeOverlay));
							
							var expire_time = new Date();
							expire_time.setMinutes(expire_time.getMinutes()+90); 
							
							Y.Cookie.set("KUOWpledge", "sleep", {
								expires: expire_time
								,path: '/'
								,domain: '<?=$_SERVER["SERVER_NAME"];?>'
								});
						}
						else{
							Y.one('#pledgeOverlay').setStyle("display", "none");
							
							var pledgeOverlay = new Y.Overlay({
									srcNode           : '#pledgeOverlay',
									width             : '500px',
									height            : '360px',
									zIndex            : 10001,
									centered          : true,
									constrain         : true,
									render            : true,
									visible           : false, 
									plugins           : [
										{ fn: Y.Plugin.OverlayModal },
										{ fn: Y.Plugin.OverlayKeepaligned }
									]
								});
						}
					}, '#pledgeOverlay');
				}); <!-- End YUI -->
</script>
<script>
		<!-- Rollover Buttons -->
		if (document.images)
		   {
		     pic1on= new Image;
			 pic1on.src="http://128.208.34.41/splash/close_down.png";

			 pic1off= new Image;
			 pic1off.src="http://128.208.34.41/splash/close_up.png";
		   }
		function up(imgName,imgName2)
		 {
		   if (document.images)
			{
			  imgOn=eval(imgName + "on.src");
			  document[imgName].src= imgOn;
			}
		  }
		function off(imgName,imgName2)
		  {
		   if (document.images)
			{
			  imgOff=eval(imgName + "off.src");
			  document[imgName].src= imgOff;
			}
		 }
		</script>