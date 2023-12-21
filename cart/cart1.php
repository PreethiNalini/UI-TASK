<?php /* Template Name:cart1 */ ?>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<? bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <!-- icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />   
    <?php wp_head(); ?> 
    
</head>
<div class="cart1-wrapper">

 <div class="cart-row">
    <div class="cart-product">
        <div class="cart-link">
          <a href="#" >4 x 6 DT paper 250/RL 12/CTN perf 1"core 4"OD  has been added to your shopping cart</a>
</div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/page 1.jpeg" alt="Your Logo Alt Text">
          <p>Price : $13.10</p>
     </div>
     <div class="cart-total">
          <h2>Shopping Cart Overview</h2>
          <div class="total-details">
            <span id="c-num">12</span>
            <span id="c-text">Items Totalling</span>
            <span id="cc-total"> $495.20</span>
          </div>
          <div class="cart-link">
            <a href="#">Keep Shopping</a>
            <a href="#">Go To Checkout</a>
          </div>
     </div>
 </div>

      <div class="cart-listing">
          <h2>Your Cart</h2> 
          <div class="cart-title">
            <div class="items">Items</div>
            <div class="quantity">Quantity</div>
            <div class="total">Total</div>
          </div>
          <div class="cart-item-list">
            <div class="num-item">
                <div class="cart-img-link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product3.jpeg" alt="Your Logo Alt Text">
                <a href="#">4.33" x 1476' Zebra Premium Wax Ribbon Black 6/CTN</a>
                </div>
                <div class="qty">3</div>
                <div class="tot">$224.97</div>
            </div>

            <div class="num-item">
                <div class="cart-img-link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product1.jpeg" alt="Your Logo Alt Text">
                <a href="#">4 x 6 DT paper 250/RL 12/CTN perf 1"core 4"OD</a>
                </div>
                <div class="qty">20</div>
                <div class="tot">$262.00</div>
            </div>

            <div class="num-item">
                <div class="cart-img-link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product2.jpeg" alt="Your Logo Alt Text">
                <a href="#">4" x 6" TT paper 1000/RL 4/CTN perf 3"core 8"OD</a>
                </div>
                <div class="qty">1</div>
                <div class="tot">$34.43</div>
            </div>
          </div>

  <!-- ============products ================= -->
  <div class="related-products">
    <h2>Customers Also Purchased</h2>
    <div class="label-product-container">

    
     <div class="related-item">
         <div class="product-details pro-info">
            <div class="product-img-list">
            <img src="<?php echo get_template_directory_uri(); ?>/images/1.gif"  alt="Your Logo Alt Text" class="product-img-related">
            </div>
        
               <div class="Add-cart cart-button">ADD TO CART</div>
               <div class="amount-details">
              <div class="product-item">10000284</div>
              <div class="product-cost">$22.46 </div>
              </div>
              <div  class="about-material">4" x 3" TT paper Zebra Z-Perform 2000T 2000/RL 4/CTN perf 3"core 8"OD</div >    
         </div>                                                       

         <div class="product-details pro-info">
         <div class="product-img-list">
            <img src="<?php echo get_template_directory_uri(); ?>/images/1.gif" alt="Your Logo Alt Text" class="product-img-related">
            </div>
            <div class="Add-cart cart-button">ADD TO CART</div>
         <div class="amount-details">
            <div class="product-item">10010035</div>
            <div class="product-cost"> $25.02 </div>
            </div>
         <div class="about-material">4" x 6" DT paper yellow Zebra Z-PERFORM 2000D 430/RL 6/CTN perf 1"core 5"OD</div>
         </div>
       
         <div class="product-details pro-info">
         <div class="product-img-list">
            <img src="<?php echo get_template_directory_uri(); ?>/images/1.gif" alt="Your Logo Alt Text" class="product-img-related">
            </div>
         <div class="Add-cart cart-button">ADD TO CART</div>
         <div class="amount-details">
         <div class="product-item">18941</div>
         <div class="product-cost"> $161.50</div>
         </div>
         <div  class="about-material">4" x 6" TT polyester Zebra Z-Ultimate 3000T White 460/RL 4/CTN perf 1"core 5"OD</div >
         </div>
         </div>        
</div>
  </div>
      </div>
       <!-- Remove button -->
      <div class="remove-button" onclick="closeCart()">
            <i class="fas fa-times"></i> 
        </div>
</div>

