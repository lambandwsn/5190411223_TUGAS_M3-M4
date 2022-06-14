<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
   <body>
       <div class="container mt-5">
        <div class="row justify-content-center">
               <div class="card" style="width: 20rem;">
               <article class="card-body">
               <a href="/register" class="float-right btn btn-outline-primary">Sign up</a>
               <h4 class="card-title mb-4 mt-1">Sign in</h4>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Your email</label>
                        <input name="email" class="form-control" placeholder="Email" type="email">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <a class="float-right" href="#">Forgot?</a>
                        <label>Your password</label>
                        <input name="password" class="form-control" placeholder="******" type="password">
                    </div> <!-- form-group// --> 
                    <div class="form-group"> 
                    <div class="checkbox">
                        <label> <input type="checkbox"> Save password </label>
                    </div> <!-- checkbox .// -->
                    </div> <!-- form-group// -->  
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                    </div> <!-- form-group// -->                                                           
                </form>
               </article>
               </div>
               </div>
       </div>
   </body>
</html>