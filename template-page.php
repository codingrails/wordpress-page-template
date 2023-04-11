<?php
/*
Template Name: My Custom Page Template
*/
get_header();
?>

<header class="site-header">
  <div class="logo">
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full', false, array( 'class' => 'custom-logo' ) ); ?>
    </a>
  </div>

  <nav class="site-navigation">
    <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'primary-menu',
        'container'      => false,
      ) );
    ?>
    <div class="call-to-action"><b>CAll NOW FOR A CONSULT</b> <b class="phonenumber">203.364.4362</b></div>
    
  </nav>
  <button class="button" id="site-header-button"><div></div>
<div></div>
<div></div></button>
<nav class="mobile-navigation" id="mobilenav">
    <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'primary-menu',
        'container'      => false,
      ) );
    ?>
    
    
  </nav>
</header>
<div class="main">
<div class="mainsection">
    <div class="maincontent">
 <h1 class="the_title"> <?php the_title(); ?></h1>
 <div class="the_content">
  <?php the_content(); ?>
  </div>
  </div>
  <div class="maincontact">
      <form action="/action_page.php" class="formcontactus">
  <span class="title"><b>Contact Us</b></span>
<div class="input-block">
      <input type="text" name="first-name" id="first-name" class="first-name" required spellcheck="false">
      <span class="placeholder">
        First Name
      </span>
    </div>

<div class="input-block">
      <input type="text" name="last-name" id="last-name" class="last-name" required spellcheck="false">
      <span class="placeholder">
        Last Name
      </span>
    </div>

<div class="input-block">
      <input type="Email" name="email" id="email" class="email" required spellcheck="false">
      <span class="placeholder">
        Business Email
      </span>
    </div>

<div class="input-block">
      <input type="text" name="company" id="company" class="company" required spellcheck="false">
      <span class="placeholder">
        Company
      </span>
    </div>

    <select id="country" name="country" class="country">
  <option value="default">Country</option>
  <option value="India">India</option>
  <option value="Nepal">Nepal</option>
  <option value="Bhutan">Bhutan</option>
</select>

<input type="submit" value="Send Message" class="submit">
</form>
  </div>




  </div>
  <svg id="visual" viewBox="0 0 5000 1000" width="5000" height="1000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><path class="opacity" d="M0 850L119 851.7C238 853.3 476 856.7 714.2 866.8C952.3 877 1190.7 894 1428.8 893.2C1667 892.3 1905 873.7 2143 873.8C2381 874 2619 893 2857 898.5C3095 904 3333 896 3571.2 894.5C3809.3 893 4047.7 898 4285.8 895.8C4524 893.7 4762 884.3 4881 879.7L5000 875L5000 1001L4881 1001C4762 1001 4524 1001 4285.8 1001C4047.7 1001 3809.3 1001 3571.2 1001C3333 1001 3095 1001 2857 1001C2619 1001 2381 1001 2143 1001C1905 1001 1667 1001 1428.8 1001C1190.7 1001 952.3 1001 714.2 1001C476 1001 238 1001 119 1001L0 1001Z" fill="#FFFFF7"></path><path d="M0 895L119 898.8C238 902.7 476 910.3 714.2 922.5C952.3 934.7 1190.7 951.3 1428.8 947.2C1667 943 1905 918 2143 911.2C2381 904.3 2619 915.7 2857 919.7C3095 923.7 3333 920.3 3571.2 921.8C3809.3 923.3 4047.7 929.7 4285.8 926.5C4524 923.3 4762 910.7 4881 904.3L5000 898L5000 1001L4881 1001C4762 1001 4524 1001 4285.8 1001C4047.7 1001 3809.3 1001 3571.2 1001C3333 1001 3095 1001 2857 1001C2619 1001 2381 1001 2143 1001C1905 1001 1667 1001 1428.8 1001C1190.7 1001 952.3 1001 714.2 1001C476 1001 238 1001 119 1001L0 1001Z" fill="#FFFFFF"></path></svg>
  <div>


<?php

?>



<script>
const button = document.getElementById("site-header-button");
const div = document.getElementById("mobilenav");

button.addEventListener("click", () => {
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
});
</script>
