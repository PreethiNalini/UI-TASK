<?php /* Template Name:YourCart */ ?>
<?php get_header(); ?>
<!-- =========== your cart page ============ -->
<div class="yourcart-wrapper">
    <div class="checkout-header">
        <div class="shopping-logo">
          <ul class="checkout-title">
            <li class="active-class">
                <span class="co-num ">1</span>
                <a href="http://task.local/your-cart/" class="cart-name-link">YOUR CART</a>
            </li>
            <li>
                <span class="co-num">2</span>
                <a href="http://task.local/shipping/"  class="cart-name-link">SHIPPING</a>
            </li>
            <li>
                <span class="co-num">3</span>
                <a href="#"  class="cart-name-link">PAYMENT INFO</a>
            </li>
          </ul>
          <div class="continue-shop-link">
        <a href="#" >continue shopping</a>
      </div>
        </div>
        <div class="checkout-btn-cart">
           <a href="#" class="checkout-btn">Checkout</a>
        </div>   
      </div>
   
<!--====== your cart body page======== -->
     <div class="cart-item-details">      
            <div class="yc-item">Items</div>
            <div class="yc-quantity">quantity</div>
            <div class="yc-price">Price</div>
            <div class="yc-total">Total</div>
     
     </div>
     <div class="yc-list-item "  >
     <div class="cart-item-list">
            <div class="num-item " >
                <div class="cart-img-link yc-img-link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product3.jpeg" alt="Your Logo Alt Text">
                <a href="#"  class="yc-img-text" style="color: #0056b8;">4.33" x 1476' Zebra Premium Wax Ribbon Black 6/CTN<br>BRYAJ433</a>
                </div>
                <div class="qty-table">
                <input type="number" id="quantity" name="quantity" value="1" min="1" max="10" class="qty-input">
                <a href="#">update qty</a>
                </div>

                <div class="mobile-items">
                <div class="price-table">
                    <label class="mobile-heading">Price</label>
                    <span class="active-value">$74.99</span>
                    <span class="del-value"><del>$79.99</del></span>
                </div>
                <div class="mobile-total">
                 <label class="mobile-heading" style="text-align:center;padding-left:50px;">Total</label>
                 <div class="total-amount">$224.97</div>
               </div>
                </div>
                    <div class="remove" onclick="removeElement(this)">
                    <div class="close-btn-yc"></div>
                    <a href="#" >remove</a>
                   </div>
               </div>

            <div class="num-item">
                <div class="cart-img-link yc-img-link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product1.jpeg" alt="Your Logo Alt Text">
                <a href="#" class="yc-img-text"  style="color: #0056b8;">4 x 6 DT paper 250/RL 12/CTN perf 1"core 4"OD<br>BDG4060UP</a>
                </div>
                
                <div class="qty-table">
                <input type="number" id="quantity" name="quantity" value="1" min="1" max="10" class="qty-input">
                <a href="#">update qty</a>
                </div>

                <div class="mobile-items">
                        <div class="price-table">
                       <label class="mobile-heading">Price</label>
                           <span class="active-value">$74.99</span>
                           <span class="del-value"><del>$79.99</del></span>
                         </div>
                         <div class="mobile-total">
                         <label class="mobile-heading" style="text-align:start;padding-left:50px;">Total</label>
                 <div class="total-amount">$224.97</div>
               </div>
                </div>
                
                <div class="remove">
                    <div class="close-btn-yc"></div>
                    <a href="#">remove</a>
                </div>
              
            </div>
           <div class="num-item" style="margin-bottom:20px;">
                <div class="cart-img-link yc-img-link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product2.jpeg" alt="Your Logo Alt Text">
                <a href="#" class="yc-img-text"  style="color: #0056b8;">4" x 6" TT paper 1000/RL 4/CTN perf 3"core 8"OD<br>BTK4060AP</a>
                </div>
                
                <div class="qty-table">
                <input type="number" id="quantity" name="quantity" value="1" min="1" max="10" class="qty-input">
                <a href="#">update qty</a>
                </div>

                <div class="mobile-items">
                  <div class="price-table">
                    <label class="mobile-heading">Price</label>
                    <span class="active-value">$74.99</span>
                    <span class="del-value"><del>$79.99</del></span>
                </div>
               <div class="mobile-total">
               <label class="mobile-heading" style="text-align:center;padding-left:50px;">Total</label>
                 <div class="total-amount">$224.97</div>
               </div>
                
               </div>
                <div class="remove grid-item-moved">
                    <div class="close-btn-yc"></div>
                    <a href="#">remove</a>
                </div>
            </div>
          </div>
<!-- ================= CART HEADING ================== -->
        <div class="cart-heading">
            <div class="cart-shipping">
                <span class="title-bar">Shipping</span>
                <p>LLT Labels offers several shipping options for your order.<br>Ship your order off of our freight table or use your UPS or FedEx account on the next page.</p>
            </div>
          
            <div class="cart-discount">
                <span class="title-bar">Apply Your Discount Code</span>
                <div class="discount-block">
                       <p>Do you have a discount code?</p>
                       <input id="discount-code" name="discount-code" placeholder="Discount Code" type="text">
                      <button type="submit">Apply Code</button>
                </div>            
            </div>

            <div class="cart-proceed">
                <span class="title-bar">Cart Total</span>
               <div class="total-orders">
                <div class="cart-subtotal">
                    <span class="name-order">Subtotal</span>
                    <span class="price-total"> $915.43</span>
                </div>
                <div class="cart-subtotal">
                    <span class="name-order">Shipping</span>
                    <span class="price-total">$0.00</span>
                </div>
                <div class="cart-subtotal">
                    <span class="name-order">Tax</span>
                    <span class="price-total"> $0.00</span>
                </div>
                <div class="cart-subtotal">
                    <span class="name-order">Discount</span>
                    <span class="price-total">$0.00</span>
                </div>
                <div class="cart-subtotal">
                    <span class="name-order">Total</span>
                    <span class="price-total"> $915.43</span>
                </div>
                <div class="proceed-btn">
               <a href="#">Proceed to Checkout</a>
                </div>
            </div>
           
          
            </div>
        </div>



     </div>  

</div>
<script>
function removeElement(clickedElement) {
  var row = clickedElement.parentNode;
  row.parentNode.removeChild(num-item);
}
</script>













<?php get_footer(); ?>