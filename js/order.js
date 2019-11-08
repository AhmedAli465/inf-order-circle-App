jQuery(document).on('change','#order_type',function($) {
	// alert('hi');
	var order_type= jQuery('#order_type').val();
	// alert(order_type);
	if(order_type=='Urgent'){
		jQuery('#shipped_order').attr('disabled', false);
	}
	if(order_type=='Normal'){
		jQuery('#shipped_order').attr('disabled', true);
		// jQuery('#shipped_order').val('');
		// document.getElementById("#shipped_order").value = "00-00-0000";
		// $('#shipped_order').reset();
		// $('#shipped_order').val('00-00-0000');
	}
	// console.log(test);

});
// jQuery(document).ready(function($) {
// 	jQuery('#order_date').datepicker({dateFormat: 'dd-mm-yy',changeMonth:true,changeYear:true});
	// console.log(date);
	// jQuery('.ui-datepicker-title .ui-datepicker-year option').click(()=>{
		// alert('hi');
	// })
	// css({"color":"#000"});
// 	jQuery(document).on('click','Submit',()=>{
// 		var data=jQuery('#order_date').val();
// 		console.log(data);
// 	});
// });


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                          Under Working 
// $(document).ready(function(){
// 		var date_input=$('input[name="date"]'); //our date input has the name "date"
// 		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
// 		date_input.datepicker({
// 			format: 'dd/mm/yyyy',
// 			container: container,
// 			todayHighlight: true,
// 			autoclose: true,
// 		});
// 	});
////////////////////////////////////////////////////////////////////////////////////////////////////////////