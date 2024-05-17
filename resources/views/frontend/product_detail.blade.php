@extends('layouts.site')
@section('content')






    <div class="container"style="padding: 100px;">

        <div class="row">

            <div class="col-md-6 product-image" style="text-align: center ">
                <h1>
                    Sản phẩm
                </h1>
                <a href="product_detail.html" title="Chi tiết sản phẩm">
                    <img src="{{ asset('assets/images/ao thun.jpg') }}" alt="Áo thun" style="width: 350px;">
                </a>
            </div>
            <div class="col-md-6 product-info py-5">
                <p style="margin-bottom: 20px;"><b>Áo Sweater trơn</b></p>
                <div id="rating" style="margin-bottom: 20px;">
                    <span class="star" onclick="rate(1)">&#9733;</span>
                    <span class="star" onclick="rate(2)">&#9733;</span>
                    <span class="star" onclick="rate(3)">&#9733;</span>
                    <span class="star" onclick="rate(4)">&#9733;</span>
                    <span class="star" onclick="rate(5)">&#9733;</span>
                </div>
                <p style="margin-bottom: 20px;"><b>Form Regular</b></p>
                <ul class="nav" style="color: #525456; margin-bottom: 20px;">
                    <li>Nam</li>
                    <li class="nav-item px-3">Size s-xxl-Freesize</li>
                </ul>
                <ul class="nav py-2 price" style="margin-bottom: 20px;">
                    <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        390.000đ
                    </li>
                    <li class="nav-item px-2"><del>650.000đ</del></li>
                    <i class="fa-solid fa-tag px-3" style="color: red;">
                        <i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-30</i>
                        <i class="fa-solid fa-percent"></i>
                    </i>
                </ul>
                <div class="quantity-control" style="margin-bottom: 20px;">
                    <button onclick="decrement()">-</button>
                    Số lượng: <span id="starCount">0</span>
                    <button onclick="increment()">+</button>
                </div>
                <div class="d-flex justify-content-between" style="margin-top: 10px;">
                    <button type="button" class="btn btn-success">Thêm vào giỏ</button>
                </div>
            </div>
            
        </div>
    </div>

    <script>
        var starCount = 0;

        function updateStarCount() {
            document.getElementById("starCount").innerText = starCount;
        }

        function increment() {
            if (starCount < 100) {
                starCount++;
                updateStarCount();
            }
        }

        function decrement() {
            if (starCount > 0) {
                starCount--;
                updateStarCount();
            }
        }

        function rate(stars) {
            alert("You rated this product " + stars + " stars.");
        }
    </script>






@endsection

@section('title','chi tiet san pham')