<style>
  .search1 h1.title {
    font: 400 24px/25px 'UtmAvo', sans-serif;
    color: #4caf50;
    border-bottom: 1px solid #8a6d3b;
    margin-bottom: 14px;
}

.search1 h1.title span {
    display: inline-block;
    border-bottom: 1px solid #ff6434;
    padding-bottom: 10px;
    position: relative;
    bottom: -1px;
}
.search1 h1.title span strong  {
 color: red;
}
</style>
<div class="single-product-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
  <div class="product-breadcroumb" style="margin-bottom: 15px">
    <a href="<?php echo base_url() ?>"><font class="">Trang chủ </font></a>/
    <a href="<?php echo base_url('product/cataloglist') ?>"><font class="">Sản phẩm </font>/</a>
  </div>
  <div class="search1">
    <h1 class="title"><span>KẾT QUẢ TÌM KIẾM GIÁ TỪ: "<strong> <?php echo number_format($price_form ) ?> đ </strong> ĐẾN <strong> <?php echo number_format($price_to) ?> đ </strong> "</span></h1>
  </div>
    <div class="row">
    <?php foreach($list as $row):?>
      <div class="col-md-3 col-sm-10">    
        <div class="single-shop-product-num">
        
          <div class="product-upper-num">
            <a href="<?php echo base_url('product/chitietsp/'.$row->id)?>">
            <img src="<?php echo base_url('upload/product/'.$row->image_link) ?>" alt="<?php echo $row->image_link ?>"></a>
          </div>
          <div class="salel">
              <?php if($row->discount):?>
                <div class="sale1"><?php echo $row->discount ?>%</div>
              <?php else: ?>
                <div style="display: none"></div>
              <?php endif; ?>
            </div>
          <h2><a href="<?php echo base_url('product/chitietsp/'.$row->id)?>" title="<?php echo $row->name ?>"><?php echo $row->name ?></a></h2>
          <?php if($row->discount >0):?>
          <?php $price_news = $row->price - $row->price/100 * $row->discount ?>
          <div class="product-carousel-price">
            <ins><?php echo number_format($price_news) ?>đ</ins> <del><?php echo number_format($row->price) ?></del>
          </div>  
          <?php else: ?>
           <ins><?php echo number_format($row->price) ?>đ</ins>
          <?php endif; ?>
          <div class="product-option-shop-num">
            <a class="add_to_cart_num" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="<?php echo base_url('cart/add/'.$row->id) ?>">MUA HÀNG</a>
          </div>                          
        </div>
      </div>
       <?php endforeach; ?>   
    </div>
    
  </div>
</div>

