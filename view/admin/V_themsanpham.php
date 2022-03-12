<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Kollector's Admin Website</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="img/x-icon" href="./view/img/logo.png">
    <link rel="stylesheet" type="text/css" href="./view/css/home.css">

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" type="text/css" href="./view/css/bootstrap.min.css">

    <!-- Animation library for notifications   -->
    <link rel="stylesheet" type="text/css" href="./view/css/animate.min.css">

    <!--  Light Bootstrap Table core CSS    -->
    <link rel="stylesheet" type="text/css" href="./view/css/light-bootstrap-dashboard.css?v=1.4.0">
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href=".view/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Damit
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="?controller=admin">
                        <i class="pe-7s-graph"></i>
                        <p>Trang chủ</p>
                    </a>
                </li>
                <li class="">
                    <a href="?controller=sanpham">
                        <i class="pe-7s-user"></i>
                        <p>Sản Phẩm</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

<!-- RIGHT -->
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Sản Phẩm</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                     <table class="table admin-sanpham">  
                            <thead>               
                                <tr>
                                    <th>Ảnh</th> 
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>                             
                                    <th>Đơn giá</th>                        
                                    <th>Tồn kho</th>
                                    <th>Đã bán</th>
                                    <th>Content</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody> 
                             
                               <tr class="admin-sp admin-suasp">
                                <form action="" method="POST">
                                   <td class="admin-sp-img"><input type="text" name="img_link"></td>
                                   <td class="admin-sp-name"><input type="text" name="name"></td>
                                   <td class="admin-sp-name"><input type="text" name="dm_name"></td>
                                   <td class="admin-sp-price"><input type="text" name="price"></td>
                                   <td class="admin-sp-tonkho"><input type="text" name="tonkho"></td>
                                   <td class="admin-sp-tonkho"><input type="text" name="daban"></td>
                                   <td class="admin-sp-content"><input type="text" name="content"></td>
                                   <td><button name="submit" class="btn btn-primary">Thêm</button></td>
                                </form>
                               </tr>
                               <tr>
                                   <td>./view/img/tênảnh.dạngảnh ./view/img/tênảnh2.dạngảnh2 VD: ./view/img/gangtay.jpg ./view/img/sabo2.png
                                    </td>
                                    <td></td>
                                    <td>1 = Mô Hình One Piece<br>
                                        2 = Mô Hình Marvel<br>
                                        3 = Đồ Chơi Công Nghệ<br>
                                    4 = Mô Hình DC</td>
                               </tr>


                            
                            </tbody>
                         </table>
                        
                    </div>
                </div>     
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.fb.com/damitnguyen">Creative Damit</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>
    <script src="./view/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="./view/assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="./view/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="./view/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="./view/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="./view/assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>Kollector's Admin Website</b>."

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>
    

</html>
