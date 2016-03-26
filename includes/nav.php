<!--MAIN NAV-->

<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<nav id="navigation">
    <ul id="main-menu">
    	<li class="mobile"><a href="portal.php">Patient Portal: Login</a></li>
        <li class="sm nav<?php if ($page == 'about.php' || $page == 'mission.php' || $page == 'history.php' || $page == 'physicians.php' || $page == 'physician_assistants.php' || $page == 'staff.php') { print '-on'; } ?>"><a href="about.php">About Us</a>
        	<ul class="sub-menu">
        		<li><a href="#">Mission</a></li>
                <li><a href="#">History</a></li>
                <li><a href="physicians.php">Physicians</a></li>
                <li><a href="physician_assistants.php">Physician Assistants</a></li>
                <li><a href="#">Staff</a></li>
            </ul>  <!--end sub-menu-->
        </li>
        <li class="lg nav<?php if ($page == 'procedures-services.php') { print '-on'; } ?>"><a href="procedures-services.php">Procedures &amp; Services</a>
        	<ul class="sub-menu">
        		<li><a href="#">Skin Exams &amp; Biopsies</a></li>
                <li><a href="#">Photodynamic Therapy (Blue Light)</a></li>
                <li><a href="#">Surgical Procedures</a></li>
            </ul>  <!--end sub-menu-->
        </li>
        <li class="med nav<?php if ($page == 'education.php') { print '-on'; } ?>"><a href="education.php">Educational Info</a>
            <ul class="sub-menu">
        		<li><a href="#">ABCDEs of Skin Cancer</a></li>
                <li><a href="#">Glossary of Terms</a></li>
                <li><a href="#">Skin Cancer Myths</a></li>
                <li><a href="#">6 Skin Types</a></li>
                <li><a href="#">Self Examination</a></li>
                <li><a href="#">Sun Safety</a></li>
            </ul>  <!--end sub-menu-->
		</li>
        <li class="med nav<?php if ($page == 'resources.php' || $page == 'forms_notices.php' || $page == 'insurance.php' || $page == 'cancellations.php') { print '-on'; } ?>"><a href="resources.php">Patient Resources</a>
        	<ul class="sub-menu">
        		<li><a href="forms_notices.php">Patient Forms &amp; Notices</a></li>
                <li><a href="insurance.php">Insurance Information</a></li>
                <li><a href="cancellations.php">Cancellation &amp; Missed Appointment Policy</a></li>
            </ul>  <!--end sub-menu-->
        </li>
        <li class="sm nav<?php if ($page == 'contact.php' || $page == 'seattle.php' || $page == 'bellevue.php') { print '-on'; } ?>"><a href="contact.php">Contact Us</a>
        	<ul class="sub-menu">
        		<li><a href="seattle.php">Seattle</a></li>
                <li><a href="bellevue.php">Bellevue</a></li>
            </ul>  <!--end sub-menu-->
        </li>
    </ul>
</nav>
