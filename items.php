<div class="items" id="items"></div>
<script type="text/javascript">
	for(var i=1;i<=activeCount;i++)
	{
		$("#items").html($("#items").html()+"<div class='item' id='item"
			+i+"' ><div class='questionCont'><a class='position' >"+i+". </a><a class='question' id='question"+i
			+"' title='"+notes[i-1]+"' >"+question[i-1]+"</a><a class='questionCount' id='questionCount"+i+"' >( Answered "+answeredCount[i-1]+" t. )</a></div><div class='answersCont' id='answersCont"+i
			+"'></div><label class='dateLabel' >Uploaded on: </label><a class='dateValue' id='dateValue"+i+"'>        "+datetime[i-1]+"</a><input type='button' value='DISABLE' class='disableBTN' id='disableBTN"+i
			+"' ><input type='button' value='DELETE' class='deleteBTN' id='deleteBTN"+i+"' ><textarea name='answerNotes"+i+"' id='answerNotes"+i
			+"' class='answerNotes' cols='60' rows='2' placeholder=' Enter answer notes (optional) .. ' maxlength='100'></textarea></div>");
			var answersCounts = answersCount[i-1].split("&");
			//calculate percents
			var answersPercents = new Array(); 
			for(var j=0; j<answersCounts.length; j++)
			{
				var relation = parseFloat(answeredCount[i-1])/parseFloat(answersCounts[j]);
				if(!isNaN(relation))
					answersPercents.push(parseInt(100/relation));
				else
					answersPercents.push(0);
			}
			
			switch(uploadType[i-1])
			{
				case "singleChoice":
					var counter = 0;
					for( var j=0; j<answers[i-1].length; j++ ) 
					{
						if( answers[i-1].charAt(j) == '&' ) 
						{
							counter++;
						} 
					}
					var answerArray = answers[i-1].split("&");
					
					switch(counter)
					{
						case 1:
							$("#answersCont"+i).html("<div class='answer' id='answer1"+i+"' ><input type='radio' name='answer"+i+"RBs' value='answer"+i+"RB1'  class='answer"+i
														+"RBs' id='answer"+i+"RB1' ><label class='answerLabel' id='answer"+i+"Label1' onclick=\"$('#answer"+i+"RB1').trigger('click');\" >"+answerArray[0]
														+"</label><label class='answerCounts' > ( "+answersPercents[0]+"% or "+answersCounts[0]+" t. )</label></div><div class='answer' id='answer2"+i
														+"' ><input type='radio' name='answer"+i+"RBs' value='answer"+i+"RB2'  class='answer"+i
														+"RBs' id='answer"+i+"RB2' ><label class='answerLabel' id='answer"+i+"Label2' onclick=\"$('#answer"+i+"RB2').trigger('click');\" >"+answerArray[1]
														+"</label><label class='answerCounts' > ( "+answersPercents[1]+"% or "+answersCounts[1]+" t. )</label></div>");
							break;
						case 2:
							$("#answersCont"+i).html("<div class='answer' id='answer1"+i
														+"' ><input type='radio' name='answer"+i+"RBs' value='answer"+i+"RB1'  class='answer"+i
														+"RBs' id='answer"+i+"RB1' ><label class='answerLabel' id='answer"+i+"Label1' onclick=\"$('#answer"+i+"RB1').trigger('click');\" >"+answerArray[0]
														+"</label><label class='answerCounts' > ( "+answersPercents[0]+"% or "+answersCounts[0]+" t. )</label></div><div class='answer' id='answer2"+i
														+"' ><input type='radio' name='answer"+i+"RBs' value='answer"+i+"RB2'  class='answer"+i
														+"RBs' id='answer"+i+"RB2' ><label class='answerLabel' id='answer"+i+"Label2' onclick=\"$('#answer"+i+"RB2').trigger('click');\" >"+answerArray[1]
														+"</label><label class='answerCounts' > ( "+answersPercents[1]+"% or "+answersCounts[1]+" t. )</label></div><div class='answer' id='answer3"+i
														+"' ><input type='radio' name='answer"+i+"RBs' value='answer"+i+"RB3'  class='answer"+i
														+"RBs' id='answer"+i+"RB3' ><label class='answerLabel' id='answer"+i+"Label3' onclick=\"$('#answer"+i+"RB3').trigger('click');\" >"+answerArray[2]
														+"</label><label class='answerCounts' > ( "+answersPercents[2]+"% or "+answersCounts[2]+" t. )</label></div>");
							break;
						case 3:
							$("#answersCont"+i).html("<div class='answer' id='answer1"+i
														+"' ><input type='radio' name='answer"+i+"RBs' value='answer"+i+"RB1'  class='answer"+i
														+"RBs' id='answer"+i+"RB1' ><label class='answerLabel' id='answer"+i+"Label1' onclick=\"$('#answer"+i+"RB1').trigger('click');\" >"+answerArray[0]
														+"</label><label class='answerCounts' > ( "+answersPercents[0]+"% or "+answersCounts[0]+" t. )</label></div><div class='answer' id='answer2"+i
														+"' ><input type='radio' name='answer"+i+"RBs' value='answer"+i+"RB2'  class='answer"+i
														+"RBs' id='answer"+i+"RB2' ><label class='answerLabel' id='answer"+i+"Label2' onclick=\"$('#answer"+i+"RB2').trigger('click');\" >"+answerArray[1]
														+"</label><label class='answerCounts' > ( "+answersPercents[1]+"% or "+answersCounts[1]+" t. )</label></div><div class='answer' id='answer3"+i
														+"' ><input type='radio' name='answer"+i+"RBs' value='answer"+i+"RB3'  class='answer"+i
														+"RBs' id='answer"+i+"RB3' ><label class='answerLabel' id='answer"+i+"Label3' onclick=\"$('#answer"+i+"RB3').trigger('click');\" >"+answerArray[2]
														+"</label><label class='answerCounts' > ( "+answersPercents[2]+"% or "+answersCounts[2]+" t. )</label></div><div class='answer' id='answer4"+i
														+"' ><input type='radio' name='answer"+i+"RBs' value='answer"+i+"RB4'  class='answer"+i
														+"RBs' id='answer"+i+"RB4' ><label class='answerLabel' id='answer"+i+"Label4' onclick=\"$('#answer"+i+"RB4').trigger('click');\" >"+answerArray[3]
														+"</label><label class='answerCounts' > ( "+answersPercents[3]+"% or "+answersCounts[3]+" t. )</label></div>");
							break;
					}
					break;
				case "multiChoice":
					var counter = 0;
					for( var j=0; j<answers[i-1].length; j++ ) 
					{
						if( answers[i-1].charAt(j) == '&' ) 
						{
							counter++;
						} 
					}
					var answerArray = answers[i-1].split("&");
					switch(counter)
					{
						case 1:
							$("#answersCont"+i).html("<div class='answer' id='answer1"+i+"' ><input type='checkbox' name='answer"+i+"CBs[]' value='answer"+i+"CB1'  class='answer"+i
														+"CBs' id='answer"+i+"CB1' ><label class='answerLabel' id='answer"+i+"Label1' onclick=\"$('#answer"+i+"CB1').trigger('click');\" >"+answerArray[0]
														+"</label><label class='answerCounts' > ( "+answersPercents[0]+"% or "+answersCounts[0]+" t. )</label></div><div class='answer' id='answer2"+i
														+"' ><input type='checkbox' name='answer"+i+"CBs[]' value='answer"+i+"CB2'  class='answer"+i
														+"CBs' id='answer"+i+"CB2' ><label class='answerLabel' id='answer"+i+"Label2' onclick=\"$('#answer"+i+"CB2').trigger('click');\" >"+answerArray[1]
														+"</label><label class='answerCounts' > ( "+answersPercents[1]+"% or "+answersCounts[1]+" t. )</label></div>");
							break;
						case 2:
							$("#answersCont"+i).html("<div class='answer' id='answer1"+i
														+"' ><input type='checkbox' name='answer"+i+"CBs[]' value='answer"+i+"CB1'  class='answer"+i
														+"CBs' id='answer"+i+"CB1' ><label class='answerLabel' id='answer"+i+"Label1' onclick=\"$('#answer"+i+"CB1').trigger('click');\" >"+answerArray[0]
														+"</label><label class='answerCounts' > ( "+answersPercents[0]+"% or "+answersCounts[0]+" t. )</label></div><div class='answer' id='answer2"+i
														+"' ><input type='checkbox' name='answer"+i+"CBs[]' value='answer"+i+"CB2'  class='answer"+i
														+"CBs' id='answer"+i+"CB2' ><label class='answerLabel' id='answer"+i+"Label2' onclick=\"$('#answer"+i+"CB2').trigger('click');\" >"+answerArray[1]
														+"</label><label class='answerCounts' > ( "+answersPercents[1]+"% or "+answersCounts[1]+" t. )</label></div><div class='answer' id='answer3"+i
														+"' ><input type='checkbox' name='answer"+i+"CBs[]' value='answer"+i+"CB3'  class='answer"+i
														+"CBs' id='answer"+i+"CB3' ><label class='answerLabel' id='answer"+i+"Label3' onclick=\"$('#answer"+i+"CB3').trigger('click');\" >"+answerArray[2]
														+"</label><label class='answerCounts' > ( "+answersPercents[2]+"% or "+answersCounts[2]+" t. )</label></div>");
							break;
						case 3:
							$("#answersCont"+i).html("<div class='answer' id='answer1"+i
														+"' ><input type='checkbox' name='answer"+i+"CBs[]' value='answer"+i+"CB1'  class='answer"+i
														+"CBs' id='answer"+i+"CB1' ><label class='answerLabel' id='answer"+i+"Label1' onclick=\"$('#answer"+i+"CB1').trigger('click');\" >"+answerArray[0]
														+"</label><label class='answerCounts' > ( "+answersPercents[0]+"% or "+answersCounts[0]+" t. )</label></div><div class='answer' id='answer2"+i
														+"' ><input type='checkbox' name='answer"+i+"CBs[]' value='answer"+i+"CB2'  class='answer"+i
														+"CBs' id='answer"+i+"CB2' ><label class='answerLabel' id='answer"+i+"Label2' onclick=\"$('#answer"+i+"CB2').trigger('click');\" >"+answerArray[1]
														+"</label><label class='answerCounts' > ( "+answersPercents[1]+"% or "+answersCounts[1]+" t. )</label></div><div class='answer' id='answer3"+i
														+"' ><input type='checkbox' name='answer"+i+"CBs[]' value='answer"+i+"CB3'  class='answer"+i
														+"CBs' id='answer"+i+"CB3' ><label class='answerLabel' id='answer"+i+"Label3' onclick=\"$('#answer"+i+"CB3').trigger('click');\" >"+answerArray[2]
														+"</label><label class='answerCounts' > ( "+answersPercents[2]+"% or "+answersCounts[2]+" t. )</label></div><div class='answer' id='answer4"+i
														+"' ><input type='checkbox' name='answer"+i+"CBs[]' value='answer"+i+"CB4'  class='answer"+i
														+"CBs' id='answer"+i+"CB4' ><label class='answerLabel' id='answer"+i+"Label4' onclick=\"$('#answer"+i+"CB4').trigger('click');\" >"+answerArray[3]
														+"</label><label class='answerCounts' > ( "+answersPercents[3]+"% or "+answersCounts[3]+" t. )</label></div>");
							break;
					}
					break;
				case "measure":
					var answerArray = answers[i-1].split("&");
					$("#answersCont"+i).html("<input type='text' name='measure"+i+"TF' class='measureTF' id='measure"+i+"TF' placeholder=' Add value ( From "+answerArray[0]+" To "+answerArray[1]+" ) ..' >");
					break;
			}
							
			$("#mainForm").off("click","#disableBTN"+i).on("click","#disableBTN"+i,function(e){disableSubmit(e);});
			$("#mainForm").off("click","#deleteBTN"+i).on("click","#deleteBTN"+i,function(e){deleteSubmit(e);});
						
	}
	function disableSubmit(e) {
		var i = e.target.id.substr(10,e.target.id.length);
		var data = $("#mainForm :input").serializeArray();
		data.push({name:'question',value:$("#question"+i).html()});
		data.push({name:'count',value:activeCount});
		data.push({name:'position',value:i});
		$.post( "/scripts/disableProcess.php",
			data,
			function (info){ 
					uploadPage();
		});
	}
	function deleteSubmit(e) {
		var i = e.target.id.substr(9,e.target.id.length);
		var data = $("#mainForm :input").serializeArray();
		data.push({name:'question',value:$("#question"+i).html()});
		data.push({name:'count',value:activeCount});
		data.push({name:'position',value:i});
		$.post( "/scripts/deleteProcess.php",
			data,
			function (info){ 
					uploadPage();
		});
	}
</script>