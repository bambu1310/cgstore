<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH;?>/css/all.css">
<style type="text/css">
html{ 
    background: #f7f6f3 ;
}
</style>
<div class="site-page--product-publisher">
      <div class="publisher-container">
          <div class="printable-new">
              <div class="action-bar is-positioned js-sticky" style="position: fixed; top: 0px;">
                  <div class="container" data-easytabs="true">
                      <ul class="publishing-steps u-float-left">
                        <li class="js-publishing-step-btn js-publishing-step-first is-active">
                          <a href="#step-presentation" class="is-active">
                            Files &amp; Previews
                            <span>Upload files and images</span>
                          </a>
                        </li>
                        <li class="js-publishing-step-btn js-publishing-step-second">
                          <a href="#step-details">
                            Details
                            <span>Product details and information</span>
                          </a>
                        </li>
                      </ul>

                      <div class="u-float-right">
                          <div class="publishing-status" style="display: none;">
                            <span class="icon">
                              <img src="https://assets.cgtrader.com/assets/preloader-2f402224caf664d169e63ee63eb94dc0129fdf7cf2be29f9adeea5f0e39df6bd.gif" alt="Preloader 2f402224caf664d169e63ee63eb94dc0129fdf7cf2be29f9adeea5f0e39df6bd">
                            </span>

                            Updating ..
                          </div>

                              <div class="button-section">
                                <a href="/profile/items/672299" class="button button--transparent button--compact button--icon js-clear has-tooltip js-action tooltipstered" data-method="delete">
                                  <i class="fa fa-trash-o fa-24"></i>
                                </a>
                              </div>

                              <button class="button button--transparent button--compact js-preview js-action">
                                <i class="fa fa-eye fa-24"></i>

                                Preview
                              </button>

                              <div class="inlineblock btn-box">
                                <i class="fa fa-rocket fa-lg"></i>
                                <input type="submit" class="button button--dark button--compact publish-button js-action" value="Publish">
                              </div>
                      </div>
                  </div>
              </div>
              <div class="uploads-tab is-active" id="step-presentation">
                <div class="upload-area">
                    <form id="upload" action="index.html" method="POST" enctype="multipart/form-data">
                      <input type="file" class="with-preview" id="fileUploadNew" name="fileselect[]" multiple="multiple" />
                      <div id="filedrag">
                          <div class="upload-area__text">
                              Drag &amp; Drop
                              <span>model files and images or <b>browse files</b></span>
                          </div>
                      </div>
                    </form>
                </div>
                
                <div id="image-holder"></div>
                <div class="input-container files-count-label">
                    <label class="error">Please upload at least one file format of your 3D model.</label>
                </div>
                <div  class="visuals-panel">
                    <h2 class="heading heading--compact">Previews</h2>
                    <p class="explanation">Product images and embedded previews (videos, 3D viewers, etc).</p>
                    <ul id="messages"></ul>
                    <div class="clear"></div>
                </div>
              </div>
              <div class="uploads-tab details-tab" id="step-details">
                  <div class="sectioned-content">
                      <form action="" novalidate="novalidate">
                        <div class="input-container js-help-trigger" data-target="#help-title">
                           <label for="title" class="block-label">Product title <b>*</b></label>
                           <input minlength="5" maxlength="64" name="title" required="required" size="30" type="text" class="field field--important" placeholder="Keep the title informative and simple" id="title">
                        </div>
                        <div class="input-container">
                           <div class="js-help-trigger u-float-left" data-target="#help-category">
                             <label for="category_id" class="inline-label" data-position="inline">Category <b>*</b></label>
                             <div class="category-container" id="category_select_container">
                                <select name="category_id" id="category_id" data-placeholder="Choose category" required="required">
                                   <option value="158">Art</option>
                                   <option value="164">Fashion</option>
                                   <option value="169">Gadgets</option>
                                   <option value="179">Games &amp; Toys</option>
                                   <option value="186">Hobby &amp; DIY</option>
                                   <option value="193">House</option>
                                   <option value="201">Jewelry</option>
                                   <option value="209">Miniatures</option>
                                   <option value="217">Science</option>
                                </select>
                             </div>
                             <div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 100px;" title="" id="category_id_chosen">
                                <select name="sub_category_id" id="sub_category_id" data-placeholder="Choose sub category" required="required" >
                                  <option>Choose sub category</option>
                                </select>
                            </div>
                           </div>
                           
                           <div class="units-container js-help-trigger" data-target="#help-units">
                             <label for="units" class="inline-label" data-position="inline">Units <b>*</b></label>
                             <div class="category-container" id="unit_select_container">
                                <select name="units" id="units" data-placeholder="Choose units" required="required">
                                   <option value="mm">millimeters (mm)</option>
                                   <option value="cm">centimeters (cm)</option>
                                   <option value="in">inches (in)</option>
                                   <option value="m">meters (m)</option>
                                </select>
                             </div>
                          </div>
                          <div class="clear"></div>
                        </div>

                        <div class="input-container js-help-trigger" data-target="#help-description">
                           <label for="description" class="block-label">Description <b>*</b></label>
                           <textarea name="description" class="field field--text" required="required" minlength="5" id="description"></textarea>
                        </div>

                        <div class="input-container js-help-trigger" data-target="#help-tags">
                           <label for="tags" class="block-label">Tags <b>*</b></label>
                           <input type="text" name="tags" required="required" class="field" id="tags">
                           
                        </div>

                        <section class="js-help-trigger" data-target="#help-price">
                         <h2 class="heading">Pricing</h2>
                         <div class="input-container" data-position="section">
                            <div class="pricing-options">
                               <div class="pricing-options__price">
                                  <div class="field-wrapper">
                                     <input type="text" name="price" id="price" class="field" disabled="disabled">
                                     <div class="field-suffix">$</div>
                                  </div>
                               </div>
                               <div class="pricing-options__free">
                                  <label for="free" class="">
                                     <div class="checkbox is-checked"><input type="checkbox" name="free" id="free" ></ins></div>
                                     Share for free
                                  </label>
                               </div>
                               <div class="clear"></div>
                            </div>
                         </div>
                      </section>
                      <h2 class="heading">Challenges</h2>
                      <p class="challenges-explanation">If you have a right model for the challenge, simply check the box and you are
      in.</p>
                      <div class="input-container">
                        <div class="challenges-list"></div>
                      </div>
                      <h2 class="heading">Licensing &amp; Legal Information</h2>

                      <div class="input-container">
                         <label for="license" class="inline-label">License <b>*</b></label>
                         <div class="license-options">
                            <label for="license_general" class="inline-label">
                               <div class="radio is-checked"><input type="radio" name="license" value="general" id="license_general" checked></div>
                               General
                            </label>
                            <label for="license_editorial" class="inline-label">
                               <div class="radio"><input type="radio" name="license" value="editorial" id="license_editorial"></div>
                               Editorial
                            </label>
                            <label for="license_custom" class="inline-label">
                               <div class="radio"><input type="radio" name="license" value="custom" id="license_custom"></div>
                               Custom
                            </label>
                         </div>
                         <div class="custom-license-container" style="display: none;">
                            <textarea name="custom_license" class="field field--text"></textarea>
                         </div>
                      </div>

                      <div class="input-container is-last">
                         <label for="adult_content" class="">
                            <div class="checkbox"><input type="checkbox" name="adult_content" value="1" id="adult_content" ></div>
                            This item contains violence, nudity or sexual content
                         </label>
                         <p class="sensitive-content-explanation">All models with nudity or violent content will be reviewed by CGTrader
                            team prior to publishing. CGTrader uses RSACi standards to evaluate content. Level 0 content is available to
                            everyone, Level 1-3 content is placed under age lock while Level 4 content is not approved on the
                            marketplace.
                         </p>
                      </div>

                      </form>
                  </div>

                  <div class="help-section">
                    <div class="help-bubble is-left help-bubble--product-title" id="help-title" style="display: block; top: 75px;">
                      <h4 class="help-bubble__title">Product title</h4>

                      <div class="help-bubble__content">
                        <p>
                          Title is the most important information for all search engines to find your model. Write 4-6 words that are
                          relevant, specific and clearly represent your model.
                        </p>

                        <p>
                          Write a few relevant and specific words that target your model, and a few category words which will generalize
                          it. Also add certain characteristics which clearly distinguish it from the group it belongs to. Try always think
                          how well the title characterize your model to a customer who might be looking for something like it.
                        </p>

                        <p>
                          Examples:
                          <br> * Wooden country villa house
                          <br> * Ford Mondeo Sedan 2015
                          <br> * V4 cylinder combustion car engine
                          <br> * Modern commercial office skyscraper building
                        </p>
                      </div>
                    </div>
                    <div class="help-bubble is-left help-bubble--product-category" id="help-category" style="top: 136px; display: none;">
                      <h4 class="help-bubble__title">Category</h4>

                      <div class="help-bubble__content">
                        <p>Choose the category which best fits your product. If it is difficult to put the product under one specific
                          category, try to think of the category in which consumers are most likely to browse such products.</p>
                      </div>
                    </div>
                    <div class="help-bubble is-left help-bubble--product-units" id="help-units" style="top: 136px; display: none;">
                      <h4 class="help-bubble__title">Units of measure</h4>

                      <div class="help-bubble__content">
                        <p>Since not all 3D file formats contain information about units, it is necessary to define them here.</p>

                        <p>Choose units which represent 3D object dimensions.</p>
                      </div>
                    </div>
                    <div class="help-bubble is-left help-bubble--product-description" id="help-description" style="display: none; top: 246px;">
                      <h4 class="help-bubble__title">Description</h4>

                      <div class="help-bubble__content">
                        <p>
                          Products with a description of 50-100 word on average have 3 times more sales than models without the
                          description. Write proper description with relevant technical information about the model and scene to drive
                          more traffic and customers from Google. Products with short descriptions get much less pageviews and sales. Also
                          rich description increase buyers' confidence to purchase your model. Check other models in the marketplace to
                          get ideas for good descriptions.
                        </p>
                      </div>
                    </div>
                    <div class="help-bubble is-left help-bubble--product-tags" id="help-tags" style="display: none;top:350px;">
                      <h4 class="help-bubble__title">Tags</h4>

                      <div class="help-bubble__content">
                        <p>
                          Tags help the customers discover your products. We highly recommend to write at least 10-15 tags that best
                          define your product. Products with 20 tags on average have 2 times more sales than those with only 5 tags.
                        </p>

                        <p>
                          Write specific words that target your model, broad words which will generalize it and qualities or
                          characteristics (like color, material, condition, etc). However, avoid adding unrelated tags that have little to
                          do with the given product. Use tag suggestions that will help you identify related tags.
                        </p>
                      </div>
                    </div>
                    <div class="help-bubble is-left help-bubble--product-price" id="help-price" style="display: none;top: 460px; ">
                      <h4 class="help-bubble__title">Product price</h4>
                      <div class="help-bubble__content">
                        <p>Choose this option if you would like to sell or share 3D model source files. Note that people will be able to purchase and download 3D source files for the price that you specify.</p>
                      </div>
                    </div>
                  </div>

              </div>

              <div class="action-bar is-positioned js-sticky" style="position: fixed; bottom: 0px;">
                  <div class="container" data-easytabs="true">
                      <ul class="publishing-steps u-float-left">
                        <li class="js-publishing-step-btn js-publishing-step-first is-active">
                          <a href="#step-presentation" class="is-active">
                            Files &amp; Previews
                            <span>Upload files and images</span>
                          </a>
                        </li>
                        <li class="js-publishing-step-btn js-publishing-step-second">
                          <a href="#step-details">
                            Details
                            <span>Product details and information</span>
                          </a>
                        </li>
                      </ul>

                      <div class="u-float-right">
                          <div class="publishing-status" style="display: none;">
                            <span class="icon">
                              <img src="https://assets.cgtrader.com/assets/preloader-2f402224caf664d169e63ee63eb94dc0129fdf7cf2be29f9adeea5f0e39df6bd.gif" alt="Preloader 2f402224caf664d169e63ee63eb94dc0129fdf7cf2be29f9adeea5f0e39df6bd">
                            </span>

                            Updating ..
                          </div>

                              <div class="button-section">
                                <a href="/profile/items/672299" class="button button--transparent button--compact button--icon js-clear has-tooltip js-action tooltipstered" data-method="delete">
                                  <i class="fa fa-trash-o fa-24"></i>
                                </a>
                              </div>

                              <button class="button button--transparent button--compact js-preview js-action">
                                <i class="fa fa-eye fa-24"></i>

                                Preview
                              </button>

                              <div class="inlineblock btn-box">
                                <i class="fa fa-rocket fa-lg"></i>
                                <input type="submit" class="button button--dark button--compact publish-button js-action" value="Publish">
                              </div>
                            
                      </div>
                  </div>
              </div>

          </div>
      </div>
</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/jQuery.MultiFile.min.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/icheck.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/select2.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>/js/class.popup.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        //Popup.getMultiFiles();
    });
</script>