### Hello! In this document you will find all the information you need about interactive iPad displays in the exhibits at The Warhol!

This document will be split up into the following sections:
    Credits
    Introduction
    Things to Note
    Troubleshooting
    Archiving
    Resources
    Nuclear Meltdown Contact
    
Thanks for reading! 

#### Credits

      Sebastian Tschan for the blueimp plugin
   
      The swipe implementation is based on code from the Swipe library.
    
#### Introduction:
    This gallery implementation is built of three key parts. A php webpage, a gallery plugin (blueimp) and a full-screen browser (frameless).
    
    The base webpage code file is template.php. This is the document that should be opened, resaved and edited under a new name anytime a new gallery is needed. It is fully commented with what-does-what and should be read through thoroughly before making changes. The code looks for a folder in the same directory as the .php file as specified by you on the line $dirlist = getFileList("template_photos"). It takes all files (folder should only contain IMAGE files: .jpeg, .png, .tiff, .svg) and formats them in a way that blueimp can understand.
    
    
    Blueimp is the pre-styled gallery plugin that is used to display the images. Blueimp is easy to install and customize. All customizations have already been done for The Warhol implementation of this code. There are really only three scenarios where you should need/want to change the way the gallery is displayed.
        
        1. You want to change some basic formatting/interactions: 
            This is super easy to do. The full list of controls and their activators (most are true/false) is available at https://github.com/blueimp/Gallery/blob/master/README.md#options. For example, does the scroll bar appear on the gallery, does the light box when clicked on, does the image take up the whole screen automatically, etc. I've commented a list of the carousel defaults in the code itself.

        2. You want to add audio/video content from a folder:
            Blueimp can play audio/video from a folder with some additional packages. Navigate to https://github.com/blueimp/Gallery and copy/paste the css (blueimp-gallery-video.css) and js (blueimp-gallery-video.js) files to the appropriate folders in your root directory. See documentation at https://github.com/blueimp/Gallery#video-options for video options. 

        3. You want to pull images/video dynamically from some other source (e.g. online database): 
            This is more complicated. It requires some jQuery knowledge and installation of jQuery packages. See https://github.com/blueimp/Gallery#api for more information.
        
    
    Frameless (https://apple.co/2LKREsN) is the full screen browsing app that we use to display the gallery sites while in Guided Access mode on the iPads. Its icon is blue with the letter F. Open the app and swipe up from the bottom of the iPad (physical body, not the bottom edge of the screen). Enter in to the navigation bar and enter the URL of the gallery that you want to display. Hit go. Put the iPad back into Guided Access mode.
        
        All of the galleries live on the FTP Server in the same directory and the full path to this directory MUST be used.
        
        That directory URL is exhibitions.warhol.org/galleries/FILE_NAME.php. FILE_NAME is the name of the gallery you wish to view. A list of active galleries should live with Visitor Services, Exhibitions, and Digital Engagement. The Warhol model uses a google spread sheet to track galleries, links and active status.
        
        The galleries auto refresh every two hours to prevent a timeout bug that we ran into in early stages; don't worry if you see the page reloading every now and again. 
        

#### Things to Note:
    The iPads need to be in Guided Access with Restrictions ON in order to prevent visitors from navigating elsewhere.
    
    The galleries live at exhibitions.warhol.org/galleries/FILE_NAME.php.
    
    The iPads need to be up-to-date on software and plugged in at all times. Otherwise they start crashing, rebooting, and dying. This causes Frameless to quit or the iPad to require a password to sign back in.
    

#### Troubleshooting iPads at the museum:
    We've had surprisingly few issues with the Page/Plugin/Frameless combo but here's what we have experienced.
    
    Page timeout leaves blank white screen? (FIXED)
        1. (FIX) meta line in webpage code forces page to refresh every two hours.
        2. (OLD) Manual Refresh - take iPad out of case, swipe up from bottom of screen and without changing URL hit blue "GO" button.
    
    iPad black screen? (CAUSE UNKNOWN)
        1. Makes sure the iPad is in Guided Access. Visitors can manually put the iPad to sleep or turn off using the top hard button if it is not in guided access
        2. Make sure to set the sleep interval to "never." Settings>Display and Brightness>Auto Lock = Never.
        
    404 Error?
        1. Make sure the URL is correct: exhibitions.warhol.org/galleries/FILE_NAME.php – It is important to note that naming language is underscores (_) not dashes (-) and forward (/) not backward (\) slashes.
        2. If the URL is PERFECT (and you double checked) the file may have accidently been removed from the server or may have the wrong name/wrong picture folder reference. Report error to Digital Engagement. 
            Digital Engagement:  Make sure the FILE_NAME.php is present in the root folder of the /galleries directory on the FTP server and not nested in a folder. Nesting does not work for webpages. Make sure in the page code that the name of the image folder reference is correct. It may not always match the web page name. For instance: the page "boybook_1.php" referenced a folder of images named "1998_1_1789_1_21" the folder was named based on archives language for the sake of identifying the collection of images. The page was named "boybook_1" because who the heck would remember what photos where in 1998_1_1789_1_21 vs 1998_1_1793_1_23.
        3. Did you check the URL?
        
    Page won't load?
        1. Check the wifi. All iPads should be on CMPStaff.
        2. Try it in Safari browser, if that works, close and reopen Frameless. 
        3. Power off then power on iPad
    
        
#### Archiving    
    Old galleries (still working, just no longer in use) should be moved to the Archive directory in the /galleries root folder. Place BOTH the OLD_FILE_NAME.php and the OLD_IMAGE_FOLDER in the /galleries/archive directory on the FTP Server.

#### Resources:
    https://github.com/blueimp/Gallery
    https://stackoverflow.com/
    https://www.w3schools.com/pHP/default.asp
        
    <3<3<3 Alex Reed
