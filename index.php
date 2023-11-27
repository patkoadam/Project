<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 56px;
  height: 30px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 24px;
  width: 26px;
  left: 0px;
  bottom: 3px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(31px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

</head>
<body id="szin" onload="valt()">




<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a id="szi" class="navbar-brand" href="#" style="font-size: xx-large;">Online Coach</a>
    <div>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link acticve" href="#" >Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Couches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Workout</a>
        </li>

        <label class="switch">
        <input id="csusz" type="checkbox" onchange="valt()" checked>
        <span class="slider round"></span>
        </label>

      </ul>
    </div>
    </div>
  </div>
</nav>




        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>


<script>

    function valt()
    {
    if (document.getElementById("csusz").checked)
    {
        document.getElementById("szin").style.backgroundColor = "white";   
        document.getElementById("szi").style.color = "black";
    }
    else
    {
        document.getElementById("szin").style.backgroundColor = "black";
        document.getElementById("szi").style.color = "white"; 
    }
    }


</script>