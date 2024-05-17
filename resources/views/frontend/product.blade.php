@extends('layouts.site')
@section('content')



    <div class="product py-4" style="background-color: antiquewhite;">
        <div class="container">
            <div class="row">
                <img src="assets/images/banner_collection.webp" alt="">
            </div>
        </div>
    </div>

<style>
    body{
        background-color: antiquewhite;
    }
</style>

    
<div class="container">
    <aside class="dqdt-sidebar">
        <div class="title-head text-center ">
            Danh mục sản phẩm
        </div>
        <nav class="nav-category">
            <ul class="nav">
                <li class="nav-item1 form-contact">
                    <a title="Áo" class="nav-link" href="product.html">
                        <span class="category-icon"></span> Áo 
                        <span>(40 sản phẩm)</span>
                    </a>
                </li>
                <li class="nav-item1 form-contact">
                    <a title="Quần" class="nav-link" href="/quan">
                        <span class="category-icon"></span> Quần 
                        <span>(23 sản phẩm)</span>
                    </a>
                </li>
                <li class="nav-item1 form-contact">
                    <a title="Giày & Phụ Kiện" class="nav-link" href="/giay-phu-kien">
                        <span class="category-icon"></span> Giày & Phụ Kiện 
                    </a>
                </li>
                <li class="nav-item1 form-contact">
                    <a title="Giày & Phụ Kiện" class="nav-link" href="/giay-phu-kien">
                        <span class="category-icon"></span> Collection
                    </a>
                </li>
                <li class="nav-item1 form-contact">
                    <a title="Giày & Phụ Kiện" class="nav-link" href="/giay-phu-kien">
                        <span class="category-icon"></span> Best Saler
                    </a>
                </li>
                
            </ul>
        </nav>
    </aside>
</div>


    <div class="col-md py-3">
        <div class="product-new" style="background-color: antiquewhite;">
            <div class="container py-3">
                <span style="color: navy;"> <h2 class="text-center">Sản Phẩm
                    <div class="spinner-grow text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </span> </h2>
               
                    <ul class="nav form-contact">
    
                        <li class="nav-item px-4" style="text-align: center;">
                            <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="assets/images/ao thun.jpg"style="width: 250px; " ";> </a>             
                            <p><b>Áo Weeater trơn </b></p>
                            <ul class="nav" style="color: #525456;">
                                <li>Nam</li>
                                <li class="nav-item px-5"><li class="nav-item px-3">Size s-Freesize</li> </li>
                            </ul>
                            <ul class="nav py-2">
                              <li>Giá:</li>
                              <li class="nav-item px-5"><li class="nav-item px-4"style="color:blue; font-family: 'Franklin Gothic Medium';">390.000đ</li></li>
                            </ul>
                            <div class="d-flex justify-content-between"style="margin-top: 10px;">
                              <a href="product_detail.html"><button type="button" class="btn btn-success">Chi tiết</button></a>
                              <button type="button" class="btn btn-success">Thêm vào giỏ</button>
                            </div>
                        </li>
    
                        <li class="nav-item px-4" style="text-align: center;">
                            <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="assets/images/aothun1.jpg"style="width: 250px; " ";> </a>             
                            <p><b>Áo Weeater trơn </b></p>
                            <ul class="nav" style="color: #525456;">
                                <li>Nam</li>
                                <li class="nav-item px-5"><li class="nav-item px-3">Size s-Freesize</li> </li>
                            </ul>
                            <ul class="nav py-2">
                              <li>Giá:</li>
                              <li class="nav-item px-5"><li class="nav-item px-4"style="color:blue; font-family: 'Franklin Gothic Medium';">390.000đ</li></li>
                            </ul>
                            <div class="d-flex justify-content-between"style="margin-top: 10px;">
                              <a href="product_detail.html"><button type="button" class="btn btn-success">Chi tiết</button></a>
                              <button type="button" class="btn btn-success">Thêm vào giỏ</button>
                            </div>
                        </li>
    
    
                        <li class="nav-item px-4" style="text-align: center;">
                            <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="assets/images/aothun3.webp"style="width: 250px; " ";> </a>             
                            <p><b>Áo Weeater trơn </b></p>
                            <ul class="nav" style="color: #525456;">
                                <li>Nam</li>
                                <li class="nav-item px-5"><li class="nav-item px-3">Size s-Freesize</li> </li>
                            </ul>
                            <ul class="nav py-2">
                              <li>Giá:</li>
                              <li class="nav-item px-5"><li class="nav-item px-4"style="color:blue; font-family: 'Franklin Gothic Medium';">390.000đ</li></li>
                            </ul>
                            <div class="d-flex justify-content-between"style="margin-top: 10px;">
                              <a href="product_detail.html"><button type="button" class="btn btn-success">Chi tiết</button></a>
                              <button type="button" class="btn btn-success">Thêm vào giỏ</button>
                            </div>
                        </li>
    
    
                        <li class="nav-item px-4" style="text-align: center;">
                            <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="assets/images/aothun2.jpg"style="width: 250px; " ";> </a>             
                            <p><b>Áo Weeater trơn  </b></p>
                            <ul class="nav" style="color: #525456;">
                                <li>Nam</li>
                                <li class="nav-item px-5"><li class="nav-item px-3">Size s-Freesize</li> </li>
                            </ul>
                            <ul class="nav py-2">
                              <li>Giá:</li>
                              <li class="nav-item px-5"><li class="nav-item px-4"style="color:blue; font-family: 'Franklin Gothic Medium';">390.000đ</li></li>
                            </ul>
                            <div class="d-flex justify-content-between"style="margin-top: 10px;">
                              <a href="product_detail.html"><button type="button" class="btn btn-success">Chi tiết</button></a>
                              <button type="button" class="btn btn-success">Thêm vào giỏ</button>
                            </div>
                        </li>
                 
                        <li class="nav-item p-4" style="text-align: center;">
                            <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="assets/images/aothun2.jpg"style="width: 250px; " ";> </a>             
                            <p><b>Áo Weeater trơn  </b></p>
                            <ul class="nav" style="color: #525456;">
                                <li>Nam</li>
                                <li class="nav-item px-5"><li class="nav-item px-3">Size s-Freesize</li> </li>
                            </ul>
                            <ul class="nav py-2">
                              <li>Giá:</li>
                              <li class="nav-item px-5"><li class="nav-item px-4"style="color:blue; font-family: 'Franklin Gothic Medium';">390.000đ</li></li>
                            </ul>
                            <div class="d-flex justify-content-between"style="margin-top: 10px;">
                              <a href="product_detail.html"><button type="button" class="btn btn-success">Chi tiết</button></a>
                              <button type="button" class="btn btn-success">Thêm vào giỏ</button>
                            </div>
                        </li>

                        <li class="nav-item p-4" style="text-align: center;">
                            <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="assets/images/aothun2.jpg"style="width: 250px; " ";> </a>             
                            <p><b>Áo Weeater trơn  </b></p>
                            <ul class="nav" style="color: #525456;">
                                <li>Nam</li>
                                <li class="nav-item px-5"><li class="nav-item px-3">Size s-Freesize</li> </li>
                            </ul>
                            <ul class="nav py-2">
                              <li>Giá:</li>
                              <li class="nav-item px-5"><li class="nav-item px-4"style="color:blue; font-family: 'Franklin Gothic Medium';">390.000đ</li></li>
                            </ul>
                            <div class="d-flex justify-content-between"style="margin-top: 10px;">
                              <a href="product_detail.html"><button type="button" class="btn btn-success">Chi tiết</button></a>
                              <button type="button" class="btn btn-success">Thêm vào giỏ</button>
                            </div>
                        </li>

                        <li class="nav-item p-4" style="text-align: center;">
                            <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="assets/images/aothun2.jpg"style="width: 250px; " ";> </a>             
                            <p><b>Áo Weeater trơn  </b></p>
                            <ul class="nav" style="color: #525456;">
                                <li>Nam</li>
                                <li class="nav-item px-5"><li class="nav-item px-3">Size s-Freesize</li> </li>
                            </ul>
                            <ul class="nav py-2">
                              <li>Giá:</li>
                              <li class="nav-item px-5"><li class="nav-item px-4"style="color:blue; font-family: 'Franklin Gothic Medium';">390.000đ</li></li>
                            </ul>
                            <div class="d-flex justify-content-between"style="margin-top: 10px;">
                              <a href="product_detail.html"><button type="button" class="btn btn-success">Chi tiết</button></a>
                              <button type="button" class="btn btn-success">Thêm vào giỏ</button>
                            </div>
                        </li>
                        <li class="nav-item p-4" style="text-align: center;">
                            <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="assets/images/aothun2.jpg"style="width: 250px; " ";> </a>             
                            <p><b>Áo Weeater trơn  </b></p>
                            <ul class="nav" style="color: #525456;">
                                <li>Nam</li>
                                <li class="nav-item px-5"><li class="nav-item px-3">Size s-Freesize</li> </li>
                            </ul>
                            <ul class="nav py-2">
                              <li>Giá:</li>
                              <li class="nav-item px-5"><li class="nav-item px-4"style="color:blue; font-family: 'Franklin Gothic Medium';">390.000đ</li></li>
                            </ul>
                            <div class="d-flex justify-content-between"style="margin-top: 10px;">
                              <a href="product_detail.html"><button type="button" class="btn btn-success">Chi tiết</button></a>
                              <button type="button" class="btn btn-success">Thêm vào giỏ</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </div>    
    
    




    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" style="color: navy;">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="product.html" style="color: navy;">1</a></li>
            <li class="page-item"><a class="page-link" href="#" style="color: navy;">2</a></li>
            <li class="page-item"><a class="page-link" href="#" style="color: navy;">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" style="color: navy;">Next</a>
            </li>
        </ul>
    </nav>





    
    @endsection

    @section('title','san pham')