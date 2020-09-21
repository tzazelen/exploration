
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
  $(document).foundation();
</script>

<!- - - JScharts Jquery - -  - - - - - - - - - - - - - - - - - - - - - - - -->
<script src="js/jscharts.js"></script>


<!-- -- - - - - onReady JS - - - -  -->
	<script>
    $(function() {

// toggle reports submenu - - - - - - - - - - - - - - - - - -
		$('.reports').click(function () {
     $(".reports_submenu").slideToggle( "medium");
     $(".arrow_dropdown").hide();
     $(".arrow_dropup").show();
		});

// toggle settings submenu - - - - - - - - - - - - - - - - - -
		$('.settings').click(function () {
     $(".settings_submenu").slideToggle( "medium");
		});

// active menu item based on URL - - - - - - - - - - - - - - - - - -
    var CurrentUrl= document.URL;
    var CurrentUrlEnd = CurrentUrl.split('/').filter(Boolean).pop();
    console.log(CurrentUrlEnd);
    $( "nav ul li a" ).each(function() {
          var ThisUrl = $(this).attr('href');
          var ThisUrlEnd = ThisUrl.split('/').filter(Boolean).pop();

          if(ThisUrlEnd == CurrentUrlEnd){
          $(this).closest('li').addClass('active')
          }
    });

// /Script - - - - - - - - - - - - - - - - - -
	});
	</script>
