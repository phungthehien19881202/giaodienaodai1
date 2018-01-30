@extends('master')
@section('slide')
 <section id="slider"><!--slider-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#slider-carousel" data-slide-to="1"></li>
              
            </ol>
            
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-sm-6">
                  <h1>Bộ sưu tập Áo Dài Cách Tân</h1>
                  <h2>Top 100 Áo Dài Cách Tân đẹp nhất 2018</h2>
                  <p>Áo Dài Cách Tân là sự kết hợp hoàn hảo giữa xu hướng thời trang truyền thống và hiện đại. Vừa mang nét đẹp dịu dàng của phụ nữ 
</p>
                  <button type="button" class="btn btn-default get">Xem Ngay!!!</button>
                </div>
                <div class="col-sm-6">
                  <img src="source/images/home/anhsua.png" class="girl img-responsive" alt="" />
                </div>
              </div>
              <div class="item">
                <div class="col-sm-6">
                  <h1>May đồng phục áo dài</h1>
                  <h2>100% Rẻ đẹp chất lượng</h2>
                  <p>Áo Dài Cách Tân là sự kết hợp hoàn hảo giữa xu hướng thời trang truyền thống </p>
                  <button type="button" class="btn btn-default get">Xem ngay!!!</button>
                </div>
                <div class="col-sm-6">
                  <img src="source/images/home/anhsua2.png" class="girl img-responsive" alt="" />
                  
                </div>
              </div>
              
              
              
            </div>
            
            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </section><!--/slider-->
  
@endsection
@section('content')
    <div class="col-sm-9 padding-right">
          <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Mẫu Áo Dài Cách Tân Đẹp</h2>
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="source/images/home/aodai1.jpg" alt="" />
                      <h2>560.000đ</h2>
                      <p><a href="">Xem Chi Tiết</a></p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                    </div>
                   
                </div>
                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                <div class="single-products">
                  <div class="productinfo text-center">
                    <img src="source/images/home/aodai1.jpg" alt="" />
                    <h2>560.000đ</h2>
                    <p><a href="">Xem Chi Tiết</a></p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                  </div>
                 
                </div>
               
              </div>
            </div>
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                <div class="single-products">
                  <div class="productinfo text-center">
                    <img src="source/images/home/aodai1.jpg" alt="" />
                    <h2>560.000đ</h2>
                    <p><a href="">Xem Chi Tiết</a></p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                  </div>
                 
                </div>
                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                <div class="single-products">
                  <div class="productinfo text-center">
                    <img src="source/images/home/aodai.jpg" alt="" />
                    <h2>560.000đ</h2>
                    <p><a href="">Xem Chi Tiết</a></p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                  </div>
                 
                  <img src="source/images/home/new.png" class="new" alt="" />
                </div>
                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                <div class="single-products">
                  <div class="productinfo text-center">
                    <img src="source/images/home/aodai.jpg" alt="" />
                    <h2>560.000đ</h2>
                    <p><a href="">Xem Chi Tiết</a></p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                  </div>
                 
                  <img src="source/images/home/sale.png" class="new" alt="" />
                </div>
                
              </div>
            </div>
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                <div class="single-products">
                  <div class="productinfo text-center">
                    <img src="source/images/home/aodai.jpg" alt="" />
                    <h2>560.000đ</h2>
                    <p><a href="">Xem Chi Tiết</a></p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                  </div>
                
                </div>
               
              </div>
            </div>
            
          </div><!--features_items-->
          
          
          
          <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">Áo Dài Cưới</h2>
            
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active"> 
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="source/images/home/aodaicuoi.jpg" alt="" />
                          <h2>1000.000đ</h2>
                          <p><a href="">xem chi tiết</a></p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="source/images/home/aodaicuoi.jpg" alt="" />
                          <h2>1000.000đ</h2>
                          <p><a href="">xem chi tiết</a></p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="source/images/home/aodaicuoi.jpg" alt="" />
                          <h2>1000.000đ</h2>
                          <p><a href="">xem chi tiết</a></p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">  
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="source/images/home/aodaicuoi.jpg" alt="" />
                          <h2>1000.000đ</h2>
                          <p><a href="">xem chi tiết</a></p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="source/images/home/aodaicuoi.jpg" alt="" />
                          <h2>1000.000đ</h2>
                          <p><a href="">xem chi tiết</a></p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="source/images/home/aodaicuoi.jpg" alt="" />
                          <h2>1000.000đ</h2>
                          <p><a href="">xem chi tiết</a></p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                </a>      
            </div>
          </div><!--/recommended_items-->
          
        </div>
@endsection