<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/nav_.css') }}">
<div class="navbar_">
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
          <a href="{{ asset('/publication') }}">Publications</a>
          <a href="{{ asset('/project') }}">Projects</a>
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
          <a href="{{asset('/c_offered')}}">Courses offererd</a>
          <a href="{{asset('/c_material')}}">Course materials</a>
         
        </div>
      </div>
      <div class="dropdown_">
          <a href="{{ asset('/contact') }}" class="dropbtn">Contact</a>
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

      <div class="dropdown_ ">
            <a href="{{ asset('/contact') }}" class="dropbtn flt_right">Login</a>
      </div>
</div>