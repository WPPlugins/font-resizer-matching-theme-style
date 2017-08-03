<?php
/*

Plugin Name: Font Resizer
Plugin URI: http://www.devilhunter.net/
Description: Go to Appearance > Widgets, and drag 'Font Resizer' in sidebar or footer or in any widgetized area. This PlugIn will automatically match your theme's color. No need to use any short-code or to edit settings.
Version: 2.0
Author: Tawhidur Rahman Dear
Author URI: http://www.facebook.com/tawhidurrahmandear/ 
License: GPLv2 or later 

Tawhidur Rahman Dear
Mailing Address: 
House - 304, Road - 10 Rupnagar Tinshed,
Pallabi, Mirpur,
Dhaka - 1216
BANGLADESH
tawhidurrahmandear@gmail.com
+8801716816283, (also in Viber, DUO, WhatsApp, IMO)
Skype & Google Hangout: tawhidurrahmandear
Facebook: http://www.facebook.com/tawhidurrahmandear/ 
Google Plus: http://plus.google.com/+tawhidurrahmandear/about
Personal Blog: http://tawhidurrahmandear.blogspot.com 
 
 */


namespace deartwentyeight\dear\wordpress;

{require_once(__DIR__ . "/pluginfiles/widget.php");}

  class S extends Widget {
    static $widgetTitle = "deartwentyeight_fontresizer";

    public function __construct() {
      parent::__construct(null, "Font Resizer");
    }


    public function widgetContent($args, $instance)
    {
      ?>

<body>

<p style="margin-top: 0; margin-bottom: 0" align="center">
<input type = "button" value = "A-" id = "small"/>
<input type = "button" value = "A" id = "normal"/>
<input type = "button" value = "A+" id = "large"/></p>

<script>
var content = document.getElementById("content");
var smallButton = document.getElementById("small");
var normalButton = document.getElementById("normal");
var largeButton = document.getElementById("large");
smallButton.onclick = function(e){
content.style.fontSize = "75%";	
}
normalButton.onclick = function(e){
content.style.fontSize = "100%";	
}
largeButton.onclick = function(e){
content.style.fontSize = "125%";	
}


</script>
</body>

      <?php
    
    }
  }

  S::register("deartwentyeight_fontresizer");


