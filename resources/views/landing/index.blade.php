<!DOCTYPE html>
<html class="no-js">

@include('layouts.head')
@include('landing.body')
@extends('layouts.footer')

@section('add-js')
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="js/skrollr.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.localScroll.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/main.js"></script>
    <script src="contactform/contactform.js"></script>
    <script>AOS.init();  </script>

@endsection





</html>

