<?php 
add_action('wp_footer', 'ats_add_google_login');

function ats_add_google_login(){
  ?>
  <div id="profile"></div>

	<script src="https://apis.google.com/js/client:plusone.js" type="text/javascript"></script>

	<script src="https://apis.google.com/js/platform.js?onload=onLoadCallback" async defer></script>
    <script type="text/javascript">
	 <?php 
	  $setting_data= get_option('ats_social_login');
	  extract($setting_data['google_plus_details']);
	 ?>
	 function google_login() 
	  {
		
		var myParams = {
		
			'clientid' : '<?php echo $google_id;?>',
		
			'cookiepolicy' : 'single_host_origin',
		
			'callback' : 'loginCallback',
		
			'approvalprompt':'force',
		
			'scope' : 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
		
		  };
		
		  gapi.auth.signIn(myParams);
		
	}
		
	function loginCallback(result)
	{

		if(result['status']['signed_in'])
		{

			var request = gapi.client.plus.people.get(
			{

				'userId': 'me'

			});

			request.execute(function (resp)
			{

					if(resp['emails'])
					{

						for(i = 0; i < resp['emails'].length; i++)
						{

							if(resp['emails'][i]['type'] == 'account')
							{

							   var  email = resp['emails'][i]['value'];
								email=jQuery.trim(email);

							}

						}

					}

				var user_name=resp['displayName'];
				
				if(email!='' && user_name!=''){
					
					var str =  resp['displayName'];

					str += "*" + email;
					
					str += "*" + "gplus";

					//document.getElementById("profile").innerHTML = str;

					var data = {

						'action': 'ats_fb_data_retrive',

						'data': str  // We pass php values differently!

					};
					
				}else{
					alert("NO Email is provided");
				}

					// We can also pass the url value separately from ajaxurl for front end AJAX implementations

				jQuery.post(CGSTORE_VARS.AJAX_URL, data, function(response) {

					if(response=='success'){
							 window.location.href= CGSTORE_VARS.SITE_URL;
					    }
					
				});

			});

		}

	}
		
	function onLoadCallback()
	{

		gapi.client.setApiKey('<?php echo $google_api;?>');

		gapi.client.load('plus', 'v1',function(){});

	}
		
	(function() {

		   var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;

		   po.src = 'https://apis.google.com/js/client.js?onload=onLoadCallback';

		   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);

	})();
		
	</script>

  <?php 
}