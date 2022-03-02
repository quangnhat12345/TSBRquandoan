<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<!DOCTYPE html>
<html>
    <head>
        <title>Layout 1</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        
        <div id="menu_top">
            <ul>
                <li><a href="#" title="Trang chủ" class="active" >Trang Chủ</a></li>
                <li><a href="#" title="Giới Thiệu">Giới Thiệu</a></li>
                <li><a href="logout.php">logout</a>
            </ul>
            </div>

        <div id="banner">
            <img src="imges/banner.png" />
        </div>

        <div id="main">
            <div id="left">
                 <ul>
                    <li>
                        <img width="100px" src="imges/news.jpg" />
                        <a href="#" title="Donald Trump tặng Quân Đoàn TSBR 2,000,000 tỷ VNĐ vì cống hiến cho làng game Free Fire"><h3>Donald Trump tặng Quân Đoàn TSBR 2,000,000 tỷ VNĐ vì cống hiến cho làng game Free Fire</h3></a>
                    </li>
                    <li>
                        <img width="100px" src="imges/R.jpg" />
                        <h3>Tổng thống nga vinh dự đoán tiếp Quân Đoàn TSBR từ Việt Nam đi qua nga</h3>
                    </li>
                    <li>
                        <img width="100px" src="imges/R.jpg" />
                        <h3>Tổng thống nga vinh dự đoán tiếp Quân Đoàn TSBR từ Việt Nam đi qua nga</h3>
                    </li>
                    <li>
                        <img width="100px" src="imges/R.jpg" />
                        <h3>Tổng thống nga vinh dự đoán tiếp Quân Đoàn TSBR từ Việt Nam đi qua nga</h3>
                    </li>
                    <li>
                        <img width="100px" src="imges/R.jpg" />
                        <h3>Tổng thống nga vinh dự đoán tiếp Quân Đoàn TSBR từ Việt Nam đi qua nga</h3>
                    </li>
                    <li>
                        <img width="100px" src="imges/R.jpg" />
                        <h3>Tổng thống nga vinh dự đoán tiếp Quân Đoàn TSBR từ Việt Nam đi qua nga</h3>
                    </li>
                    <li>
                        <img width="100px" src="imges/R.jpg" />
                        <h3>Tổng thống nga vinh dự đoán tiếp Quân Đoàn TSBR từ Việt Nam đi qua nga</h3>
                    </li>
                    <li>
                        <img width="100px" src="imges/R.jpg" />
                        <h3>Tổng thống nga vinh dự đoán tiếp Quân Đoàn TSBR từ Việt Nam đi qua nga</h3>
                    </li>
                    <li>
                        <img width="100px" src="imges/R.jpg" />
                        <h3>Tổng thống nga vinh dự đoán tiếp Quân Đoàn TSBR từ Việt Nam đi qua nga</h3>
                    </li>
                    <li>
                        <img width="100px" src="imges/R.jpg" />
                        <h3>Tổng thống nga vinh dự đoán tiếp Quân Đoàn TSBR từ Việt Nam đi qua nga</h3>
                    </li>
                    <li>
                        <img width="100px" src="imges/R.jpg" />
                        <h3>Tổng thống nga vinh dự đoán tiếp Quân Đoàn TSBR từ Việt Nam đi qua nga</h3>
                    </li>
                     </ul>
                </div>
                    <div id="right">right</div>
            </div>
            <div id="footer">Footer</div>
    </body>

</html>
</body>
</html>