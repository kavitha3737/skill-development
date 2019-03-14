<html>
    <body>  
	    <center>
           <input type="number" id="num1" placeholder="enter fisrt number"/><br>
           <input type="number" id="num2" placeholder="enter second number" /><br>
	       <input type="number" id="result"/><br>
           <input type="button" id="submit" value="multiplication" onclick="multiplication()"/>
	    <center>
	<script>   
	   function multiplication()
	   {
		  var firstNumber = document.getElementById('num1').value;
		  var secondNumber = document.getElementById('num2').value;
		  var result = parseFloat(firstNumber) * parseFloat(secondNumber);
		  document.getElementById('result').value = result.toFixed(3);
	   }
	</script>   
    </body>
</html>