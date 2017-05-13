<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Test</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/normalize-min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <main>
    <div class="table">
      <div class="table__row">
        <div class="table__cell">1.1</div>
        <div class="table__cell">1.2</div>
        <div class="table__cell">1.3</div>
        <div class="table__cell">1.4</div>
      </div>
      <div class="table__row">
        <div class="table__cell">2.1</div>
        <div class="table__cell">2.2</div>
        <div class="table__cell">2.3</div>
        <div class="table__cell">2.4</div>
      </div>
      <div class="table__row">
        <div class="table__cell">3.1</div>
        <div class="table__cell">3.2</div>
        <div class="table__cell">3.3</div>
        <div class="table__cell">3.4</div>
      </div>
      <div class="table__row">
        <div class="table__cell">4.1</div>
        <div class="table__cell">4.2</div>
        <div class="table__cell">4.3</div>
        <div class="table__cell">4.4</div>
      </div>
    </div>
    <div class="second-table">
      <div class="second-table__row">
        <div class="second-table__cell">1.1</div>
        <div class="second-table__cell">1.2</div>
        <div class="second-table__cell">1.3</div>
        <div class="second-table__cell">1.4</div>
      </div>
      <div class="second-table__row">
        <div class="second-table__cell">2.1</div>
        <div class="second-table__cell">2.2</div>
        <div class="second-table__cell">2.3</div>
        <div class="second-table__cell">2.4</div>
      </div>
      <div class="second-table__row">
        <div class="second-table__cell">3.1</div>
        <div class="second-table__cell">3.2</div>
        <div class="second-table__cell">3.3</div>
        <div class="second-table__cell">3.4</div>
      </div>
      <div class="second-table__row">
        <div class="second-table__cell">4.1</div>
        <div class="second-table__cell">4.2</div>
        <div class="second-table__cell">4.3</div>
        <div class="second-table__cell">4.4</div>
      </div>
    </div>
    <div class="block"></div>
    <a class="btn-top" href="#">К началу страницы</a>
    <form class="form" action="index.php" method="post">
      <input oninput="f()" type="text" name="name" placeholder="Введите ваше имя*">
      <input type="text" name="re-name" placeholder="Введите ваше имя*">
      <input type="submit"/>
    </form>
  </main>
  <script src="js/main.js" type="application/javascript"></script>
  <?php  
  $text = $_POST['name'];
  $i = 0;
  $j = 0;
  if($text) {
    preg_match("/[\d]+/", $text,$match);
    if($match[0]) {
      $i++;
      echo "в строке есть число<br>";
    }
    else {
      $j++;
      echo "в строке нет числа<br>";
    }
    echo "строка с числом встречалась $i раз<br>";
    echo "строка без числа встречалась $j раз<br>";
    // я не смог разобраться с тем почему куки у меня не работали
  }
  ?>
</body>
</html>