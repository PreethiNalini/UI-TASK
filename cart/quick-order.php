<?php /* Template Name:quick-order */ ?>
<?php get_header(); ?>
<div class="quote-form-wrapper " id="quick-order">
    <div class="form-container qo-container">
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
        <div class="form-side" id="quick-order-container">
        <div class="mobile-view-banner"></div>
        <div class="header-quote">
            <ul class="form-home-link">
             <li><a href="#">Home </a></li>
             <li><a href="#">Quick Order</a></li>
           </ul>
           <div class="get-quote-title">
              Quick Order
           </div>
      </div>
           <section CLASS="quick-order-container">
             <form class="quick-order-form">
                <div class="quick-order-header">
                    <span class="quick-name">Item Number</span>
                    <span class="quick-qty">QTY</span>
                </div>
                <div class="quick-order-row">
                    <div class="qo-item">
                       <input type="text" placeholder="Enter Item or Product Number" class="input-name" />
                    </div>
                    <div class="qo-qty">
                       <input type="text" placeholder="Qty" />
                    </div>
                </div>
                <div class="quick-order-row">
                    <div class="qo-item">
                       <input type="text" placeholder="Enter Item or Product Number" />
                    </div>
                    <div class="qo-qty">
                       <input type="text" placeholder="Qty" />
                    </div>
                </div>
                <div class="quick-order-row">
                    <div class="qo-item">
                       <input type="text" placeholder="Enter Item or Product Number" />
                    </div>
                    <div class="qo-qty">
                       <input type="text" placeholder="Qty" />
                    </div>
                </div>
                <div class="quick-order-row">
                    <div class="qo-item">
                       <input type="text" placeholder="Enter Item or Product Number" />
                    </div>
                    <div class="qo-qty">
                       <input type="text" placeholder="Qty" />
                    </div>
                </div>
                <div class="quick-order-row last-item">
                    <div class="qo-item">
                       <input type="text" placeholder="Enter Item or Product Number" />
                    </div>
                    <div class="qo-qty">
                       <input type="text" placeholder="Qty" />
                    </div>
                </div>
                  
                <div class="quick-order-row">
                    <div class="add-img"></div>
                    <div class="add-item">ADD MORE ITEMS</div>
                </div>
                <div id="qo-submit">
                <button type="submit" class="btn-quick-order">
                    <span>ADD TO CART</span></button>
                </div>
             </form>
             <div class="quoting-details qo-details">
               <h2 class="quotes-title">How does Quick Order work?</h2>
               <p class="quoting-info">Know what you want? Check out quickly by entering the products and quantities you are looking for and then add them to your cart.</p>
            </div>
           </section>
        </div>

</div>
</div>
<script>
 
        const addItemButton = document.querySelector(".add-img");

        addItemButton.addEventListener("click", () => {
        
            const lastItemRow = document.querySelector(".last-item");

            const newRow = document.createElement("div");
            newRow.className = "quick-order-row";
            newRow.innerHTML = `
                <div class="qo-item">
                    <input type="text" placeholder="Enter Item or Product Number" />
                </div>
                <div class="qo-qty">
                    <input type="text" placeholder="Qty" />
                </div>
            `;
       
                lastItemRow.parentNode.insertBefore(newRow, lastItemRow.nextSibling);
        });
   
</script>



<?php get_footer(); ?>
