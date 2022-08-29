@extends('admin.layout')
@section('content')

<!--Left Sidbar Start-->
<div class="container float-end">
            <div class="row ms-5">
                <div class="col-lg-2 bg-dark min-vh-100 fixed-bottom">
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
                    <b><p class="mt-5 ms-5 fs-3 d-flex justify-content-between">Home <i class="fa-solid fa-envelope-circle-check "></i></p></b>
                    <hr class="ms-5">
                </div> 
            </div>
        </div>
    </div>  
<!--End Left Sitbar-->





<!--Start Footer-->
@include('include.footer')
<!--End Footer-->
@endsection