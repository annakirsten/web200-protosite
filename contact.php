<?php include 'includes/doc.php';?>

<title>Skin Surgery Center: Contact Us</title>

</head>
<body>

<?php include 'includes/header.php';?>
<?php include 'includes/nav.php';?>

<div id="wrapper">
<main class="inner contact">

<h1>Contact Us</h1>
<p>Questions? Comments? Use this form to let us know. Please use for informational enquires and comments only.</p>
<p>To schedule an appointment, please call the clinic you would like to schedule with.</p>
<p>If you have a medical emergency or need immediate assistance, call 911.</p>

<!--contact form-->
<fieldset>

<form action="formhandler.php" method="post" id="form">

<legend></legend>

<input type="text" name="first_name" id="first_name" placeholder=" First Name">
<input type="text" name="last_name" id="last_name" placeholder=" Last Name">
<input type="tel" name="telephone" id="telephone" placeholder=" Phone Number">
<input type="email" name="email" id="email" placeholder=" Email Address">

<label>Have we seen you in our clinics before?</label>
<p><input type="radio" name="patient_type" value="new patient" >No, I'm a new patient.</p>
<p><input type="radio" name="patient_type" value="est patient" >Yes, I'm an established patient.</p>

<label>Which office do you prefer? (Select both if you have no preference.)</label>
<p><input type="checkbox" name="location" value="Bellevue" >Bellevue</p>
<p><input type="checkbox" name="location" value="Seattle" >Seattle</p>

<textarea name="comments" rows="6" id="comments" placeholder=" Questions, Comments"></textarea><br>

<input type="submit" value="Send" id="submit">

</form>

</fieldset>

</main>

<aside class="contact">
<h2>Locations</h2>

<h3><a href="bellevue.php">Bellevue Clinic</a></h3>
<p>1551 116th Ave. NE<br>
Bellevue, WA 98004</p>
<p>Phone: 425-455-8647</p>

<div class="google-maps"
<!--bv office contact page-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21512.683203399953!2d-122.20386856174011!3d47.62447117918584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906cf24be8c7c7%3A0x70cdb8ba12d449db!2s1551+116th+Ave+NE%2C+Bellevue%2C+WA+98004!5e0!3m2!1sen!2sus!4v1458932491567" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>  <!--end bellevue google-maps-->
<div class="learn-more"><h4><a href="bellevue.php">Details about this location<img src="images/arrow-r-black.png" alt="arrow"></a></h4></div>

<h3><a href="seattle.php">Seattle Clinic</a></h3>
<p>1229 Madison Street<br>
Nordstrom Medical Tower<br>
Suite 1480<br>
Seattle, WA 98104</p>
<p>Phone: 206-346-6647</p>

<div class="google-maps">
<!--sea office contact page-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21518.60226691053!2d-122.33962296174067!3d47.610086879184855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ac9a0677db3%3A0x214c846514fbc55b!2s1229+Madison+St+%231480%2C+Seattle%2C+WA+98104!5e0!3m2!1sen!2sus!4v1458931584648" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>  <!--end seattle google-maps-->
<div class="learn-more"><h4><a href="seattle.php">Details about this location<img src="images/arrow-r-black.png" alt="arrow"></a></h4></div>

</aside>

</div>  <!--end wrapper-->

<?php include 'includes/footer.php';?>

</body>
</html>
