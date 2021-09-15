<?php
include_once 'header.php';
?>
<section class="signup-form">
  <h2> Sign Up Here:</h2>
  <div class="signup-form-form">
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="name" placeholder="Full name...">
      <input type="text" name="email" placeholder="Email...">
      <input type="text" name="uid" placeholder="Username...">
      <input type="password" name="pwd" id="myInput" placeholder="Password...">
      <input type="password" name="pwdrepeat" id="my2ndInput" placeholder="Repeat password...">
      <!-- An element to toggle between password visibility -->
      <input type="checkbox" onclick="myFunction(); myFunction2()">Show Password
      <button type="submit" name="submit" id="myBtn" onclick="javascript:alert('Welcome!')">Sign Up</button>
      
    </form>
  </div>
  <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Fill in all fields!</p>";
    } else if ($_GET["error"] == "invaliduid") {
      echo "<p>Choose a proper username!</p>";
    } else if ($_GET["error"] == "invalidemail") {
      echo "<p>Choose a proper email!</p>";
    } else if ($_GET["error"] == "passwordsdontmatch") {
      echo "<p>Passwords doesn't match!</p>";
    } else if ($_GET["error"] == "stmtfailed") {
      echo "<p>Something went wrong, try again!</p>";
    } else if ($_GET["error"] == "usernametaken") {
      echo "<p>Username already taken!</p>";
    } else if ($_GET["error"] == "none") {
      echo "<p>You have signed up!</p>";
    }
  }
  ?>

  <div class="containerboh">
    <iframe class="responsive-iframe" controls id="myvideo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
  </div>
  
  <div class="warning">
    <p><strong>Warning!</strong> This video can be addictive...</p>
  </div>
</section>
<script src="script.js"></script>

<?php
include_once 'footer.php';
?>