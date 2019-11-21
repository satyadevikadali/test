<select name="" id="selectid_1" data-id="1" onkeypress="selectvalue.apply(this, arguments)" class=" form-control1 measurment">
				<option value="0">Select </option>
					<?php for($d=1;$d<=10;$d++){ ?>
						<option value="<?php echo $d; ?>"><?php echo $d; ?></option>
					<?php } ?>
				</select>
				</div>
				<div class="col-md-6">
				<select  class="form-control1 measurment" data-id="1" id="fra_1" style="padding-bottom: 18px;">
				<!--<option value="0">Select {{ucwords($ms3->question)}}</option>-->
					<option value="0.00">0.00</option>									
					<option value="0.25">0.25</option>
					<option value="0.5">0.5</option>					
					<option value="0.75">0.75</option>				
				</select>	
				</div>
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script>
				$(document).on('change keyup','.measurment',function(e){
					
					var attr_id = $(this).attr('data-id');
					var normalid = $("#selectid_"+attr_id).val();
					var fractionid = $("#fra_"+attr_id).val();	
				
					var n = normalid;
	
	alert(sam1(n,fractionid));
	
	
	
	
});

function sam1(nr,fr){
	
	var totl = Number(nr)+Number(fr);
	return totl;

}

		
				</script>