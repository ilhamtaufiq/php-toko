<footer class="text-center" id="footer">Toko &copy; Copyright 2016</footer>



<script type="text/javascript">
	jQuery(window).scroll(function(){
		var vscroll = jQuery(this).scrollTop();
		jQuery('#logotext').css({
			"transform" : "translate(0px, "+vscroll/2+"px)"
		})

		jQuery('#back-flower').css({
			"transform" : "translate("+vscroll/5+"px, -"+vscroll/12+"px)"
		})

		
		jQuery('#fore-flower').css({
			"transform" : "translate(0px, "+vscroll/2+"px)"
		})
	});
	function detailsmodal(id){
		var data = {"id" : id};
		jQuery.ajax({
			url : '/toko/includes/detailsmodal.php',
			method : "post",
			data : data,
			success: function(data){
				jQuery('body').append(data);
				jQuery('#details-modal').modal('toggle');
			},
			error: function(){
				alert("Error!");
			}

		});
	}
</script>
</body>
</html>