@extends('main')

@section('stylesheets')
   <link rel="stylesheet" type="text/css" href="styles.css">

@section('title', '| Homepage')

@section('content')
        <div class="row">
             <div class="col-md-12">
                  <div class="jumbotron">
                        <h1>Welcome to my blog!</h1>
                        <p class="lead">Thank you so much for visiting. This is my website built with laravel. Please feel free to read my popular post!</p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                  </div>
             </div>
        </div>

    <div class="row">
       <div class="col-md-8">
           <div class="post">>

                <h3>Post Title</h3                <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADISPOISING ELIT.</p>
                <a href="#" class="btn btn-primary">Read More</a>
           </div> 

           <hr>  
           
           <div class="post">
                <h3>Post Title</h3>
                <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADISPOISING ELIT.</p>
                <a href="#" class="btn btn-primary">Read More</a>
           </div>

           <hr>

           <div class="post">
                <h3>Post Title</h3>
                <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADISPOISING ELIT.</p>
                <a href="#" class="btn btn-primary">Read More</a>
           </div>

           <hr>

           <div class="post">
                <h3>Post Title</h3>
                <p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADISPOISING ELIT.</p>
                <a href="#" class="btn btn-primary">Read More</a>
           </div>  
       </div>

       <div class="col-md-3 col-md-offset-1" style="color: red">
           <h2>Sidebar</h2>
       </div>
    </div>

    @endsection

    @section('scripts')
       <script type="js/scripts.js"></script>

    @endsection    


     