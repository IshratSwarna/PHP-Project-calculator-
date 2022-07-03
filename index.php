<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
</head>
<body>
    <span style='font-size:100px;'>&#128425;</span>
    <div id="form">
        <input type="number" name="num1" id="num1" placeholder="First Number">
        <br><br>
        <input type="number" name="num2" id="num2" placeholder="Second Number">
        <br><br>
        <select name="op" id="op">
            <option value="add">&#127856; Addition</option>
            <option value="sub">&#127850; Subtraction</option>
            <option value="mul">&#127848; Multiplication</option>
            <option value="div">&#127849; division</option>
        </select>
        <button id="submit">&#61;</button></td>
    
</div>
    <div>
        Result:
        <span id="response"></span>
	</div>
    <script type="text/javascript">
			
			$(document).ready(function(){
				$("#submit").on("click", function(event){
					var num1 = $("#num1").val();
					var num2 = $("#num2").val();
                    var op = $("#op").val();
					var jsonData = {
						field1 : num1,
						field2 : num2,
                        field3 : op
					};
					$.ajax({
						type: "POST",
						url: "calc.inc.php",
						data: JSON.stringify(jsonData),
						contentType: "application/json",
						dataType: "json",
						success: function(response) {
							$("#response").html(JSON.stringify(response));
						},
						failure: function(error){
							$("#response").html(error);
						}
					});
					$("#num1").val("");
					$("#num2").val("");
				});
			});
		</script>
</body>
</html>