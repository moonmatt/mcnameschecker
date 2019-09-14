<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$page = $_SERVER['PHP_SELF'];
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$username = substr(str_shuffle($permitted_chars), 0, 3);
$url = "https://api.minetools.eu/uuid/" . urlencode($username);


$json = file_get_contents($url); // Loads data from an URL
// Convert JSON string to Array
$json = json_decode($json, true);
$check = $json["id"]; // Access Array data
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Minecraft Names Checker | 3-characters-long available MC names</title>
  </head>
  <body>
  <div class="jumbotron jumbotron-fluid bg-primary text-light">
  <div class="container">
    <h1 class="display-4">Minecraft names checker</h1>
    <p class="lead">This tool allows you to find 3-characters-long availables Minecraft account names.</p>
  </div>
</div>
<div class="container">
<div class="jumbotron">
<?php
if(!($check == "null")){
    echo '<div class="alert alert-warning" role="alert">
    <div class="media">
  <img src="https://crafatar.com/avatars/'.$check.'" class="mr-3" alt="The head of the player" width="64px" title="The head of the player">
  <div class="media-body">
    <h5 class="mt-0">The username is already taken!</h5>
        <p class="text-break" title="Username ID">'.$check.'</p>
  </div>
</div>
  </div>';
} else {
    echo '<div class="alert alert-success" role="success">
    <div class="media">
  <img src="https://crafatar.com/avatars/c9f7b291-3f74-4395-85c7-d9d29bab3283" class="mr-3" alt="..." width="64px">
  <div class="media-body">
    <h5 class="mt-0" data-toggle="tooltip" data-placement="right" title="Tooltip on right">The username is not taken!</h5>
    It might be able now! <a href="https://namemc.com/search?q='.$username.'" target="_blank"><span class="badge badge-secondary">Check</span></a>
  </div>
</div>
  </div>';
}
?>
<input class="form-control form-control-lg boxed text-center" type="text" value="<?php echo $username; ?>">
<br>
<button type="button" class="btn btn-primary btn-lg btn-block" onclick="return RefreshWindow();">Generate another Name!</button>
</div>
</div>






<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
    <span class="navbar-text">
      Thanks to <a href="https://crafatar.com">crafatar</a> and <a href="https://api.minetools.eu/">minetools</a>
    </span>
    </ul>
    <span class="navbar-text">
      Coded with &#10084; by <a href="https://moonmatt.cf">moonmatt</a>
    </span>
  </div>
  </div>
</nav>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>