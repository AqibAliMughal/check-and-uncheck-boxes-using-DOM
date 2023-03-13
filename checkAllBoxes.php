<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Check/Uncheck Boxes</title>

<style type="text/css">
body{
	background-color: #ececec;
	border-left: 10px solid #ccc;
	border-right: 10px solid #ccc;
	margin: 0px;
	padding: 0;
	font-family: 'Lato', sans-serif;
}	
header, footer{
	color: #fff;
	background-color: yellowgreen;
	font-size: 22px;
	font-weight: 700;
	letter-spacing: 2px;
	padding: 3px;

	box-sizing: border-box;
	box-shadow: 2px 3px 8px gray;
}

header{
	margin-bottom: 10px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}

footer{
	margin-top: 10px;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;	
}


header:hover, footer:hover
{
	color: purple;
	background-color: #f4f1ec;
	cursor: pointer;
	transition: 0.5s;
}
</style>

</head>
<body>


<!-- HEADER -->
<?php 
function headerFunction($headingTitle)
{
echo "<center>";
?>
<header><h2><u> <?php echo $headingTitle ?> </u></h2></header>

<?php
echo "</center>";
 }

headerFunction('Check/Uncheck All boxes using DOM') ?>

<center>
	<table border="3" cellpadding="10px" cellspacing="3px">
		<tr>
			<th>Read Policies and Agreement</th>
			<th> Tick </th>
		</tr>

		<tr>
			<td>
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</td>
			<td> <input type="Checkbox" name="Check" class="check" onclick="checkSingleField()"> </td>
		</tr>
		<tr>
			<td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </td>
			<td> <input type="Checkbox" name="Check" class="check" onclick="checkSingleField()"> </td>
		</tr>

		<tr>
			<td>
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</td>
			<td> <input type="Checkbox" name="Check" class="check" onclick="checkSingleField()"> </td>
		</tr>

		<tr>
			<td> Duis aute irure dolor in reprehenderit in voluptate velit esse	cillum dolore eu fugiat nulla pariatur. </td>
			<td> <input type="Checkbox" name="Check" class="check" onclick="checkSingleField()"> </td>
		</tr>

		<tr>
			<td>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </td>
			<td> <input type="Checkbox" name="Check" class="check" onclick="checkSingleField()"> </td>
		</tr>

		<tr>
			<td align="center">Check All</td>
			<td> <input type="Checkbox" id="checkAll" onclick="checkallFields()"> </td>
		</tr>
	</table>
</center>

<script type="text/javascript" language="javascript">
	
var checkAll = document.getElementById('checkAll');

function checkallFields()
{
	for(var checkABox = 0 ; checkABox < checkField.length ; checkABox++)
	{
		if(checkField[checkABox].checked == false) // true
		{
			checkField[checkABox].checked = checkAll.checked
		}
		else if(checkAll.checked == false)
		{
		checkField[checkABox].checked = checkAll.checked;	
		}
	}
}

var checkField = document.getElementsByClassName('check');
var flag;

function checkSingleField(){
	for (var b = 0 ; b < checkField.length ; b++){

		if(checkField[b].checked == false){
			flag = false;
			break;
		}
			flag = true;
	}
		checkAll.checked = flag;
		if(flag == true)
		{
		 alert('Good, You agreed with us.')
		}
}

</script>

<!-- FOOTER -->
<?php
function footerFunction()
{
	echo "<center>";
	?>
<footer>
<div>
	<p><strong> HIDAYA-ID: </strong></p>
	<p>19955 - Aqib Ali Mughal</p>
</div>	
</footer>
<?php 
echo "</center>";
} 

footerFunction(); ?>
</body>
</html>