<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bg1 {
            text-align: center;
            height: 110px;
        }

        .bg2 {
            background: #f9fbe7;
        }

        .bg3 {
            color: darkgreen;
            text-align: center;
            margin: 10px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="bg2">
            <div class="bg1">
                <div class="bg3">
                    <h1>Minii Bis Hours</h1>
                    
                </div>
            </div>
        </div>
    </div>
    <!--1-->
    <h2 style="margin-left: 10%; margin-top: 10px; font-size: 25px;">เมนูอาหารแนะนำ</h2>
    <div class="container-fluid">
        <div class="row" style=" margin-right: 10px; margin-right: 10px; margin-top: 5px; ">
            <div class="col-4 " style="margin-top: 15px; ">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                        <li data-target="#demo" data-slide-to="4"></li>
                        <li data-target="#demo" data-slide-to="5"></li>
                    </ul>

                    <div class="carousel-inner" style="border-radius: 1px">
                        <div class="carousel-item active">
                            <img src="http://1.bp.blogspot.com/-dwe8L71aWkU/VF01MmD9eQI/AAAAAAAAGJk/w0U8dtAqCR8/s1600/kaeng_lueng.jpg"
                                alt="" width="500" height="300" style="filter: brightness(50%);">
                            <div class="carousel-caption" style=" color: white; ">
                                <h3>แกงเหลือง</h3>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="https://sites.google.com/a/web1.dara.ac.th/foodthai/_/rsrc/1431499925205/home/kaeng-tipla/%E0%B8%94%E0%B8%B2%E0%B8%A7%E0%B8%99%E0%B9%8C%E0%B9%82%E0%B8%AB%E0%B8%A5%E0%B8%94.jpg?height=239&width=320"
                                alt="" width="500" height="300" style="filter: brightness(50%);">
                            <div class="carousel-caption" style=" color: white; ">
                                <h3>แกงไตปลา</h3>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="https://clib.psu.ac.th/southerninfo/storages/pictures/Food/%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%A7%E0%B8%A2%E0%B8%B316.jpg"
                                alt="" width="500" height="300" style="filter: brightness(50%);">
                            <div class="carousel-caption" style=" color: white; ">
                                <h3>ข้าวยำ</h3>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="https://www.tvpoolonline.com/wp-content/uploads/2018/05/68563853-1024x683.jpg"
                                alt="" width="500" height="300" style="filter: brightness(50%);">
                            <div class="carousel-caption" style=" color: white; ">
                                <h3>คั่วกลิ้ง</h3>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <img src="https://sou-dai.com/wp-content/uploads/2021/10/pjux90aolw7cjoW8Exs-o.jpg"
                                alt="" width="500" height="300" style="filter: brightness(50%);">
                            <div class="carousel-caption" style=" color: white; ">
                                <h3>ขนมจีนน้ำยาใต้</h3>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="https://lisergia.org/wp-content/uploads/2020/07/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%97%E0%B8%B5%E0%B9%88-3-10.jpg"
                                alt="" width="500" height="300" style="filter: brightness(50%);">
                            <div class="carousel-caption" style=" color: white; ">
                                <h3>ผักเหลียงผัดไข่</h3>
                            </div>
                        </div>

                        <a class="carousel-control-prev " href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!--2-->
            <h2 style="margin-left: 10%; margin-top: 10px; font-size: 25px;">เมนูเครื่องดื่มแนะนำ</h2>
            <div class="container-fluid">
                <div class="row" style=" margin-right: 10px; margin-right: 10px; margin-top: 5px; ">
                    <div class="col-4 " style="margin-top: 15px; ">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                                <li data-target="#demo" data-slide-to="3"></li>
                                <li data-target="#demo" data-slide-to="4"></li>
                                <li data-target="#demo" data-slide-to="5"></li>
                            </ul>
        
                            <div class="carousel-inner" style="border-radius: 1px">
                                <div class="carousel-item active">
                                    <img src=""
                                        alt="" width="500" height="300" style="filter: brightness(50%);">
                                    <div class="carousel-caption" style=" color: white; ">
                                        <h3></h3>
                                    </div>
                                </div>
        
                                <div class="carousel-item">
                                    <img src=""
                                        alt="" width="500" height="300" style="filter: brightness(50%);">
                                    <div class="carousel-caption" style=" color: white; ">
                                        <h3></h3>
                                    </div>
                                </div>
        
                                <div class="carousel-item">
                                    <img src=""
                                        alt="" width="500" height="300" style="filter: brightness(50%);">
                                    <div class="carousel-caption" style=" color: white; ">
                                        <h3></h3>
                                    </div>
                                </div>
        
                                <div class="carousel-item">
                                    <img src=""
                                        alt="" width="500" height="300" style="filter: brightness(50%);">
                                    <div class="carousel-caption" style=" color: white; ">
                                        <h3></h3>
                                    </div>
                                </div>
                                
                                <div class="carousel-item">
                                    <img src=""
                                        alt="" width="500" height="300" style="filter: brightness(50%);">
                                    <div class="carousel-caption" style=" color: white; ">
                                        <h3></h3>
                                    </div>
                                </div>
        
                                <div class="carousel-item">
                                    <img src=""
                                        alt="" width="500" height="300" style="filter: brightness(50%);">
                                    <div class="carousel-caption" style=" color: white; ">
                                        <h3></h3>
                                    </div>
                                </div>
        
                                <a class="carousel-control-prev " href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                    </div>        
</body>

</html>
