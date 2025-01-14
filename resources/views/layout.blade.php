<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="icon" href="img/BGPTH.png">
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Montserrat:wght@700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/110f61632b.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/jquery.nice-number.css">
    <!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
  </head>
  <style>
    .nav-link{
      color: #fff;

    }
    .navbar-brand img{
      position: absolute;
      top:1px;
    }
    .navt{
      display: none;
    }
    @media only screen and (max-width: 990px) {
      .nav-link{
      color: #111111;
      border-bottom: 1px dotted #0cc569;

    }
    .navbar-brand img{
      position: relative;
      
    }
    .navt{
      display: inline;
    }
}
.accordion-button:active{
  background-color: #ffffffb7;
}
.accordion-button:focus{
  
  outline: 2px solid #0cc569;
}
.accordion-button:checked{
  background-color: #fcfcfcb7;
}
  </style>
  <body>
   
    <nav class="navbar navbar-expand-lg shadow-lg sticky-top"style="background-image:url('img/bgnv.jpg')">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/PASAR SEGAR.png" alt="Bootstrap" width="100" >
        </a>
      
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto py-2">
            <li class="nav-item px-3">
              <a class="nav-link  " aria-current="page" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link " href="{{ route('produk') }}">Produk</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link " href="#"><i class="bi bi-search"></i>&nbsp;&nbsp;<span class="navt">Cari</span></a>
            </li>
            <li class="nav-item px-3">
            <a class="nav-link " href="{{ route('keranjang') }}"><i class="bi bi-cart-fill"></i>&nbsp;&nbsp;<span class="navt">Keranjang</span></a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link " data-bs-toggle="offcanvas" href="#offcanvasExample"  aria-controls="offcanvasExample"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;<span class="navt">User</span></a>
            </li>
            
           
           
          </ul>
         
        </div>
      </div>
    </nav>  
@yield('container')

 

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>




<script src="js/jquery.min.js"></script>
<script src="js/jquery.nice-number.js"></script>
    <script src="owl-carousel/owl.carousel.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function($) {
      $("#owl-example").owlCarousel({
        items : 4,
    itemsCustom : false,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : false,
 
    //Basic Speeds
    slideSpeed : 200,
    paginationSpeed : 800,
    rewindSpeed : 1000,
 
    //Autoplay
    autoPlay : false,
    stopOnHover : false,
 
    // Navigation
    navigation : false,
    navigationText : ["prev","next"],
    rewindNav : true,
    scrollPerPage : false,
 
    //Pagination
    pagination : true,
    paginationNumbers: false,
 
    // Responsive 
    responsive: true,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
 
    // CSS Styles
    baseClass : "owl-carousel",
    theme : "owl-theme",
 
    //Lazy load
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",
 
    //Auto height
    autoHeight : false,
 
    //JSON 
    jsonPath : false, 
    jsonSuccess : false,
 
    //Mouse Events
    dragBeforeAnimFinish : true,
    mouseDrag : true,
    touchDrag : true,
 
    //Transitions
    transitionStyle : false,
 
    // Other
    addClassActive : false,
 
   
 

      });
      $('input[type="number"]').niceNumber();
    });

  </script>
  
</body>
</html>