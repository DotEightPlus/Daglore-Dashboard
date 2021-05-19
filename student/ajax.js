$(document).ready(function() 
{

	//upload first term result
	$("#chk").click(function() 
	{

	var admn	 = $("#admn").val();
	var cls      = $("#cls").val();
    var tmms     = $("#tmms").val(); 

   
   	$(toastr.error('Loading Please wait...'));
	window.location.href = "./res?id="+admn+"&cls="+cls+"&term="+tmms;	

})
})