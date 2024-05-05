<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zodiac Calculator - Home</title>
  <!-- css links -->
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/modernize.css">
  <link rel="stylesheet" href="styles/utility.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/homePage.css">
  <!-- script links -->
  <script src="main.js" defer></script>
  <!-- karla font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
  <!-- inconsolata font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>
<body>
  <header class="header__container container">
    <img src="assets/images/logo.png" alt="" class="logo__png">
  </header>
  <main>
    <section class="home__page container">
      <div class="home__content">
        <div class="text__content">
          <h1>WHAT IS YOUR ZODIAC SIGN?</h1>
          <p>Know you zodiac sign by using our application</p>
        </div>
        <button class="continue__btn">CONTINUE</button>
      </div>
    </section>
    <section class="input__page container section" style="display: none;">
      <div class="upper__content">
        <h2>Know your zodiac sign</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Nunc lacinia nisl tortor, accumsan pretium metus tristique
          quis. Ut metus dolor, dictum vitae diam ut
        </p>
      </div>
      <div class="middle__content">
        <form id="form" method="POST">
            <div class="input__name">
                <div class="name__text indicator__text">Name</div>
                <input type="text" name="inputName" class="form__field">
            </div>
            <div class="input__birthdayContainer">
              <div class="birhtday__text indicator__text">Birthday</div>
              <div class="inpt__bday">
                <span id='birthday'>
                  <input type='text' name='month' id='month' placeholder="MM" maxlength='2' class='input-birthday'><span style="color: var(--clr-light);">/</span>
                  <input type='text' name='day' id='day' placeholder="DD" maxlength='2' class='input-birthday'> <span style="color: var(--clr-light);">/</span>
                  <input type='text' name='year' id='year' placeholder="YYYY" class='input-birthday' maxlength="4" >
                </span>
              </div>
            </div>
            <div class="submit__btn">
              <button type="submit" class="submit">Calculate</button>
            </div>
        </form>
      </div>
    </section>
  </main>
  <footer></footer>
  <!-- star particles -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <div id="particles-js"></div>
  <script>
    particlesJS.load("particles-js", "moving.json");
    //particlesJS.load("particles-js", "paused.json");
  </script>
</body>
</html>