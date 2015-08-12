<div id='passiveItems' ></div>
<script type="text/javascript">
	var passiveCount = 0;
	for(var i=0; i<state.length; i++)
	{
		if(state[i] == "passive")
			passiveCount++;
	}
	for(var i=1; i<=passiveCount; i++)
	{
		var j = question.length - passiveCount;
		
		$("#passiveItems").html($("#passiveItems").html()+"<div class='passiveItem' id='passiveItem"
			+i+"' ><div class='passiveQuestionCont' ><a class='passiveQuestion' id='passiveQuestion"+i+"' >"+question[j+(i-1)]
			+"</a></div><div class='passivePositionCont' id='passivePositionCont"+i+"' ><a class='passivePositionLabel' >"+"Set position"
			+"</a><input type='radio' value='passivePosRB1' name='passivePosRBs"+i+"' value='passivePosRB1' class='passivePosRBs' id='passivePosRB1"+i+"' checked><label onclick=\"$('#passivePosRB1"+i
			+"').trigger('click');\" >At end</label><input type='radio' name='passivePosRBs"+i+"' value='passivePosRB2' class='passivePosRBs' id='passivePosRB2"+i+"'><label onclick=\"$('#passivePosRB2"+i
			+"').trigger('click');\" >At beginning</label><input type='radio' name='passivePosRBs"+i+"' value='passivePosRB3' class='passivePosRBs' id='passivePosRB3"+i+"' ><label onclick=\"$('#passivePosRB3"+i
			+"').trigger('click');\" ><input  type='text' id='passivePos"+i+"' class='passivePos' size='10' maxlength='10' placeholder='Enter custom .. '></label>"
			+"</div><input type='button' value='ENABLE' class='enableBTN' id='enableBTN"+i+"' ><input type='button' value='DELETE' class='passiveDeleteBTN' id='passiveDeleteBTN"+i+"' ></div>");
			
		$("#passiveQuestion"+i).attr("title", "Uploaded on: "+datetime[j+(i-1)]+" \nAnswered: "+answeredCount[j+(i-1)]+"\nType: "+uploadType[j+(i-1)]);
		//For answers 
		if(uploadType[j+(i-1)]=="singleChoice"||uploadType[j+(i-1)]=="multiChoice")
		{
			var counter = 0;
			for( var x=0; x<answers[j+(i-1)].length; x++ ) 
			{
				if( answers[j+(i-1)].charAt(x) == '&' ) 
				{
					counter++;
				} 
			}
			var answerArray = answers[j+(i-1)].split("&");
			
			switch(counter)
			{
				case 1:
					$("#passiveQuestion"+i).attr("title",$("#passiveQuestion"+i).attr("title")+"\nA1: "+answerArray[0]+"\nA2: "+answerArray[1]);
					break;
				case 2:
					$("#passiveQuestion"+i).attr("title",$("#passiveQuestion"+i).attr("title")+"\nA1: "+answerArray[0]+"\nA2: "+answerArray[1]+"\nA3: "+answerArray[2]);
					break;
				case 3:
					$("#passiveQuestion"+i).attr("title",$("#passiveQuestion"+i).attr("title")+"\nA1: "+answerArray[0]+"\nA2: "+answerArray[1]+"\nA3: "+answerArray[2]+"\nA4: "+answerArray[3]);
					break;
			}
		}
		else
		{
				var answerArray = answers[j+(i-1)].split("&");
				$("#passiveQuestion"+i).attr("title",$("#passiveQuestion"+i).attr("title")+"\nFrom: "+answerArray[0]+"\nTo: "+answerArray[1]);
		}
		//for notes
		if(notes[j+(i-1)]!="")
			$("#passiveQuestion"+i).attr("title",$("#passiveQuestion"+i).attr("title")+"\nNotes: "+notes[j+(i-1)]);
	}
	$(".enableBTN").off("click").on("click",function(e){enableSubmit(e);});
	$(".passiveDeleteBTN").off("click").on("click",function(e){passiveDeleteSubmit(e);});
	function enableSubmit(e) {
		var i = e.target.id.substr(9,e.target.id.length);
		var data = $("#passivePositionCont"+i+" :input").serializeArray();
		data.push({name:'question',value:$("#passiveQuestion"+i).html()});
		data.push({name:'count',value:activeCount});
		data.push({name:'position',value:i});
		data.push({name:'passivePos',value:$("#passivePos"+i).val()});
		$.post( "/scripts/enableProcess.php",
			data,
			function (info){ 
					uploadPage();
		});
	}
	function passiveDeleteSubmit(e) {
		var i = e.target.id.substr(16,e.target.id.length);
		var data = $("#passivePositionCont"+i+" :input").serializeArray();
		data.push({name:'question',value:$("#passiveQuestion"+i).html()});
		$("#passivePos"+i).html();
		$.post( "/scripts/passiveDeleteProcess.php",
			data,
			function (info){ 
					uploadPage();
		});
	}
</script>