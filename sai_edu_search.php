<?php
	include ($_SERVER['DOCUMENT_ROOT']."/html/SAI3/mainfile.php");
	include ($_SERVER['DOCUMENT_ROOT']."/html/SAI3/header.php");
	include ("modules/function/sai_function.php");
	$common = new Common($xoopsDB,$xoopsUser);

	$city  = mb_substr($cityname, 0, 3, "utf-8"); // 取得縣市名稱
    $index = $_GET['index'];
// 開始查詢這所學校基本資料

	$sql = "SHOW FULL FIELDS FROM schooldata_3295";

	$result = $xoopsDB->queryf($sql);
	$data=array();
	while($row = $xoopsDB->fetchArray($result))
	{
		$data[]=$row;
  }
	
	$selectoption='';
	for ($i=1;$i<57;$i++){
		$option="<option value =".$data[$i]['Field'].">".$data[$i]['Comment']."</option>";
		$selectoption.=$option;
	}
	//$selectoption.="<option value=test SELECTED>test</option>";

	$caseoption = "<option value ='='>等於</option>
		<option value ='>'>大於</option>
		<option value ='>='>大於等於</option>		
		<option value ='<='>小於等於</option>
		<option value ='<'>小於</option>
		<option value ='like'>相似</option>";


		
?>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>


<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

<p>
<hr>
<p>
<form id="searchForm" method="post" name="myform" action="">
	<div class="col-md-12">
						搜尋條件1&2&3之間條件原則為
						<select name='allop'>
							<option value =" and ">需全部符合</option>
							<option value =" or ">任一項符合</option>
						</select>
	</div>
	<br>
	<br>
	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">搜尋條件1</div>
			<div class="panel-body">
				<table border="0">
					<tr>
						搜尋條件1內條件原則為
						<select name='case1op'>
							<option value =" or ">任一項符合</option>
							<option value =" and ">需全部符合</option>
						</select>
					</tr>
					<tr>
						<td>					
							<select name='case1[0][0]' id='case1[0][0]' class='case1[0][0]'>
								<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case1[0][1]'>
								<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case1[0][2]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
					<tr>
						<td>					
							<select name='case1[1][0]'>
								<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case1[1][1]'>
								<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case1[1][2]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
					<tr>
						<td>					
							<select name='case1[2][0]'>
								<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case1[2][1]'>
								<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case1[2][2]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
					<tr>
						<td>					
							<select name='case1[3][0]'>
								<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case1[3][1]'>
								<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case1[3][2]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
					<tr>
						<td>					
							<select name='case1[4][0]'>
								<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case1[4][1]'>
								<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case1[4][2]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
				</table>
			</div>
			
		</div>

	</div>
	
	<div class="col-md-12" id='case2' style="display:none">
		<div class="panel panel-info">
			<div class="panel-heading">搜尋條件2</div>
			<div class="panel-body">
			<table border="0">
					<tr>
						搜尋條件2內條件原則為
						<select name='case2op'>
						<option value =" or ">任一項符合</option>
									<option value =" and ">需全部符合</option>
						</select>
					</tr>
					<tr>
						<td>					
							<select name='case2[0][]'>
								<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case2[0][]'>
								<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case2[0][]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
					<tr>
						<td>					
							<select name='case2[1][]'>
								<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case2[1][]'>
								<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case2[1][]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
					<tr>
						<td>					
							<select name='case2[2][]'>
							<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case2[2][]'>
								<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case2[2][]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
					<tr>
						<td>					
							<select name='case2[3][]'>
							<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case2[3][]'>
								<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case2[3][]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
					<tr>
						<td>					
							<select name='case2[4][]'>
							<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case2[4][]'>
								<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case2[4][]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
				</table>
			
			</div>
			
		</div>

	</div>

	<div class="col-md-12" style="display:none">
		<div class="panel panel-info">
			<div class="panel-heading">搜尋條件3</div>
			<div class="panel-body">
			<table border="0">
					<tr>
						搜尋條件3內條件原則為
						<select name='case3op'>
									<option value =" or ">任一項符合</option>
									<option value =" and ">需全部符合</option>
						</select>
					</tr>
					<tr>
						<td>					
							<select name='case3[0][]'>
							<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case3[0][]'>
							<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case3[0][]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
					<tr>
						<td>					
							<select name='case3[1][]'>
							<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case3[1][]'>
							<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case3[1][]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
					<tr>
						<td>					
							<select name='case3[2][]'>
							<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case3[2][]'>
							<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case3[2][]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
					<tr>
						<td>					
							<select name='case3[3][]'>
							<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case3[3][]'>
							<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case3[3][]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
					<tr>
						<td>					
							<select name='case3[4][]'>
							<?php echo $selectoption; ?>
							</select>
						</td>
						<td>
							<select name='case3[4][]'>
							<?php echo $caseoption; ?>
							</select>
						</td>
						<td>
							<input type="text" name="case3[4][]" size="40">
						</td>
					</tr>
					<tr><td><hr></td></tr>
				</table>
			</div>
		</div>
	</div>
	<div class="form-group col-md-12 text-left">
		<button id="hide" type="button">減少搜尋條件</button>
		<button id="show" type="button">增加搜尋條件</button>
	</div>
	<div class="form-group col-md-12 text-right">
			    	<input type="submit" 
									class="btn btn-primary" 								
									style=" background-color:#75CAEB;
													border          :none;
													border-radius   :10px;
													color           :white;
													padding         :20px;
													display         :inline-block;
													font-size       :20px;
													box-shadow      :0px 10px #999999;"
									value="確定">
	</div>
</form>

<?php 
	// 嵌入頁面
	$page = array(
		'sai'=>'sai_edu_data.php',
	);
	if(!empty($page[$index]))
		include($_SERVER['DOCUMENT_ROOT']."html/SAI3/{$page[$index]}");
?>

<style>
	.button {}

	.button:hover {background-color: #99999}

	.button:active {
	  background-color: #3e8e41;
	  box-shadow: 0 5px #666;
	  transform: translateY(4px);
	}

	.ib1{
		text-align:center;
		font-size:18px;
		height:40px;
		width:100px;
		border-width:0px;
		background-color:aliceblue;

	}
	
	.ib2{
		text-align:center;
		font-size:18px;
		height:40px;
		width:100px;
		border-style:ridge;
		border-width:5px;		
	}

	.ib3{
		text-align:center;
		font-size:18px;
		height:40px;
		width:100px;
		border:0;
		background-color:#FDF4F2;		
	}

	.check-box{
		font-size: 11pt;
		display: inline;
		color: #0000ff;
	}
</style>

<script>

	
$(document).ready(function(){
  $("#hide").click(function(){
  	$("#case2").hide();
  });
  $("#show").click(function(){
 	 $("#case2").show();
  });
});


	// 確認有選條件
	$('#searchForm').submit(function(){
			document.myform.action="?index=sai";
			return true;
	});




//直接列印TABLE
	function printData()
	{
		var divToPrint=document.getElementById("printTable");
  	newWin= window.open("");
  	newWin.document.write(divToPrint.outerHTML);
  	newWin.print();
  	newWin.close();
	}

	$('.print-btn').on('click',function(){
		printData();
	});


//將TABLE轉成CSV
	function download_csv(csv, filename) {
		var csvFile;
		var downloadLink;

		// CSV FILE
		//csvFile = new Blob([csv], {type: "text/csv"});會有亂碼

		// Download link
		downloadLink = document.createElement("a");

		// File name
		downloadLink.download = filename;

		// We have to create a link to the file
    if (window.webkitURL != null) {
        var code = encodeURIComponent( csv );
        if ( navigator.appVersion.indexOf("Win")==-1 ) {
            downloadLink.href = "data:application/csv;charset=utf-8," + code;
        } else {
            downloadLink.href = "data:application/csv;charset=utf-8,%EF%BB%BF" + code;
        }
    }


		// We have to create a link to the file
		//downloadLink.href = window.URL.createObjectURL(csvFile); //會有亂碼

		// Make sure that the link is not displayed
		downloadLink.style.display = "none";

		// Add the link to your DOM
		document.body.appendChild(downloadLink);

		// Lanzamos
		downloadLink.click();
	}

	function export_table_to_csv(html, filename) {
		var csv = [];
		var rows = document.querySelectorAll("#printTable tr");
		
		for (var i = 0; i < rows.length; i++) {
			var row = [], cols = rows[i].querySelectorAll("td, th");

			for (var j = 0; j < cols.length; j++) 
				row.push(cols[j].innerText);
					
			csv.push(row.join(","));		
		}

			// Download CSV
			download_csv(csv.join("\n"), filename);
	}



	$('.Table2CSV').on('click',function(){
		var html = document.getElementById("printTable").outerHTML;
		export_table_to_csv(html, "table.csv");
	});


</script>


<?php include ($_SERVER['DOCUMENT_ROOT']."/html/SAI3/footer.php"); ?>
