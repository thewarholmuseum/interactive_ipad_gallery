<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Template Photo Gallery</title>
<link href="css/blueimp-gallery.min.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-display">
    <div class="slides" style="height: 100%"></div>
  </div>

  <div id="links">
  <?php 
      error_reporting(E_ALL);
      ini_set('display_errors', '1'); ?>
  <?php
  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.

  function getFileList($dir)
  {
    // array to hold return value
    $retval = array();

    // add trailing slash if missing
    if(substr($dir, -1) != "/") $dir .= "/";

    // open directory for reading
    $d = new DirectoryIterator($dir) or die("getFileList: Failed opening directory $dir for reading");
    foreach($d as $fileinfo) {
      // skip hidden files
      if($fileinfo->isDot()) continue;
      $retval[] = array(
        'name' => "{$dir}{$fileinfo}",
        'type' => ($fileinfo->getType() == "dir"),
        'size' => $fileinfo->getSize(),
        'lastmod' => $fileinfo->getMTime()
      );
    }

    return $retval;
  }
?>
<?php
  $dirlist = getFileList("template_photos");
    foreach($dirlist as $file) {
      echo "<a href=\"{$file['name']}\">"/*,dirname($file['name']) . "/" .  basename($file['name']),"</a>\n"*/;
    }
?>
</div>

<script src="js/blueimp-gallery.min.js"></script>


<script>
    /*    If the **carousel** option is **true**, the following options are set to
    different default values:

    ```js
    var carouselOptions = {
      hidePageScrollbars: false,
      toggleControlsOnReturn: false,
      toggleSlideshowOnSpace: false,
      enableKeyboardNavigation: false,
      closeOnEscape: false,
      closeOnSlideClick: false,
      closeOnSwipeUpOrDown: false,
      disableScroll: false,
      startSlideshow: true
    };*/
    
    blueimp.Gallery(
      document.getElementById('links').getElementsByTagName('a'),
      {
        container: '#blueimp-gallery-carousel',
        carousel: true,
        startSlideshow: false,
        continuous: true,
        stretchImages: true,
        toggleControlsOnSlideClick: false,
        hidePageScrollbars: true,
        enableKeyboardNavigation: true,
      }
    );


  </script>
</body>
</html>
