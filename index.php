  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="styles.css">

      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>
      <link rel="stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/themes/sunny/jquery-ui.css">
      <script>
          $(function() {

              $('#datep').datepicker();

          });
      </script>
  </head>

  <body>


      <header class="header">
          <div class="container">
              <div class="header_logo">
                  <img src='logo.png' alt='logo'>
              </div>
              <div class="menu_btn">
                  <img src="menu.svg" alt="menu">
              </div>
              <div class="header_info">
                  <div class="header_info_top-number">
                      8-800-100-5005
                  </div>
                  <div class="header_info_bottom-number">
                      +7 (3452) 522-000
                  </div>
              </div>
          </div>
      </header>

      <nav class="menu">
          <div class="container">
              <ul class="menu_list">
                  <li class="menu_list_item">
                      <a class="menu_list_item-link" href='#'>Кредитные карты</a>
                  </li>
                  <li class="menu_list_item active">
                      <a class="menu_list_item-link" href='index.php'>Вклады</a>
                  </li>
                  <li class="menu_list_item">
                      <a class="menu_list_item-link" href='#'>Дебетовая карта</a>
                  </li>
                  <li class="menu_list_item">
                      <a class="menu_list_item-link" href='#'>Страхование</a>
                  </li>
                  <li class="menu_list_item">
                      <a class="menu_list_item-link" href='#'>Друзья</a>
                  </li>
                  <li class="menu_list_item">
                      <a class="menu_list_item-link" href='#'>Интернет-банк</a>
                  </li>
              </ul>
          </div>
      </nav>

      <ol class="breadcrumb" itemscope>
          <div class="container">
              <li class='breadcrumb_item' itemprop="itemListElement" itemscope>
                  <a itemprop="item" href="index.html">
                      <span itemprop="name">Главная</span>
                  </a>
                  <meta itemprop="position" content="1" />
              </li>

              <li class='breadcrumb_item' itemprop="itemListElement" itemscope>
                  <a itemprop="item" href="index.html">
                      <span itemprop="name">Вклады</span>
                  </a>
                  <meta itemprop="position" content="2" />
              </li>

              <li class='breadcrumb_item' itemprop="itemListElement" itemscope>
                  <span itemprop="name">Калькулятор</span>
                  <meta itemprop="position" content="3" />
              </li>
          </div>
      </ol>

      <div class="calc">
          <div class="container">
              <div class="calc_wrapper">
                  <div class="calc_title">
                      Калькулятор
                  </div>
                  <ul class="calc_inputs">
                      <li class="calc_inputs_block">
                          <div class="calc_inputs_block_title">
                              Дата оформления вклада
                          </div>


                          <div class="calc_inputs_block_input">
                              <input id="datep" class="calc_inputs_block_input_date" name="date" />
                          </div>
                      </li>

                      <li class="calc_inputs_block">
                          <div class="calc_inputs_block_title">
                              Сумма вклада
                          </div>
                          <div class="calc_inputs_block_input">
                              <input type="text" class="calc_inputs_block_input_sumDeposit" name="sumDeposit">
                          </div>
                          <div class="calc_inputs_block_range">
                              <input type="range" min="1000" max="3000000" step="1000" class="sumDeposit_input">
                              <div class="calc_inputs_block_range_sum">
                                  <div class="calc_inputs_block_range_sum_min">
                                      1 тыс рублей
                                  </div>
                                  <div class="calc_inputs_block_range_sum_max">
                                      3 000 000
                                  </div>
                              </div>
                          </div>

                      </li>

                      <li class="calc_inputs_block">
                          <div class="calc_inputs_block_title">
                              Срок вклада
                          </div>
                          <div class="calc_inputs_block_input">
                              <select name="time" id="" class="calc_inputs_block_input_time">
                                  <option value="1">1 год</option>
                                  <option value="2">2 года</option>
                                  <option value="3">3 года</option>
                                  <option value="4">4 года</option>
                                  <option value="5">5 лет</option>
                              </select>
                          </div>
                      </li>

                      <li class="calc_inputs_block">
                          <div class="calc_inputs_block_title">
                              Пополнение вклада
                          </div>
                          <div class="calc_inputs_block_input">
                              <input type="radio" class="calc_inputs_block_input_replenishment" name="replenishment" value="no" checked id="replenishmentNo">
                              <label for="replenishmentNo">Нет</label>
                              <input type="radio" class="calc_inputs_block_input_replenishment" name="replenishment" value="yes" id="replenishmentYes">
                              <label for="replenishmentYes">Да</label>

                          </div>
                      </li>

                      <li class="calc_inputs_block">
                          <div class="calc_inputs_block_title">
                              Сумма пополнения вклада
                          </div>
                          <div class="calc_inputs_block_input">
                              <input type="text" class="calc_inputs_block_input_sumReplenishment" name="sumReplenishment">
                          </div>
                          <div class="calc_inputs_block_range">
                              <input type="range" min="1000" max="3000000" step="1000" class="sumReplenishment_input">
                              <div class="calc_inputs_block_range_sum">
                                  <div class="calc_inputs_block_range_sum_min">
                                      1 тыс рублей
                                  </div>
                                  <div class="calc_inputs_block_range_sum_max">
                                      3 000 000
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>

                  <button class="calc_btn">
                      Рассчитать
                  </button>

                  <div class="calc_result">

                  </div>
              </div>
          </div>
      </div>



      <footer class="footer">
          <div class="container">
              <ul class="footer_list">
                  <li class="footer_list_item">
                      <a class="footer_list_item-link" href='#'>Кредитные карты</a>
                  </li>
                  <li class="footer_list_item active">
                      <a class="footer_list_item-link" href='index.php'>Вклады</a>
                  </li>
                  <li class="footer_list_item">
                      <a class="footer_list_item-link" href='#'>Дебетовая карта</a>
                  </li>
                  <li class="footer_list_item">
                      <a class="footer_list_item-link" href='#'>Страхование</a>
                  </li>
                  <li class="footer_list_item">
                      <a class="footer_list_item-link" href='#'>Друзья</a>
                  </li>
                  <li class="footer_list_item">
                      <a class="footer_list_item-link" href='#'>Интернет-банк</a>
                  </li>
              </ul>
          </div>
      </footer>

      <script src="script.js"></script>
  </body>

  </html>
