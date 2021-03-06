<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
/* Short and sweet */
define('WP_USE_THEMES', false);
require('blog/wp-blog-header.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Headshots by Kate</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="css/jquery.ad-gallery.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.ad-gallery.js"></script>
<script type="text/javascript">
  $(function() {
    $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
    $('img.image1').data('ad-title', 'Title through $.data');
    $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
    $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
    var galleries = $('.ad-gallery').adGallery();
    setTimeout(function() {
      galleries[0].addImage("images/thumbs/t7.jpg", "images/7.jpg");
    }, 1000);
    setTimeout(function() {
      galleries[0].addImage("images/thumbs/t8.jpg", "images/8.jpg");
    }, 2000);
    setTimeout(function() {
      galleries[0].addImage("images/thumbs/t9.jpg", "images/9.jpg");
    }, 3000);
    setTimeout(function() {
      galleries[0].removeImage(1);
    }, 4000);
    
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
  });
  </script>
</head>

<body>
	<div id="wrap">
    	<div class="headerInner">&nbsp;</div>
   	  <div id="bodyContent">
        	<div id="container">
            <div class="gallery-logo">
       		  <p><img src="images/logo-gallery.jpg" lt="Logo" /><br />
       		    <br />
</p>
       		  <p><br />
       		    <!--<img src="images/left-btn.jpg" alt="Nav" width="156" height="212" usemap="#Map" border="0" /> 
					  <map name="Map" id="Map">
						<area shape="rect" coords="2,4,152,41" href="wedding.html" />
						<area shape="rect" coords="3,49,154,84" href="blog.html" />
						<area shape="rect" coords="-1,92,156,126" href="portraits.html" />
						<area shape="rect" coords="-1,133,158,167" href="contact.html" />
						<area shape="rect" coords="-1,172,160,207" href="packages.html" /> 
					  </map>
					  -->
       		    
       		    <!-- Creating a vertical menu using list items.  It will make it easier down the
					road if we need to add more pages.-->
       		    
       		    <div id="menuwrapper">
       		    <ul class = "vert-menu">
</p>
<li id="wedding"><a href="wedding.html">Weddings</a></li>
							<li id="blog"><a href="blog.html">Blog</a></li>
							<li id="portraits"><a href="portraits.html">Headshots & Print Work</a></li>
							<li id="tips"><a href="tips.html">Photo Session Tips</a></li>
							<li id="packages"><a href="packages.html">Photo Packages</a></li>
							<li id="contacts"><a href="contact.html">Contact Us</a></li>
					</div>
                    </div>
	   <div id="gallery" class="ad-gallery">
       
      <div class="ad-image-wrapper">
      </div>
      <div class="ad-controls">
      </div>
      <div class="ad-nav">
        <div class="ad-thumbs">
          <ul class="ad-thumb-list">
            <li>
              <a href="images/1.jpg">
                <img src="images/thumbs/t1.jpg" class="image0">
              </a>
            </li>
            <li>
              <a href="images/10.jpg">
                <img src="images/thumbs/t10.jpg" title="A title for 10.jpg" alt="This is a nice, and incredibly descriptive, description of the image 10.jpg" class="image1">
              </a>
            </li>
            <li>
              <a href="images/2.jpg" id="t2">
                <img src="images/thumbs/t2.jpg" title="A title for 2.jpg" alt="This is a nice, and incredibly descriptive, description of the image 2.jpg" class="image6">
              </a>
            </li>
            <li>
              <a href="images/3.jpg">
                <img src="images/thumbs/t3.jpg" title="A title for 3.jpg" alt="This is a nice, and incredibly descriptive, description of the image 3.jpg" class="image7">
              </a>
            </li>
            <li>
              <a href="images/4.jpg">
                <img src="images/thumbs/t4.jpg" title="A title for 4.jpg" alt="This is a nice, and incredibly descriptive, description of the image 4.jpg" class="image8">
              </a>
            </li>
            <li>
              <a href="images/5.jpg">
                <img src="images/thumbs/t5.jpg" title="A title for 5.jpg" alt="This is a nice, and incredibly descriptive, description of the image 5.jpg" class="image9">
              </a>
            </li>
            <li>
              <a href="images/6.jpg">
                <img src="images/thumbs/t6.jpg" title="A title for 6.jpg" alt="This is a nice, and incredibly descriptive, description of the image 6.jpg" class="image10">
              </a>
            </li>
            <!--<li>
              <a href="images/7.jpg">
                <img src="images/thumbs/t7.jpg" title="A title for 7.jpg" alt="This is a nice, and incredibly descriptive, description of the image 7.jpg" class="image11">
              </a>
            </li>
            <li>
              <a href="images/8.jpg">
                <img src="images/thumbs/t8.jpg" title="A title for 8.jpg" alt="This is a nice, and incredibly descriptive, description of the image 8.jpg" class="image12">
              </a>
            </li>
            <li>
              <a href="images/9.jpg">
                <img src="images/thumbs/t9.jpg" title="A title for 9.jpg" alt="This is a nice, and incredibly descriptive, description of the image 9.jpg" class="image13">
              </a>
            </li>-->
          </ul>
        </div>
      </div>
    </div>

    

    
  </div>
            
      </div>
        <div id="footerContainer">&copy;Copyright 2012 Kate Dwek Photos .All Right Reserved</div>
    </div>
</body>
</html>
