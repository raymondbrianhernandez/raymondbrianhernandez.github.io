<?php 
include('./shared/head.php');    
include('./shared/navigation.php'); 
?>

<!-- Masthead-->
<header class="masthead">
    <div class="container d-flex p-2 h-100 align-items-center">
        <div class="mx-auto text-center">
            <!--h2 class="mx-auto mt-2 mb-5" style="color:#F9080C">(March 19, 2021) Parts of this site are still under construction.</h2-->
            <h1 class="mx-auto my-0 text-uppercase">Raymond's Digital Playground</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Hardcore Gamer. Amateur Coder. Git Gud.</h2>
            <a class="btn btn-primary js-scroll-trigger" href="#about">Who?</a>
            <a class="btn btn-primary js-scroll-trigger" href="projects.php">Browse Projects</a>
        </div>
    </div>
</header>

<!-- About-->
<section class="about-section text-center" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-black mb-4">Raymond Hernandez, MSEM</h2>
                <img src="assets\img\profile.jpeg" width="auto" height="150" style="border-radius:20px;"/>
                <br><br>
                <p class="text-black-50">
                    I am an I.T. Specialist with a passion for hardware and 
                    software development.  I received my Bachelor of Science degree 
                    in Computer Engineering from California State University - Northridge. 
                    I received my Master of Science degree in Engineering Management with 
                    a specialization in Systems Engineering from National University - San Diego.
                </p>
                <p class="text-black-50">
                    In my free time, I play the guitar, play video games, collect vintage Japanese robots
                    and binge-watch the Star Wars trilogy.
                </p>
                <p class="text-black-50">
                    I documented the projects here for peer review and educational purposes.  
                </p>
                <p>
                    <h5>
                        <a href="https://www.linkedin.com/in/raymond-brian-d-hernandez-msem-a0510a71" target="_blank">
                            <img src="assets/logos/linkedinbanner.jpg" alt="LinkedIn Profile" height="50" />
                        </a>
                    </h5>
                </p>
                <p>
                    <a class="btn btn-primary js-scroll-trigger" href="projects.php">Browse Projects</a>
                </p>
                <br><hr>
                
                <!-- Professional Background -->
                <div class="text-black-50">
                    <button type="button" class="collapsible">
                        <h5 class="text-black mb-4"><b> VIEW PROFESSIONAL BACKGROUND </b></h5>
                    </button>

                    <div class="content text-black mb-4"> <!-- Collapses from here -->
                        <hr width="50%" color="black">
                        <h5><b>IT Coordinator, Information Systems Support Services</b><br></h5>
                        <i><b>National Univerity, San Diego, CA (2013 - current)</b></i>
                        <br><br>
                        <div>
                            <ul>
                                <li>Coordinated new campus site projects and business offices for multiple locations. </li>
                                <li>Successfully managed the University's active directory domain for 400+ workstations.</li>
                                <li>Successfully administered training to computer lab technicians and staff with applications such as
                                    Workday, PeopleSoft, and SOAR.</li>
                                <li>Spearheaded conversion of staff, faculty, and student remote setup due to the Covid-19 pandemic.</li>
                            </ul>
                        </div>
                        <div>
                            <p>
                                <img src="assets\logos\azure.png" alt="Microsoft Azure" width="auto" height="50">
                                <img src="assets\logos\cisco.png" alt="Cisco Networks" width="auto" height="50">
                                <img src="assets\logos\linux.png" alt="Linux Operating System" width="auto" height="50">
                                <img src="assets\logos\logmein.png" alt="LogMeIn Central" width="auto" height="50">
                                <img src="assets\logos\office365.jpg" alt="Microsoft Office 365" width="auto" height="50">
                                <img src="assets\logos\oracle.png" alt="Oracle Peoplesoft" width="auto" height="50">
                            </p>
                            <p>
                                <img src="assets\logos\paloalto.png" alt="Palo Alto Networks" width="auto" height="50">
                                <img src="assets\logos\python.png" alt="Python" width="auto" height="50">
                                <img src="assets\logos\unix.png" alt="Unix" width="auto" height="50">
                                <img src="assets\logos\winserver.png" alt="Windows Servers" width="auto" height="50">
                                <img src="assets\logos\workday.png" alt="Workday" width="auto" height="50">
                            </p>
                        </div><br><hr>

                        <h5><b>Business Analyst, SAP</b><br></h5>
                        <i><b>St. Jude Medical CRMD, Sylmar, CA (2006 - 2010)</b></i>
                        <br><br>
                        <div>
                            <ul>
                                <li>Successfully planned and expedited multiple medical device product launches, 
                                    increasing efficiency
                                    by 30%. </li>
                                <li>Implemented Six Sigma lean practices on assembly lines, reducing waste by $600K.</li>
                                <li>Reduced errors in data migration by analyzing assembly lines and facilitating data migration from
                                    CRM MFG/Pro to SAP.</li>
                                <li>Awarded Green Belt and Black Belt Six Sigma Projects.</li>
                                <li>Participated in multiple R&D Projects, Build of Materials, 
                                    and data analysis using Excel, SQL, R, and MS Access. </li>
                            </ul>
                        </div>
                        <div>
                            <p>
                                <img src="assets\logos\r.jpg" alt="R Statistical Language" width="auto" height="50">
                                <img src="assets\logos\msaccess.png" alt="Microsogt Access" width="auto" height="50">
                                <img src="assets\logos\mfgpro.png" alt="MFG/Pro" width="auto" height="30">
                                
                            </p>
                            <p>
                                <img src="assets\logos\sap.jpg" alt="SAP" width="auto" height="50">
                                <img src="assets\logos\mssql.png" alt="Microsoft SQL Server" width="auto" height="70">
                                <img src="assets\logos\sixsigma.png" alt="Six Sigma" width="auto" height="30">
                            </p>
                        </div><br><hr>

                        <h5><b>Low Voltage Engineer</b><br></h5>
                        <i><b>Magna Air, Santa Monica, CA (2003 - 2006)</b></i>
                        <br><br>
                        <div>
                            <ul>
                                <li>Successfully scripted PLC & RTU programs to create HVAC smart systems for 100+ clients, 
                                    reducing energy consumption by an average of 30%. </li>
                                <li>Increased client satisfaction by 80% by creating custom C/C++ programs that automated pneumatic &
                                    humidity control systems.</li>
                                <li>Saved the company $100,000 annually by streamlining the PLC programming process through
                                    embedded programming.</li>
                            </ul>
                        </div>
                        <div>
                            <p>
                                <img src="assets\logos\c.png" alt="C Programming Language" width="auto" height="50">
                                <img src="assets\logos\cpp.png" alt="Cpp Programming Language" width="auto" height="50">
                            </p>
                        </div><br><hr>

                        <h5><b>Desktop Support Specialist</b><br></h5>
                        <i><b>UPS Store - Mail Shoppe, Canoga Park, CA (2000 - 2003)</b></i>
                        <br><br>
                        <div>
                            <ul>
                                <li>Established a working relationship and understanding of dedicated support areas to communicate
                                    effectively verbally and in writing with clients and management. </li>
                                <li>Maintained accurate information and data regarding end-user issues within the tracking system and
                                    according to policies and standards.</li>
                            </ul>
                        </div>
                        <div>
                            <p>
                                <img src="assets\logos\winnt.jpg" alt="Windows NT" width="auto" height="100">
                                <img src="assets\logos\winxp.jpg" alt="Windows XP" width="auto" height="100">
                            </p>
                        </div><br><hr>
                    </div>
                </div>
                <br> <!-- End Professional Background -->

                <!-- Education -->
                <div class="text-black-50">
                    <button type="button" class="collapsible">
                        <h5 class="text-black mb-4" ><b> VIEW EDUCATION </b></h5>
                    </button>
                    <div class="content text-black mb-4"> <!-- Collapses from here -->
                        <hr width="50%" color="black">

                        <h5><b>Master of Science - Engineering Management (2019)</b><br></h5>
                        <i><b>National Univerity, San Diego, CA</b></i>
                        <br><br>
                        <div>
                            <p><img src="assets\logos\nu.jpg" alt="National University" width="auto" height="100"></p>
                        </div><br><hr>

                        <h5><b>Bachelor of Science - Computer Engineering (2017)</b><br></h5>
                        <i><b>California State Univerity, Northridge, CA</b></i>
                        <br><br>
                        <div>
                            <p><img src="assets\logos\csun.jpg" alt="CSUN" width="auto" height="100"></p>
                        </div><br><hr>

                        <h5><b>Associate of Science - Computer Science (2013)</b><br></h5>
                        <i><b>Los Angeles Pierce College, Woodland Hills, CA</b></i>
                        <br><br>
                        <div>
                            <p><img src="assets\logos\pierce.jpg" alt="Pierce College" width="auto" height="100"></p>
                        </div><br><hr>

                        <h5><b>Electronic and Communications Engineering (2000 - Credits)</b><br></h5>
                        <i><b>University of the East, Manila, Philippines</b></i>
                        <br><br>
                        <div>
                            <p><img src="assets\logos\ue.png" alt="University of the East" width="auto" height="100"></p>
                        </div><br><hr>
                    </div>
                </div><BR>

                <!-- Certifications -->
                <div class="text-black-50">
                    <button type="button" class="collapsible">
                        <h5 class="text-black mb-4"><b>VIEW CERTIFICATES</b></h5>
                    </button>
                    <div class="content text-black mb-4"> <!-- Collapses from here -->
                        <hr width="50%" color="black">

                        <h5><b>IBM Full Stack Software Developer (2022)</b><br></h5>
                        <p><a href="https://www.coursera.org/account/accomplishments/specialization/certificate/UJ4BADVB4YUZ" target="_blank">View Credential</a></p>
                        <div style="flex:1;">
                            <p><img src="assets\logos\ibm.jpg" alt="Google" width="auto" height="50"></p>
                        </div><br><hr>
                        
                        <h5><b>Google Data Analytics (2022)</b><br></h5>
                        <p><a href="https://www.coursera.org/account/accomplishments/specialization/certificate/GU4LLD7GCCAS" target="_blank">View Credential</a></p>
                        <div style="flex:1;">
                            <p><img src="assets\logos\google.png" alt="Google" width="auto" height="50"></p>
                        </div><br><hr>

                        <h5><b>IBM Data Science (2022)</b><br></h5>
                        <p><a href="https://www.coursera.org/account/accomplishments/specialization/certificate/AS9BEF347QMK" target="_blank">View Credential</a></p>
                        <div style="flex:1;">
                            <p><img src="assets\logos\ibm.jpg" alt="Google" width="auto" height="50"></p>
                        </div><br><hr>

                        <h5><b>IBM Data Analyst (2022)</b><br></h5>
                        <p><a href="https://www.coursera.org/account/accomplishments/specialization/certificate/PXB72W8JTDTF" target="_blank">View Credential</a></p>
                        <div style="flex:1;">
                            <p><img src="assets\logos\ibm.jpg" alt="Google" width="auto" height="50"></p>
                        </div><br><hr>

                        <h5><b>Google Project Management (2022)</b><br></h5>
                        <p><a href="https://www.coursera.org/account/accomplishments/specialization/certificate/56UBE5M3FTKX" target="_blank">View Credential</a></p>
                        <div style="flex:1;">
                            <p><img src="assets\logos\google.png" alt="Google" width="auto" height="50"></p>
                        </div><br><hr>

                        <h5><b>Google IT Automation with Python (2022)</b><br></h5>
                        <p><a href="https://www.coursera.org/account/accomplishments/specialization/certificate/TMCR8NM7A4K7" target="_blank">View Credential</a></p>
                        <div style="flex:1;">
                            <p><img src="assets\logos\google.png" alt="Google" width="auto" height="50"></p>
                        </div><br><hr>

                        <h5><b>Master SQL for Data Science (2022)</b><br></h5>
                        <p><a href="assets\pdf\CertificateOfCompletion_Master SQL for Data Science.pdf" target="_blank">View Credential</a></p>
                        <div style="flex:1;">
                            <p><img src="assets\logos\linkedinlearning.jpg" alt="Google" width="auto" height="50"></p>
                        </div><br><hr>

                        <h5><b>Computer Science for Business (2012)</b><br></h5>
                        <p>Los Angeles Pierce College</p>
                        <div style="flex:1;">
                            <p><img src="assets\logos\pierce.jpg" alt="Google" width="auto" height="90"></p>
                        </div><br><hr>

                    </div>
                </div>
            </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<
<!-- Contact Info -->
<section class="signup-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5"><a href="mailto:arbhie@arbhie.com" style="color:white;">arbhie@arbhie.com</a></h2>
                <p style="color:white">
                    <a href="https://www.linkedin.com/in/raymond-brian-d-hernandez-msem-a0510a71" target="blank">
                        <img src="assets/logos/linkedin.png" width="50" height="auto" alt="LinkedIn">
                    </a>
                    <a href="https://www.linkedin.com/in/raymond-brian-d-hernandez-msem-a0510a71" target="blank">
                        <img src="assets/logos/instagram.png" width="50" height="auto" alt="Instagram">
                    </a>
                    <a href="https://www.facebook.com/garu525/" target="blank">
                        <img src="assets/logos/facebook.png" width="50" height="auto" alt="Facebook">
                    </a>
                    <p><img src="assets/img/arbhieLOGO.png" width="300" height="auto" alt="LinkedIn"></p>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
include('./shared/footer.php');
?> 

<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>