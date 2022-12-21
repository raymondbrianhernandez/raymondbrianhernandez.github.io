<?php 
include('./shared/head.php');    
include('./shared/navigation.php'); 
?>

<!-- Masthead-->
<header class="masthead">
    <div class="container d-flex p-2 h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Projects</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Hardcore Gamer. Amateur Coder. Git Gud.</h2>
            <a class="btn btn-primary js-scroll-trigger" href="#projects">Explore</a>
        </div>a
    </div>
</header>
        
<!-- Projects-->
<section class="projects-section bg-light" id="projects">
    <div class="container">
        <!-- Projects Section-->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0 center" src="assets/img/github-logo.png" alt="GitHub" width="350" height="150"/>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Github Repositories</h4>
                    <p class="text-black-50 mb-0">A collection of projects written in Python, C++, Java, HTML5, CSS, SQL, and Javascript. 
                        Most projects are developed using Flask, Django, or Apache framework. 
                        Database implementations using MySQL and MongoDB.</p>
                        <p><a href="https://github.com/raymondbrianhernandez" target="_blank">Check out my repositories at Github</a>.</p>
                </div>
            </div>
        </div>
        
        <!-- Project WIP -->    
        <!--<div class="row justify-content-center no-gutters">-->
        <div class="jumbotron" style="text-align: center;">
            <h2><strong>Featured Project(s)</strong></h2>
        </div>

        <!-- Service Records -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7" style="text-align: center;">
                <a href="./projects/service-records/public/index.php" target="_blank">
                    <img class="img-fluid mb-3 mb-lg-0" src="assets/img/RV_new.jpg" alt="" width="550" height="auto"/>
                </a>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4><a href="./projects/service-records/public/index.php" target="_blank">SERVICE RECORDS</a></h4>
                    <p><b>Full-Stack Web Application</b></p>
                    <p>[ HTML5 | CSS | PHP | Apache ]</p>
                    <p class="text-black-50 mb-0">
                        A web app for keeping service records saved on a MySQL database.  
                        Front-end developed using HTML5 and CSS.  Back-end using PHP via Apache Web Server
                    </p>
                        <p><a href="./projects/service-records/public/index.php" target="_blank"><b>Click to Login</b></a></p>
                        <p><a href="https://github.com/raymondbrianhernandez/service_records" target="_blank"><b>Github Repo Here</b></a></p>
                </div>
            </div>
        </div>

        <!-- Bible Game -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7" style="text-align: center;">
                <a href="./projects/service-records/public/index.php" target="_blank">
                    <img class="img-fluid mb-3 mb-lg-0" src="assets/img/bible-game.png" alt="" width="550" height="auto"/>
                </a>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4><a href="./projects/bible-game/public/index.php" target="_blank">Bible Game</a></h4>
                    <p><b>Online Bible Quiz Game</b></p>
                    <p>[ HTML5 | CSS | PHP | Apache ]</p>
                    <p class="text-black-50 mb-0">
                        An online Bible quiz game based.
                    </p>
                        <p><a href="./projects/service-records/public/index.php" target="_blank"><b>Click to Start a New Game</b></a></p>
                        <p><a href="https://github.com/raymondbrianhernandez/bible_game" target="_blank"><b>Github Repo Here</b></a></p>
                </div>
            </div>
        </div>

        <!-- PAST PROJECTS -->
        <div class="jumbotron" style="text-align: center;">
            <h2><strong>Past Projects</strong></h2>
        </div>
        
        <!-- Project Zoom Buttons -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6" style="text-align: center;">
                <a href="https://github.com/raymondbrianhernandez/ZoomButtons" target="_blank">
                    <img class="img-fluid" src="assets/img/zoomButtons.jpg" alt="" width="350" height="auto"/>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4><a href="https://github.com/raymondbrianhernandez/ZoomButtons" target="_blank">Zoom Buttons</a></h4>
                            <p><b>A keyboard shortcut device</b></p>
                            <p>[ Arduino ATTiny85 | C++ ]</p>
                            <p class="mb-0 text-black-100">With a few spare arcade buttons and an ATTiny85 microcontroller, 
                            we can build a simple device to assign basic functions in a Zoom meeting, such as Mute/Unmute, Vide On/Off, and Raise Hand.
                            </p>
                            <p><a href="https://github.com/raymondbrianhernandez/ZoomButtons" target="_blank"><b>Github Repo Here</b></a></p>
                            <hr class="d-none d-lg-block mb-0 ml-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->
        
        <!-- Project Drone -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6" style="text-align: center;">
                
                    <img class="img-fluid" src="assets/img/drone.png" alt="" width="350" height="auto"/>
                
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-black">FPV RACING DRONE (220mm)</h4>
                            <p><b>Why buy a drone?  Build your own.</b></p>
                            <p>[ C | Betaflight ]</p>
                            <p class="mb-0 text-black-100">Building and configuring your own acrobatic racing drone can be
                            both fun and educational.  Here we are building our own racing acrobatic drone while getting familiar with
                            its basic components such as flight controllers (FC), electronic speed controllers (esc), transmitter, receiver, 
                            and different kinds of motors.  Then the drone assembly will be programmed with Betaflight in 
                            command-line mode (CLI).
                            </p>
                            
                            <hr class="d-none d-lg-block mb-0 mr-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- Project Voltes V -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6" style="text-align: center;">
                <a href="https://arbhie306200849.wordpress.com/2020/10/17/voltes-v-crewzer-game/" target="_blank">
                    <img class="img-fluid" src="assets/img/voltesv.jpg" alt="" width="450" height="auto"/>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4><a href="https://github.com/raymondbrianhernandez/voltes_v_crewzer" target="_blank">VOLTES V CREWZER GAME</a></h4>
                            <p><b>A classic Asteroid style game</b></p>
                            <p>[ Python | Pygame ]</p>
                            <p class="mb-0 text-black-100">A classic spaceship shooter retro arcade game 
                                inspired by the classic Asteroid game.  Voltes V is my favorite mecha-anime 
                                series from the 70's.  The code explores the collisions properties and how 
                                classes are organized in Python.  It also tracks the unused bullets to optimize memory.​    
                            </p>
                            <p><a href="https://github.com/raymondbrianhernandez/ZoomButtons" target="_blank"><b>Github Repo Here</b></a></p>
                            <hr class="d-none d-lg-block mb-0 ml-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- Project Flappy Bird -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6"><a href="https://arbhie306200849.wordpress.com/2020/10/25/flappy-bird-clone/" target="_blank">
                <img class="img-fluid" src="assets/img/flappy_bird.jfif" alt="" width="550" height="450"/></a>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-black"><a href="https://arbhie306200849.wordpress.com/2020/10/25/flappy-bird-clone/" target="_blank">FLAPPY BIRD CLONE</a></h4>
                            <p><b>[Python/Pygame]</b></p>
                            <p class="mb-0 text-black-100">A clone of the popular Flappy Bird game released for 
                                mobile devices.  The code explores the capabilities of randomized pipe heights, 
                                collisions, and 2D scrolling.
                            </p>
                            <p><a href="https://arbhie306200849.wordpress.com/2020/10/25/flappy-bird-clone/" target="_blank"><b>Check out project's blog.</b></a></p>
                            <hr class="d-none d-lg-block mb-0 mr-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- Project Excel Encrypt-->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6"><a href="https://arbhie306200849.wordpress.com/2020/12/20/excel-encrypt-data//" target="_blank">
                <img class="img-fluid" src="assets/img/encrypt.jpg" alt="" width="550" height="450"/></a>
            </div>
            <div class="col-lg-6">
                <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-black"><a href="https://arbhie306200849.wordpress.com/2020/12/20/excel-encrypt-data//" target="_blank">EXCEL ENCRYPT DATA</a></h4>
                            <p><b>[Python/Panda/ItsDangerous]</b></p>
                            <p class="mb-0 text-black-100">A script to encrypt excel data files.  
                                Encrypts and decrypts the excel file using a master key.  
                                Ideal for data scientists who needs to keep data secured.​    
                            </p>
                            <p><a href="https://arbhie306200849.wordpress.com/2020/12/20/excel-encrypt-data//" target="_blank"><b>Check out project's blog.</b></a></p>
                            <hr class="d-none d-lg-block mb-0 ml-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- Project Phone Witnessing -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6"><a href="https://arbhie306200849.wordpress.com/2022/08/12/phone-witnessing-tool/">
                <img class="img-fluid" src="assets/img/PhoneWitnessing.PNG" alt="" width="550" height="450" /></a>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-black"><a href="https://arbhie306200849.wordpress.com/2022/08/12/phone-witnessing-tool/">PHONE WITNESSING TOOL</a></h4>
                            <p><b>[Python/PyQt5/BeautifulSoup/URLlib.request]</b></p>
                            <p class="mb-0 text-black-100"> 
                                A program that parses and scrapes data from public white pages directory 
                                and family ancestry to gather information about a caller ID.
                            </p>
                            <p><a href="https://arbhie306200849.wordpress.com/2022/08/12/phone-witnessing-tool/"><b>Check out project's blog.</b></a></p>
                            <hr class="d-none d-lg-block mb-0 mr-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- Project Retro -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6"><a href="https://arbhie306200849.wordpress.com/2022/08/12/retro-website/">
                <img class="img-fluid" src="assets/img/retro.JPG" alt="" width="550" height="450"/></a>
            </div>
            <div class="col-lg-6">
                <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-black"><a href="https://arbhie306200849.wordpress.com/2022/08/12/retro-website/">90'S STYLE GEOCITIES WEBSPACE</a></h4>
                            <p><b>[HTML5/CSS/Bootstrap]</b></p>
                            <p class="mb-0 text-black-100">An homage to Geocities Webspace maker
                                where almost everyone posted anything on the internet.  Of course, the dancing baby
                                GIF is a staple. ​    
                            </p>
                            <p><a href="https://arbhie306200849.wordpress.com/2022/08/12/retro-website/"><b>Check out project's blog.</b></a></p>
                            <hr class="d-none d-lg-block mb-0 ml-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- Project Audio Recorder -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6"><a href="https://arbhie306200849.wordpress.com/2022/08/12/audio-recorder/">
                <img class="img-fluid" src="assets/img/Arduino_Uno_-_R3.jpg" alt="" width="550" height="450"/></a>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-black"><a href="https://arbhie306200849.wordpress.com/2022/08/12/audio-recorder/">ARDUINO AUDIO RECORDER</a></h4>
                            <p><b>[C++/Arduino]</b></p>
                            <p class="mb-0 text-black-100">Designed an audio recorder for both 
                                lines in audio signals and microphone signals that enables to be recorded in 
                                an SD card at 44.1 kHz sample rate using 16-bit samples.  Pre-amplifier and 
                                output amplifier are designed using PSPICE using 741 op-amp chip, discreet components, 
                                and hardware for playback/recording.
                            </p>
                            <p><a href="https://arbhie306200849.wordpress.com/2022/08/12/audio-recorder/"><b>Check out project's blog.</b></a></p>
                            <hr class="d-none d-lg-block mb-0 mr-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- Project Pocket Uni -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6"><a href="https://arbhie306200849.wordpress.com/2022/08/12/pocket-uni/">
                <img class="img-fluid" src="assets/img/pocketUNI.png" alt="" width="550" height="450"/></a>
            </div>
            <div class="col-lg-6">
                <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-black"><a href=https://arbhie306200849.wordpress.com/2022/08/12/pocket-uni/">POCKET-UNI MOBILE APP</a></h4>
                            <p><b>[Java/MySQL]</b></p>
                            <p class="mb-0 text-black-100">An app for Android devices to assist students in their academics.  
                                It features an assignment manager, messaging service, and a market like Craigslist.  
                                Students need to use their CSUN email to sign-up for security.  Coded in Javascript using Android Studio.  
                                Registered users are managed through a MySQL database. ​    
                            </p>
                            <p><a href="https://arbhie306200849.wordpress.com/2022/08/12/pocket-uni/"><b>Check out project's blog.</b></a></p>
                            <hr class="d-none d-lg-block mb-0 ml-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- Project Auto-Zoom -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6"><a href="https://arbhie306200849.wordpress.com/2022/08/12/auto-zoom/">
                <img class="img-fluid" src="assets/img/zoom.png" alt="" width="550" height="450"/></a>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-black"><a href="https://arbhie306200849.wordpress.com/2022/08/12/auto-zoom/">ZOOM AUTO-JOIN/HOST</a></h4>
                            <p><b>[Python/Scheduler/PyAutoGui]</b></p>
                            <p class="mb-0 text-black-100">A script to automate Zoom hosting
                                by specified date and time.  Customizable options too, such as automating various 
                                functions such as disabling waiting rooms, muting all participants, and ending the meeting
                                on a time limit.  It also can join an existing meeting by saving the meeting ID and password
                                on an external file.
                            </p>
                            <p><a href="https://arbhie306200849.wordpress.com/2022/08/12/auto-zoom/"><b>Check out project's blog.</b></a></p>
                            <hr class="d-none d-lg-block mb-0 mr-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->
        
        <!-- Project Breathalyzer -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6"><a href="https://arbhie306200849.wordpress.com/2022/08/12/breathalyzer/">
                <img class="img-fluid" src="assets/img/zybo-0.png" alt="" width="550" height="450"/></a>
            </div>
            <div class="col-lg-6">
                <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-black"><a href="https://arbhie306200849.wordpress.com/2022/08/12/breathalyzer/">BREATHALYZER</a></h4>
                            <p><b>[VHDL/Zybo Zynq-7000]</b></p>
                            <p class="mb-0 text-black-100">A breathalyzer is a device for estimating blood alcohol 
                            content (BAC) from a breath sample.  Law enforcements currently use this device to approximately measure 
                            the alcohol level in the blood by breath sample.  In the U.S., it is illegal to operate any vehicle if 
                            the approximated bac is greater than or equal to 0.08%.  Still, an accurate test would be a blood sample.​    
                            </p>
                            <p><a href="https://arbhie306200849.wordpress.com/2022/08/12/breathalyzer/"><b>Check out project's blog.</b></a></p>
                            <hr class="d-none d-lg-block mb-0 ml-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->

    </div>
</section>



<?php

include('./shared/footer.php');

?>        