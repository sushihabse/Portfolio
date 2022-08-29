@extends('admin.layout')
@section('content')


<!--Left Sidbar Start-->
     <div class="container float-end">
          <div class="row">
               <div class="col-lg-2 bg-dark min-vh-100 fixed-bottom float-end">
                    <img src="images\sushihabse.jpg" class="rounded-circle d-flex w-100 mt-3">
                    <ul class="text-light mt-5">
                         <ol><a href="{{route('admin.home')}}" class="text-decoration-none text-light"><i class="fa-solid fa-house-user me-2 mt-4"></i>Home</a></ol>
                         <ol><a href="{{route('admin.about')}}" class="text-decoration-none text-light"><i class="fa-solid fa-user me-2 mt-4"></i>About Me</a></ol>
                         <ol><a href="{{route('admin.resume')}}" class="text-decoration-none text-light"><i class="fa-solid fa-briefcase me-2 mt-4"></i>Resume</a></ol>
                         <ol><a href="{{route('admin.portfolio')}}" class="text-decoration-none text-light"><i class="fa-solid fa-user-graduate me-2 mt-4"></i>Portfolio</a></ol>
                         <ol><a href="{{route('admin.contactForm')}}" class="text-decoration-none text-light"><i class="fa-solid fa-address-card me-2 mt-4"></i>Contact</a></ol>
                         <ol> <footer class="text-light ms-5 fixed-bottom mb-5"><a href="https://www.facebook.com/shihab3223" class="text-light"><i class="fa-brands fa-facebook"></i></a>  <a href="https://www.linkedin.com/in/sahab-uddin-7aa7791b2/" class="text-light"><i class="fa-brands fa-linkedin-in"></i></a>  <a href="https://github.com/sushihabse" class="text-light"><i class="fa-brands fa-github"></i></a> <a href="https://twitter.com/sahabuddin3223" class="text-light"><i class="fa-brands fa-twitter"></i></a> <a href="https://www.youtube.com/channel/UC1N4IOidIu5SuBAWPdGXO_Q" class="text-light"><i class="fa-brands fa-youtube"></i></a> <a href="https://www.instagram.com/" class="text-light"><i class="fa-brands fa-instagram"></i></a></footer></ol>
                    </ul>
               </div>
               <div class="col-lg-10 text-light text-dark ms-5">
                    <b><p class="mt-5 ms-5 fs-3 d-flex justify-content-between"> Contact Me <i class="fa-solid fa-envelope-circle-check "></i></p></b>
                    <hr class="ms-5">
               </div>
          </div>
     </div>
     
<!--End Left Sitbar-->

<!--End Left Sitbar-->

     <div class="container float-end">
          <div class="row">
               <h4 class="text-center">Let's Talk</h4>
                    <form action="#">
                         <div class="row p-5 justify-content-center">
                              <div class="col-5">
                                   <label for="name" class="mb-2">Name</label>
                                   <input type="text" class="form-control" id="name" placeholder="Full Name" aria-label="First name">
                              </div>
                              <div class="col-5">
                                   <label for="email" class="mb-2">Email</label>
                                   <input type="text" class="form-control" id="email" placeholder="Email" aria-label="Last name">
                              </div>
                              <div class="col-10">
                                   <label for="email" class="mb-2"></label>
                                   <textarea type="areatext" class="form-control" id="email" rows="5" placeholder="How can I help you type here" aria-label="Last name"></textarea>
                              </div>
                              <div class="col-3">
                                   <label for="email" class="mb-2 text-info"></label>
                                   <input type="submit" class="form-control text-center text-primary" id="email" value="Send Message" aria-label="Last name">
                              </div>
                         </div>
                    </form>
          </div>
     </div>


<!--Start Footer-->
@include('include.footer')
<!--End Footer-->  

@endsection