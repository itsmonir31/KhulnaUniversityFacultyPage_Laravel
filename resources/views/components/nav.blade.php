<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="{{ asset('css/nav_.css') }}">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
  integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<!-- modal -->
<div class="container_">

  <!-- <button class="show-modal open-modal">Open Modal</button> -->

  <div class="modal">
    <a class="close-modal p-2" href="#">X</a>
    <form>
      <div class="form-group login_form">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="example@ku.ac.bd">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group form-check">
        <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
      </div>
      <button type="submit" class="btn submitBtn">Submit</button> <!--btn-primary -->
    </form>

  </div>

</div>
<!-- modal end -->



<div class="navbar_">
  <div class="hamburger">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>

  <div class="na_v_div">
    <div class="dropdown_">
      <a href="{{ asset('/overview')}}" class="dropbtn">Overview
      </a>
    </div>


    <div class="dropdown_">
      <a class="dropbtn" href="{{ asset('/education') }}">Education
      </a>
    </div>


    <div class="dropdown_">
      <button class="dropbtn">Research
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown_-content">
        <a href="{{ asset('/research') }}">Researches</a>
        <a href="{{ asset('/publications') }}">Publications</a>
        <a href="{{ asset('/projects  ') }}">Projects</a>
      </div>
    </div>


    <div class="dropdown_">
      <button class="dropbtn">Experiences
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown_-content">
        <a href="{{ asset('/job')}}">Jobs</a>
        <a href="{{ asset('/training')}}">Training</a>
        <a href="{{ asset('/workshop')}}">Workshops</a>
      </div>
    </div>


    <div class="dropdown_">
      <button class="dropbtn">Courses
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown_-content">
        <a href="{{asset('/c_offered')}}">Courses Offererd</a>
        <a href="{{asset('/c_material')}}">Course Materials</a>

      </div>
    </div>



    <div class="dropdown_">
      <button class="dropbtn">Supervisions
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown_-content">
        <a href="{{asset('/s_thesis')}}">Academic Thesis</a>
        <a href="{{asset('/s_project')}}">Academic Projects</a>
      </div>
    </div>

    <div class="dropdown_">
      <a href="{{ asset('/contact') }}" class="dropbtn">Contact</a>
    </div>

    <div class="dropdown_">
      <button type="button" class="show-modal loginBtn dropbtn">Login</button>
    </div>
  </div>

</div>

<script type="text/javascript">
  var modal = $('.modal');
  $('.show-modal').click(function() {
    modal.fadeIn();
    // alert("mk");
  });

  $('.close-modal').click(function() {
    modal.fadeOut();
  });


  const currentLocation = location.href;
  const menuItem = document.querySelectorAll('a');
  const menuLength = menuItem.length;

  for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === currentLocation) {
      menuItem[i].className = "active";
    }
  }

  hamburger = document.querySelector(".hamburger");
  hamburger.onclick = function() {
    navBar = document.querySelector(".na_v_div");
    navBar.classList.toggle("active");
  };
</script>