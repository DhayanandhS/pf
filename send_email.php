<?php
echo "<pre>";


    print_r($_POST);


echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GetInTouch</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pirata+One&family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <nav>
      <div class="logo-container">
        <a href="index.html"
          ><img src="./images/bird-32px.png" alt="bird-image"
        /></a>
      </div>
      <ul class="javacall">
        <li><a href="resume.html">resume</a></li>
        <li><a class="getintouch" href="getintouch.html">get In touch</a></li>
      </ul>
      <div class="menubar-container">
        <div class="menu-line"></div>
        <div class="menu-line"></div>
        <div class="menu-line"></div>
      </div>
    </nav>
    <div class="form-container">
      <img src="./images/asteroid.png" alt="asteroid-img" />
      <form class="form" action="send_email.php" method="post">
        <label for="email">Email:</label><br />
        <input
          class="email-input"
          type="email"
          id="email"
          name="email"
          required
        /><br />
        <label for="message">Message:</label><br />
        <textarea
          id="message"
          name="message"
          rows="4"
          cols="38"
          required
        ></textarea
        ><br />
        <input class="input-submit" type="submit" value="Submit" />
      </form>
    </div>
    <div style="margin-top: 250px" class="div7">
      <a
        class="footer-link"
        href="https://www.linkedin.com/in/dhayanandh-s-28a387224/"
        ><i class="fa-brands fa-linkedin-in" style="color: #ffffff"></i
      ></a>
      <a class="footer-link" href="https://twitter.com/dhayanandh2003"
        ><i class="fa-brands fa-twitter" style="color: #ffffff"></i
      ></a>
      <a class="footer-link" href="https://www.instagram.com/dhayanandh2003/"
        ><i class="fa-brands fa-instagram" style="color: #ffffff"></i
      ></a>
      <!--
        <a class="footer-link" href="https://www.linkedin.com/"
          ><i class="fa-brands fa-linkedin"></i
        ></a>
        <a class="footer-link" href="https://twitter.com/dhayanandh2003"
          ><i class="fa-brands fa-twitter"></i
        ></a>
        -->
    </div>
    <div class="div8">
      <p>© 2024 Dhayanandh</p>
    </div>
  </body>
  <script>
    const menu = document.querySelector('.menubar-container');
    const menuList = document.querySelector('nav ul');
    menu.addEventListener('click', () => {
      menuList.classList.toggle('showmenu');
    });
  </script>
</html>
