<?php
session_set_cookie_params('3600');
session_start();
$Body = "";
$errors = 0;
$email = ""
 //set for 1 hour
 ?>
<html ng-app>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<body>
<img src="mlilogo.jpg" alt = "logo">


<?php


function validateInput($data, $fieldName) {
     global $errorCount;
     if (empty($data)) {
          echo "\"$fieldName\" is a required field.<br/>\n";
          ++$errorCount;
          $retval = "";
     } else { // Only clean up the input if it isn't empty
          $retval = trim($data);
          $retval = stripslashes($retval);
     }
     return($retval);
}







?>
<?php
function displayForm($Question1, $question1, $question2,$question3,$question4, $question5, 
$question6, $question7, $question8, $question9, $question10, $question11, $question12,
$question13, $question14, $question15, $question16, $question17, $question18,$question19,
$question20){
	?>
<form action="quiz.php" method="post" >

<h3>       Instructor: Judith Cyrille CLASS: COT V PowerPoint TEST #2:   SESSION: Morning   </h3>
<p>Name: <input type="text" name="Question1" value="<?php
     echo $Question1; ?>" /></p>
	 
	<p> Test #2-Review</p>
     <p>Multiple Choice</p>
<p>Identify the choice that best completes the statement or answers the question.</p>
<p>Case PPT1</p>
Kate is copying data from other programs into PowerPoint.  She is using some of the Paste Special options to paste the information.


<ol>
    <li> The first data that Kate is pasting is text from a Word Document.  She wants to paste it so that she can continue to edit this portion of text in Microsoft Word. 
	What Paste Special option should Kate use to paste the Word Document text?<br/></li>
	<label for ='answerOneA' >a.	Microsoft Office Word </label><br/>

	<label for ='answerOneB' >b.	Formatted Text</label><br/>

	<label for ='answerOneC' >c.	Unformatted Text</label><br/>
	
	<label for ='answerOneD' >d.	Microsoft Office Text</label><br/>
    <input type="text" name="question1" value=" <?php echo $question1;?>">
   
	</li>

	<li>	Case PPT 
Sam wants to send his presentation via e-mail to some co-workers.
____Once Sam sends the presentation to his co-worker, what happens to the presentation after a copy of it was sent?
<br/>

	<label for ='answerOneA' >a.	It stays open on Sam’s computer, and he can continue to work on it.</label><br/>

	<label for ='answerOneB' >b.	It is saved and the file closes.</label><br/>

	<label for ='answerOneC' >c.	It stays open on Sam’s computer, but he cannot work on it until the e-mail recipient opens the presentation and responds.</label><br/>
    <label for ='answerOneD' >d.	It stays open, but the content is locked and cannot be edited until it is re-opened.</label><br/>
  
    <input type="text" name="question2" value=" <?php echo $question2;?>">

  <li>Sam has the presentation he wants to e-mail open.  He now wants to e-mail it to a co-worker.  Sam will click the File tab, click ____, click Send using E-mail and then click Send as Attachment. 	<br/></li>

	<label for ='answerOneA' >a. Save	</label><br/>

	<label for ='answerOneB' >b. Save & Send </label><br/>

	<label for ='answerOneC' >c. Save & Attach </label><br/>
    <label for ='answerOneD' >d. Attachment</label><br/>
  
  <input type="text" name="question3" value=" <?php echo $question3;?>">


<li>	To change a font throughout your presentation to another font, on the Home tab on the Ribbon, click the Replace list arrow, and then click ____ to open the Replace Fonts dialog box.<br/></li>

<label for ='answerOneA' >a.	Replace Fonts</label><br/>

<label for ='answerOneB' >b.	Change Fonts</label><br/>

<label for ='answerOneC' >c.	Edit Fonts</label><br/>
<label for ='answerOneD' >d. New Fonts </label><br/>
<input type="text" name="question4" value=" <?php echo $question4;?>">
   </br>
	</li>
	
	<li>	To use the Reuse Slides task pane, click the ____ button, and then click Reuse Slides.<br/></li>

<label for ='answerOneA' >a.	source object</label><br/>

<label for ='answerOneB' >b.	linked object</label><br/>

<label for ='answerOneC' >c.	destination object</label><br/>
<label for ='answerOneD' >d.    action object </label><br/>
<input type="text" name="question5" value=" <?php echo $question5;?>">
   </br>
   
   <li>With a(n) ____, if you update the source file, the data in the destination file is also updated.<br/></li>

<label for ='answerOneA' >a.	New Slide</label><br/>

<label for ='answerOneB' >b.	Duplicate slide</label><br/>

<label for ='answerOneC' >c.	Custom Slide </label><br/>
<label for ='answerOneD' >d.    Save slide</label><br/>
<input type="text" name="question6" value=" <?php echo $question6;?>">
   </br>
   
   <li>	To use the Reuse Slides task pane, click the ____ button, and then click Reuse Slides.<br/></li>

<label for ='answerOneA' >a.	New Slide</label><br/>

<label for ='answerOneB' >b.	Duplicate slide</label><br/>

<label for ='answerOneC' >c.	Custom Slide </label><br/>
<label for ='answerOneD' >d.    Save slide</label><br/>
<input type="text" name="question7" value=" <?php echo $question7;?>">
   </br>
   
   <li>	Derek wants to draw a sideways triangle in front of the bike to make it look like the bike is about to hit a ramp. How does he add the triangle?<br/></li>

<label for ='answerOneA' >a.	Go into the Shapes gallery, select the Triangle tool, click and hold the mouse button, and then drag to draw</label><br/>

<label for ='answerOneB' >b.	Go into the Shapes gallery, select the Triangle tool, double-click the mouse to activate the Draw Wizard</label><br/>

<label for ='answerOneC' >c.	Go into the Clip Art gallery, select the Triangle tool, click and hold the mouse button, and then drag to draw  </label><br/>
<label for ='answerOneD' >d.    None of the above</label><br/>
<input type="text" name="question8" value=" <?php echo $question8;?>">
   </br>
   Case PPT 3
Dan is designing a new logo for his motorbike company to add to all of the PowerPoint slides.  He is working with shapes.

   <li>	Dan inserted an illustration of his signature red motorbike. He wants to rotate the front of the motorbike to look like it is ready to jump.  What should he do?<br/></li>

<label for ='answerOneA' >a.	Select the graphic to display handles, hold down the Shift key as he drags a corner of the graphic </label><br/>

<label for ='answerOneB' >b.	Select the graphic to display handles, then select the yellow boxes to rotate the graphic</label><br/>

<label for ='answerOneC' >c.	Select the graphic to display handles, then select the green circle to rotate the graphic</label><br/>
<label for ='answerOneD' >d.    None of the above</label><br/>
<input type="text" name="question9" value=" <?php echo $question9;?>">
   </br>
   
   <li>	Sheila wants to make the entire graphic she has selected larger. To scale an object, Sheila holds the Shift key and drags a corner handle which is indicated by a ____.<br/></li>

<label for ='answerOneA' >a.	green circle </label><br/>

<label for ='answerOneB' >b.	white circle</label><br/>

<label for ='answerOneC' >c.	yellow diamond </label><br/>
<label for ='answerOneD' >d.    white square</label><br/>
<input type="text" name="question10" value=" <?php echo $question10;?>">
   </br>
 <br>  Case PPT 4  </br>
<br>Sharon is creating a Grand Opening sign for her new pet shop Paws and Claws. </br>

   <li>	Sharon inserted a shape of a star and has decided that she wants to rotate it slightly to the left. She would select the shape and then use the rotate handle indicated by the ____.<br/></li>

<label for ='answerOneA' >a.	white square</label><br/>

<label for ='answerOneB' >b.	yellow diamond </label><br/>

<label for ='answerOneC' >c.	white circle </label><br/>
<label for ='answerOneD' >d.    green circle</label><br/>
<input type="text" name="question11" value=" <?php echo $question11;?>">
   </br>
    FIGURE PPT 3-1 <img src="FIGURE PPT 3-1.jpg" alt = "logo">
   <li>	Referring to Figure PPT 3-1 above, the datasheet on the right-hand side of the window has data in it already. How could one change the data?<br/></li>

<label for ='answerOneA' >a.	Click the cell and then type the numbers or text in the Excel window</label><br/>

<label for ='answerOneB' >b.	Click the datasheet and import it into PowerPoint, and then enter the data</label><br/>

<label for ='answerOneC' >c.	Open up a separate Cell Data dialog box in the Excel window  </label><br/>
<label for ='answerOneD' >d.    None of the above</label><br/>
<input type="text" name="question12" value=" <?php echo $question12;?>">
   </br>
  
   <li>	If you want the individual objects in a group to animate separately, you have to ____.<br/></li>

<label for ='answerOneA' >a.	use an add-in program</label><br/>

<label for ='answerOneB' >b.	unlink them</label><br/>

<label for ='answerOneC' >c.	delete and save them in separate files </label><br/>
<label for ='answerOneD' >d.    ungroup them</label><br/>
<input type="text" name="question13" value=" <?php echo $question13;?>">
   </br>
   
   <li>	____ allows you to work with several items as if they were one object.<br/></li>

<label for ='answerOneA' >a.	Gluing</label><br/>

<label for ='answerOneB' >b.	Linking </label><br/>

<label for ='answerOneC' >c.	Joining  </label><br/>
<label for ='answerOneD' >d.    Grouping</label><br/>
<input type="text" name="question14" value=" <?php echo $question14;?>">
   </br>
   
   <li>An example of a shape effect is ____.<br/></li>

<label for ='answerOneA' >a.	Glow </label><br/>

<label for ='answerOneB' >b.	Bevel  </label><br/>

<label for ='answerOneC' >c.	Soft Edges  </label><br/>
<label for ='answerOneD' >d.   all of the above</label><br/>
<input type="text" name="question15" value=" <?php echo $question15;?>">
   </br>
  <p> Completion </p>
Complete each statement.

   <li>	If you ____________________ an object with certain attributes, such as fill color and line color, 
   and then want to format another object the same way, use the format painter.<br/></li>

<input type="text" name="question16" value=" <?php echo $question16;?>">
   </br>
   
   <li>	If existing masters do not quite work for you, PowerPoint allows you to create a custom ____________________and then add the placeholders as needed.<br/></li>

<input type="text" name="question17" value=" <?php echo $question17;?>">
   </br>
   <li>	Tables are useful when you need to organize information that can be displayed in rows and ___________________.<br/></li>

<input type="text" name="question18" value=" <?php echo $question18;?>">
   </br>
	</li>
	
	<li>	Charts, also called ___________________, provide a visual way to display numerical data in a presentation.<br/></li>

<input type="text" name="question19" value=" <?php echo $question19;?>">
   </br>
	</li>
	
	<li>	Organizational charts are useful for showing the ___________________ structure and relationships within an organization.

<br/></li>

<input type="text" name="question20" value=" <?php echo $question20;?>">
   </br>
	</li>


</ol>

<input type="submit" name="Submit"></input>
<button type="button" onClick="window.print()">Print</button></p>

</form>
<?php
}

$ShowForm = TRUE;
$Question1 = "";
     $question1 = "";
	 $errorCount = 0;
	 $question2 = "";
	$question3 = "";
	$question4 = "";
	$question5 = "";
	$question6 = "";
	$question7 = "";
	$question8 = "";
	$question9= "";
	$question10= "";
	$question11 = "";
	$question12= "";
$question13= "";
 $question14= ""; $question15= ""; $question16= ""; $quesiton17= ""; $quesiton18= "";$quesiton19= "";
$quesiton20= "";
	

if (isset($_POST['Submit'])) {

	$Question1 = validateInput($_POST['Question1'],"Name");
     $question1 = validateInput($_POST['question1'],"question1");
	 $question2 = validateInput($_POST['question2'],"question2");
	 $question3 = validateInput($_POST['question3'],"question3");
	 $question4 = validateInput($_POST['question4'],"question4 ");
      $question5 = validateInput($_POST['question5'],"question5 ");
	  $question6 = validateInput($_POST['question6'],"question6");
	  $question7 = validateInput($_POST['question7'],"question7 ");
	  $question8 = validateInput($_POST['question8'],"question8 ");
	  $question9 = validateInput($_POST['question9'],"question9 ");
	  $question10 = validateInput($_POST['$question10'],"question10");
	  $question11 = validateInput($_POST['question11'],"question11 ");
	  $question12 = validateInput($_POST['question12'],"question12");
	  $question13 = validateInput($_POST['question13'],"question13 ");
	  $question14 = validateInput($_POST['question14'],"question14");
	  $question15 = validateInput($_POST['question15'],"question15 ");
	  $question16 = validateInput($_POST['question16'],"question16 ");
	  $quesiton17 = validateInput($_POST['quesiton17'],"quesiton17");
	  $quesiton18 = validateInput($_POST['quesiton18'],"quesiton18 ");
	  $quesiton19 = validateInput($_POST['quesiton19'],"quesiton19");
	  $quesiton19 = validateInput($_POST['question16'],"question16");
	  $quesiton20 = validateInput($_POST['quesiton20'],"quesiton20");
	//  $question16 = validateInput($_POST['question16'],"Choose the correct answer below: Which car is the best? ");
	  
	  if($errorCount==0)
		  $ShowForm = FALSE;
	  else
		  $ShowForm = TRUE;

}
	 if($ShowForm == TRUE) {
		 if($errorCount>0)
			 echo " Please re-enter the form information below";
		 displayForm($Question1, $question1, $question2,$question3,$question4, $question5, 
$question6, $question7, $question8, $question9, $question10, $question11, $question12,
$question13, $question14, $question15, $question16, $quesiton17, $quesiton18,$quesiton19,
$quesiton20);
     }
else {

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     echo "<h1>Quiz results</h1>";
	 $Score = 0;
   $answerOne = trim($_POST['question1']);
	 $answertwo = trim($_POST['question2']);
	 $answerthree = trim($_POST['question3']);
	 $answerfour = trim($_POST['question4']);
	 $answerfive = trim($_POST['question5']);
     $answersix = trim($_POST['question6']);
	 $answerseven = trim($_POST['question7']);
	 $answereight = trim($_POST['question8']);
	 $answer9 = trim($_POST['question9']);
	 $answer10 = trim($_POST['question10']);
	 $answer11 = trim($_POST['question11']);
	 $answer12 = trim($_POST['question12']);
	 $answer13 = trim($_POST['question13']);
	 $answer14 = trim($_POST['question14']);
	 $answer15 = trim($_POST['question15']);
	 $answer16 = trim($_POST['question16']);
	 $answer17 = trim($_POST['question17']);
	  $answer18 = trim($_POST['question18']);
	   $answer19 = trim($_POST['question19']);
	    $answer20 = trim($_POST['question20']);
	 
   
	 if (strcasecmp($answerOne,'c') == 0) {
     echo "<p>1 was correct</p>";
		$Score++;
    
	}

	 if (strcasecmp($answertwo, 'a') ==0) {
     echo "<p>2 was correct</p>";
		 $Score++;
	 }
	 if (strcasecmp($answerthree,'c') ==0) {
     echo "<p>3 was correct</p>";
		 $Score++;
	 }
	 if ( strcasecmp($answerfour,'b')==0) {
     echo "<p>4 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answerfive,'a')==0) {
     echo "<p>5 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answersix,'c')==0) {
     echo "<p>6 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answerseven,'c')==0) {
     echo "<p>7 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answereight,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 
	 if ( strcasecmp($answer9,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answer10,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answer11,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answer12,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answer13,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answer14,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answer15,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answer16,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answer17,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answer18,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answer19,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 if ( strcasecmp($answer20,'c')==0) {
     echo "<p>8 was correct</p>";
		 $Score ++;
	 }
	 

   $pct = $Score/20 * 100;
   echo "<h3>Your score is $Score out of 20 ($pct %)</h3>";
     displayForm($Question1, $question1, $question2,$question3,$question4, $question5, 
$question6, $question7, $question8, $question9, $question10, $question11, $question12,
$question13, $question14, $question15, $question16, $question17, $question18,$question19,
$question20);




}

}


	 ?>



</body>
</html>
