<footer>
	<p class='text-center'>Copyright &copy; bloodbank.com</p>
</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
	function validate(evt) {
				var theEvent = evt || window.event;

				// Handle paste
				if (theEvent.type === 'paste') {
					key = event.clipboardData.getData('text/plain');
				} else {
				// Handle key press
					var key = theEvent.keyCode || theEvent.which;
					key = String.fromCharCode(key);
				}
				var regex = /[0-9]|\./;
				if( !regex.test(key) ) {
					theEvent.returnValue = false;
					if(theEvent.preventDefault) theEvent.preventDefault();
				}
				}
	$(function() {

	$(".DATES").datepicker({ 

dateFormat: "yy-mm-dd",
changeMonth: true,
changeYear: true,
yearRange: '1900:' + new Date().getFullYear()
 }).val();
	});
</script>


