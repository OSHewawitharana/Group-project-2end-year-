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
    <link rel="stylesheet" href="{{asset('css/techstyle.css')}}">

    <section>
        <nav class="mango_mid navbar navbar-expand-lg navbar-light ">
          <div class="mr-auto col-sm-3 col-lg-2 col-xs-12">
               <img src="http://localhost:8000/images/logo.png" width="205px" height="70px" alt="Responsive image" class="d-inline-block align-left">
          </div>
          <ul class="mango_texthead navbar-nav mr-auto mt-0 mt-lg-1">
              <!-- <h2 style="color:#FFFFFF;  text-justify:inter-word;text-align:Center;font-weight:550;">ASPARAI<br><span style="margin-left:15px; margin-right:15px;"> REPAIR</span><span  style="margin-left:5px; margin-right:10px;">  &</span><span  style="margin-left:5px; margin-right:10px;"> MAINTENANCE<span><span  style="margin-left:5px; margin-right:10px;"> SERVICE<span></h2> -->
    
                <h2 class=" font-weight-bold " style="margin-right:100px; color:#FFFFFF">ASPARAI<span style="margin-left:15px; margin-right:15px; ">REPAIR & MAINTENANCE SERVICE</span></h2>
           </ul>
        </nav>
      </section>

      <section>
            <nav class="mango_bottom navbar navbar-expand-lg navbar-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#"></a>
            <ul class="navbar-nav mt-0">
              <li class="mangonav_tab nav-item active ml-0   col-auto mr-auto">
                <a class="nav-link text-left" href="{{url('employreg')}}">Job Details<span class="sr-only">(current)</span></a>
              </li>
              <li class="mangonav_tab nav-item active ml-0   col-auto mr-auto">
                <a class="nav-link text-left" href="#">Estimations</a>
              </li>
        
              <li class="mangonav_tab nav-item active ml-0  col-auto mr-auto">
                <a class="nav-link text-left" href="#">My Status</a>
              </li>
        
        
              <li class="mangonav_tab nav-item active ml-0  col-auto mr-auto">
                <a class="nav-link text-left" href="#">Product Status</a>
              </li>
        
        
            </ul>
            <ul class="navbar-nav ml-auto mt-0">
              
                    <li class="navbar-nav ml-auto mt-0">
                            <li class="nav-item dropdown mangonav_tab mt-0  mr-0">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"><i class="fa fa-bell fa-fw  " style="margin-top: 5px;"></i></a>
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
                                </li>
                        
    
            </ul>
            </div>
            </nav>
          </section>

          <br>

<body>
    <div class="wrapper container">
          <div class="row ">
                <div class="col-sm-3">
                  <div class="card mt-2">
                    <div class="card-body">
                      <h5 class="card-title" style='font-size:52px'>Tasks</h5>
                      <i class='fas fa-tasks align:right' style='font-size:60px'></i>
                      <br>
                      <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card mt-2">
                    <div class="card-body">
                      <h5 class="card-title " style='font-size:27px'>Make Estimations</h5>
                      <i class="fa fa-calculator" style="font-size:60px"></i>
                      <br>
                      <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                        <div class="card mt-2">
                          <div class="card-body">
                            <h5 class="card-title">My Status</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-3 ">
                            <div class="card mt-2">
                              <div class="card-body">
                                <h5 class="card-title">Product Status</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">View Details</a>
                              </div>
                            </div>
                          </div>
              </div>
        

    

    
            
       
            </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
