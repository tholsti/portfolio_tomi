
<!DOCTYPE html>

<?php

require "DBBlackbox.php";

session_start();

$msg = [
    "name" => null,
    "email" => null,
    "msg" => null,
];

if ($_POST) {
    $msg["name"] = $_POST["name"];
    $msg["email"] = $_POST["email"];
    $msg["msg"] = $_POST["msg"];

    $message = insert($msg);
    header("Location: index.php#contact");
}

$messages = [];

if (!empty($_SESSION['flashed_messages'])) {
    $messages = $_SESSION['flashed_messages'];
    unset($_SESSION['flashed_messages']);
}

?>


<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="index.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
  <link rel="stylesheet" href="animate.css">
</head>

<body>
  <div class="container">
    <nav>
      <div class="logo"><img src="img/logo.svg" width="32px" alt="logo"></div>
      <div class="nav"><a href="#intro-upper">HOME</a></div>
      <div class="nav"><a href="#skills">SKILLS</a></div>
      <div class="nav"><a href="#portfolio">PORTFOLIO</a></div>
      <div class="nav"><a href="#about-me">ABOUT ME</a></div>
      <div class="nav"><a href="#contact">CONTACT</a></div>
    </nav>

    <header>
      <h1>Ahoj, this is Tomi.</h1>
      <div id="headline" class="h1-underline"> </div>
    </header>

    <section class="intro-upper">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis
        ac
        neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique,
        tortor
        mauris molestie elit, et lacinia ipsum quam nec dui.</p>
    </section>

    <section id="intro-upper" class="intro-panel">
      <div class="intro-half">
        <div class="wisdom wisdom wow bounceIn">
          <div class="bubble"> </div>
          <h2>DAMN.</h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eius, quasi suscipit labore incidunt
          nihil.
        </div>
        <div class="wisdom wow bounceIn">
          <div class="bubble bubble2"> </div>
          <h2>FEAR.</h2>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, accusantium quisquam.
        </div>
      </div>
      <div class="intro-half">
        <div class="wisdom  wow bounceIn">
          <div class="bubble bubble3"> </div>
          <h2>HUMBLE.</h2>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ab consequatur odit iure voluptates
          laboriosam itaque eius
          nesciunt officia non.
        </div>
        <div class="wisdom  wow bounceIn">
          <div class="bubble bubble4"> </div>
          <h2>ELEMENT.</h2>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam fuga cumque eos itaque repellat. Ut vel odit,
          natus ab culpa
          doloribus inventore harum voluptas? Dignissimos.
        </div>
      </div>
    </section>

    <section id="skills" class="skills">
      <h2>My skills</h2>

      <div class="skill">
        <div class="skill-name">
          HTML5
        </div>

        <div class="skill-bar">
          <div class="knob wow growBar" style="width:100%"> </div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-name">
          CSS3 / SASS
        </div>
        <div class="skill-bar">
          <div class="knob wow growBar" style="width:75%"></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-name">
          JAVASCRIPT
        </div>
        <div class="skill-bar">
          <div class="knob wow growBar" style="width:60%"></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-name">
          REACT.JS
        </div>
        <div class="skill-bar">
          <div class="knob wow growBar" style="width:1%"></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-name">
          PHP
        </div>
        <div class="skill-bar">
          <div class="knob wow growBar" style="width:50%"></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-name">
          MYSQL
        </div>
        <div class="skill-bar">
          <div class="knob wow growBar" style="width:40%"></div>
        </div>
      </div>
    </section>

    <section id="portfolio" class="portfolio">
      <h2>
        Portfolio
      </h2>
      <div class="portfolio-panel">
        <div class="project">
          <img src="img/Doge3.jpg" alt="Project 1">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque placeat quas omnis sapiente earum
            doloremque voluptatem ex autem quia labore reiciendis, ducimus similique facere quaerat, saepe repudiandae
            tempore, incidunt hic minus? Laboriosam a excepturi hic.</p>
        </div>
        <div class="project">
          <img src="img/Doge3.jpg" alt="Project 2">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, tenetur quasi dolorem pariatur debitis
            voluptatum deleniti illo non repellendus iste repellat dolore totam natus iusto, asperiores assumenda,
            consequuntur rem harum ea dolorum facilis. Repellendus illo delectus animi impedit ipsa dolore rem a
            tempora, porro maiores error corrupti temporibus in neque.</p>
        </div>
      </div>
      <div class="portfolio-panel">
        <div class="project">
          <img src="img/Doge3.jpg" alt="Project 3">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores nostrum eaque corrupti recusandae cum
            ipsam odio debitis harum vel libero, et quibusdam necessitatibus numquam amet?</p>
        </div>

        <div class="project">
          <img src="img/Doge3.jpg" alt="Project 4">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, quam. Officiis voluptates, saepe,
            sint quas tenetur quod dolores nostrum explicabo quasi numquam necessitatibus asperiores repellat, magni
            voluptate atque excepturi mollitia vitae? Sapiente, maiores vel.</p>
        </div>
      </div>
    </section>

    <section id="about-me" class="about">
      <h2>About me</h2>
      <div class="about-panel">

        <div class="about-item">
          <img src="img/doge2.jpg" alt="me">
        </div>
        <div class="about-item about-text">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam veritatis, tempore magni sunt officia
            in explicabo numquam perspiciatis at eum minus porro ducimus id nemo aperiam fugit, ratione excepturi ab
            odit enim possimus! Repellat, libero beatae? Magnam, dolorem reiciendis, magni consequatur sunt assumenda
            et dignissimos suscipit nesciunt distinctio totam fugiat!</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, quo inventore rerum temporibus sapiente
            quas voluptate in sed ea natus, dolor totam repellendus quidem ducimus libero iste explicabo facere. Iste
            eius sint provident molestias a earum magnam omnis sapiente iure. Consequatur omnis aliquam ducimus
            eligendi architecto minus repellendus, quod veritatis.</p>
        </div>

    </section>

    <section id="find-me" class="find-me">
      <h2>
        Find me
      </h2>
      <div class="icons wow tada">
        <a href="#"><i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fab fa-github-square"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
      </div>
    </section>

    <section id="contact" class="contact">
      <h2>
        Contact me
      </h2>

      <form action="" method="post">
        <?php

        if ($_POST) {
            $messages[] = '
            <div class="sent">
            Thank you for your contact! I will get back to you as soon as possible.
            </div>
            ';
            $_SESSION['flashed_messages'] = $messages;
        }
        ?>

        <?php foreach ($messages as $sent): ?>
          <div>
              <?php echo $sent; ?>
          </div>
        <?php endforeach;?>

        <div class="row">
          <input type="text" class="form-control form-control-lg" placeholder="Name" name="name">
          <input type="text" class=" form-control form-control-lg" placeholder="Email address" name ="email">
        </div>
        <div class="row">
          <textarea name="msg" id="" cols="30" rows="10" placeholder="Leave me a note!"></textarea>
        </div>
        <div class="row">
          <input id="submit" type="submit" value="Submit">
        </div>
      </form>
    </section>

    <footer>
      <div class="line-head">
        <div class="line wow bounceInLeft"></div>
        <h2>Nice to meet you</h2>
        <div class="line wow bounceInRight"></div>
      </div>
      Copyright Tomi Holstila 2018

    </footer>
  </div>
  <script src="wow.min.js"></script>
  <script src="main.js"></script>
</body>

</html>