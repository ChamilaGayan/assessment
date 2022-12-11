<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>

</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
       <h2>Assessment</h2>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
            
                <li class='sidebar-title'>Main Menu</li>
            
                <li class="sidebar-item active ">
                    <a href="index.php" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>
                    
                </li>
            
                <li class="sidebar-item  ">
                    <a href="form.php" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i> 
                        <span>Form</span>
                    </a>
                    
                </li>
            
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">

                    <li class="dropdown">
                    <a class="dropdown-item" href="form.php"><i data-feather="user"></i> Form</a>
                        </li>

                        <li class="dropdown nav-icon">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success mr-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Submit</h6>
                                            
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon mr-2">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                   
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Welcome!</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Form</h3>
        <p class="text-subtitle text-muted">Submit your details here</p>
    </div>
    <section class="section">
       
    <div class="col-md-10 col-12">
        <div class="card">
            <div class="card-header">
            <p id="status"></p>
            <p id="success_message"></p>
        
            </div>
            <div class="card-content">
            <div class="card-body">
            <form>
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Name</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Name" id="user">
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Email</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="email" class="form-control" placeholder="Email" id="email">
                                    <div class="form-control-icon">
                                        <i data-feather="mail"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Mobile</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="number" class="form-control" placeholder="Mobile" id="mobile">
                                    <div class="form-control-icon">
                                        <i data-feather="phone"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Password</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="password" class="form-control" placeholder="Password" id="password">
                                    <div class="form-control-icon">
                                        <i data-feather="lock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                  
                    <div class="col-12 d-flex justify-content-end ">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary mr-1 mb-1">Submit</button>

                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>








<!-- Get Data -->
<div class = "container" > 

<h3><u>View Data</u></h3>

<p><strong>Click on button to display records from database</strong></p> 

<div id="records"></div> 

<p>

    <input type="button" id = "getusers" value = "View Data" class="btn btn-primary mr-1 mb-1"/>
</p>

</div> 

    </section>
</div>
        </div>
    </div>
   
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
