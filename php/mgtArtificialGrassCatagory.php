<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Dashboard</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" /><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/images/favicon.ico" rel="icon" type="image/ico" />
    
  </head>
  <body class='main page'>
    <!-- Navbar -->
    <div class='navbar navbar-default' id='navbar'>
      <a class='navbar-brand' href='#'>
	  <div class='logo-icon'> </div>
       <!-- <i class='icon-beer'></i>-->
        <img src="assets/images/vector-slide-grass.png" align="middle" height="42" width="42" >SmartGrass
      </a>
      <ul class='nav navbar-nav pull-right'>
        <li class='dropdown'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-envelope'></i>
            Messages
            <span class='badge'>5</span>
            <b class='caret'></b>
          </a>
          <ul class='dropdown-menu'>
            <li>
              <a href='#'>New message</a>
            </li>
            <li>
              <a href='#'>Inbox</a>
            </li>
            <li>
              <a href='#'>Out box</a>
            </li>
            <li>
              <a href='#'>Trash</a>
            </li>
          </ul>
        </li>
        <li>
          <a href='#'>
            <i class='icon-cog'></i>
            Settings
          </a>
        </li>
        <li class='dropdown user'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-user'></i>
            <strong>Admin</strong>
            <img class="img-rounded" src="http://placehold.it/20x20/ccc/777" />
            <b class='caret'></b>
          </a>
          <ul class='dropdown-menu'>
            <li>
              <a href='#'>Edit Profile</a>
            </li>
            <li class='divider'></li>
            <li>
              <a href="/">Sign out</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div id='wrapper'>
      <!-- Sidebar -->
      <section id='sidebar'>
        <i class='icon-align-justify icon-large' id='toggle'></i>
        <ul id='dock'>
          <li class='launcher'>
            <i class='icon-home'></i>
            <a href="home.php">Home</a>
          </li>
		   <li class='active launcher dropdown hover'>
            <i class='icon-flag'></i>
            <a href='#'>Management</a>
            <ul class='dropdown-menu'>
              <li class='dropdown-header'>Management Table</li>
              <li>
                <a href='mgtArtificialGrassCatagory.php'>ตารางประเภทหญ้าเทียม </a>
              </li>
              <li>
                <a href='mgtArtificialGrass.php'>ตารางหญ้าเทียม </a>
              </li>
              <li>
                <a href='mgtGroundTexture.php'>ตารางประเภทลักษณะพื้นผิว </a>
              </li>
			  <li>
                <a href='mgtArtGrassForGrdTexture.php'>ตารางการใช้หญ้าเทียมกับประเภทลักษณะพื้นผิว </a>
              </li>
              <li>
                <a href='mgtMaterial.php'>ตารางวัสดุ </a>
              </li>
              <li>
                <a href='mgtUseMaterial.php'>ตารางการการใช้หญ้าเทียมกับวัสดุ   </a>
              </li>
			  <li>
                <a href='mgtGrassPrice.php'>ตารางราคาหญ้าเทียม  </a>
              </li>
              <li>
                <a href='mgtMaterialPrice.php'>ตารางราคาวัสดุ  </a>
              </li>
              <li>
                <a href='mgtInstallationRate.php'>ตารางค่าจ้างติดตั้ง  </a>
              </li>
			  <li>
                <a href='mgtTransport.php'>ตารางอัตราค่าขนส่ง </a>
              </li>
              <li>
                <a href='mgtWorkStatus.php'>ตารางสถานะงาน </a>
              </li>
              <li>
                <a href='mgtScheduleCategory.php'>ตารางประเภทนัดหมาย  </a>
              </li>
            </ul>
          </li>
          <li class='launcher dropdown hover'>
            <i class='icon-file-text-alt'></i>
            <a href='#'>Management</a>
            <ul class='dropdown-menu'>
              <li class='dropdown-header'>Order</li>
              <li>
                <a href='#'>คำสั่งซื้อลูกค้าแบบจ้างติดตั้ง </a>
              </li>
              <li>
                <a href='#'>คำสั่งซื้อลูกค้าแบบซื้อไปติดตั้งเอง</a>
              </li>
             
            </ul>
          </li>
          <li class='launcher'>
            <i class='icon-table'></i>
            <a href="calendar.php">calendar</a>
          </li>         
        </ul>
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
      </section>
      <!-- Tools -->
      <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
          <li class='title'>Management</li>
          <!--<li><a href="#">Lorem</a></li>
          <li class='active'><a href="#">ipsum</a></li>-->
        </ul>
        <div id='toolbar'>
          <div class='btn-group'>
            <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Building'>
              <i class='icon-building'></i>
            </a>
            <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Laptop'>
              <i class='icon-laptop'></i>
            </a>
            <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Calendar'>
              <i class='icon-calendar'></i>
              <span class='badge'>3</span>
            </a>
            <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Lemon'>
              <i class='icon-lemon'></i>
            </a>
          </div>
          <div class='label label-danger'>
            Danger
          </div>
          <div class='label label-info'>
            Info
          </div>
        </div>
      </section>
      <!-- Content -->
      <div id='content'>
        <div class='panel panel-default grid'>
          <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            ตารางประเภทหญ้าเทียม
            <div class='panel-tools'>
              <div class='btn-group'>
                <a class='btn' href='#'>
                  <i class='icon-wrench'></i>
                  Settings
                </a>
                <a class='btn' href='#'>
                  <i class='icon-filter'></i>
                  Filters
                </a>
                <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Reload'>
                  <i class='icon-refresh'></i>
                </a>
              </div>
              <div class='badge'>3 record</div>
            </div>
          </div>
          <div class='panel-body filters'>
            <div class='row'>
              <div class='col-md-9'>
                            เพิ่มข้อมูล <a href="addArtificialGrassCatagory.php"><img src="assets/images/add.png" align="middle" height="42" width="42" > </a>
              </div>
              <div class='col-md-3'>
                <div class='input-group'>
                  <input class='form-control' placeholder='Quick search...' type='text'>
                  <span class='input-group-btn'>
                    <button class='btn' type='button'>
                      <i class='icon-search'></i>
                    </button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <table class='table'>
            <thead>
              <tr>
                <th>#</th>
                <th>ชื่อประเภทหญ้าเทียม</th>
                <!--<th>Last Name</th>
                <th>Username</th>-->
                <th class='actions'>
                  Actions
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class='success'>
                <td>1</td>
                <td>จัดสวน</td>
                <!--<td>Otto</td>
                <td>@mdo</td>-->
                <td class='action'>
                 <!-- <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                    <i class='icon-zoom-in'></i>
					
                  </a>-->
                  <a class='btn btn-info' href='editArtificialGrassCatagory.php'>
                    <i class='icon-edit'></i>
                  </a>
                  <a class='btn btn-danger' href='removeArtificialGrassCatagory.php'>
                    <i class='icon-trash'></i>
                  </a>
                </td>
              </tr>
              <tr class='danger'>
                <td>2</td>
                <td>สนามกีฬา</td>
                <!--<td>Thornton</td>
                <td>@fat</td>-->
                <td class='action'>
               
                  <a class='btn btn-info' href='#'>
                    <i class='icon-edit'></i>
                  </a>
                  <a class='btn btn-danger' href='#'>
                    <i class='icon-trash'></i>
                  </a>
                </td>
              </tr>
             <!-- <tr class='warning'>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td class='action'>
                  <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                    <i class='icon-zoom-in'></i>
                  </a>
                  <a class='btn btn-info' href='#'>
                    <i class='icon-edit'></i>
                  </a>
                  <a class='btn btn-danger' href='#'>
                    <i class='icon-trash'></i>
                  </a>
                </td>
              </tr>
              <tr class='active'>
                <td>4</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td class='action'>
                  <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                    <i class='icon-zoom-in'></i>
                  </a>
                  <a class='btn btn-info' href='#'>
                    <i class='icon-edit'></i>
                  </a>
                  <a class='btn btn-danger' href='#'>
                    <i class='icon-trash'></i>
                  </a>
                </td>
              </tr>
              <tr class='disabled'>
                <td>5</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td class='action'>
                  <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                    <i class='icon-zoom-in'></i>
                  </a>
                  <a class='btn btn-info' href='#'>
                    <i class='icon-edit'></i>
                  </a>
                  <a class='btn btn-danger' href='#'>
                    <i class='icon-trash'></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td class='action'>
                  <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                    <i class='icon-zoom-in'></i>
                  </a>
                  <a class='btn btn-info' href='#'>
                    <i class='icon-edit'></i>
                  </a>
                  <a class='btn btn-danger' href='#'>
                    <i class='icon-trash'></i>
                  </a>
                </td>
              </tr>-->
             
            </tbody>
          </table>
          <div class='panel-footer'>
            <ul class='pagination pagination-sm'>
              <li>
                <a href='#'>«</a>
              </li>
              <li class='active'>
                <a href='#'>1</a>
              </li>
              <li>
                <a href='#'>2</a>
              </li>
              <li>
                <a href='#'>3</a>
              </li>
              <li>
                <a href='#'>4</a>
              </li>
              <li>
                <a href='#'>5</a>
              </li>
              <li>
                <a href='#'>6</a>
              </li>
              <li>
                <a href='#'>7</a>
              </li>
              <li>
                <a href='#'>8</a>
              </li>
              <li>
                <a href='#'>»</a>
              </li>
            </ul>
            <div class='pull-right'>
              Showing 1 to 10 of 32 entries
            </div>
          </div>
        </div>
       
        
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Javascripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script><script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script><script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
    <!-- Google Analytics -->
    <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>
