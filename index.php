<!DOCTYPE html>
<html>
<head>
        <title>MDZeroInvestigaror</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/Styles/reset.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="/Styles/main.css" media="screen" />
</head>
<body onselectstart="return false">
	<div id="filesfield"></div>
    <form action="/scripts/mainProcess.php" method="post" name="mainForm" id="mainForm">
    	
    </form>
    
    <form action="/scripts/uploadProcess.php" method="post" name="uploadForm" id="uploadForm">
      <input name="uploadQuestion" type="text" id="uploadQuestion" value="" size="80" maxlength="150" placeholder=" Enter your new question here .. ">
      <div id="uploadAnswersCont">
        <input name="uploadAnswer1" type="text" id="uploadAnswer1" class="uploadAnswers" size="60" maxlength="50" placeholder=" Enter 1st answer .. ">
        <input name="uploadAnswer2" type="text" id="uploadAnswer2" class="uploadAnswers" size="60" maxlength="50" placeholder=" Enter 2nd answer .. ">
        <input name="uploadAnswer3" type="text" id="uploadAnswer3" class="uploadAnswers" size="60" maxlength="50" placeholder=" Enter 3rd answer (optional) .. ">
        <input name="uploadAnswer4" type="text" id="uploadAnswer4" class="uploadAnswers" size="60" maxlength="50" placeholder=" Enter 4th answer (optional) .. ">
      </div>
      <textarea name="uploadNotes" id="uploadNotes" class="uploadNotes" cols="60" rows="3" placeholder=" Enter question notes (optional) .. " maxlength="150"></textarea>
      <fieldset id="uploadAnswerTypeCont">
        <legend>Choose answers type</legend>
        <p>
         
          <input type="radio" name="uploadRBs" value="uploadRB1"  class="uploadRBs" id="uploadRB1" checked>
          <label onclick="$('#uploadRB1').trigger('click');" >Single choise (radio boxes)</label>
          <br>
         
          <input type="radio" name="uploadRBs" value="uploadRB2"  class="uploadRBs" id="uploadRB2">
          <label onclick="$('#uploadRB2').trigger('click');" >Multiple choise (check boxes)</label>
          <br>
          
          <input type="radio" name="uploadRBs" class="uploadRBs" value="uploadRB3" id="uploadRB3">
          <label onclick="$('#uploadRB3').trigger('click');" >Measure (numeric text field)</label>
          <br>
        </p>
      </fieldset>
      <fieldset id="uploadPosCont">
            <legend>Set position</legend>
            <p>
             
              <input type="radio" name="uploadPosRBs" value="uploadPosRB1"  class="uploadPosRBs" id="uploadPosRB1" checked>
              <label onclick="$('#uploadPosRB1').trigger('click');" >At end</label>
              <br>
             
              <input type="radio" name="uploadPosRBs" value="uploadPosRB2"  class="uploadPosRBs" id="uploadPosRB2">
              <label onclick="$('#uploadPosRB2').trigger('click');" >At beginning</label>
              <br>
              
              <input type="radio" name="uploadPosRBs" class="uploadPosRBs" value="uploadPosRB3" id="uploadPosRB3">
              <label onclick="$('#uploadPosRB3').trigger('click');" ><input name="uploadPos" type="text" id="uploadPos" class="uploadPos" size="10" maxlength="10" placeholder="Enter custom .. "></label>
              <br>
            </p>
      </fieldset>
      <input type="submit" name="uploadSubmit" id="uploadSubmit" value="Submit">
      <div id="erroroutput"></div>
    </form> 
    <div id="stoppedCont">
    	 
    </div>
	<script src="/Scripts/jquery-1.11.2.min.js"></script>
    <script src="/Scripts/main.js"></script>
</body>
</html>