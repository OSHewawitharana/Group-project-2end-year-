<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>
    <link rel="icon" type="image/png" href="images/logo.png" />

    <title>Login page</title>
    <link href="{{ asset('css/style.css') }}" media="all" rel="stylesheet" type="text/css" />

    
<section>
    <nav class="mango_mid navbar navbar-expand-lg navbar-light ">
      <div class="mr-auto col-sm-3 col-lg-2 col-xs-12">
           <img src="http://localhost:8000/images/logo.png" width="150px" height="50px" alt="Responsive image" class="d-inline-block align-left">
      </div>
      <ul class="mango_texthead navbar-nav mr-auto mt-0 mt-lg-1">
          <!-- <h2 style="color:#FFFFFF;  text-justify:inter-word;text-align:Center;font-weight:550;">ASPARAI<br><span style="margin-left:15px; margin-right:15px;"> REPAIR</span><span  style="margin-left:5px; margin-right:10px;">  &</span><span  style="margin-left:5px; margin-right:10px;"> MAINTENANCE<span><span  style="margin-left:5px; margin-right:10px;"> SERVICE<span></h2> -->

            <h2 class=" font-weight-bold " style="margin-right:100px; color:#FFFFFF">ASPARAI<span style="margin-left:15px; margin-right:15px; ">REPAIR & MAINTENANCE SERVICE</span></h2>
       </ul>
    </nav>
  </section>

    

    <section id="breadcrumb">
        <div class="container col-lg-12 mt-3">
            <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</a></li>

                    <ul class="navbar-nav ml-auto mt-0">
                        <li class="nav-item dropdown mangonav_tab mt-0  mr-2">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"><i class="fa fa-bell fa-fw " style="margin-top: 5px;"></i></a>
                          <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"></a>
                          </div>
                        </li>
                  
                        <li class="nav-item dropdown mangonav_tab mt-0" >
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa fa-user fa-fw mt-1"></i> 
                                      <strong style="font-weight:bold; font-size:18px;">{{ Auth::user()->fname }}(<span>{{ Auth::user()->admin }}</span>) <span class="caret"></span></strong>
                                  </a>
                  
                  
                                  <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                  
                                      <a class="dropdown-item " href="#"><i class="fa fa-user fa-fw "></i>User Profile</a>
                                      <a class="dropdown-item" href="#"><i class='fas fa-cog'></i> Settings</a>
                  
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();"><i class='fas fa-sign-out-alt'></i>
                                          {{ __('Logout') }}
                  
                                      </a>
                  
                  
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                                      
                                  </div>
                              </li>
                      </ul>
                    
            </ol>

            
           
        </div>
    </section>

    <section id="main">
        <div class="container col-lg-12">
            <div class="row">
                <div class="col-md-2">
                        <div class="list-group ">
                                <a href="index.html" class="list-group-item list-group-item-action active list-group-item-primary">
                                  Dashboard
                                </a>
                                <a href="mystatus.html" class="list-group-item list-group-item-action">My Status</a>
                                <a href="jobdetails.html" class="list-group-item list-group-item-action">Job Details</a>
                                <a href="productstatus.html" class="list-group-item list-group-item-action">Product Status</a>
                                <a href="estimations.html" class="list-group-item list-group-item-action">Estimations</a>
                              </div>

                              <div class="well">
                                  <h4 style="margin-top:20px;">Progress</h4>
                                  <div class="progress mt-3">
                                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                  </div>
                              </div>

                </div>

                <div class="col-md-10">
                        <div class="card">
                                <div class="card-header">
                                  Overview
                                </div>
                                <div class="card-body">
                                    <div class="col-md-3">
                                        <div class="well">
                                            <i class='fas fa-tasks' style='font-size:50px'></i>
                                            <h4>Tasks</h4>
                                        </div>
                                    </div>

                                    
                                </div>
                        </div>

                </div>

                


            </div>


        </div>

    </section>
            


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
