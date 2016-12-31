<?php
/* Template Name: Single Jobs Page */
/**
 * @package Shopping_Mall
 */

get_header(); ?>

<div class="jobs-page">
	<div class="content-area">
		<div class="jobs-application__content">
		   <div class="jobs-application__job">
		      <div class="jobs__item">
		         <div class="jobs-item__image"><img alt="Battelfield ground, redoubt, entrencm..." src="https://cgtfiles.s3.amazonaws.com/uploads/attachments/33967/Redoubt_5.jpg"></div>
		         <div class="jobs-item__content">
		            <h3 class="jobs__title">Battelfield ground, redoubt, entrencm...</h3>
		            <ul class="label-list">
		               <li>
		                  <div class="jobs__aplicants"><span class="label--hexagon">5 applicants</span></div>
		               </li>
		               <li>
		                  <div class="jobs__deadline"><span class="label--hexagon">30 days to finish</span></div>
		               </li>
		               <li>
		                  <div class="jobs__software"></div>
		               </li>
		            </ul>
		            <div class="tag-list">
		               <ul>
		                  <li>OBJ</li>
		               </ul>
		            </div>
		         </div>
		         <div class="jobs-price__content">
		            <h3 class="jobs__price u-text-right">$100</h3>
		         </div>
		         <p class="jobs-application-text">I need a model of a landscape created from a map. Its a battelfield. In the landscape are  10 redoubts with trenches connecting them. The budget can be negotiated according to the Work.</p>
		         <a class="button button-primary view-attached-files"><i class="fa fa-file-text"></i>View attached files (1)</a>
		         <ul class="attached-files-container is-hidden">
		            <a target="_blank" id="332fbd4668b94659922f32cfc6b0b59a" href="/attachments/33967">
		               <li><span>Redoubt_5.jpg</span></li>
		            </a>
		         </ul>
		      </div>
		   </div>
		</div>
		

		<div class="jobs-application__content">
		   <div class="jobs-application__application">
		      <div class="jobs-application__form">
		         <h3>Apply for this job</h3>
		         <label class="label--with-hexagon">Offer</label>
		         <textarea class="field field--colored field--textbox" placeholder="Please enter your offer details" name="job_application[offer]" id="job_application_offer"></textarea>
		         <div class="button-upload"><span>Browse</span><input class="file-upload--jobs" data-url="/attachments" id="fileupload" multiple="" name="files[]" type="file"></div>
		         <div class="files" id="files"></div>
		      </div>
		      <div class="jobs-application__tips">
		         <h3>Tips</h3>
		         <div class="input-container">
		            <h5>Make sure you:</h5>
		            <ul class="bullet--hexagon">
		               <li>Present your experience related to job offer</li>
		               <li>You are able work with required software</li>
		               <li>You are able to finish the job in time</li>
		               <li>Attach examples of your work</li>
		               <li>Do not provide any direct contact details</li>
		               <li>Provide the best  offer to fit the budget</li>
		            </ul>
		         </div>
		         <div class="input-container">
		            <h5>When you apply for a job:</h5>
		            <ul class="bullet--hexagon">
		               <li>Client will be informed about your offer</li>
		               <li>You will be informed if a client selected you and pre-paid for the job</li>
		               <li>Progress will be discussed in private workspace between you and client</li>
		               <li>CGTrader will pay out the royalties when the job is done and approved by client</li>
		            </ul>
		         </div>
		         <div class="icon-question-sign u-float-right"><a href="javascript:$zopim.livechat.window.show()">Questions?</a></div>
		      </div>
		   </div>
		</div>

		<div class="jobs-application__content jobs-application__content--footer">
		   <div class="jobs-application__earnings">
		      <label class="label--with-hexagon">Final Offer Price:</label><input value="100.0" class="field field--colored cgtrader_price" data-job-id="1105" data-application-id="null" data-country-code="DK" type="text" name="job_application[cgtrader_price]" id="job_application_cgtrader_price" style="text-align: right;"><label class="label--with-hexagon">My Earnings:</label><input value="0.0" class="field field--colored price" data-job-id="1105" data-application-id="null" data-country-code="DK" type="text" name="job_application[price]" id="job_application_price" style="text-align: right;"><i class="icon-question-sign has-tooltip tooltipstered"><i class="fa fa-question-circle-o fa-lg"></i></i>
		      <div class="jobs-application__terms">
		         <label class="terms-label">
		            <input name="job_application[agreed_to_terms_of_use]" type="hidden" value="0">
		            <div class="checkbox">
		            	<input class="checkbox iCheckBox" type="checkbox" value="1" name="job_application[agreed_to_terms_of_use]" id="job_application_agreed_to_terms_of_use"></div>
		            Agree with <a class="jobs-application__terms-link" id="" href="/pages/3d-jobs-agreement">Term of use</a>
		         </label>
		      </div>
		      <input type="submit" name="commit" value="Apply for this job" class="button u-float-right">
		   </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
