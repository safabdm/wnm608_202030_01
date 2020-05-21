const productListTemplate = templater((o,i,a) =>{
    return `
    <div class="col-xs-6 col-md-4 col-lg-3">
        <a href="product_item.php?id=${o.id}" class="product-item card card-soft card-light card-flat">
            <div class="image-square">
                <img src="img/store/${o.main_image}" alt="">
            </div>
            <div class="product-description">
                <div>${o.title}</div>
                <div>&dollar;${Number(o.price).toFixed(2)}</div> 
            </div>
        </a>
    </div>
    `
}); // had to add this code on line 11 because my price was not a numeric value
