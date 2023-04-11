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
  <div>
        <svg
          class="waves"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 24 150 28"
          preserveAspectRatio="none"
          shape-rendering="auto"
        >
          <defs>
            <path
              id="gentle-wave"
              d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"
            />
          </defs>
          <g class="parallax">

            <use
              xlink:href="#gentle-wave"
              x="100"
              y="5"
              fill="rgba(255,255,255,0.5)"
            />

            <use xlink:href="#gentle-wave" x="105" y="6" fill="#fff" />
          </g>
        </svg>
      </div>
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
