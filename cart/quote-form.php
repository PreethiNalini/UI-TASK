<?php /* Template Name:quote-form */ ?>
<?php get_header(); ?>

<div class="quote-form-wrapper">
    <div class="form-container">
        <div class="two-col-form">
        <ul class="nav-helpful-links">
            <li><a href="#" class="heading">Helpful Links</a></li>      
            <li><a href="#">Technical Support</a></li>
            <li> <a href="#">Product Templates</a></li>
            <li><a href="#">Quick Order</a></li>
            <li><a href="#">Get a Quote</a></li>
            <li><a href="#">Software Demos</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <form class="form-quote">
        <div class="form-side">
            <div class="mobile-view-banner"></div>
            <div class="header-quote">
            <ul class="form-home-link">
             <li><a href="#">Home </a></li>
             <li><a href="#">Get a Quote</a></li>
           </ul>
           <div class="get-quote-title">
            Get a Quote
           </div>
            </div>
         
           <div class="contact-form-wrapper">
             <div class="contact-info-title">CONTACT INFORMATION</div>
             <div class="contact-form-container">
                    <div class="quote-form-contact-details">
                       <div class="  row--quote">
                            <label class="name-quote">Company Name*</label>
                            <input type="text" placeholder="Enter Company Name"  class="quoteform-input">
                        </div>
                        <div class="  row--quote">
                            <label  class="name-quote">Contact Name*</label>
                            <input type="text" placeholder="Enter Contact Name"  class="quoteform-input">
                        </div>
                        <div class="row--quote">
                            <label class=" name-quote">Email Address*</label>
                            <input type="text" placeholder="Enter Email Address"  class="quoteform-input">
                        </div>
                        <div class=" row--quote">
                            <label class="name-quote">Phone*</label>
                            <input type="text" placeholder="Enter Phone Number"  class="quoteform-input">
                        </div>
                        <div class=" row--quote">
                            <label class="name-quote">State*</label>
                            <input type="text" placeholder="Alabama" class="quoteform-input">
                        </div>
                    </div>
                    <div class="quoting-details form-quote-order-details" id="mobile-quoting-hidden">
                       <h2 class="quotes-title">Quoting Process / Details</h2>
                       <p class="quoting-info">Looking for a label that is not offered on our website? Do you have a special application that requires custom sizing, printing or color? LLT Labels will be able to quote almost any label application.</p>
                    </div>
             </div>
           </div>
         <!-- ========= quote size box ========= -->
         <div class="quote-details-box">
         <div class="contact-info-title">QUOTE DETAILS</div>
         <div class="container-box-quote-details">
         <div class="quote-details-row">
         <div class="quote-row">
            <label  class="new-name">Label Size*</label>
            <div class="h-w-details"> 
            <span>WIDTH</span>
         
            <input type="text" class="wh-input">
            <span>HEIGHT</span>
            <input type="text"  class="wh-input">
            </div>
        </div>
        <div class="quoting-details" >
            <label  class="new-name">Size Match</label>
            <div class="h-w-details" id="checkbox">

              <div class="one-size">
              <div class="blue-box" onclick="toggleHiddenBox()">
                  <div class="hidden-box" id="hiddenBox"></div>
              </div>
                <span style="font-weight:500;">EXACT</span>
            </div>
              <div class="one-size">
                  <div class="blue-box" onclick="toggleHiddenBox2()">
                 <div class="hidden-box-2" id="hiddenBox-2"></div>
             </div>
                <span  style="font-weight:500;">CLOSEST AVAILABLE</span>
            </div> 
</div>
       </div>
</div>
       <div class="quote-details-row">
         <div class="quote-row">
            <label  class="new-name">Type Of Label*</label>
            <div class="select-container">
                <select class="select-quote arrow-symbol">
                    <option>Select Option</option>
                    <option>Thermal Transfer</option>
                    <option>Direct Thermal</option>
                    <option>Laser</option>
                    
                </select>
                </div>
        </div>
        <div class="quoting-details" >
            <label  class="new-name">Number Of Labels Across</label>
            <div class="select-container">
            <select class="select-quote arrow-symbol ">
                   <option>Select Option</option>
                     <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                     
           </select>
       </div>
       </div>
    </div>
    <div class="quote-details-row">
         <div class="quote-row">
            <label  class="new-name">Type Of Material*</label>
            <div class="select-container">
                <select class="select-quote arrow-symbol">
                <option>Select Option</option>
                    <option>Paper</option>
                    <option>Semi-Gloss Paper</option>
                    <option>Gloss Paper</option>
                    <option>Gold Foil</option>
                    <option>Silver Foil</option>    
                    <option>Paper Tag</option>
                    <option>Synthetic Tag</option>
                    <option>Polypropylene (BOPP)</option>
                    <option>White Gloss Polyester</option>
                    <option>White Matte Polyester</option>
                    <option>Gloss Silver Polyester</option>
                    <option>Matte Silver Polyester</option>
                    <option>Brushed Silver Polyester</option>
                    <option>Clear Polyester</option>
                    <option>Retro-Reflective</option>
                    <option>Vinyl</option>
                </select>
            </div>
        </div>
        <div class="quoting-details" >
            <label class="new-name">Type Of Adhesive</label>
            <div class="select-container">
            <select class="select-quote arrow-symbol">
                   <option>Select Option</option>
                     <option>Permanent</option>
                    <option>Removable</option>
                    <option>Ultra Removable</option>
                    <option>Opaque (Block Out)</option>
                    <option>All Temp</option>
                    <option>Freezer Grade</option>
                    <option>High Tack</option>
                    <option>Dissolvable</option>
                    <option>Void Pattern</option>                 
           </select>
         </div>
       </div>
  </div>
  <div class="quote-details-row">
         <div class="quote-row">
            <label  class="new-name">Type Of Printer</label>
            <input type="text" class="select-quote"/>
        </div>
        <div class="quoting-details" >
            <label class="new-name">Core & Outer Diameter</label>
             <div class="core-diameter-box">
                    <span>CORE</span>
                    <input type="text" class="cd-input">         
                    <span>OUTER DIAMETER</span>
                    <input type="text" class="cd-input">              
             </div>   
       </div>
    </div>
    <div class="quote-details-row">
         <div class="quote-row">
            <label  class="new-name">Roll Wind</label>
            <div class="select-container">
            <select class="select-quote arrow-symbol">
                   <option>Select Option</option>
                     <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                     
           </select>
        </div>
        </div>
        <div class="quoting-details" >
            <label  class="new-name">Perforations*</label>
            <div class="h-w-details">
            <div class="blue-box" onclick="toggleHiddenBox3()">
          <div class="hidden-box-3" id="hiddenBox-3"></div>
        </div>
                <span >YES</span>
        <div class="blue-box" onclick="toggleHiddenBox4()">
             <div class="hidden-box-4" id="hiddenBox-4"></div>
        </div>
                <span>NO</span>
            </div>            
             </div>   
       </div>
       <div class="quote-details-row">
         <div class="quote-row">
            <label  class="new-name"> Quantity Of Labels</label>
            <input type="text" class="select-quote" placeholder="Enter Quantity Needed">   
         
        </div>
        <div class="quoting-details" >
            <label class="new-name" style="margin-bottom:20px;">Upload Example PDF File</label>
          <div class="file-input-container">
            <label for="file" class="upload-file">Choose File</label>
            <input type="file" id="file" class="file-input">
         </div>       
        </div>           
    </div> 
    <div class="comment-row">
        <label>Comments</label>
        <input type="text"  placeholder="Notes or Comments to help us assist you better" >
    </div>  
</div>
    </div>    
 
    <!-- ================ captcha================ -->
    <div class="captcha--container">
    <div class="captcha-box">
        <div class="left-captcha">
        <input type="checkbox" class="checkbox">
        <label>I'm not a robot</label>
    </div>
    <div class="right-captcha">
        <div class="captcha-img"></div>
        <div class="re-cap">reCAPTCHA</div>
        <div class="terms">Privacy - Terms</div>
    </div>
    </div>
    
    </div>
    <div class="submit">
    <button type="submit" class="sumbit-quote">Submit for Quote</button>
    </div>
</form>  <div class="quoting-details" id="mobile-quoting-details">
              <h2 class="quotes-title">Quoting Process / Details</h2>
              <p class="quoting-info">Looking for a label that is not offered on our website? Do you have a special application that requires custom sizing, printing or color? LLT Labels will be able to quote almost any label application.</p>
         </div>
  
        </div>  
         
       
       </div>
       </div>  
    </div>
</div>


<script>
  function hideAllHiddenBoxes() {
    var hiddenBox = document.getElementById("hiddenBox");
    var hiddenBox2 = document.getElementById("hiddenBox-2");
  
    // Hide both hidden boxes
    hiddenBox.style.display = "none";
    hiddenBox2.style.display = "none";
   
  }
  function hideAllHiddenBoxes3() {
    var hiddenBox3 = document.getElementById("hiddenBox-3");
    var hiddenBox4 = document.getElementById("hiddenBox-4");
  
    // Hide both hidden boxes
    hiddenBox3.style.display = "none";
    hiddenBox4.style.display = "none";
   
  }
  function toggleHiddenBox() {
    var hiddenBox = document.getElementById("hiddenBox");
    var hiddenBox2 = document.getElementById("hiddenBox-2");
 
    // Hide the other hidden box
    hideAllHiddenBoxes();

    // Toggle the display of the hidden box
    hiddenBox.style.display =
      hiddenBox.style.display === "none" ? "block" : "none";
  }

  function toggleHiddenBox2() {
    var hiddenBox = document.getElementById("hiddenBox");
    var hiddenBox2 = document.getElementById("hiddenBox-2");
   
    // Hide the other hidden box
    hideAllHiddenBoxes();

    // Toggle the display of the hidden box
    hiddenBox2.style.display =
      hiddenBox2.style.display === "none" ? "block" : "none";
  }
  
  function toggleHiddenBox3() {
    var hiddenBox3 = document.getElementById("hiddenBox-3");
    var hiddenBox4 = document.getElementById("hiddenBox-4");
   // Hide the other hidden box
    hideAllHiddenBoxes3();
    // Toggle the display of the hidden box
    hiddenBox3.style.display =
      hiddenBox3.style.display === "none" ? "block" : "none";
  }
  function toggleHiddenBox4() {
    var hiddenBox3 = document.getElementById("hiddenBox-3");
    var hiddenBox4 = document.getElementById("hiddenBox-4");
    hideAllHiddenBoxes3() ;

    // Toggle the display of the hidden box
    hiddenBox4.style.display =
      hiddenBox4.style.display === "none" ? "block" : "none";
  }

</script>


<?php get_footer(); ?>