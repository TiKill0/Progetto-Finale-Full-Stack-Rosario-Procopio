<?php
include_once 'header.php';
?>
<section class="signup-form-form">
  <h2> Log In</h2>
  <div class="signup-form-form">
    <form action="includes/login.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username/Email...">
      <input type="password" name="pwd" id="myInput" placeholder="Password...">
      <!-- An element to toggle between password visibility -->
      <input type="checkbox" onclick="myFunction(); myFunction2()">Show Password
      
      <button type="submit" name="submit" id="myBtn" onclick="javascript:alert('Hello!')">Log In</button>
      
    </form>
  </div>
  <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Fill in all fields!</p>";
    } else if ($_GET["error"] == "wronglogin") {
      echo "<p>Incorrect login information!</p>";
    }
  }
  ?>

<button onclick="typeWriter()">Click me</button>

<p id="demo"></p>
  <div class="containerboh">
    <iframe class="responsive-iframe" controls id="myvideo" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
     allowfullscreen src="https://www.youtube.com/embed/8N_tupPBtWQ"></iframe>
  </div>
  
  <div class="warning">
    <p><strong>Warning!</strong> This video can be addictive...</p>
  </div>
</section>
<script src="script.js"></script>

</section>
<script src="script.js"></script>