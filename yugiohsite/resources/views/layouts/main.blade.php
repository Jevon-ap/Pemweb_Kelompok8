<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>{{ $title }}</title>
  </head>
  <body>
    <div id="modal" >
      <div class="container animate">
          <div class="upper">
          <span onclick="document.getElementById('modal').style.display='none'" class="close" title="Close Modal">&times;</span>
  
          </div>
          <div class="login" class="modal-content animate">
          <form action="" method="post">
        
          <label for="uname" id="">Username</label><br>
          <input type="text" name="" id="uname" placeholder="Username">
          <br>
          <label for="pw">Password</label><br>
          <input type="text" name="" id="pw" placeholder="Password"><br>
          <input type="submit" value="Login" class="inputLogin">
      </form>
          </div>
      </div>
  </div>
  <script>
      var nod = document.getElementById('modal');
      window.onclick= function(event) {
      if (event.target == nod) {
          nod.style.display = "none";
      }
  }
  </script>
    @include('partials.navbar');
    <div class="container mt-4">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
  
</html>