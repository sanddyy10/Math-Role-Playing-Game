<?php
	$base_url = "http://localhost/postfix/".$_SERVER['http://localhost/postfix/'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RESEARCH GAME </title>
	<link rel="stylesheet" href="<?= $base_url.'/main.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?= $base_url.'/asset/css/bootstrap.css'; ?>">
	<script src="<?= $base_url.'/asset/js/bootstrap.js'; ?>" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	<?php
							$a = rand(1,9);
							$b = rand(1,9);
							$c = rand(1,9);
							$d = rand(1,9);

							$tb_num = 0;
							$case = rand(1,11);
							// echo $case;
							switch ($case) {
								case '1':
									$tb_num = $a + $b + $c + $d;
									break;
								case '2':
									$tb_num = $a - $b + $c + $d;
									break;
								case '3':
									$tb_num = $a - $b - $c + $d;
									break;
								case '4':
									$tb_num = $a - $b - $c - $d;
									break;
								case '5':
									$tb_num = ($a + $b) * $c - $d;
									break;
								case '6':
									$tb_num = ($a / $b) - $c * $d;
									break;
								case '7':
									$tb_num = $a - ($b + $c) / $d;
									break;
								case '8':
									$tb_num = $a - $b + $c / $d;
									break;
								case '9':
									$tb_num = $a - $b * $c / $d;
									break;
								case '10':
									$tb_num = $a / $b * ($c - $d);
									break;
								case '11':
									$tb_num = ($a + $b * $c) - $d;
									break;
								case '11':
									$tb_num = ($a / $b + $c) / $d;
									break;
								default:
									$tb_num = ($a * $b / $c) + $d;
									break;
							}
						?>
	<h1 class="heading">Math Game</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 target_area" id="target_number">
				<h3 class="target">Target Number</h3>
				<p id="trg"><?= number_format($tb_num,0); ?></p>
				<p id="trg_num" style="display: none;"><?= $tb_num ?></p>
			</div>
			<div class="col-lg-5 cal_area">
				<h5 id="cal_string">Select Inputs</h5>
				<button class="btn btn-primary" style="margin-top: 20px;" onclick="clear_input()">CLEAR</button>
				<button class="btn btn-success" style="margin-top: 20px;" onclick="cal_res()">CALCULATE</button>
			</div>
			<div class="col-lg-4">
				<div class="row" style="width: 90%;margin-left: 5%;padding: 20px;">
					<div class="col-lg-3">						
						<button class="btn btn-secondary num_btn" value="<?= $a; ?>" id="btn1" onclick="change_string(this.value,1)"><?= $a; ?></button>
					</div>
					<div class="col-lg-3">
						<button class="btn btn-secondary num_btn" value="<?= $b; ?>" id="btn2" onclick="change_string(this.value,2)"><?= $b; ?></button>
					</div>
					<div class="col-lg-3">
						<button class="btn btn-secondary num_btn" value="<?= $c; ?>" id="btn3" onclick="change_string(this.value,3)"><?= $c; ?></button>
					</div>
					<div class="col-lg-3">
						<button class="btn btn-secondary num_btn" value="<?= $d; ?>" id="btn4" onclick="change_string(this.value,4)"><?= $d; ?></button>
					</div>

				</div>

				<!-- operator -->


<div class="row" style="width: 90%;margin-left: 5%;padding: 20px;">
					<div class="col-lg-3">
						<button class="btn btn-secondary num_btn" value="+" id="btn5" onclick="change_string(this.value,5)">+</button>
					</div>
					<div class="col-lg-3">
						<button class="btn btn-secondary num_btn" value="-" id="btn6" onclick="change_string(this.value,6)">-</button>
					</div>
					<div class="col-lg-3">
						<button class="btn btn-secondary num_btn" value="*" id="btn7" onclick="change_string(this.value,7)">X</button>
					</div>
					<div class="col-lg-3">
						<button class="btn btn-secondary num_btn" value="/" id="btn8" onclick="change_string(this.value,8)">/</button>
					</div>
				</div>

				<div class="row" style="width: 90%;margin-left: 5%;padding: 20px;">
					<div class="col-lg-3">
						<button class="btn btn-secondary num_btn" value="(" id="btn9" onclick="change_string(this.value,9)">(</button>
					</div>
					<div class="col-lg-3">
						<button class="btn btn-secondary num_btn" value=")" id="btn10" onclick="change_string(this.value,10)">)</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	function change_string(btnval, btn_num) {
		if(btn_num == 1 || btn_num == 2 || btn_num == 3 || btn_num == 4){
			document.getElementById('btn'+btn_num).disabled = true;
		}
		var string = document.getElementById('cal_string').innerHTML;
		if(string == 'Select Inputs'){
			string = '';
		}
		string = string+btnval;
		document.getElementById('cal_string').innerHTML = string;
	}
	function clear_input() {
		var i = 0;
		for(i = 1 ;i<=4;i++){
			document.getElementById('btn'+i).disabled = false;
		}
		document.getElementById('cal_string').innerHTML = 'Select Inputs';
	}
	function cal_res(){
		var string = document.getElementById('cal_string').innerHTML;
		var tg_num = document.getElementById('trg_num').innerHTML;
		var len = string.length;
		if(len > 5 && string != 'Select Inputs'){
			var ans = eval(string);
		var tnum = parseInt(tg_num);
			if(tnum == ans){
				alert("Congratulations!! You did it.");
				location.reload();
			}else{
				alert("YOUR ANSWER = "+ans+"\nSorry!! Wanna give it one more try......\nRELODE THE PAGE.....");
				location.reload();
			}
		}else{
			alert("All the given numbers and atleast one operator are necessary to be used.");
		}
	}
</script>
