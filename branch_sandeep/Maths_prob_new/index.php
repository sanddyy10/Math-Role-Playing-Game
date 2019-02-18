<?php
/**
	* This is the url which is created in xampp.
	*
	* @author Sandeep Annathurai
	* @copyright 2019
	* @license path
*/

	$base_url = "http://localhost/Maths_prob_new";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MATH GAME </title>
	<link rel="stylesheet" href="<?= $base_url.'/main.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?= $base_url.'/asset/css/bootstrap.min.css'; ?>">
	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?= $base_url.'/asset/js/bootstrap.min.js'; ?>" type="text/javascript" charset="utf-8" async defer></script>


</head>
<body>

	<!-- Modal -->
<div id="helpmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>       
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



						<?php
							$a = rand(3,7);
							$b = $a+2;
							$c = $b-4;
							$d = $c+1;
							$tb_num = rand(1,10);							
						?>
	<h1 class="heading">The Mathematics Game</h1>
	<div class="container">
			<div id="some_div">
			</div>
		<div class="row">
			<div class="col-lg-3 target_area" id="target_number">
				<h3 class="target"><b><i>Target Number</i></b></h3>
				<p id="trg"><?= $tb_num.'0'; ?></p>
				<p id="trg_num" style="display: none;"><?= $tb_num.'0' ?></p>
			</div>
			<div class="col-lg-5 cal_area">
				<div class="row">
					<div class="col-lg-6">
						<table class="stacktable table table-dark" style="margin-left:50px;width: 150px;">					
							<tbody id="tab_content" style="font-weight: bold;">
								<tr style="height: 50px;">
									<td>
										<div class="row"><div class="col-lg-12" id="3"></div></div>
									</td>
								</tr>
								<tr style="height: 50px;">
									<td>
										<div class="row"><div class="col-lg-12" id="2"></div></div>
									</td>
								</tr>
								<tr style="height: 50px;">
									<td>
										<div class="row"><div class="col-lg-12" id="1"></div></div>
									</td>
								</tr>
								<tr style="height: 50px;">
									<td>
										<div class="row"><div class="col-lg-12" id="0"></div></div>
									</td>
								</tr>								
							</tbody>
						</table>
					</div>
				
				<div class="col-lg-6">
						<button class="btn btn-primary" style="margin-top: 20px;" onclick="pop_one()">POP</button><br>
						<button class="btn btn-success" style="margin-top: 20px;" onclick="clear_all()">CLEAR</button><br>
						<button class="btn btn-danger" style="margin-top: 20px;color: #fff;" onclick="location.reload(); ">TRY AGAIN!!!</button>
						<br>
						<!-- <button type="button" style="margin-top: 20px;color: #fff;" class="btn btn-warning" data-toggle="modal" data-target="#helpmodal">HELP!!!</button> -->
					</div>
				</div>
				
				
			</div>
			<div class="col-lg-4">
				<div class="row" style="width: 90%;margin-left: 5%;padding: 20px;" id="numpad">
					<div class="col-lg-3">						
						<button class="btn btn-secondary num_btn" value="<?= $a; ?>" id="btn1" onclick="push_element(this.value, 1);"><?= $a; ?></button>
					</div>
					<div class="col-lg-3">
						<button class="btn btn-secondary num_btn" value="<?= $b; ?>" id="btn2" onclick="push_element(this.value, 2);"><?= $b; ?></button>
					</div>
					<div class="col-lg-3">
						<button class="btn btn-secondary num_btn" value="<?= $c; ?>" id="btn3" onclick="push_element(this.value, 3);"><?= $c; ?></button>
					</div>
					<div class="col-lg-3">
						<button class="btn btn-secondary num_btn" value="<?= $d; ?>" id="btn4" onclick="push_element(this.value, 4);"><?= $d; ?></button>
					</div>

				</div>

				<!-- operator -->


<div class="row" style="width: 90%;margin-left: 5%;padding: 20px;">
					<div class="col-lg-4">
						<button class="btn btn-secondary num_btn" value="+" id="btn5" onclick="push_element(this.value, 5);">+</button>
					</div>
					<div class="col-lg-4">
						<button class="btn btn-secondary num_btn" value="-" id="btn6" onclick="push_element(this.value, 6);">-</button>
					</div>
					<div class="col-lg-4">
						<button class="btn btn-secondary num_btn" value="*" id="btn7" onclick="push_element(this.value, 7);">X</button>
					</div>
				</div>
			</div>
		</div>
	</div>





	<div class="container" style="margin-top: 100px;">
		<h1 class="heading" style="background-color: #aaa;text-decoration: underline;border-radius: 5px;">RULES</h1>
	<ol style="margin-top: 50px;margin-bottom: 50px;">
		<li>

			-> In the first step we see that out <b>TARGET NUMBER</b> is <b>10</b>.<br>
			-> Our randomly generated number is <b>7, 9, 5, 6</b><br>
			<img src="<?= $base_url ?>/asset/images/1.jpg" alt="" style="width: 80%;height: auto;">
		</li>
		<li style="margin-top: 30px;">

			First we push <b>6</b> in the stack.<br>
			<img src="<?= $base_url ?>/asset/images/rule1.jpg" alt="" style="width: 80%;height: auto;">
		</li>
		<li style="margin-top: 30px;">

			Then we push <b>9</b> in the stack.<br>
			<img src="<?= $base_url ?>/asset/images/rule2.jpg" alt="" style="width: 80%;height: auto;">
		</li>
		<li style="margin-top: 30px;">

			After that we push <b>+</b> in the stack.<br>
			<img src="<?= $base_url ?>/asset/images/rule3.jpg" alt="" style="width: 80%;height: auto;">
		</li>
		<li style="margin-top: 30px;">

			As the operator '+' is inserted, the result will be calculated ans will be stored at '0' index.<br>
			<img src="<?= $base_url ?>/asset/images/rule4.jpg" alt="" style="width: 80%;height: auto;">
		</li>
		<li style="margin-top: 30px;">

			Now we push <b>5</b> in the stack.<br>
			<img src="<?= $base_url ?>/asset/images/rule5.jpg" alt="" style="width: 80%;height: auto;">
		</li>
		<li style="margin-top: 30px;">

			Now we push <b>-</b> in the stack.<br>
			<img src="<?= $base_url ?>/asset/images/rule6.jpg" alt="" style="width: 80%;height: auto;">
		</li>
		<li style="margin-top: 30px;">

			As soon as the '-' operator is inserted, the result will be calculated ans will be stored at '0' index.<br>
			<img src="<?= $base_url ?>/asset/images/rule7.jpg" alt="" style="width: 80%;height: auto;">
		</li>
		<li style="margin-top: 30px;">
			-> If the target number is achived before all the numbers are used the user wins the game.<br>
			-> If the target number in not achived the user loses the game.
		</li>
	</ol>
	</div>
</body>
<footer style="margin : 0px;background-color: #444; padding: 10px;color:#fff;font-weight: bold;margin-top: 50px;text-align: center;">
	<h6>&copy Copyright 2019 | Mathematics Games Pvt. Ltd.</h6>
</footer>
<p style="display: none" id="pot">-1</p>
</html>
<script type="text/javascript">

	//Time Function
	var timeLeft = 30;
    var elem = document.getElementById('some_div');
    
    var timerId = setInterval(countdown, 1000);
    
    function countdown() {
      if (timeLeft == 0) {
        clearTimeout(timerId);
        doSomething();
      } else {
        elem.innerHTML = timeLeft + ' seconds remaining';
        timeLeft--;
      }
    }
	
	function push_element(element, btnnum){		
	var tg_num = parseInt(document.getElementById('trg_num').innerHTML);	
		var x = document.getElementById('pot').innerHTML;
		// alert(x);
		if(element == '+' || element == '-' || element == '*'){
			x++;
			if(x != 2){
				x--;
				alert("You need to push atleast 2 numbers before pushing a operator.");
			}else{				
				var a = document.getElementById('0').innerHTML;	
			var y = document.getElementById('1').innerHTML;	
			switch(element){
				case '+':
					var z = parseInt(a) + parseInt(y);
					break;
				case '-':
					var z = parseInt(a) - parseInt(y);
					break;
				case '*':
					var z = parseInt(a) * parseInt(y);
					break;
			}
			document.getElementById('0').innerHTML = z;
			document.getElementById('1').innerHTML = '';
			document.getElementById('pot').innerHTML = '0';
			if(tg_num == z){
				alert("Congratulation!!!     \n You Win.");
				location.reload();
			}else{	
				alert(tg_num);			
				chklose();
			}
			}
		}else{	
		x++;	
		document.getElementById('btn'+btnnum).disabled = true;	
		document.getElementById(x).innerHTML = element;		
		document.getElementById('pot').innerHTML = x;
		}
		if(x == 1){
			document.getElementById('btn1').style.display = 'none';
			document.getElementById('btn2').style.display = 'none';
			document.getElementById('btn3').style.display = 'none';
			document.getElementById('btn4').style.display = 'none';
		}else{
			document.getElementById('btn1').style.display = 'block';
			document.getElementById('btn2').style.display = 'block';
			document.getElementById('btn3').style.display = 'block';
			document.getElementById('btn4').style.display = 'block';
		}
	}
	function chklose(){
		var x1 = document.getElementById('btn1').disabled;
		var x2 = document.getElementById('btn2').disabled;
		var x3 = document.getElementById('btn3').disabled;
		var x4 = document.getElementById('btn4').disabled;
		if(x1 == true && x2 == true && x3 == true && x4 == true ){
			alert("Sorry!!!\nYou Lose\nTry again");
			location.reload();
		}
	}
	function clear_all(){
			document.getElementById('btn1').style.display = 'block';
			document.getElementById('btn2').style.display = 'block';
			document.getElementById('btn3').style.display = 'block';
			document.getElementById('btn4').style.display = 'block';

			document.getElementById('btn1').disabled = false;	
			document.getElementById('btn2').disabled = false;	
			document.getElementById('btn3').disabled = false;	
			document.getElementById('btn4').disabled = false;

			document.getElementById('0').innerHTML = '';	
			document.getElementById('1').innerHTML = '';	
			document.getElementById('2').innerHTML = '';	
			document.getElementById('3').innerHTML = '';

			document.getElementById('pot').innerHTML = '-1';
	}	
	function pop_one(){
			var a = document.getElementById('0').innerHTML;	
			var b = document.getElementById('1').innerHTML;	
			var c = document.getElementById('2').innerHTML;	
			var d = document.getElementById('3').innerHTML;
			if(d == ''){
				if(c == ''){
					if(b == ''){
						if(a == ''){
							alert("Nothing to POP.");
						}else{
							document.getElementById('0').innerHTML = '';
					enable(a);
					update_pot();
						}
					}else{
						document.getElementById('1').innerHTML = '';
					enable(b);
					update_pot();
					}
				}else{
					document.getElementById('2').innerHTML = '';
					enable(c);
					update_pot();
				}
			}else{
				document.getElementById('3').innerHTML = '';
				enable(d);
				update_pot();
			}
	}
	function update_pot(){
		var x = parseInt(document.getElementById('pot').innerHTML);
		x--;
		document.getElementById('pot').innerHTML = x;
		if(x == 0){
			document.getElementById('btn1').style.display = 'block';
			document.getElementById('btn2').style.display = 'block';
			document.getElementById('btn3').style.display = 'block';
			document.getElementById('btn4').style.display = 'block';
		}
	}
	function enable(val){
		var a = parseInt(document.getElementById('btn1').innerHTML);
		var b = parseInt(document.getElementById('btn2').innerHTML);
		var c = parseInt(document.getElementById('btn3').innerHTML);
		var d = parseInt(document.getElementById('btn4').innerHTML);
		if(val == a){
			document.getElementById('btn1').disabled = false;
		}else if(val == b){
			document.getElementById('btn2').disabled = false;
		}else if(val == c){
			document.getElementById('btn3').disabled = false;
		}else if(val == d){
			document.getElementById('btn4').disabled = false;
		}else{
				document.getElementById('btn1').disabled = false;
				document.getElementById('btn2').disabled = false;
				document.getElementById('btn3').disabled = false;
				document.getElementById('btn4').disabled = false;
		}
		
	}
</script>




