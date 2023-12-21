<?php /* Template Name:shipping */ ?>
<?php get_header(); ?>
<!-- ============ SHIPPING ================== -->
<div class="yourcart-wrapper">
    <div class="checkout-header" >
        <div class="shopping-logo">
          <ul class="checkout-title">
            <li >
                <span class="co-num ">1</span>
                <a href="http://task.local/your-cart/" class="cart-name-link">YOUR CART</a>
            </li>
            <li class="active-class">
                <span class="co-num">2</span>
                <a href="http://task.local/shipping/"  class="cart-name-link">SHIPPING</a>
            </li>
            <li>
                <span class="co-num">3</span>
                <a href="#"  class="cart-name-link">PAYMENT INFO</a>
            </li>
          </ul>
        </div>
</div>
<div class="shipping-section-info">
              Shipping & Address Info
  </div>
  <div class="shipping-address-section"> 
    <!-- first box -->
      <div class="dropdown">
      <input
        type="checkbox"
        class="dropdown__switch"
        id="filter-switch"
        hidden
      />
      <label for="filter-switch" class="dropdown__options-filter">
        <ul class="dropdown__filter" role="listbox" tabindex="-1">
          <li class="dropdown__filter-selected" aria-selected="true">
           select Address
          </li>
          <li>
            <ul class="dropdown__select">
              <li
                class="dropdown__select-option"
                role="option"
                data-content="content-option-1"
              > <span class="option-name">
              useNew
              </span>
               
              </li>
              <li
                class="dropdown__select-option"
                role="option"
                data-content="content-option-2"
              >
               select Address
              </li>
            </ul>
          </li>
        </ul>
      </label>
   
    <!-- Hidden content for each option -->
    <div  id="content-option-1" class="hidden-content">
      <form id="option1" class="size_chart">
        <div class="form-title">
          <div class="shipping-form-row shipping-col-2">
            <div class="shipping-name">
              <label>First Name</label>
              <input type="text" placeholder="John" class="input-shipping" id="input-shipping-name"/>
            </div>
            <div class="shipping-name">
              <label>Last Name</label>
              <input type="text" placeholder="Smith" class="input-shipping" id="input-shipping-name"/>
            </div>
          </div>
          <div class="shipping--details shipping-form-row">
            <label>Company</label>
            <input type="text" class="input-shipping" />
          </div>
          <div class="shipping-details shipping-form-row">
            <label>Address</label>
            <input type="text" class="input-shipping" />
          </div>
          <div class="shipping-details shipping-form-row">
            <label>Address 2</label>
            <input type="text" class="input-shipping" />
          </div>
          <div class="shipping-form-row shipping-col-2">
            <div class="shipping-name">
              <label class="label">City/Town</label>

              <input
                id="ShippingCompanyName"
                parsley-required="true"
                name="ShippingCompanyName"
                parsley-trigger="focusout"
                parsley-validation-minlength="0"
                type="text"
                value=""
                class="input-shipping"
              />
            </div>
            <div class="shipping-country shipping-name">
              <label>Country</label>
              <select class="shipping-select">
                <option>United States</option>
              </select>
            </div>
          </div>
          <div class="shipping-form-row shipping-col-2">
            <div class="shippping-city shippping-state">
              <label>State/Region</label>
              <select class="shipping-select">
                <option>Select State/Region</option>
                <option>Alabama </option>
                <option>Alaska </option>
                <option>Arkansas  </option>
                <option>California </option>
                <option>Colorado </option>
                <option>Connecticut </option>
                <option>Delaware </option>
                <option>Dist. of Columbia</option>
              </select>
            </div>
            <div class="shipping-postal">
              <label>Postal Code</label>
              <input type="text" class="input-shipping" />
            </div>
          </div>

          <div class="shipping-form-row shipping-col-2">
            <div class="email-address">
              <label>Email Address</label>
              <input
                type="email"
                class="input-shipping"
                placeholder="John@smith.com"
                id="input-shipping-name"
              />
            </div>
            <div class="shipping-phone">
              <label>Daytime Phone Number</label>
              <input type="tel" class="input-shipping" />
            </div>
          </div>
          <div
            class="shippping-address-type shipping-form-row shipping-col-2"
          >
            <label>Shipping Address Type</label>
            <select class="shipping-select">
              <option>Residential</option>
              <option>Commercial</option>
            </select>
          </div>
          <div class="row-shipping">
            <p>
              Add my email to the mailing list to receive promotions and
              updates <input type="checkbox" />
            </p>
          </div>
        </div>
      </form>
    </div>
</div>
     <!-- =============== FORM END ================ -->
  
    <div class="order-details" id="order">
    <div class="total-orders shipping-order">
    <span style="color: #656565;font-weight:bold;margin-bottom:10px;" for="useNewContent">Order Details</span>
                <div class="cart-subtotal shipping-line">
                    <span class="name-order">Subtotal</span>
                    <span class="price-total"> $770.45</span>
                </div>
                <div class="cart-subtotal shipping-line">
                    <span class="name-order">Shipping</span>
                    <span class="price-total">$0.00</span>
                </div>
                <div class="cart-subtotal shipping-line">
                    <span class="name-order">Tax</span>
                    <span class="price-total"> $0.00</span>
                </div>
                <div class="cart-subtotal shipping-line">
                    <span class="name-order">Discount</span>
                    <span class="price-total">$0.00</span>
                </div>
                <div class="cart-subtotal shipping-line " style="margin-bottom:30px;color: #656565;font-weight:bold;">
                    <span class="name-order">Total</span>
                    <span class="price-total"> $770.45</span>
                </div>
                <div class="proceed-btn shipping-btn">
                     <a href="#">Select Shipping Methods</a>
                </div>
      </div>
      <div class="edit-cart">
        <p class="cart-change">
           Need to Make a Change?<br>
            <a href="#">» Edit Your Cart</a>
        </p>
        <p class="cart-def"><strong class="shipping-cart-heading">Having checkout problems?</strong>Let us know and we can help you with the process. Give us a call at<span class="shipping-num"> 800-882-4050 </span> M-F / 8-6 EST to speak with a Customer Service Representative.
    </p>
      </div>
  </div>
 </div>
 <div class="shipping-method">
  <div class="shipping-section-info" id="mobile-block-shipping">
      <span>Choose Shipping Method</span>
       <a href="#" class="shipping-link">Need to make a change? Edit Your Cart.</a>
   </div>
    <div class="shipping-info">
         Please enter your country, state, and postal code to retrieve shipping rates.
     </div>
    <div class="shipping-section-info">
      Special Instructions
    </div>
 </div>

  </div>
  </div>
  
  
 
</div>
<!-- ==================================== -->

<script>
    $(document).ready(function(){

//hides dropdown content
$(".size_chart").hide();

//listen to dropdown for change
$("#size_select").change(function(){
  //rehide content on change
  $('.size_chart').hide();
  //unhides current item
  $('#'+$(this).val()).show();
});

});
    </script>
   <script>
       var orderContent = document.getElementById("order");
            var originalContent = orderContent.innerHTML;

  function reloadContent() {
      setTimeout(function() {
      orderContent.style.opacity = 0; 
      setTimeout(function() {
        orderContent.innerHTML = originalContent;
        orderContent.style.opacity = 1;
      }, 100); 
    },100);
  }
      // Change option selected
      const label = document.querySelector(".dropdown__filter-selected");
      const options = Array.from(
        document.querySelectorAll(".dropdown__select-option")
      );
      const hiddenContents = Array.from(
        document.querySelectorAll(".hidden-content")
      );

      options.forEach((option) => {
        option.addEventListener("click", () => {
          label.textContent = option.textContent;

          // Hide all content
          hiddenContents.forEach((content) => {
            content.style.display = "none";
          });

          // Show content for the selected option
          const contentId = option.getAttribute("data-content");
          const selectedContent = document.getElementById(contentId);
          if (selectedContent) {
            selectedContent.style.display = "block";
            reloadContent();
          }
        });
      });

      // Close dropdown onclick outside
      document.addEventListener("click", (e) => {
        const toggle = document.querySelector(".dropdown__switch");
        const element = e.target;

        if (element == toggle) return;

        const isDropdownChild = element.closest(".dropdown__filter");

        if (!isDropdownChild) {
          toggle.checked = false;
        }
      });
    </script>


      
    <?php get_footer(); ?>